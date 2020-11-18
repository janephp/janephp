<?php

namespace PicturePark\API\Model;

class FieldOverwriteBase
{
    /**
     * The field's ID whose information need to be overwritten.
     *
     * @var string|null
     */
    protected $id;
    /**
    * Defines if a field value is mandatory or not: this value will overwrite the existing Required value specified in the parent schema  if
    OverwriteRequired is set to true.
    *
    * @var bool
    */
    protected $required;
    /**
     * Enable the overwriting of the Required property of the field specified by the Id property.
     *
     * @var bool
     */
    protected $overwriteRequired;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * The field's ID whose information need to be overwritten.
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * The field's ID whose information need to be overwritten.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
    * Defines if a field value is mandatory or not: this value will overwrite the existing Required value specified in the parent schema  if
    OverwriteRequired is set to true.
    *
    * @return bool
    */
    public function getRequired() : bool
    {
        return $this->required;
    }
    /**
    * Defines if a field value is mandatory or not: this value will overwrite the existing Required value specified in the parent schema  if
    OverwriteRequired is set to true.
    *
    * @param bool $required
    *
    * @return self
    */
    public function setRequired(bool $required) : self
    {
        $this->required = $required;
        return $this;
    }
    /**
     * Enable the overwriting of the Required property of the field specified by the Id property.
     *
     * @return bool
     */
    public function getOverwriteRequired() : bool
    {
        return $this->overwriteRequired;
    }
    /**
     * Enable the overwriting of the Required property of the field specified by the Id property.
     *
     * @param bool $overwriteRequired
     *
     * @return self
     */
    public function setOverwriteRequired(bool $overwriteRequired) : self
    {
        $this->overwriteRequired = $overwriteRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
}