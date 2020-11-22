<?php

namespace Github\Model;

class ProjectsColumnsCardsCardIdPatchBody
{
    /**
     * The project card's note
     *
     * @var string|null
     */
    protected $note;
    /**
     * Whether or not the card is archived
     *
     * @var bool
     */
    protected $archived;
    /**
     * The project card's note
     *
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }
    /**
     * The project card's note
     *
     * @param string|null $note
     *
     * @return self
     */
    public function setNote(?string $note) : self
    {
        $this->note = $note;
        return $this;
    }
    /**
     * Whether or not the card is archived
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * Whether or not the card is archived
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
}