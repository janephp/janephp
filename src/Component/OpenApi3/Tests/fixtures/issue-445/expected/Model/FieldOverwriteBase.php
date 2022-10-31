<?php

namespace PicturePark\API\Model;

class FieldOverwriteBase
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
     */
    public function setId(?string $id)
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    */
    public function setRequired(bool $required)
    {
        $this->initialized['required'] = true;
        $this->required = $required;
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
     */
    public function setOverwriteRequired(bool $overwriteRequired)
    {
        $this->initialized['overwriteRequired'] = true;
        $this->overwriteRequired = $overwriteRequired;
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
     */
    public function setKind(string $kind)
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
    }
}