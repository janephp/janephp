<?php

namespace Jane\Component\OpenApi31;

use Jane\Component\JsonSchema\Generator\EnumGenerator;
use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\ValidatorGenerator;
use Jane\Component\JsonSchema\JsonSchema\Normalizer\JsonSchemaNormalizer;
use Jane\Component\OpenApi31\Generator\EndpointGenerator;
use Jane\Component\OpenApi31\Generator\GeneratorFactory;
use Jane\Component\OpenApi31\Guesser\OpenApiSchema\GuesserFactory;
use Jane\Component\OpenApi31\Normalizer\SchemaDenormalizer;
use Jane\Component\OpenApi31\Normalizer\SecuritySchemeDenormalizer;
use Jane\Component\OpenApi31\SchemaParser\SchemaParser;
use Jane\Component\OpenApiCommon\Generator\AuthenticationGenerator;
use Jane\Component\OpenApiCommon\Generator\ModelGenerator;
use Jane\Component\OpenApiCommon\Generator\NormalizerGenerator;
use Jane\Component\OpenApiCommon\Generator\RuntimeGenerator;
use Jane\Component\OpenApiCommon\JaneOpenApi as CommonJaneOpenApi;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\YamlEncoder;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

class JaneOpenApi extends CommonJaneOpenApi
{
    protected const OBJECT_NORMALIZER_CLASS = JsonSchema\Normalizer\JaneObjectNormalizer::class;
    protected const WHITELIST_FETCH_CLASS = WhitelistedSchema::class;

    protected static function create(array $options = []): CommonJaneOpenApi
    {
        $serializer = self::buildSerializer();

        return new self(
            SchemaParser::class,
            GuesserFactory::create($serializer, $options),
            $options['strict'] ?? true
        );
    }

    protected static function generators(DenormalizerInterface $denormalizer, array $options = []): \Generator
    {
        $naming = new Naming();
        $parser = (new ParserFactory())->createForHostVersion();

        yield new ModelGenerator($naming, $parser);
        yield new NormalizerGenerator($naming, $parser, $options['reference'] ?? false, $options['use-cacheable-supports-method'] ?? false, $options['skip-null-values'] ?? true, $options['skip-required-fields'] ?? false, $options['validation'] ?? false, $options['include-null-value'] ?? true);
        yield new AuthenticationGenerator();
        $operationNaming = OperationNamingFactory::create($options['operation-namings'] ?? []);
        yield GeneratorFactory::build($denormalizer, $options['endpoint-generator'] ?: EndpointGenerator::class, $operationNaming);
        yield new RuntimeGenerator($naming, $parser);
        if ($options['validation'] ?? false) {
            yield new ValidatorGenerator($naming, $options['default-additional-properties'] ?? null);
        }
        if ($options['enums-as-objects'] ?? false) {
            yield new EnumGenerator();
        }
    }

    public static function buildSerializer(): SerializerInterface|DenormalizerInterface|NormalizerInterface
    {
        $encoders = [
            new JsonEncoder(new JsonEncode([JsonEncode::OPTIONS => \JSON_UNESCAPED_SLASHES]), new JsonDecode()),
            new YamlEncoder(new Dumper(), new Parser()),
        ];

        return new Serializer([
            new SchemaDenormalizer(),
            new SecuritySchemeDenormalizer(),
            new JsonSchemaNormalizer(),
            new JsonSchema\Normalizer\JaneObjectNormalizer(),
        ], $encoders);
    }
}
