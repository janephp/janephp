<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBulkBlockClient
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
     * @var list<ProfileBulkBlockClientBlockClientListItem>
     */
    protected $blockClientList;
    /**
     * @var string
     */
    protected $description;
    /**
     * @return list<ProfileBulkBlockClientBlockClientListItem>
     */
    public function getBlockClientList(): array
    {
        return $this->blockClientList;
    }
    /**
     * @param list<ProfileBulkBlockClientBlockClientListItem> $blockClientList
     *
     * @return self
     */
    public function setBlockClientList(array $blockClientList): self
    {
        $this->initialized['blockClientList'] = true;
        $this->blockClientList = $blockClientList;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
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
}