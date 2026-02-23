<?php

namespace PicturePark\API\Model;

class ContentShareReference
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
     * ID of the share.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the share.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Audit information.
     *
     * @var UserAudit|null
     */
    protected $audit;
    /**
     * Type of the share.
     *
     * @var string
     */
    protected $shareType;
    /**
     * The email address of the user who created the share.
     *
     * @var string|null
     */
    protected $emailAddress;
    /**
     * ID of the share.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * ID of the share.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the share.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the share.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Audit information.
     *
     * @return UserAudit|null
     */
    public function getAudit(): ?UserAudit
    {
        return $this->audit;
    }
    /**
     * Audit information.
     *
     * @param UserAudit|null $audit
     *
     * @return self
     */
    public function setAudit(?UserAudit $audit): self
    {
        $this->initialized['audit'] = true;
        $this->audit = $audit;
        return $this;
    }
    /**
     * Type of the share.
     *
     * @return string
     */
    public function getShareType(): string
    {
        return $this->shareType;
    }
    /**
     * Type of the share.
     *
     * @param string $shareType
     *
     * @return self
     */
    public function setShareType(string $shareType): self
    {
        $this->initialized['shareType'] = true;
        $this->shareType = $shareType;
        return $this;
    }
    /**
     * The email address of the user who created the share.
     *
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }
    /**
     * The email address of the user who created the share.
     *
     * @param string|null $emailAddress
     *
     * @return self
     */
    public function setEmailAddress(?string $emailAddress): self
    {
        $this->initialized['emailAddress'] = true;
        $this->emailAddress = $emailAddress;
        return $this;
    }
}