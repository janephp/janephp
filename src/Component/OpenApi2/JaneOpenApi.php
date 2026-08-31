<?php

namespace Jane\Component\OpenApi2;

use Jane\Component\JsonSchema\Generator\EnumGenerator;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\Options;
use Jane\Component\JsonSchema\Generator\ValidatorGenerator;
use Jane\Component\JsonSchema\Guesser\Validator\ChainValidatorFactory;
use Jane\Component\OpenApi2\Generator\EndpointGenerator;
use Jane\Component\OpenApi2\Generator\GeneratorFactory;
use Jane\Component\OpenApi2\Guesser\OpenApiSchema\GuesserFactory;
use Jane\Component\OpenApi2\JsonSchema\Normalizer\JaneObjectNormalizer;
use Jane\Component\OpenApi2\SchemaParser\SchemaParser;
use Jane\Component\OpenApiCommon\Generator\AuthenticationGenerator;
use Jane\Component\OpenApiCommon\Generator\ModelGenerator;
use Jane\Component\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\Component\OpenApiCommon\Generator\RuntimeGenerator;
use Jane\Component\OpenApiCommon\JaneOpenApi as CommonJaneOpenApi;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class JaneOpenApi extends CommonJaneOpenApi
{
    protected const OBJECT_NORMALIZER_CLASS = JaneObjectNormalizer::class;
    protected const WHITELIST_FETCH_CLASS = WhitelistedSchema::class;

    protected static function create(array $options = [], ?ChainValidatorFactory $chainValidatorFactory = null): CommonJaneOpenApi
    {
        $serializer = self::buildSerializer();

        return new self(
            SchemaParser::class,
            GuesserFactory::create($serializer, $options, $chainValidatorFactory),
            $options['strict'] ?? true
        );
    }

    protected static function generators(DenormalizerInterface $denormalizer, array $options = []): \Generator
    {
        $options = Options::fromArray($options);
        $naming = new Naming();
        $parser = (new ParserFactory())->createForHostVersion();

        yield new ModelGenerator($naming, $parser);
        yield new NormalizerGenerator($naming, $parser, $options->reference, $options->useCacheableSupportsMethod ?? false, $options->skipNullValues, $options->skipRequiredFields, $options->validation, $options->includeNullValue);
        yield new AuthenticationGenerator();
        $operationNaming = OperationNamingFactory::create($options->operationNamings);
        yield GeneratorFactory::build($denormalizer, $options->endpointGenerator ?? EndpointGenerator::class, $operationNaming);
        yield new RuntimeGenerator($naming, $parser);
        if ($options->validation) {
            yield new ValidatorGenerator($naming, $options->defaultAdditionalProperties);
        }
        if ($options->enumsAsObjects) {
            yield new EnumGenerator();
        }
    }
}
