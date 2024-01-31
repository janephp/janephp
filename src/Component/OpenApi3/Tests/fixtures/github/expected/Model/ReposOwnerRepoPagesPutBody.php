<?php

namespace Github\Model;

class ReposOwnerRepoPagesPutBody extends \ArrayObject
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
     * Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://help.github.com/articles/using-a-custom-domain-with-github-pages/)."
     *
     * @var string|null
     */
    protected $cname;
    /**
     * 
     *
     * @var mixed
     */
    protected $source;
    /**
     * Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://help.github.com/articles/using-a-custom-domain-with-github-pages/)."
     *
     * @return string|null
     */
    public function getCname() : ?string
    {
        return $this->cname;
    }
    /**
     * Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://help.github.com/articles/using-a-custom-domain-with-github-pages/)."
     *
     * @param string|null $cname
     *
     * @return self
     */
    public function setCname(?string $cname) : self
    {
        $this->initialized['cname'] = true;
        $this->cname = $cname;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param mixed $source
     *
     * @return self
     */
    public function setSource($source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
}