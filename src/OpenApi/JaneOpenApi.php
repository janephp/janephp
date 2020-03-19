<?php

namespace Jane\OpenApi;

use Jane\OpenApi\Generator\AuthenticationGenerator;
use Jane\OpenApiCommon\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\OpenApi\Generator\GeneratorFactory;
use Jane\OpenApi\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi\SchemaParser\SchemaParser;
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
        $normGenerator = new NormalizerGenerator($naming, $parser, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false, $options['normalizer-force-null-when-nullable'] ?? true);
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
}
