<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdCompaniesClearPatchBodyCompaniesItem extends \ArrayObject
{
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
        $this->id = $id;
        return $this;
    }
}