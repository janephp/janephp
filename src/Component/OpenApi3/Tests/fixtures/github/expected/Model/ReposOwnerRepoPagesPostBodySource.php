<?php

namespace Github\Model;

class ReposOwnerRepoPagesPostBodySource extends \ArrayObject
{
    /**
     * The repository branch used to publish your [site's source files](https://help.github.com/articles/configuring-a-publishing-source-for-github-pages/). Can be either `master` or `gh-pages`.
     *
     * @var string
     */
    protected $branch;
    /**
     * The repository directory that includes the source files for the Pages site. When `branch` is `master`, you can change `path` to `/docs`. When `branch` is `gh-pages`, you are unable to specify a `path` other than `/`.
     *
     * @var string
     */
    protected $path;
    /**
     * The repository branch used to publish your [site's source files](https://help.github.com/articles/configuring-a-publishing-source-for-github-pages/). Can be either `master` or `gh-pages`.
     *
     * @return string
     */
    public function getBranch() : string
    {
        return $this->branch;
    }
    /**
     * The repository branch used to publish your [site's source files](https://help.github.com/articles/configuring-a-publishing-source-for-github-pages/). Can be either `master` or `gh-pages`.
     *
     * @param string $branch
     *
     * @return self
     */
    public function setBranch(string $branch) : self
    {
        $this->branch = $branch;
        return $this;
    }
    /**
     * The repository directory that includes the source files for the Pages site. When `branch` is `master`, you can change `path` to `/docs`. When `branch` is `gh-pages`, you are unable to specify a `path` other than `/`.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The repository directory that includes the source files for the Pages site. When `branch` is `master`, you can change `path` to `/docs`. When `branch` is `gh-pages`, you are unable to specify a `path` other than `/`.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->path = $path;
        return $this;
    }
}