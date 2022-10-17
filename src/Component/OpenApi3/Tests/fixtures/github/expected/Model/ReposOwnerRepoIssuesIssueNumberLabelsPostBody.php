<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberLabelsPostBody extends \ArrayObject
{
    /**
     * The name of the label to add to the issue. Must contain at least one label. **Note:** Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * The name of the label to add to the issue. Must contain at least one label. **Note:** Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key.
     *
     * @return string[]
     */
    public function getLabels() : array
    {
        return $this->labels;
    }
    /**
     * The name of the label to add to the issue. Must contain at least one label. **Note:** Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
}