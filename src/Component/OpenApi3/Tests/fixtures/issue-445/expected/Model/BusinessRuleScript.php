<?php

namespace PicturePark\API\Model;

class BusinessRuleScript extends BusinessRule
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
        $this->initialized['script'] = true;
        $this->script = $script;
        return $this;
    }
}