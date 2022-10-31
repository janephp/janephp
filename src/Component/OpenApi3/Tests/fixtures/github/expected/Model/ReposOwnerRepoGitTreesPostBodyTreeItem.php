<?php

namespace Github\Model;

class ReposOwnerRepoGitTreesPostBodyTreeItem extends \ArrayObject
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
     * The file referenced in the tree.
     *
     * @var string
     */
    protected $path;
    /**
     * The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink.
     *
     * @var string
     */
    protected $mode;
    /**
     * Either `blob`, `tree`, or `commit`.
     *
     * @var string
     */
    protected $type;
    /**
     * The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     *
     * @var string|null
     */
    protected $sha;
    /**
     * The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     *
     * @var string
     */
    protected $content;
    /**
     * The file referenced in the tree.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The file referenced in the tree.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink.
     *
     * @return string
     */
    public function getMode() : string
    {
        return $this->mode;
    }
    /**
     * The file mode; one of `100644` for file (blob), `100755` for executable (blob), `040000` for subdirectory (tree), `160000` for submodule (commit), or `120000` for a blob that specifies the path of a symlink.
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode) : self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Either `blob`, `tree`, or `commit`.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * Either `blob`, `tree`, or `commit`.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     *
     * @return string|null
     */
    public function getSha() : ?string
    {
        return $this->sha;
    }
    /**
     * The SHA1 checksum ID of the object in the tree. Also called `tree.sha`. If the value is `null` then the file will be deleted.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     *
     * @param string|null $sha
     *
     * @return self
     */
    public function setSha(?string $sha) : self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
        return $this;
    }
    /**
     * The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }
    /**
     * The content you want this file to have. GitHub will write this blob out and use that SHA for this entry. Use either this, or `tree.sha`.  
     **Note:** Use either `tree.sha` or `content` to specify the contents of the entry. Using both `tree.sha` and `content` will return an error.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
}