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
    protected const NORMALIZER_FACTORY_CLASS = JsonSchema\Normalizer\NormalizerFactory::class;

    public static function build(array $options = [])
    {
        if ($options['client'] === self::CLIENT_HTTPLUG) {
            @trigger_error(sprintf('Generating "%s" client is deprecated, use the "%s" in the "client" option', self::CLIENT_HTTPLUG, self::CLIENT_PSR18));
        }

        $serializer = self::buildSerializer();
        $schemaParser = new SchemaParser($serializer);
        $generators = GeneratorFactory::build($serializer, $options);
        $naming = new Naming();
        $parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $modelGenerator = new ModelGenerator($naming, $parser);
        $normGenerator = new NormalizerGenerator($naming, $parser, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false);
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

        foreach ($generators as $generator) {
            $self->addGenerator($generator);
        }

        return $self;
    }
}
