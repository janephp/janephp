<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem
{
    /**
     * The alternative text for the image.
     *
     * @var string
     */
    protected $alt;
    /**
     * The full URL of the image.
     *
     * @var string
     */
    protected $imageUrl;
    /**
     * A short image description.
     *
     * @var string
     */
    protected $caption;
    /**
     * The alternative text for the image.
     *
     * @return string
     */
    public function getAlt() : string
    {
        return $this->alt;
    }
    /**
     * The alternative text for the image.
     *
     * @param string $alt
     *
     * @return self
     */
    public function setAlt(string $alt) : self
    {
        $this->alt = $alt;
        return $this;
    }
    /**
     * The full URL of the image.
     *
     * @return string
     */
    public function getImageUrl() : string
    {
        return $this->imageUrl;
    }
    /**
     * The full URL of the image.
     *
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(string $imageUrl) : self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }
    /**
     * A short image description.
     *
     * @return string
     */
    public function getCaption() : string
    {
        return $this->caption;
    }
    /**
     * A short image description.
     *
     * @param string $caption
     *
     * @return self
     */
    public function setCaption(string $caption) : self
    {
        $this->caption = $caption;
        return $this;
    }
}