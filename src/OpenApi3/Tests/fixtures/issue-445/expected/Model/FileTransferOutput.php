<?php

namespace PicturePark\API\Model;

class FileTransferOutput
{
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $filePath;
    /**
     * 
     *
     * @var string
     */
    protected $outputSource;
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFilePath() : ?string
    {
        return $this->filePath;
    }
    /**
     * 
     *
     * @param string|null $filePath
     *
     * @return self
     */
    public function setFilePath(?string $filePath) : self
    {
        $this->filePath = $filePath;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOutputSource() : string
    {
        return $this->outputSource;
    }
    /**
     * 
     *
     * @param string $outputSource
     *
     * @return self
     */
    public function setOutputSource(string $outputSource) : self
    {
        $this->outputSource = $outputSource;
        return $this;
    }
}