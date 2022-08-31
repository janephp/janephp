<?php

namespace PicturePark\API\Model;

class FieldOverwriteSingleTagbox extends FieldOverwriteBase
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
    * An optional filter to limit the list items: this value will overwrite the existing Filter value specified in the parent schema  if
    OverwriteFilter is set to true.
    *
    * @var mixed|null
    */
    protected $filter;
    /**
     * Enable the overwriting of the Filter property of the field specified by the Id property.
     *
     * @var bool
     */
    protected $overwriteFilter;
    /**
    * Json serialized template used for creating new list item: this value will overwrite the existing ListItemCreateTemplate value specified in the parent schema  if
    OverwriteListItemCreateTemplate is set to true.
    *
    * @var string|null
    */
    protected $listItemCreateTemplate;
    /**
     * Enable the overwriting of the ListItemCreateTemplate property of the field specified by the Id property.
     *
     * @var bool
     */
    protected $overwriteListItemCreateTemplate;
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
    /**
    * An optional filter to limit the list items: this value will overwrite the existing Filter value specified in the parent schema  if
    OverwriteFilter is set to true.
    *
    * @return mixed
    */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
    * An optional filter to limit the list items: this value will overwrite the existing Filter value specified in the parent schema  if
    OverwriteFilter is set to true.
    *
    * @param mixed $filter
    *
    * @return self
    */
    public function setFilter($filter) : self
    {
        $this->filter = $filter;
        return $this;
    }
    /**
     * Enable the overwriting of the Filter property of the field specified by the Id property.
     *
     * @return bool
     */
    public function getOverwriteFilter() : bool
    {
        return $this->overwriteFilter;
    }
    /**
     * Enable the overwriting of the Filter property of the field specified by the Id property.
     *
     * @param bool $overwriteFilter
     *
     * @return self
     */
    public function setOverwriteFilter(bool $overwriteFilter) : self
    {
        $this->overwriteFilter = $overwriteFilter;
        return $this;
    }
    /**
    * Json serialized template used for creating new list item: this value will overwrite the existing ListItemCreateTemplate value specified in the parent schema  if
    OverwriteListItemCreateTemplate is set to true.
    *
    * @return string|null
    */
    public function getListItemCreateTemplate() : ?string
    {
        return $this->listItemCreateTemplate;
    }
    /**
    * Json serialized template used for creating new list item: this value will overwrite the existing ListItemCreateTemplate value specified in the parent schema  if
    OverwriteListItemCreateTemplate is set to true.
    *
    * @param string|null $listItemCreateTemplate
    *
    * @return self
    */
    public function setListItemCreateTemplate(?string $listItemCreateTemplate) : self
    {
        $this->listItemCreateTemplate = $listItemCreateTemplate;
        return $this;
    }
    /**
     * Enable the overwriting of the ListItemCreateTemplate property of the field specified by the Id property.
     *
     * @return bool
     */
    public function getOverwriteListItemCreateTemplate() : bool
    {
        return $this->overwriteListItemCreateTemplate;
    }
    /**
     * Enable the overwriting of the ListItemCreateTemplate property of the field specified by the Id property.
     *
     * @param bool $overwriteListItemCreateTemplate
     *
     * @return self
     */
    public function setOverwriteListItemCreateTemplate(bool $overwriteListItemCreateTemplate) : self
    {
        $this->overwriteListItemCreateTemplate = $overwriteListItemCreateTemplate;
        return $this;
    }
}