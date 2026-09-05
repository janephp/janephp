<?php

namespace Jane\Component\JsonSchema\Console;

use Jane\Component\JsonSchema\Event\GenerationEndedEvent;
use Jane\Component\JsonSchema\Event\GeneratingEndedEvent;
use Jane\Component\JsonSchema\Event\GenerationSubscriberInterface;
use Jane\Component\JsonSchema\Event\GuessingEndedEvent;
use Jane\Component\JsonSchema\Event\SchemaStartedEvent;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * Renders console progress for a generation run: schema header, guessing /
 * generating phases and the final per-file-type summary.
 *
 * @experimental Part of the experimental generation events API (see ADR 0013)
 */
final class GenerationProgressSubscriber implements GenerationSubscriberInterface
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

    public function __construct(
        private readonly SymfonyStyle $io,
    ) {
    }

    public function getSubscribedEvents(): array
    {
        return [
            SchemaStartedEvent::class => ['onSchemaStarted'],
            GuessingEndedEvent::class => ['onGuessingEnded'],
            GeneratingEndedEvent::class => ['onGeneratingEnded'],
            GenerationEndedEvent::class => ['onGenerationEnded'],
        ];
    }

    public function onSchemaStarted(SchemaStartedEvent $event): void
    {
        $this->io->text(\sprintf('Generating for schema <info>%s</info>', $event->getSchema()->getOrigin()));
        $this->io->text(\sprintf('Output: <info>%s</info>', $event->getSchema()->getDirectory()));
    }

    public function onGuessingEnded(GuessingEndedEvent $event): void
    {
        $this->io->text('✔️ Guessing');
    }

    public function onGeneratingEnded(GeneratingEndedEvent $event): void
    {
        $this->io->text('✔️ Generating');
    }

    public function onGenerationEnded(GenerationEndedEvent $event): void
    {
        $counts = [];
        $hasReferenceNormalizer = false;

        foreach ($event->getRegistry()->getSchemas() as $schema) {
            foreach ($schema->getFiles() as $file) {
                $type = $file->getType();
                $counts[$type] = ($counts[$type] ?? 0) + 1;

                if ('runtime' === $type && \str_ends_with($file->getFilename(), 'ReferenceNormalizer.php')) {
                    $hasReferenceNormalizer = true;
                }
            }
        }

        foreach (self::TYPE_LABELS as $type => $label) {
            if (!\array_key_exists($type, $counts)) {
                continue;
            }

            if ('normalizer' === $type) {
                $this->io->text($this->normalizerSummary($counts['normalizer'], $hasReferenceNormalizer));

                continue;
            }

            $this->io->text(\sprintf('* %d %s', $counts[$type], $label));
        }

        $this->io->success(\sprintf('Done in %.2fs', $event->getElapsedSeconds()));
    }

    private function normalizerSummary(int $count, bool $hasReferenceNormalizer): string
    {
        if ($hasReferenceNormalizer) {
            // JaneObjectNormalizer is already part of the normalizer file count;
            // per-model normalizers are followed by the two shared normalizers.
            $perModelNormalizers = $count - 1;

            return \sprintf(
                '* %s Normalizers (JaneObjectNormalizer + ReferenceNormalizer)',
                $perModelNormalizers > 0 ? $perModelNormalizers . '+2' : '2'
            );
        }

        return \sprintf('* %d Normalizers (incl. JaneObjectNormalizer)', $count);
    }
}
