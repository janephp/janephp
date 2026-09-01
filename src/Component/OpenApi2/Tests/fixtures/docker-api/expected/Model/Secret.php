<?php

namespace Docker\Api\Model;

class Secret
{
    /**
     * @var string
     */
    public string $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     * 
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     * 
     *
     * @var ObjectVersion
     */
    public ObjectVersion $version;
    /**
     * @var string
     */
    public string $createdAt;
    /**
     * @var string
     */
    public string $updatedAt;
    /**
     * @var SecretSpec
     */
    public SecretSpec $spec;
}