<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesser;
use Jane\Component\JsonSchema\Guesser\ChainGuesserFactory;
use Jane\Component\JsonSchema\Tools\JsonSchemaMerger;
use Symfony\Component\Serializer\SerializerInterface;

class JsonSchemaGuesserFactory
{
    public static function create(SerializerInterface $serializer, array $options = []): ChainGuesser
    {
        $chainGuesser = ChainGuesserFactory::create($serializer);
        $naming = new Naming();
        $merger = new JsonSchemaMerger();
        $dateFormat = isset($options['full-date-format']) ? $options['full-date-format'] : 'Y-m-d';
        $outputDateTimeFormat = isset($options['date-format']) ? $options['date-format'] : \DateTime::RFC3339;
        $inputDateTimeFormat = isset($options['date-input-format']) ? $options['date-input-format'] : null;
        $datePreferInterface = isset($options['date-prefer-interface']) ? $options['date-prefer-interface'] : null;

        $chainGuesser->addGuesser(new DateGuesser($dateFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new DateTimeGuesser($outputDateTimeFormat, $inputDateTimeFormat, $datePreferInterface));
        $chainGuesser->addGuesser(new SimpleTypeGuesser());
        $chainGuesser->addGuesser(new ArrayGuesser());
        $chainGuesser->addGuesser(new MultipleGuesser());
        $chainGuesser->addGuesser(new ObjectGuesser($naming, $serializer));
        $chainGuesser->addGuesser(new DefinitionGuesser());
        $chainGuesser->addGuesser(new ItemsGuesser());
        $chainGuesser->addGuesser(new AnyOfGuesser());
        $chainGuesser->addGuesser(new AllOfGuesser($serializer, $naming));
        $chainGuesser->addGuesser(new OneOfGuesser());
        $chainGuesser->addGuesser(new ObjectOneOfGuesser($merger, $serializer));
        $chainGuesser->addGuesser(new PatternPropertiesGuesser());
        $chainGuesser->addGuesser(new AdditionalItemsGuesser());
        $chainGuesser->addGuesser(new AdditionalPropertiesGuesser());

        return $chainGuesser;
    }
}
