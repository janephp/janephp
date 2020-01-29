<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\ChainGuesser;
use Symfony\Component\Serializer\SerializerInterface;

class GuesserFactory
{
    public static function create(SerializerInterface $serializer, array $options = []): ChainGuesser
    {
        $naming = new Naming();
        $dateFormat = isset($options['full-date-format']) ? $options['full-date-format'] : 'Y-m-d';
        $dateTimeFormat = isset($options['date-format']) ? $options['date-format'] : \DateTime::RFC3339;

        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new SecurityGuesser());
        $chainGuesser->addGuesser(new DateGuesser($dateFormat));
        $chainGuesser->addGuesser(new DateTimeGuesser($dateTimeFormat));
        $chainGuesser->addGuesser(new ReferenceGuesser($serializer));
        $chainGuesser->addGuesser(new OpenApiGuesser());
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
