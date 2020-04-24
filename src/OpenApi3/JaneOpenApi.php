<?php

namespace Jane\OpenApi3;

use Jane\OpenApi3\Generator\AuthenticationGenerator;
use Jane\OpenApiCommon\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\OpenApi3\Generator\GeneratorFactory;
use Jane\OpenApi3\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi3\SchemaParser\SchemaParser;
use Jane\JsonSchema\Registry;
use Jane\OpenApiCommon\Registry as OpenApiRegistry;
use Jane\OpenApiCommon\Schema;
use PhpParser\ParserFactory;
use Jane\OpenApiCommon\JaneOpenApi as CommonJaneOpenApi;

class JaneOpenApi extends CommonJaneOpenApi
{
    protected const OBJECT_NORMALIZER_CLASS = JsonSchema\Normalizer\JaneObjectNormalizer::class;

    public static function build(array $options = [])
    {
        $serializer = self::buildSerializer();
        $schemaParser = new SchemaParser($serializer);
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $modelGenerator = new ModelGenerator($naming, $parser);
        $normGenerator = new NormalizerGenerator($naming, $parser, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false, $options['skip-null-values'] ?? true);
        $authGenerator = new AuthenticationGenerator($naming);

        $self = new self(
            $schemaParser,
            GuesserFactory::create($serializer, $options),
            $naming,
            $options['strict'] ?? true
        );

        $self->addGenerator($modelGenerator);
        $self->addGenerator($normGenerator);
        $self->addGenerator($authGenerator);
        $self->addGenerator(GeneratorFactory::build($serializer));

        return $self;
    }

    /**
     * @param OpenApiRegistry $registry
     */
    protected function whitelistFetch(Schema $schema, Registry $registry): void
    {
        $whitelistedSchema = new WhitelistedSchema($schema, self::buildSerializer());

        foreach ($schema->getOperations() as $operation) {
            $whitelistedSchema->addOperationRelations($operation, $registry);
        }

        foreach ($schema->getClasses() as $class) {
            if (!$schema->needsRelation($class->getName())) {
                $schema->removeClass($class->getReference());
            }
        }
    }
}
