<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Test
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
     * Indicates the ID of the referenced original mail.
     *
     * @var string
     */
    protected $msgref;
    /**
     * Message reference on reply/forward.
     *
     * @var string
     */
    protected $msgRef2;
    /**
     * Indicates the ID of the referenced original mail.
     *
     * @return string
     */
    public function getMsgref() : string
    {
        return $this->msgref;
    }
    /**
     * Indicates the ID of the referenced original mail.
     *
     * @param string $msgref
     *
     * @return self
     */
    public function setMsgref(string $msgref) : self
    {
        $this->initialized['msgref'] = true;
        $this->msgref = $msgref;
        return $this;
    }
    /**
     * Message reference on reply/forward.
     *
     * @return string
     */
    public function getMsgRef2() : string
    {
        return $this->msgRef2;
    }
    /**
     * Message reference on reply/forward.
     *
     * @param string $msgRef2
     *
     * @return self
     */
    public function setMsgRef2(string $msgRef2) : self
    {
        $this->initialized['msgRef2'] = true;
        $this->msgRef2 = $msgRef2;
        return $this;
    }
}