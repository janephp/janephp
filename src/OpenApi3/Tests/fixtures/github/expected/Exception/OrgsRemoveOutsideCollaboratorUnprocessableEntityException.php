<?php

namespace Github\Exception;

class OrgsRemoveOutsideCollaboratorUnprocessableEntityException extends UnprocessableEntityException
{
    private $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    public function __construct(\Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422 $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422)
    {
        parent::__construct('Response if user is a member of the organization', 422);
        $this->orgsOrgOutsideCollaboratorsUsernameDeleteResponse422 = $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    }
    public function getOrgsOrgOutsideCollaboratorsUsernameDeleteResponse422()
    {
        return $this->orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    }
}