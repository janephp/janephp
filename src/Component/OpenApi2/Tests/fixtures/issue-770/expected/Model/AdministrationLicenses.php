<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLicenses
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
     * license description
     *
     * @var string
     */
    protected $description;
    /**
     * license name
     *
     * @var string
     */
    protected $name;
    /**
     * number of licenses
     *
     * @var int
     */
    protected $count;
    /**
     * license effective date
     *
     * @var string
     */
    protected $createTime;
    /**
     * license expiry date
     *
     * @var string
     */
    protected $expireDate;
    /**
     * license description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * license description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * license name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * license name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * number of licenses
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * number of licenses
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * license effective date
     *
     * @return string
     */
    public function getCreateTime(): string
    {
        return $this->createTime;
    }
    /**
     * license effective date
     *
     * @param string $createTime
     *
     * @return self
     */
    public function setCreateTime(string $createTime): self
    {
        $this->initialized['createTime'] = true;
        $this->createTime = $createTime;
        return $this;
    }
    /**
     * license expiry date
     *
     * @return string
     */
    public function getExpireDate(): string
    {
        return $this->expireDate;
    }
    /**
     * license expiry date
     *
     * @param string $expireDate
     *
     * @return self
     */
    public function setExpireDate(string $expireDate): self
    {
        $this->initialized['expireDate'] = true;
        $this->expireDate = $expireDate;
        return $this;
    }
}