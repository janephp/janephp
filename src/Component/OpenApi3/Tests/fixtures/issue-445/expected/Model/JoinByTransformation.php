<?php

namespace PicturePark\API\Model;

class JoinByTransformation extends BusinessRuleTransformation
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
     * Separator to use.
     *
     * @var string|null
     */
    protected $separator;
    /**
     * Separator to use.
     *
     * @return string|null
     */
    public function getSeparator() : ?string
    {
        return $this->separator;
    }
    /**
     * Separator to use.
     *
     * @param string|null $separator
     *
     * @return self
     */
    public function setSeparator(?string $separator) : self
    {
        $this->initialized['separator'] = true;
        $this->separator = $separator;
        return $this;
    }
}