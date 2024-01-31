<?php

namespace Github\Model;

class ReposOwnerRepoCheckRunsPostBodyOutputAnnotationsItem extends \ArrayObject
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
     * The path of the file to add an annotation to. For example, `assets/css/main.css`.
     *
     * @var string
     */
    protected $path;
    /**
     * The start line of the annotation.
     *
     * @var int
     */
    protected $startLine;
    /**
     * The end line of the annotation.
     *
     * @var int
     */
    protected $endLine;
    /**
     * The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     *
     * @var int
     */
    protected $startColumn;
    /**
     * The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     *
     * @var int
     */
    protected $endColumn;
    /**
     * The level of the annotation. Can be one of `notice`, `warning`, or `failure`.
     *
     * @var string
     */
    protected $annotationLevel;
    /**
     * A short description of the feedback for these lines of code. The maximum size is 64 KB.
     *
     * @var string
     */
    protected $message;
    /**
     * The title that represents the annotation. The maximum size is 255 characters.
     *
     * @var string
     */
    protected $title;
    /**
     * Details about this annotation. The maximum size is 64 KB.
     *
     * @var string
     */
    protected $rawDetails;
    /**
     * The path of the file to add an annotation to. For example, `assets/css/main.css`.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * The path of the file to add an annotation to. For example, `assets/css/main.css`.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The start line of the annotation.
     *
     * @return int
     */
    public function getStartLine() : int
    {
        return $this->startLine;
    }
    /**
     * The start line of the annotation.
     *
     * @param int $startLine
     *
     * @return self
     */
    public function setStartLine(int $startLine) : self
    {
        $this->initialized['startLine'] = true;
        $this->startLine = $startLine;
        return $this;
    }
    /**
     * The end line of the annotation.
     *
     * @return int
     */
    public function getEndLine() : int
    {
        return $this->endLine;
    }
    /**
     * The end line of the annotation.
     *
     * @param int $endLine
     *
     * @return self
     */
    public function setEndLine(int $endLine) : self
    {
        $this->initialized['endLine'] = true;
        $this->endLine = $endLine;
        return $this;
    }
    /**
     * The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     *
     * @return int
     */
    public function getStartColumn() : int
    {
        return $this->startColumn;
    }
    /**
     * The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     *
     * @param int $startColumn
     *
     * @return self
     */
    public function setStartColumn(int $startColumn) : self
    {
        $this->initialized['startColumn'] = true;
        $this->startColumn = $startColumn;
        return $this;
    }
    /**
     * The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     *
     * @return int
     */
    public function getEndColumn() : int
    {
        return $this->endColumn;
    }
    /**
     * The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     *
     * @param int $endColumn
     *
     * @return self
     */
    public function setEndColumn(int $endColumn) : self
    {
        $this->initialized['endColumn'] = true;
        $this->endColumn = $endColumn;
        return $this;
    }
    /**
     * The level of the annotation. Can be one of `notice`, `warning`, or `failure`.
     *
     * @return string
     */
    public function getAnnotationLevel() : string
    {
        return $this->annotationLevel;
    }
    /**
     * The level of the annotation. Can be one of `notice`, `warning`, or `failure`.
     *
     * @param string $annotationLevel
     *
     * @return self
     */
    public function setAnnotationLevel(string $annotationLevel) : self
    {
        $this->initialized['annotationLevel'] = true;
        $this->annotationLevel = $annotationLevel;
        return $this;
    }
    /**
     * A short description of the feedback for these lines of code. The maximum size is 64 KB.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * A short description of the feedback for these lines of code. The maximum size is 64 KB.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The title that represents the annotation. The maximum size is 255 characters.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title that represents the annotation. The maximum size is 255 characters.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * Details about this annotation. The maximum size is 64 KB.
     *
     * @return string
     */
    public function getRawDetails() : string
    {
        return $this->rawDetails;
    }
    /**
     * Details about this annotation. The maximum size is 64 KB.
     *
     * @param string $rawDetails
     *
     * @return self
     */
    public function setRawDetails(string $rawDetails) : self
    {
        $this->initialized['rawDetails'] = true;
        $this->rawDetails = $rawDetails;
        return $this;
    }
}