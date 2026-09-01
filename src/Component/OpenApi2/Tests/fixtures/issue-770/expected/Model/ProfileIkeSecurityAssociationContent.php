<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileIkeSecurityAssociationContent
{
    /**
     * ikeProposal Type of the ipsec profile
     *
     * @var string
     */
    public string $ikeProposalType;
    /**
     * ikeProposal list of the ipsec profile
     *
     * @var list<ProfileIkeProposal>
     */
    public array $ikeProposals;
}