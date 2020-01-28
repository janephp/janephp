<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\ChainGuesser;
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
        $chainGuesser->addGuesser(new DateGuesser($dateFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new DateTimeGuesser($outputDateTimeFormat, $inputDateTimeFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new ReferenceGuesser($serializer));
        $chainGuesser->addGuesser(new OpenApiGuesser($serializer));
        $chainGuesser->addGuesser(new SchemaGuesser($naming, $serializer));
        $chainGuesser->addGuesser(new AdditionalPropertiesGuesser());
        $chainGuesser->addGuesser(new AllOfGuesser($serializer, $naming));
        $chainGuesser->addGuesser(new ArrayGuesser());
        $chainGuesser->addGuesser(new ItemsGuesser());
        $chainGuesser->addGuesser(new SimpleTypeGuesser());
        $chainGuesser->addGuesser(new MultipleGuesser());

        return $chainGuesser;
    }
}
