<?php

namespace Jane\Generated\DigitalOcean\Model;

class Resource extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    protected $urn;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @var \DateTime
     */
    protected $assignedAt;
    /**
     * The links object contains the `self` object, which contains the resource relationship.
     *
     * @var ResourceLinks
     */
    protected $links;
    /**
     * The status of assigning and fetching the resources.
     *
     * @var string
     */
    protected $status;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @return string
     */
    public function getUrn(): string
    {
        return $this->urn;
    }
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @param string $urn
     *
     * @return self
     */
    public function setUrn(string $urn): self
    {
        $this->initialized['urn'] = true;
        $this->urn = $urn;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @return \DateTime
     */
    public function getAssignedAt(): \DateTime
    {
        return $this->assignedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @param \DateTime $assignedAt
     *
     * @return self
     */
    public function setAssignedAt(\DateTime $assignedAt): self
    {
        $this->initialized['assignedAt'] = true;
        $this->assignedAt = $assignedAt;
        return $this;
    }
    /**
     * The links object contains the `self` object, which contains the resource relationship.
     *
     * @return ResourceLinks
     */
    public function getLinks(): ResourceLinks
    {
        return $this->links;
    }
    /**
     * The links object contains the `self` object, which contains the resource relationship.
     *
     * @param ResourceLinks $links
     *
     * @return self
     */
    public function setLinks(ResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * The status of assigning and fetching the resources.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The status of assigning and fetching the resources.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}