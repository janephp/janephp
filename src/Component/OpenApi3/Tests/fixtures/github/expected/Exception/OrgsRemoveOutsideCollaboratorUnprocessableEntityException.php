<?php

namespace Github\Exception;

class OrgsRemoveOutsideCollaboratorUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422
     */
    private $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422 $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Response if user is a member of the organization');
        $this->orgsOrgOutsideCollaboratorsUsernameDeleteResponse422 = $orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
        $this->response = $response;
    }
    public function getOrgsOrgOutsideCollaboratorsUsernameDeleteResponse422() : \Github\Model\OrgsOrgOutsideCollaboratorsUsernameDeleteResponse422
    {
        return $this->orgsOrgOutsideCollaboratorsUsernameDeleteResponse422;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}