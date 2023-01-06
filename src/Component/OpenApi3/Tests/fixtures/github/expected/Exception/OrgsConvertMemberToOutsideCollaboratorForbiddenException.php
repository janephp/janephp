<?php

namespace Github\Exception;

class OrgsConvertMemberToOutsideCollaboratorForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403
     */
    private $orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403 $orgsOrgOutsideCollaboratorsUsernamePutResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('response');
        $this->orgsOrgOutsideCollaboratorsUsernamePutResponse403 = $orgsOrgOutsideCollaboratorsUsernamePutResponse403;
        $this->response = $response;
    }
    public function getOrgsOrgOutsideCollaboratorsUsernamePutResponse403() : \Github\Model\OrgsOrgOutsideCollaboratorsUsernamePutResponse403
    {
        return $this->orgsOrgOutsideCollaboratorsUsernamePutResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}