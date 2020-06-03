<?php

namespace Jane\OpenApi3;

use Jane\OpenApi3\Generator\Psr7EndpointGenerator;
use Jane\OpenApiCommon\Generator\AuthenticationGenerator;
use Jane\OpenApiCommon\Generator\ModelGenerator;
use Jane\JsonSchema\Generator\Naming;
use Jane\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\OpenApi3\Generator\GeneratorFactory;
use Jane\OpenApi3\Guesser\OpenApiSchema\GuesserFactory;
use Jane\OpenApi3\SchemaParser\SchemaParser;
use PhpParser\ParserFactory;
use Jane\OpenApiCommon\JaneOpenApi as CommonJaneOpenApi;

class JaneOpenApi extends CommonJaneOpenApi
{
    protected const OBJECT_NORMALIZER_CLASS = JsonSchema\Normalizer\JaneObjectNormalizer::class;
    protected const WHITELIST_FETCH_CLASS = WhitelistedSchema::class;

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
        $self->addGenerator(GeneratorFactory::build($serializer, $options['endpoint-generator'] ?: Psr7EndpointGenerator::class));

        return $self;
    }
}
