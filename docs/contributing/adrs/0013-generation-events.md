# ADR 0013: Generation events — Symfony EventDispatcher for progress and customization

- **Status**: Accepted
- **Codified**: 2026-09

## Context

Two feature requests converge: [#252](https://github.com/janephp/janephp/issues/252) wants console progress (schema header, guessing/generating phases, output path, per-group counts, elapsed time); [#859](https://github.com/janephp/janephp/issues/859) wants listeners that receive the JSON schema property + guessed PHP entities and mutate them on the fly (custom docblock types like `positive-int`, psalm tags, custom methods, traits/extends). Everything both need is observable in the core flow: ChainGenerator owns the two phases (createContext = guessing, schemas × generators loop = generating); every artifact is a Generator\File with a `type` string (`model`, `normalizer`, `runtime`, `enum`, `validator`, `auth`, `client`, `Endpoint`, `Exception`); ClassGuess exposes the raw schema object; Property guesses are mutable; generated code is a PhpParser AST. Constraint: Jane::generate()/JaneOpenApi::generate() are used programmatically and must stay output-free — console I/O belongs to commands. No event-dispatcher dependency exists today and components ship standalone.

## Decision

1. **Symfony EventDispatcher.** Generation events are dispatched through `Symfony\Component\EventDispatcher\EventDispatcher`; the injected type is its interface `Symfony\Contracts\EventDispatcher\EventDispatcherInterface`. Events are plain final classes (no base class to extend): Symfony derives the event name from the class. Losing options: a hand-rolled dispatcher (had been shipped first, per the original version of this record — replaced on review because it was ours to maintain for zero ecosystem benefit: no profiler/TraceableEventDispatcher, no priorities, no PSR-14 interop), PSR-14 only (no listener registration contract, everyone re-invents subscription). `symfony/event-dispatcher` joins the other symfony packages (`console`, `serializer`, ...) as a plain require of the JsonSchema and OpenApiCommon components — no adapter needed, and PSR-14 interop remains possible later through `psr/event-dispatcher`.
2. **Subscriber contract.** `Symfony\Component\EventDispatcher\EventSubscriberInterface` (static `getSubscribedEvents()`): the map binds event classes to method names on the subscriber (Symfony's `[method, priority]` shapes apply); arbitrary callables can be attached with `EventDispatcher::addListener()`. Listeners receive the event as single argument. Symfony priorities are available but unused in v1 — shipped listeners stay at priority 0, so order is registration order (stable for equal priorities).
3. **Event taxonomy.** Lifecycle events (readonly payloads): GenerationStarted/EndedEvent (registry, elapsed), SchemaStarted/EndedEvent, GuessingStarted/EndedEvent, GeneratingStarted/EndedEvent, FileGeneratedEvent (schema, file). Mutation events (final class, LIVE MUTABLE REFERENCES by design): PropertyGuessedEvent (schema, classGuess, property) — listeners may replace the type via Property::setType(), which flows into models AND normalizers; PropertyGeneratedEvent (schema, classGuess, property, Stmt\Property) — AST-level, model file only; ClassGeneratedEvent (schema, classGuess, Stmt\Class_) — add methods/traits/extends/psalm tags. Guidance: type changes go through PropertyGuessedEvent so normalizers stay consistent; AST events are model-file decoration only. Normalizer/endpoint/exception mutation events are out of scope.
4. **The dispatcher is an optional dependency.** `Jane::build(array $options = [], ?EventDispatcherInterface $dispatcher = null)` and `JaneOpenApi::build(array $options = [], ?EventDispatcherInterface $dispatcher = null)` take it as an optional second argument (a required parameter after the defaulted `$options` would trigger PHP 8.0+'s "optional before required" deprecation at every class load). When omitted, a listener-less `Symfony\Component\EventDispatcher\EventDispatcher` is created. Context takes the resolved dispatcher as third constructor param; ChainGenerator holds it as a protected property. Customization is programmatic: pass your own dispatcher with subscribers to `build()`. CLI interface and generated code are unchanged.
5. **Per-file events are explicit.** Generators dispatch FileGeneratedEvent next to each Schema::addFile() call (~20 sites) rather than hiding a callback inside Schema::addFile().
6. **Console owns rendering.** Both GenerateCommands always construct the dispatcher and attach a built-in Console\GenerationProgressSubscriber (SymfonyStyle) only when verbosity > quiet. Counts come from Schema::getFiles() grouped by File::getType(); `Endpoint`/`Exception` casing is normalized in the display layer only — type values never change.
7. **No `.jane` config option in v1.** Console users cannot register listeners yet (programmatic API only) — follow-up.
8. **Experimental status.** Event classes are public API but flagged experimental; shipped event constructor signatures are frozen, the event set may grow.

## Consequences

- Console feedback without polluting the core; generation semantics identical when no listeners are attached (dispatching into a listener-less Symfony dispatcher is a trivial no-op).
- #859 is delivered: listeners can alter guessed types and ASTs; throwing listeners abort generation via the existing GenerationFailedException wrapping (documented).
- Builds without a dispatcher get an internal listener-less Symfony dispatcher; passing one is purely additive for programmatic callers (per repo BC policy the generation components carry no BC promise anyway).
- Dispatch is synchronous; OAI whitelist deferral means PropertyGuessedEvent may fire for classes later pruned by whitelisting (documented).
- `jane-php/json-schema` and `jane-php/open-api-common` now require `symfony/event-dispatcher`, one more shared symfony requirement alongside `console`, `serializer`, ...; PSR-14 interop possible later via `psr/event-dispatcher`.

## Links

- [#252](https://github.com/janephp/janephp/issues/252) · [#859](https://github.com/janephp/janephp/issues/859)
- src/Component/JsonSchema/Event/*, src/Component/JsonSchema/Console/GenerationProgressSubscriber.php
- Touch points: src/Component/JsonSchema/Generator/ChainGenerator.php, src/Component/JsonSchema/Generator/Context/Context.php, src/Component/JsonSchema/Jane.php, src/Component/OpenApiCommon/JaneOpenApi.php
- Related: ADR 0005 (PHP floor), ADR 0009 (options), docs/contributing/breaking_changes.md
