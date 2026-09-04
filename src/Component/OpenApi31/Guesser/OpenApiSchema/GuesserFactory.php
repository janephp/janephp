<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Generator\Options;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Guesser\Validator\ChainValidatorFactory;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AdditionalPropertiesGuesser;
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
    public static function create(DenormalizerInterface $denormalizer, array $options = [], ?ChainValidatorFactory $chainValidatorFactory = null): ChainGuesser
    {
        $options = Options::fromArray($options);
        $naming = new Naming();
        $dateFormat = $options->fullDateFormat;
        $outputDateTimeFormat = $options->dateFormat;
        $inputDateTimeFormat = $options->dateInputFormat;
        $datePreferInterface = $options->datePreferInterface;
        $customStringFormatMapping = $options->customStringFormatMapping;
        $operationNaming = OperationNamingFactory::create($options->operationNamings);
        $defaultAdditionalProperties = $options->defaultAdditionalProperties;
        $defaultFetchMode = $options->defaultFetchMode;

        $chainGuesser = new ChainGuesser();
        if ($options->enumsAsObjects) {
            $chainGuesser->addGuesser(new EnumGuesser(Schema::class, $naming));
        }
        $chainGuesser->addGuesser(new SecurityGuesser());
        $chainGuesser->addGuesser(new CustomStringFormatGuesser(Schema::class, $customStringFormatMapping));
        $chainGuesser->addGuesser(new DateGuesser(Schema::class, $dateFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new DateTimeGuesser(Schema::class, $outputDateTimeFormat, $inputDateTimeFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new BinaryStringFormatGuesser(Schema::class));
        $chainGuesser->addGuesser(new ReferenceGuesser($denormalizer, Schema::class));
        $chainGuesser->addGuesser(new DollarRefGuesser($denormalizer, Schema::class));
        $chainGuesser->addGuesser(new OpenApiGuesser($denormalizer, $operationNaming, $defaultFetchMode));
        $chainGuesser->addGuesser(new SchemaGuesser($denormalizer, $naming, $defaultAdditionalProperties, $chainValidatorFactory));
        $chainGuesser->addGuesser(new AdditionalPropertiesGuesser(Schema::class, $defaultAdditionalProperties));
        $chainGuesser->addGuesser(new AllOfGuesser($denormalizer, $naming, Schema::class, $defaultAdditionalProperties));
        $chainGuesser->addGuesser(new AnyOfReferenceGuesser($denormalizer, $naming, Schema::class));
        $chainGuesser->addGuesser(new OneOfReferenceGuesser($denormalizer, $naming, Schema::class));
        $chainGuesser->addGuesser(new ArrayGuesser(Schema::class));
        $chainGuesser->addGuesser(new ItemsGuesser(Schema::class));
        $chainGuesser->addGuesser(new SimpleTypeGuesser(Schema::class));
        $chainGuesser->addGuesser(new MultipleGuesser(Schema::class));

        return $chainGuesser;
    }
}
