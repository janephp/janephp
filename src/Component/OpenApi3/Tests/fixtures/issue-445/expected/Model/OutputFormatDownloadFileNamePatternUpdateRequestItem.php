<?php

namespace PicturePark\API\Model;

class OutputFormatDownloadFileNamePatternUpdateRequestItem
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
     * ID of the output format to set pattern for.
     *
     * @var string
     */
    protected $id;
    /**
    * The patterns to use per metadata language.
    The customer's default language is required.
    *
    * @var mixed|null
    */
    protected $patterns;
    /**
     * ID of the output format to set pattern for.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * ID of the output format to set pattern for.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * The patterns to use per metadata language.
    The customer's default language is required.
    *
    * @return mixed
    */
    public function getPatterns()
    {
        return $this->patterns;
    }
    /**
    * The patterns to use per metadata language.
    The customer's default language is required.
    *
    * @param mixed $patterns
    *
    * @return self
    */
    public function setPatterns($patterns) : self
    {
        $this->initialized['patterns'] = true;
        $this->patterns = $patterns;
        return $this;
    }
}