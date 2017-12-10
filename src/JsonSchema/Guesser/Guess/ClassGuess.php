<?php

namespace Jane\JsonSchema\Guesser\Guess;

class ClassGuess
{
    /**
     * @var string Name of the class
     */
    private $name;

    /**
     * @var mixed Object link to the generation
     */
    private $object;

    /**
     * @var Property[]
     */
    private $properties;

    /**
     * @var string Reference of the class
     */
    private $reference;

    private $constraints = [];

    public function __construct($object, $reference, $name)
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
    }

    /**
     * @return ConstraintGuess[]
     */
    public function getConstraints(): array
    {
        return $this->constraints;
    }

    /**
     * @param ConstraintGuess[] $constraints
     */
    public function setConstraints($constraints): void
    {
        $this->constraints = $constraints;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return Property[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param Property[] $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }
}
