<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class VideoMetrics
{
    /**
     * The Media Key identifier for this attachment.
     *
     * @var string
     */
    protected $mediaKey;
    /**
     * Number of times this video has been viewed.
     *
     * @var int
     */
    protected $viewCount;
    /**
     * Number of users who made it through 0% of the video.
     *
     * @var int
     */
    protected $playback0Count;
    /**
     * Number of users who made it through 25% of the video.
     *
     * @var int
     */
    protected $playback25Count;
    /**
     * Number of users who made it through 50% of the video.
     *
     * @var int
     */
    protected $playback50Count;
    /**
     * Number of users who made it through 75% of the video.
     *
     * @var int
     */
    protected $playback75Count;
    /**
     * Number of users who made it through 100% of the video.
     *
     * @var int
     */
    protected $playback100Count;
    /**
     * The Media Key identifier for this attachment.
     *
     * @return string
     */
    public function getMediaKey() : string
    {
        return $this->mediaKey;
    }
    /**
     * The Media Key identifier for this attachment.
     *
     * @param string $mediaKey
     *
     * @return self
     */
    public function setMediaKey(string $mediaKey) : self
    {
        $this->mediaKey = $mediaKey;
        return $this;
    }
    /**
     * Number of times this video has been viewed.
     *
     * @return int
     */
    public function getViewCount() : int
    {
        return $this->viewCount;
    }
    /**
     * Number of times this video has been viewed.
     *
     * @param int $viewCount
     *
     * @return self
     */
    public function setViewCount(int $viewCount) : self
    {
        $this->viewCount = $viewCount;
        return $this;
    }
    /**
     * Number of users who made it through 0% of the video.
     *
     * @return int
     */
    public function getPlayback0Count() : int
    {
        return $this->playback0Count;
    }
    /**
     * Number of users who made it through 0% of the video.
     *
     * @param int $playback0Count
     *
     * @return self
     */
    public function setPlayback0Count(int $playback0Count) : self
    {
        $this->playback0Count = $playback0Count;
        return $this;
    }
    /**
     * Number of users who made it through 25% of the video.
     *
     * @return int
     */
    public function getPlayback25Count() : int
    {
        return $this->playback25Count;
    }
    /**
     * Number of users who made it through 25% of the video.
     *
     * @param int $playback25Count
     *
     * @return self
     */
    public function setPlayback25Count(int $playback25Count) : self
    {
        $this->playback25Count = $playback25Count;
        return $this;
    }
    /**
     * Number of users who made it through 50% of the video.
     *
     * @return int
     */
    public function getPlayback50Count() : int
    {
        return $this->playback50Count;
    }
    /**
     * Number of users who made it through 50% of the video.
     *
     * @param int $playback50Count
     *
     * @return self
     */
    public function setPlayback50Count(int $playback50Count) : self
    {
        $this->playback50Count = $playback50Count;
        return $this;
    }
    /**
     * Number of users who made it through 75% of the video.
     *
     * @return int
     */
    public function getPlayback75Count() : int
    {
        return $this->playback75Count;
    }
    /**
     * Number of users who made it through 75% of the video.
     *
     * @param int $playback75Count
     *
     * @return self
     */
    public function setPlayback75Count(int $playback75Count) : self
    {
        $this->playback75Count = $playback75Count;
        return $this;
    }
    /**
     * Number of users who made it through 100% of the video.
     *
     * @return int
     */
    public function getPlayback100Count() : int
    {
        return $this->playback100Count;
    }
    /**
     * Number of users who made it through 100% of the video.
     *
     * @param int $playback100Count
     *
     * @return self
     */
    public function setPlayback100Count(int $playback100Count) : self
    {
        $this->playback100Count = $playback100Count;
        return $this;
    }
}