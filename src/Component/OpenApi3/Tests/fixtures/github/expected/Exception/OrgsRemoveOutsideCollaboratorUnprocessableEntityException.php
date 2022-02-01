<?php

namespace Github\Exception;

class OrgsRemoveOutsideCollaboratorUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422
     */
    private $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    public function __construct(\Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422 $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422)
    {
        parent::__construct('Response if user is a member of the organization');
        $this->orgsOrgOutsideCollaboratorsUsernameDeleteResponse422 = $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    }
    public function getOrgsOrgOutsideCollaboratorsUsernameDeleteResponse422() : \Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422
    {
        return $this->orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    }
}