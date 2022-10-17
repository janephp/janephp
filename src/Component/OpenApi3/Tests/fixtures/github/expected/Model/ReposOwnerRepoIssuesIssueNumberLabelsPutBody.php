<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberLabelsPutBody extends \ArrayObject
{
    /**
     * The names of the labels to add to the issue. You can pass an empty array to remove all labels. **Note:** Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * The names of the labels to add to the issue. You can pass an empty array to remove all labels. **Note:** Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key.
     *
     * @return string[]
     */
    public function getLabels() : array
    {
        return $this->labels;
    }
    /**
     * The names of the labels to add to the issue. You can pass an empty array to remove all labels. **Note:** Alternatively, you can pass a single label as a `string` or an `array` of labels directly, but GitHub recommends passing an object with the `labels` key.
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