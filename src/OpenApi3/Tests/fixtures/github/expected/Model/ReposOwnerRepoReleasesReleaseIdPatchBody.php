<?php

namespace Github\Model;

class ReposOwnerRepoReleasesReleaseIdPatchBody
{
    /**
     * The name of the tag.
     *
     * @var string
     */
    protected $tagName;
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     *
     * @var string
     */
    protected $targetCommitish;
    /**
     * The name of the release.
     *
     * @var string
     */
    protected $name;
    /**
     * Text describing the contents of the tag.
     *
     * @var string
     */
    protected $body;
    /**
     * `true` makes the release a draft, and `false` publishes the release.
     *
     * @var bool
     */
    protected $draft;
    /**
     * `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     *
     * @var bool
     */
    protected $prerelease;
    /**
     * The name of the tag.
     *
     * @return string
     */
    public function getTagName() : string
    {
        return $this->tagName;
    }
    /**
     * The name of the tag.
     *
     * @param string $tagName
     *
     * @return self
     */
    public function setTagName(string $tagName) : self
    {
        $this->tagName = $tagName;
        return $this;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     *
     * @return string
     */
    public function getTargetCommitish() : string
    {
        return $this->targetCommitish;
    }
    /**
     * Specifies the commitish value that determines where the Git tag is created from. Can be any branch or commit SHA. Unused if the Git tag already exists. Default: the repository's default branch (usually `master`).
     *
     * @param string $targetCommitish
     *
     * @return self
     */
    public function setTargetCommitish(string $targetCommitish) : self
    {
        $this->targetCommitish = $targetCommitish;
        return $this;
    }
    /**
     * The name of the release.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the release.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Text describing the contents of the tag.
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * Text describing the contents of the tag.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * `true` makes the release a draft, and `false` publishes the release.
     *
     * @return bool
     */
    public function getDraft() : bool
    {
        return $this->draft;
    }
    /**
     * `true` makes the release a draft, and `false` publishes the release.
     *
     * @param bool $draft
     *
     * @return self
     */
    public function setDraft(bool $draft) : self
    {
        $this->draft = $draft;
        return $this;
    }
    /**
     * `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     *
     * @return bool
     */
    public function getPrerelease() : bool
    {
        return $this->prerelease;
    }
    /**
     * `true` to identify the release as a prerelease, `false` to identify the release as a full release.
     *
     * @param bool $prerelease
     *
     * @return self
     */
    public function setPrerelease(bool $prerelease) : self
    {
        $this->prerelease = $prerelease;
        return $this;
    }
}