<?php

namespace Docker\Api\Model;

class Service
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
     * User modifiable configuration for a service.
     *
     * @var ServiceSpec
     */
    public ServiceSpec $spec;
    /**
     * @var ServiceEndpoint
     */
    public ServiceEndpoint $endpoint;
    /**
     * The status of a service update.
     *
     * @var ServiceUpdateStatus
     */
    public ServiceUpdateStatus $updateStatus;
    /**
     * The status of the service's tasks. Provided only when requested as
     * part of a ServiceList operation.
     * 
     *
     * @var ServiceServiceStatus
     */
    public ServiceServiceStatus $serviceStatus;
    /**
     * The status of the service when it is in one of ReplicatedJob or
     * GlobalJob modes. Absent on Replicated and Global mode services. The
     * JobIteration is an ObjectVersion, but unlike the Service's version,
     * does not need to be sent with an update request.
     * 
     *
     * @var ServiceJobStatus
     */
    public ServiceJobStatus $jobStatus;
}