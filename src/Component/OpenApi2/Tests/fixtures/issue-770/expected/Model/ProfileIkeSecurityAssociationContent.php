<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileIkeSecurityAssociationContent
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
     * ikeProposal Type of the ipsec profile
     *
     * @var string
     */
    protected $ikeProposalType;
    /**
     * ikeProposal list of the ipsec profile
     *
     * @var list<ProfileIkeProposal>
     */
    protected $ikeProposals;
    /**
     * ikeProposal Type of the ipsec profile
     *
     * @return string
     */
    public function getIkeProposalType(): string
    {
        return $this->ikeProposalType;
    }
    /**
     * ikeProposal Type of the ipsec profile
     *
     * @param string $ikeProposalType
     *
     * @return self
     */
    public function setIkeProposalType(string $ikeProposalType): self
    {
        $this->initialized['ikeProposalType'] = true;
        $this->ikeProposalType = $ikeProposalType;
        return $this;
    }
    /**
     * ikeProposal list of the ipsec profile
     *
     * @return list<ProfileIkeProposal>
     */
    public function getIkeProposals(): array
    {
        return $this->ikeProposals;
    }
    /**
     * ikeProposal list of the ipsec profile
     *
     * @param list<ProfileIkeProposal> $ikeProposals
     *
     * @return self
     */
    public function setIkeProposals(array $ikeProposals): self
    {
        $this->initialized['ikeProposals'] = true;
        $this->ikeProposals = $ikeProposals;
        return $this;
    }
}