<?php

namespace PicturePark\API\Model;

class QueryDebugInformation
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
    protected $general;
    /**
     * 
     *
     * @var string|null
     */
    protected $auditTrail;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $request;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $response;
    /**
     * 
     *
     * @return string|null
     */
    public function getGeneral() : ?string
    {
        return $this->general;
    }
    /**
     * 
     *
     * @param string|null $general
     *
     * @return self
     */
    public function setGeneral(?string $general) : self
    {
        $this->initialized['general'] = true;
        $this->general = $general;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuditTrail() : ?string
    {
        return $this->auditTrail;
    }
    /**
     * 
     *
     * @param string|null $auditTrail
     *
     * @return self
     */
    public function setAuditTrail(?string $auditTrail) : self
    {
        $this->initialized['auditTrail'] = true;
        $this->auditTrail = $auditTrail;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * 
     *
     * @param mixed $request
     *
     * @return self
     */
    public function setRequest($request) : self
    {
        $this->initialized['request'] = true;
        $this->request = $request;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
    /**
     * 
     *
     * @param mixed $response
     *
     * @return self
     */
    public function setResponse($response) : self
    {
        $this->initialized['response'] = true;
        $this->response = $response;
        return $this;
    }
}