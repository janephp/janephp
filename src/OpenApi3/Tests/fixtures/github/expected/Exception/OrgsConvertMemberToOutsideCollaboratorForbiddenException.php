<?php

namespace Github\Exception;

class OrgsConvertMemberToOutsideCollaboratorForbiddenException extends ForbiddenException
{
    private $orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    public function __construct(\Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403 $orgsOrgOutsideCollaboratorsUsernamePutResponse403)
    {
        parent::__construct('response', 403);
        $this->orgsOrgOutsideCollaboratorsUsernamePutResponse403 = $orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    }
    public function getOrgsOrgOutsideCollaboratorsUsernamePutResponse403()
    {
        return $this->orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    }
}