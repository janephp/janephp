<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileEspSecurityAssociationContent
{
    /**
     * espProposal Type of the ipsec profile
     *
     * @var string
     */
    public string $espProposalType;
    /**
     * espProposal list of the ipsec profile
     *
     * @var list<ProfileEspProposal>
     */
    public array $espProposals;
}