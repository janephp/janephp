<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClientDeAuthClientList
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
     * @var list<ClientDeAuthClient>
     */
    protected $clientList;
    /**
     * @return list<ClientDeAuthClient>
     */
    public function getClientList(): array
    {
        return $this->clientList;
    }
    /**
     * @param list<ClientDeAuthClient> $clientList
     *
     * @return self
     */
    public function setClientList(array $clientList): self
    {
        $this->initialized['clientList'] = true;
        $this->clientList = $clientList;
        return $this;
    }
}