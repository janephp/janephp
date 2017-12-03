<?php

namespace Jane\JsonSchema\Guesser\Guess;

use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class ClassGuess
{
    /**
     * @var string Name of the class
     */
    private $name;

    /**
     * @var array Options for generation
     */
    private $options;

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

    public function __construct($object, $reference, $name, $options = [])
    {
        $this->name = $name;
        $this->object = $object;
        $this->options = $options;
        $this->reference = $reference;
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
