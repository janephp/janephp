<?php

namespace Github\Model;

class ReposOwnerRepoReleasesAssetsAssetIdPatchBody
{
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
        $this->state = $state;
        return $this;
    }
}