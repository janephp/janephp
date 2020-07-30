<?php

namespace Github\Exception;

class TeamsAddOrUpdateProjectPermissionsInOrgForbiddenException extends \RuntimeException implements ClientException
{
    private $orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403;
    public function __construct(\Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403 $orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403)
    {
        parent::__construct('Response if the project is not owned by the organization', 403);
        $this->orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403 = $orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403;
    }
    public function getOrgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403()
    {
        return $this->orgsOrgTeamsTeamSlugProjectsProjectIdPutResponse403;
    }
}