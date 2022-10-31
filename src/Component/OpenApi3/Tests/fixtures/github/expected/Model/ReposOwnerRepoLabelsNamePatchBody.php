<?php

namespace Github\Model;

class ReposOwnerRepoLabelsNamePatchBody extends \ArrayObject
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
     * The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see [emoji-cheat-sheet.com](http://emoji-cheat-sheet.com/).
     *
     * @var string
     */
    protected $newName;
    /**
     * The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     *
     * @var string
     */
    protected $color;
    /**
     * A short description of the label.
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see [emoji-cheat-sheet.com](http://emoji-cheat-sheet.com/).
     *
     * @return string
     */
    public function getNewName() : string
    {
        return $this->newName;
    }
    /**
     * The new name of the label. Emoji can be added to label names, using either native emoji or colon-style markup. For example, typing `:strawberry:` will render the emoji ![:strawberry:](https://github.githubassets.com/images/icons/emoji/unicode/1f353.png ":strawberry:"). For a full list of available emoji and codes, see [emoji-cheat-sheet.com](http://emoji-cheat-sheet.com/).
     *
     * @param string $newName
     *
     * @return self
     */
    public function setNewName(string $newName) : self
    {
        $this->initialized['newName'] = true;
        $this->newName = $newName;
        return $this;
    }
    /**
     * The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     *
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }
    /**
     * The [hexadecimal color code](http://www.color-hex.com/) for the label, without the leading `#`.
     *
     * @param string $color
     *
     * @return self
     */
    public function setColor(string $color) : self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * A short description of the label.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * A short description of the label.
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
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}