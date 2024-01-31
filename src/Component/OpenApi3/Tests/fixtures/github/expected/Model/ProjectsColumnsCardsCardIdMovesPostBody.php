<?php

namespace Github\Model;

class ProjectsColumnsCardsCardIdMovesPostBody extends \ArrayObject
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
     * The position of the card in a column
     *
     * @var string
     */
    protected $position;
    /**
     * The unique identifier of the column the card should be moved to
     *
     * @var int
     */
    protected $columnId;
    /**
     * The position of the card in a column
     *
     * @return string
     */
    public function getPosition() : string
    {
        return $this->position;
    }
    /**
     * The position of the card in a column
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position) : self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * The unique identifier of the column the card should be moved to
     *
     * @return int
     */
    public function getColumnId() : int
    {
        return $this->columnId;
    }
    /**
     * The unique identifier of the column the card should be moved to
     *
     * @param int $columnId
     *
     * @return self
     */
    public function setColumnId(int $columnId) : self
    {
        $this->initialized['columnId'] = true;
        $this->columnId = $columnId;
        return $this;
    }
}