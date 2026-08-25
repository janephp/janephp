<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class CommunityProfileFiles implements AdditionalPropertiesInterface
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
     * @var CommunityProfileFilesCodeOfConduct|null
     */
    protected $codeOfConduct;
    /**
     * @var CommunityProfileFilesLicense|null
     */
    protected $license;
    /**
     * @var CommunityProfileFilesContributing|null
     */
    protected $contributing;
    /**
     * @var CommunityProfileFilesReadme|null
     */
    protected $readme;
    /**
     * @var CommunityProfileFilesIssueTemplate|null
     */
    protected $issueTemplate;
    /**
     * @var CommunityProfileFilesPullRequestTemplate|null
     */
    protected $pullRequestTemplate;
    /**
     * @return CommunityProfileFilesCodeOfConduct|null
     */
    public function getCodeOfConduct(): ?CommunityProfileFilesCodeOfConduct
    {
        return $this->codeOfConduct;
    }
    /**
     * @param CommunityProfileFilesCodeOfConduct|null $codeOfConduct
     *
     * @return self
     */
    public function setCodeOfConduct(?CommunityProfileFilesCodeOfConduct $codeOfConduct): self
    {
        $this->initialized['codeOfConduct'] = true;
        $this->codeOfConduct = $codeOfConduct;
        return $this;
    }
    /**
     * @return CommunityProfileFilesLicense|null
     */
    public function getLicense(): ?CommunityProfileFilesLicense
    {
        return $this->license;
    }
    /**
     * @param CommunityProfileFilesLicense|null $license
     *
     * @return self
     */
    public function setLicense(?CommunityProfileFilesLicense $license): self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * @return CommunityProfileFilesContributing|null
     */
    public function getContributing(): ?CommunityProfileFilesContributing
    {
        return $this->contributing;
    }
    /**
     * @param CommunityProfileFilesContributing|null $contributing
     *
     * @return self
     */
    public function setContributing(?CommunityProfileFilesContributing $contributing): self
    {
        $this->initialized['contributing'] = true;
        $this->contributing = $contributing;
        return $this;
    }
    /**
     * @return CommunityProfileFilesReadme|null
     */
    public function getReadme(): ?CommunityProfileFilesReadme
    {
        return $this->readme;
    }
    /**
     * @param CommunityProfileFilesReadme|null $readme
     *
     * @return self
     */
    public function setReadme(?CommunityProfileFilesReadme $readme): self
    {
        $this->initialized['readme'] = true;
        $this->readme = $readme;
        return $this;
    }
    /**
     * @return CommunityProfileFilesIssueTemplate|null
     */
    public function getIssueTemplate(): ?CommunityProfileFilesIssueTemplate
    {
        return $this->issueTemplate;
    }
    /**
     * @param CommunityProfileFilesIssueTemplate|null $issueTemplate
     *
     * @return self
     */
    public function setIssueTemplate(?CommunityProfileFilesIssueTemplate $issueTemplate): self
    {
        $this->initialized['issueTemplate'] = true;
        $this->issueTemplate = $issueTemplate;
        return $this;
    }
    /**
     * @return CommunityProfileFilesPullRequestTemplate|null
     */
    public function getPullRequestTemplate(): ?CommunityProfileFilesPullRequestTemplate
    {
        return $this->pullRequestTemplate;
    }
    /**
     * @param CommunityProfileFilesPullRequestTemplate|null $pullRequestTemplate
     *
     * @return self
     */
    public function setPullRequestTemplate(?CommunityProfileFilesPullRequestTemplate $pullRequestTemplate): self
    {
        $this->initialized['pullRequestTemplate'] = true;
        $this->pullRequestTemplate = $pullRequestTemplate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['codeOfConduct' => ['code_of_conduct', 'getCodeOfConduct', 'setCodeOfConduct'], 'license' => ['license', 'getLicense', 'setLicense'], 'contributing' => ['contributing', 'getContributing', 'setContributing'], 'readme' => ['readme', 'getReadme', 'setReadme'], 'issueTemplate' => ['issue_template', 'getIssueTemplate', 'setIssueTemplate'], 'pullRequestTemplate' => ['pull_request_template', 'getPullRequestTemplate', 'setPullRequestTemplate']];
    }
}