<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileEspSecurityAssociationContent
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
     * espProposal Type of the ipsec profile
     *
     * @var string
     */
    protected $espProposalType;
    /**
     * espProposal list of the ipsec profile
     *
     * @var list<ProfileEspProposal>
     */
    protected $espProposals;
    /**
     * espProposal Type of the ipsec profile
     *
     * @return string
     */
    public function getEspProposalType(): string
    {
        return $this->espProposalType;
    }
    /**
     * espProposal Type of the ipsec profile
     *
     * @param string $espProposalType
     *
     * @return self
     */
    public function setEspProposalType(string $espProposalType): self
    {
        $this->initialized['espProposalType'] = true;
        $this->espProposalType = $espProposalType;
        return $this;
    }
    /**
     * espProposal list of the ipsec profile
     *
     * @return list<ProfileEspProposal>
     */
    public function getEspProposals(): array
    {
        return $this->espProposals;
    }
    /**
     * espProposal list of the ipsec profile
     *
     * @param list<ProfileEspProposal> $espProposals
     *
     * @return self
     */
    public function setEspProposals(array $espProposals): self
    {
        $this->initialized['espProposals'] = true;
        $this->espProposals = $espProposals;
        return $this;
    }
}