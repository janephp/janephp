<?php

namespace PicturePark\API\Model;

class PermissionSet
{
    /**
     * The permission set ID.
     *
     * @var string
     */
    protected $id;
    /**
    * When true this permission set will derogate all other configured permission sets.
    Cannot be changed after creation.
    *
    * @var bool
    */
    protected $exclusive;
    /**
     * Language specific permission set names.
     *
     * @var mixed
     */
    protected $names;
    /**
     * The permission set ID.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The permission set ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
    * When true this permission set will derogate all other configured permission sets.
    Cannot be changed after creation.
    *
    * @return bool
    */
    public function getExclusive() : bool
    {
        return $this->exclusive;
    }
    /**
    * When true this permission set will derogate all other configured permission sets.
    Cannot be changed after creation.
    *
    * @param bool $exclusive
    *
    * @return self
    */
    public function setExclusive(bool $exclusive) : self
    {
        $this->exclusive = $exclusive;
        return $this;
    }
    /**
     * Language specific permission set names.
     *
     * @return mixed
     */
    public function getNames()
    {
        return $this->names;
    }
    /**
     * Language specific permission set names.
     *
     * @param mixed $names
     *
     * @return self
     */
    public function setNames($names) : self
    {
        $this->names = $names;
        return $this;
    }
}