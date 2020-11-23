<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsPostBodyOutput
{
    /**
     * The title of the check run.
     *
     * @var string
     */
    protected $title;
    /**
     * The summary of the check run. This parameter supports Markdown.
     *
     * @var string
     */
    protected $summary;
    /**
     * The details of the check run. This parameter supports Markdown.
     *
     * @var string
     */
    protected $text;
    /**
     * Adds information from your analysis to specific lines of code. Annotations are visible on GitHub in the **Checks** and **Files changed** tab of the pull request. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://developer.github.com/v3/checks/runs/#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about how you can view annotations on GitHub, see "[About status checks](https://help.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://developer.github.com/v3/checks/runs/#annotations-object) description for details about how to use this parameter.
     *
     * @var ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem[]
     */
    protected $annotations;
    /**
     * Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://developer.github.com/v3/checks/runs/#images-object) description for details.
     *
     * @var ReposOwnerRepoCheckRunsPostBodyOutputImagesItem[]
     */
    protected $images;
    /**
     * The title of the check run.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the check run.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * The summary of the check run. This parameter supports Markdown.
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * The summary of the check run. This parameter supports Markdown.
     *
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary) : self
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * The details of the check run. This parameter supports Markdown.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The details of the check run. This parameter supports Markdown.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->text = $text;
        return $this;
    }
    /**
     * Adds information from your analysis to specific lines of code. Annotations are visible on GitHub in the **Checks** and **Files changed** tab of the pull request. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://developer.github.com/v3/checks/runs/#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about how you can view annotations on GitHub, see "[About status checks](https://help.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://developer.github.com/v3/checks/runs/#annotations-object) description for details about how to use this parameter.
     *
     * @return ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem[]
     */
    public function getAnnotations() : array
    {
        return $this->annotations;
    }
    /**
     * Adds information from your analysis to specific lines of code. Annotations are visible on GitHub in the **Checks** and **Files changed** tab of the pull request. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://developer.github.com/v3/checks/runs/#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about how you can view annotations on GitHub, see "[About status checks](https://help.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://developer.github.com/v3/checks/runs/#annotations-object) description for details about how to use this parameter.
     *
     * @param ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem[] $annotations
     *
     * @return self
     */
    public function setAnnotations(array $annotations) : self
    {
        $this->annotations = $annotations;
        return $this;
    }
    /**
     * Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://developer.github.com/v3/checks/runs/#images-object) description for details.
     *
     * @return ReposOwnerRepoCheckRunsPostBodyOutputImagesItem[]
     */
    public function getImages() : array
    {
        return $this->images;
    }
    /**
     * Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://developer.github.com/v3/checks/runs/#images-object) description for details.
     *
     * @param ReposOwnerRepoCheckRunsPostBodyOutputImagesItem[] $images
     *
     * @return self
     */
    public function setImages(array $images) : self
    {
        $this->images = $images;
        return $this;
    }
}