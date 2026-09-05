# ADR 0013: Generation events — internal dispatcher for progress and customization

- **Status**: Accepted
- **Codified**: 2026-09

## Context

Two feature requests converge: [#252](https://github.com/janephp/janephp/issues/252) wants console progress (schema header, guessing/generating phases, output path, per-group counts, elapsed time); [#859](https://github.com/janephp/janephp/issues/859) wants listeners that receive the JSON schema property + guessed PHP entities and mutate them on the fly (custom docblock types like `positive-int`, psalm tags, custom methods, traits/extends). Everything both need is observable in the core flow: ChainGenerator owns the two phases (createContext = guessing, schemas × generators loop = generating); every artifact is a Generator\File with a `type` string (`model`, `normalizer`, `runtime`, `enum`, `validator`, `auth`, `client`, `Endpoint`, `Exception`); ClassGuess exposes the raw schema object; Property guesses are mutable; generated code is a PhpParser AST. Constraint: Jane::generate()/JaneOpenApi::generate() are used programmatically and must stay output-free — console I/O belongs to commands. No event-dispatcher dependency exists today and components ship standalone.

## Decision

1. **Internal, dependency-free dispatcher.** `Jane\Component\JsonSchema\Event\EventDispatcher` with `dispatch(object $event): object` and `addSubscriber(GenerationSubscriberInterface $subscriber): void`. Losing options: symfony/event-dispatcher (new hard require on standalone packages for one service), psr/event-dispatcher (still a new require + adapter ceremony); an adapter can be added later without breaking this API.
2. **Subscriber contract, symfony-style.** `getSubscribedEvents(): array<class-string, list<callable|string>>`; listeners receive the event as single argument. Listener order is subscription order; no priority system in v1.
3. **Event taxonomy.** Lifecycle events (readonly payloads): GenerationStarted/EndedEvent (registry, elapsed), SchemaStarted/EndedEvent, GuessingStarted/EndedEvent, GeneratingStarted/EndedEvent, FileGeneratedEvent (schema, file). Mutation events (final class, LIVE MUTABLE REFERENCES by design): PropertyGuessedEvent (schema, classGuess, property) — listeners may replace the type via Property::setType(), which flows into models AND normalizers; PropertyGeneratedEvent (schema, classGuess, property, Stmt\Property) — AST-level, model file only; ClassGeneratedEvent (schema, classGuess, Stmt\Class_) — add methods/traits/extends/psalm tags. Guidance: type changes go through PropertyGuessedEvent so normalizers stay consistent; AST events are model-file decoration only. Normalizer/endpoint/exception mutation events are out of scope.
4. **The dispatcher is a required dependency.** `Jane::build(array $options = [], EventDispatcher $dispatcher)` and `JaneOpenApi::build(array $options = [], EventDispatcher $dispatcher)` take it as a required second argument; Context requires it as third constructor param; ChainGenerator holds it as a protected property. Programmatic callers that need no listeners pass `new EventDispatcher()` (zero subscribers → no-op fast-path). Breaking change for programmatic callers, documented in the CHANGELOG; CLI interface and generated code are unchanged.
5. **Per-file events are explicit.** Generators dispatch FileGeneratedEvent next to each Schema::addFile() call (~20 sites) rather than hiding a callback inside Schema::addFile().
6. **Console owns rendering.** Both GenerateCommands always construct the dispatcher and attach a built-in Console\GenerationProgressSubscriber (SymfonyStyle) only when verbosity > quiet. Counts come from Schema::getFiles() grouped by File::getType(); `Endpoint`/`Exception` casing is normalized in the display layer only — type values never change.
7. **No `.jane` config option in v1.** Console users cannot register listeners yet (programmatic API only) — follow-up.
8. **Experimental status.** Event classes are public API but flagged experimental; shipped event constructor signatures are frozen, the event set may grow.

## Consequences

- Console feedback without polluting the core; generation semantics identical when no listeners are attached.
- #859 is delivered: listeners can alter guessed types and ASTs; throwing listeners abort generation via the existing GenerationFailedException wrapping (documented).
- Programmatic callers must construct a dispatcher (break, per repo BC policy there is no BC promise on these components).
- Dispatch is synchronous; OAI whitelist deferral means PropertyGuessedEvent may fire for classes later pruned by whitelisting (documented).
- A small dispatcher implementation is ours to maintain; PSR-14/symfony adapter possible later.

## Links

- [#252](https://github.com/janephp/janephp/issues/252) · [#859](https://github.com/janephp/janephp/issues/859)
- src/Component/JsonSchema/Event/*, src/Component/JsonSchema/Console/GenerationProgressSubscriber.php
- Touch points: src/Component/JsonSchema/Generator/ChainGenerator.php, src/Component/JsonSchema/Generator/Context/Context.php, src/Component/JsonSchema/Jane.php, src/Component/OpenApiCommon/JaneOpenApi.php
- Related: ADR 0005 (PHP floor), ADR 0009 (options), docs/contributing/breaking_changes.md
