<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AdditionalPropertiesGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\BinaryStringFormatGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\CustomStringFormatGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\DateGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\DateTimeGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\EnumGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ItemsGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\MultipleGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ReferenceGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\SimpleTypeGuesser;
use Jane\Component\OpenApiCommon\Naming\OperationNamingFactory;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class GuesserFactory
{
    public static function create(DenormalizerInterface $denormalizer, array $options = []): ChainGuesser
    {
        $naming = new Naming();
        $dateFormat = $options['full-date-format'] ?? 'Y-m-d';
        $outputDateTimeFormat = $options['date-format'] ?? \DateTimeInterface::RFC3339;
        $inputDateTimeFormat = $options['date-input-format'] ?? null;
        $datePreferInterface = $options['date-prefer-interface'] ?? null;
        $customStringFormatMapping = $options['custom-string-format-mapping'] ?? [];
        $operationNaming = OperationNamingFactory::create($options['operation-namings'] ?? []);

        $chainGuesser = new ChainGuesser();
        if ($options['enums-as-objects'] ?? false) {
            $chainGuesser->addGuesser(new EnumGuesser(JsonSchema::class, $naming));
        }
        $chainGuesser->addGuesser(new SecurityGuesser());
        $chainGuesser->addGuesser(new CustomStringFormatGuesser(JsonSchema::class, $customStringFormatMapping));
        $chainGuesser->addGuesser(new DateGuesser(JsonSchema::class, $dateFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new DateTimeGuesser(JsonSchema::class, $outputDateTimeFormat, $inputDateTimeFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new BinaryStringFormatGuesser(JsonSchema::class));
        $chainGuesser->addGuesser(new ReferenceGuesser($denormalizer, JsonSchema::class));
        $chainGuesser->addGuesser(new OpenApiGuesser($denormalizer, $operationNaming));
        $chainGuesser->addGuesser(new SchemaGuesser($denormalizer, $naming));
        $chainGuesser->addGuesser(new AdditionalPropertiesGuesser(JsonSchema::class));
        $chainGuesser->addGuesser(new AllOfGuesser($denormalizer, $naming, JsonSchema::class));
        $chainGuesser->addGuesser(new AnyOfReferencefGuesser($denormalizer, $naming, JsonSchema::class));
        $chainGuesser->addGuesser(new OneOfReferencefGuesser($denormalizer, $naming, JsonSchema::class));
        $chainGuesser->addGuesser(new ArrayGuesser(JsonSchema::class));
        $chainGuesser->addGuesser(new ItemsGuesser(JsonSchema::class));
        $chainGuesser->addGuesser(new SimpleTypeGuesser(JsonSchema::class));
        $chainGuesser->addGuesser(new MultipleGuesser(JsonSchema::class));

        return $chainGuesser;
    }
}
