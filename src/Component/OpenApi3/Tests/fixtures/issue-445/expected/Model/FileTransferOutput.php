<?php

namespace PicturePark\API\Model;

class FileTransferOutput
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
        $this->initialized['id'] = true;
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
        $this->initialized['filePath'] = true;
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
        $this->initialized['outputSource'] = true;
        $this->outputSource = $outputSource;
        return $this;
    }
}