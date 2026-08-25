<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoIssuesCommentsCommentIdPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The contents of the comment.
     *
     * @var string
     */
    protected $body;
    /**
     * The contents of the comment.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }
    /**
     * The contents of the comment.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['body' => ['body', 'getBody', 'setBody']];
    }
}