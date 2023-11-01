<?php

namespace Github\Model;

class ApiOverview extends \ArrayObject
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
     * 
     *
     * @var bool
     */
    protected $verifiablePasswordAuthentication;
    /**
     * 
     *
     * @var ApiOverviewSshKeyFingerprints
     */
    protected $sshKeyFingerprints;
    /**
     * 
     *
     * @var string[]
     */
    protected $hooks;
    /**
     * 
     *
     * @var string[]
     */
    protected $web;
    /**
     * 
     *
     * @var string[]
     */
    protected $api;
    /**
     * 
     *
     * @var string[]
     */
    protected $git;
    /**
     * 
     *
     * @var string[]
     */
    protected $pages;
    /**
     * 
     *
     * @var string[]
     */
    protected $importer;
    /**
     * 
     *
     * @var string
     */
    protected $githubServicesSha;
    /**
     * 
     *
     * @var string
     */
    protected $installedVersion;
    /**
     * 
     *
     * @return bool
     */
    public function getVerifiablePasswordAuthentication() : bool
    {
        return $this->verifiablePasswordAuthentication;
    }
    /**
     * 
     *
     * @param bool $verifiablePasswordAuthentication
     *
     * @return self
     */
    public function setVerifiablePasswordAuthentication(bool $verifiablePasswordAuthentication) : self
    {
        $this->initialized['verifiablePasswordAuthentication'] = true;
        $this->verifiablePasswordAuthentication = $verifiablePasswordAuthentication;
        return $this;
    }
    /**
     * 
     *
     * @return ApiOverviewSshKeyFingerprints
     */
    public function getSshKeyFingerprints() : ApiOverviewSshKeyFingerprints
    {
        return $this->sshKeyFingerprints;
    }
    /**
     * 
     *
     * @param ApiOverviewSshKeyFingerprints $sshKeyFingerprints
     *
     * @return self
     */
    public function setSshKeyFingerprints(ApiOverviewSshKeyFingerprints $sshKeyFingerprints) : self
    {
        $this->initialized['sshKeyFingerprints'] = true;
        $this->sshKeyFingerprints = $sshKeyFingerprints;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getHooks() : array
    {
        return $this->hooks;
    }
    /**
     * 
     *
     * @param string[] $hooks
     *
     * @return self
     */
    public function setHooks(array $hooks) : self
    {
        $this->initialized['hooks'] = true;
        $this->hooks = $hooks;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWeb() : array
    {
        return $this->web;
    }
    /**
     * 
     *
     * @param string[] $web
     *
     * @return self
     */
    public function setWeb(array $web) : self
    {
        $this->initialized['web'] = true;
        $this->web = $web;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getApi() : array
    {
        return $this->api;
    }
    /**
     * 
     *
     * @param string[] $api
     *
     * @return self
     */
    public function setApi(array $api) : self
    {
        $this->initialized['api'] = true;
        $this->api = $api;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getGit() : array
    {
        return $this->git;
    }
    /**
     * 
     *
     * @param string[] $git
     *
     * @return self
     */
    public function setGit(array $git) : self
    {
        $this->initialized['git'] = true;
        $this->git = $git;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPages() : array
    {
        return $this->pages;
    }
    /**
     * 
     *
     * @param string[] $pages
     *
     * @return self
     */
    public function setPages(array $pages) : self
    {
        $this->initialized['pages'] = true;
        $this->pages = $pages;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getImporter() : array
    {
        return $this->importer;
    }
    /**
     * 
     *
     * @param string[] $importer
     *
     * @return self
     */
    public function setImporter(array $importer) : self
    {
        $this->initialized['importer'] = true;
        $this->importer = $importer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGithubServicesSha() : string
    {
        return $this->githubServicesSha;
    }
    /**
     * 
     *
     * @param string $githubServicesSha
     *
     * @return self
     */
    public function setGithubServicesSha(string $githubServicesSha) : self
    {
        $this->initialized['githubServicesSha'] = true;
        $this->githubServicesSha = $githubServicesSha;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInstalledVersion() : string
    {
        return $this->installedVersion;
    }
    /**
     * 
     *
     * @param string $installedVersion
     *
     * @return self
     */
    public function setInstalledVersion(string $installedVersion) : self
    {
        $this->initialized['installedVersion'] = true;
        $this->installedVersion = $installedVersion;
        return $this;
    }
}