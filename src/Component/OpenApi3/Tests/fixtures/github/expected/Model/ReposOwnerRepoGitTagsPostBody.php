<?php

namespace Github\Model;

class ReposOwnerRepoGitTagsPostBody extends \ArrayObject
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
     * The tag's name. This is typically a version (e.g., "v0.0.1").
     *
     * @var string
     */
    protected $tag;
    /**
     * The tag message.
     *
     * @var string
     */
    protected $message;
    /**
     * The SHA of the git object this is tagging.
     *
     * @var string
     */
    protected $object;
    /**
     * The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     *
     * @var string
     */
    protected $type;
    /**
     * An object with information about the individual creating the tag.
     *
     * @var ReposOwnerRepoGitTagsPostBodyTagger
     */
    protected $tagger;
    /**
     * The tag's name. This is typically a version (e.g., "v0.0.1").
     *
     * @return string
     */
    public function getTag() : string
    {
        return $this->tag;
    }
    /**
     * The tag's name. This is typically a version (e.g., "v0.0.1").
     *
     * @param string $tag
     *
     * @return self
     */
    public function setTag(string $tag) : self
    {
        $this->initialized['tag'] = true;
        $this->tag = $tag;
        return $this;
    }
    /**
     * The tag message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * The tag message.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The SHA of the git object this is tagging.
     *
     * @return string
     */
    public function getObject() : string
    {
        return $this->object;
    }
    /**
     * The SHA of the git object this is tagging.
     *
     * @param string $object
     *
     * @return self
     */
    public function setObject(string $object) : self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
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
     * An object with information about the individual creating the tag.
     *
     * @return ReposOwnerRepoGitTagsPostBodyTagger
     */
    public function getTagger() : ReposOwnerRepoGitTagsPostBodyTagger
    {
        return $this->tagger;
    }
    /**
     * An object with information about the individual creating the tag.
     *
     * @param ReposOwnerRepoGitTagsPostBodyTagger $tagger
     *
     * @return self
     */
    public function setTagger(ReposOwnerRepoGitTagsPostBodyTagger $tagger) : self
    {
        $this->initialized['tagger'] = true;
        $this->tagger = $tagger;
        return $this;
    }
}