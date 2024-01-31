<?php

namespace Github\Model;

class ReposOwnerRepoReleasesAssetsAssetIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The file name of the asset.
     *
     * @var string
     */
    protected $name;
    /**
     * An alternate short description of the asset. Used in place of the filename.
     *
     * @var string
     */
    protected $label;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * The file name of the asset.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The file name of the asset.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * An alternate short description of the asset. Used in place of the filename.
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * An alternate short description of the asset. Used in place of the filename.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
}