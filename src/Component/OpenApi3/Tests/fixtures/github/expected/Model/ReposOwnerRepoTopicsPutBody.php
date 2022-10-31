<?php

namespace Github\Model;

class ReposOwnerRepoTopicsPutBody extends \ArrayObject
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
     * An array of topics to add to the repository. Pass one or more topics to _replace_ the set of existing topics. Send an empty array (`[]`) to clear all topics from the repository. **Note:** Topic `names` cannot contain uppercase letters.
     *
     * @var string[]
     */
    protected $names;
    /**
     * An array of topics to add to the repository. Pass one or more topics to _replace_ the set of existing topics. Send an empty array (`[]`) to clear all topics from the repository. **Note:** Topic `names` cannot contain uppercase letters.
     *
     * @return string[]
     */
    public function getNames() : array
    {
        return $this->names;
    }
    /**
     * An array of topics to add to the repository. Pass one or more topics to _replace_ the set of existing topics. Send an empty array (`[]`) to clear all topics from the repository. **Note:** Topic `names` cannot contain uppercase letters.
     *
     * @param string[] $names
     *
     * @return self
     */
    public function setNames(array $names) : self
    {
        $this->initialized['names'] = true;
        $this->names = $names;
        return $this;
    }
}