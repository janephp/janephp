<?php

namespace Github\Model;

class ReposOwnerRepoPagesPutBody
{
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
        $this->source = $source;
        return $this;
    }
}