<?php

namespace Jane\Component\JsonSchema\Console;

use Jane\Component\JsonSchema\Event\GeneratingEndedEvent;
use Jane\Component\JsonSchema\Event\GeneratingStartedEvent;
use Jane\Component\JsonSchema\Event\GenerationEndedEvent;
use Jane\Component\JsonSchema\Event\GenerationStartedEvent;
use Jane\Component\JsonSchema\Event\GuessingEndedEvent;
use Jane\Component\JsonSchema\Event\GuessingStartedEvent;
use Jane\Component\JsonSchema\Event\SchemaStartedEvent;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Renders console progress for a generation run: schema header, guessing /
 * generating phases and the final per-file-type summary.
 *
 * @experimental Part of the experimental generation events API (see ADR 0013)
 */
final class GenerationProgressSubscriber implements EventSubscriberInterface
{
    /** Display label per File::getType() value — casing of `Endpoint` / `Exception` is normalized here only */
    private const TYPE_LABELS = [
        'model' => 'Models',
        'enum' => 'Enums',
        'normalizer' => 'Normalizers',
        'validator' => 'Validators',
        'runtime' => 'Runtime',
        'auth' => 'Auth',
        'client' => 'Client',
        'Endpoint' => 'Endpoints',
        'Exception' => 'Exceptions',
    ];

    private float $guessingStartedAt = 0.0;
    private float $guessingDuration = 0.0;
    private float $generatingStartedAt = 0.0;
    private float $generatingDuration = 0.0;

    public function __construct(
        private readonly SymfonyStyle $io,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            GenerationStartedEvent::class => ['onGenerationStarted'],
            SchemaStartedEvent::class => ['onSchemaStarted'],
            GuessingStartedEvent::class => ['onGuessingStarted'],
            GuessingEndedEvent::class => ['onGuessingEnded'],
            GeneratingStartedEvent::class => ['onGeneratingStarted'],
            GeneratingEndedEvent::class => ['onGeneratingEnded'],
            GenerationEndedEvent::class => ['onGenerationEnded'],
        ];
    }

    public function onGenerationStarted(GenerationStartedEvent $event): void
    {
        $this->guessingDuration = 0.0;
        $this->generatingDuration = 0.0;
    }

    public function onSchemaStarted(SchemaStartedEvent $event): void
    {
        $this->io->text(\sprintf('Generating for schema `%s`', basename($event->getSchema()->getOrigin())));
        $this->io->text(\sprintf('Output: `%s/`', basename($event->getSchema()->getDirectory())));
    }

    public function onGuessingStarted(GuessingStartedEvent $event): void
    {
        $this->guessingStartedAt = hrtime(true);
    }

    public function onGuessingEnded(GuessingEndedEvent $event): void
    {
        $this->guessingDuration = (hrtime(true) - $this->guessingStartedAt) / 1e9;
    }

    public function onGeneratingStarted(GeneratingStartedEvent $event): void
    {
        $this->generatingStartedAt = hrtime(true);
    }

    public function onGeneratingEnded(GeneratingEndedEvent $event): void
    {
        $this->generatingDuration += (hrtime(true) - $this->generatingStartedAt) / 1e9;
    }

    public function onGenerationEnded(GenerationEndedEvent $event): void
    {
        $this->io->text(\sprintf('➜ Guessing… done (%.2fs)', $this->guessingDuration));
        $this->io->text(\sprintf('➜ Generating… done (%.2fs)', $this->generatingDuration));

        $counts = [];
        foreach ($event->getRegistry()->getSchemas() as $schema) {
            foreach ($schema->getFiles() as $file) {
                $type = $file->getType();
                $counts[$type] = ($counts[$type] ?? 0) + 1;
            }
        }

        $total = array_sum($counts);
        $this->io->text(\sprintf('➜ %d file%s written', $total, 1 === $total ? '' : 's'));

        foreach (self::TYPE_LABELS as $type => $label) {
            if (\array_key_exists($type, $counts)) {
                $this->io->text(\sprintf('    • %d %s', $counts[$type], $label));
            }
        }

        $this->io->success(\sprintf('Done in %.2fs', $event->getElapsedSeconds()));
    }
}
