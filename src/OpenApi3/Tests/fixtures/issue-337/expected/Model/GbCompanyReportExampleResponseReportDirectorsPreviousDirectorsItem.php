<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $gender;
    /**
     * 
     *
     * @var string
     */
    protected $directorType;
    /**
     * 
     *
     * @var string[]
     */
    protected $positions;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGender() : string
    {
        return $this->gender;
    }
    /**
     * 
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender) : self
    {
        $this->gender = $gender;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDirectorType() : string
    {
        return $this->directorType;
    }
    /**
     * 
     *
     * @param string $directorType
     *
     * @return self
     */
    public function setDirectorType(string $directorType) : self
    {
        $this->directorType = $directorType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPositions() : array
    {
        return $this->positions;
    }
    /**
     * 
     *
     * @param string[] $positions
     *
     * @return self
     */
    public function setPositions(array $positions) : self
    {
        $this->positions = $positions;
        return $this;
    }
}