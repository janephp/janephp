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
     * @var list<string>
     */
    protected $hooks;
    /**
     * 
     *
     * @var list<string>
     */
    protected $web;
    /**
     * 
     *
     * @var list<string>
     */
    protected $api;
    /**
     * 
     *
     * @var list<string>
     */
    protected $git;
    /**
     * 
     *
     * @var list<string>
     */
    protected $pages;
    /**
     * 
     *
     * @var list<string>
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
     * @return list<string>
     */
    public function getHooks() : array
    {
        return $this->hooks;
    }
    /**
     * 
     *
     * @param list<string> $hooks
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
     * @return list<string>
     */
    public function getWeb() : array
    {
        return $this->web;
    }
    /**
     * 
     *
     * @param list<string> $web
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
     * @return list<string>
     */
    public function getApi() : array
    {
        return $this->api;
    }
    /**
     * 
     *
     * @param list<string> $api
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
     * @return list<string>
     */
    public function getGit() : array
    {
        return $this->git;
    }
    /**
     * 
     *
     * @param list<string> $git
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
     * @return list<string>
     */
    public function getPages() : array
    {
        return $this->pages;
    }
    /**
     * 
     *
     * @param list<string> $pages
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
     * @return list<string>
     */
    public function getImporter() : array
    {
        return $this->importer;
    }
    /**
     * 
     *
     * @param list<string> $importer
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