<?php

namespace Github;

class Client extends \Github\Runtime\Client\Client
{
    /**
     * Lists repositories for the specified organization.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var string $type Specifies the types of repositories you want returned. Can be one of `all`, `public`, `private`, `forks`, `sources`, `member`, `internal`. Default: `all`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `type` can also be `internal`.
     *     @var string $sort Can be one of `created`, `updated`, `pushed`, `full_name`.
     *     @var string $direction Can be one of `asc` or `desc`. Default: when using `full_name`: `asc`, otherwise `desc`
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListForOrg(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListForOrg($org, $queryParameters), $fetch);
    }
    /**
    * Creates a new repository in the specified organization. The authenticated user must be a member of the organization.
    
    **OAuth scope requirements**
    
    When using [OAuth](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), authorizations must include:
    
    *   `public_repo` scope or `repo` scope to create a public repository
    *   `repo` scope to create a private repository
    *
    * @param string $org 
    * @param null|\Github\Model\OrgsOrgReposPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateInOrgForbiddenException
    * @throws \Github\Exception\ReposCreateInOrgUnprocessableEntityException
    *
    * @return null|\Github\Model\Repository|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateInOrg(string $org, ?\Github\Model\OrgsOrgReposPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateInOrg($org, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Removes the ability of a team to push to this branch. You can also remove push access for child teams.
    
    | Type    | Description                                                                                                                                         |
    | ------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `array` | Teams that should no longer have push access. Use the team's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposRemoveTeamAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposRemoveTeamAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRemoveTeamAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Lists the teams who have push access to this branch. The list includes child teams.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetTeamsWithAccessToProtectedBranchNotFoundException
    *
    * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetTeamsWithAccessToProtectedBranch(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetTeamsWithAccessToProtectedBranch($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Grants the specified teams push access for this branch. You can also give push access to child teams.
    
    | Type    | Description                                                                                                                                |
    | ------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
    | `array` | The teams that can have push access. Use the team's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposAddTeamAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposAddTeamAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposAddTeamAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Replaces the list of teams that have push access to this branch. This removes all teams that previously had push access and grants push access to the new list of teams. Team restrictions include child teams.
    
    | Type    | Description                                                                                                                                |
    | ------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
    | `array` | The teams that can have push access. Use the team's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposSetTeamAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposSetTeamAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposSetTeamAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Returns all branches where the given commit SHA is the HEAD, or latest commit for the branch.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $commitSha commit_sha+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListBranchesForHeadCommitUnsupportedMediaTypeException
    * @throws \Github\Exception\ReposListBranchesForHeadCommitUnprocessableEntityException
    *
    * @return null|\Github\Model\BranchShort[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListBranchesForHeadCommit(string $owner, string $repo, string $commitSha, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListBranchesForHeadCommit($owner, $repo, $commitSha), $fetch);
    }
    /**
     * Get the top 10 popular contents over the last 14 days.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetTopPathsForbiddenException
     *
     * @return null|\Github\Model\ContentTraffic[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetTopPaths(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetTopPaths($owner, $repo), $fetch);
    }
    /**
    * To ensure there can always be an active deployment, you can only delete an _inactive_ deployment. Anyone with `repo` or `repo_deployment` scopes can delete an inactive deployment.
    
    To set a deployment as inactive, you must:
    
    *   Create a new deployment that is active so that the system has a record of the current state, then delete the previously active deployment.
    *   Mark the active deployment as inactive by adding any non-successful deployment status.
    
    For more information, see "[Create a deployment](https://developer.github.com/v3/repos/deployments/#create-a-deployment)" and "[Create a deployment status](https://developer.github.com/v3/repos/deployments/#create-a-deployment-status)."
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $deploymentId deployment_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposDeleteDeploymentNotFoundException
    * @throws \Github\Exception\ReposDeleteDeploymentUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDeleteDeployment(string $owner, string $repo, int $deploymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteDeployment($owner, $repo, $deploymentId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $deploymentId deployment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetDeploymentNotFoundException
     *
     * @return null|\Github\Model\Deployment|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetDeployment(string $owner, string $repo, int $deploymentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetDeployment($owner, $repo, $deploymentId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $assetId asset_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteReleaseAsset(string $owner, string $repo, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteReleaseAsset($owner, $repo, $assetId), $fetch);
    }
    /**
     * To download the asset's binary content, set the `Accept` header of the request to [`application/octet-stream`](https://developer.github.com/v3/media/#media-types). The API will either redirect the client to the location, or stream it directly if possible. API clients should handle both a `200` or `302` response.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $assetId asset_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetReleaseAssetNotFoundException
     * @throws \Github\Exception\ReposGetReleaseAssetUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\ReleaseAsset|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetReleaseAsset(string $owner, string $repo, int $assetId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetReleaseAsset($owner, $repo, $assetId), $fetch);
    }
    /**
     * Users with push access to the repository can edit a release asset.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $assetId asset_id parameter
     * @param null|\Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReleaseAsset|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdateReleaseAsset(string $owner, string $repo, int $assetId, ?\Github\Model\ReposOwnerRepoReleasesAssetsAssetIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateReleaseAsset($owner, $repo, $assetId, $requestBody), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposRemoveStatusCheckContextsNotFoundException
     * @throws \Github\Exception\ReposRemoveStatusCheckContextsUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposRemoveStatusCheckContexts(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRemoveStatusCheckContexts($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetAllStatusCheckContextsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetAllStatusCheckContexts(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetAllStatusCheckContexts($owner, $repo, $branch), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposAddStatusCheckContextsUnprocessableEntityException
     * @throws \Github\Exception\ReposAddStatusCheckContextsForbiddenException
     * @throws \Github\Exception\ReposAddStatusCheckContextsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposAddStatusCheckContexts(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposAddStatusCheckContexts($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param null|array[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposSetStatusCheckContextsUnprocessableEntityException
     * @throws \Github\Exception\ReposSetStatusCheckContextsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposSetStatusCheckContexts(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposSetStatusCheckContexts($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Deletes a file in a repository.
    
    You can provide an additional `committer` parameter, which is an object containing information about the committer. Or, you can provide an `author` parameter, which is an object containing information about the author.
    
    The `author` section is optional and is filled in with the `committer` information if omitted. If the `committer` information is omitted, the authenticated user's information is used.
    
    You must provide values for both `name` and `email`, whether you choose to use `author` or `committer`. Otherwise, you'll receive a `422` status code.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $path path+ parameter
    * @param null|\Github\Model\ReposOwnerRepoContentsPathDeleteBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposDeleteFileUnprocessableEntityException
    * @throws \Github\Exception\ReposDeleteFileNotFoundException
    * @throws \Github\Exception\ReposDeleteFileConflictException
    * @throws \Github\Exception\ReposDeleteFileServiceUnavailableException
    *
    * @return null|\Github\Model\FileCommit|\Psr\Http\Message\ResponseInterface
    */
    public function reposDeleteFile(string $owner, string $repo, string $path, ?\Github\Model\ReposOwnerRepoContentsPathDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteFile($owner, $repo, $path, $requestBody), $fetch);
    }
    /**
    * Gets the contents of a file or directory in a repository. Specify the file path or directory in `:path`. If you omit
    `:path`, you will receive the contents of all files in the repository.
    
    Files and symlinks support [a custom media type](https://developer.github.com/v3/repos/contents/#custom-media-types) for
    retrieving the raw content or rendered HTML (when supported). All content types support [a custom media
    type](https://developer.github.com/v3/repos/contents/#custom-media-types) to ensure the content is returned in a consistent
    object format.
    
    **Note**:
    *   To get a repository's contents recursively, you can [recursively get the tree](https://developer.github.com/v3/git/trees/).
    *   This API has an upper limit of 1,000 files for a directory. If you need to retrieve more files, use the [Git Trees
    API](https://developer.github.com/v3/git/trees/#get-a-tree).
    *   This API supports files up to 1 megabyte in size.
    
    #### If the content is a directory
    The response will be an array of objects, one object for each item in the directory.
    When listing the contents of a directory, submodules have their "type" specified as "file". Logically, the value
    _should_ be "submodule". This behavior exists in API v3 [for backwards compatibility purposes](https://git.io/v1YCW).
    In the next major version of the API, the type will be returned as "submodule".
    
    #### If the content is a symlink 
    If the requested `:path` points to a symlink, and the symlink's target is a normal file in the repository, then the
    API responds with the content of the file (in the format shown in the example. Otherwise, the API responds with an object 
    describing the symlink itself.
    
    #### If the content is a submodule
    The `submodule_git_url` identifies the location of the submodule repository, and the `sha` identifies a specific
    commit within the submodule repository. Git uses the given URL when cloning the submodule repository, and checks out
    the submodule at that specific commit.
    
    If the submodule repository is not hosted on github.com, the Git URLs (`git_url` and `_links["git"]`) and the
    github.com URLs (`html_url` and `_links["html"]`) will have null values.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $path path+ parameter
    * @param array $queryParameters {
    *     @var string $ref The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetContentNotFoundException
    * @throws \Github\Exception\ReposGetContentForbiddenException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetContent(string $owner, string $repo, string $path, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetContent($owner, $repo, $path, $queryParameters), $fetch);
    }
    /**
     * Creates a new file or replaces an existing file in a repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $path path+ parameter
     * @param null|\Github\Model\ReposOwnerRepoContentsPathPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposCreateOrUpdateFileContentsNotFoundException
     * @throws \Github\Exception\ReposCreateOrUpdateFileContentsUnprocessableEntityException
     * @throws \Github\Exception\ReposCreateOrUpdateFileContentsConflictException
     *
     * @return null|\Github\Model\FileCommit|\Psr\Http\Message\ResponseInterface
     */
    public function reposCreateOrUpdateFileContents(string $owner, string $repo, string $path, ?\Github\Model\ReposOwnerRepoContentsPathPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateOrUpdateFileContents($owner, $repo, $path, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetAllTopicsUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposGetAllTopicsNotFoundException
     *
     * @return null|\Github\Model\Topic|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetAllTopics(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetAllTopics($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoTopicsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposReplaceAllTopicsUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposReplaceAllTopicsNotFoundException
     * @throws \Github\Exception\ReposReplaceAllTopicsUnprocessableEntityException
     *
     * @return null|\Github\Model\Topic|\Psr\Http\Message\ResponseInterface
     */
    public function reposReplaceAllTopics(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoTopicsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposReplaceAllTopics($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Disables dependency alerts and the dependency graph for a repository. The authenticated user must have admin access to the repository. For more information, see "[About security alerts for vulnerable dependencies](https://help.github.com/en/articles/about-security-alerts-for-vulnerable-dependencies)".
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDisableVulnerabilityAlerts(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDisableVulnerabilityAlerts($owner, $repo), $fetch);
    }
    /**
     * Shows whether dependency alerts are enabled or disabled for a repository. The authenticated user must have admin access to the repository. For more information, see "[About security alerts for vulnerable dependencies](https://help.github.com/en/articles/about-security-alerts-for-vulnerable-dependencies)".
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposCheckVulnerabilityAlertsNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposCheckVulnerabilityAlerts(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCheckVulnerabilityAlerts($owner, $repo), $fetch);
    }
    /**
     * Enables dependency alerts and the dependency graph for a repository. The authenticated user must have admin access to the repository. For more information, see "[About security alerts for vulnerable dependencies](https://help.github.com/en/articles/about-security-alerts-for-vulnerable-dependencies)".
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposEnableVulnerabilityAlerts(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposEnableVulnerabilityAlerts($owner, $repo), $fetch);
    }
    /**
     * Simple filtering of deployments is available via query parameters:
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $sha The SHA recorded at creation time.
     *     @var string $ref The name of the ref. This can be a branch, tag, or SHA.
     *     @var string $task The name of the task for the deployment (e.g., `deploy` or `deploy:migrations`).
     *     @var string $environment The name of the environment that was deployed to (e.g., `staging` or `production`).
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Deployment[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListDeployments(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListDeployments($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Deployments offer a few configurable parameters with certain defaults.
    
    The `ref` parameter can be any named branch, tag, or SHA. At GitHub we often deploy branches and verify them
    before we merge a pull request.
    
    The `environment` parameter allows deployments to be issued to different runtime environments. Teams often have
    multiple environments for verifying their applications, such as `production`, `staging`, and `qa`. This parameter
    makes it easier to track which environments have requested deployments. The default environment is `production`.
    
    The `auto_merge` parameter is used to ensure that the requested ref is not behind the repository's default branch. If
    the ref _is_ behind the default branch for the repository, we will attempt to merge it for you. If the merge succeeds,
    the API will return a successful merge commit. If merge conflicts prevent the merge from succeeding, the API will
    return a failure response.
    
    By default, [commit statuses](https://developer.github.com/v3/repos/statuses) for every submitted context must be in a `success`
    state. The `required_contexts` parameter allows you to specify a subset of contexts that must be `success`, or to
    specify contexts that have not yet been submitted. You are not required to use commit statuses to deploy. If you do
    not require any contexts or create any commit statuses, the deployment will always succeed.
    
    The `payload` parameter is available for any extra information that a deployment system might need. It is a JSON text
    field that will be passed on when a deployment event is dispatched.
    
    The `task` parameter is used by the deployment system to allow different execution paths. In the web world this might
    be `deploy:migrations` to run schema changes on the system. In the compiled world this could be a flag to compile an
    application with debugging enabled.
    
    Users with `repo` or `repo_deployment` scopes can create a deployment for a given ref.
    
    #### Merged branch response
    You will see this response when GitHub automatically merges the base branch into the topic branch instead of creating
    a deployment. This auto-merge happens when:
    *   Auto-merge option is enabled in the repository
    *   Topic branch does not include the latest changes on the base branch, which is `master` in the response example
    *   There are no merge conflicts
    
    If there are no new commits in the base branch, a new request to create a deployment should give a successful
    response.
    
    #### Merge conflict response
    This error happens when the `auto_merge` option is enabled and when the default branch (in this case `master`), can't
    be merged into the branch that's being deployed (in this case `topic-branch`), due to merge conflicts.
    
    #### Failed commit status checks
    This error happens when the `required_contexts` parameter indicates that one or more contexts need to have a `success`
    status for the commit to be deployed, but one or more of the required contexts do not have a state of `success`.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoDeploymentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateDeploymentConflictException
    * @throws \Github\Exception\ReposCreateDeploymentUnprocessableEntityException
    *
    * @return null|\Github\Model\Deployment|\Github\Model\ReposOwnerRepoDeploymentsPostResponse202|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateDeployment(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoDeploymentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateDeployment($owner, $repo, $requestBody), $fetch);
    }
    /**
     * This endpoint will return all community profile metrics, including an overall health score, repository description, the presence of documentation, detected code of conduct, detected license, and the presence of ISSUE\_TEMPLATE, PULL\_REQUEST\_TEMPLATE, README, and CONTRIBUTING files.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\CommunityProfile|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetCommunityProfileMetrics(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCommunityProfileMetrics($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposDeletePagesSiteUnprocessableEntityException
     * @throws \Github\Exception\ReposDeletePagesSiteUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposDeletePagesSiteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeletePagesSite(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeletePagesSite($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetPagesNotFoundException
     *
     * @return null|\Github\Model\Page|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetPages(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetPages($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoPagesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposCreatePagesSiteUnprocessableEntityException
     * @throws \Github\Exception\ReposCreatePagesSiteUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposCreatePagesSiteConflictException
     *
     * @return null|\Github\Model\Page|\Psr\Http\Message\ResponseInterface
     */
    public function reposCreatePagesSite(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoPagesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreatePagesSite($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoPagesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposUpdateInformationAboutPagesSiteUnprocessableEntityException
     * @throws \Github\Exception\ReposUpdateInformationAboutPagesSiteBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdateInformationAboutPagesSite(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoPagesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateInformationAboutPagesSite($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposDeletePullRequestReviewProtectionNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeletePullRequestReviewProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeletePullRequestReviewProtection($owner, $repo, $branch), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetPullRequestReviewProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetPullRequestReviewProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Updating pull request review enforcement requires admin or owner permissions to the repository and branch protection to be enabled.
    
    **Note**: Passing new arrays of `users` and `teams` replaces their previous values.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|\Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposUpdatePullRequestReviewProtectionUnprocessableEntityException
    *
    * @return null|\Github\Model\ProtectedBranchPullRequestReview|\Psr\Http\Message\ResponseInterface
    */
    public function reposUpdatePullRequestReviewProtection(string $owner, string $repo, string $branch, ?\Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdatePullRequestReviewProtection($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
     * Get the top 10 referrers over the last 14 days.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetTopReferrersForbiddenException
     *
     * @return null|\Github\Model\ReferrerTraffic[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetTopReferrers(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetTopReferrers($owner, $repo), $fetch);
    }
    /**
    * Users with pull access in a repository can view commit statuses for a given ref. The ref can be a SHA, a branch name, or a tag name. Statuses are returned in reverse chronological order. The first status in the list will be the latest one.
    
    This resource is also available via a legacy route: `GET /repos/:owner/:repo/statuses/:ref`.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref+ parameter
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Status[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListCommitStatusesForRef(string $owner, string $repo, string $ref, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListCommitStatusesForRef($owner, $repo, $ref, $queryParameters), $fetch);
    }
    /**
    * Both `:base` and `:head` must be branch names in `:repo`. To compare branches across other repositories in the same network as `:repo`, use the format `<USERNAME>:branch`.
    
    The response from the API is equivalent to running the `git log base..head` command; however, commits are returned in chronological order. Pass the appropriate [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) to fetch diff and patch formats.
    
    The response also includes details on the files that were changed between the two commits. This includes the status of the change (for example, if a file was added, removed, modified, or renamed), and details of the change itself. For example, files with a `renamed` status have a `previous_filename` field showing the previous filename of the file, and files with a `modified` status have a `patch` field showing the changes made to the file.
    
    **Working with large comparisons**
    
    The response will include a comparison of up to 250 commits. If you are working with a larger commit range, you can use the [List commits](https://developer.github.com/v3/repos/commits/#list-commits) to enumerate all commits in the range.
    
    For comparisons with extremely large diffs, you may receive an error response indicating that the diff took too long to generate. You can typically resolve this error by using a smaller commit range.
    
    **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $base base parameter
    * @param string $head head parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCompareCommitsInternalServerErrorException
    * @throws \Github\Exception\ReposCompareCommitsNotFoundException
    *
    * @return null|\Github\Model\CommitComparison|\Psr\Http\Message\ResponseInterface
    */
    public function reposCompareCommits(string $owner, string $repo, string $base, string $head, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCompareCommits($owner, $repo, $base, $head), $fetch);
    }
    /**
     * Lists all pull requests containing the provided commit SHA, which can be from any point in the commit history. The results will include open and closed pull requests. Additional preview headers may be required to see certain details for associated pull requests, such as whether a pull request is in a draft state. For more information about previews that might affect this endpoint, see the [List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests) endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $commitSha commit_sha+ parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposListPullRequestsAssociatedWithCommitUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\PullRequestSimple[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListPullRequestsAssociatedWithCommit(string $owner, string $repo, string $commitSha, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListPullRequestsAssociatedWithCommit($owner, $repo, $commitSha, $queryParameters), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Removing admin enforcement requires admin or owner permissions to the repository and branch protection to be enabled.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposDeleteAdminBranchProtectionNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDeleteAdminBranchProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteAdminBranchProtection($owner, $repo, $branch), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ProtectedBranchAdminEnforced|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetAdminBranchProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetAdminBranchProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Adding admin enforcement requires admin or owner permissions to the repository and branch protection to be enabled.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ProtectedBranchAdminEnforced|\Psr\Http\Message\ResponseInterface
    */
    public function reposSetAdminBranchProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposSetAdminBranchProtection($owner, $repo, $branch), $fetch);
    }
    /**
     * Users with pull access can view a deployment status for a deployment:
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $deploymentId deployment_id parameter
     * @param int $statusId status_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetDeploymentStatusNotFoundException
     * @throws \Github\Exception\ReposGetDeploymentStatusUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\DeploymentStatus|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetDeploymentStatus(string $owner, string $repo, int $deploymentId, int $statusId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetDeploymentStatus($owner, $repo, $deploymentId, $statusId), $fetch);
    }
    /**
     * Disables automated security fixes for a repository. The authenticated user must have admin access to the repository. For more information, see "[Configuring automated security fixes](https://help.github.com/en/articles/configuring-automated-security-fixes)".
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDisableAutomatedSecurityFixes(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDisableAutomatedSecurityFixes($owner, $repo), $fetch);
    }
    /**
     * Enables automated security fixes for a repository. The authenticated user must have admin access to the repository. For more information, see "[Configuring automated security fixes](https://help.github.com/en/articles/configuring-automated-security-fixes)".
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposEnableAutomatedSecurityFixes(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposEnableAutomatedSecurityFixes($owner, $repo), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    When authenticated with admin or owner permissions to the repository, you can use this endpoint to disable required signed commits on a branch. You must enable branch protection to require signed commits.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposDeleteCommitSignatureProtectionNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDeleteCommitSignatureProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteCommitSignatureProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    When authenticated with admin or owner permissions to the repository, you can use this endpoint to check whether a branch requires signed commits. An enabled status of `true` indicates you must sign commits on this branch. For more information, see [Signing commits with GPG](https://help.github.com/articles/signing-commits-with-gpg) in GitHub Help.
    
    **Note**: You must enable branch protection to require signed commits.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetCommitSignatureProtectionNotFoundException
    *
    * @return null|\Github\Model\ProtectedBranchAdminEnforced|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetCommitSignatureProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCommitSignatureProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    When authenticated with admin or owner permissions to the repository, you can use this endpoint to require signed commits on a branch. You must enable branch protection to require signed commits.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateCommitSignatureProtectionNotFoundException
    *
    * @return null|\Github\Model\ProtectedBranchAdminEnforced|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateCommitSignatureProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateCommitSignatureProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Removes the ability of a user to push to this branch.
    
    | Type    | Description                                                                                                                                   |
    | ------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
    | `array` | Usernames of the people who should no longer have push access. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposRemoveUserAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposRemoveUserAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRemoveUserAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Lists the people who have push access to this branch.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetUsersWithAccessToProtectedBranchNotFoundException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetUsersWithAccessToProtectedBranch(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetUsersWithAccessToProtectedBranch($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Grants the specified people push access for this branch.
    
    | Type    | Description                                                                                                                   |
    | ------- | ----------------------------------------------------------------------------------------------------------------------------- |
    | `array` | Usernames for people who can have push access. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposAddUserAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposAddUserAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposAddUserAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Replaces the list of people that have push access to this branch. This removes all people that previously had push access and grants push access to the new list of people.
    
    | Type    | Description                                                                                                                   |
    | ------- | ----------------------------------------------------------------------------------------------------------------------------- |
    | `array` | Usernames for people who can have push access. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposSetUserAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposSetUserAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposSetUserAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Lists all public repositories in the order that they were created.
    
    Note: Pagination is powered exclusively by the `since` parameter. Use the [Link header](https://developer.github.com/v3/#link-header) to get the URL for the next page of repositories.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var string $visibility 
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListPublicUnprocessableEntityException
    *
    * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListPublic(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListPublic($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var bool $protected Setting to `true` returns only protected branches. When set to `false`, only unprotected branches are returned. Omitting this parameter returns all branches.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposListBranchesNotFoundException
     *
     * @return null|\Github\Model\ShortBranch[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListBranches(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListBranches($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * When authenticating as a user, this endpoint will list all currently open repository invitations for that user.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposListInvitationsForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\ReposListInvitationsForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ReposListInvitationsForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Github\Model\RepositoryInvitation[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListInvitationsForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListInvitationsForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetBranchUnsupportedMediaTypeException
     * @throws \Github\Exception\ReposGetBranchNotFoundException
     *
     * @return null|\Github\Model\BranchWithProtection|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetBranch(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetBranch($owner, $repo, $branch), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\DeployKey[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListDeployKeys(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListDeployKeys($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * You can create a read-only deploy key.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoKeysPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposCreateDeployKeyUnprocessableEntityException
     *
     * @return null|\Github\Model\DeployKey|\Psr\Http\Message\ResponseInterface
     */
    public function reposCreateDeployKey(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoKeysPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateDeployKey($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $buildId build_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\PageBuild|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetPagesBuild(string $owner, string $repo, int $buildId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetPagesBuild($owner, $repo, $buildId), $fetch);
    }
    /**
     * Get the total number of clones and breakdown per day or week for the last 14 days. Timestamps are aligned to UTC midnight of the beginning of the day or week. Week begins on Monday.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $per Must be one of: `day`, `week`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetClonesForbiddenException
     *
     * @return null|\Github\Model\CloneTraffic|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetClones(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetClones($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposDeleteWebhookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteWebhook(string $owner, string $repo, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteWebhook($owner, $repo, $hookId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetWebhookNotFoundException
     *
     * @return null|\Github\Model\Hook|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetWebhook(string $owner, string $repo, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetWebhook($owner, $repo, $hookId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $hookId 
     * @param null|\Github\Model\ReposOwnerRepoHooksHookIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposUpdateWebhookUnprocessableEntityException
     * @throws \Github\Exception\ReposUpdateWebhookNotFoundException
     *
     * @return null|\Github\Model\Hook|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdateWebhook(string $owner, string $repo, int $hookId, ?\Github\Model\ReposOwnerRepoHooksHookIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateWebhook($owner, $repo, $hookId, $requestBody), $fetch);
    }
    /**
    * This returns a list of releases, which does not include regular Git tags that have not been associated with a release. To get a list of Git tags, use the [Repository Tags API](https://developer.github.com/v3/repos/#list-repository-tags).
    
    Information about published releases are available to everyone. Only users with push access will receive listings for draft releases.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListReleasesNotFoundException
    *
    * @return null|\Github\Model\Release[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListReleases(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListReleases($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Users with push access to the repository can create a release.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoReleasesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateReleaseUnprocessableEntityException
    *
    * @return null|\Github\Model\Release|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateRelease(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoReleasesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateRelease($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Creates a new repository using a repository template. Use the `template_owner` and `template_repo` route parameters to specify the repository to use as the template. The authenticated user must own or be a member of an organization that owns the repository. To check if a repository is available to use as a template, get the repository's information using the [Get a repository](https://developer.github.com/v3/repos/#get-a-repository) endpoint and check that the `is_template` key is `true`.
    
    **OAuth scope requirements**
    
    When using [OAuth](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), authorizations must include:
    
    *   `public_repo` scope or `repo` scope to create a public repository
    *   `repo` scope to create a private repository
    *
    * @param string $templateOwner template_owner parameter
    * @param string $templateRepo template_repo parameter
    * @param null|\Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Repository|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateUsingTemplate(string $templateOwner, string $templateRepo, ?\Github\Model\ReposTemplateOwnerTemplateRepoGeneratePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateUsingTemplate($templateOwner, $templateRepo, $requestBody), $fetch);
    }
    /**
     * Lists public repositories for the specified user.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var string $type Can be one of `all`, `owner`, `member`.
     *     @var string $sort Can be one of `created`, `updated`, `pushed`, `full_name`.
     *     @var string $direction Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListForUser($username, $queryParameters), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposRemoveStatusCheckProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRemoveStatusCheckProtection($owner, $repo, $branch), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetStatusChecksProtectionNotFoundException
     *
     * @return null|\Github\Model\StatusCheckPolicy|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetStatusChecksProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetStatusChecksProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Updating required status checks requires admin or owner permissions to the repository and branch protection to be enabled.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|\Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredStatusChecksPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposUpdateStatusCheckProtectionNotFoundException
    * @throws \Github\Exception\ReposUpdateStatusCheckProtectionUnprocessableEntityException
    *
    * @return null|\Github\Model\StatusCheckPolicy|\Psr\Http\Message\ResponseInterface
    */
    public function reposUpdateStatusCheckProtection(string $owner, string $repo, string $branch, ?\Github\Model\ReposOwnerRepoBranchesBranchProtectionRequiredStatusChecksPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateStatusCheckProtection($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Deleting a repository requires admin access. If OAuth is used, the `delete_repo` scope is required.
    
    If an organization owner has configured the organization to prevent members from deleting organization-owned
    repositories, you will get a `403 Forbidden` response.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposDeleteForbiddenException
    * @throws \Github\Exception\ReposDeleteNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDelete(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDelete($owner, $repo), $fetch);
    }
    /**
    * When you pass the `scarlet-witch-preview` media type, requests to get a repository will also return the repository's code of conduct if it can be detected from the repository's code of conduct file.
    
    The `parent` and `source` objects are present when the repository is a fork. `parent` is the repository this repository was forked from, `source` is the ultimate source for the network.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetForbiddenException
    * @throws \Github\Exception\ReposGetNotFoundException
    *
    * @return null|\Github\Model\FullRepository|\Psr\Http\Message\ResponseInterface
    */
    public function reposGet(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGet($owner, $repo), $fetch);
    }
    /**
     * **Note**: To edit a repository's topics, use the [Replace all repository topics](https://developer.github.com/v3/repos/#replace-all-repository-topics) endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposUpdateForbiddenException
     * @throws \Github\Exception\ReposUpdateUnprocessableEntityException
     * @throws \Github\Exception\ReposUpdateNotFoundException
     *
     * @return null|\Github\Model\FullRepository|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdate(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdate($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Disables the ability to restrict who can push to this branch.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDeleteAccessRestrictions(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteAccessRestrictions($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Lists who has access to this protected branch.
    
    **Note**: Users, apps, and teams `restrictions` are only available for organization-owned repositories.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetAccessRestrictionsNotFoundException
    *
    * @return null|\Github\Model\BranchRestrictionPolicy|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetAccessRestrictions(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetAccessRestrictions($owner, $repo, $branch), $fetch);
    }
    /**
     * Deploy keys are immutable. If you need to update a key, remove the key and create a new one instead.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $keyId key_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteDeployKey(string $owner, string $repo, int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteDeployKey($owner, $repo, $keyId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $keyId key_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetDeployKeyNotFoundException
     *
     * @return null|\Github\Model\DeployKey|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetDeployKey(string $owner, string $repo, int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetDeployKey($owner, $repo, $keyId), $fetch);
    }
    /**
     * Users with push access to the repository can delete a release.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $releaseId release_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteRelease(string $owner, string $repo, int $releaseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteRelease($owner, $repo, $releaseId), $fetch);
    }
    /**
     * **Note:** This returns an `upload_url` key corresponding to the endpoint for uploading release assets. This key is a [hypermedia resource](https://developer.github.com/v3/#hypermedia).
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $releaseId release_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetReleaseNotFoundException
     *
     * @return null|\Github\Model\Release|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetRelease(string $owner, string $repo, int $releaseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetRelease($owner, $repo, $releaseId), $fetch);
    }
    /**
     * Users with push access to the repository can edit a release.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $releaseId release_id parameter
     * @param null|\Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Release|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdateRelease(string $owner, string $repo, int $releaseId, ?\Github\Model\ReposOwnerRepoReleasesReleaseIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateRelease($owner, $repo, $releaseId, $requestBody), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposDeleteBranchProtectionForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteBranchProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteBranchProtection($owner, $repo, $branch), $fetch);
    }
    /**
     * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $branch branch+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetBranchProtectionNotFoundException
     *
     * @return null|\Github\Model\BranchProtection|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetBranchProtection(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetBranchProtection($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Protecting a branch requires admin or owner permissions to the repository.
    
    **Note**: Passing new arrays of `users` and `teams` replaces their previous values.
    
    **Note**: The list of users, apps, and teams in total is limited to 100 items.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|\Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposUpdateBranchProtectionForbiddenException
    * @throws \Github\Exception\ReposUpdateBranchProtectionUnsupportedMediaTypeException
    * @throws \Github\Exception\ReposUpdateBranchProtectionUnprocessableEntityException
    * @throws \Github\Exception\ReposUpdateBranchProtectionNotFoundException
    *
    * @return null|\Github\Model\ProtectedBranch|\Psr\Http\Message\ResponseInterface
    */
    public function reposUpdateBranchProtection(string $owner, string $repo, string $branch, ?\Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateBranchProtection($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
     * When authenticating as a user with admin rights to a repository, this endpoint will list all currently open repository invitations.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\RepositoryInvitation[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListInvitations(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListInvitations($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $invitationId invitation_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposDeclineInvitationConflictException
     * @throws \Github\Exception\ReposDeclineInvitationNotFoundException
     * @throws \Github\Exception\ReposDeclineInvitationForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeclineInvitation(int $invitationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeclineInvitation($invitationId), $fetch);
    }
    /**
     * 
     *
     * @param int $invitationId invitation_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposAcceptInvitationForbiddenException
     * @throws \Github\Exception\ReposAcceptInvitationConflictException
     * @throws \Github\Exception\ReposAcceptInvitationNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposAcceptInvitation(int $invitationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposAcceptInvitation($invitationId), $fetch);
    }
    /**
     * This will trigger a [ping event](https://developer.github.com/webhooks/#ping-event) to be sent to the hook.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposPingWebhookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposPingWebhook(string $owner, string $repo, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposPingWebhook($owner, $repo, $hookId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Tag[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListTags(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListTags($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListTeams(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListTeams($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Returns the last year of commit activity grouped by week. The `days` array is a group of commits per day, starting on `Sunday`.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\CommitActivity[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetCommitActivityStats(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCommitActivityStats($owner, $repo), $fetch);
    }
    /**
     * Lists languages for the specified repository. The value shown for each language is the number of bytes of code written in that language.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposListLanguages(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListLanguages($owner, $repo), $fetch);
    }
    /**
    * You can use this endpoint to trigger a webhook event called `repository_dispatch` when you want activity that happens outside of GitHub to trigger a GitHub Actions workflow or GitHub App webhook. You must configure your GitHub Actions workflow or GitHub App to run when the `repository_dispatch` event occurs. For an example `repository_dispatch` webhook payload, see "[RepositoryDispatchEvent](https://developer.github.com/webhooks/event-payloads/#repository_dispatch)."
    
    The `client_payload` parameter is available for any extra information that your workflow might need. This parameter is a JSON payload that will be passed on when the webhook event is dispatched. For example, the `client_payload` can include a message that a user would like to send using a GitHub Actions workflow. Or the `client_payload` can be used as a test to debug your workflow. For a test example, see the [input example](https://developer.github.com/v3/repos/#example-4).
    
    To give you write access to the repository, you must use a personal access token with the `repo` scope. For more information, see "[Creating a personal access token for the command line](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line)" in the GitHub Help documentation.
    
    This input example shows how you can use the `client_payload` as a test to debug your workflow.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoDispatchesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateDispatchEventUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateDispatchEvent(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoDispatchesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateDispatchEvent($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Each array contains the day number, hour number, and number of commits:
    
    *   `0-6`: Sunday - Saturday
    *   `0-23`: Hour of day
    *   Number of commits
    
    For example, `[2, 14, 25]` indicates that there were 25 total commits, during the 2:00pm hour on Tuesdays. All times are based on the time zone of individual commits.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetPunchCardStats(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetPunchCardStats($owner, $repo), $fetch);
    }
    /**
     * A transfer request will need to be accepted by the new owner when transferring a personal repository to another user. The response will contain the original `owner`, and the transfer will continue asynchronously. For more details on the requirements to transfer personal and organization-owned repositories, see [about repository transfers](https://help.github.com/articles/about-repository-transfers/).
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoTransferPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Repository|\Psr\Http\Message\ResponseInterface
     */
    public function reposTransfer(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoTransferPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposTransfer($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Lists repositories that the authenticated user has explicit permission (`:read`, `:write`, or `:admin`) to access.
    
    The authenticated user has explicit permission to access repositories they own, repositories where they are a collaborator, and repositories that they can access through an organization membership.
    *
    * @param array $queryParameters {
    *     @var string $visibility Can be one of `all`, `public`, or `private`.
    *     @var string $affiliation Comma-separated list of values. Can include:  
    \* `owner`: Repositories that are owned by the authenticated user.  
    \* `collaborator`: Repositories that the user has been added to as a collaborator.  
    \* `organization_member`: Repositories that the user has access to through being a member of an organization. This includes every repository on every team that the user is on.
    *     @var string $type Can be one of `all`, `owner`, `public`, `private`, `member`. Default: `all`  
     
    Will cause a `422` error if used in the same request as **visibility** or **affiliation**. Will cause a `422` error if used in the same request as **visibility** or **affiliation**.
    *     @var string $sort Can be one of `created`, `updated`, `pushed`, `full_name`.
    *     @var string $direction Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var string $before Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListForAuthenticatedUserIAmATeapotException
    * @throws \Github\Exception\ReposListForAuthenticatedUserUnprocessableEntityException
    * @throws \Github\Exception\ReposListForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\ReposListForAuthenticatedUserUnauthorizedException
    *
    * @return null|\Github\Model\Repository[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * Creates a new repository for the authenticated user.
    
    **OAuth scope requirements**
    
    When using [OAuth](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), authorizations must include:
    
    *   `public_repo` scope or `repo` scope to create a public repository
    *   `repo` scope to create a private repository
    *
    * @param null|\Github\Model\UserReposPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateForAuthenticatedUserUnauthorizedException
    * @throws \Github\Exception\ReposCreateForAuthenticatedUserNotFoundException
    * @throws \Github\Exception\ReposCreateForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\ReposCreateForAuthenticatedUserUnprocessableEntityException
    * @throws \Github\Exception\ReposCreateForAuthenticatedUserBadRequestException
    *
    * @return null|\Github\Model\Repository|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateForAuthenticatedUser(?\Github\Model\UserReposPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateForAuthenticatedUser($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\PageBuild[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListPagesBuilds(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListPagesBuilds($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * You can request that your site be built from the latest revision on the default branch. This has the same effect as pushing a commit to your default branch, but does not require an additional commit. Manually triggering page builds can be helpful when diagnosing build warnings and failures.
    
    Build requests are limited to one concurrent build per repository and one concurrent build per requester. If you request a build while another is still in progress, the second request will be queued until the first completes.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PageBuildStatus|\Psr\Http\Message\ResponseInterface
    */
    public function reposRequestPagesBuild(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRequestPagesBuild($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposRemoveCollaborator(string $owner, string $repo, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRemoveCollaborator($owner, $repo, $username), $fetch);
    }
    /**
    * For organization-owned repositories, the list of collaborators includes outside collaborators, organization members that are direct collaborators, organization members with access through team memberships, organization members with access through default organization permissions, and organization owners.
    
    Team members will include the members of child teams.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCheckCollaboratorNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposCheckCollaborator(string $owner, string $repo, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCheckCollaborator($owner, $repo, $username), $fetch);
    }
    /**
    * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    
    For more information the permission levels, see "[Repository permission levels for an organization](https://help.github.com/en/github/setting-up-and-managing-organizations-and-teams/repository-permission-levels-for-an-organization#permission-levels-for-repositories-owned-by-an-organization)".
    
    Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    
    The invitee will receive a notification that they have been invited to the repository, which they must accept or decline. They may do this via the notifications page, the email they receive, or by using the [repository invitations API endpoints](https://developer.github.com/v3/repos/invitations/).
    
    **Rate limits**
    
    To prevent abuse, you are limited to sending 50 invitations to a repository per 24 hour period. Note there is no limit if you are inviting organization members to an organization repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $username 
    * @param null|\Github\Model\ReposOwnerRepoCollaboratorsUsernamePutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposAddCollaboratorUnprocessableEntityException
    * @throws \Github\Exception\ReposAddCollaboratorForbiddenException
    *
    * @return null|\Github\Model\RepositoryInvitation|\Psr\Http\Message\ResponseInterface
    */
    public function reposAddCollaborator(string $owner, string $repo, string $username, ?\Github\Model\ReposOwnerRepoCollaboratorsUsernamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposAddCollaborator($owner, $repo, $username, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $sort The sort order. Can be either `newest`, `oldest`, or `stargazers`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposListForksBadRequestException
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListForks(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListForks($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Create a fork for the authenticated user.
     **Note**: Forking a Repository happens asynchronously. You may have to wait a short period of time before you can access the git objects. If this takes longer than 5 minutes, be sure to contact [GitHub Support](https://github.com/contact) or [GitHub Premium Support](https://premium.githubsupport.com).
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoForksPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposCreateForkBadRequestException
     * @throws \Github\Exception\ReposCreateForkUnprocessableEntityException
     * @throws \Github\Exception\ReposCreateForkForbiddenException
     * @throws \Github\Exception\ReposCreateForkNotFoundException
     *
     * @return null|\Github\Model\Repository|\Psr\Http\Message\ResponseInterface
     */
    public function reposCreateFork(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoForksPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateFork($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Get the total number of views and breakdown per day or week for the last 14 days. Timestamps are aligned to UTC midnight of the beginning of the day or week. Week begins on Monday.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $per Must be one of: `day`, `week`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetViewsForbiddenException
     *
     * @return null|\Github\Model\ViewTraffic|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetViews(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetViews($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $releaseId release_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReleaseAsset[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListReleaseAssets(string $owner, string $repo, int $releaseId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListReleaseAssets($owner, $repo, $releaseId, $queryParameters), $fetch);
    }
    /**
    * This endpoint makes use of [a Hypermedia relation](https://developer.github.com/v3/#hypermedia) to determine which URL to access. The endpoint you call to upload release assets is specific to your release. Use the `upload_url` returned in
    the response of the [Create a release endpoint](https://developer.github.com/v3/repos/releases/#create-a-release) to upload a release asset.
    
    You need to use an HTTP client which supports [SNI](http://en.wikipedia.org/wiki/Server_Name_Indication) to make calls to this endpoint.
    
    Most libraries will set the required `Content-Length` header automatically. Use the required `Content-Type` header to provide the media type of the asset. For a list of media types, see [Media Types](https://www.iana.org/assignments/media-types/media-types.xhtml). For example: 
    
    `application/zip`
    
    GitHub expects the asset data in its raw binary form, rather than JSON. You will send the raw binary content of the asset as the request body. Everything else about the endpoint is the same as the rest of the API. For example,
    you'll still need to pass your authentication to be able to upload an asset.
    
    When an upstream failure occurs, you will receive a `502 Bad Gateway` status. This may leave an empty asset with a state of `starter`. It can be safely deleted.
    
    **Notes:**
    *   GitHub renames asset filenames that have special characters, non-alphanumeric characters, and leading or trailing periods. The "[List assets for a release](https://developer.github.com/v3/repos/releases/#list-assets-for-a-release)"
    endpoint lists the renamed filenames. For more information and help, contact [GitHub Support](https://github.com/contact).
    *   If you upload an asset with the same filename as another uploaded asset, you'll receive an error and must delete the old file before you can re-upload the new asset.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $releaseId release_id parameter
    * @param null|string $requestBody 
    * @param array $queryParameters {
    *     @var string $name name parameter
    *     @var string $label label parameter
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReleaseAsset|\Psr\Http\Message\ResponseInterface
    */
    public function reposUploadReleaseAsset(string $owner, string $repo, int $releaseId, ?string $requestBody = null, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUploadReleaseAsset($owner, $repo, $releaseId, $requestBody, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposDeleteCommitCommentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteCommitComment(string $owner, string $repo, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteCommitComment($owner, $repo, $commentId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetCommitCommentNotFoundException
     *
     * @return null|\Github\Model\CommitComment|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetCommitComment(string $owner, string $repo, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCommitComment($owner, $repo, $commentId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\ReposOwnerRepoCommentsCommentIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposUpdateCommitCommentNotFoundException
     *
     * @return null|\Github\Model\CommitComment|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdateCommitComment(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoCommentsCommentIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateCommitComment($owner, $repo, $commentId, $requestBody), $fetch);
    }
    /**
     * This will trigger the hook with the latest push to the current repository if the hook is subscribed to `push` events. If the hook is not subscribed to `push` events, the server will respond with 204 but no test POST will be generated.
     **Note**: Previously `/repos/:owner/:repo/hooks/:hook_id/test`
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposTestPushWebhookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposTestPushWebhook(string $owner, string $repo, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposTestPushWebhook($owner, $repo, $hookId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposListWebhooksNotFoundException
     *
     * @return null|\Github\Model\Hook[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListWebhooks(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListWebhooks($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Repositories can have multiple webhooks installed. Each webhook should have a unique `config`. Multiple webhooks can
    share the same `config` as long as those webhooks do not have any `events` that overlap.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoHooksPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateWebhookNotFoundException
    * @throws \Github\Exception\ReposCreateWebhookUnprocessableEntityException
    * @throws \Github\Exception\ReposCreateWebhookForbiddenException
    *
    * @return null|\Github\Model\Hook|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateWebhook(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoHooksPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateWebhook($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\PageBuild|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetLatestPagesBuild(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetLatestPagesBuild($owner, $repo), $fetch);
    }
    /**
     * Use the `:commit_sha` to specify the commit that will have its comments listed.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $commitSha commit_sha+ parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\CommitComment[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListCommentsForCommit(string $owner, string $repo, string $commitSha, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListCommentsForCommit($owner, $repo, $commitSha, $queryParameters), $fetch);
    }
    /**
    * Create a comment for a commit using its `:commit_sha`.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $commitSha commit_sha+ parameter
    * @param null|\Github\Model\ReposOwnerRepoCommitsCommitShaCommentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateCommitCommentForbiddenException
    * @throws \Github\Exception\ReposCreateCommitCommentUnprocessableEntityException
    *
    * @return null|\Github\Model\CommitComment|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateCommitComment(string $owner, string $repo, string $commitSha, ?\Github\Model\ReposOwnerRepoCommitsCommitShaCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateCommitComment($owner, $repo, $commitSha, $requestBody), $fetch);
    }
    /**
    * Returns the total commit counts for the `owner` and total commit counts in `all`. `all` is everyone combined, including the `owner` in the last 52 weeks. If you'd like to get the commit counts for non-owners, you can subtract `owner` from `all`.
    
    The array order is oldest week (index 0) to most recent week.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetParticipationStatsNotFoundException
    *
    * @return null|\Github\Model\ParticipationStats|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetParticipationStats(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetParticipationStats($owner, $repo), $fetch);
    }
    /**
    * **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $sha SHA or branch to start listing commits from. Default: the repository’s default branch (usually `master`).
    *     @var string $path Only commits containing this file path will be returned.
    *     @var string $author GitHub login or email address by which to filter by commit author.
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var string $until Only commits before this date will be returned. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListCommitsInternalServerErrorException
    * @throws \Github\Exception\ReposListCommitsBadRequestException
    * @throws \Github\Exception\ReposListCommitsNotFoundException
    * @throws \Github\Exception\ReposListCommitsConflictException
    *
    * @return null|\Github\Model\SimpleCommit[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListCommits(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListCommits($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Removes the ability of an app to push to this branch. Only installed GitHub Apps with `write` access to the `contents` permission can be added as authorized actors on a protected branch.
    
    | Type    | Description                                                                                                                                                |
    | ------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `array` | The GitHub Apps that have push access to this branch. Use the app's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposRemoveAppAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\Integration[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposRemoveAppAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposRemoveAppAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Lists the GitHub Apps that have push access to this branch. Only installed GitHub Apps with `write` access to the `contents` permission can be added as authorized actors on a protected branch.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetAppsWithAccessToProtectedBranchNotFoundException
    *
    * @return null|\Github\Model\Integration[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetAppsWithAccessToProtectedBranch(string $owner, string $repo, string $branch, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetAppsWithAccessToProtectedBranch($owner, $repo, $branch), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Grants the specified apps push access for this branch. Only installed GitHub Apps with `write` access to the `contents` permission can be added as authorized actors on a protected branch.
    
    | Type    | Description                                                                                                                                                |
    | ------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `array` | The GitHub Apps that have push access to this branch. Use the app's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposAddAppAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\Integration[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposAddAppAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposAddAppAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
    * Protected branches are available in public repositories with GitHub Free and GitHub Free for organizations, and in public and private repositories with GitHub Pro, GitHub Team, GitHub Enterprise Cloud, and GitHub Enterprise Server. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Replaces the list of apps that have push access to this branch. This removes all apps that previously had push access and grants push access to the new list of apps. Only installed GitHub Apps with `write` access to the `contents` permission can be added as authorized actors on a protected branch.
    
    | Type    | Description                                                                                                                                                |
    | ------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------- |
    | `array` | The GitHub Apps that have push access to this branch. Use the app's `slug`. **Note**: The list of users, apps, and teams in total is limited to 100 items. |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $branch branch+ parameter
    * @param null|array[] $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposSetAppAccessRestrictionsUnprocessableEntityException
    *
    * @return null|\Github\Model\Integration[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposSetAppAccessRestrictions(string $owner, string $repo, string $branch, ?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposSetAppAccessRestrictions($owner, $repo, $branch, $requestBody), $fetch);
    }
    /**
     * Get a published release with the specified tag.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $tag tag+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetReleaseByTagNotFoundException
     *
     * @return null|\Github\Model\Release|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetReleaseByTag(string $owner, string $repo, string $tag, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetReleaseByTag($owner, $repo, $tag), $fetch);
    }
    /**
    * Gets a redirect URL to download a zip archive for a repository. If you omit `:ref`, the repository’s default branch (usually
    `master`) will be used. Please make sure your HTTP framework is configured to follow redirects or you will need to use
    the `Location` header to make a second `GET` request.
    **Note**: For private repositories, these links are temporary and expire after five minutes.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDownloadZipballArchive(string $owner, string $repo, string $ref, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDownloadZipballArchive($owner, $repo, $ref), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $invitationId invitation_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposDeleteInvitation(string $owner, string $repo, int $invitationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDeleteInvitation($owner, $repo, $invitationId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $invitationId invitation_id parameter
     * @param null|\Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\RepositoryInvitation|\Psr\Http\Message\ResponseInterface
     */
    public function reposUpdateInvitation(string $owner, string $repo, int $invitationId, ?\Github\Model\ReposOwnerRepoInvitationsInvitationIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposUpdateInvitation($owner, $repo, $invitationId, $requestBody), $fetch);
    }
    /**
    * Users with pull access in a repository can access a combined view of commit statuses for a given ref. The ref can be a SHA, a branch name, or a tag name.
    
    The most recent status for each context is returned, up to 100. This field [paginates](https://developer.github.com/v3/#pagination) if there are over 100 contexts.
    
    Additionally, a combined `state` is returned. The `state` is one of:
    
    *   **failure** if any of the contexts report as `error` or `failure`
    *   **pending** if there are no statuses or a context is `pending`
    *   **success** if the latest status for all contexts is `success`
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetCombinedStatusForRefNotFoundException
    *
    * @return null|\Github\Model\CombinedCommitStatus|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetCombinedStatusForRef(string $owner, string $repo, string $ref, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCombinedStatusForRef($owner, $repo, $ref), $fetch);
    }
    /**
    * Users with push access in a repository can create commit statuses for a given SHA.
    
    Note: there is a limit of 1000 statuses per `sha` and `context` within a repository. Attempts to create more than 1000 statuses will result in a validation error.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $sha sha parameter
    * @param null|\Github\Model\ReposOwnerRepoStatusesShaPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Status|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateCommitStatus(string $owner, string $repo, string $sha, ?\Github\Model\ReposOwnerRepoStatusesShaPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateCommitStatus($owner, $repo, $sha, $requestBody), $fetch);
    }
    /**
     * Users with pull access can view deployment statuses for a deployment:
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $deploymentId deployment_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposListDeploymentStatusesNotFoundException
     *
     * @return null|\Github\Model\DeploymentStatus[]|\Psr\Http\Message\ResponseInterface
     */
    public function reposListDeploymentStatuses(string $owner, string $repo, int $deploymentId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListDeploymentStatuses($owner, $repo, $deploymentId, $queryParameters), $fetch);
    }
    /**
    * Users with `push` access can create deployment statuses for a given deployment.
    
    GitHub Apps require `read & write` access to "Deployments" and `read-only` access to "Repo contents" (for private repos). OAuth Apps require the `repo_deployment` scope.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $deploymentId deployment_id parameter
    * @param null|\Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposCreateDeploymentStatusUnprocessableEntityException
    *
    * @return null|\Github\Model\DeploymentStatus|\Psr\Http\Message\ResponseInterface
    */
    public function reposCreateDeploymentStatus(string $owner, string $repo, int $deploymentId, ?\Github\Model\ReposOwnerRepoDeploymentsDeploymentIdStatusesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposCreateDeploymentStatus($owner, $repo, $deploymentId, $requestBody), $fetch);
    }
    /**
    * Gets a redirect URL to download a tar archive for a repository. If you omit `:ref`, the repository’s default branch (usually
    `master`) will be used. Please make sure your HTTP framework is configured to follow redirects or you will need to use
    the `Location` header to make a second `GET` request.
    **Note**: For private repositories, these links are temporary and expire after five minutes.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reposDownloadTarballArchive(string $owner, string $repo, string $ref, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposDownloadTarballArchive($owner, $repo, $ref), $fetch);
    }
    /**
    * 
    Returns the `total` number of commits authored by the contributor. In addition, the response includes a Weekly Hash (`weeks` array) with the following information:
    
    *   `w` - Start of the week, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
    *   `a` - Number of additions
    *   `d` - Number of deletions
    *   `c` - Number of commits
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ContributorActivity[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetContributorsStats(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetContributorsStats($owner, $repo), $fetch);
    }
    /**
    * Gets the preferred README for a repository.
    
    READMEs support [custom media types](https://developer.github.com/v3/repos/contents/#custom-media-types) for retrieving the raw content or rendered HTML.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $ref The name of the commit/branch/tag. Default: the repository’s default branch (usually `master`)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetReadmeNotFoundException
    * @throws \Github\Exception\ReposGetReadmeUnprocessableEntityException
    *
    * @return null|\Github\Model\ContentFile|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetReadme(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetReadme($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Commit Comments use [these custom media types](https://developer.github.com/v3/repos/comments/#custom-media-types). You can read more about the use of media types in the API [here](https://developer.github.com/v3/media/).
    
    Comments are ordered by ascending ID.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CommitComment[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListCommitCommentsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListCommitCommentsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Returns the contents of a single commit reference. You must have `read` access for the repository to use this endpoint.
    
    You can pass the appropriate [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) to fetch `diff` and `patch` formats. Diffs with binary data will have no `patch` property.
    
    To return only the SHA-1 hash of the commit reference, you can provide the `sha` custom [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) in the `Accept` header. You can use this endpoint to check if a remote reference's SHA-1 hash is the same as your local reference's SHA-1 hash by providing the local SHA-1 reference as the ETag.
    
    **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposGetCommitUnprocessableEntityException
    * @throws \Github\Exception\ReposGetCommitNotFoundException
    * @throws \Github\Exception\ReposGetCommitInternalServerErrorException
    *
    * @return null|\Github\Model\Commit|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetCommit(string $owner, string $repo, string $ref, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCommit($owner, $repo, $ref), $fetch);
    }
    /**
    * View the latest published full release for the repository.
    
    The latest release is the most recent non-prerelease, non-draft release, sorted by the `created_at` attribute. The `created_at` attribute is the date of the commit used for the release, and not the date when the release was drafted or published.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Release|\Psr\Http\Message\ResponseInterface
    */
    public function reposGetLatestRelease(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetLatestRelease($owner, $repo), $fetch);
    }
    /**
     * Returns a weekly aggregate of the number of additions and deletions pushed to a repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetCodeFrequencyStats(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCodeFrequencyStats($owner, $repo), $fetch);
    }
    /**
    * Lists contributors to the specified repository and sorts them by the number of commits per contributor in descending order. This endpoint may return information that is a few hours old because the GitHub REST API v3 caches contributor data to improve performance.
    
    GitHub identifies contributors by author email address. This endpoint groups contribution counts by GitHub user, which includes all associated email addresses. To improve performance, only the first 500 author email addresses in the repository link to GitHub users. The rest will appear as anonymous contributors without associated GitHub user information.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $anon Set to `1` or `true` to include anonymous contributors in results.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListContributorsForbiddenException
    * @throws \Github\Exception\ReposListContributorsNotFoundException
    *
    * @return null|\Github\Model\Contributor[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListContributors(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListContributors($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * For organization-owned repositories, the list of collaborators includes outside collaborators, organization members that are direct collaborators, organization members with access through team memberships, organization members with access through default organization permissions, and organization owners.
    
    Team members will include the members of child teams.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $affiliation Filter collaborators returned by their affiliation. Can be one of:  
    \* `outside`: All outside collaborators of an organization-owned repository.  
    \* `direct`: All collaborators with permissions to an organization-owned repository, regardless of organization membership status.  
    \* `all`: All collaborators the authenticated user can see.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReposListCollaboratorsNotFoundException
    *
    * @return null|\Github\Model\Collaborator[]|\Psr\Http\Message\ResponseInterface
    */
    public function reposListCollaborators(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposListCollaborators($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoMergesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposMergeNotFoundException
     * @throws \Github\Exception\ReposMergeConflictException
     * @throws \Github\Exception\ReposMergeForbiddenException
     * @throws \Github\Exception\ReposMergeUnprocessableEntityException
     *
     * @return null|\Github\Model\Commit|\Psr\Http\Message\ResponseInterface
     */
    public function reposMerge(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoMergesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposMerge($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Checks the repository permission of a collaborator. The possible repository permissions are `admin`, `write`, `read`, and `none`.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReposGetCollaboratorPermissionLevelNotFoundException
     *
     * @return null|\Github\Model\RepositoryCollaboratorPermission|\Psr\Http\Message\ResponseInterface
     */
    public function reposGetCollaboratorPermissionLevel(string $owner, string $repo, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReposGetCollaboratorPermissionLevel($owner, $repo, $username), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $scimUserId scim_user_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ScimDeleteUserFromOrgNotFoundException
     * @throws \Github\Exception\ScimDeleteUserFromOrgForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function scimDeleteUserFromOrg(string $org, string $scimUserId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ScimDeleteUserFromOrg($org, $scimUserId), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $scimUserId scim_user_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ScimGetProvisioningInformationForUserNotFoundException
     * @throws \Github\Exception\ScimGetProvisioningInformationForUserForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function scimGetProvisioningInformationForUser(string $org, string $scimUserId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ScimGetProvisioningInformationForUser($org, $scimUserId), $fetch);
    }
    /**
    * Allows you to change a provisioned user's individual attributes. To change a user's values, you must provide a specific `Operations` JSON format that contains at least one of the `add`, `remove`, or `replace` operations. For examples and more information on the SCIM operations format, see the [SCIM specification](https://tools.ietf.org/html/rfc7644#section-3.5.2).
    
    **Note:** Complicated SCIM `path` selectors that include filters are not supported. For example, a `path` selector defined as `"path": "emails[type eq \"work\"]"` will not work.
    
    **Warning:** If you set `active:false` using the `replace` operation (as shown in the JSON example below), it removes the user from the organization, deletes the external identity, and deletes the associated `:scim_user_id`.
    
    ```
    {
     "Operations":[{
       "op":"replace",
       "value":{
         "active":false
       }
     }]
    }
    ```
    *
    * @param string $org 
    * @param string $scimUserId scim_user_id parameter
    * @param null|\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ScimUpdateAttributeForUserNotFoundException
    * @throws \Github\Exception\ScimUpdateAttributeForUserForbiddenException
    * @throws \Github\Exception\ScimUpdateAttributeForUserBadRequestException
    * @throws \Github\Exception\ScimUpdateAttributeForUserTooManyRequestsException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function scimUpdateAttributeForUser(string $org, string $scimUserId, ?\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ScimUpdateAttributeForUser($org, $scimUserId, $requestBody), $fetch);
    }
    /**
    * Replaces an existing provisioned user's information. You must provide all the information required for the user as if you were provisioning them for the first time. Any existing user information that you don't provide will be removed. If you want to only update a specific attribute, use the [Update an attribute for a SCIM user](https://developer.github.com/v3/scim/#update-an-attribute-for-a-scim-user) endpoint instead.
    
    You must at least provide the required values for the user: `userName`, `name`, and `emails`.
    
    **Warning:** Setting `active: false` removes the user from the organization, deletes the external identity, and deletes the associated `{scim_user_id}`.
    *
    * @param string $org 
    * @param string $scimUserId scim_user_id parameter
    * @param null|\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ScimSetInformationForProvisionedUserNotFoundException
    * @throws \Github\Exception\ScimSetInformationForProvisionedUserForbiddenException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function scimSetInformationForProvisionedUser(string $org, string $scimUserId, ?\Github\Model\ScimV2OrganizationsOrgUsersScimUserIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ScimSetInformationForProvisionedUser($org, $scimUserId, $requestBody), $fetch);
    }
    /**
    * Retrieves a paginated list of all provisioned organization members, including pending invitations. If you provide the `filter` parameter, the resources for all matching provisions members are returned.
    
    When a user with a SAML-provisioned external identity leaves (or is removed from) an organization, the account's metadata is immediately removed. However, the returned list of user accounts might not always match the organization or enterprise member list you see on GitHub. This can happen in certain cases where an external identity associated with an organization will not match an organization member:
     - When a user with a SCIM-provisioned external identity is removed from an organization, the account's metadata is preserved to allow the user to re-join the organization in the future.
     - When inviting a user to join an organization, you can expect to see their external identity in the results before they accept the invitation, or if the invitation is cancelled (or never accepted).
     - When a user is invited over SCIM, an external identity is created that matches with the invitee's email address. However, this identity is only linked to a user account when the user accepts the invitation by going through SAML SSO.
    
    The returned list of external identities can include an entry for a `null` user. These are unlinked SAML identities that are created when a user goes through the following Single Sign-On (SSO) process but does not sign in to their GitHub account after completing SSO:
    
    1. The user is granted access by the IdP and is not a member of the GitHub organization.
    
    1. The user attempts to access the GitHub organization and initiates the SAML SSO process, and is not currently signed in to their GitHub account.
    
    1. After successfully authenticating with the SAML SSO IdP, the `null` external identity entry is created and the user is prompted to sign in to their GitHub account:
      - If the user signs in, their GitHub account is linked to this entry.
      - If the user does not sign in (or does not create a new account when prompted), they are not added to the GitHub organization, and the external identity `null` entry remains in place.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var int $startIndex Used for pagination: the index of the first result to return.
    *     @var int $count Used for pagination: the number of results to return.
    *     @var string $filter Filters results using the equals query parameter operator (`eq`). You can filter results that are equal to `id`, `userName`, `emails`, and `external_id`. For example, to search for an identity with the `userName` Octocat, you would use this query:
    
    `?filter=userName%20eq%20\"Octocat\"`.
    
    To filter results for for the identity with the email `octocat@github.com`, you would use this query:
    
    `?filter=emails%20eq%20\"octocat@github.com\"`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ScimListProvisionedIdentitiesNotFoundException
    * @throws \Github\Exception\ScimListProvisionedIdentitiesForbiddenException
    * @throws \Github\Exception\ScimListProvisionedIdentitiesBadRequestException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function scimListProvisionedIdentities(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ScimListProvisionedIdentities($org, $queryParameters), $fetch);
    }
    /**
     * Provision organization membership for a user, and send an activation email to the email address.
     *
     * @param string $org 
     * @param null|\Github\Model\ScimV2OrganizationsOrgUsersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ScimProvisionAndInviteUserNotFoundException
     * @throws \Github\Exception\ScimProvisionAndInviteUserForbiddenException
     * @throws \Github\Exception\ScimProvisionAndInviteUserInternalServerErrorException
     * @throws \Github\Exception\ScimProvisionAndInviteUserConflictException
     * @throws \Github\Exception\ScimProvisionAndInviteUserBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function scimProvisionAndInviteUser(string $org, ?\Github\Model\ScimV2OrganizationsOrgUsersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ScimProvisionAndInviteUser($org, $requestBody), $fetch);
    }
    /**
     * Lists the most recent migrations.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Migration[]|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsListForOrg(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsListForOrg($org, $queryParameters), $fetch);
    }
    /**
     * Initiates the generation of a migration archive.
     *
     * @param string $org 
     * @param null|\Github\Model\OrgsOrgMigrationsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsStartForOrgNotFoundException
     * @throws \Github\Exception\MigrationsStartForOrgUnprocessableEntityException
     *
     * @return null|\Github\Model\Migration|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsStartForOrg(string $org, ?\Github\Model\OrgsOrgMigrationsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsStartForOrg($org, $requestBody), $fetch);
    }
    /**
    * Fetches a single user migration. The response includes the `state` of the migration, which can be one of the following values:
    
    *   `pending` - the migration hasn't started yet.
    *   `exporting` - the migration is in progress.
    *   `exported` - the migration finished successfully.
    *   `failed` - the migration failed.
    
    Once the migration has been `exported` you can [download the migration archive](https://developer.github.com/v3/migrations/users/#download-a-user-migration-archive).
    *
    * @param int $migrationId migration_id parameter
    * @param array $queryParameters {
    *     @var array $exclude 
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\MigrationsGetStatusForAuthenticatedUserNotFoundException
    * @throws \Github\Exception\MigrationsGetStatusForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\MigrationsGetStatusForAuthenticatedUserUnauthorizedException
    *
    * @return null|\Github\Model\Migration|\Psr\Http\Message\ResponseInterface
    */
    public function migrationsGetStatusForAuthenticatedUser(int $migrationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsGetStatusForAuthenticatedUser($migrationId, $queryParameters), $fetch);
    }
    /**
     * List files larger than 100MB found during the import
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\PorterLargeFile[]|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsGetLargeFiles(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsGetLargeFiles($owner, $repo), $fetch);
    }
    /**
     * Unlocks a repository that was locked for migration. You should unlock each migrated repository and [delete them](https://developer.github.com/v3/repos/#delete-a-repository) when the migration is complete and you no longer need the source data.
     *
     * @param string $org 
     * @param int $migrationId migration_id parameter
     * @param string $repoName repo_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsUnlockRepoForOrgNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsUnlockRepoForOrg(string $org, int $migrationId, string $repoName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsUnlockRepoForOrg($org, $migrationId, $repoName), $fetch);
    }
    /**
     * Unlocks a repository. You can lock repositories when you [start a user migration](https://developer.github.com/v3/migrations/users/#start-a-user-migration). Once the migration is complete you can unlock each repository to begin using it again or [delete the repository](https://developer.github.com/v3/repos/#delete-a-repository) if you no longer need the source data. Returns a status of `404 Not Found` if the repository is not locked.
     *
     * @param int $migrationId migration_id parameter
     * @param string $repoName repo_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\MigrationsUnlockRepoForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsUnlockRepoForAuthenticatedUser(int $migrationId, string $repoName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsUnlockRepoForAuthenticatedUser($migrationId, $repoName), $fetch);
    }
    /**
     * Stop an import for a repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsCancelImport(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsCancelImport($owner, $repo), $fetch);
    }
    /**
    * View the progress of an import.
    
    **Import status**
    
    This section includes details about the possible values of the `status` field of the Import Progress response.
    
    An import that does not have errors will progress through these steps:
    
    *   `detecting` - the "detection" step of the import is in progress because the request did not include a `vcs` parameter. The import is identifying the type of source control present at the URL.
    *   `importing` - the "raw" step of the import is in progress. This is where commit data is fetched from the original repository. The import progress response will include `commit_count` (the total number of raw commits that will be imported) and `percent` (0 - 100, the current progress through the import).
    *   `mapping` - the "rewrite" step of the import is in progress. This is where SVN branches are converted to Git branches, and where author updates are applied. The import progress response does not include progress information.
    *   `pushing` - the "push" step of the import is in progress. This is where the importer updates the repository on GitHub. The import progress response will include `push_percent`, which is the percent value reported by `git push` when it is "Writing objects".
    *   `complete` - the import is complete, and the repository is ready on GitHub.
    
    If there are problems, you will see one of these in the `status` field:
    
    *   `auth_failed` - the import requires authentication in order to connect to the original repository. To update authentication for the import, please see the [Update an import](https://developer.github.com/v3/migrations/source_imports/#update-an-import) section.
    *   `error` - the import encountered an error. The import progress response will include the `failed_step` and an error message. Contact [GitHub Support](https://github.com/contact) or [GitHub Premium Support](https://premium.githubsupport.com) for more information.
    *   `detection_needs_auth` - the importer requires authentication for the originating repository to continue detection. To update authentication for the import, please see the [Update an import](https://developer.github.com/v3/migrations/source_imports/#update-an-import) section.
    *   `detection_found_nothing` - the importer didn't recognize any source control at the URL. To resolve, [Cancel the import](https://developer.github.com/v3/migrations/source_imports/#cancel-an-import) and [retry](https://developer.github.com/v3/migrations/source_imports/#start-an-import) with the correct URL.
    *   `detection_found_multiple` - the importer found several projects or repositories at the provided URL. When this is the case, the Import Progress response will also include a `project_choices` field with the possible project choices as values. To update project choice, please see the [Update an import](https://developer.github.com/v3/migrations/source_imports/#update-an-import) section.
    
    **The project_choices field**
    
    When multiple projects are found at the provided URL, the response hash will include a `project_choices` field, the value of which is an array of hashes each representing a project choice. The exact key/value pairs of the project hashes will differ depending on the version control type.
    
    **Git LFS related fields**
    
    This section includes details about Git LFS related fields that may be present in the Import Progress response.
    
    *   `use_lfs` - describes whether the import has been opted in or out of using Git LFS. The value can be `opt_in`, `opt_out`, or `undecided` if no action has been taken.
    *   `has_large_files` - the boolean value describing whether files larger than 100MB were found during the `importing` step.
    *   `large_files_size` - the total size in gigabytes of files larger than 100MB found in the originating repository.
    *   `large_files_count` - the total number of files larger than 100MB found in the originating repository. To see a list of these files, make a "Get Large Files" request.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\MigrationsGetImportStatusNotFoundException
    *
    * @return null|\Github\Model\Import|\Psr\Http\Message\ResponseInterface
    */
    public function migrationsGetImportStatus(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsGetImportStatus($owner, $repo), $fetch);
    }
    /**
    * An import can be updated with credentials or a project choice by passing in the appropriate parameters in this API
    request. If no parameters are provided, the import will be restarted.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoImportPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Import|\Psr\Http\Message\ResponseInterface
    */
    public function migrationsUpdateImport(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoImportPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsUpdateImport($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Start a source import to a GitHub repository using GitHub Importer.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoImportPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsStartImportUnprocessableEntityException
     * @throws \Github\Exception\MigrationsStartImportNotFoundException
     *
     * @return null|\Github\Model\Import|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsStartImport(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoImportPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsStartImport($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Lists all the repositories for this user migration.
     *
     * @param int $migrationId migration_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsListReposForUserNotFoundException
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsListReposForUser(int $migrationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsListReposForUser($migrationId, $queryParameters), $fetch);
    }
    /**
     * List all the repositories for this organization migration.
     *
     * @param string $org 
     * @param int $migrationId migration_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsListReposForOrgNotFoundException
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsListReposForOrg(string $org, int $migrationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsListReposForOrg($org, $migrationId, $queryParameters), $fetch);
    }
    /**
     * Lists all migrations a user has started.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsListForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\MigrationsListForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Github\Model\Migration[]|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsListForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsListForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * Initiates the generation of a user migration archive.
     *
     * @param null|\Github\Model\UserMigrationsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsStartForAuthenticatedUserUnprocessableEntityException
     * @throws \Github\Exception\MigrationsStartForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\MigrationsStartForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Github\Model\Migration|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsStartForAuthenticatedUser(?\Github\Model\UserMigrationsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsStartForAuthenticatedUser($requestBody), $fetch);
    }
    /**
     * Deletes a previous migration archive. Migration archives are automatically deleted after seven days.
     *
     * @param string $org 
     * @param int $migrationId migration_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsDeleteArchiveForOrgNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsDeleteArchiveForOrg(string $org, int $migrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsDeleteArchiveForOrg($org, $migrationId), $fetch);
    }
    /**
     * Fetches the URL to a migration archive.
     *
     * @param string $org 
     * @param int $migrationId migration_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsDownloadArchiveForOrgNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsDownloadArchiveForOrg(string $org, int $migrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsDownloadArchiveForOrg($org, $migrationId), $fetch);
    }
    /**
    * Fetches the status of a migration.
    
    The `state` of a migration can be one of the following values:
    
    *   `pending`, which means the migration hasn't started yet.
    *   `exporting`, which means the migration is in progress.
    *   `exported`, which means the migration finished successfully.
    *   `failed`, which means the migration failed.
    *
    * @param string $org 
    * @param int $migrationId migration_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\MigrationsGetStatusForOrgNotFoundException
    *
    * @return null|\Github\Model\Migration|\Psr\Http\Message\ResponseInterface
    */
    public function migrationsGetStatusForOrg(string $org, int $migrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsGetStatusForOrg($org, $migrationId), $fetch);
    }
    /**
     * Deletes a previous migration archive. Downloadable migration archives are automatically deleted after seven days. Migration metadata, which is returned in the [List user migrations](https://developer.github.com/v3/migrations/users/#list-user-migrations) and [Get a user migration status](https://developer.github.com/v3/migrations/users/#get-a-user-migration-status) endpoints, will continue to be available even after an archive is deleted.
     *
     * @param int $migrationId migration_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsDeleteArchiveForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\MigrationsDeleteArchiveForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\MigrationsDeleteArchiveForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsDeleteArchiveForAuthenticatedUser(int $migrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsDeleteArchiveForAuthenticatedUser($migrationId), $fetch);
    }
    /**
    * Fetches the URL to download the migration archive as a `tar.gz` file. Depending on the resources your repository uses, the migration archive can contain JSON files with data for these objects:
    
    *   attachments
    *   bases
    *   commit\_comments
    *   issue\_comments
    *   issue\_events
    *   issues
    *   milestones
    *   organizations
    *   projects
    *   protected\_branches
    *   pull\_request\_reviews
    *   pull\_requests
    *   releases
    *   repositories
    *   review\_comments
    *   schema
    *   users
    
    The archive will also contain an `attachments` directory that includes all attachment files uploaded to GitHub.com and a `repositories` directory that contains the repository's Git data.
    *
    * @param int $migrationId migration_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\MigrationsGetArchiveForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\MigrationsGetArchiveForAuthenticatedUserUnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function migrationsGetArchiveForAuthenticatedUser(int $migrationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsGetArchiveForAuthenticatedUser($migrationId), $fetch);
    }
    /**
     * Update an author's identity for the import. Your application can continue updating authors any time before you push new commits to the repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $authorId author_id parameter
     * @param null|\Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsMapCommitAuthorUnprocessableEntityException
     * @throws \Github\Exception\MigrationsMapCommitAuthorNotFoundException
     *
     * @return null|\Github\Model\PorterAuthor|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsMapCommitAuthor(string $owner, string $repo, int $authorId, ?\Github\Model\ReposOwnerRepoImportAuthorsAuthorIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsMapCommitAuthor($owner, $repo, $authorId, $requestBody), $fetch);
    }
    /**
    * Each type of source control system represents authors in a different way. For example, a Git commit author has a display name and an email address, but a Subversion commit author just has a username. The GitHub Importer will make the author information valid, but the author might not be correct. For example, it will change the bare Subversion username `hubot` into something like `hubot <hubot@12341234-abab-fefe-8787-fedcba987654>`.
    
    This endpoint and the [Map a commit author](https://developer.github.com/v3/migrations/source_imports/#map-a-commit-author) endpoint allow you to provide correct Git author information.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\MigrationsGetCommitAuthorsNotFoundException
    *
    * @return null|\Github\Model\PorterAuthor[]|\Psr\Http\Message\ResponseInterface
    */
    public function migrationsGetCommitAuthors(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsGetCommitAuthors($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * You can import repositories from Subversion, Mercurial, and TFS that include files larger than 100MB. This ability is powered by [Git LFS](https://git-lfs.github.com). You can learn more about our LFS feature and working with large files [on our help site](https://help.github.com/articles/versioning-large-files/).
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoImportLfsPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\MigrationsSetLfsPreferenceUnprocessableEntityException
     *
     * @return null|\Github\Model\Import|\Psr\Http\Message\ResponseInterface
     */
    public function migrationsSetLfsPreference(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoImportLfsPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MigrationsSetLfsPreference($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Removes all interaction restrictions from the given repository. You must have owner or admin access to remove restrictions.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function interactionsRemoveRestrictionsForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\InteractionsRemoveRestrictionsForRepo($owner, $repo), $fetch);
    }
    /**
     * Shows which group of GitHub users can interact with this repository and when the restriction expires. If there are no restrictions, you will see an empty response.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\InteractionLimit|\Psr\Http\Message\ResponseInterface
     */
    public function interactionsGetRestrictionsForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\InteractionsGetRestrictionsForRepo($owner, $repo), $fetch);
    }
    /**
     * Temporarily restricts interactions to certain GitHub users within the given repository. You must have owner or admin access to set restrictions.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoInteractionLimitsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\InteractionLimit|\Psr\Http\Message\ResponseInterface
     */
    public function interactionsSetRestrictionsForRepo(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoInteractionLimitsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\InteractionsSetRestrictionsForRepo($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Removes all interaction restrictions from public repositories in the given organization. You must be an organization owner to remove restrictions.
     *
     * @param string $org 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function interactionsRemoveRestrictionsForOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\InteractionsRemoveRestrictionsForOrg($org), $fetch);
    }
    /**
     * Shows which group of GitHub users can interact with this organization and when the restriction expires. If there are no restrictions, you will see an empty response.
     *
     * @param string $org 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\InteractionLimit|\Psr\Http\Message\ResponseInterface
     */
    public function interactionsGetRestrictionsForOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\InteractionsGetRestrictionsForOrg($org), $fetch);
    }
    /**
     * Temporarily restricts interactions to certain GitHub users in any public repository in the given organization. You must be an organization owner to set these restrictions.
     *
     * @param string $org 
     * @param null|\Github\Model\OrgsOrgInteractionLimitsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\InteractionsSetRestrictionsForOrgUnprocessableEntityException
     *
     * @return null|\Github\Model\InteractionLimit|\Psr\Http\Message\ResponseInterface
     */
    public function interactionsSetRestrictionsForOrg(string $org, ?\Github\Model\OrgsOrgInteractionLimitsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\InteractionsSetRestrictionsForOrg($org, $requestBody), $fetch);
    }
    /**
    * This method returns the contents of the repository's license file, if one is detected.
    
    Similar to [Get repository content](https://developer.github.com/v3/repos/contents/#get-repository-content), this method also supports [custom media types](https://developer.github.com/v3/repos/contents/#custom-media-types) for retrieving the raw license content or rendered license HTML.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\LicenseContent|\Psr\Http\Message\ResponseInterface
    */
    public function licensesGetForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\LicensesGetForRepo($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $license license parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\LicensesGetForbiddenException
     * @throws \Github\Exception\LicensesGetNotFoundException
     *
     * @return null|\Github\Model\License|\Psr\Http\Message\ResponseInterface
     */
    public function licensesGet(string $license, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\LicensesGet($license), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var bool $featured 
     *     @var int $per_page Results per page (max 100)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\LicenseSimple[]|\Psr\Http\Message\ResponseInterface
     */
    public function licensesGetAllCommonlyUsed(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\LicensesGetAllCommonlyUsed($queryParameters), $fetch);
    }
    /**
     * This endpoint should only be used to stop watching a repository. To control whether or not you wish to receive notifications from a repository, [set the repository's subscription manually](https://developer.github.com/v3/activity/watching/#set-a-repository-subscription).
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityDeleteRepoSubscription(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityDeleteRepoSubscription($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityGetRepoSubscriptionNotFoundException
     * @throws \Github\Exception\ActivityGetRepoSubscriptionForbiddenException
     *
     * @return null|\Github\Model\RepositorySubscription|\Psr\Http\Message\ResponseInterface
     */
    public function activityGetRepoSubscription(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityGetRepoSubscription($owner, $repo), $fetch);
    }
    /**
     * If you would like to watch a repository, set `subscribed` to `true`. If you would like to ignore notifications made within a repository, set `ignored` to `true`. If you would like to stop watching a repository, [delete the repository's subscription](https://developer.github.com/v3/activity/watching/#delete-a-repository-subscription) completely.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoSubscriptionPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\RepositorySubscription|\Psr\Http\Message\ResponseInterface
     */
    public function activitySetRepoSubscription(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoSubscriptionPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivitySetRepoSubscription($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityListPublicEventsForRepoNetworkNotFoundException
     * @throws \Github\Exception\ActivityListPublicEventsForRepoNetworkForbiddenException
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListPublicEventsForRepoNetwork(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListPublicEventsForRepoNetwork($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListRepoEvents(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListRepoEvents($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * We delay the public events feed by five minutes, which means the most recent event returned by the public events API actually occurred at least five minutes ago.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityListPublicEventsForbiddenException
     * @throws \Github\Exception\ActivityListPublicEventsServiceUnavailableException
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListPublicEvents(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListPublicEvents($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityUnstarRepoForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\ActivityUnstarRepoForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\ActivityUnstarRepoForAuthenticatedUserForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityUnstarRepoForAuthenticatedUser(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityUnstarRepoForAuthenticatedUser($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityCheckRepoIsStarredByAuthenticatedUserNotFoundException
     * @throws \Github\Exception\ActivityCheckRepoIsStarredByAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\ActivityCheckRepoIsStarredByAuthenticatedUserForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityCheckRepoIsStarredByAuthenticatedUser(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityCheckRepoIsStarredByAuthenticatedUser($owner, $repo), $fetch);
    }
    /**
     * Note that you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityStarRepoForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ActivityStarRepoForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\ActivityStarRepoForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityStarRepoForAuthenticatedUser(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityStarRepoForAuthenticatedUser($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListPublicEventsForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListPublicEventsForUser($username, $queryParameters), $fetch);
    }
    /**
     * List all notifications for the current user.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var bool $all If `true`, show notifications marked as read.
     *     @var bool $participating If `true`, only shows notifications in which the user is directly participating or mentioned.
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var string $before Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Thread[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListRepoNotificationsForAuthenticatedUser(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListRepoNotificationsForAuthenticatedUser($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Marks all notifications in a repository as "read" removes them from the [default view on GitHub](https://github.com/notifications). If the number of notifications is too large to complete in one request, you will receive a `202 Accepted` status and GitHub will run an asynchronous process to mark notifications as "read." To check whether any "unread" notifications remain, you can use the [List repository notifications for the authenticated user](https://developer.github.com/v3/activity/notifications/#list-repository-notifications-for-the-authenticated-user) endpoint and pass the query parameter `all=false`.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoNotificationsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityMarkRepoNotificationsAsRead(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoNotificationsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityMarkRepoNotificationsAsRead($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Lists the people watching the specified repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListWatchersForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListWatchersForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * This is the user's organization dashboard. You must be authenticated as the user to view this.
     *
     * @param string $username 
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListOrgEventsForAuthenticatedUser(string $username, string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListOrgEventsForAuthenticatedUser($username, $org, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListPublicOrgEvents(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListPublicOrgEvents($org, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Feed|\Psr\Http\Message\ResponseInterface
     */
    public function activityGetFeeds(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityGetFeeds(), $fetch);
    }
    /**
     * These are events that you've received by watching repos and following users. If you are authenticated as the given user, you will see private events. Otherwise, you'll only see public events.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListReceivedEventsForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListReceivedEventsForUser($username, $queryParameters), $fetch);
    }
    /**
    * Lists repositories a user has starred.
    
    You can also find out _when_ stars were created by passing the following custom [media type](https://developer.github.com/v3/media/) via the `Accept` header:
    *
    * @param string $username 
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Repository[]|\Psr\Http\Message\ResponseInterface
    */
    public function activityListReposStarredByUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListReposStarredByUser($username, $queryParameters), $fetch);
    }
    /**
     * Lists repositories a user is watching.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListReposWatchedByUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListReposWatchedByUser($username, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $threadId thread_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityGetThreadForbiddenException
     * @throws \Github\Exception\ActivityGetThreadUnauthorizedException
     *
     * @return null|\Github\Model\Thread|\Psr\Http\Message\ResponseInterface
     */
    public function activityGetThread(int $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityGetThread($threadId), $fetch);
    }
    /**
     * 
     *
     * @param int $threadId thread_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityMarkThreadAsReadForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityMarkThreadAsRead(int $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityMarkThreadAsRead($threadId), $fetch);
    }
    /**
     * Mutes all future notifications for a conversation until you comment on the thread or get an **@mention**. If you are watching the repository of the thread, you will still receive notifications. To ignore future notifications for a repository you are watching, use the [Set a thread subscription](https://developer.github.com/v3/activity/notifications/#set-a-thread-subscription) endpoint and set `ignore` to `true`.
     *
     * @param int $threadId thread_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityDeleteThreadSubscriptionForbiddenException
     * @throws \Github\Exception\ActivityDeleteThreadSubscriptionUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function activityDeleteThreadSubscription(int $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityDeleteThreadSubscription($threadId), $fetch);
    }
    /**
    * This checks to see if the current user is subscribed to a thread. You can also [get a repository subscription](https://developer.github.com/v3/activity/watching/#get-a-repository-subscription).
    
    Note that subscriptions are only generated if a user is participating in a conversation--for example, they've replied to the thread, were **@mentioned**, or manually subscribe to a thread.
    *
    * @param int $threadId thread_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ActivityGetThreadSubscriptionForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\ActivityGetThreadSubscriptionForAuthenticatedUserUnauthorizedException
    *
    * @return null|\Github\Model\ThreadSubscription|\Psr\Http\Message\ResponseInterface
    */
    public function activityGetThreadSubscriptionForAuthenticatedUser(int $threadId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityGetThreadSubscriptionForAuthenticatedUser($threadId), $fetch);
    }
    /**
    * If you are watching a repository, you receive notifications for all threads by default. Use this endpoint to ignore future notifications for threads until you comment on the thread or get an **@mention**.
    
    You can also use this endpoint to subscribe to threads that you are currently not receiving notifications for or to subscribed to threads that you have previously ignored.
    
    Unsubscribing from a conversation in a repository that you are not watching is functionally equivalent to the [Delete a thread subscription](https://developer.github.com/v3/activity/notifications/#delete-a-thread-subscription) endpoint.
    *
    * @param int $threadId thread_id parameter
    * @param null|\Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ActivitySetThreadSubscriptionForbiddenException
    * @throws \Github\Exception\ActivitySetThreadSubscriptionUnauthorizedException
    *
    * @return null|\Github\Model\ThreadSubscription|\Psr\Http\Message\ResponseInterface
    */
    public function activitySetThreadSubscription(int $threadId, ?\Github\Model\NotificationsThreadsThreadIdSubscriptionPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivitySetThreadSubscription($threadId, $requestBody), $fetch);
    }
    /**
     * If you are authenticated as the given user, you will see your private events. Otherwise, you'll only see public events.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListEventsForAuthenticatedUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListEventsForAuthenticatedUser($username, $queryParameters), $fetch);
    }
    /**
     * List all notifications for the current user, sorted by most recently updated.
     *
     * @param array $queryParameters {
     *     @var bool $all If `true`, show notifications marked as read.
     *     @var bool $participating If `true`, only shows notifications in which the user is directly participating or mentioned.
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var string $before Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityListNotificationsForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ActivityListNotificationsForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\ActivityListNotificationsForAuthenticatedUserUnprocessableEntityException
     *
     * @return null|\Github\Model\Thread[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListNotificationsForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListNotificationsForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * Marks all notifications as "read" removes it from the [default view on GitHub](https://github.com/notifications). If the number of notifications is too large to complete in one request, you will receive a `202 Accepted` status and GitHub will run an asynchronous process to mark notifications as "read." To check whether any "unread" notifications remain, you can use the [List notifications for the authenticated user](https://developer.github.com/v3/activity/notifications/#list-notifications-for-the-authenticated-user) endpoint and pass the query parameter `all=false`.
     *
     * @param null|\Github\Model\NotificationsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityMarkNotificationsAsReadForbiddenException
     * @throws \Github\Exception\ActivityMarkNotificationsAsReadUnauthorizedException
     *
     * @return null|\Github\Model\NotificationsPutResponse202|\Psr\Http\Message\ResponseInterface
     */
    public function activityMarkNotificationsAsRead(?\Github\Model\NotificationsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityMarkNotificationsAsRead($requestBody), $fetch);
    }
    /**
     * Lists repositories the authenticated user is watching.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActivityListWatchedReposForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ActivityListWatchedReposForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListWatchedReposForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListWatchedReposForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * Lists repositories the authenticated user has starred.
    
    You can also find out _when_ stars were created by passing the following custom [media type](https://developer.github.com/v3/media/) via the `Accept` header:
    *
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ActivityListReposStarredByAuthenticatedUserForbiddenException
    * @throws \Github\Exception\ActivityListReposStarredByAuthenticatedUserUnauthorizedException
    *
    * @return null|\Github\Model\Repository[]|\Psr\Http\Message\ResponseInterface
    */
    public function activityListReposStarredByAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListReposStarredByAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * Lists the people that have starred the repository.
    
    You can also find out _when_ stars were created by passing the following custom [media type](https://developer.github.com/v3/media/) via the `Accept` header:
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ActivityListStargazersForRepoUnprocessableEntityException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function activityListStargazersForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListStargazersForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Event[]|\Psr\Http\Message\ResponseInterface
     */
    public function activityListReceivedPublicEventsForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActivityListReceivedPublicEventsForUser($username, $queryParameters), $fetch);
    }
    /**
     * Lists annotations for a check run using the annotation `id`. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get annotations for a check run. OAuth Apps and authenticated users must have the `repo` scope to get annotations for a check run in a private repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $checkRunId check_run_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\CheckAnnotation[]|\Psr\Http\Message\ResponseInterface
     */
    public function checksListAnnotations(string $owner, string $repo, int $checkRunId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksListAnnotations($owner, $repo, $checkRunId, $queryParameters), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array and a `null` value for `head_branch`.
    
    Lists check suites for a commit `ref`. The `ref` can be a SHA, branch name, or a tag name. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to list check suites. OAuth Apps and authenticated users must have the `repo` scope to get check suites in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref+ parameter
    * @param array $queryParameters {
    *     @var int $app_id Filters check suites by GitHub App `id`.
    *     @var string $check_name Returns check runs with the specified `name`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReposOwnerRepoCommitsRefCheckSuitesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function checksListSuitesForRef(string $owner, string $repo, string $ref, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksListSuitesForRef($owner, $repo, $ref, $queryParameters), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Lists check runs for a commit ref. The `ref` can be a SHA, branch name, or a tag name. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get check runs. OAuth Apps and authenticated users must have the `repo` scope to get check runs in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref+ parameter
    * @param array $queryParameters {
    *     @var string $check_name Returns check runs with the specified `name`.
    *     @var string $status Returns check runs with the specified `status`. Can be one of `queued`, `in_progress`, or `completed`.
    *     @var string $filter Filters check runs by their `completed_at` timestamp. Can be one of `latest` (returning the most recent check runs) or `all`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReposOwnerRepoCommitsRefCheckRunsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function checksListForRef(string $owner, string $repo, string $ref, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksListForRef($owner, $repo, $ref, $queryParameters), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Lists check runs for a check suite using its `id`. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get check runs. OAuth Apps and authenticated users must have the `repo` scope to get check runs in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkSuiteId check_suite_id parameter
    * @param array $queryParameters {
    *     @var string $check_name Returns check runs with the specified `name`.
    *     @var string $status Returns check runs with the specified `status`. Can be one of `queued`, `in_progress`, or `completed`.
    *     @var string $filter Filters check runs by their `completed_at` timestamp. Can be one of `latest` (returning the most recent check runs) or `all`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReposOwnerRepoCheckSuitesCheckSuiteIdCheckRunsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function checksListForSuite(string $owner, string $repo, int $checkSuiteId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksListForSuite($owner, $repo, $checkSuiteId, $queryParameters), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Gets a single check run using its `id`. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get check runs. OAuth Apps and authenticated users must have the `repo` scope to get check runs in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkRunId check_run_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CheckRun|\Psr\Http\Message\ResponseInterface
    */
    public function checksGet(string $owner, string $repo, int $checkRunId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksGet($owner, $repo, $checkRunId), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Updates a check run for a specific commit in a repository. Your GitHub App must have the `checks:write` permission to edit check runs.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkRunId check_run_id parameter
    * @param null|\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CheckRun|\Psr\Http\Message\ResponseInterface
    */
    public function checksUpdate(string $owner, string $repo, int $checkRunId, ?\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksUpdate($owner, $repo, $checkRunId, $requestBody), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array and a `null` value for `head_branch`.
    
    By default, check suites are automatically created when you create a [check run](https://developer.github.com/v3/checks/runs/). You only need to use this endpoint for manually creating check suites when you've disabled automatic creation using "[Update repository preferences for check suites](https://developer.github.com/v3/checks/suites/#update-repository-preferences-for-check-suites)". Your GitHub App must have the `checks:write` permission to create check suites.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoCheckSuitesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CheckSuite|\Psr\Http\Message\ResponseInterface
    */
    public function checksCreateSuite(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoCheckSuitesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksCreateSuite($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Triggers GitHub to rerequest an existing check suite, without pushing new code to a repository. This endpoint will trigger the [`check_suite` webhook](https://developer.github.com/webhooks/event-payloads/#check_suite) event with the action `rerequested`. When a check suite is `rerequested`, its `status` is reset to `queued` and the `conclusion` is cleared.
    
    To rerequest a check suite, your GitHub App must have the `checks:read` permission on a private repository or pull access to a public repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkSuiteId check_suite_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function checksRerequestSuite(string $owner, string $repo, int $checkSuiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksRerequestSuite($owner, $repo, $checkSuiteId), $fetch);
    }
    /**
     * Changes the default automatic flow when creating check suites. By default, a check suite is automatically created each time code is pushed to a repository. When you disable the automatic creation of check suites, you can manually [Create a check suite](https://developer.github.com/v3/checks/suites/#create-a-check-suite). You must have admin permissions in the repository to set preferences for check suites.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\CheckSuitePreference|\Psr\Http\Message\ResponseInterface
     */
    public function checksSetSuitesPreferences(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoCheckSuitesPreferencesPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksSetSuitesPreferences($owner, $repo, $requestBody), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array.
    
    Creates a new check run for a specific commit in a repository. Your GitHub App must have the `checks:write` permission to create check runs.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoCheckRunsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CheckRun|\Psr\Http\Message\ResponseInterface
    */
    public function checksCreate(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoCheckRunsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksCreate($owner, $repo, $requestBody), $fetch);
    }
    /**
    * **Note:** The Checks API only looks for pushes in the repository where the check suite or check run were created. Pushes to a branch in a forked repository are not detected and return an empty `pull_requests` array and a `null` value for `head_branch`.
    
    Gets a single check suite using its `id`. GitHub Apps must have the `checks:read` permission on a private repository or pull access to a public repository to get check suites. OAuth Apps and authenticated users must have the `repo` scope to get check suites in a private repository.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $checkSuiteId check_suite_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CheckSuite|\Psr\Http\Message\ResponseInterface
    */
    public function checksGetSuite(string $owner, string $repo, int $checkSuiteId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ChecksGetSuite($owner, $repo, $checkSuiteId), $fetch);
    }
    /**
     * 
     *
     * @param null|\Github\Model\MarkdownPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function markdownRender(?\Github\Model\MarkdownPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MarkdownRender($requestBody), $fetch);
    }
    /**
     * You must send Markdown as plain text (using a `Content-Type` header of `text/plain` or `text/x-markdown`) to this endpoint, rather than using JSON format. In raw mode, [GitHub Flavored Markdown](https://github.github.com/gfm/) is not supported and Markdown will be rendered in plain format like a README.md file. Markdown content must be 400 KB or less.
     *
     * @param null|string $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function markdownRenderRaw(?string $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MarkdownRenderRaw($requestBody), $fetch);
    }
    /**
     * Lists the projects in an organization. Returns a `404 Not Found` status if projects are disabled in the organization. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var string $state Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsListForOrgUnprocessableEntityException
     *
     * @return null|\Github\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function projectsListForOrg(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsListForOrg($org, $queryParameters), $fetch);
    }
    /**
     * Creates an organization project board. Returns a `404 Not Found` status if projects are disabled in the organization. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param string $org 
     * @param null|\Github\Model\OrgsOrgProjectsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsCreateForOrgUnauthorizedException
     * @throws \Github\Exception\ProjectsCreateForOrgForbiddenException
     * @throws \Github\Exception\ProjectsCreateForOrgNotFoundException
     * @throws \Github\Exception\ProjectsCreateForOrgGoneException
     * @throws \Github\Exception\ProjectsCreateForOrgUnprocessableEntityException
     *
     * @return null|\Github\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function projectsCreateForOrg(string $org, ?\Github\Model\OrgsOrgProjectsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsCreateForOrg($org, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $columnId column_id parameter
     * @param null|\Github\Model\ProjectsColumnsColumnIdMovesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsMoveColumnForbiddenException
     * @throws \Github\Exception\ProjectsMoveColumnUnprocessableEntityException
     * @throws \Github\Exception\ProjectsMoveColumnUnauthorizedException
     *
     * @return null|\Github\Model\ProjectsColumnsColumnIdMovesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function projectsMoveColumn(int $columnId, ?\Github\Model\ProjectsColumnsColumnIdMovesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsMoveColumn($columnId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cardId card_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsDeleteCardForbiddenException
     * @throws \Github\Exception\ProjectsDeleteCardUnauthorizedException
     * @throws \Github\Exception\ProjectsDeleteCardNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function projectsDeleteCard(int $cardId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsDeleteCard($cardId), $fetch);
    }
    /**
     * 
     *
     * @param int $cardId card_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsGetCardForbiddenException
     * @throws \Github\Exception\ProjectsGetCardUnauthorizedException
     * @throws \Github\Exception\ProjectsGetCardNotFoundException
     *
     * @return null|\Github\Model\ProjectCard|\Psr\Http\Message\ResponseInterface
     */
    public function projectsGetCard(int $cardId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsGetCard($cardId), $fetch);
    }
    /**
     * 
     *
     * @param int $cardId card_id parameter
     * @param null|\Github\Model\ProjectsColumnsCardsCardIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsUpdateCardForbiddenException
     * @throws \Github\Exception\ProjectsUpdateCardUnauthorizedException
     * @throws \Github\Exception\ProjectsUpdateCardNotFoundException
     * @throws \Github\Exception\ProjectsUpdateCardUnprocessableEntityException
     *
     * @return null|\Github\Model\ProjectCard|\Psr\Http\Message\ResponseInterface
     */
    public function projectsUpdateCard(int $cardId, ?\Github\Model\ProjectsColumnsCardsCardIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsUpdateCard($cardId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $columnId column_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsDeleteColumnForbiddenException
     * @throws \Github\Exception\ProjectsDeleteColumnUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function projectsDeleteColumn(int $columnId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsDeleteColumn($columnId), $fetch);
    }
    /**
     * 
     *
     * @param int $columnId column_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsGetColumnForbiddenException
     * @throws \Github\Exception\ProjectsGetColumnNotFoundException
     * @throws \Github\Exception\ProjectsGetColumnUnauthorizedException
     *
     * @return null|\Github\Model\ProjectColumn|\Psr\Http\Message\ResponseInterface
     */
    public function projectsGetColumn(int $columnId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsGetColumn($columnId), $fetch);
    }
    /**
     * 
     *
     * @param int $columnId column_id parameter
     * @param null|\Github\Model\ProjectsColumnsColumnIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsUpdateColumnForbiddenException
     * @throws \Github\Exception\ProjectsUpdateColumnUnauthorizedException
     *
     * @return null|\Github\Model\ProjectColumn|\Psr\Http\Message\ResponseInterface
     */
    public function projectsUpdateColumn(int $columnId, ?\Github\Model\ProjectsColumnsColumnIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsUpdateColumn($columnId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var string $state Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsListForUserUnsupportedMediaTypeException
     * @throws \Github\Exception\ProjectsListForUserUnprocessableEntityException
     *
     * @return null|\Github\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function projectsListForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsListForUser($username, $queryParameters), $fetch);
    }
    /**
     * Deletes a project board. Returns a `404 Not Found` status if projects are disabled.
     *
     * @param int $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsDeleteForbiddenException
     * @throws \Github\Exception\ProjectsDeleteUnauthorizedException
     * @throws \Github\Exception\ProjectsDeleteGoneException
     * @throws \Github\Exception\ProjectsDeleteNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function projectsDelete(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsDelete($projectId), $fetch);
    }
    /**
     * Gets a project by its `id`. Returns a `404 Not Found` status if projects are disabled. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param int $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsGetForbiddenException
     * @throws \Github\Exception\ProjectsGetUnauthorizedException
     *
     * @return null|\Github\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function projectsGet(int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsGet($projectId), $fetch);
    }
    /**
     * Updates a project board's information. Returns a `404 Not Found` status if projects are disabled. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param int $projectId 
     * @param null|\Github\Model\ProjectsProjectIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsUpdateNotFoundException
     * @throws \Github\Exception\ProjectsUpdateForbiddenException
     * @throws \Github\Exception\ProjectsUpdateUnauthorizedException
     * @throws \Github\Exception\ProjectsUpdateGoneException
     * @throws \Github\Exception\ProjectsUpdateUnprocessableEntityException
     *
     * @return null|\Github\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function projectsUpdate(int $projectId, ?\Github\Model\ProjectsProjectIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsUpdate($projectId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsListColumnsForbiddenException
     * @throws \Github\Exception\ProjectsListColumnsUnauthorizedException
     *
     * @return null|\Github\Model\ProjectColumn[]|\Psr\Http\Message\ResponseInterface
     */
    public function projectsListColumns(int $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsListColumns($projectId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $projectId 
     * @param null|\Github\Model\ProjectsProjectIdColumnsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsCreateColumnForbiddenException
     * @throws \Github\Exception\ProjectsCreateColumnUnprocessableEntityException
     * @throws \Github\Exception\ProjectsCreateColumnUnauthorizedException
     *
     * @return null|\Github\Model\ProjectColumn|\Psr\Http\Message\ResponseInterface
     */
    public function projectsCreateColumn(int $projectId, ?\Github\Model\ProjectsProjectIdColumnsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsCreateColumn($projectId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $columnId column_id parameter
     * @param array $queryParameters {
     *     @var string $archived_state Filters the project cards that are returned by the card's state. Can be one of `all`,`archived`, or `not_archived`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsListCardsForbiddenException
     * @throws \Github\Exception\ProjectsListCardsUnauthorizedException
     *
     * @return null|\Github\Model\ProjectCard[]|\Psr\Http\Message\ResponseInterface
     */
    public function projectsListCards(int $columnId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsListCards($columnId, $queryParameters), $fetch);
    }
    /**
    * **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by the `pull_request` key.
    
    Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param int $columnId column_id parameter
    * @param null|mixed $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ProjectsCreateCardForbiddenException
    * @throws \Github\Exception\ProjectsCreateCardUnauthorizedException
    * @throws \Github\Exception\ProjectsCreateCardUnprocessableEntityException
    * @throws \Github\Exception\ProjectsCreateCardServiceUnavailableException
    *
    * @return null|\Github\Model\ProjectCard|\Psr\Http\Message\ResponseInterface
    */
    public function projectsCreateCard(int $columnId, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsCreateCard($columnId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\Github\Model\UserProjectsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsCreateForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\ProjectsCreateForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\ProjectsCreateForAuthenticatedUserUnsupportedMediaTypeException
     * @throws \Github\Exception\ProjectsCreateForAuthenticatedUserUnprocessableEntityException
     *
     * @return null|\Github\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function projectsCreateForAuthenticatedUser(?\Github\Model\UserProjectsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsCreateForAuthenticatedUser($requestBody), $fetch);
    }
    /**
     * Removes a collaborator from an organization project. You must be an organization owner or a project `admin` to remove a collaborator.
     *
     * @param int $projectId 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsRemoveCollaboratorNotFoundException
     * @throws \Github\Exception\ProjectsRemoveCollaboratorUnsupportedMediaTypeException
     * @throws \Github\Exception\ProjectsRemoveCollaboratorForbiddenException
     * @throws \Github\Exception\ProjectsRemoveCollaboratorUnprocessableEntityException
     * @throws \Github\Exception\ProjectsRemoveCollaboratorUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function projectsRemoveCollaborator(int $projectId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsRemoveCollaborator($projectId, $username), $fetch);
    }
    /**
     * Adds a collaborator to an organization project and sets their permission level. You must be an organization owner or a project `admin` to add a collaborator.
     *
     * @param int $projectId 
     * @param string $username 
     * @param null|\Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsAddCollaboratorNotFoundException
     * @throws \Github\Exception\ProjectsAddCollaboratorUnsupportedMediaTypeException
     * @throws \Github\Exception\ProjectsAddCollaboratorUnprocessableEntityException
     * @throws \Github\Exception\ProjectsAddCollaboratorForbiddenException
     * @throws \Github\Exception\ProjectsAddCollaboratorUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function projectsAddCollaborator(int $projectId, string $username, ?\Github\Model\ProjectsProjectIdCollaboratorsUsernamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsAddCollaborator($projectId, $username, $requestBody), $fetch);
    }
    /**
     * Returns the collaborator's permission level for an organization project. Possible values for the `permission` key: `admin`, `write`, `read`, `none`. You must be an organization owner or a project `admin` to review a user's permission level.
     *
     * @param int $projectId 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsGetPermissionForUserNotFoundException
     * @throws \Github\Exception\ProjectsGetPermissionForUserUnsupportedMediaTypeException
     * @throws \Github\Exception\ProjectsGetPermissionForUserUnprocessableEntityException
     * @throws \Github\Exception\ProjectsGetPermissionForUserForbiddenException
     * @throws \Github\Exception\ProjectsGetPermissionForUserUnauthorizedException
     *
     * @return null|\Github\Model\RepositoryCollaboratorPermission|\Psr\Http\Message\ResponseInterface
     */
    public function projectsGetPermissionForUser(int $projectId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsGetPermissionForUser($projectId, $username), $fetch);
    }
    /**
     * Lists the projects in a repository. Returns a `404 Not Found` status if projects are disabled in the repository. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $state Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsListForRepoUnauthorizedException
     * @throws \Github\Exception\ProjectsListForRepoForbiddenException
     * @throws \Github\Exception\ProjectsListForRepoNotFoundException
     * @throws \Github\Exception\ProjectsListForRepoGoneException
     * @throws \Github\Exception\ProjectsListForRepoUnprocessableEntityException
     *
     * @return null|\Github\Model\Project[]|\Psr\Http\Message\ResponseInterface
     */
    public function projectsListForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsListForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Creates a repository project board. Returns a `404 Not Found` status if projects are disabled in the repository. If you do not have sufficient privileges to perform this action, a `401 Unauthorized` or `410 Gone` status is returned.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoProjectsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsCreateForRepoUnauthorizedException
     * @throws \Github\Exception\ProjectsCreateForRepoForbiddenException
     * @throws \Github\Exception\ProjectsCreateForRepoNotFoundException
     * @throws \Github\Exception\ProjectsCreateForRepoGoneException
     * @throws \Github\Exception\ProjectsCreateForRepoUnprocessableEntityException
     *
     * @return null|\Github\Model\Project|\Psr\Http\Message\ResponseInterface
     */
    public function projectsCreateForRepo(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoProjectsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsCreateForRepo($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param int $cardId card_id parameter
     * @param null|\Github\Model\ProjectsColumnsCardsCardIdMovesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ProjectsMoveCardForbiddenException
     * @throws \Github\Exception\ProjectsMoveCardUnauthorizedException
     * @throws \Github\Exception\ProjectsMoveCardServiceUnavailableException
     * @throws \Github\Exception\ProjectsMoveCardUnprocessableEntityException
     *
     * @return null|\Github\Model\ProjectsColumnsCardsCardIdMovesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function projectsMoveCard(int $cardId, ?\Github\Model\ProjectsColumnsCardsCardIdMovesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsMoveCard($cardId, $requestBody), $fetch);
    }
    /**
    * Lists the collaborators for an organization project. For a project, the list of collaborators includes outside collaborators, organization members that are direct collaborators, organization members with access through team memberships, organization members with access through default organization permissions, and organization owners. You must be an organization owner or a project `admin` to list collaborators.
    *
    * @param int $projectId 
    * @param array $queryParameters {
    *     @var string $affiliation Filters the collaborators by their affiliation. Can be one of:  
    \* `outside`: Outside collaborators of a project that are not a member of the project's organization.  
    \* `direct`: Collaborators with permissions to a project, regardless of organization membership status.  
    \* `all`: All collaborators the authenticated user can see.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ProjectsListCollaboratorsNotFoundException
    * @throws \Github\Exception\ProjectsListCollaboratorsUnsupportedMediaTypeException
    * @throws \Github\Exception\ProjectsListCollaboratorsUnprocessableEntityException
    * @throws \Github\Exception\ProjectsListCollaboratorsForbiddenException
    * @throws \Github\Exception\ProjectsListCollaboratorsUnauthorizedException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function projectsListCollaborators(int $projectId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ProjectsListCollaborators($projectId, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List reactions for a team discussion comment`](https://developer.github.com/v3/reactions/#list-reactions-for-a-team-discussion-comment) endpoint.
    
    List the reactions to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param array $queryParameters {
    *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a team discussion comment.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsListForTeamDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForTeamDiscussionCommentLegacy($teamId, $discussionNumber, $commentNumber, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Create reaction for a team discussion comment`](https://developer.github.com/v3/reactions/#create-reaction-for-a-team-discussion-comment) endpoint.
    
    Create a reaction to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion comment.
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsCreateForTeamDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, ?\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForTeamDiscussionCommentLegacy($teamId, $discussionNumber, $commentNumber, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List reactions for a team discussion`](https://developer.github.com/v3/reactions/#list-reactions-for-a-team-discussion) endpoint.
    
    List the reactions to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param array $queryParameters {
    *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a team discussion.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsListForTeamDiscussionLegacy(int $teamId, int $discussionNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForTeamDiscussionLegacy($teamId, $discussionNumber, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Create reaction for a team discussion`](https://developer.github.com/v3/reactions/#create-reaction-for-a-team-discussion) endpoint.
    
    Create a reaction to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion.
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsCreateForTeamDiscussionLegacy(int $teamId, int $discussionNumber, ?\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForTeamDiscussionLegacy($teamId, $discussionNumber, $requestBody), $fetch);
    }
    /**
     * List the reactions to an [issue comment](https://developer.github.com/v3/issues/comments/).
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to an issue comment.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsListForIssueCommentNotFoundException
     * @throws \Github\Exception\ReactionsListForIssueCommentUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsListForIssueComment(string $owner, string $repo, int $commentId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForIssueComment($owner, $repo, $commentId, $queryParameters), $fetch);
    }
    /**
     * Create a reaction to an [issue comment](https://developer.github.com/v3/issues/comments/). A response with a `Status: 200 OK` means that you already added the reaction type to this issue comment.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesCommentsCommentIdReactionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsCreateForIssueCommentUnsupportedMediaTypeException
     * @throws \Github\Exception\ReactionsCreateForIssueCommentUnprocessableEntityException
     *
     * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsCreateForIssueComment(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoIssuesCommentsCommentIdReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForIssueComment($owner, $repo, $commentId, $requestBody), $fetch);
    }
    /**
    * **Note:** You can also specify a team or organization with `team_id` and `org_id` using the route `DELETE /organizations/:org_id/team/:team_id/discussions/:discussion_number/reactions/:reaction_id`.
    
    Delete a reaction to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param int $discussionNumber 
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteForTeamDiscussion(string $org, string $teamSlug, int $discussionNumber, int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteForTeamDiscussion($org, $teamSlug, $discussionNumber, $reactionId), $fetch);
    }
    /**
     * List the reactions to an [issue](https://developer.github.com/v3/issues/).
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to an issue.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsListForIssueNotFoundException
     * @throws \Github\Exception\ReactionsListForIssueGoneException
     * @throws \Github\Exception\ReactionsListForIssueUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsListForIssue(string $owner, string $repo, int $issueNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForIssue($owner, $repo, $issueNumber, $queryParameters), $fetch);
    }
    /**
     * Create a reaction to an [issue](https://developer.github.com/v3/issues/). A response with a `Status: 200 OK` means that you already added the reaction type to this issue.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberReactionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsCreateForIssueUnsupportedMediaTypeException
     * @throws \Github\Exception\ReactionsCreateForIssueUnprocessableEntityException
     *
     * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsCreateForIssue(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForIssue($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * List the reactions to a [pull request review comment](https://developer.github.com/v3/pulls/comments/).
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a pull request review comment.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsListForPullRequestReviewCommentNotFoundException
     * @throws \Github\Exception\ReactionsListForPullRequestReviewCommentUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsListForPullRequestReviewComment(string $owner, string $repo, int $commentId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForPullRequestReviewComment($owner, $repo, $commentId, $queryParameters), $fetch);
    }
    /**
     * Create a reaction to a [pull request review comment](https://developer.github.com/v3/pulls/comments/). A response with a `Status: 200 OK` means that you already added the reaction type to this pull request review comment.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\ReposOwnerRepoPullsCommentsCommentIdReactionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsCreateForPullRequestReviewCommentUnsupportedMediaTypeException
     * @throws \Github\Exception\ReactionsCreateForPullRequestReviewCommentUnprocessableEntityException
     *
     * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsCreateForPullRequestReviewComment(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoPullsCommentsCommentIdReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForPullRequestReviewComment($owner, $repo, $commentId, $requestBody), $fetch);
    }
    /**
    * **Note:** You can also specify a repository by `repository_id` using the route `DELETE /repositories/:repository_id/comments/:comment_id/reactions/:reaction_id`.
    
    Delete a reaction to a [commit comment](https://developer.github.com/v3/repos/comments/).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteForCommitComment(string $owner, string $repo, int $commentId, int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteForCommitComment($owner, $repo, $commentId, $reactionId), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Reactions API. We recommend migrating your existing code to use the new delete reactions endpoints. For more information, see this [blog post](https://developer.github.com/changes/2020-02-26-new-delete-reactions-endpoints/).
    
    OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/), when deleting a [team discussion](https://developer.github.com/v3/teams/discussions/) or [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/).
    *
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\ReactionsDeleteLegacyForbiddenException
    * @throws \Github\Exception\ReactionsDeleteLegacyUnauthorizedException
    * @throws \Github\Exception\ReactionsDeleteLegacyGoneException
    * @throws \Github\Exception\ReactionsDeleteLegacyUnsupportedMediaTypeException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteLegacy(int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteLegacy($reactionId), $fetch);
    }
    /**
    * **Note:** You can also specify a repository by `repository_id` using the route `DELETE delete /repositories/:repository_id/issues/comments/:comment_id/reactions/:reaction_id`.
    
    Delete a reaction to an [issue comment](https://developer.github.com/v3/issues/comments/).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteForIssueComment(string $owner, string $repo, int $commentId, int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteForIssueComment($owner, $repo, $commentId, $reactionId), $fetch);
    }
    /**
    * **Note:** You can also specify a repository by `repository_id` using the route `DELETE /repositories/:repository_id/issues/:issue_number/reactions/:reaction_id`.
    
    Delete a reaction to an [issue](https://developer.github.com/v3/issues/).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $issueNumber issue_number parameter
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteForIssue(string $owner, string $repo, int $issueNumber, int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteForIssue($owner, $repo, $issueNumber, $reactionId), $fetch);
    }
    /**
    * **Note:** You can also specify a team or organization with `team_id` and `org_id` using the route `DELETE /organizations/:org_id/team/:team_id/discussions/:discussion_number/comments/:comment_number/reactions/:reaction_id`.
    
    Delete a reaction to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteForTeamDiscussionComment(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteForTeamDiscussionComment($org, $teamSlug, $discussionNumber, $commentNumber, $reactionId), $fetch);
    }
    /**
     * List the reactions to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/:org_id/team/:team_id/discussions/:discussion_number/comments/:comment_number/reactions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param int $commentNumber 
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a team discussion comment.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsListForTeamDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForTeamDiscussionCommentInOrg($org, $teamSlug, $discussionNumber, $commentNumber, $queryParameters), $fetch);
    }
    /**
     * Create a reaction to a [team discussion comment](https://developer.github.com/v3/teams/discussion_comments/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion comment.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `POST /organizations/:org_id/team/:team_id/discussions/:discussion_number/comments/:comment_number/reactions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param int $commentNumber 
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsCreateForTeamDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForTeamDiscussionCommentInOrg($org, $teamSlug, $discussionNumber, $commentNumber, $requestBody), $fetch);
    }
    /**
     * List the reactions to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/:org_id/team/:team_id/discussions/:discussion_number/reactions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a team discussion.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsListForTeamDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForTeamDiscussionInOrg($org, $teamSlug, $discussionNumber, $queryParameters), $fetch);
    }
    /**
     * Create a reaction to a [team discussion](https://developer.github.com/v3/teams/discussions/). OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/). A response with a `Status: 200 OK` means that you already added the reaction type to this team discussion.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `POST /organizations/:org_id/team/:team_id/discussions/:discussion_number/reactions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberReactionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsCreateForTeamDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForTeamDiscussionInOrg($org, $teamSlug, $discussionNumber, $requestBody), $fetch);
    }
    /**
    * **Note:** You can also specify a repository by `repository_id` using the route `DELETE /repositories/:repository_id/pulls/comments/:comment_id/reactions/:reaction_id.`
    
    Delete a reaction to a [pull request review comment](https://developer.github.com/v3/pulls/comments/).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    * @param int $reactionId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function reactionsDeleteForPullRequestComment(string $owner, string $repo, int $commentId, int $reactionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsDeleteForPullRequestComment($owner, $repo, $commentId, $reactionId), $fetch);
    }
    /**
     * List the reactions to a [commit comment](https://developer.github.com/v3/repos/comments/).
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param array $queryParameters {
     *     @var string $content Returns a single [reaction type](https://developer.github.com/v3/reactions/#reaction-types). Omit this parameter to list all reactions to a commit comment.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsListForCommitCommentNotFoundException
     * @throws \Github\Exception\ReactionsListForCommitCommentUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\Reaction[]|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsListForCommitComment(string $owner, string $repo, int $commentId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsListForCommitComment($owner, $repo, $commentId, $queryParameters), $fetch);
    }
    /**
     * Create a reaction to a [commit comment](https://developer.github.com/v3/repos/comments/). A response with a `Status: 200 OK` means that you already added the reaction type to this commit comment.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ReactionsCreateForCommitCommentUnsupportedMediaTypeException
     * @throws \Github\Exception\ReactionsCreateForCommitCommentUnprocessableEntityException
     *
     * @return null|\Github\Model\Reaction|\Psr\Http\Message\ResponseInterface
     */
    public function reactionsCreateForCommitComment(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoCommentsCommentIdReactionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ReactionsCreateForCommitComment($owner, $repo, $commentId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function metaGetZen(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MetaGetZen(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ApiOverview|\Psr\Http\Message\ResponseInterface
     */
    public function metaGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MetaGet(), $fetch);
    }
    /**
     * Get the octocat as ASCII art
     *
     * @param array $queryParameters {
     *     @var string $s The words to show in Octocat's speech bubble
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function metaGetOctocat(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MetaGetOctocat($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\GetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function metaRoot(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\MetaRoot(), $fetch);
    }
    /**
    * Listing and deleting credential authorizations is available to organizations with GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products).
    
    An authenticated organization owner with the `read:org` scope can list all credential authorizations for an organization that uses SAML single sign-on (SSO). The credentials are either personal access tokens or SSH keys that organization members have authorized for the organization. For more information, see [About authentication with SAML single sign-on](https://help.github.com/en/articles/about-authentication-with-saml-single-sign-on).
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CredentialAuthorization[]|\Psr\Http\Message\ResponseInterface
    */
    public function orgsListSamlSsoAuthorizations(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListSamlSsoAuthorizations($org), $fetch);
    }
    /**
     * List all teams associated with an invitation. In order to see invitations in an organization, the authenticated user must be an organization owner.
     *
     * @param string $org 
     * @param int $invitationId invitation_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsListInvitationTeamsNotFoundException
     *
     * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListInvitationTeams(string $org, int $invitationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListInvitationTeams($org, $invitationId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $state Indicates the state of the memberships to return. Can be either `active` or `pending`. If not specified, the API returns both active and pending memberships.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsListMembershipsForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\OrgsListMembershipsForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\OrgsListMembershipsForAuthenticatedUserUnprocessableEntityException
     *
     * @return null|\Github\Model\OrgMembership[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListMembershipsForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListMembershipsForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * Removing a user from this list will remove them from all the organization's repositories.
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsRemoveOutsideCollaboratorUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsRemoveOutsideCollaborator(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsRemoveOutsideCollaborator($org, $username), $fetch);
    }
    /**
     * When an organization member is converted to an outside collaborator, they'll only have access to the repositories that their current team membership allows. The user will no longer be a member of the organization. For more information, see "[Converting an organization member to an outside collaborator](https://help.github.com/articles/converting-an-organization-member-to-an-outside-collaborator/)".
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsConvertMemberToOutsideCollaboratorForbiddenException
     * @throws \Github\Exception\OrgsConvertMemberToOutsideCollaboratorNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsConvertMemberToOutsideCollaborator(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsConvertMemberToOutsideCollaborator($org, $username), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsGetMembershipForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\OrgsGetMembershipForAuthenticatedUserNotFoundException
     *
     * @return null|\Github\Model\OrgMembership|\Psr\Http\Message\ResponseInterface
     */
    public function orgsGetMembershipForAuthenticatedUser(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsGetMembershipForAuthenticatedUser($org), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param null|\Github\Model\UserMembershipsOrgsOrgPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\OrgsUpdateMembershipForAuthenticatedUserUnprocessableEntityException
     *
     * @return null|\Github\Model\OrgMembership|\Psr\Http\Message\ResponseInterface
     */
    public function orgsUpdateMembershipForAuthenticatedUser(string $org, ?\Github\Model\UserMembershipsOrgsOrgPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsUpdateMembershipForAuthenticatedUser($org, $requestBody), $fetch);
    }
    /**
    * In order to remove a user's membership with an organization, the authenticated user must be an organization owner.
    
    If the specified user is an active member of the organization, this will remove them from the organization. If the specified user has been invited to the organization, this will cancel their invitation. The specified user will receive an email notification in both cases.
    *
    * @param string $org 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsRemoveMembershipForUserForbiddenException
    * @throws \Github\Exception\OrgsRemoveMembershipForUserNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function orgsRemoveMembershipForUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsRemoveMembershipForUser($org, $username), $fetch);
    }
    /**
     * In order to get a user's membership with an organization, the authenticated user must be an organization member.
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsGetMembershipForUserNotFoundException
     * @throws \Github\Exception\OrgsGetMembershipForUserForbiddenException
     *
     * @return null|\Github\Model\OrgMembership|\Psr\Http\Message\ResponseInterface
     */
    public function orgsGetMembershipForUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsGetMembershipForUser($org, $username), $fetch);
    }
    /**
    * Only authenticated organization owners can add a member to the organization or update the member's role.
    
    *   If the authenticated user is _adding_ a member to the organization, the invited user will receive an email inviting them to the organization. The user's [membership status](https://developer.github.com/v3/orgs/members/#get-organization-membership-for-a-user) will be `pending` until they accept the invitation.
       
    *   Authenticated users can _update_ a user's membership by passing the `role` parameter. If the authenticated user changes a member's role to `admin`, the affected user will receive an email notifying them that they've been made an organization owner. If the authenticated user changes an owner's role to `member`, no email will be sent.
    
    **Rate limits**
    
    To prevent abuse, the authenticated user is limited to 50 organization invitations per 24 hour period. If the organization is more than one month old or on a paid plan, the limit is 500 invitations per 24 hour period.
    *
    * @param string $org 
    * @param string $username 
    * @param null|\Github\Model\OrgsOrgMembershipsUsernamePutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsSetMembershipForUserUnprocessableEntityException
    * @throws \Github\Exception\OrgsSetMembershipForUserForbiddenException
    *
    * @return null|\Github\Model\OrgMembership|\Psr\Http\Message\ResponseInterface
    */
    public function orgsSetMembershipForUser(string $org, string $username, ?\Github\Model\OrgsOrgMembershipsUsernamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsSetMembershipForUser($org, $username, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsDeleteWebhookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsDeleteWebhook(string $org, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsDeleteWebhook($org, $hookId), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsGetWebhookNotFoundException
     *
     * @return null|\Github\Model\OrgHook|\Psr\Http\Message\ResponseInterface
     */
    public function orgsGetWebhook(string $org, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsGetWebhook($org, $hookId), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param int $hookId 
     * @param null|\Github\Model\OrgsOrgHooksHookIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsUpdateWebhookUnprocessableEntityException
     * @throws \Github\Exception\OrgsUpdateWebhookNotFoundException
     *
     * @return null|\Github\Model\OrgHook|\Psr\Http\Message\ResponseInterface
     */
    public function orgsUpdateWebhook(string $org, int $hookId, ?\Github\Model\OrgsOrgHooksHookIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsUpdateWebhook($org, $hookId, $requestBody), $fetch);
    }
    /**
    * List [public organization memberships](https://help.github.com/articles/publicizing-or-concealing-organization-membership) for the specified user.
    
    This method only lists _public_ memberships, regardless of authentication. If you need to fetch all of the organization memberships (public and private) for the authenticated user, use the [List organizations for the authenticated user](https://developer.github.com/v3/orgs/#list-organizations-for-the-authenticated-user) API instead.
    *
    * @param string $username 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\OrganizationSimple[]|\Psr\Http\Message\ResponseInterface
    */
    public function orgsListForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListForUser($username, $queryParameters), $fetch);
    }
    /**
    * To see many of the organization response values, you need to be an authenticated organization owner with the `admin:org` scope. When the value of `two_factor_requirement_enabled` is `true`, the organization requires all members, billing managers, and outside collaborators to enable [two-factor authentication](https://help.github.com/articles/securing-your-account-with-two-factor-authentication-2fa/).
    
    GitHub Apps with the `Organization plan` permission can use this endpoint to retrieve information about an organization's GitHub plan. See "[Authenticating with GitHub Apps](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/)" for details. For an example response, see "[Response with GitHub plan information](https://developer.github.com/v3/orgs/#response-with-github-plan-information)."
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsGetNotFoundException
    *
    * @return null|\Github\Model\OrganizationFull|\Psr\Http\Message\ResponseInterface
    */
    public function orgsGet(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsGet($org), $fetch);
    }
    /**
    * **Parameter Deprecation Notice:** GitHub will replace and discontinue `members_allowed_repository_creation_type` in favor of more granular permissions. The new input parameters are `members_can_create_public_repositories`, `members_can_create_private_repositories` for all organizations and `members_can_create_internal_repositories` for organizations associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see the [blog post](https://developer.github.com/changes/2019-12-03-internal-visibility-changes).
    
    Enables an authenticated organization owner with the `admin:org` scope to update the organization's profile and member privileges.
    *
    * @param string $org 
    * @param null|\Github\Model\OrgsOrgPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsUpdateUnprocessableEntityException
    * @throws \Github\Exception\OrgsUpdateConflictException
    * @throws \Github\Exception\OrgsUpdateUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\OrganizationFull|\Psr\Http\Message\ResponseInterface
    */
    public function orgsUpdate(string $org, ?\Github\Model\OrgsOrgPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsUpdate($org, $requestBody), $fetch);
    }
    /**
     * This will trigger a [ping event](https://developer.github.com/webhooks/#ping-event) to be sent to the hook.
     *
     * @param string $org 
     * @param int $hookId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsPingWebhookNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsPingWebhook(string $org, int $hookId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsPingWebhook($org, $hookId), $fetch);
    }
    /**
     * Removing a user from this list will remove them from all teams and they will no longer have any access to the organization's repositories.
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsRemoveMemberForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsRemoveMember(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsRemoveMember($org, $username), $fetch);
    }
    /**
     * Check if a user is, publicly or privately, a member of the organization.
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsCheckMembershipForUserNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsCheckMembershipForUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsCheckMembershipForUser($org, $username), $fetch);
    }
    /**
     * Lists all GitHub Apps in an organization. The installation count includes all GitHub Apps installed on repositories in the organization. You must be an organization owner with `admin:read` scope to use this endpoint.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\OrgsOrgInstallationsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListAppInstallations(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListAppInstallations($org, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsRemovePublicMembershipForAuthenticatedUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsRemovePublicMembershipForAuthenticatedUser($org, $username), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsCheckPublicMembershipForUserNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsCheckPublicMembershipForUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsCheckPublicMembershipForUser($org, $username), $fetch);
    }
    /**
    * The user can publicize their own membership. (A user cannot publicize the membership for another user.)
    
    Note that you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    *
    * @param string $org 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsSetPublicMembershipForAuthenticatedUserForbiddenException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function orgsSetPublicMembershipForAuthenticatedUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsSetPublicMembershipForAuthenticatedUser($org, $username), $fetch);
    }
    /**
    * List all users who are outside collaborators of an organization.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var string $filter Filter the list of outside collaborators. Can be one of:  
    \* `2fa_disabled`: Outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled.  
    \* `all`: All outside collaborators.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function orgsListOutsideCollaborators(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListOutsideCollaborators($org, $queryParameters), $fetch);
    }
    /**
     * The return hash contains a `role` field which refers to the Organization Invitation role and will be one of the following values: `direct_member`, `admin`, `billing_manager`, `hiring_manager`, or `reinstate`. If the invitee is not a GitHub member, the `login` field in the return hash will be `null`.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsListPendingInvitationsNotFoundException
     *
     * @return null|\Github\Model\OrganizationInvitation[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListPendingInvitations(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListPendingInvitations($org, $queryParameters), $fetch);
    }
    /**
    * Invite people to an organization by using their GitHub user ID or their email address. In order to create invitations in an organization, the authenticated user must be an organization owner.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $org 
    * @param null|\Github\Model\OrgsOrgInvitationsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsCreateInvitationUnprocessableEntityException
    * @throws \Github\Exception\OrgsCreateInvitationNotFoundException
    *
    * @return null|\Github\Model\OrganizationInvitation|\Psr\Http\Message\ResponseInterface
    */
    public function orgsCreateInvitation(string $org, ?\Github\Model\OrgsOrgInvitationsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsCreateInvitation($org, $requestBody), $fetch);
    }
    /**
     * Lists all organizations, in the order that they were created on GitHub.
     **Note:** Pagination is powered exclusively by the `since` parameter. Use the [Link header](https://developer.github.com/v3/#link-header) to get the URL for the next page of organizations.
     *
     * @param array $queryParameters {
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\OrganizationSimple[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsListWebhooksNotFoundException
     *
     * @return null|\Github\Model\OrgHook[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListWebhooks(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListWebhooks($org, $queryParameters), $fetch);
    }
    /**
     * Here's how you can create a hook that posts payloads in JSON format:
     *
     * @param string $org 
     * @param null|\Github\Model\OrgsOrgHooksPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsCreateWebhookUnprocessableEntityException
     * @throws \Github\Exception\OrgsCreateWebhookNotFoundException
     *
     * @return null|\Github\Model\OrgHook|\Psr\Http\Message\ResponseInterface
     */
    public function orgsCreateWebhook(string $org, ?\Github\Model\OrgsOrgHooksPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsCreateWebhook($org, $requestBody), $fetch);
    }
    /**
     * List the users blocked by an organization.
     *
     * @param string $org 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsListBlockedUsersUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListBlockedUsers(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListBlockedUsers($org), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsUnblockUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsUnblockUser($org, $username), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsCheckBlockedUserNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsCheckBlockedUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsCheckBlockedUser($org, $username), $fetch);
    }
    /**
     * 
     *
     * @param string $org 
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OrgsBlockUserUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function orgsBlockUser(string $org, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsBlockUser($org, $username), $fetch);
    }
    /**
    * List all users who are members of an organization. If the authenticated user is also a member of this organization then both concealed and public members will be returned.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var string $filter Filter members returned in the list. Can be one of:  
    \* `2fa_disabled` - Members without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled. Available for organization owners.  
    \* `all` - All members the authenticated user can see.
    *     @var string $role Filter members returned by their role. Can be one of:  
    \* `all` - All members of the organization, regardless of role.  
    \* `admin` - Organization owners.  
    \* `member` - Non-owner organization members.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsListMembersUnprocessableEntityException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function orgsListMembers(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListMembers($org, $queryParameters), $fetch);
    }
    /**
    * List organizations for the authenticated user.
    
    **OAuth scope requirements**
    
    This only lists organizations that your authorization allows you to operate on in some way (e.g., you can list teams with `read:org` scope, you can publicize your organization membership with `user` scope, etc.). Therefore, this API requires at least `user` or `read:org` scope. OAuth requests with insufficient scope receive a `403 Forbidden` response.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsListForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\OrgsListForAuthenticatedUserUnauthorizedException
    *
    * @return null|\Github\Model\OrganizationSimple[]|\Psr\Http\Message\ResponseInterface
    */
    public function orgsListForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * Listing and deleting credential authorizations is available to organizations with GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products).
    
    An authenticated organization owner with the `admin:org` scope can remove a credential authorization for an organization that uses SAML SSO. Once you remove someone's credential authorization, they will need to create a new personal access token or SSH key and authorize it for the organization they want to access.
    *
    * @param string $org 
    * @param int $credentialId credential_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OrgsRemoveSamlSsoAuthorizationNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function orgsRemoveSamlSsoAuthorization(string $org, int $credentialId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsRemoveSamlSsoAuthorization($org, $credentialId), $fetch);
    }
    /**
     * Members of an organization can choose to have their membership publicized or not.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function orgsListPublicMembers(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OrgsListPublicMembers($org, $queryParameters), $fetch);
    }
    /**
    * Searches for query terms inside of a file. This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for code, you can get text match metadata for the file **content** and file **path** fields when you pass the `text-match` media type. For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to find the definition of the `addClass` function inside [jQuery](https://github.com/jquery/jquery) repository, your query would look something like this:
    
    `q=addClass+in:file+language:js+repo:jquery/jquery`
    
    This query searches for the keyword `addClass` within a file's contents. The query limits the search to files where the language is JavaScript in the `jquery/jquery` repository.
    
    #### Considerations for code search
    
    Due to the complexity of searching code, there are a few restrictions on how searches are performed:
    
    *   Only the _default branch_ is considered. In most cases, this will be the `master` branch.
    *   Only files smaller than 384 KB are searchable.
    *   You must always include at least one search term when searching source code. For example, searching for [`language:go`](https://github.com/search?utf8=%E2%9C%93&q=language%3Ago&type=Code) is not valid, while [`amazing
    language:go`](https://github.com/search?utf8=%E2%9C%93&q=amazing+language%3Ago&type=Code) is.
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching code](https://help.github.com/articles/searching-code/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query. Can only be `indexed`, which indicates how recently a file has been indexed by the GitHub search infrastructure. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchCodeServiceUnavailableException
    * @throws \Github\Exception\SearchCodeUnprocessableEntityException
    * @throws \Github\Exception\SearchCodeForbiddenException
    *
    * @return null|\Github\Model\SearchCodeGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchCode(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchCode($queryParameters), $fetch);
    }
    /**
    * Find labels in a repository with names or descriptions that match search keywords. Returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for labels, you can get text match metadata for the label **name** and **description** fields when you pass the `text-match` media type. For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to find labels in the `linguist` repository that match `bug`, `defect`, or `enhancement`. Your query might look like this:
    
    `q=bug+defect+enhancement&repository_id=64778136`
    
    The labels that best match the query appear first in the search results.
    *
    * @param array $queryParameters {
    *     @var int $repository_id The id of the repository.
    *     @var string $q The search keywords. This endpoint does not accept qualifiers in the query. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query).
    *     @var string $sort Sorts the results of your query by when the label was `created` or `updated`. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchLabelsNotFoundException
    * @throws \Github\Exception\SearchLabelsForbiddenException
    * @throws \Github\Exception\SearchLabelsUnprocessableEntityException
    *
    * @return null|\Github\Model\SearchLabelsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchLabels(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchLabels($queryParameters), $fetch);
    }
    /**
    * Find users via various criteria. This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for users, you can get text match metadata for the issue **login**, **email**, and **name** fields when you pass the `text-match` media type. For more details about highlighting search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata). For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you're looking for a list of popular users, you might try this query:
    
    `q=tom+repos:%3E42+followers:%3E1000`
    
    This query searches for users with the name `tom`. The results are restricted to users with more than 42 repositories and over 1,000 followers.
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching users](https://help.github.com/articles/searching-users/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query by number of `followers` or `repositories`, or when the person `joined` GitHub. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchUsersServiceUnavailableException
    * @throws \Github\Exception\SearchUsersUnprocessableEntityException
    *
    * @return null|\Github\Model\SearchUsersGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchUsers($queryParameters), $fetch);
    }
    /**
    * Find commits via various criteria on the default branch (usually `master`). This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for commits, you can get text match metadata for the **message** field when you provide the `text-match` media type. For more details about how to receive highlighted search results, see [Text match
    metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to find commits related to CSS in the [octocat/Spoon-Knife](https://github.com/octocat/Spoon-Knife) repository. Your query would look something like this:
    
    `q=repo:octocat/Spoon-Knife+css`
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching commits](https://help.github.com/articles/searching-commits/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query by `author-date` or `committer-date`. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchCommitsUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\SearchCommitsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchCommits(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchCommits($queryParameters), $fetch);
    }
    /**
    * Find issues by state and keyword. This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for issues, you can get text match metadata for the issue **title**, issue **body**, and issue **comment body** fields when you pass the `text-match` media type. For more details about how to receive highlighted
    search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to find the oldest unresolved Python bugs on Windows. Your query might look something like this.
    
    `q=windows+label:bug+language:python+state:open&sort=created&order=asc`
    
    This query searches for the keyword `windows`, within any open issue that is labeled as `bug`. The search runs across repositories whose primary language is Python. The results are sorted by creation date in ascending order, whick means the oldest issues appear first in the search results.
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching issues and pull requests](https://help.github.com/articles/searching-issues-and-pull-requests/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query by the number of `comments`, `reactions`, `reactions-+1`, `reactions--1`, `reactions-smile`, `reactions-thinking_face`, `reactions-heart`, `reactions-tada`, or `interactions`. You can also sort results by how recently the items were `created` or `updated`, Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchIssuesAndPullRequestsServiceUnavailableException
    * @throws \Github\Exception\SearchIssuesAndPullRequestsUnprocessableEntityException
    * @throws \Github\Exception\SearchIssuesAndPullRequestsForbiddenException
    *
    * @return null|\Github\Model\SearchIssuesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchIssuesAndPullRequests(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchIssuesAndPullRequests($queryParameters), $fetch);
    }
    /**
    * Find repositories via various criteria. This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination).
    
    When searching for repositories, you can get text match metadata for the **name** and **description** fields when you pass the `text-match` media type. For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to search for popular Tetris repositories written in assembly code, your query might look like this:
    
    `q=tetris+language:assembly&sort=stars&order=desc`
    
    This query searches for repositories with the word `tetris` in the name, the description, or the README. The results are limited to repositories where the primary language is assembly. The results are sorted by stars in descending order, so that the most popular repositories appear first in the search results.
    
    When you include the `mercy` preview header, you can also search for multiple topics by adding more `topic:` instances. For example, your query might look like this:
    
    `q=topic:ruby+topic:rails`
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query). See "[Searching for repositories](https://help.github.com/articles/searching-for-repositories/)" for a detailed list of qualifiers.
    *     @var string $sort Sorts the results of your query by number of `stars`, `forks`, or `help-wanted-issues` or how recently the items were `updated`. Default: [best match](https://developer.github.com/v3/search/#ranking-search-results)
    *     @var string $order Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchReposServiceUnavailableException
    * @throws \Github\Exception\SearchReposUnprocessableEntityException
    *
    * @return null|\Github\Model\SearchRepositoriesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchRepos(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchRepos($queryParameters), $fetch);
    }
    /**
    * Find topics via various criteria. Results are sorted by best match. This method returns up to 100 results [per page](https://developer.github.com/v3/#pagination). See "[Searching topics](https://help.github.com/articles/searching-topics/)" for a detailed list of qualifiers.
    
    When searching for topics, you can get text match metadata for the topic's **short\_description**, **description**, **name**, or **display\_name** field when you pass the `text-match` media type. For more details about how to receive highlighted search results, see [Text match metadata](https://developer.github.com/v3/search/#text-match-metadata).
    
    For example, if you want to search for topics related to Ruby that are featured on https://github.com/topics. Your query might look like this:
    
    `q=ruby+is:featured`
    
    This query searches for topics with the keyword `ruby` and limits the results to find only topics that are featured. The topics that are the best match for the query appear first in the search results.
    *
    * @param array $queryParameters {
    *     @var string $q The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://developer.github.com/v3/search/#constructing-a-search-query).
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\SearchTopicsUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\SearchTopicsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function searchTopics(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\SearchTopics($queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    
    You can use this API to list the set of OAuth applications that have been granted access to your account. Unlike the [list your authorizations](https://developer.github.com/v3/oauth_authorizations/#list-your-authorizations) API, this API does not manage individual tokens. This API will return one entry for each OAuth application that has been granted access to your account, regardless of the number of tokens an application has generated for your user. The list of OAuth applications returned matches what is shown on [the application authorizations settings screen within GitHub](https://github.com/settings/applications#authorized). The `scopes` returned are the union of scopes authorized for the application. For example, if an application has one token with `repo` scope and another token with `user` scope, the grant will return `["repo", "user"]`.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OauthAuthorizationsListGrantsForbiddenException
    * @throws \Github\Exception\OauthAuthorizationsListGrantsUnauthorizedException
    * @throws \Github\Exception\OauthAuthorizationsListGrantsNotFoundException
    *
    * @return null|\Github\Model\ApplicationGrant[]|\Psr\Http\Message\ResponseInterface
    */
    public function oauthAuthorizationsListGrants(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsListGrants($queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    
    Deleting an OAuth application's grant will also delete all OAuth tokens associated with the application for your user. Once deleted, the application has no access to your account and is no longer listed on [the application authorizations settings screen within GitHub](https://github.com/settings/applications#authorized).
    *
    * @param int $grantId grant_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OauthAuthorizationsDeleteGrantForbiddenException
    * @throws \Github\Exception\OauthAuthorizationsDeleteGrantUnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function oauthAuthorizationsDeleteGrant(int $grantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsDeleteGrant($grantId), $fetch);
    }
    /**
     * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
     *
     * @param int $grantId grant_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OauthAuthorizationsGetGrantForbiddenException
     * @throws \Github\Exception\OauthAuthorizationsGetGrantUnauthorizedException
     *
     * @return null|\Github\Model\ApplicationGrant|\Psr\Http\Message\ResponseInterface
     */
    public function oauthAuthorizationsGetGrant(int $grantId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsGetGrant($grantId), $fetch);
    }
    /**
     * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OauthAuthorizationsListAuthorizationsForbiddenException
     * @throws \Github\Exception\OauthAuthorizationsListAuthorizationsUnauthorizedException
     * @throws \Github\Exception\OauthAuthorizationsListAuthorizationsNotFoundException
     *
     * @return null|\Github\Model\Authorization[]|\Psr\Http\Message\ResponseInterface
     */
    public function oauthAuthorizationsListAuthorizations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsListAuthorizations($queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    
    **Warning:** Apps must use the [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow) to obtain OAuth tokens that work with GitHub SAML organizations. OAuth tokens created using the Authorizations API will be unable to access GitHub SAML organizations. For more information, see the [blog post](https://developer.github.com/changes/2019-11-05-deprecated-passwords-and-authorizations-api).
    
    Creates OAuth tokens using [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication). If you have two-factor authentication setup, Basic Authentication for this endpoint requires that you use a one-time password (OTP) and your username and password instead of tokens. For more information, see "[Working with two-factor authentication](https://developer.github.com/v3/auth/#working-with-two-factor-authentication)."
    
    To create tokens for a particular OAuth application using this endpoint, you must authenticate as the user you want to create an authorization for and provide the app's client ID and secret, found on your OAuth application's settings page. If your OAuth application intends to create multiple tokens for one user, use `fingerprint` to differentiate between them.
    
    You can also create tokens on GitHub from the [personal access tokens settings](https://github.com/settings/tokens) page. Read more about these tokens in [the GitHub Help documentation](https://help.github.com/articles/creating-an-access-token-for-command-line-use).
    
    Organizations that enforce SAML SSO require personal access tokens to be allowed. Read more about allowing tokens in [the GitHub Help documentation](https://help.github.com/articles/about-identity-and-access-management-with-saml-single-sign-on).
    *
    * @param null|\Github\Model\AuthorizationsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OauthAuthorizationsCreateAuthorizationUnprocessableEntityException
    * @throws \Github\Exception\OauthAuthorizationsCreateAuthorizationGoneException
    * @throws \Github\Exception\OauthAuthorizationsCreateAuthorizationForbiddenException
    * @throws \Github\Exception\OauthAuthorizationsCreateAuthorizationUnauthorizedException
    *
    * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
    */
    public function oauthAuthorizationsCreateAuthorization(?\Github\Model\AuthorizationsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsCreateAuthorization($requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    
    **Warning:** Apps must use the [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow) to obtain OAuth tokens that work with GitHub SAML organizations. OAuth tokens created using the Authorizations API will be unable to access GitHub SAML organizations. For more information, see the [blog post](https://developer.github.com/changes/2019-11-05-deprecated-passwords-and-authorizations-api).
    
    This method will create a new authorization for the specified OAuth application, only if an authorization for that application and fingerprint do not already exist for the user. The URL includes the 20 character client ID for the OAuth app that is requesting the token. `fingerprint` is a unique string to distinguish an authorization from others created for the same client ID and user. It returns the user's existing authorization for the application if one is present. Otherwise, it creates and returns a new one.
    
    If you have two-factor authentication setup, Basic Authentication for this endpoint requires that you use a one-time password (OTP) and your username and password instead of tokens. For more information, see "[Working with two-factor authentication](https://developer.github.com/v3/auth/#working-with-two-factor-authentication)."
    *
    * @param string $clientId 
    * @param string $fingerprint fingerprint parameter
    * @param null|\Github\Model\AuthorizationsClientsClientIdFingerprintPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprintUnprocessableEntityException
    *
    * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
    */
    public function oauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprint(string $clientId, string $fingerprint, ?\Github\Model\AuthorizationsClientsClientIdFingerprintPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsGetOrCreateAuthorizationForAppAndFingerprint($clientId, $fingerprint, $requestBody), $fetch);
    }
    /**
     * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
     *
     * @param int $authorizationId authorization_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OauthAuthorizationsDeleteAuthorizationForbiddenException
     * @throws \Github\Exception\OauthAuthorizationsDeleteAuthorizationUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function oauthAuthorizationsDeleteAuthorization(int $authorizationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsDeleteAuthorization($authorizationId), $fetch);
    }
    /**
     * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
     *
     * @param int $authorizationId authorization_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\OauthAuthorizationsGetAuthorizationForbiddenException
     * @throws \Github\Exception\OauthAuthorizationsGetAuthorizationUnauthorizedException
     *
     * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
     */
    public function oauthAuthorizationsGetAuthorization(int $authorizationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsGetAuthorization($authorizationId), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    
    If you have two-factor authentication setup, Basic Authentication for this endpoint requires that you use a one-time password (OTP) and your username and password instead of tokens. For more information, see "[Working with two-factor authentication](https://developer.github.com/v3/auth/#working-with-two-factor-authentication)."
    
    You can only send one of these scope keys at a time.
    *
    * @param int $authorizationId authorization_id parameter
    * @param null|\Github\Model\AuthorizationsAuthorizationIdPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OauthAuthorizationsUpdateAuthorizationUnprocessableEntityException
    *
    * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
    */
    public function oauthAuthorizationsUpdateAuthorization(int $authorizationId, ?\Github\Model\AuthorizationsAuthorizationIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsUpdateAuthorization($authorizationId, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    
    **Warning:** Apps must use the [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow) to obtain OAuth tokens that work with GitHub SAML organizations. OAuth tokens created using the Authorizations API will be unable to access GitHub SAML organizations. For more information, see the [blog post](https://developer.github.com/changes/2019-11-05-deprecated-passwords-and-authorizations-api).
    
    Creates a new authorization for the specified OAuth application, only if an authorization for that application doesn't already exist for the user. The URL includes the 20 character client ID for the OAuth app that is requesting the token. It returns the user's existing authorization for the application if one is present. Otherwise, it creates and returns a new one.
    
    If you have two-factor authentication setup, Basic Authentication for this endpoint requires that you use a one-time password (OTP) and your username and password instead of tokens. For more information, see "[Working with two-factor authentication](https://developer.github.com/v3/auth/#working-with-two-factor-authentication)."
    
    **Deprecation Notice:** GitHub will discontinue the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/), which is used by integrations to create personal access tokens and OAuth tokens, and you must now create these tokens using our [web application flow](https://developer.github.com/apps/building-oauth-apps/authorizing-oauth-apps/#web-application-flow). The [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/) will be removed on November, 13, 2020. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-auth-endpoint/).
    *
    * @param string $clientId 
    * @param null|\Github\Model\AuthorizationsClientsClientIdPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\OauthAuthorizationsGetOrCreateAuthorizationForAppUnprocessableEntityException
    * @throws \Github\Exception\OauthAuthorizationsGetOrCreateAuthorizationForAppForbiddenException
    * @throws \Github\Exception\OauthAuthorizationsGetOrCreateAuthorizationForAppUnauthorizedException
    *
    * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
    */
    public function oauthAuthorizationsGetOrCreateAuthorizationForApp(string $clientId, ?\Github\Model\AuthorizationsClientsClientIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\OauthAuthorizationsGetOrCreateAuthorizationForApp($clientId, $requestBody), $fetch);
    }
    /**
     * This method returns the contents of the repository's code of conduct file, if one is detected.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\CodeOfConduct|\Psr\Http\Message\ResponseInterface
     */
    public function codesOfConductGetForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\CodesOfConductGetForRepo($owner, $repo), $fetch);
    }
    /**
     * 
     *
     * @param string $key key parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\CodesOfConductGetConductCodeNotFoundException
     * @throws \Github\Exception\CodesOfConductGetConductCodeUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\CodeOfConduct|\Psr\Http\Message\ResponseInterface
     */
    public function codesOfConductGetConductCode(string $key, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\CodesOfConductGetConductCode($key), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\CodesOfConductGetAllCodesOfConductUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\CodeOfConduct[]|\Psr\Http\Message\ResponseInterface
     */
    public function codesOfConductGetAllCodesOfConduct(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\CodesOfConductGetAllCodesOfConduct(), $fetch);
    }
    /**
     * Lists the people following the authenticated user.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListFollowersForAuthenticatedUserForbiddenException
     * @throws \Github\Exception\UsersListFollowersForAuthenticatedUserUnauthorizedException
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListFollowersForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListFollowersForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * Lists the people who the authenticated user follows.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListFollowedByAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersListFollowedByAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListFollowedByAuthenticated(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListFollowedByAuthenticated($queryParameters), $fetch);
    }
    /**
     * Lists the current user's GPG keys. Requires that you are authenticated via Basic Auth or via OAuth with at least `read:gpg_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListGpgKeysForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersListGpgKeysForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersListGpgKeysForAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\GpgKey[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListGpgKeysForAuthenticated(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListGpgKeysForAuthenticated($queryParameters), $fetch);
    }
    /**
     * Adds a GPG key to the authenticated user's GitHub account. Requires that you are authenticated via Basic Auth, or OAuth with at least `write:gpg_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param null|\Github\Model\UserGpgKeysPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersCreateGpgKeyForAuthenticatedUnprocessableEntityException
     * @throws \Github\Exception\UsersCreateGpgKeyForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersCreateGpgKeyForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersCreateGpgKeyForAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\GpgKey|\Psr\Http\Message\ResponseInterface
     */
    public function usersCreateGpgKeyForAuthenticated(?\Github\Model\UserGpgKeysPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersCreateGpgKeyForAuthenticated($requestBody), $fetch);
    }
    /**
     * Removes a public SSH key from the authenticated user's GitHub account. Requires that you are authenticated via Basic Auth or via OAuth with at least `admin:public_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param int $keyId key_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersDeletePublicSshKeyForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersDeletePublicSshKeyForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersDeletePublicSshKeyForAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersDeletePublicSshKeyForAuthenticated(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersDeletePublicSshKeyForAuthenticated($keyId), $fetch);
    }
    /**
     * View extended details for a single public SSH key. Requires that you are authenticated via Basic Auth or via OAuth with at least `read:public_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param int $keyId key_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersGetPublicSshKeyForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersGetPublicSshKeyForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersGetPublicSshKeyForAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\Key|\Psr\Http\Message\ResponseInterface
     */
    public function usersGetPublicSshKeyForAuthenticated(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersGetPublicSshKeyForAuthenticated($keyId), $fetch);
    }
    /**
     * Removes a GPG key from the authenticated user's GitHub account. Requires that you are authenticated via Basic Auth or via OAuth with at least `admin:gpg_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param int $gpgKeyId gpg_key_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersDeleteGpgKeyForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersDeleteGpgKeyForAuthenticatedUnprocessableEntityException
     * @throws \Github\Exception\UsersDeleteGpgKeyForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersDeleteGpgKeyForAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersDeleteGpgKeyForAuthenticated(int $gpgKeyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersDeleteGpgKeyForAuthenticated($gpgKeyId), $fetch);
    }
    /**
     * View extended details for a single GPG key. Requires that you are authenticated via Basic Auth or via OAuth with at least `read:gpg_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param int $gpgKeyId gpg_key_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersGetGpgKeyForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersGetGpgKeyForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersGetGpgKeyForAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\GpgKey|\Psr\Http\Message\ResponseInterface
     */
    public function usersGetGpgKeyForAuthenticated(int $gpgKeyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersGetGpgKeyForAuthenticated($gpgKeyId), $fetch);
    }
    /**
     * This endpoint is accessible with the `user` scope.
     *
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersDeleteEmailForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersDeleteEmailForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersDeleteEmailForAuthenticatedUnauthorizedException
     * @throws \Github\Exception\UsersDeleteEmailForAuthenticatedUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersDeleteEmailForAuthenticated($requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersDeleteEmailForAuthenticated($requestBody), $fetch);
    }
    /**
     * Lists all of your email addresses, and specifies which one is visible to the public. This endpoint is accessible with the `user:email` scope.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListEmailsForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersListEmailsForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersListEmailsForAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersListEmailsForAuthenticated(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListEmailsForAuthenticated($queryParameters), $fetch);
    }
    /**
     * This endpoint is accessible with the `user` scope.
     *
     * @param null|mixed $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedUnprocessableEntityException
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersAddEmailForAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersAddEmailForAuthenticated($requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersAddEmailForAuthenticated($requestBody), $fetch);
    }
    /**
     * Unfollowing a user requires the user to be logged in and authenticated with basic auth or OAuth with the `user:follow` scope.
     *
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersUnfollowNotFoundException
     * @throws \Github\Exception\UsersUnfollowForbiddenException
     * @throws \Github\Exception\UsersUnfollowUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersUnfollow(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersUnfollow($username), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersCheckPersonIsFollowedByAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersCheckPersonIsFollowedByAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersCheckPersonIsFollowedByAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersCheckPersonIsFollowedByAuthenticated(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersCheckPersonIsFollowedByAuthenticated($username), $fetch);
    }
    /**
    * Note that you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    
    Following a user requires the user to be logged in and authenticated with basic auth or OAuth with the `user:follow` scope.
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\UsersFollowNotFoundException
    * @throws \Github\Exception\UsersFollowForbiddenException
    * @throws \Github\Exception\UsersFollowUnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function usersFollow(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersFollow($username), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersUnblockForbiddenException
     * @throws \Github\Exception\UsersUnblockUnauthorizedException
     * @throws \Github\Exception\UsersUnblockNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersUnblock(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersUnblock($username), $fetch);
    }
    /**
    * If the user is blocked:
    
    If the user is not blocked:
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\UsersCheckBlockedNotFoundException
    * @throws \Github\Exception\UsersCheckBlockedForbiddenException
    * @throws \Github\Exception\UsersCheckBlockedUnauthorizedException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function usersCheckBlocked(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersCheckBlocked($username), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersBlockNotFoundException
     * @throws \Github\Exception\UsersBlockForbiddenException
     * @throws \Github\Exception\UsersBlockUnauthorizedException
     * @throws \Github\Exception\UsersBlockUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersBlock(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersBlock($username), $fetch);
    }
    /**
     * Lists your publicly visible email address, which you can set with the [Set primary email visibility for the authenticated user](https://developer.github.com/v3/users/emails/#set-primary-email-visibility-for-the-authenticated-user) endpoint. This endpoint is accessible with the `user:email` scope.
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListPublicEmailsForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersListPublicEmailsForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersListPublicEmailsForAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersListPublicEmailsForAuthenticated(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListPublicEmailsForAuthenticated($queryParameters), $fetch);
    }
    /**
     * Lists the people who the specified user follows.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListFollowingForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListFollowingForUser($username, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListBlockedByAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersListBlockedByAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersListBlockedByAuthenticatedUnauthorizedException
     * @throws \Github\Exception\UsersListBlockedByAuthenticatedUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListBlockedByAuthenticated(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListBlockedByAuthenticated(), $fetch);
    }
    /**
    * Provides publicly available information about someone with a GitHub account.
    
    GitHub Apps with the `Plan` user permission can use this endpoint to retrieve information about a user's GitHub plan. The GitHub App must be authenticated as a user. See "[Identifying and authorizing users for GitHub Apps](https://developer.github.com/apps/building-github-apps/identifying-and-authorizing-users-for-github-apps/)" for details about authentication. For an example response, see "[Response with GitHub plan information](https://developer.github.com/v3/users/#response-with-github-plan-information)."
    
    The `email` key in the following response is the publicly visible email address from your GitHub [profile page](https://github.com/settings/profile). When setting up your profile, you can select a primary email address to be “public” which provides an email entry for this endpoint. If you do not set a public email address for `email`, then it will have a value of `null`. You only see publicly visible email addresses when authenticated with GitHub. For more information, see [Authentication](https://developer.github.com/v3/#authentication).
    
    The Emails API enables you to list all of your email addresses, and toggle a primary email to be visible publicly. For more information, see "[Emails API](https://developer.github.com/v3/users/emails/)".
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\UsersGetByUsernameNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function usersGetByUsername(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersGetByUsername($username), $fetch);
    }
    /**
     * Lists the GPG keys for a user. This information is accessible by anyone.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\GpgKey[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListGpgKeysForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListGpgKeysForUser($username, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $username 
     * @param string $targetUser target_user parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersCheckFollowingForUserNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersCheckFollowingForUser(string $username, string $targetUser, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersCheckFollowingForUser($username, $targetUser), $fetch);
    }
    /**
     * Lists the public SSH keys for the authenticated user's GitHub account. Requires that you are authenticated via Basic Auth or via OAuth with at least `read:public_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersListPublicSshKeysForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersListPublicSshKeysForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersListPublicSshKeysForAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\Key[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListPublicSshKeysForAuthenticated(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListPublicSshKeysForAuthenticated($queryParameters), $fetch);
    }
    /**
     * Adds a public SSH key to the authenticated user's GitHub account. Requires that you are authenticated via Basic Auth, or OAuth with at least `write:public_key` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     *
     * @param null|\Github\Model\UserKeysPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersCreatePublicSshKeyForAuthenticatedUnprocessableEntityException
     * @throws \Github\Exception\UsersCreatePublicSshKeyForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersCreatePublicSshKeyForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersCreatePublicSshKeyForAuthenticatedUnauthorizedException
     *
     * @return null|\Github\Model\Key|\Psr\Http\Message\ResponseInterface
     */
    public function usersCreatePublicSshKeyForAuthenticated(?\Github\Model\UserKeysPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersCreatePublicSshKeyForAuthenticated($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersGetAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersGetAuthenticatedUnauthorizedException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersGetAuthenticated(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersGetAuthenticated(), $fetch);
    }
    /**
     * **Note:** If your email is set to private and you send an `email` parameter as part of this request to update your profile, your privacy settings are still enforced: the email address will not be displayed on your public profile or via the API.
     *
     * @param null|\Github\Model\UserPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersUpdateAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersUpdateAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersUpdateAuthenticatedUnauthorizedException
     * @throws \Github\Exception\UsersUpdateAuthenticatedUnprocessableEntityException
     *
     * @return null|\Github\Model\PrivateUser|\Psr\Http\Message\ResponseInterface
     */
    public function usersUpdateAuthenticated(?\Github\Model\UserPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersUpdateAuthenticated($requestBody), $fetch);
    }
    /**
    * Lists all users, in the order that they signed up on GitHub. This list includes personal user accounts and organization accounts.
    
    Note: Pagination is powered exclusively by the `since` parameter. Use the [Link header](https://developer.github.com/v3/#link-header) to get the URL for the next page of users.
    *
    * @param array $queryParameters {
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function usersList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersList($queryParameters), $fetch);
    }
    /**
    * Provides hovercard information when authenticated through basic auth or OAuth with the `repo` scope. You can find out more about someone in relation to their pull requests, issues, repositories, and organizations.
    
    The `subject_type` and `subject_id` parameters provide context for the person's hovercard, which returns more information than without the parameters. For example, if you wanted to find out more about `octocat` who owns the `Spoon-Knife` repository via cURL, it would look like this:
    
    ```shell
    curl -u username:token
     https://api.github.com/users/octocat/hovercard?subject_type=repository&subject_id=1300192
    ```
    *
    * @param string $username 
    * @param array $queryParameters {
    *     @var string $subject_type Identifies which additional information you'd like to receive about the person's hovercard. Can be `organization`, `repository`, `issue`, `pull_request`. **Required** when using `subject_id`.
    *     @var string $subject_id Uses the ID for the `subject_type` you specified. **Required** when using `subject_type`.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\UsersGetContextForUserNotFoundException
    * @throws \Github\Exception\UsersGetContextForUserUnprocessableEntityException
    *
    * @return null|\Github\Model\Hovercard|\Psr\Http\Message\ResponseInterface
    */
    public function usersGetContextForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersGetContextForUser($username, $queryParameters), $fetch);
    }
    /**
     * Sets the visibility for your primary email addresses.
     *
     * @param null|\Github\Model\UserEmailVisibilityPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\UsersSetPrimaryEmailVisibilityForAuthenticatedNotFoundException
     * @throws \Github\Exception\UsersSetPrimaryEmailVisibilityForAuthenticatedForbiddenException
     * @throws \Github\Exception\UsersSetPrimaryEmailVisibilityForAuthenticatedUnauthorizedException
     * @throws \Github\Exception\UsersSetPrimaryEmailVisibilityForAuthenticatedUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function usersSetPrimaryEmailVisibilityForAuthenticated(?\Github\Model\UserEmailVisibilityPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersSetPrimaryEmailVisibilityForAuthenticated($requestBody), $fetch);
    }
    /**
     * Lists the _verified_ public SSH keys for a user. This is accessible by anyone.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\KeySimple[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListPublicKeysForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListPublicKeysForUser($username, $queryParameters), $fetch);
    }
    /**
     * Lists the people following the specified user.
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function usersListFollowersForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\UsersListFollowersForUser($username, $queryParameters), $fetch);
    }
    /**
     * Lists the workflows in a repository. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsWorkflowsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListRepoWorkflows(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListRepoWorkflows($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * You can use this endpoint to manually trigger a GitHub Actions workflow run. You can also replace `{workflow_id}` with the workflow file name. For example, you could use `main.yml`.
    
    You must configure your GitHub Actions workflow to run when the [`workflow_dispatch` webhook](/developers/webhooks-and-events/webhook-events-and-payloads#workflow_dispatch) event occurs. The `inputs` are configured in the workflow file. For more information about how to configure the `workflow_dispatch` event in the workflow file, see "[Events that trigger workflows](/actions/reference/events-that-trigger-workflows#workflow_dispatch)."
    
    You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint. For more information, see "[Creating a personal access token for the command line](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line)."
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $workflowId 
    * @param null|\Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateWorkflowDispatch(string $owner, string $repo, int $workflowId, ?\Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdDispatchesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateWorkflowDispatch($owner, $repo, $workflowId, $requestBody), $fetch);
    }
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    Forces the removal of a self-hosted runner from an organization. You can use this endpoint to completely remove the runner when the machine you were using no longer exists. You must authenticate using an access token with the `admin:org` scope to use this endpoint.
    *
    * @param string $org 
    * @param int $runnerId runner_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsDeleteSelfHostedRunnerFromOrg(string $org, int $runnerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteSelfHostedRunnerFromOrg($org, $runnerId), $fetch);
    }
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    Gets a specific self-hosted runner for an organization. You must authenticate using an access token with the `admin:org` scope to use this endpoint.
    *
    * @param string $org 
    * @param int $runnerId runner_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Runner|\Psr\Http\Message\ResponseInterface
    */
    public function actionsGetSelfHostedRunnerForOrg(string $org, int $runnerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetSelfHostedRunnerForOrg($org, $runnerId), $fetch);
    }
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    Lists all self-hosted runners for an organization. You must authenticate using an access token with the `admin:org` scope to use this endpoint.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\OrgsOrgActionsRunnersGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function actionsListSelfHostedRunnersForOrg(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListSelfHostedRunnersForOrg($org, $queryParameters), $fetch);
    }
    /**
     * Lists binaries for the runner application that you can download and run. You must authenticate using an access token with the `repo` scope to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\RunnerApplication[]|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListRunnerApplicationsForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListRunnerApplicationsForRepo($owner, $repo), $fetch);
    }
    /**
     * Lists all artifacts for a repository. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsArtifactsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListArtifactsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListArtifactsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Lists all secrets available in a repository without revealing their encrypted values. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `secrets` repository permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsSecretsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListRepoSecrets(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListRepoSecrets($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Deletes a secret in an organization using the secret name. You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsDeleteOrgSecret(string $org, string $secretName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteOrgSecret($org, $secretName), $fetch);
    }
    /**
     * Gets a single organization secret without revealing its encrypted value. You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\OrganizationActionsSecret|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetOrgSecret(string $org, string $secretName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetOrgSecret($org, $secretName), $fetch);
    }
    /**
    * Creates or updates an organization secret with an encrypted value. Encrypt your secret using
    [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages). You must authenticate using an access
    token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to
    use this endpoint.
    
    #### Example encrypting a secret using Node.js
    
    Encrypt your secret using the [tweetsodium](https://github.com/github/tweetsodium) library.
    
    ```
    const sodium = require('tweetsodium');
    
    const key = "base64-encoded-public-key";
    const value = "plain-text-secret";
    
    // Convert the message and key to Uint8Array's (Buffer implements that interface)
    const messageBytes = Buffer.from(value);
    const keyBytes = Buffer.from(key, 'base64');
    
    // Encrypt using LibSodium.
    const encryptedBytes = sodium.seal(messageBytes, keyBytes);
    
    // Base64 the encrypted secret
    const encrypted = Buffer.from(encryptedBytes).toString('base64');
    
    console.log(encrypted);
    ```
    
    
    #### Example encrypting a secret using Python
    
    Encrypt your secret using [pynacl](https://pynacl.readthedocs.io/en/stable/public/#nacl-public-sealedbox) with Python 3.
    
    ```
    from base64 import b64encode
    from nacl import encoding, public
    
    def encrypt(public_key: str, secret_value: str) -> str:
     """Encrypt a Unicode string using the public key."""
     public_key = public.PublicKey(public_key.encode("utf-8"), encoding.Base64Encoder())
     sealed_box = public.SealedBox(public_key)
     encrypted = sealed_box.encrypt(secret_value.encode("utf-8"))
     return b64encode(encrypted).decode("utf-8")
    ```
    
    #### Example encrypting a secret using C#
    
    Encrypt your secret using the [Sodium.Core](https://www.nuget.org/packages/Sodium.Core/) package.
    
    ```
    var secretValue = System.Text.Encoding.UTF8.GetBytes("mySecret");
    var publicKey = Convert.FromBase64String("2Sg8iYjAxxmI2LvUXpJjkYrMxURPc8r+dB7TJyvvcCU=");
    
    var sealedPublicKeyBox = Sodium.SealedPublicKeyBox.Create(secretValue, publicKey);
    
    Console.WriteLine(Convert.ToBase64String(sealedPublicKeyBox));
    ```
    
    #### Example encrypting a secret using Ruby
    
    Encrypt your secret using the [rbnacl](https://github.com/RubyCrypto/rbnacl) gem.
    
    ```ruby
    require "rbnacl"
    require "base64"
    
    key = Base64.decode64("+ZYvJDZMHUfBkJdyq5Zm9SKqeuBQ4sj+6sfjlH4CgG0=")
    public_key = RbNaCl::PublicKey.new(key)
    
    box = RbNaCl::Boxes::Sealed.from_public_key(public_key)
    encrypted_secret = box.encrypt("my_secret")
    
    # Print the base64 encoded secret
    puts Base64.strict_encode64(encrypted_secret)
    ```
    *
    * @param string $org 
    * @param string $secretName secret_name parameter
    * @param null|\Github\Model\OrgsOrgActionsSecretsSecretNamePutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateOrUpdateOrgSecret(string $org, string $secretName, ?\Github\Model\OrgsOrgActionsSecretsSecretNamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateOrUpdateOrgSecret($org, $secretName, $requestBody), $fetch);
    }
    /**
     * Lists all secrets available in an organization without revealing their encrypted values. You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\OrgsOrgActionsSecretsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListOrgSecrets(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListOrgSecrets($org, $queryParameters), $fetch);
    }
    /**
    * **Warning:** This GitHub Actions usage endpoint is currently in public beta and subject to change. For more information, see "[GitHub Actions API workflow usage](https://developer.github.com/changes/2020-05-15-actions-api-workflow-usage)."
    
    Gets the number of billable minutes used by a specific workflow during the current billing cycle. Billable minutes only apply to workflows in private repositories that use GitHub-hosted runners. Usage is listed for each GitHub-hosted runner operating system in milliseconds. Any job re-runs are also included in the usage. The usage does not include the multiplier for macOS and Windows runners and is not rounded up to the nearest whole minute. For more information, see "[Managing billing for GitHub Actions](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-actions)".
    
    You can also replace `:workflow_id` with `:workflow_file_name`. For example, you could use `main.yml`. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $workflowId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\WorkflowUsage|\Psr\Http\Message\ResponseInterface
    */
    public function actionsGetWorkflowUsage(string $owner, string $repo, int $workflowId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetWorkflowUsage($owner, $repo, $workflowId), $fetch);
    }
    /**
     * Deletes an artifact for a workflow run. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $artifactId artifact_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsDeleteArtifact(string $owner, string $repo, int $artifactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteArtifact($owner, $repo, $artifactId), $fetch);
    }
    /**
     * Gets a specific artifact for a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $artifactId artifact_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Artifact|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetArtifact(string $owner, string $repo, int $artifactId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetArtifact($owner, $repo, $artifactId), $fetch);
    }
    /**
     * Deletes a secret in a repository using the secret name. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `secrets` repository permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $secretName secret_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsDeleteRepoSecret(string $owner, string $repo, string $secretName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteRepoSecret($owner, $repo, $secretName), $fetch);
    }
    /**
     * Gets a single repository secret without revealing its encrypted value. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `secrets` repository permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $secretName secret_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ActionsSecret|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetRepoSecret(string $owner, string $repo, string $secretName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetRepoSecret($owner, $repo, $secretName), $fetch);
    }
    /**
    * Creates or updates a repository secret with an encrypted value. Encrypt your secret using
    [LibSodium](https://libsodium.gitbook.io/doc/bindings_for_other_languages). You must authenticate using an access
    token with the `repo` scope to use this endpoint. GitHub Apps must have the `secrets` repository permission to use
    this endpoint.
    
    #### Example encrypting a secret using Node.js
    
    Encrypt your secret using the [tweetsodium](https://github.com/github/tweetsodium) library.
    
    ```
    const sodium = require('tweetsodium');
    
    const key = "base64-encoded-public-key";
    const value = "plain-text-secret";
    
    // Convert the message and key to Uint8Array's (Buffer implements that interface)
    const messageBytes = Buffer.from(value);
    const keyBytes = Buffer.from(key, 'base64');
    
    // Encrypt using LibSodium.
    const encryptedBytes = sodium.seal(messageBytes, keyBytes);
    
    // Base64 the encrypted secret
    const encrypted = Buffer.from(encryptedBytes).toString('base64');
    
    console.log(encrypted);
    ```
    
    
    #### Example encrypting a secret using Python
    
    Encrypt your secret using [pynacl](https://pynacl.readthedocs.io/en/stable/public/#nacl-public-sealedbox) with Python 3.
    
    ```
    from base64 import b64encode
    from nacl import encoding, public
    
    def encrypt(public_key: str, secret_value: str) -> str:
     """Encrypt a Unicode string using the public key."""
     public_key = public.PublicKey(public_key.encode("utf-8"), encoding.Base64Encoder())
     sealed_box = public.SealedBox(public_key)
     encrypted = sealed_box.encrypt(secret_value.encode("utf-8"))
     return b64encode(encrypted).decode("utf-8")
    ```
    
    #### Example encrypting a secret using C#
    
    Encrypt your secret using the [Sodium.Core](https://www.nuget.org/packages/Sodium.Core/) package.
    
    ```
    var secretValue = System.Text.Encoding.UTF8.GetBytes("mySecret");
    var publicKey = Convert.FromBase64String("2Sg8iYjAxxmI2LvUXpJjkYrMxURPc8r+dB7TJyvvcCU=");
    
    var sealedPublicKeyBox = Sodium.SealedPublicKeyBox.Create(secretValue, publicKey);
    
    Console.WriteLine(Convert.ToBase64String(sealedPublicKeyBox));
    ```
    
    #### Example encrypting a secret using Ruby
    
    Encrypt your secret using the [rbnacl](https://github.com/RubyCrypto/rbnacl) gem.
    
    ```ruby
    require "rbnacl"
    require "base64"
    
    key = Base64.decode64("+ZYvJDZMHUfBkJdyq5Zm9SKqeuBQ4sj+6sfjlH4CgG0=")
    public_key = RbNaCl::PublicKey.new(key)
    
    box = RbNaCl::Boxes::Sealed.from_public_key(public_key)
    encrypted_secret = box.encrypt("my_secret")
    
    # Print the base64 encoded secret
    puts Base64.strict_encode64(encrypted_secret)
    ```
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $secretName secret_name parameter
    * @param null|\Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateOrUpdateRepoSecret(string $owner, string $repo, string $secretName, ?\Github\Model\ReposOwnerRepoActionsSecretsSecretNamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateOrUpdateRepoSecret($owner, $repo, $secretName, $requestBody), $fetch);
    }
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    
    Returns a token that you can pass to the `config` script. The token expires after one hour. You must authenticate
    using an access token with the `admin:org` scope to use this endpoint.
    
    #### Example using registration token
    
    Configure your self-hosted runner, replacing `TOKEN` with the registration token provided by this endpoint.
    
    ```
    ./config.sh --url https://github.com/octo-org --token TOKEN
    ```
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\AuthenticationToken|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateRegistrationTokenForOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateRegistrationTokenForOrg($org), $fetch);
    }
    /**
    * Gets a redirect URL to download an archive for a repository. This URL expires after 1 minute. Look for `Location:` in
    the response header to find the URL for the download. The `:archive_format` must be `zip`. Anyone with read access to
    the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope.
    GitHub Apps must have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $artifactId artifact_id parameter
    * @param string $archiveFormat archive_format parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsDownloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDownloadArtifact($owner, $repo, $artifactId, $archiveFormat), $fetch);
    }
    /**
     * Forces the removal of a self-hosted runner from a repository. You can use this endpoint to completely remove the runner when the machine you were using no longer exists. You must authenticate using an access token with the `repo` scope to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runnerId runner_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsDeleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteSelfHostedRunnerFromRepo($owner, $repo, $runnerId), $fetch);
    }
    /**
     * Gets a specific self-hosted runner. You must authenticate using an access token with the `repo` scope to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runnerId runner_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Runner|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetSelfHostedRunnerForRepo($owner, $repo, $runnerId), $fetch);
    }
    /**
    * Gets a redirect URL to download a plain text file of logs for a workflow job. This link expires after 1 minute. Look
    for `Location:` in the response header to find the URL for the download. Anyone with read access to the repository can
    use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must
    have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $jobId job_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsDownloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDownloadJobLogsForWorkflowRun($owner, $repo, $jobId), $fetch);
    }
    /**
    * Lists jobs for a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint. You can use parameters to narrow the list of results. For more information about using parameters, see [Parameters](https://developer.github.com/v3/#parameters).
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $runId 
    * @param array $queryParameters {
    *     @var string $filter Filters jobs by their `completed_at` timestamp. Can be one of:  
    \* `latest`: Returns jobs from the most recent execution of the workflow run.  
    \* `all`: Returns all jobs for a workflow run, including from old executions of the workflow run.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReposOwnerRepoActionsRunsRunIdJobsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function actionsListJobsForWorkflowRun(string $owner, string $repo, int $runId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListJobsForWorkflowRun($owner, $repo, $runId, $queryParameters), $fetch);
    }
    /**
     * Lists all self-hosted runners for a repository. You must authenticate using an access token with the `repo` scope to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsRunnersGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListSelfHostedRunnersForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListSelfHostedRunnersForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * Gets a specific workflow. You can also replace `:workflow_id` with `:workflow_file_name`. For example, you could use `main.yml`. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $workflowId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Workflow|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetWorkflow(string $owner, string $repo, int $workflowId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetWorkflow($owner, $repo, $workflowId), $fetch);
    }
    /**
     * Removes a repository from an organization secret when the `visibility` for repository access is set to `selected`. The visibility is set when you [Create or update an organization secret](https://developer.github.com/v3/actions/secrets/#create-or-update-an-organization-secret). You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param int $repositoryId repository_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActionsRemoveSelectedRepoFromOrgSecretConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsRemoveSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsRemoveSelectedRepoFromOrgSecret($org, $secretName, $repositoryId), $fetch);
    }
    /**
     * Adds a repository to an organization secret when the `visibility` for repository access is set to `selected`. The visibility is set when you [Create or update an organization secret](https://developer.github.com/v3/actions/secrets/#create-or-update-an-organization-secret). You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param int $repositoryId repository_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\ActionsAddSelectedRepoToOrgSecretConflictException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsAddSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsAddSelectedRepoToOrgSecret($org, $secretName, $repositoryId), $fetch);
    }
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    Lists binaries for the runner application that you can download and run. You must authenticate using an access token with the `admin:org` scope to use this endpoint.
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\RunnerApplication[]|\Psr\Http\Message\ResponseInterface
    */
    public function actionsListRunnerApplicationsForOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListRunnerApplicationsForOrg($org), $fetch);
    }
    /**
     * Gets a specific job in a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $jobId job_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Job|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetJobForWorkflowRun(string $owner, string $repo, int $jobId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetJobForWorkflowRun($owner, $repo, $jobId), $fetch);
    }
    /**
     * Cancels a workflow run using its `id`. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsCancelWorkflowRun(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCancelWorkflowRun($owner, $repo, $runId), $fetch);
    }
    /**
     * Deletes all logs for a workflow run. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsDeleteWorkflowRunLogs(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteWorkflowRunLogs($owner, $repo, $runId), $fetch);
    }
    /**
    * Gets a redirect URL to download an archive of log files for a workflow run. This link expires after 1 minute. Look for
    `Location:` in the response header to find the URL for the download. Anyone with read access to the repository can use
    this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have
    the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $runId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsDownloadWorkflowRunLogs(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDownloadWorkflowRunLogs($owner, $repo, $runId), $fetch);
    }
    /**
     * Re-runs your workflow run using its `id`. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsReRunWorkflow(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsReRunWorkflow($owner, $repo, $runId), $fetch);
    }
    /**
    * Delete a specific workflow run. Anyone with write access to the repository can use this endpoint. If the repository is
    private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:write` permission to use
    this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $runId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function actionsDeleteWorkflowRun(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsDeleteWorkflowRun($owner, $repo, $runId), $fetch);
    }
    /**
     * Gets a specific workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\WorkflowRun|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetWorkflowRun(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetWorkflowRun($owner, $repo, $runId), $fetch);
    }
    /**
    * **Warning:** The self-hosted runners API for organizations is currently in public beta and subject to change.
    
    
    Returns a token that you can pass to the `config` script to remove a self-hosted runner from an organization. The
    token expires after one hour. You must authenticate using an access token with the `admin:org` scope to use this
    endpoint.
    
    #### Example using remove token
    
    To remove your self-hosted runner from an organization, replace `TOKEN` with the remove token provided by this
    endpoint.
    
    ```
    ./config.sh remove --token TOKEN
    ```
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\AuthenticationToken|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateRemoveTokenForOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateRemoveTokenForOrg($org), $fetch);
    }
    /**
    * **Warning:** This GitHub Actions usage endpoint is currently in public beta and subject to change. For more information, see "[GitHub Actions API workflow usage](https://developer.github.com/changes/2020-05-15-actions-api-workflow-usage)."
    
    Gets the number of billable minutes and total run time for a specific workflow run. Billable minutes only apply to workflows in private repositories that use GitHub-hosted runners. Usage is listed for each GitHub-hosted runner operating system in milliseconds. Any job re-runs are also included in the usage. The usage does not include the multiplier for macOS and Windows runners and is not rounded up to the nearest whole minute. For more information, see "[Managing billing for GitHub Actions](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-actions)".
    
    Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $runId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\WorkflowRunUsage|\Psr\Http\Message\ResponseInterface
    */
    public function actionsGetWorkflowRunUsage(string $owner, string $repo, int $runId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetWorkflowRunUsage($owner, $repo, $runId), $fetch);
    }
    /**
     * Lists all repositories that have been selected when the `visibility` for repository access to a secret is set to `selected`. You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListSelectedReposForOrgSecret(string $org, string $secretName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListSelectedReposForOrgSecret($org, $secretName), $fetch);
    }
    /**
     * Replaces all repositories for an organization secret when the `visibility` for repository access is set to `selected`. The visibility is set when you [Create or update an organization secret](https://developer.github.com/v3/actions/secrets/#create-or-update-an-organization-secret). You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $secretName secret_name parameter
     * @param null|\Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function actionsSetSelectedReposForOrgSecret(string $org, string $secretName, ?\Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsSetSelectedReposForOrgSecret($org, $secretName, $requestBody), $fetch);
    }
    /**
     * Gets your public key, which you need to encrypt secrets. You need to encrypt a secret before you can create or update secrets. You must authenticate using an access token with the `admin:org` scope to use this endpoint. GitHub Apps must have the `secrets` organization permission to use this endpoint.
     *
     * @param string $org 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ActionsPublicKey|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetOrgPublicKey(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetOrgPublicKey($org), $fetch);
    }
    /**
     * Gets your public key, which you need to encrypt secrets. You need to encrypt a secret before you can create or update secrets. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `secrets` repository permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ActionsPublicKey|\Psr\Http\Message\ResponseInterface
     */
    public function actionsGetRepoPublicKey(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsGetRepoPublicKey($owner, $repo), $fetch);
    }
    /**
     * Lists artifacts for a workflow run. Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runId 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\ReposOwnerRepoActionsRunsRunIdArtifactsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function actionsListWorkflowRunArtifacts(string $owner, string $repo, int $runId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListWorkflowRunArtifacts($owner, $repo, $runId, $queryParameters), $fetch);
    }
    /**
    * Returns a token that you can pass to the `config` script. The token expires after one hour. You must authenticate
    using an access token with the `repo` scope to use this endpoint.
    
    #### Example using registration token
    
    Configure your self-hosted runner, replacing `TOKEN` with the registration token provided by this endpoint.
    
    ```
    ./config.sh --url https://github.com/octo-org/octo-repo-artifacts --token TOKEN
    ```
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\AuthenticationToken|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateRegistrationTokenForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateRegistrationTokenForRepo($owner, $repo), $fetch);
    }
    /**
    * Returns a token that you can pass to remove a self-hosted runner from a repository. The token expires after one hour.
    You must authenticate using an access token with the `repo` scope to use this endpoint.
    
    #### Example using remove token
    
    To remove your self-hosted runner from a repository, replace TOKEN with the remove token provided by this endpoint.
    
    ```
    ./config.sh remove --token TOKEN
    ```
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\AuthenticationToken|\Psr\Http\Message\ResponseInterface
    */
    public function actionsCreateRemoveTokenForRepo(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsCreateRemoveTokenForRepo($owner, $repo), $fetch);
    }
    /**
    * List all workflow runs for a workflow. You can also replace `:workflow_id` with `:workflow_file_name`. For example, you could use `main.yml`. You can use parameters to narrow the list of results. For more information about using parameters, see [Parameters](https://developer.github.com/v3/#parameters).
    
    Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $workflowId 
    * @param array $queryParameters {
    *     @var string $actor Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run.
    *     @var string $branch Returns workflow runs associated with a branch. Use the name of the branch of the `push`.
    *     @var string $event Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://help.github.com/en/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)."
    *     @var string $status Returns workflow runs associated with the check run `status` or `conclusion` you specify. For example, a conclusion can be `success` or a status can be `completed`. For more information, see the `status` and `conclusion` options available in "[Create a check run](https://developer.github.com/v3/checks/runs/#create-a-check-run)."
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReposOwnerRepoActionsWorkflowsWorkflowIdRunsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function actionsListWorkflowRuns(string $owner, string $repo, int $workflowId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListWorkflowRuns($owner, $repo, $workflowId, $queryParameters), $fetch);
    }
    /**
    * Lists all workflow runs for a repository. You can use parameters to narrow the list of results. For more information about using parameters, see [Parameters](https://developer.github.com/v3/#parameters).
    
    Anyone with read access to the repository can use this endpoint. If the repository is private you must use an access token with the `repo` scope. GitHub Apps must have the `actions:read` permission to use this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $actor Returns someone's workflow runs. Use the login for the user who created the `push` associated with the check suite or workflow run.
    *     @var string $branch Returns workflow runs associated with a branch. Use the name of the branch of the `push`.
    *     @var string $event Returns workflow run triggered by the event you specify. For example, `push`, `pull_request` or `issue`. For more information, see "[Events that trigger workflows](https://help.github.com/en/actions/automating-your-workflow-with-github-actions/events-that-trigger-workflows)."
    *     @var string $status Returns workflow runs associated with the check run `status` or `conclusion` you specify. For example, a conclusion can be `success` or a status can be `completed`. For more information, see the `status` and `conclusion` options available in "[Create a check run](https://developer.github.com/v3/checks/runs/#create-a-check-run)."
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ReposOwnerRepoActionsRunsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function actionsListWorkflowRunsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\ActionsListWorkflowRunsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * The "Remove team member" endpoint (described below) is deprecated.
    
    We recommend using the [Remove team membership for a user](https://developer.github.com/v3/teams/members/#remove-team-membership-for-a-user) endpoint instead. It allows you to remove both active and pending memberships.
    
    Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To remove a team member, the authenticated user must have 'admin' permissions to the team or be an owner of the org that the team is associated with. Removing a team member does not delete the user, it just removes them from the team.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    *
    * @param int $teamId 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsRemoveMemberLegacyNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsRemoveMemberLegacy(int $teamId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveMemberLegacy($teamId, $username), $fetch);
    }
    /**
    * The "Get team member" endpoint (described below) is deprecated.
    
    We recommend using the [Get team membership for a user](https://developer.github.com/v3/teams/members/#get-team-membership-for-a-user) endpoint instead. It allows you to get both active and pending memberships.
    
    To list members in a team, the team must be visible to the authenticated user.
    *
    * @param int $teamId 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsGetMemberLegacyNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsGetMemberLegacy(int $teamId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetMemberLegacy($teamId, $username), $fetch);
    }
    /**
    * The "Add team member" endpoint (described below) is deprecated.
    
    We recommend using the [Add or update team membership for a user](https://developer.github.com/v3/teams/members/#add-or-update-team-membership-for-a-user) endpoint instead. It allows you to invite new organization members to your teams.
    
    Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To add someone to a team, the authenticated user must be an organization owner or a team maintainer in the team they're changing. The person being added to the team must be a member of the team's organization.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    
    Note that you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    *
    * @param int $teamId 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsAddMemberLegacyNotFoundException
    * @throws \Github\Exception\TeamsAddMemberLegacyUnprocessableEntityException
    * @throws \Github\Exception\TeamsAddMemberLegacyForbiddenException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsAddMemberLegacy(int $teamId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddMemberLegacy($teamId, $username), $fetch);
    }
    /**
     * If the authenticated user is an organization owner or a team maintainer, they can remove any repositories from the team. To remove a repository from a team as an organization member, the authenticated user must have admin access to the repository and must be able to see the team. This does not delete the repository, it just removes it from the team.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/repos/{owner}/{repo}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param string $owner 
     * @param string $repo 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function teamsRemoveRepoInOrg(string $org, string $teamSlug, string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveRepoInOrg($org, $teamSlug, $owner, $repo), $fetch);
    }
    /**
    * Checks whether a team has `admin`, `push`, `maintain`, `triage`, or `pull` permission for a repository. Repositories inherited through a parent team will also be checked.
    
    You can also get information about the specified repository, including what permissions the team grants on it, by passing the following custom [media type](https://developer.github.com/v3/media/) via the `application/vnd.github.v3.repository+json` accept header.
    
    If a team doesn't have permission for the repository, you will receive a `404 Not Found` response status.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/repos/{owner}/{repo}`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsCheckPermissionsForRepoInOrgNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCheckPermissionsForRepoInOrg(string $org, string $teamSlug, string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCheckPermissionsForRepoInOrg($org, $teamSlug, $owner, $repo), $fetch);
    }
    /**
    * To add a repository to a team or update the team's permission on a repository, the authenticated user must have admin access to the repository, and must be able to see the team. The repository must be owned by the organization, or a direct fork of a repository owned by the organization. You will get a `422 Unprocessable Entity` status if you attempt to add a repository to a team that is not owned by the organization. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `PUT /organizations/{org_id}/team/{team_id}/repos/{owner}/{repo}`.
    
    For more information about the permission levels, see "[Repository permission levels for an organization](https://help.github.com/en/github/setting-up-and-managing-organizations-and-teams/repository-permission-levels-for-an-organization#permission-levels-for-repositories-owned-by-an-organization)".
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsAddOrUpdateRepoPermissionsInOrg(string $org, string $teamSlug, string $owner, string $repo, ?\Github\Model\OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddOrUpdateRepoPermissionsInOrg($org, $teamSlug, $owner, $repo, $requestBody), $fetch);
    }
    /**
    * Team members will include the members of child teams.
    
    To list members in a team, the team must be visible to the authenticated user.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param array $queryParameters {
    *     @var string $role Filters members returned by their role in the team. Can be one of:  
    \* `member` - normal members of the team.  
    \* `maintainer` - team maintainers.  
    \* `all` - all members of the team.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListMembersInOrg(string $org, string $teamSlug, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListMembersInOrg($org, $teamSlug, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Delete a discussion comment](https://developer.github.com/v3/teams/discussion_comments/#delete-a-discussion-comment) endpoint.
    
    Deletes a comment on a team discussion. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsDeleteDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsDeleteDiscussionCommentLegacy($teamId, $discussionNumber, $commentNumber), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Get a discussion comment](https://developer.github.com/v3/teams/discussion_comments/#get-a-discussion-comment) endpoint.
    
    Get a specific comment on a team discussion. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussionComment|\Psr\Http\Message\ResponseInterface
    */
    public function teamsGetDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetDiscussionCommentLegacy($teamId, $discussionNumber, $commentNumber), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Update a discussion comment](https://developer.github.com/v3/teams/discussion_comments/#update-a-discussion-comment) endpoint.
    
    Edits the body text of a discussion comment. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param int $commentNumber 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussionComment|\Psr\Http\Message\ResponseInterface
    */
    public function teamsUpdateDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, ?\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsCommentNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsUpdateDiscussionCommentLegacy($teamId, $discussionNumber, $commentNumber, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Remove a repository from a team](https://developer.github.com/v3/teams/#remove-a-repository-from-a-team) endpoint.
    
    If the authenticated user is an organization owner or a team maintainer, they can remove any repositories from the team. To remove a repository from a team as an organization member, the authenticated user must have admin access to the repository and must be able to see the team. NOTE: This does not delete the repository, it just removes it from the team.
    *
    * @param int $teamId 
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsRemoveRepoLegacy(int $teamId, string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveRepoLegacy($teamId, $owner, $repo), $fetch);
    }
    /**
    * **Note**: Repositories inherited through a parent team will also be checked.
    
    **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Check team permissions for a repository](https://developer.github.com/v3/teams/#check-team-permissions-for-a-repository) endpoint.
    
    You can also get information about the specified repository, including what permissions the team grants on it, by passing the following custom [media type](https://developer.github.com/v3/media/) via the `Accept` header:
    *
    * @param int $teamId 
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsCheckPermissionsForRepoLegacyNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCheckPermissionsForRepoLegacy(int $teamId, string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCheckPermissionsForRepoLegacy($teamId, $owner, $repo), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Add or update team repository permissions](https://developer.github.com/v3/teams/#add-or-update-team-repository-permissions) endpoint.
    
    To add a repository to a team or update the team's permission on a repository, the authenticated user must have admin access to the repository, and must be able to see the team. The repository must be owned by the organization, or a direct fork of a repository owned by the organization. You will get a `422 Unprocessable Entity` status if you attempt to add a repository to a team that is not owned by the organization.
    
    Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    *
    * @param int $teamId 
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\TeamsTeamIdReposOwnerRepoPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsAddOrUpdateRepoPermissionsLegacyForbiddenException
    * @throws \Github\Exception\TeamsAddOrUpdateRepoPermissionsLegacyUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsAddOrUpdateRepoPermissionsLegacy(int $teamId, string $owner, string $repo, ?\Github\Model\TeamsTeamIdReposOwnerRepoPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddOrUpdateRepoPermissionsLegacy($teamId, $owner, $repo, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Remove team membership for a user](https://developer.github.com/v3/teams/members/#remove-team-membership-for-a-user) endpoint.
    
    Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To remove a membership between a user and a team, the authenticated user must have 'admin' permissions to the team or be an owner of the organization that the team is associated with. Removing team membership does not delete the user, it just removes their membership from the team.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    *
    * @param int $teamId 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsRemoveMembershipForUserLegacyForbiddenException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsRemoveMembershipForUserLegacy(int $teamId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveMembershipForUserLegacy($teamId, $username), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Get team membership for a user](https://developer.github.com/v3/teams/members/#get-team-membership-for-a-user) endpoint.
    
    Team members will include the members of child teams.
    
    To get a user's membership with a team, the team must be visible to the authenticated user.
    
    **Note:** The `role` for organization owners returns as `maintainer`. For more information about `maintainer` roles, see [Create a team](https://developer.github.com/v3/teams/#create-a-team).
    *
    * @param int $teamId 
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsGetMembershipForUserLegacyNotFoundException
    *
    * @return null|\Github\Model\TeamMembership|\Psr\Http\Message\ResponseInterface
    */
    public function teamsGetMembershipForUserLegacy(int $teamId, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetMembershipForUserLegacy($teamId, $username), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Add or update team membership for a user](https://developer.github.com/v3/teams/members/#add-or-update-team-membership-for-a-user) endpoint.
    
    Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    If the user is already a member of the team's organization, this endpoint will add the user to the team. To add a membership between an organization member and a team, the authenticated user must be an organization owner or a team maintainer.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    
    If the user is unaffiliated with the team's organization, this endpoint will send an invitation to the user via email. This newly-created membership will be in the "pending" state until the user accepts the invitation, at which point the membership will transition to the "active" state and the user will be added as a member of the team. To add a membership between an unaffiliated user and a team, the authenticated user must be an organization owner.
    
    If the user is already a member of the team, this endpoint will update the role of the team member's role. To update the membership of a team member, the authenticated user must be an organization owner or a team maintainer.
    *
    * @param int $teamId 
    * @param string $username 
    * @param null|\Github\Model\TeamsTeamIdMembershipsUsernamePutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserLegacyForbiddenException
    * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserLegacyUnprocessableEntityException
    * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserLegacyNotFoundException
    *
    * @return null|\Github\Model\TeamMembership|\Psr\Http\Message\ResponseInterface
    */
    public function teamsAddOrUpdateMembershipForUserLegacy(int $teamId, string $username, ?\Github\Model\TeamsTeamIdMembershipsUsernamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddOrUpdateMembershipForUserLegacy($teamId, $username, $requestBody), $fetch);
    }
    /**
     * List all comments on a team discussion. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}/comments`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param array $queryParameters {
     *     @var string $direction One of `asc` (ascending) or `desc` (descending).
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamDiscussionComment[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListDiscussionCommentsInOrg(string $org, string $teamSlug, int $discussionNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListDiscussionCommentsInOrg($org, $teamSlug, $discussionNumber, $queryParameters), $fetch);
    }
    /**
    * Creates a new comment on a team discussion. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `POST /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}/comments`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param int $discussionNumber 
    * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussionComment|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreateDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreateDiscussionCommentInOrg($org, $teamSlug, $discussionNumber, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Delete a discussion`](https://developer.github.com/v3/teams/discussions/#delete-a-discussion) endpoint.
    
    Delete a discussion from a team's page. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsDeleteDiscussionLegacy(int $teamId, int $discussionNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsDeleteDiscussionLegacy($teamId, $discussionNumber), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Get a discussion](https://developer.github.com/v3/teams/discussions/#get-a-discussion) endpoint.
    
    Get a specific discussion on a team's page. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussion|\Psr\Http\Message\ResponseInterface
    */
    public function teamsGetDiscussionLegacy(int $teamId, int $discussionNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetDiscussionLegacy($teamId, $discussionNumber), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Update a discussion](https://developer.github.com/v3/teams/discussions/#update-a-discussion) endpoint.
    
    Edits the title and body text of a discussion post. Only the parameters you provide are updated. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussion|\Psr\Http\Message\ResponseInterface
    */
    public function teamsUpdateDiscussionLegacy(int $teamId, int $discussionNumber, ?\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsUpdateDiscussionLegacy($teamId, $discussionNumber, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Delete a team](https://developer.github.com/v3/teams/#delete-a-team) endpoint.
    
    To delete a team, the authenticated user must be an organization owner or team maintainer.
    
    If you are an organization owner, deleting a parent team will delete all of its child teams as well.
    *
    * @param int $teamId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsDeleteLegacyNotFoundException
    * @throws \Github\Exception\TeamsDeleteLegacyUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsDeleteLegacy(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsDeleteLegacy($teamId), $fetch);
    }
    /**
     * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the [Get a team by name](https://developer.github.com/v3/teams/#get-a-team-by-name) endpoint.
     *
     * @param int $teamId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsGetLegacyNotFoundException
     *
     * @return null|\Github\Model\TeamFull|\Psr\Http\Message\ResponseInterface
     */
    public function teamsGetLegacy(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetLegacy($teamId), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Update a team](https://developer.github.com/v3/teams/#update-a-team) endpoint.
    
    To edit a team, the authenticated user must either be an organization owner or a team maintainer.
    
    **Note:** With nested teams, the `privacy` for parent teams cannot be `secret`.
    *
    * @param int $teamId 
    * @param null|\Github\Model\TeamsTeamIdPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsUpdateLegacyNotFoundException
    * @throws \Github\Exception\TeamsUpdateLegacyUnprocessableEntityException
    * @throws \Github\Exception\TeamsUpdateLegacyForbiddenException
    *
    * @return null|\Github\Model\TeamFull|\Psr\Http\Message\ResponseInterface
    */
    public function teamsUpdateLegacy(int $teamId, ?\Github\Model\TeamsTeamIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsUpdateLegacy($teamId, $requestBody), $fetch);
    }
    /**
     * List all discussions on a team's page. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/discussions`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param array $queryParameters {
     *     @var string $direction One of `asc` (ascending) or `desc` (descending).
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamDiscussion[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListDiscussionsInOrg(string $org, string $teamSlug, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListDiscussionsInOrg($org, $teamSlug, $queryParameters), $fetch);
    }
    /**
    * Creates a new discussion post on a team's page. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `POST /organizations/{org_id}/team/{team_id}/discussions`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussion|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreateDiscussionInOrg(string $org, string $teamSlug, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreateDiscussionInOrg($org, $teamSlug, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List IdP groups for a team`](https://developer.github.com/v3/teams/team_sync/#list-idp-groups-for-a-team) endpoint.
    
    Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    List IdP groups connected to a team on GitHub.
    *
    * @param int $teamId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsListIdpGroupsForLegacyForbiddenException
    * @throws \Github\Exception\TeamsListIdpGroupsForLegacyNotFoundException
    *
    * @return null|\Github\Model\GroupMapping|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListIdpGroupsForLegacy(int $teamId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListIdpGroupsForLegacy($teamId), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Create or update IdP group connections`](https://developer.github.com/v3/teams/team_sync/#create-or-update-idp-group-connections) endpoint.
    
    Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Creates, updates, or removes a connection between a team and an IdP group. When adding groups to a team, you must include all new and existing groups to avoid replacing existing groups with the new ones. Specifying an empty `groups` array will remove all connections for a team.
    *
    * @param int $teamId 
    * @param null|\Github\Model\TeamsTeamIdTeamSyncGroupMappingsPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsCreateOrUpdateIdpGroupConnectionsLegacyUnprocessableEntityException
    * @throws \Github\Exception\TeamsCreateOrUpdateIdpGroupConnectionsLegacyForbiddenException
    *
    * @return null|\Github\Model\GroupMapping|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreateOrUpdateIdpGroupConnectionsLegacy(int $teamId, ?\Github\Model\TeamsTeamIdTeamSyncGroupMappingsPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreateOrUpdateIdpGroupConnectionsLegacy($teamId, $requestBody), $fetch);
    }
    /**
     * Delete a discussion from a team's page. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function teamsDeleteDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsDeleteDiscussionInOrg($org, $teamSlug, $discussionNumber), $fetch);
    }
    /**
     * Get a specific discussion on a team's page. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamDiscussion|\Psr\Http\Message\ResponseInterface
     */
    public function teamsGetDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetDiscussionInOrg($org, $teamSlug, $discussionNumber), $fetch);
    }
    /**
     * Edits the title and body text of a discussion post. Only the parameters you provide are updated. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `PATCH /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamDiscussion|\Psr\Http\Message\ResponseInterface
     */
    public function teamsUpdateDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsUpdateDiscussionInOrg($org, $teamSlug, $discussionNumber, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List pending team invitations`](https://developer.github.com/v3/teams/members/#list-pending-team-invitations) endpoint.
    
    The return hash contains a `role` field which refers to the Organization Invitation role and will be one of the following values: `direct_member`, `admin`, `billing_manager`, `hiring_manager`, or `reinstate`. If the invitee is not a GitHub member, the `login` field in the return hash will be `null`.
    *
    * @param int $teamId 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\OrganizationInvitation[]|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListPendingInvitationsLegacy(int $teamId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListPendingInvitationsLegacy($teamId, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [List discussion comments](https://developer.github.com/v3/teams/discussion_comments/#list-discussion-comments) endpoint.
    
    List all comments on a team discussion. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param array $queryParameters {
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussionComment[]|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListDiscussionCommentsLegacy(int $teamId, int $discussionNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListDiscussionCommentsLegacy($teamId, $discussionNumber, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Create a discussion comment](https://developer.github.com/v3/teams/discussion_comments/#create-a-discussion-comment) endpoint.
    
    Creates a new comment on a team discussion. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param int $teamId 
    * @param int $discussionNumber 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussionComment|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreateDiscussionCommentLegacy(int $teamId, int $discussionNumber, ?\Github\Model\TeamsTeamIdDiscussionsDiscussionNumberCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreateDiscussionCommentLegacy($teamId, $discussionNumber, $requestBody), $fetch);
    }
    /**
     * Lists the organization projects for a team.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/projects`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamProject[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListProjectsInOrg(string $org, string $teamSlug, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListProjectsInOrg($org, $teamSlug, $queryParameters), $fetch);
    }
    /**
     * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [List team repositories](https://developer.github.com/v3/teams/#list-team-repositories) endpoint.
     *
     * @param int $teamId 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsListReposLegacyNotFoundException
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListReposLegacy(int $teamId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListReposLegacy($teamId, $queryParameters), $fetch);
    }
    /**
     * Removes an organization project from a team. An organization owner or a team maintainer can remove any project from the team. To remove a project from a team as an organization member, the authenticated user must have `read` access to both the team and project, or `admin` access to the team or project. This endpoint removes the project from the team, but does not delete the project.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/projects/{project_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function teamsRemoveProjectInOrg(string $org, string $teamSlug, int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveProjectInOrg($org, $teamSlug, $projectId), $fetch);
    }
    /**
     * Checks whether a team has `read`, `write`, or `admin` permissions for an organization project. The response includes projects inherited from a parent team.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/projects/{project_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsCheckPermissionsForProjectInOrgNotFoundException
     *
     * @return null|\Github\Model\TeamProject|\Psr\Http\Message\ResponseInterface
     */
    public function teamsCheckPermissionsForProjectInOrg(string $org, string $teamSlug, int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCheckPermissionsForProjectInOrg($org, $teamSlug, $projectId), $fetch);
    }
    /**
     * Adds an organization project to a team. To add a project to a team or update the team's permission on a project, the authenticated user must have `admin` permissions for the project. The project and team must be part of the same organization.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `PUT /organizations/{org_id}/team/{team_id}/projects/{project_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $projectId 
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsInOrgForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function teamsAddOrUpdateProjectPermissionsInOrg(string $org, string $teamSlug, int $projectId, ?\Github\Model\OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddOrUpdateProjectPermissionsInOrg($org, $teamSlug, $projectId, $requestBody), $fetch);
    }
    /**
     * Deletes a comment on a team discussion. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}/comments/{comment_number}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param int $commentNumber 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function teamsDeleteDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsDeleteDiscussionCommentInOrg($org, $teamSlug, $discussionNumber, $commentNumber), $fetch);
    }
    /**
     * Get a specific comment on a team discussion. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}/comments/{comment_number}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param int $commentNumber 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamDiscussionComment|\Psr\Http\Message\ResponseInterface
     */
    public function teamsGetDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetDiscussionCommentInOrg($org, $teamSlug, $discussionNumber, $commentNumber), $fetch);
    }
    /**
     * Edits the body text of a discussion comment. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `PATCH /organizations/{org_id}/team/{team_id}/discussions/{discussion_number}/comments/{comment_number}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param int $discussionNumber 
     * @param int $commentNumber 
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamDiscussionComment|\Psr\Http\Message\ResponseInterface
     */
    public function teamsUpdateDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, ?\Github\Model\OrgsOrgTeamsTeamSlugDiscussionsDiscussionNumberCommentsCommentNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsUpdateDiscussionCommentInOrg($org, $teamSlug, $discussionNumber, $commentNumber, $requestBody), $fetch);
    }
    /**
     * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List child teams`](https://developer.github.com/v3/teams/#list-child-teams) endpoint.
     *
     * @param int $teamId 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsListChildLegacyNotFoundException
     * @throws \Github\Exception\TeamsListChildLegacyForbiddenException
     * @throws \Github\Exception\TeamsListChildLegacyUnprocessableEntityException
     *
     * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListChildLegacy(int $teamId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListChildLegacy($teamId, $queryParameters), $fetch);
    }
    /**
     * Lists a team's repositories visible to the authenticated user.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/repos`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\MinimalRepository[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListReposInOrg(string $org, string $teamSlug, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListReposInOrg($org, $teamSlug, $queryParameters), $fetch);
    }
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    List IdP groups available in an organization. You can limit your page results using the `per_page` parameter. GitHub generates a url-encoded `page` token using a cursor value for where the next page begins. For more information on cursor pagination, see "[Offset and Cursor Pagination explained](https://dev.to/jackmarchant/offset-and-cursor-pagination-explained-b89)."
    
    The `per_page` parameter provides pagination for a list of IdP groups the authenticated user can access in an organization. For example, if the user `octocat` wants to see two groups per page in `octo-org` via cURL, it would look like this:
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\GroupMapping|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListIdpGroupsForOrg(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListIdpGroupsForOrg($org, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Remove a project from a team](https://developer.github.com/v3/teams/#remove-a-project-from-a-team) endpoint.
    
    Removes an organization project from a team. An organization owner or a team maintainer can remove any project from the team. To remove a project from a team as an organization member, the authenticated user must have `read` access to both the team and project, or `admin` access to the team or project. **Note:** This endpoint removes the project from the team, but does not delete it.
    *
    * @param int $teamId 
    * @param int $projectId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsRemoveProjectLegacyNotFoundException
    * @throws \Github\Exception\TeamsRemoveProjectLegacyUnsupportedMediaTypeException
    * @throws \Github\Exception\TeamsRemoveProjectLegacyUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsRemoveProjectLegacy(int $teamId, int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveProjectLegacy($teamId, $projectId), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Check team permissions for a project](https://developer.github.com/v3/teams/#check-team-permissions-for-a-project) endpoint.
    
    Checks whether a team has `read`, `write`, or `admin` permissions for an organization project. The response includes projects inherited from a parent team.
    *
    * @param int $teamId 
    * @param int $projectId 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsCheckPermissionsForProjectLegacyNotFoundException
    * @throws \Github\Exception\TeamsCheckPermissionsForProjectLegacyUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\TeamProject|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCheckPermissionsForProjectLegacy(int $teamId, int $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCheckPermissionsForProjectLegacy($teamId, $projectId), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [Add or update team project permissions](https://developer.github.com/v3/teams/#add-or-update-team-project-permissions) endpoint.
    
    Adds an organization project to a team. To add a project to a team or update the team's permission on a project, the authenticated user must have `admin` permissions for the project. The project and team must be part of the same organization.
    *
    * @param int $teamId 
    * @param int $projectId 
    * @param null|\Github\Model\TeamsTeamIdProjectsProjectIdPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyForbiddenException
    * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyNotFoundException
    * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyUnsupportedMediaTypeException
    * @throws \Github\Exception\TeamsAddOrUpdateProjectPermissionsLegacyUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsAddOrUpdateProjectPermissionsLegacy(int $teamId, int $projectId, ?\Github\Model\TeamsTeamIdProjectsProjectIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddOrUpdateProjectPermissionsLegacy($teamId, $projectId, $requestBody), $fetch);
    }
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To remove a membership between a user and a team, the authenticated user must have 'admin' permissions to the team or be an owner of the organization that the team is associated with. Removing team membership does not delete the user, it just removes their membership from the team.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}/memberships/{username}`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsRemoveMembershipForUserInOrgForbiddenException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsRemoveMembershipForUserInOrg(string $org, string $teamSlug, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsRemoveMembershipForUserInOrg($org, $teamSlug, $username), $fetch);
    }
    /**
    * Team members will include the members of child teams.
    
    To get a user's membership with a team, the team must be visible to the authenticated user.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/memberships/{username}`.
    
    **Note:** The `role` for organization owners returns as `maintainer`. For more information about `maintainer` roles, see [Create a team](https://developer.github.com/v3/teams/#create-a-team).
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsGetMembershipForUserInOrgNotFoundException
    *
    * @return null|\Github\Model\TeamMembership|\Psr\Http\Message\ResponseInterface
    */
    public function teamsGetMembershipForUserInOrg(string $org, string $teamSlug, string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetMembershipForUserInOrg($org, $teamSlug, $username), $fetch);
    }
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Adds an organization member to a team. An authenticated organization owner or team maintainer can add organization members to a team.
    
    **Note:** When you have team synchronization set up for a team with your organization's identity provider (IdP), you will see an error if you attempt to use the API for making changes to the team's membership. If you have access to manage group membership in your IdP, you can manage GitHub team membership through your identity provider, which automatically adds and removes team members in an organization. For more information, see "[Synchronizing teams between your identity provider and GitHub](https://help.github.com/articles/synchronizing-teams-between-your-identity-provider-and-github/)."
    
    An organization owner can add someone who is not part of the team's organization to a team. When an organization owner adds someone to a team who is not an organization member, this endpoint will send an invitation to the person via email. This newly-created membership will be in the "pending" state until the person accepts the invitation, at which point the membership will transition to the "active" state and the user will be added as a member of the team.
    
    If the user is already a member of the team, this endpoint will update the role of the team member's role. To update the membership of a team member, the authenticated user must be an organization owner or a team maintainer.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `PUT /organizations/{org_id}/team/{team_id}/memberships/{username}`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $username 
    * @param null|\Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserInOrgForbiddenException
    * @throws \Github\Exception\TeamsAddOrUpdateMembershipForUserInOrgUnprocessableEntityException
    *
    * @return null|\Github\Model\TeamMembership|\Psr\Http\Message\ResponseInterface
    */
    public function teamsAddOrUpdateMembershipForUserInOrg(string $org, string $teamSlug, string $username, ?\Github\Model\OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsAddOrUpdateMembershipForUserInOrg($org, $teamSlug, $username, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List team projects`](https://developer.github.com/v3/teams/#list-team-projects) endpoint.
    
    Lists the organization projects for a team.
    *
    * @param int $teamId 
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsListProjectsLegacyNotFoundException
    * @throws \Github\Exception\TeamsListProjectsLegacyUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\TeamProject[]|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListProjectsLegacy(int $teamId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListProjectsLegacy($teamId, $queryParameters), $fetch);
    }
    /**
     * The return hash contains a `role` field which refers to the Organization Invitation role and will be one of the following values: `direct_member`, `admin`, `billing_manager`, `hiring_manager`, or `reinstate`. If the invitee is not a GitHub member, the `login` field in the return hash will be `null`.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/invitations`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\OrganizationInvitation[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListPendingInvitationsInOrg(string $org, string $teamSlug, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListPendingInvitationsInOrg($org, $teamSlug, $queryParameters), $fetch);
    }
    /**
    * To delete a team, the authenticated user must be an organization owner or team maintainer.
    
    If you are an organization owner, deleting a parent team will delete all of its child teams as well.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `DELETE /organizations/{org_id}/team/{team_id}`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function teamsDeleteInOrg(string $org, string $teamSlug, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsDeleteInOrg($org, $teamSlug), $fetch);
    }
    /**
     * Gets a team using the team's `slug`. GitHub generates the `slug` from the team `name`.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsGetByNameNotFoundException
     *
     * @return null|\Github\Model\TeamFull|\Psr\Http\Message\ResponseInterface
     */
    public function teamsGetByName(string $org, string $teamSlug, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsGetByName($org, $teamSlug), $fetch);
    }
    /**
     * To edit a team, the authenticated user must either be an organization owner or a team maintainer.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `PATCH /organizations/{org_id}/team/{team_id}`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param null|\Github\Model\OrgsOrgTeamsTeamSlugPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\TeamFull|\Psr\Http\Message\ResponseInterface
     */
    public function teamsUpdateInOrg(string $org, string $teamSlug, ?\Github\Model\OrgsOrgTeamsTeamSlugPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsUpdateInOrg($org, $teamSlug, $requestBody), $fetch);
    }
    /**
     * Lists all teams in an organization that are visible to the authenticated user.
     *
     * @param string $org 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsListForbiddenException
     *
     * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsList(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsList($org, $queryParameters), $fetch);
    }
    /**
    * To create a team, the authenticated user must be a member or owner of `{org}`. By default, organization members can create teams. Organization owners can limit team creation to organization owners. For more information, see "[Setting team creation permissions](https://help.github.com/en/articles/setting-team-creation-permissions-in-your-organization)."
    
    When you create a new team, you automatically become a team maintainer without explicitly adding yourself to the optional array of `maintainers`. For more information, see "[About teams](https://help.github.com/en/github/setting-up-and-managing-organizations-and-teams/about-teams)".
    *
    * @param string $org 
    * @param null|\Github\Model\OrgsOrgTeamsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsCreateUnprocessableEntityException
    * @throws \Github\Exception\TeamsCreateForbiddenException
    *
    * @return null|\Github\Model\TeamFull|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreate(string $org, ?\Github\Model\OrgsOrgTeamsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreate($org, $requestBody), $fetch);
    }
    /**
     * Lists the child teams of the team specified by `{team_slug}`.
     **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/teams`.
     *
     * @param string $org 
     * @param string $teamSlug team_slug parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Team[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListChildInOrg(string $org, string $teamSlug, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListChildInOrg($org, $teamSlug, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List discussions`](https://developer.github.com/v3/teams/discussions/#list-discussions) endpoint.
    
    List all discussions on a team's page. OAuth access tokens require the `read:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    *
    * @param int $teamId 
    * @param array $queryParameters {
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussion[]|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListDiscussionsLegacy(int $teamId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListDiscussionsLegacy($teamId, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`Create a discussion`](https://developer.github.com/v3/teams/discussions/#create-a-discussion) endpoint.
    
    Creates a new discussion post on a team's page. OAuth access tokens require the `write:discussion` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param int $teamId 
    * @param null|\Github\Model\TeamsTeamIdDiscussionsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\TeamDiscussion|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreateDiscussionLegacy(int $teamId, ?\Github\Model\TeamsTeamIdDiscussionsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreateDiscussionLegacy($teamId, $requestBody), $fetch);
    }
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    List IdP groups connected to a team on GitHub.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `GET /organizations/{org_id}/team/{team_id}/team-sync/group-mappings`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\GroupMapping|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListIdpGroupsInOrg(string $org, string $teamSlug, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListIdpGroupsInOrg($org, $teamSlug), $fetch);
    }
    /**
    * Team synchronization is available for organizations using GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Creates, updates, or removes a connection between a team and an IdP group. When adding groups to a team, you must include all new and existing groups to avoid replacing existing groups with the new ones. Specifying an empty `groups` array will remove all connections for a team.
    
    **Note:** You can also specify a team by `org_id` and `team_id` using the route `PATCH /organizations/{org_id}/team/{team_id}/team-sync/group-mappings`.
    *
    * @param string $org 
    * @param string $teamSlug team_slug parameter
    * @param null|\Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\GroupMapping|\Psr\Http\Message\ResponseInterface
    */
    public function teamsCreateOrUpdateIdpGroupConnectionsInOrg(string $org, string $teamSlug, ?\Github\Model\OrgsOrgTeamsTeamSlugTeamSyncGroupMappingsPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsCreateOrUpdateIdpGroupConnectionsInOrg($org, $teamSlug, $requestBody), $fetch);
    }
    /**
    * **Deprecation Notice:** This endpoint route is deprecated and will be removed from the Teams API. We recommend migrating your existing code to use the new [`List team members`](https://developer.github.com/v3/teams/members/#list-team-members) endpoint.
    
    Team members will include the members of child teams.
    *
    * @param int $teamId 
    * @param array $queryParameters {
    *     @var string $role Filters members returned by their role in the team. Can be one of:  
    \* `member` - normal members of the team.  
    \* `maintainer` - team maintainers.  
    \* `all` - all members of the team.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\TeamsListMembersLegacyNotFoundException
    *
    * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
    */
    public function teamsListMembersLegacy(int $teamId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListMembersLegacy($teamId, $queryParameters), $fetch);
    }
    /**
     * List all of the teams across all of the organizations to which the authenticated user belongs. This method requires `user`, `repo`, or `read:org` [scope](https://developer.github.com/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/) when authenticating via [OAuth](https://developer.github.com/apps/building-oauth-apps/).
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\TeamsListForAuthenticatedUserNotFoundException
     * @throws \Github\Exception\TeamsListForAuthenticatedUserForbiddenException
     *
     * @return null|\Github\Model\TeamFull[]|\Psr\Http\Message\ResponseInterface
     */
    public function teamsListForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\TeamsListForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * Deletes a review comment.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsDeleteReviewCommentNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pullsDeleteReviewComment(string $owner, string $repo, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsDeleteReviewComment($owner, $repo, $commentId), $fetch);
    }
    /**
    * **Note:** Multi-line comments on pull requests are currently in public beta and subject to change.
    
    Provides details for a review comment.
    
    **Multi-line comment summary**
    
    **Note:** New parameters and response fields are available for developers to preview. During the preview period, these response fields may change without advance notice. Please see the [blog post](https://developer.github.com/changes/2019-10-03-multi-line-comments) for full details.
    
    Use the `comfort-fade` preview header and the `line` parameter to show multi-line comment-supported fields in the response.
    
    If you use the `comfort-fade` preview header, your response will show:
    
    *   For multi-line comments, values for `start_line`, `original_start_line`, `start_side`, `line`, `original_line`, and `side`.
    *   For single-line comments, values for `line`, `original_line`, and `side` and a `null` value for `start_line`, `original_start_line`, and `start_side`.
    
    If you don't use the `comfort-fade` preview header, multi-line and single-line comments will appear the same way in the response with a single `position` attribute. Your response will show:
    
    *   For multi-line comments, the last line of the comment range for the `position` attribute.
    *   For single-line comments, the diff-positioned way of referencing comments for the `position` attribute. For more information, see `position` in the [input parameters](https://developer.github.com/v3/pulls/comments/#parameters-2) table.
    
    The `reactions` key will have the following payload where `url` can be used to construct the API location for [listing and creating](https://developer.github.com/v3/reactions) reactions.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsGetReviewCommentNotFoundException
    *
    * @return null|\Github\Model\PullRequestReviewComment|\Psr\Http\Message\ResponseInterface
    */
    public function pullsGetReviewComment(string $owner, string $repo, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsGetReviewComment($owner, $repo, $commentId), $fetch);
    }
    /**
    * **Note:** Multi-line comments on pull requests are currently in public beta and subject to change.
    
    Enables you to edit a review comment.
    
    **Multi-line comment summary**
    
    **Note:** New parameters and response fields are available for developers to preview. During the preview period, these response fields may change without advance notice. Please see the [blog post](https://developer.github.com/changes/2019-10-03-multi-line-comments) for full details.
    
    Use the `comfort-fade` preview header and the `line` parameter to show multi-line comment-supported fields in the response.
    
    If you use the `comfort-fade` preview header, your response will show:
    
    *   For multi-line comments, values for `start_line`, `original_start_line`, `start_side`, `line`, `original_line`, and `side`.
    *   For single-line comments, values for `line`, `original_line`, and `side` and a `null` value for `start_line`, `original_start_line`, and `start_side`.
    
    If you don't use the `comfort-fade` preview header, multi-line and single-line comments will appear the same way in the response with a single `position` attribute. Your response will show:
    
    *   For multi-line comments, the last line of the comment range for the `position` attribute.
    *   For single-line comments, the diff-positioned way of referencing comments for the `position` attribute. For more information, see `position` in the [input parameters](https://developer.github.com/v3/pulls/comments/#parameters-2) table.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $commentId comment_id parameter
    * @param null|\Github\Model\ReposOwnerRepoPullsCommentsCommentIdPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PullRequestReviewComment|\Psr\Http\Message\ResponseInterface
    */
    public function pullsUpdateReviewComment(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoPullsCommentsCommentIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsUpdateReviewComment($owner, $repo, $commentId, $requestBody), $fetch);
    }
    /**
    * **Note:** Multi-line comments on pull requests are currently in public beta and subject to change.
    
    Lists all review comments for a pull request. By default, review comments are in ascending order by ID.
    
    **Multi-line comment summary**
    
    **Note:** New parameters and response fields are available for developers to preview. During the preview period, these response fields may change without advance notice. Please see the [blog post](https://developer.github.com/changes/2019-10-03-multi-line-comments) for full details.
    
    Use the `comfort-fade` preview header and the `line` parameter to show multi-line comment-supported fields in the response.
    
    If you use the `comfort-fade` preview header, your response will show:
    
    *   For multi-line comments, values for `start_line`, `original_start_line`, `start_side`, `line`, `original_line`, and `side`.
    *   For single-line comments, values for `line`, `original_line`, and `side` and a `null` value for `start_line`, `original_start_line`, and `start_side`.
    
    If you don't use the `comfort-fade` preview header, multi-line and single-line comments will appear the same way in the response with a single `position` attribute. Your response will show:
    
    *   For multi-line comments, the last line of the comment range for the `position` attribute.
    *   For single-line comments, the diff-positioned way of referencing comments for the `position` attribute. For more information, see `position` in the [input parameters](https://developer.github.com/v3/pulls/comments/#parameters-2) table.
    
    The `reactions` key will have the following payload where `url` can be used to construct the API location for [listing and creating](https://developer.github.com/v3/reactions) reactions.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction Can be either `asc` or `desc`. Ignored without `sort` parameter.
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PullRequestReviewComment[]|\Psr\Http\Message\ResponseInterface
    */
    public function pullsListReviewComments(string $owner, string $repo, int $pullNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListReviewComments($owner, $repo, $pullNumber, $queryParameters), $fetch);
    }
    /**
    * **Note:** Multi-line comments on pull requests are currently in public beta and subject to change.
    
    Creates a review comment in the pull request diff. To add a regular comment to a pull request timeline, see "[Create an issue comment](https://developer.github.com/v3/issues/comments/#create-an-issue-comment)." We recommend creating a review comment using `line`, `side`, and optionally `start_line` and `start_side` if your comment applies to more than one line in the pull request diff.
    
    You can still create a review comment using the `position` parameter. When you use `position`, the `line`, `side`, `start_line`, and `start_side` parameters are not required. For more information, see [Multi-line comment summary](https://developer.github.com/v3/pulls/comments/#multi-line-comment-summary-3).
    
    **Note:** The position value equals the number of lines down from the first "@@" hunk header in the file you want to add a comment. The line just below the "@@" line is position 1, the next line is position 2, and so on. The position in the diff continues to increase through lines of whitespace and additional hunks until the beginning of a new file.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    
    **Multi-line comment summary**
    
    **Note:** New parameters and response fields are available for developers to preview. During the preview period, these response fields may change without advance notice. Please see the [blog post](https://developer.github.com/changes/2019-10-03-multi-line-comments) for full details.
    
    Use the `comfort-fade` preview header and the `line` parameter to show multi-line comment-supported fields in the response.
    
    If you use the `comfort-fade` preview header, your response will show:
    
    *   For multi-line comments, values for `start_line`, `original_start_line`, `start_side`, `line`, `original_line`, and `side`.
    *   For single-line comments, values for `line`, `original_line`, and `side` and a `null` value for `start_line`, `original_start_line`, and `start_side`.
    
    If you don't use the `comfort-fade` preview header, multi-line and single-line comments will appear the same way in the response with a single `position` attribute. Your response will show:
    
    *   For multi-line comments, the last line of the comment range for the `position` attribute.
    *   For single-line comments, the diff-positioned way of referencing comments for the `position` attribute. For more information, see `position` in the [input parameters](https://developer.github.com/v3/pulls/comments/#parameters-2) table.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsCreateReviewCommentUnprocessableEntityException
    * @throws \Github\Exception\PullsCreateReviewCommentForbiddenException
    *
    * @return null|\Github\Model\PullRequestReviewComment|\Psr\Http\Message\ResponseInterface
    */
    public function pullsCreateReviewComment(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsCreateReviewComment($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
    * **Note:** Multi-line comments on pull requests are currently in public beta and subject to change.
    
    Lists review comments for all pull requests in a repository. By default, review comments are in ascending order by ID.
    
    **Multi-line comment summary**
    
    **Note:** New parameters and response fields are available for developers to preview. During the preview period, these response fields may change without advance notice. Please see the [blog post](https://developer.github.com/changes/2019-10-03-multi-line-comments) for full details.
    
    Use the `comfort-fade` preview header and the `line` parameter to show multi-line comment-supported fields in the response.
    
    If you use the `comfort-fade` preview header, your response will show:
    
    *   For multi-line comments, values for `start_line`, `original_start_line`, `start_side`, `line`, `original_line`, and `side`.
    *   For single-line comments, values for `line`, `original_line`, and `side` and a `null` value for `start_line`, `original_start_line`, and `start_side`.
    
    If you don't use the `comfort-fade` preview header, multi-line and single-line comments will appear the same way in the response with a single `position` attribute. Your response will show:
    
    *   For multi-line comments, the last line of the comment range for the `position` attribute.
    *   For single-line comments, the diff-positioned way of referencing comments for the `position` attribute. For more information, see `position` in the [input parameters](https://developer.github.com/v3/pulls/comments/#parameters-2) table.
    
    The `reactions` key will have the following payload where `url` can be used to construct the API location for [listing and creating](https://developer.github.com/v3/reactions) reactions.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction Can be either `asc` or `desc`. Ignored without `sort` parameter.
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PullRequestReviewComment[]|\Psr\Http\Message\ResponseInterface
    */
    public function pullsListReviewCommentsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListReviewCommentsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsDeletePendingReviewUnprocessableEntityException
     * @throws \Github\Exception\PullsDeletePendingReviewNotFoundException
     *
     * @return null|\Github\Model\PullRequestReview|\Psr\Http\Message\ResponseInterface
     */
    public function pullsDeletePendingReview(string $owner, string $repo, int $pullNumber, int $reviewId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsDeletePendingReview($owner, $repo, $pullNumber, $reviewId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsGetReviewNotFoundException
     *
     * @return null|\Github\Model\PullRequestReview|\Psr\Http\Message\ResponseInterface
     */
    public function pullsGetReview(string $owner, string $repo, int $pullNumber, int $reviewId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsGetReview($owner, $repo, $pullNumber, $reviewId), $fetch);
    }
    /**
     * Update the review summary comment with new text.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsUpdateReviewUnprocessableEntityException
     *
     * @return null|\Github\Model\PullRequestReview|\Psr\Http\Message\ResponseInterface
     */
    public function pullsUpdateReview(string $owner, string $repo, int $pullNumber, int $reviewId, ?\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsUpdateReview($owner, $repo, $pullNumber, $reviewId, $requestBody), $fetch);
    }
    /**
     * **Note:** To dismiss a pull request review on a [protected branch](https://developer.github.com/v3/repos/branches/), you must be a repository administrator or be included in the list of people or teams who can dismiss pull request reviews.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsDismissReviewNotFoundException
     * @throws \Github\Exception\PullsDismissReviewUnprocessableEntityException
     *
     * @return null|\Github\Model\PullRequestReview|\Psr\Http\Message\ResponseInterface
     */
    public function pullsDismissReview(string $owner, string $repo, int $pullNumber, int $reviewId, ?\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdDismissalsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsDismissReview($owner, $repo, $pullNumber, $reviewId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsRemoveRequestedReviewersUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pullsRemoveRequestedReviewers(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsRemoveRequestedReviewers($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\PullRequestReviewRequest|\Psr\Http\Message\ResponseInterface
     */
    public function pullsListRequestedReviewers(string $owner, string $repo, int $pullNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListRequestedReviewers($owner, $repo, $pullNumber, $queryParameters), $fetch);
    }
    /**
     * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsRequestReviewersUnprocessableEntityException
     * @throws \Github\Exception\PullsRequestReviewersForbiddenException
     *
     * @return null|\Github\Model\PullRequestSimple|\Psr\Http\Message\ResponseInterface
     */
    public function pullsRequestReviewers(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsRequestReviewers($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
    * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    Lists details of a pull request by providing its number.
    
    When you get, [create](https://developer.github.com/v3/pulls/#create-a-pull-request), or [edit](https://developer.github.com/v3/pulls/#update-a-pull-request) a pull request, GitHub creates a merge commit to test whether the pull request can be automatically merged into the base branch. This test commit is not added to the base branch or the head branch. You can review the status of the test commit using the `mergeable` key. For more information, see "[Checking mergeability of pull requests](https://developer.github.com/v3/git/#checking-mergeability-of-pull-requests)".
    
    The value of the `mergeable` attribute can be `true`, `false`, or `null`. If the value is `null`, then GitHub has started a background job to compute the mergeability. After giving the job time to complete, resubmit the request. When the job finishes, you will see a non-`null` value for the `mergeable` attribute in the response. If `mergeable` is `true`, then `merge_commit_sha` will be the SHA of the _test_ merge commit.
    
    The value of the `merge_commit_sha` attribute changes depending on the state of the pull request. Before merging a pull request, the `merge_commit_sha` attribute holds the SHA of the _test_ merge commit. After merging a pull request, the `merge_commit_sha` attribute changes depending on how you merged the pull request:
    
    *   If merged as a [merge commit](https://help.github.com/articles/about-merge-methods-on-github/), `merge_commit_sha` represents the SHA of the merge commit.
    *   If merged via a [squash](https://help.github.com/articles/about-merge-methods-on-github/#squashing-your-merge-commits), `merge_commit_sha` represents the SHA of the squashed commit on the base branch.
    *   If [rebased](https://help.github.com/articles/about-merge-methods-on-github/#rebasing-and-merging-your-commits), `merge_commit_sha` represents the commit that the base branch was updated to.
    
    Pass the appropriate [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests) to fetch diff and patch formats.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsGetInternalServerErrorException
    * @throws \Github\Exception\PullsGetNotFoundException
    *
    * @return null|\Github\Model\PullRequest|\Psr\Http\Message\ResponseInterface
    */
    public function pullsGet(string $owner, string $repo, int $pullNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsGet($owner, $repo, $pullNumber), $fetch);
    }
    /**
    * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To open or update a pull request in a public repository, you must have write access to the head or the source branch. For organization-owned repositories, you must be a member of the organization that owns the repository to open or update a pull request.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberPatchBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsUpdateUnprocessableEntityException
    * @throws \Github\Exception\PullsUpdateForbiddenException
    *
    * @return null|\Github\Model\PullRequest|\Psr\Http\Message\ResponseInterface
    */
    public function pullsUpdate(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsUpdate($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
     * The list of reviews returns in chronological order.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\PullRequestReview[]|\Psr\Http\Message\ResponseInterface
     */
    public function pullsListReviews(string $owner, string $repo, int $pullNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListReviews($owner, $repo, $pullNumber, $queryParameters), $fetch);
    }
    /**
    * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    
    Pull request reviews created in the `PENDING` state do not include the `submitted_at` property in the response.
    
    **Note:** To comment on a specific line in a file, you need to first determine the _position_ of that line in the diff. The GitHub REST API v3 offers the `application/vnd.github.v3.diff` [media type](https://developer.github.com/v3/media/#commits-commit-comparison-and-pull-requests). To see a pull request diff, add this media type to the `Accept` header of a call to the [single pull request](https://developer.github.com/v3/pulls/#get-a-pull-request) endpoint.
    
    The `position` value equals the number of lines down from the first "@@" hunk header in the file you want to add a comment. The line just below the "@@" line is position 1, the next line is position 2, and so on. The position in the diff continues to increase through lines of whitespace and additional hunks until the beginning of a new file.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsCreateReviewUnprocessableEntityException
    * @throws \Github\Exception\PullsCreateReviewForbiddenException
    *
    * @return null|\Github\Model\PullRequestReview|\Psr\Http\Message\ResponseInterface
    */
    public function pullsCreateReview(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberReviewsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsCreateReview($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsCheckIfMergedNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pullsCheckIfMerged(string $owner, string $repo, int $pullNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsCheckIfMerged($owner, $repo, $pullNumber), $fetch);
    }
    /**
     * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsMergeMethodNotAllowedException
     * @throws \Github\Exception\PullsMergeConflictException
     * @throws \Github\Exception\PullsMergeUnprocessableEntityException
     * @throws \Github\Exception\PullsMergeForbiddenException
     * @throws \Github\Exception\PullsMergeNotFoundException
     *
     * @return null|\Github\Model\PullRequestMergeResult|\Psr\Http\Message\ResponseInterface
     */
    public function pullsMerge(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberMergePutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsMerge($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
     * Updates the pull request branch with the latest upstream changes by merging HEAD from the base branch into the pull request branch.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsUpdateBranchUnprocessableEntityException
     * @throws \Github\Exception\PullsUpdateBranchForbiddenException
     * @throws \Github\Exception\PullsUpdateBranchUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutResponse202|\Psr\Http\Message\ResponseInterface
     */
    public function pullsUpdateBranch(string $owner, string $repo, int $pullNumber, ?\Github\Model\ReposOwnerRepoPullsPullNumberUpdateBranchPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsUpdateBranch($owner, $repo, $pullNumber, $requestBody), $fetch);
    }
    /**
     * **Note:** Responses include a maximum of 3000 files. The paginated response returns 30 files per page by default.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsListFilesUnprocessableEntityException
     * @throws \Github\Exception\PullsListFilesInternalServerErrorException
     *
     * @return null|\Github\Model\DiffEntry[]|\Psr\Http\Message\ResponseInterface
     */
    public function pullsListFiles(string $owner, string $repo, int $pullNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListFiles($owner, $repo, $pullNumber, $queryParameters), $fetch);
    }
    /**
     * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $state Either `open`, `closed`, or `all` to filter by state.
     *     @var string $head Filter pulls by head user or head organization and branch name in the format of `user:ref-name` or `organization:ref-name`. For example: `github:new-script-format` or `octocat:test-branch`.
     *     @var string $base Filter pulls by base branch name. Example: `gh-pages`.
     *     @var string $sort What to sort results by. Can be either `created`, `updated`, `popularity` (comment count) or `long-running` (age, filtering by pulls updated in the last month).
     *     @var string $direction The direction of the sort. Can be either `asc` or `desc`. Default: `desc` when sort is `created` or sort is not specified, otherwise `asc`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsListUnprocessableEntityException
     *
     * @return null|\Github\Model\PullRequestSimple[]|\Psr\Http\Message\ResponseInterface
     */
    public function pullsList(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsList($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Draft pull requests are available in public repositories with GitHub Free and GitHub Free for organizations, GitHub Pro, and legacy per-repository billing plans, and in public and private repositories with GitHub Team and GitHub Enterprise Cloud. For more information, see [GitHub's products](https://help.github.com/github/getting-started-with-github/githubs-products) in the GitHub Help documentation.
    
    To open or update a pull request in a public repository, you must have write access to the head or the source branch. For organization-owned repositories, you must be a member of the organization that owns the repository to open or update a pull request.
    
    You can create a new pull request.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoPullsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsCreateForbiddenException
    * @throws \Github\Exception\PullsCreateUnprocessableEntityException
    *
    * @return null|\Github\Model\PullRequest|\Psr\Http\Message\ResponseInterface
    */
    public function pullsCreate(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoPullsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsCreate($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Creates a reply to a review comment for a pull request. For the `comment_id`, provide the ID of the review comment you are replying to. This must be the ID of a _top-level review comment_, not a reply to that comment. Replies to replies are not supported.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $pullNumber 
    * @param int $commentId comment_id parameter
    * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\PullsCreateReplyForReviewCommentNotFoundException
    *
    * @return null|\Github\Model\PullRequestReviewComment|\Psr\Http\Message\ResponseInterface
    */
    public function pullsCreateReplyForReviewComment(string $owner, string $repo, int $pullNumber, int $commentId, ?\Github\Model\ReposOwnerRepoPullsPullNumberCommentsCommentIdRepliesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsCreateReplyForReviewComment($owner, $repo, $pullNumber, $commentId, $requestBody), $fetch);
    }
    /**
     * Lists a maximum of 250 commits for a pull request. To receive a complete commit list for pull requests with more than 250 commits, use the [List commits](https://developer.github.com/v3/repos/commits/#list-commits) endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\SimpleCommit[]|\Psr\Http\Message\ResponseInterface
     */
    public function pullsListCommits(string $owner, string $repo, int $pullNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListCommits($owner, $repo, $pullNumber, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param null|\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdEventsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsSubmitReviewNotFoundException
     * @throws \Github\Exception\PullsSubmitReviewUnprocessableEntityException
     * @throws \Github\Exception\PullsSubmitReviewForbiddenException
     *
     * @return null|\Github\Model\PullRequestReview|\Psr\Http\Message\ResponseInterface
     */
    public function pullsSubmitReview(string $owner, string $repo, int $pullNumber, int $reviewId, ?\Github\Model\ReposOwnerRepoPullsPullNumberReviewsReviewIdEventsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsSubmitReview($owner, $repo, $pullNumber, $reviewId, $requestBody), $fetch);
    }
    /**
     * List comments for a specific pull request review.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $pullNumber 
     * @param int $reviewId review_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\PullsListCommentsForReviewNotFoundException
     *
     * @return null|\Github\Model\ReviewComment[]|\Psr\Http\Message\ResponseInterface
     */
    public function pullsListCommentsForReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\PullsListCommentsForReview($owner, $repo, $pullNumber, $reviewId, $queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function emojisGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\EmojisGet(), $fetch);
    }
    /**
     * Lists all open code scanning alerts for the default branch (usually `master`) and protected branches in a repository. You must use an access token with the `security_events` scope to use this endpoint. GitHub Apps must have the `security_events` read permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $state Set to `closed` to list only closed code scanning alerts.
     *     @var string $ref Returns a list of code scanning alerts for a specific brach reference. The `ref` must be formatted as `heads/<branch name>`.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\CodeScanningListAlertsForRepoNotFoundException
     * @throws \Github\Exception\CodeScanningListAlertsForRepoServiceUnavailableException
     *
     * @return null|\Github\Model\CodeScanningAlert[]|\Psr\Http\Message\ResponseInterface
     */
    public function codeScanningListAlertsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\CodeScanningListAlertsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Gets a single code scanning alert. You must use an access token with the `security_events` scope to use this endpoint. GitHub Apps must have the `security_events` read permission to use this endpoint.
    
    The security `alert_id` is found at the end of the security alert's URL. For example, the security alert ID for `https://github.com/Octo-org/octo-repo/security/code-scanning/88` is `88`.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $alertId alert_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\CodeScanningGetAlertNotFoundException
    * @throws \Github\Exception\CodeScanningGetAlertServiceUnavailableException
    *
    * @return null|\Github\Model\CodeScanningAlert|\Psr\Http\Message\ResponseInterface
    */
    public function codeScanningGetAlert(string $owner, string $repo, int $alertId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\CodeScanningGetAlert($owner, $repo, $alertId), $fetch);
    }
    /**
    * List issues in an organization assigned to the authenticated user.
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param string $org 
    * @param array $queryParameters {
    *     @var string $filter Indicates which sorts of issues to return. Can be one of:  
    \* `assigned`: Issues assigned to you  
    \* `created`: Issues created by you  
    \* `mentioned`: Issues mentioning you  
    \* `subscribed`: Issues you're subscribed to updates for  
    \* `all`: All issues the authenticated user can see, regardless of participation or creation
    *     @var string $state Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.
    *     @var string $labels A list of comma separated label names. Example: `bug,ui,@high`
    *     @var string $sort What to sort results by. Can be either `created`, `updated`, `comments`.
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesListForOrgNotFoundException
    *
    * @return null|\Github\Model\Issue[]|\Psr\Http\Message\ResponseInterface
    */
    public function issuesListForOrg(string $org, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListForOrg($org, $queryParameters), $fetch);
    }
    /**
     * Users with push access can unlock an issue's conversation.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesUnlockForbiddenException
     * @throws \Github\Exception\IssuesUnlockNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function issuesUnlock(string $owner, string $repo, int $issueNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesUnlock($owner, $repo, $issueNumber), $fetch);
    }
    /**
    * Users with push access can lock an issue or pull request's conversation.
    
    Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $issueNumber issue_number parameter
    * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberLockPutBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesLockForbiddenException
    * @throws \Github\Exception\IssuesLockGoneException
    * @throws \Github\Exception\IssuesLockNotFoundException
    * @throws \Github\Exception\IssuesLockUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function issuesLock(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberLockPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesLock($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $milestoneNumber milestone_number parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesDeleteMilestoneNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function issuesDeleteMilestone(string $owner, string $repo, int $milestoneNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesDeleteMilestone($owner, $repo, $milestoneNumber), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $milestoneNumber milestone_number parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesGetMilestoneNotFoundException
     *
     * @return null|\Github\Model\Milestone|\Psr\Http\Message\ResponseInterface
     */
    public function issuesGetMilestone(string $owner, string $repo, int $milestoneNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesGetMilestone($owner, $repo, $milestoneNumber), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $milestoneNumber milestone_number parameter
     * @param null|\Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Milestone|\Psr\Http\Message\ResponseInterface
     */
    public function issuesUpdateMilestone(string $owner, string $repo, int $milestoneNumber, ?\Github\Model\ReposOwnerRepoMilestonesMilestoneNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesUpdateMilestone($owner, $repo, $milestoneNumber, $requestBody), $fetch);
    }
    /**
     * Removes the specified label from the issue, and returns the remaining labels on the issue. This endpoint returns a `404 Not Found` status if the label does not exist.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param string $name name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesRemoveLabelNotFoundException
     * @throws \Github\Exception\IssuesRemoveLabelGoneException
     *
     * @return null|\Github\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesRemoveLabel(string $owner, string $repo, int $issueNumber, string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesRemoveLabel($owner, $repo, $issueNumber, $name), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $state The state of the milestone. Either `open`, `closed`, or `all`.
     *     @var string $sort What to sort results by. Either `due_on` or `completeness`.
     *     @var string $direction The direction of the sort. Either `asc` or `desc`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListMilestonesNotFoundException
     *
     * @return null|\Github\Model\Milestone[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListMilestones(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListMilestones($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoMilestonesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesCreateMilestoneNotFoundException
     * @throws \Github\Exception\IssuesCreateMilestoneUnprocessableEntityException
     *
     * @return null|\Github\Model\Milestone|\Psr\Http\Message\ResponseInterface
     */
    public function issuesCreateMilestone(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoMilestonesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesCreateMilestone($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function issuesDeleteComment(string $owner, string $repo, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesDeleteComment($owner, $repo, $commentId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesGetCommentNotFoundException
     *
     * @return null|\Github\Model\IssueComment|\Psr\Http\Message\ResponseInterface
     */
    public function issuesGetComment(string $owner, string $repo, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesGetComment($owner, $repo, $commentId), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesCommentsCommentIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesUpdateCommentUnprocessableEntityException
     *
     * @return null|\Github\Model\IssueComment|\Psr\Http\Message\ResponseInterface
     */
    public function issuesUpdateComment(string $owner, string $repo, int $commentId, ?\Github\Model\ReposOwnerRepoIssuesCommentsCommentIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesUpdateComment($owner, $repo, $commentId, $requestBody), $fetch);
    }
    /**
    * The API returns a [`301 Moved Permanently` status](https://developer.github.com/v3/#http-redirects) if the issue was
    [transferred](https://help.github.com/articles/transferring-an-issue-to-another-repository/) to another repository. If
    the issue was transferred to or deleted from a repository where the authenticated user lacks read access, the API
    returns a `404 Not Found` status. If the issue was deleted from a repository where the authenticated user has read
    access, the API returns a `410 Gone` status. To receive webhook events for transferred and deleted issues, subscribe
    to the [`issues`](https://developer.github.com/webhooks/event-payloads/#issues) webhook.
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param int $issueNumber issue_number parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesGetNotFoundException
    * @throws \Github\Exception\IssuesGetGoneException
    *
    * @return null|\Github\Model\Issue|\Psr\Http\Message\ResponseInterface
    */
    public function issuesGet(string $owner, string $repo, int $issueNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesGet($owner, $repo, $issueNumber), $fetch);
    }
    /**
     * Issue owners and users with push access can edit an issue.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesUpdateUnprocessableEntityException
     * @throws \Github\Exception\IssuesUpdateServiceUnavailableException
     * @throws \Github\Exception\IssuesUpdateForbiddenException
     * @throws \Github\Exception\IssuesUpdateNotFoundException
     * @throws \Github\Exception\IssuesUpdateGoneException
     *
     * @return null|\Github\Model\Issue|\Psr\Http\Message\ResponseInterface
     */
    public function issuesUpdate(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesUpdate($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $name name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function issuesDeleteLabel(string $owner, string $repo, string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesDeleteLabel($owner, $repo, $name), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $name name parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesGetLabelNotFoundException
     *
     * @return null|\Github\Model\Label|\Psr\Http\Message\ResponseInterface
     */
    public function issuesGetLabel(string $owner, string $repo, string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesGetLabel($owner, $repo, $name), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $name name parameter
     * @param null|\Github\Model\ReposOwnerRepoLabelsNamePatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Label|\Psr\Http\Message\ResponseInterface
     */
    public function issuesUpdateLabel(string $owner, string $repo, string $name, ?\Github\Model\ReposOwnerRepoLabelsNamePatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesUpdateLabel($owner, $repo, $name, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListLabelsForRepoNotFoundException
     *
     * @return null|\Github\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListLabelsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListLabelsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoLabelsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesCreateLabelUnprocessableEntityException
     * @throws \Github\Exception\IssuesCreateLabelNotFoundException
     *
     * @return null|\Github\Model\Label|\Psr\Http\Message\ResponseInterface
     */
    public function issuesCreateLabel(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoLabelsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesCreateLabel($owner, $repo, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListEventsForTimelineNotFoundException
     * @throws \Github\Exception\IssuesListEventsForTimelineGoneException
     * @throws \Github\Exception\IssuesListEventsForTimelineUnsupportedMediaTypeException
     *
     * @return null|\Github\Model\IssueEventForIssue[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListEventsForTimeline(string $owner, string $repo, int $issueNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListEventsForTimeline($owner, $repo, $issueNumber, $queryParameters), $fetch);
    }
    /**
     * Lists the [available assignees](https://help.github.com/articles/assigning-issues-and-pull-requests-to-other-github-users/) for issues in a repository.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListAssigneesNotFoundException
     *
     * @return null|\Github\Model\SimpleUser[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListAssignees(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListAssignees($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * List issues assigned to the authenticated user across all visible repositories including owned repositories, member
    repositories, and organization repositories. You can use the `filter` query parameter to fetch issues that are not
    necessarily assigned to you. See the [Parameters table](https://developer.github.com/v3/issues/#parameters) for more
    information.
    
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param array $queryParameters {
    *     @var string $filter Indicates which sorts of issues to return. Can be one of:  
    \* `assigned`: Issues assigned to you  
    \* `created`: Issues created by you  
    \* `mentioned`: Issues mentioning you  
    \* `subscribed`: Issues you're subscribed to updates for  
    \* `all`: All issues the authenticated user can see, regardless of participation or creation
    *     @var string $state Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.
    *     @var string $labels A list of comma separated label names. Example: `bug,ui,@high`
    *     @var string $sort What to sort results by. Can be either `created`, `updated`, `comments`.
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var bool $collab 
    *     @var bool $orgs 
    *     @var bool $owned 
    *     @var bool $pulls 
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesListUnprocessableEntityException
    * @throws \Github\Exception\IssuesListNotFoundException
    *
    * @return null|\Github\Model\Issue[]|\Psr\Http\Message\ResponseInterface
    */
    public function issuesList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesList($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesRemoveAllLabelsGoneException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function issuesRemoveAllLabels(string $owner, string $repo, int $issueNumber, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesRemoveAllLabels($owner, $repo, $issueNumber), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListLabelsOnIssueGoneException
     *
     * @return null|\Github\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListLabelsOnIssue(string $owner, string $repo, int $issueNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListLabelsOnIssue($owner, $repo, $issueNumber, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesAddLabelsGoneException
     * @throws \Github\Exception\IssuesAddLabelsUnprocessableEntityException
     *
     * @return null|\Github\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesAddLabels(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesAddLabels($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * Removes any previous labels and sets the new labels for an issue.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPutBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesSetLabelsGoneException
     * @throws \Github\Exception\IssuesSetLabelsUnprocessableEntityException
     *
     * @return null|\Github\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesSetLabels(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberLabelsPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesSetLabels($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListEventsGoneException
     *
     * @return null|\Github\Model\IssueEventForIssue[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListEvents(string $owner, string $repo, int $issueNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListEvents($owner, $repo, $issueNumber, $queryParameters), $fetch);
    }
    /**
    * List issues in a repository.
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param array $queryParameters {
    *     @var string $milestone If an `integer` is passed, it should refer to a milestone by its `number` field. If the string `*` is passed, issues with any milestone are accepted. If the string `none` is passed, issues without milestones are returned.
    *     @var string $state Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.
    *     @var string $assignee Can be the name of a user. Pass in `none` for issues with no assigned user, and `*` for issues assigned to any user.
    *     @var string $creator The user that created the issue.
    *     @var string $mentioned A user that's mentioned in the issue.
    *     @var string $labels A list of comma separated label names. Example: `bug,ui,@high`
    *     @var string $sort What to sort results by. Can be either `created`, `updated`, `comments`.
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesListForRepoUnprocessableEntityException
    * @throws \Github\Exception\IssuesListForRepoNotFoundException
    *
    * @return null|\Github\Model\IssueSimple[]|\Psr\Http\Message\ResponseInterface
    */
    public function issuesListForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Any user with pull access to a repository can create an issue. If [issues are disabled in the repository](https://help.github.com/articles/disabling-issues/), the API returns a `410 Gone` status.
    
    This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoIssuesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesCreateForbiddenException
    * @throws \Github\Exception\IssuesCreateUnprocessableEntityException
    * @throws \Github\Exception\IssuesCreateServiceUnavailableException
    * @throws \Github\Exception\IssuesCreateNotFoundException
    * @throws \Github\Exception\IssuesCreateGoneException
    *
    * @return null|\Github\Model\Issue|\Psr\Http\Message\ResponseInterface
    */
    public function issuesCreate(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoIssuesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesCreate($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Issue Comments are ordered by ascending ID.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param array $queryParameters {
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListCommentsNotFoundException
     * @throws \Github\Exception\IssuesListCommentsGoneException
     *
     * @return null|\Github\Model\IssueComment[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListComments(string $owner, string $repo, int $issueNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListComments($owner, $repo, $issueNumber, $queryParameters), $fetch);
    }
    /**
     * This endpoint triggers [notifications](https://help.github.com/articles/about-notifications/). Creating content too quickly using this endpoint may result in abuse rate limiting. See "[Abuse rate limits](https://developer.github.com/v3/#abuse-rate-limits)" and "[Dealing with abuse rate limits](https://developer.github.com/v3/guides/best-practices-for-integrators/#dealing-with-abuse-rate-limits)" for details.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesCreateCommentForbiddenException
     * @throws \Github\Exception\IssuesCreateCommentGoneException
     * @throws \Github\Exception\IssuesCreateCommentUnprocessableEntityException
     * @throws \Github\Exception\IssuesCreateCommentNotFoundException
     *
     * @return null|\Github\Model\IssueComment|\Psr\Http\Message\ResponseInterface
     */
    public function issuesCreateComment(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesCreateComment($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * Removes one or more assignees from an issue.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\IssueSimple|\Psr\Http\Message\ResponseInterface
     */
    public function issuesRemoveAssignees(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesRemoveAssignees($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * Adds up to 10 assignees to an issue. Users already assigned to an issue are not replaced.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $issueNumber issue_number parameter
     * @param null|\Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\IssueSimple|\Psr\Http\Message\ResponseInterface
     */
    public function issuesAddAssignees(string $owner, string $repo, int $issueNumber, ?\Github\Model\ReposOwnerRepoIssuesIssueNumberAssigneesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesAddAssignees($owner, $repo, $issueNumber, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListEventsForRepoUnprocessableEntityException
     *
     * @return null|\Github\Model\IssueEvent[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListEventsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListEventsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
    * Checks if a user has permission to be assigned to an issue in this repository.
    
    If the `assignee` can be assigned to issues in the repository, a `204` header with no content is returned.
    
    Otherwise a `404` status code is returned.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $assignee assignee parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesCheckUserCanBeAssignedNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function issuesCheckUserCanBeAssigned(string $owner, string $repo, string $assignee, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesCheckUserCanBeAssigned($owner, $repo, $assignee), $fetch);
    }
    /**
    * List issues across owned and member repositories assigned to the authenticated user.
    
    **Note**: GitHub's REST API v3 considers every pull request an issue, but not every issue is a pull request. For this
    reason, "Issues" endpoints may return both issues and pull requests in the response. You can identify pull requests by
    the `pull_request` key. Be aware that the `id` of a pull request returned from "Issues" endpoints will be an _issue id_. To find out the pull
    request id, use the "[List pull requests](https://developer.github.com/v3/pulls/#list-pull-requests)" endpoint.
    *
    * @param array $queryParameters {
    *     @var string $filter Indicates which sorts of issues to return. Can be one of:  
    \* `assigned`: Issues assigned to you  
    \* `created`: Issues created by you  
    \* `mentioned`: Issues mentioning you  
    \* `subscribed`: Issues you're subscribed to updates for  
    \* `all`: All issues the authenticated user can see, regardless of participation or creation
    *     @var string $state Indicates the state of the issues to return. Can be either `open`, `closed`, or `all`.
    *     @var string $labels A list of comma separated label names. Example: `bug,ui,@high`
    *     @var string $sort What to sort results by. Can be either `created`, `updated`, `comments`.
    *     @var string $direction One of `asc` (ascending) or `desc` (descending).
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\IssuesListForAuthenticatedUserNotFoundException
    *
    * @return null|\Github\Model\Issue[]|\Psr\Http\Message\ResponseInterface
    */
    public function issuesListForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $milestoneNumber milestone_number parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Label[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListLabelsForMilestone(string $owner, string $repo, int $milestoneNumber, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListLabelsForMilestone($owner, $repo, $milestoneNumber, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $eventId event_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesGetEventNotFoundException
     * @throws \Github\Exception\IssuesGetEventGoneException
     * @throws \Github\Exception\IssuesGetEventForbiddenException
     *
     * @return null|\Github\Model\IssueEvent|\Psr\Http\Message\ResponseInterface
     */
    public function issuesGetEvent(string $owner, string $repo, int $eventId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesGetEvent($owner, $repo, $eventId), $fetch);
    }
    /**
     * By default, Issue Comments are ordered by ascending ID.
     *
     * @param string $owner 
     * @param string $repo 
     * @param array $queryParameters {
     *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
     *     @var string $direction Either `asc` or `desc`. Ignored without the `sort` parameter.
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\IssuesListCommentsForRepoUnprocessableEntityException
     * @throws \Github\Exception\IssuesListCommentsForRepoNotFoundException
     *
     * @return null|\Github\Model\IssueComment[]|\Psr\Http\Message\ResponseInterface
     */
    public function issuesListCommentsForRepo(string $owner, string $repo, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\IssuesListCommentsForRepo($owner, $repo, $queryParameters), $fetch);
    }
    /**
     * OAuth application owners can revoke a single token for an OAuth application. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password.
     *
     * @param string $clientId 
     * @param null|\Github\Model\ApplicationsClientIdTokenDeleteBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\AppsDeleteTokenUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function appsDeleteToken(string $clientId, ?\Github\Model\ApplicationsClientIdTokenDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsDeleteToken($clientId, $requestBody), $fetch);
    }
    /**
     * OAuth applications can use this API method to reset a valid OAuth token without end-user involvement. Applications must save the "token" property in the response because changes take effect immediately. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. Invalid tokens will return `404 NOT FOUND`.
     *
     * @param string $clientId 
     * @param null|\Github\Model\ApplicationsClientIdTokenPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\AppsResetTokenUnprocessableEntityException
     *
     * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
     */
    public function appsResetToken(string $clientId, ?\Github\Model\ApplicationsClientIdTokenPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsResetToken($clientId, $requestBody), $fetch);
    }
    /**
     * OAuth applications can use a special API method for checking OAuth token validity without exceeding the normal rate limits for failed login attempts. Authentication works differently with this particular endpoint. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) to use this endpoint, where the username is the OAuth application `client_id` and the password is its `client_secret`. Invalid tokens will return `404 NOT FOUND`.
     *
     * @param string $clientId 
     * @param null|\Github\Model\ApplicationsClientIdTokenPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\AppsCheckTokenUnprocessableEntityException
     * @throws \Github\Exception\AppsCheckTokenNotFoundException
     *
     * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
     */
    public function appsCheckToken(string $clientId, ?\Github\Model\ApplicationsClientIdTokenPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsCheckToken($clientId, $requestBody), $fetch);
    }
    /**
    * Enables an authenticated GitHub App to find the user’s installation information.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Installation|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetUserInstallation(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetUserInstallation($username), $fetch);
    }
    /**
    * Returns user and organization accounts associated with the specified plan, including free plans. For per-seat pricing, you see the list of accounts that have purchased the plan, including the number of seats purchased. When someone submits a plan change that won't be processed until the end of their billing cycle, you will also see the upcoming pending change.
    
    GitHub Apps must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint. OAuth Apps must use [basic authentication](https://developer.github.com/v3/auth/#basic-authentication) with their client ID and client secret to access this endpoint.
    *
    * @param int $planId plan_id parameter
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction To return the oldest accounts first, set to `asc`. Can be one of `asc` or `desc`. Ignored without the `sort` parameter.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListAccountsForPlanNotFoundException
    * @throws \Github\Exception\AppsListAccountsForPlanUnprocessableEntityException
    * @throws \Github\Exception\AppsListAccountsForPlanUnauthorizedException
    *
    * @return null|\Github\Model\MarketplacePurchase[]|\Psr\Http\Message\ResponseInterface
    */
    public function appsListAccountsForPlan(int $planId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListAccountsForPlan($planId, $queryParameters), $fetch);
    }
    /**
    * Creates an attachment under a content reference URL in the body or comment of an issue or pull request. Use the `id` of the content reference from the [`content_reference` event](https://developer.github.com/webhooks/event-payloads/#content_reference) to create an attachment.
    
    The app must create a content attachment within six hours of the content reference URL being posted. See "[Using content attachments](https://developer.github.com/apps/using-content-attachments/)" for details about content attachments.
    
    You must use an [installation access token](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-an-installation) to access this endpoint.
    *
    * @param int $contentReferenceId content_reference_id parameter
    * @param null|\Github\Model\ContentReferencesContentReferenceIdAttachmentsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsCreateContentAttachmentUnprocessableEntityException
    * @throws \Github\Exception\AppsCreateContentAttachmentNotFoundException
    * @throws \Github\Exception\AppsCreateContentAttachmentGoneException
    * @throws \Github\Exception\AppsCreateContentAttachmentUnsupportedMediaTypeException
    * @throws \Github\Exception\AppsCreateContentAttachmentForbiddenException
    *
    * @return null|\Github\Model\ContentReferenceAttachment|\Psr\Http\Message\ResponseInterface
    */
    public function appsCreateContentAttachment(int $contentReferenceId, ?\Github\Model\ContentReferencesContentReferenceIdAttachmentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsCreateContentAttachment($contentReferenceId, $requestBody), $fetch);
    }
    /**
    * Shows whether the user or organization account actively subscribes to a plan listed by the authenticated GitHub App. When someone submits a plan change that won't be processed until the end of their billing cycle, you will also see the upcoming pending change.
    
    GitHub Apps must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint. OAuth Apps must use [basic authentication](https://developer.github.com/v3/auth/#basic-authentication) with their client ID and client secret to access this endpoint.
    *
    * @param int $accountId account_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsGetSubscriptionPlanForAccountStubbedNotFoundException
    * @throws \Github\Exception\AppsGetSubscriptionPlanForAccountStubbedUnauthorizedException
    *
    * @return null|\Github\Model\MarketplacePurchase|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetSubscriptionPlanForAccountStubbed(int $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetSubscriptionPlanForAccountStubbed($accountId), $fetch);
    }
    /**
    * Enables an authenticated GitHub App to find the repository's installation information. The installation's account type will be either an organization or a user account, depending which account the repository belongs to.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsGetRepoInstallationNotFoundException
    *
    * @return null|\Github\Model\Installation|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetRepoInstallation(string $owner, string $repo, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetRepoInstallation($owner, $repo), $fetch);
    }
    /**
    * Returns repository and organization accounts associated with the specified plan, including free plans. For per-seat pricing, you see the list of accounts that have purchased the plan, including the number of seats purchased. When someone submits a plan change that won't be processed until the end of their billing cycle, you will also see the upcoming pending change.
    
    GitHub Apps must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint. OAuth Apps must use [basic authentication](https://developer.github.com/v3/auth/#basic-authentication) with their client ID and client secret to access this endpoint.
    *
    * @param int $planId plan_id parameter
    * @param array $queryParameters {
    *     @var string $sort One of `created` (when the repository was starred) or `updated` (when it was last pushed to).
    *     @var string $direction To return the oldest accounts first, set to `asc`. Can be one of `asc` or `desc`. Ignored without the `sort` parameter.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListAccountsForPlanStubbedUnauthorizedException
    *
    * @return null|\Github\Model\MarketplacePurchase[]|\Psr\Http\Message\ResponseInterface
    */
    public function appsListAccountsForPlanStubbed(int $planId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListAccountsForPlanStubbed($planId, $queryParameters), $fetch);
    }
    /**
    * Lists installations of your GitHub App that the authenticated user has explicit permission (`:read`, `:write`, or `:admin`) to access.
    
    You must use a [user-to-server OAuth access token](https://developer.github.com/apps/building-github-apps/identifying-and-authorizing-users-for-github-apps/#identifying-users-on-your-site), created for a user who has authorized your GitHub App, to access this endpoint.
    
    The authenticated user has explicit permission to access repositories they own, repositories where they are a collaborator, and repositories that they can access through an organization membership.
    
    You can find the permissions for the installation under the `permissions` key.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListInstallationsForAuthenticatedUserForbiddenException
    * @throws \Github\Exception\AppsListInstallationsForAuthenticatedUserUnauthorizedException
    * @throws \Github\Exception\AppsListInstallationsForAuthenticatedUserUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\UserInstallationsGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function appsListInstallationsForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListInstallationsForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * **Note:** Suspending a GitHub App installation is currently in beta and subject to change. Before you can suspend a GitHub App, the app owner must enable suspending installations for the app by opting-in to the beta. For more information, see "[Suspending a GitHub App installation](https://developer.github.com/apps/managing-github-apps/suspending-a-github-app-installation/)."
    
    Removes a GitHub App installation suspension.
    
    To unsuspend a GitHub App, you must be an account owner or have admin permissions in the repository or organization where the app is installed and suspended.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsUnsuspendInstallationNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsUnsuspendInstallation(int $installationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsUnsuspendInstallation($installationId), $fetch);
    }
    /**
    * **Note:** Suspending a GitHub App installation is currently in beta and subject to change. Before you can suspend a GitHub App, the app owner must enable suspending installations for the app by opting-in to the beta. For more information, see "[Suspending a GitHub App installation](https://developer.github.com/apps/managing-github-apps/suspending-a-github-app-installation/)."
    
    Suspends a GitHub App on a user, organization, or business account, which blocks the app from accessing the account's resources. When a GitHub App is suspended, the app's access to the GitHub API or webhook events is blocked for that account.
    
    To suspend a GitHub App, you must be an account owner or have admin permissions in the repository or organization where the app is installed.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsSuspendInstallationNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsSuspendInstallation(int $installationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsSuspendInstallation($installationId), $fetch);
    }
    /**
    * List repositories that an app installation can access.
    
    You must use an [installation access token](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-an-installation) to access this endpoint.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListReposAccessibleToInstallationForbiddenException
    * @throws \Github\Exception\AppsListReposAccessibleToInstallationUnauthorizedException
    *
    * @return null|\Github\Model\InstallationRepositoriesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function appsListReposAccessibleToInstallation(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListReposAccessibleToInstallation($queryParameters), $fetch);
    }
    /**
    * List repositories that the authenticated user has explicit permission (`:read`, `:write`, or `:admin`) to access for an installation.
    
    The authenticated user has explicit permission to access repositories they own, repositories where they are a collaborator, and repositories that they can access through an organization membership.
    
    You must use a [user-to-server OAuth access token](https://developer.github.com/apps/building-github-apps/identifying-and-authorizing-users-for-github-apps/#identifying-users-on-your-site), created for a user who has authorized your GitHub App, to access this endpoint.
    
    The access the user has to each repository is included in the hash under the `permissions` key.
    *
    * @param int $installationId installation_id parameter
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListInstallationReposForAuthenticatedUserNotFoundException
    * @throws \Github\Exception\AppsListInstallationReposForAuthenticatedUserForbiddenException
    *
    * @return null|\Github\Model\UserInstallationsInstallationIdRepositoriesGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function appsListInstallationReposForAuthenticatedUser(int $installationId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListInstallationReposForAuthenticatedUser($installationId, $queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will replace and discontinue OAuth endpoints containing `access_token` in the path parameter. We are introducing new endpoints that allow you to securely manage tokens for OAuth Apps by using `access_token` as an input parameter. The OAuth Application API will be removed on May 5, 2021. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-app-endpoint/).
    
    OAuth application owners can revoke a grant for their OAuth application and a specific user. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. You must also provide a valid token as `:access_token` and the grant for the token's owner will be deleted.
    
    Deleting an OAuth application's grant will also delete all OAuth tokens associated with the application for the user. Once deleted, the application will have no access to the user's account and will no longer be listed on [the Applications settings page under "Authorized OAuth Apps" on GitHub](https://github.com/settings/applications#authorized).
    *
    * @param string $clientId 
    * @param string $accessToken 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsRevokeGrantForApplication(string $clientId, string $accessToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsRevokeGrantForApplication($clientId, $accessToken), $fetch);
    }
    /**
    * Shows whether the user or organization account actively subscribes to a plan listed by the authenticated GitHub App. When someone submits a plan change that won't be processed until the end of their billing cycle, you will also see the upcoming pending change.
    
    GitHub Apps must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint. OAuth Apps must use [basic authentication](https://developer.github.com/v3/auth/#basic-authentication) with their client ID and client secret to access this endpoint.
    *
    * @param int $accountId account_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsGetSubscriptionPlanForAccountNotFoundException
    * @throws \Github\Exception\AppsGetSubscriptionPlanForAccountUnauthorizedException
    *
    * @return null|\Github\Model\MarketplacePurchase|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetSubscriptionPlanForAccount(int $accountId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetSubscriptionPlanForAccount($accountId), $fetch);
    }
    /**
    * Creates an installation access token that enables a GitHub App to make authenticated API requests for the app's installation on an organization or individual account. Installation tokens expire one hour from the time you create them. Using an expired token produces a status code of `401 - Unauthorized`, and requires creating a new installation token. By default the installation token has access to all repositories that the installation can access. To restrict the access to specific repositories, you can provide the `repository_ids` when creating the token. When you omit `repository_ids`, the response does not contain the `repositories` key.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param null|\Github\Model\AppInstallationsInstallationIdAccessTokensPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsCreateInstallationAccessTokenForbiddenException
    * @throws \Github\Exception\AppsCreateInstallationAccessTokenUnsupportedMediaTypeException
    * @throws \Github\Exception\AppsCreateInstallationAccessTokenUnauthorizedException
    * @throws \Github\Exception\AppsCreateInstallationAccessTokenNotFoundException
    * @throws \Github\Exception\AppsCreateInstallationAccessTokenUnprocessableEntityException
    *
    * @return null|\Github\Model\InstallationToken|\Psr\Http\Message\ResponseInterface
    */
    public function appsCreateInstallationAccessToken(int $installationId, ?\Github\Model\AppInstallationsInstallationIdAccessTokensPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsCreateInstallationAccessToken($installationId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function appsRevokeInstallationAccessToken(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsRevokeInstallationAccessToken(), $fetch);
    }
    /**
    * Lists all plans that are part of your GitHub Marketplace listing.
    
    GitHub Apps must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint. OAuth Apps must use [basic authentication](https://developer.github.com/v3/auth/#basic-authentication) with their client ID and client secret to access this endpoint.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListPlansStubbedUnauthorizedException
    *
    * @return null|\Github\Model\MarketplaceListingPlan[]|\Psr\Http\Message\ResponseInterface
    */
    public function appsListPlansStubbed(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListPlansStubbed($queryParameters), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will replace and discontinue OAuth endpoints containing `access_token` in the path parameter. We are introducing new endpoints that allow you to securely manage tokens for OAuth Apps by using `access_token` as an input parameter. The OAuth Application API will be removed on May 5, 2021. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-app-endpoint/).
    
    OAuth application owners can revoke a single token for an OAuth application. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password.
    *
    * @param string $clientId 
    * @param string $accessToken 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsRevokeAuthorizationForApplication(string $clientId, string $accessToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsRevokeAuthorizationForApplication($clientId, $accessToken), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will replace and discontinue OAuth endpoints containing `access_token` in the path parameter. We are introducing new endpoints that allow you to securely manage tokens for OAuth Apps by using `access_token` as an input parameter. The OAuth Application API will be removed on May 5, 2021. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-app-endpoint/).
    
    OAuth applications can use a special API method for checking OAuth token validity without exceeding the normal rate limits for failed login attempts. Authentication works differently with this particular endpoint. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. Invalid tokens will return `404 NOT FOUND`.
    *
    * @param string $clientId 
    * @param string $accessToken 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsCheckAuthorizationNotFoundException
    *
    * @return null|\Github\Model\ApplicationsClientIdTokensAccessTokenGetResponse200|\Psr\Http\Message\ResponseInterface
    */
    public function appsCheckAuthorization(string $clientId, string $accessToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsCheckAuthorization($clientId, $accessToken), $fetch);
    }
    /**
    * **Deprecation Notice:** GitHub will replace and discontinue OAuth endpoints containing `access_token` in the path parameter. We are introducing new endpoints that allow you to securely manage tokens for OAuth Apps by using `access_token` as an input parameter. The OAuth Application API will be removed on May 5, 2021. For more information, including scheduled brownouts, see the [blog post](https://developer.github.com/changes/2020-02-14-deprecating-oauth-app-endpoint/).
    
    OAuth applications can use this API method to reset a valid OAuth token without end-user involvement. Applications must save the "token" property in the response because changes take effect immediately. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. Invalid tokens will return `404 NOT FOUND`.
    *
    * @param string $clientId 
    * @param string $accessToken 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Authorization|\Psr\Http\Message\ResponseInterface
    */
    public function appsResetAuthorization(string $clientId, string $accessToken, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsResetAuthorization($clientId, $accessToken), $fetch);
    }
    /**
    * You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    
    The permissions the installation has are included under the `permissions` key.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var string $outdated 
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Installation[]|\Psr\Http\Message\ResponseInterface
    */
    public function appsListInstallations(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListInstallations($queryParameters), $fetch);
    }
    /**
     * Use this endpoint to complete the handshake necessary when implementing the [GitHub App Manifest flow](https://developer.github.com/apps/building-github-apps/creating-github-apps-from-a-manifest/). When you create a GitHub App with the manifest flow, you receive a temporary `code` used to retrieve the GitHub App's `id`, `pem` (private key), and `webhook_secret`.
     *
     * @param string $code code parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\AppsCreateFromManifestNotFoundException
     * @throws \Github\Exception\AppsCreateFromManifestUnprocessableEntityException
     *
     * @return null|\Github\Model\AppManifestsCodeConversionsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function appsCreateFromManifest(string $code, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsCreateFromManifest($code), $fetch);
    }
    /**
    * OAuth application owners can revoke a grant for their OAuth application and a specific user. You must use [Basic Authentication](https://developer.github.com/v3/auth#basic-authentication) when accessing this endpoint, using the OAuth application's `client_id` and `client_secret` as the username and password. You must also provide a valid OAuth `access_token` as an input parameter and the grant for the token's owner will be deleted.
    Deleting an OAuth application's grant will also delete all OAuth tokens associated with the application for the user. Once deleted, the application will have no access to the user's account and will no longer be listed on [the application authorizations settings screen within GitHub](https://github.com/settings/applications#authorized).
    *
    * @param string $clientId 
    * @param null|\Github\Model\ApplicationsClientIdGrantDeleteBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsDeleteAuthorizationUnprocessableEntityException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsDeleteAuthorization(string $clientId, ?\Github\Model\ApplicationsClientIdGrantDeleteBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsDeleteAuthorization($clientId, $requestBody), $fetch);
    }
    /**
    * Enables an authenticated GitHub App to find the organization's installation information.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\Installation|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetOrgInstallation(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetOrgInstallation($org), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Github\Model\Integration|\Psr\Http\Message\ResponseInterface
     */
    public function appsGetAuthenticated(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetAuthenticated(), $fetch);
    }
    /**
    * Uninstalls a GitHub App on a user, organization, or business account. If you prefer to temporarily suspend an app's access to your account's resources, then we recommend the "[Suspend an app installation](https://developer.github.com/v3/apps/#suspend-an-app-installation)" endpoint.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsDeleteInstallationNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsDeleteInstallation(int $installationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsDeleteInstallation($installationId), $fetch);
    }
    /**
    * Enables an authenticated GitHub App to find an installation's information using the installation id. The installation's account type (`target_type`) will be either an organization or a user account, depending which account the repository belongs to.
    
    You must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsGetInstallationNotFoundException
    * @throws \Github\Exception\AppsGetInstallationUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\Installation|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetInstallation(int $installationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetInstallation($installationId), $fetch);
    }
    /**
     * Lists the active subscriptions for the authenticated user. You must use a [user-to-server OAuth access token](https://developer.github.com/apps/building-github-apps/identifying-and-authorizing-users-for-github-apps/#identifying-users-on-your-site), created for a user who has authorized your GitHub App, to access this endpoint. . OAuth Apps must authenticate using an [OAuth token](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/).
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\AppsListSubscriptionsForAuthenticatedUserUnauthorizedException
     * @throws \Github\Exception\AppsListSubscriptionsForAuthenticatedUserNotFoundException
     *
     * @return null|\Github\Model\UserMarketplacePurchase[]|\Psr\Http\Message\ResponseInterface
     */
    public function appsListSubscriptionsForAuthenticatedUser(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListSubscriptionsForAuthenticatedUser($queryParameters), $fetch);
    }
    /**
    * Remove a single repository from an installation. The authenticated user must have admin access to the repository.
    
    You must use a personal access token (which you can create via the [command line](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line/) or the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/#create-a-new-authorization)) or [Basic Authentication](https://developer.github.com/v3/auth/#basic-authentication) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param int $repositoryId repository_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsRemoveRepoFromInstallationForbiddenException
    * @throws \Github\Exception\AppsRemoveRepoFromInstallationNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsRemoveRepoFromInstallation(int $installationId, int $repositoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsRemoveRepoFromInstallation($installationId, $repositoryId), $fetch);
    }
    /**
    * Add a single repository to an installation. The authenticated user must have admin access to the repository.
    
    You must use a personal access token (which you can create via the [command line](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line/) or the [OAuth Authorizations API](https://developer.github.com/v3/oauth_authorizations/#create-a-new-authorization)) or [Basic Authentication](https://developer.github.com/v3/auth/#basic-authentication) to access this endpoint.
    *
    * @param int $installationId installation_id parameter
    * @param int $repositoryId repository_id parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsAddRepoToInstallationForbiddenException
    * @throws \Github\Exception\AppsAddRepoToInstallationNotFoundException
    *
    * @return null|\Psr\Http\Message\ResponseInterface
    */
    public function appsAddRepoToInstallation(int $installationId, int $repositoryId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsAddRepoToInstallation($installationId, $repositoryId), $fetch);
    }
    /**
    * **Note**: The `:app_slug` is just the URL-friendly name of your GitHub App. You can find this on the settings page for your GitHub App (e.g., `https://github.com/settings/apps/:app_slug`).
    
    If the GitHub App you specify is public, you can access this endpoint without authenticating. If the GitHub App you specify is private, you must authenticate with a [personal access token](https://help.github.com/articles/creating-a-personal-access-token-for-the-command-line/) or an [installation access token](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-an-installation) to access this endpoint.
    *
    * @param string $appSlug app_slug parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsGetBySlugForbiddenException
    * @throws \Github\Exception\AppsGetBySlugNotFoundException
    * @throws \Github\Exception\AppsGetBySlugUnsupportedMediaTypeException
    *
    * @return null|\Github\Model\Integration|\Psr\Http\Message\ResponseInterface
    */
    public function appsGetBySlug(string $appSlug, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsGetBySlug($appSlug), $fetch);
    }
    /**
     * Lists the active subscriptions for the authenticated user. You must use a [user-to-server OAuth access token](https://developer.github.com/apps/building-github-apps/identifying-and-authorizing-users-for-github-apps/#identifying-users-on-your-site), created for a user who has authorized your GitHub App, to access this endpoint. . OAuth Apps must authenticate using an [OAuth token](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/).
     *
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\AppsListSubscriptionsForAuthenticatedUserStubbedUnauthorizedException
     *
     * @return null|\Github\Model\UserMarketplacePurchase[]|\Psr\Http\Message\ResponseInterface
     */
    public function appsListSubscriptionsForAuthenticatedUserStubbed(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListSubscriptionsForAuthenticatedUserStubbed($queryParameters), $fetch);
    }
    /**
    * Lists all plans that are part of your GitHub Marketplace listing.
    
    GitHub Apps must use a [JWT](https://developer.github.com/apps/building-github-apps/authenticating-with-github-apps/#authenticating-as-a-github-app) to access this endpoint. OAuth Apps must use [basic authentication](https://developer.github.com/v3/auth/#basic-authentication) with their client ID and client secret to access this endpoint.
    *
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\AppsListPlansNotFoundException
    * @throws \Github\Exception\AppsListPlansUnauthorizedException
    *
    * @return null|\Github\Model\MarketplaceListingPlan[]|\Psr\Http\Message\ResponseInterface
    */
    public function appsListPlans(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\AppsListPlans($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsUnstarNotFoundException
     * @throws \Github\Exception\GistsUnstarForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gistsUnstar(string $gistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsUnstar($gistId), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsCheckIsStarredNotFoundException
     * @throws \Github\Exception\GistsCheckIsStarredForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gistsCheckIsStarred(string $gistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsCheckIsStarred($gistId), $fetch);
    }
    /**
     * Note that you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
     *
     * @param string $gistId gist_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsStarNotFoundException
     * @throws \Github\Exception\GistsStarForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gistsStar(string $gistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsStar($gistId), $fetch);
    }
    /**
     * List the authenticated user's starred gists:
     *
     * @param array $queryParameters {
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsListStarredUnauthorizedException
     * @throws \Github\Exception\GistsListStarredForbiddenException
     *
     * @return null|\Github\Model\BaseGist[]|\Psr\Http\Message\ResponseInterface
     */
    public function gistsListStarred(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsListStarred($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsDeleteCommentNotFoundException
     * @throws \Github\Exception\GistsDeleteCommentForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gistsDeleteComment(string $gistId, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsDeleteComment($gistId, $commentId), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param int $commentId comment_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsGetCommentNotFoundException
     * @throws \Github\Exception\GistsGetCommentForbiddenException
     *
     * @return null|\Github\Model\GistComment|\Psr\Http\Message\ResponseInterface
     */
    public function gistsGetComment(string $gistId, int $commentId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsGetComment($gistId, $commentId), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param int $commentId comment_id parameter
     * @param null|\Github\Model\GistsGistIdCommentsCommentIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsUpdateCommentNotFoundException
     *
     * @return null|\Github\Model\GistComment|\Psr\Http\Message\ResponseInterface
     */
    public function gistsUpdateComment(string $gistId, int $commentId, ?\Github\Model\GistsGistIdCommentsCommentIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsUpdateComment($gistId, $commentId, $requestBody), $fetch);
    }
    /**
    * List public gists sorted by most recently updated to least recently updated.
    
    Note: With [pagination](https://developer.github.com/v3/#pagination), you can fetch up to 3000 gists. For example, you can fetch 100 pages with 30 gists per page or 30 pages with 100 gists per page.
    *
    * @param array $queryParameters {
    *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GistsListPublicUnprocessableEntityException
    * @throws \Github\Exception\GistsListPublicForbiddenException
    *
    * @return null|\Github\Model\BaseGist[]|\Psr\Http\Message\ResponseInterface
    */
    public function gistsListPublic(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsListPublic($queryParameters), $fetch);
    }
    /**
     * Lists public gists for the specified user:
     *
     * @param string $username 
     * @param array $queryParameters {
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsListForUserUnprocessableEntityException
     *
     * @return null|\Github\Model\BaseGist[]|\Psr\Http\Message\ResponseInterface
     */
    public function gistsListForUser(string $username, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsListForUser($username, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsDeleteNotFoundException
     * @throws \Github\Exception\GistsDeleteForbiddenException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gistsDelete(string $gistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsDelete($gistId), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsGetForbiddenException
     * @throws \Github\Exception\GistsGetNotFoundException
     *
     * @return null|\Github\Model\GistFull|\Psr\Http\Message\ResponseInterface
     */
    public function gistsGet(string $gistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsGet($gistId), $fetch);
    }
    /**
     * Allows you to update or delete a gist file and rename gist files. Files from the previous version of the gist that aren't explicitly changed during an edit are unchanged.
     *
     * @param string $gistId gist_id parameter
     * @param null|\Github\Model\GistsGistIdPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsUpdateUnprocessableEntityException
     * @throws \Github\Exception\GistsUpdateNotFoundException
     *
     * @return null|\Github\Model\GistFull|\Psr\Http\Message\ResponseInterface
     */
    public function gistsUpdate(string $gistId, ?\Github\Model\GistsGistIdPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsUpdate($gistId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsListForksNotFoundException
     * @throws \Github\Exception\GistsListForksForbiddenException
     *
     * @return null|\Github\Model\GistFull[]|\Psr\Http\Message\ResponseInterface
     */
    public function gistsListForks(string $gistId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsListForks($gistId, $queryParameters), $fetch);
    }
    /**
     * **Note**: This was previously `/gists/:gist_id/fork`.
     *
     * @param string $gistId gist_id parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsForkNotFoundException
     * @throws \Github\Exception\GistsForkUnprocessableEntityException
     * @throws \Github\Exception\GistsForkForbiddenException
     *
     * @return null|\Github\Model\BaseGist|\Psr\Http\Message\ResponseInterface
     */
    public function gistsFork(string $gistId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsFork($gistId), $fetch);
    }
    /**
     * Lists the authenticated user's gists or if called anonymously, this endpoint returns all public gists:
     *
     * @param array $queryParameters {
     *     @var string $since Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsListForbiddenException
     *
     * @return null|\Github\Model\BaseGist[]|\Psr\Http\Message\ResponseInterface
     */
    public function gistsList(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsList($queryParameters), $fetch);
    }
    /**
     * Allows you to add a new gist with one or more files.
     **Note:** Don't name your files "gistfile" with a numerical suffix. This is the format of the automatic naming scheme that Gist uses internally.
     *
     * @param null|\Github\Model\GistsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsCreateUnprocessableEntityException
     * @throws \Github\Exception\GistsCreateNotFoundException
     * @throws \Github\Exception\GistsCreateForbiddenException
     *
     * @return null|\Github\Model\GistFull|\Psr\Http\Message\ResponseInterface
     */
    public function gistsCreate(?\Github\Model\GistsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsCreate($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsListCommitsNotFoundException
     * @throws \Github\Exception\GistsListCommitsForbiddenException
     *
     * @return null|\Github\Model\GistCommit[]|\Psr\Http\Message\ResponseInterface
     */
    public function gistsListCommits(string $gistId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsListCommits($gistId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param array $queryParameters {
     *     @var int $per_page Results per page (max 100)
     *     @var int $page Page number of the results to fetch.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsListCommentsNotFoundException
     * @throws \Github\Exception\GistsListCommentsForbiddenException
     *
     * @return null|\Github\Model\GistComment[]|\Psr\Http\Message\ResponseInterface
     */
    public function gistsListComments(string $gistId, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsListComments($gistId, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param null|\Github\Model\GistsGistIdCommentsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsCreateCommentNotFoundException
     * @throws \Github\Exception\GistsCreateCommentForbiddenException
     *
     * @return null|\Github\Model\GistComment|\Psr\Http\Message\ResponseInterface
     */
    public function gistsCreateComment(string $gistId, ?\Github\Model\GistsGistIdCommentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsCreateComment($gistId, $requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $gistId gist_id parameter
     * @param string $sha sha parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GistsGetRevisionUnprocessableEntityException
     * @throws \Github\Exception\GistsGetRevisionNotFoundException
     * @throws \Github\Exception\GistsGetRevisionForbiddenException
     *
     * @return null|\Github\Model\GistFull|\Psr\Http\Message\ResponseInterface
     */
    public function gistsGetRevision(string $gistId, string $sha, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GistsGetRevision($gistId, $sha), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the estimated paid and estimated total storage used for GitHub Actions and Github Packages.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    Access tokens must have the `user` scope.
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CombinedBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetSharedStorageBillingUser(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetSharedStorageBillingUser($username), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the free and paid storage usued for GitHub Packages in gigabytes.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    Access tokens must have the `read:org` scope.
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PackagesBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetGithubPackagesBillingOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetGithubPackagesBillingOrg($org), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the summary of the free and paid GitHub Actions minutes used.
    
    Paid minutes only apply to workflows in private repositories that use GitHub-hosted runners. Minutes used is listed for each GitHub-hosted runner operating system. Any job re-runs are also included in the usage. The usage does not include the multiplier for macOS and Windows runners and is not rounded up to the nearest whole minute. For more information, see "[Managing billing for GitHub Actions](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-actions)".
    
    The authenticated user must be an enterprise admin.
    *
    * @param string $enterpriseId Unique identifier of the GitHub Enterprise Cloud instance.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ActionsBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetGithubActionsBillingGhe(string $enterpriseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetGithubActionsBillingGhe($enterpriseId), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the estimated paid and estimated total storage used for GitHub Actions and Github Packages.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    Access tokens must have the `read:org` scope.
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CombinedBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetSharedStorageBillingOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetSharedStorageBillingOrg($org), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the estimated paid and estimated total storage used for GitHub Actions and Github Packages.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    The authenticated user must be an enterprise admin.
    *
    * @param string $enterpriseId Unique identifier of the GitHub Enterprise Cloud instance.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\CombinedBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetSharedStorageBillingGhe(string $enterpriseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetSharedStorageBillingGhe($enterpriseId), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the summary of the free and paid GitHub Actions minutes used.
    
    Paid minutes only apply to workflows in private repositories that use GitHub-hosted runners. Minutes used is listed for each GitHub-hosted runner operating system. Any job re-runs are also included in the usage. The usage does not include the multiplier for macOS and Windows runners and is not rounded up to the nearest whole minute. For more information, see "[Managing billing for GitHub Actions](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-actions)".
    
    Access tokens must have the `read:org` scope.
    *
    * @param string $org 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ActionsBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetGithubActionsBillingOrg(string $org, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetGithubActionsBillingOrg($org), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the free and paid storage used for GitHub Packages in gigabytes.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    The authenticated user must be an enterprise admin.
    *
    * @param string $enterpriseId Unique identifier of the GitHub Enterprise Cloud instance.
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PackagesBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetGithubPackagesBillingGhe(string $enterpriseId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetGithubPackagesBillingGhe($enterpriseId), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the free and paid storage used for GitHub Packages in gigabytes.
    
    Paid minutes only apply to packages stored for private repositories. For more information, see "[Managing billing for GitHub Packages](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-packages)."
    
    Access tokens must have the `user` scope.
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\PackagesBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetGithubPackagesBillingUser(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetGithubPackagesBillingUser($username), $fetch);
    }
    /**
    * **Warning:** The Billing API is currently in public beta and subject to change.
    
    Gets the summary of the free and paid GitHub Actions minutes used.
    
    Paid minutes only apply to workflows in private repositories that use GitHub-hosted runners. Minutes used is listed for each GitHub-hosted runner operating system. Any job re-runs are also included in the usage. The usage does not include the multiplier for macOS and Windows runners and is not rounded up to the nearest whole minute. For more information, see "[Managing billing for GitHub Actions](https://help.github.com/github/setting-up-and-managing-billing-and-payments-on-github/managing-billing-for-github-actions)".
    
    Access tokens must have the `user` scope.
    *
    * @param string $username 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\ActionsBillingUsage|\Psr\Http\Message\ResponseInterface
    */
    public function billingGetGithubActionsBillingUser(string $username, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\BillingGetGithubActionsBillingUser($username), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\RateLimitGetNotFoundException
     *
     * @return null|\Github\Model\RateLimitOverview|\Psr\Http\Message\ResponseInterface
     */
    public function rateLimitGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\RateLimitGet(), $fetch);
    }
    /**
    * Returns a single tree using the SHA1 value for that tree.
    
    If `truncated` is `true` in the response then the number of items in the `tree` array exceeded our maximum limit. If you need to fetch more items, use the non-recursive method of fetching trees, and fetch one sub-tree at a time.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $treeSha tree_sha parameter
    * @param array $queryParameters {
    *     @var string $recursive Setting this parameter to any value returns the objects or subtrees referenced by the tree specified in `:tree_sha`. For example, setting `recursive` to any of the following will enable returning objects or subtrees: `0`, `1`, `"true"`, and `"false"`. Omit this parameter to prevent recursively returning objects or subtrees.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitGetTreeUnprocessableEntityException
    * @throws \Github\Exception\GitGetTreeNotFoundException
    *
    * @return null|\Github\Model\GitTree|\Psr\Http\Message\ResponseInterface
    */
    public function gitGetTree(string $owner, string $repo, string $treeSha, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitGetTree($owner, $repo, $treeSha, $queryParameters), $fetch);
    }
    /**
    * Returns an array of references from your Git database that match the supplied name. The `:ref` in the URL must be formatted as `heads/<branch name>` for branches and `tags/<tag name>` for tags. If the `:ref` doesn't exist in the repository, but existing refs start with `:ref`, they will be returned as an array.
    
    When you use this endpoint without providing a `:ref`, it will return an array of all the references from your Git database, including notes and stashes if they exist on the server. Anything in the namespace is returned, not just `heads` and `tags`.
    
    **Note:** You need to explicitly [request a pull request](https://developer.github.com/v3/pulls/#get-a-pull-request) to trigger a test merge commit, which checks the mergeability of pull requests. For more information, see "[Checking mergeability of pull requests](https://developer.github.com/v3/git/#checking-mergeability-of-pull-requests)".
    
    If you request matching references for a branch named `feature` but the branch `feature` doesn't exist, the response can still include other matching head refs that start with the word `feature`, such as `featureA` and `featureB`.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $ref ref+ parameter
    * @param array $queryParameters {
    *     @var int $per_page Results per page (max 100)
    *     @var int $page Page number of the results to fetch.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\GitRef[]|\Psr\Http\Message\ResponseInterface
    */
    public function gitListMatchingRefs(string $owner, string $repo, string $ref, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitListMatchingRefs($owner, $repo, $ref, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $ref ref+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GitDeleteRefUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gitDeleteRef(string $owner, string $repo, string $ref, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitDeleteRef($owner, $repo, $ref), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $ref ref+ parameter
     * @param null|\Github\Model\ReposOwnerRepoGitRefsRefPatchBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GitUpdateRefUnprocessableEntityException
     *
     * @return null|\Github\Model\GitRef|\Psr\Http\Message\ResponseInterface
     */
    public function gitUpdateRef(string $owner, string $repo, string $ref, ?\Github\Model\ReposOwnerRepoGitRefsRefPatchBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitUpdateRef($owner, $repo, $ref, $requestBody), $fetch);
    }
    /**
    * Creates a new Git [commit object](https://git-scm.com/book/en/v1/Git-Internals-Git-Objects#Commit-Objects).
    
    In this example, the payload of the signature would be:
    
    
    
    **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoGitCommitsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitCreateCommitUnprocessableEntityException
    * @throws \Github\Exception\GitCreateCommitNotFoundException
    *
    * @return null|\Github\Model\GitCommit|\Psr\Http\Message\ResponseInterface
    */
    public function gitCreateCommit(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoGitCommitsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitCreateCommit($owner, $repo, $requestBody), $fetch);
    }
    /**
    * **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $tagSha tag_sha parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitGetTagNotFoundException
    *
    * @return null|\Github\Model\GitTag|\Psr\Http\Message\ResponseInterface
    */
    public function gitGetTag(string $owner, string $repo, string $tagSha, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitGetTag($owner, $repo, $tagSha), $fetch);
    }
    /**
    * The tree creation API accepts nested entries. If you specify both a tree and a nested path modifying that tree, this endpoint will overwrite the contents of the tree with the new path contents, and create a new tree structure.
    
    If you use this endpoint to add, delete, or modify the file contents in a tree, you will need to commit the tree and then update a branch to point to the commit. For more information see "[Create a commit](https://developer.github.com/v3/git/commits/#create-a-commit)" and "[Update a reference](https://developer.github.com/v3/git/refs/#update-a-reference)."
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoGitTreesPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitCreateTreeUnprocessableEntityException
    * @throws \Github\Exception\GitCreateTreeNotFoundException
    * @throws \Github\Exception\GitCreateTreeForbiddenException
    *
    * @return null|\Github\Model\GitTree|\Psr\Http\Message\ResponseInterface
    */
    public function gitCreateTree(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoGitTreesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitCreateTree($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Creates a reference for your repository. You are unable to create new references for empty repositories, even if the commit SHA-1 hash used exists. Empty repositories are repositories without branches.
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoGitRefsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GitCreateRefUnprocessableEntityException
     *
     * @return null|\Github\Model\GitRef|\Psr\Http\Message\ResponseInterface
     */
    public function gitCreateRef(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoGitRefsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitCreateRef($owner, $repo, $requestBody), $fetch);
    }
    /**
    * Note that creating a tag object does not create the reference that makes a tag in Git. If you want to create an annotated tag in Git, you have to do this call to create the tag object, and then [create](https://developer.github.com/v3/git/refs/#create-a-reference) the `refs/tags/[tag]` reference. If you want to create a lightweight tag, you only have to [create](https://developer.github.com/v3/git/refs/#create-a-reference) the tag reference - this call would be unnecessary.
    
    **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param null|\Github\Model\ReposOwnerRepoGitTagsPostBody $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitCreateTagUnprocessableEntityException
    *
    * @return null|\Github\Model\GitTag|\Psr\Http\Message\ResponseInterface
    */
    public function gitCreateTag(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoGitTagsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitCreateTag($owner, $repo, $requestBody), $fetch);
    }
    /**
     * Returns a single reference from your Git database. The `:ref` in the URL must be formatted as `heads/<branch name>` for branches and `tags/<tag name>` for tags. If the `:ref` doesn't match an existing ref, a `404` is returned.
     **Note:** You need to explicitly [request a pull request](https://developer.github.com/v3/pulls/#get-a-pull-request) to trigger a test merge commit, which checks the mergeability of pull requests. For more information, see "[Checking mergeability of pull requests](https://developer.github.com/v3/git/#checking-mergeability-of-pull-requests)".
     *
     * @param string $owner 
     * @param string $repo 
     * @param string $ref ref+ parameter
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GitGetRefNotFoundException
     *
     * @return null|\Github\Model\GitRef|\Psr\Http\Message\ResponseInterface
     */
    public function gitGetRef(string $owner, string $repo, string $ref, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitGetRef($owner, $repo, $ref), $fetch);
    }
    /**
     * 
     *
     * @param string $owner 
     * @param string $repo 
     * @param null|\Github\Model\ReposOwnerRepoGitBlobsPostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Github\Exception\GitCreateBlobNotFoundException
     * @throws \Github\Exception\GitCreateBlobConflictException
     * @throws \Github\Exception\GitCreateBlobForbiddenException
     * @throws \Github\Exception\GitCreateBlobUnprocessableEntityException
     *
     * @return null|\Github\Model\ShortBlob|\Psr\Http\Message\ResponseInterface
     */
    public function gitCreateBlob(string $owner, string $repo, ?\Github\Model\ReposOwnerRepoGitBlobsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitCreateBlob($owner, $repo, $requestBody), $fetch);
    }
    /**
    * The `content` in the response will always be Base64 encoded.
    
    _Note_: This API supports blobs up to 100 megabytes in size.
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $fileSha file_sha parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitGetBlobNotFoundException
    * @throws \Github\Exception\GitGetBlobUnprocessableEntityException
    * @throws \Github\Exception\GitGetBlobForbiddenException
    *
    * @return null|\Github\Model\Blob|\Psr\Http\Message\ResponseInterface
    */
    public function gitGetBlob(string $owner, string $repo, string $fileSha, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitGetBlob($owner, $repo, $fileSha), $fetch);
    }
    /**
    * Gets a Git [commit object](https://git-scm.com/book/en/v1/Git-Internals-Git-Objects#Commit-Objects).
    
    **Signature verification object**
    
    The response will include a `verification` object that describes the result of verifying the commit's signature. The following fields are included in the `verification` object:
    
    These are the possible values for `reason` in the `verification` object:
    
    | Value                    | Description                                                                                                                       |
    | ------------------------ | --------------------------------------------------------------------------------------------------------------------------------- |
    | `expired_key`            | The key that made the signature is expired.                                                                                       |
    | `not_signing_key`        | The "signing" flag is not among the usage flags in the GPG key that made the signature.                                           |
    | `gpgverify_error`        | There was an error communicating with the signature verification service.                                                         |
    | `gpgverify_unavailable`  | The signature verification service is currently unavailable.                                                                      |
    | `unsigned`               | The object does not include a signature.                                                                                          |
    | `unknown_signature_type` | A non-PGP signature was found in the commit.                                                                                      |
    | `no_user`                | No user was associated with the `committer` email address in the commit.                                                          |
    | `unverified_email`       | The `committer` email address in the commit was associated with a user, but the email address is not verified on her/his account. |
    | `bad_email`              | The `committer` email address in the commit is not included in the identities of the PGP key that made the signature.             |
    | `unknown_key`            | The key that made the signature has not been registered with any user's account.                                                  |
    | `malformed_signature`    | There was an error parsing the signature.                                                                                         |
    | `invalid`                | The signature could not be cryptographically verified using the key whose key-id was found in the signature.                      |
    | `valid`                  | None of the above errors applied, so the signature is considered to be verified.                                                  |
    *
    * @param string $owner 
    * @param string $repo 
    * @param string $commitSha commit_sha+ parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Github\Exception\GitGetCommitNotFoundException
    *
    * @return null|\Github\Model\GitCommit|\Psr\Http\Message\ResponseInterface
    */
    public function gitGetCommit(string $owner, string $repo, string $commitSha, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitGetCommit($owner, $repo, $commitSha), $fetch);
    }
    /**
    * The API also allows fetching the source of a single template.
    Use the raw [media type](https://developer.github.com/v3/media/) to get the raw contents.
    *
    * @param string $name name parameter
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Github\Model\GitignoreTemplate|\Psr\Http\Message\ResponseInterface
    */
    public function gitignoreGetTemplate(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitignoreGetTemplate($name), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function gitignoreGetAllTemplates(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Github\Endpoint\GitignoreGetAllTemplates(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.github.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Github\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}