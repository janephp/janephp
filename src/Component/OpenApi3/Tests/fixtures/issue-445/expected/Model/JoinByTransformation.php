<?php

namespace PicturePark\API\Model;

class JoinByTransformation extends BusinessRuleTransformation
{
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
        $this->separator = $separator;
        return $this;
    }
}