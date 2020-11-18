<?php

namespace PicturePark\API\Model;

class SourceOutputFormats
{
    /**
     * The source to be used for content of type Image
     *
     * @var string|null
     */
    protected $image;
    /**
     * The source to be used for content of type Video
     *
     * @var string|null
     */
    protected $video;
    /**
     * The source to be used for content of type Document
     *
     * @var string|null
     */
    protected $document;
    /**
     * The source to be used for content of type Audio
     *
     * @var string|null
     */
    protected $audio;
    /**
     * The source to be used for content of type Vector
     *
     * @var string|null
     */
    protected $vector;
    /**
     * The source to be used for content of type Image
     *
     * @return string|null
     */
    public function getImage() : ?string
    {
        return $this->image;
    }
    /**
     * The source to be used for content of type Image
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image) : self
    {
        $this->image = $image;
        return $this;
    }
    /**
     * The source to be used for content of type Video
     *
     * @return string|null
     */
    public function getVideo() : ?string
    {
        return $this->video;
    }
    /**
     * The source to be used for content of type Video
     *
     * @param string|null $video
     *
     * @return self
     */
    public function setVideo(?string $video) : self
    {
        $this->video = $video;
        return $this;
    }
    /**
     * The source to be used for content of type Document
     *
     * @return string|null
     */
    public function getDocument() : ?string
    {
        return $this->document;
    }
    /**
     * The source to be used for content of type Document
     *
     * @param string|null $document
     *
     * @return self
     */
    public function setDocument(?string $document) : self
    {
        $this->document = $document;
        return $this;
    }
    /**
     * The source to be used for content of type Audio
     *
     * @return string|null
     */
    public function getAudio() : ?string
    {
        return $this->audio;
    }
    /**
     * The source to be used for content of type Audio
     *
     * @param string|null $audio
     *
     * @return self
     */
    public function setAudio(?string $audio) : self
    {
        $this->audio = $audio;
        return $this;
    }
    /**
     * The source to be used for content of type Vector
     *
     * @return string|null
     */
    public function getVector() : ?string
    {
        return $this->vector;
    }
    /**
     * The source to be used for content of type Vector
     *
     * @param string|null $vector
     *
     * @return self
     */
    public function setVector(?string $vector) : self
    {
        $this->vector = $vector;
        return $this;
    }
}