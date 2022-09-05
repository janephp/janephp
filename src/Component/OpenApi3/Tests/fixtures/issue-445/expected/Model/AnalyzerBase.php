<?php

namespace PicturePark\API\Model;

class AnalyzerBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
        $this->kind = $kind;
    }
}