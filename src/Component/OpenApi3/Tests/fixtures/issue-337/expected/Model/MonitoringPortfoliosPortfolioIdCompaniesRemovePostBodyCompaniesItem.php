<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesRemovePostBodyCompaniesItem extends \ArrayObject
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
     * Company Safe Number or Connect ID. Not required when removeAll query parameter is set to true.
     *
     * @var string
     */
    protected $id;
    /**
     * Company Safe Number or Connect ID. Not required when removeAll query parameter is set to true.
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * Company Safe Number or Connect ID. Not required when removeAll query parameter is set to true.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}