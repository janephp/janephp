<?php

namespace PicturePark\API\Model;

class OutputDataAudio extends OutputDataBase
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
     * Duration of the audio stream in seconds.
     *
     * @var float|null
     */
    protected $durationInSeconds;
    /**
     * Duration of the audio stream in seconds.
     *
     * @return float|null
     */
    public function getDurationInSeconds() : ?float
    {
        return $this->durationInSeconds;
    }
    /**
     * Duration of the audio stream in seconds.
     *
     * @param float|null $durationInSeconds
     *
     * @return self
     */
    public function setDurationInSeconds(?float $durationInSeconds) : self
    {
        $this->initialized['durationInSeconds'] = true;
        $this->durationInSeconds = $durationInSeconds;
        return $this;
    }
}