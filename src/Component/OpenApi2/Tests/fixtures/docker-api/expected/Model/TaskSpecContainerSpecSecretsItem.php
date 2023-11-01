<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecSecretsItem
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
     * File represents a specific target that is backed by a file.
     *
     * @var TaskSpecContainerSpecSecretsItemFile
     */
    protected $file;
    /**
    * SecretID represents the ID of the specific secret that we're
    referencing.
    
    *
    * @var string
    */
    protected $secretID;
    /**
    * SecretName is the name of the secret that this references,
    but this is just provided for lookup/display purposes. The
    secret in the reference will be identified by its ID.
    
    *
    * @var string
    */
    protected $secretName;
    /**
     * File represents a specific target that is backed by a file.
     *
     * @return TaskSpecContainerSpecSecretsItemFile
     */
    public function getFile() : TaskSpecContainerSpecSecretsItemFile
    {
        return $this->file;
    }
    /**
     * File represents a specific target that is backed by a file.
     *
     * @param TaskSpecContainerSpecSecretsItemFile $file
     *
     * @return self
     */
    public function setFile(TaskSpecContainerSpecSecretsItemFile $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
    * SecretID represents the ID of the specific secret that we're
    referencing.
    
    *
    * @return string
    */
    public function getSecretID() : string
    {
        return $this->secretID;
    }
    /**
    * SecretID represents the ID of the specific secret that we're
    referencing.
    
    *
    * @param string $secretID
    *
    * @return self
    */
    public function setSecretID(string $secretID) : self
    {
        $this->initialized['secretID'] = true;
        $this->secretID = $secretID;
        return $this;
    }
    /**
    * SecretName is the name of the secret that this references,
    but this is just provided for lookup/display purposes. The
    secret in the reference will be identified by its ID.
    
    *
    * @return string
    */
    public function getSecretName() : string
    {
        return $this->secretName;
    }
    /**
    * SecretName is the name of the secret that this references,
    but this is just provided for lookup/display purposes. The
    secret in the reference will be identified by its ID.
    
    *
    * @param string $secretName
    *
    * @return self
    */
    public function setSecretName(string $secretName) : self
    {
        $this->initialized['secretName'] = true;
        $this->secretName = $secretName;
        return $this;
    }
}