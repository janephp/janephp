<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClientDisconnectClientList
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
     * @var list<ClientDisconnectClient>
     */
    protected $clientList;
    /**
     * @return list<ClientDisconnectClient>
     */
    public function getClientList(): array
    {
        return $this->clientList;
    }
    /**
     * @param list<ClientDisconnectClient> $clientList
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