<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Jane\OpenApi2\JsonSchema\Model\Schema;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\AdditionalPropertiesGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\DateGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\DateTimeGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\ItemsGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\MultipleGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\ReferenceGuesser;
use Jane\OpenApiCommon\Guesser\OpenApiSchema\SimpleTypeGuesser;
use Symfony\Component\Serializer\SerializerInterface;

class GuesserFactory
{
    public static function create(SerializerInterface $serializer, array $options = []): ChainGuesser
    {
        $naming = new Naming();
        $dateFormat = isset($options['full-date-format']) ? $options['full-date-format'] : 'Y-m-d';
        $outputDateTimeFormat = isset($options['date-format']) ? $options['date-format'] : \DateTime::RFC3339;
        $inputDateTimeFormat = isset($options['date-input-format']) ? $options['date-input-format'] : null;
        $datePreferInterface = isset($options['date-prefer-interface']) ? $options['date-prefer-interface'] : null;

        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new SecurityGuesser());
        $chainGuesser->addGuesser(new DateGuesser(Schema::class, $dateFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new DateTimeGuesser(Schema::class, $outputDateTimeFormat, $inputDateTimeFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new ReferenceGuesser($serializer, Schema::class));
        $chainGuesser->addGuesser(new OpenApiGuesser());
        $chainGuesser->addGuesser(new SchemaGuesser($naming, $serializer));
        $chainGuesser->addGuesser(new AdditionalPropertiesGuesser(Schema::class));
        $chainGuesser->addGuesser(new AllOfGuesser($serializer, $naming, Schema::class));
        $chainGuesser->addGuesser(new ArrayGuesser(Schema::class));
        $chainGuesser->addGuesser(new ItemsGuesser(Schema::class));
        $chainGuesser->addGuesser(new SimpleTypeGuesser(Schema::class, ['boolean', 'integer', 'number', 'string']));
        $chainGuesser->addGuesser(new MultipleGuesser(Schema::class, ['null']));

        return $chainGuesser;
    }
}
