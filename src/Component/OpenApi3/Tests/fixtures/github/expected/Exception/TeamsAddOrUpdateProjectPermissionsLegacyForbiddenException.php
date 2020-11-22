<?php

namespace Github\Exception;

class TeamsAddOrUpdateProjectPermissionsLegacyForbiddenException extends \RuntimeException implements ClientException
{
    private $teamsTeamIdProjectsProjectIdPutResponse403;
    public function __construct(\Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403 $teamsTeamIdProjectsProjectIdPutResponse403)
    {
        parent::__construct('Response if the project is not owned by the organization', 403);
        $this->teamsTeamIdProjectsProjectIdPutResponse403 = $teamsTeamIdProjectsProjectIdPutResponse403;
    }
    public function getTeamsTeamIdProjectsProjectIdPutResponse403()
    {
        return $this->teamsTeamIdProjectsProjectIdPutResponse403;
    }
}