<?php

namespace Jane\Component\OpenApi3\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AdditionalPropertiesGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\AllOfGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\CustomStringFormatGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\DateGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\DateTimeGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ItemsGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\MultipleGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\ReferenceGuesser;
use Jane\Component\OpenApiCommon\Guesser\OpenApiSchema\SimpleTypeGuesser;
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

        $customStringFormatMapping = isset($options['custom-string-format-mapping']) ? $options['custom-string-format-mapping'] : [];

        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new SecurityGuesser());
        $chainGuesser->addGuesser(new CustomStringFormatGuesser(Schema::class, $customStringFormatMapping));
        $chainGuesser->addGuesser(new DateGuesser(Schema::class, $dateFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new DateTimeGuesser(Schema::class, $outputDateTimeFormat, $inputDateTimeFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new ReferenceGuesser($serializer, Schema::class));
        $chainGuesser->addGuesser(new OpenApiGuesser($serializer));
        $chainGuesser->addGuesser(new SchemaGuesser($naming, $serializer));
        $chainGuesser->addGuesser(new AdditionalPropertiesGuesser(Schema::class));
        $chainGuesser->addGuesser(new AllOfGuesser($serializer, $naming, Schema::class));
        $chainGuesser->addGuesser(new AnyOfReferencefGuesser($serializer, $naming, Schema::class));
        $chainGuesser->addGuesser(new ArrayGuesser(Schema::class));
        $chainGuesser->addGuesser(new ItemsGuesser(Schema::class));
        $chainGuesser->addGuesser(new SimpleTypeGuesser(Schema::class));
        $chainGuesser->addGuesser(new MultipleGuesser(Schema::class));

        return $chainGuesser;
    }
}
