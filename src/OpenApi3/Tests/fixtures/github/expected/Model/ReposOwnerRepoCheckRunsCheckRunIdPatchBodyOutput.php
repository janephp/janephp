<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput
{
    /**
     * **Required**.
     *
     * @var string
     */
    protected $title;
    /**
     * Can contain Markdown.
     *
     * @var string
     */
    protected $summary;
    /**
     * Can contain Markdown.
     *
     * @var string
     */
    protected $text;
    /**
     * Adds information from your analysis to specific lines of code. Annotations are visible in GitHub's pull request UI. Annotations are visible in GitHub's pull request UI. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://developer.github.com/v3/checks/runs/#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about annotations in the UI, see "[About status checks](https://help.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://developer.github.com/v3/checks/runs/#annotations-object-1) description for details.
     *
     * @var ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem[]
     */
    protected $annotations;
    /**
     * Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://developer.github.com/v3/checks/runs/#annotations-object-1) description for details.
     *
     * @var ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem[]
     */
    protected $images;
    /**
     * **Required**.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * **Required**.
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
     * Can contain Markdown.
     *
     * @return string
     */
    public function getSummary() : string
    {
        return $this->summary;
    }
    /**
     * Can contain Markdown.
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
     * Can contain Markdown.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * Can contain Markdown.
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
     * Adds information from your analysis to specific lines of code. Annotations are visible in GitHub's pull request UI. Annotations are visible in GitHub's pull request UI. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://developer.github.com/v3/checks/runs/#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about annotations in the UI, see "[About status checks](https://help.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://developer.github.com/v3/checks/runs/#annotations-object-1) description for details.
     *
     * @return ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem[]
     */
    public function getAnnotations() : array
    {
        return $this->annotations;
    }
    /**
     * Adds information from your analysis to specific lines of code. Annotations are visible in GitHub's pull request UI. Annotations are visible in GitHub's pull request UI. The Checks API limits the number of annotations to a maximum of 50 per API request. To create more than 50 annotations, you have to make multiple requests to the [Update a check run](https://developer.github.com/v3/checks/runs/#update-a-check-run) endpoint. Each time you update the check run, annotations are appended to the list of annotations that already exist for the check run. For details about annotations in the UI, see "[About status checks](https://help.github.com/articles/about-status-checks#checks)". See the [`annotations` object](https://developer.github.com/v3/checks/runs/#annotations-object-1) description for details.
     *
     * @param ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputAnnotationsItem[] $annotations
     *
     * @return self
     */
    public function setAnnotations(array $annotations) : self
    {
        $this->annotations = $annotations;
        return $this;
    }
    /**
     * Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://developer.github.com/v3/checks/runs/#annotations-object-1) description for details.
     *
     * @return ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem[]
     */
    public function getImages() : array
    {
        return $this->images;
    }
    /**
     * Adds images to the output displayed in the GitHub pull request UI. See the [`images` object](https://developer.github.com/v3/checks/runs/#annotations-object-1) description for details.
     *
     * @param ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutputImagesItem[] $images
     *
     * @return self
     */
    public function setImages(array $images) : self
    {
        $this->images = $images;
        return $this;
    }
}