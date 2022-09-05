<?php

namespace PicturePark\API\Model;

class BusinessRuleScript extends BusinessRule
{
    /**
     * Script
     *
     * @var string|null
     */
    protected $script;
    /**
     * Script
     *
     * @return string|null
     */
    public function getScript() : ?string
    {
        return $this->script;
    }
    /**
     * Script
     *
     * @param string|null $script
     *
     * @return self
     */
    public function setScript(?string $script) : self
    {
        $this->script = $script;
        return $this;
    }
}