<?php

namespace Docker\Api\Model;

class TaskSpecContainerSpecSecretsItem
{
    /**
     * File represents a specific target that is backed by a file.
     * 
     *
     * @var TaskSpecContainerSpecSecretsItemFile
     */
    public TaskSpecContainerSpecSecretsItemFile $file;
    /**
     * SecretID represents the ID of the specific secret that we're
     * referencing.
     * 
     *
     * @var string
     */
    public string $secretID;
    /**
     * SecretName is the name of the secret that this references,
     * but this is just provided for lookup/display purposes. The
     * secret in the reference will be identified by its ID.
     * 
     *
     * @var string
     */
    public string $secretName;
}