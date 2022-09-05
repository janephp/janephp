<?php

namespace PicturePark\API\Model;

class CdnPurgeJobByTag extends CdnPurgeJobBase
{
    /**
     * The tag that should be purged.
     *
     * @var string
     */
    protected $tag;
    /**
     * The tag that should be purged.
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * The tag that should be purged.
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->tag = $tag;
        return $this;
    }
}