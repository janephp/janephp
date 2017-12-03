<?php

namespace Jane\JsonSchema\Guesser\Guess;

class Property
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Type
     */
    private $type;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var mixed
     */
    private $object;

    /**
     * @var bool
     */
    private $nullable;

    public function __construct($object, $name, $reference, $nullable = false, $type = null)
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
        $this->nullable = $nullable;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Return name of the property.
     *
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
     * Whether the property is nullable or not.
     *
     * @return bool
     */
    public function isNullable()
    {
        return $this->nullable;
    }

    /**
     * Return type of the property.
     *
     * @return Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param Type $type
     */
    public function setType(Type $type)
    {
        $this->type = $type;
    }
}
