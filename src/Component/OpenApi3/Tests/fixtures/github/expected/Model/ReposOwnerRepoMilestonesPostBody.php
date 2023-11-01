<?php

namespace Github\Model;

class ReposOwnerRepoMilestonesPostBody extends \ArrayObject
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
     * The title of the milestone.
     *
     * @var string
     */
    protected $title;
    /**
     * The state of the milestone. Either `open` or `closed`.
     *
     * @var string
     */
    protected $state = 'open';
    /**
     * A description of the milestone.
     *
     * @var string
     */
    protected $description;
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @var string
     */
    protected $dueOn;
    /**
     * The title of the milestone.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the milestone.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The state of the milestone. Either `open` or `closed`.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state of the milestone. Either `open` or `closed`.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * A description of the milestone.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A description of the milestone.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @return string
     */
    public function getDueOn() : string
    {
        return $this->dueOn;
    }
    /**
     * The milestone due date. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *
     * @param string $dueOn
     *
     * @return self
     */
    public function setDueOn(string $dueOn) : self
    {
        $this->initialized['dueOn'] = true;
        $this->dueOn = $dueOn;
        return $this;
    }
}