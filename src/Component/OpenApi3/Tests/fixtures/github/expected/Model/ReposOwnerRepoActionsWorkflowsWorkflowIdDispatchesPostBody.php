<?php

namespace Github\Model;

class ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody extends \ArrayObject
{
    /**
     * The reference of the workflow run. The reference can be a branch, tag, or a commit SHA.
     *
     * @var string
     */
    protected $ref;
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     *
     * @var string[]
     */
    protected $inputs;
    /**
     * The reference of the workflow run. The reference can be a branch, tag, or a commit SHA.
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * The reference of the workflow run. The reference can be a branch, tag, or a commit SHA.
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     *
     * @return string[]
     */
    public function getInputs() : iterable
    {
        return $this->inputs;
    }
    /**
     * Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     *
     * @param string[] $inputs
     *
     * @return self
     */
    public function setInputs(iterable $inputs) : self
    {
        $this->inputs = $inputs;
        return $this;
    }
}