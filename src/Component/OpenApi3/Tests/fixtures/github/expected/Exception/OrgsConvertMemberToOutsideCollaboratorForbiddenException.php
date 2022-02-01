<?php

namespace Github\Exception;

class OrgsConvertMemberToOutsideCollaboratorForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403
     */
    private $orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    public function __construct(\Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403 $orgsOrgOutsideCollaboratorsUsernamePutResponse403)
    {
        parent::__construct('response');
        $this->orgsOrgOutsideCollaboratorsUsernamePutResponse403 = $orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    }
    public function getOrgsOrgOutsideCollaboratorsUsernamePutResponse403() : \Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403
    {
        return $this->orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    }
}