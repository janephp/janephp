<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TeamRepositoryTemplateRepositoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\TeamRepositoryTemplateRepository::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\TeamRepositoryTemplateRepository::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\TeamRepositoryTemplateRepository();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('private', $data) && \is_int($data['private'])) {
            $data['private'] = (bool) $data['private'];
        }
        if (\array_key_exists('fork', $data) && \is_int($data['fork'])) {
            $data['fork'] = (bool) $data['fork'];
        }
        if (\array_key_exists('is_template', $data) && \is_int($data['is_template'])) {
            $data['is_template'] = (bool) $data['is_template'];
        }
        if (\array_key_exists('has_issues', $data) && \is_int($data['has_issues'])) {
            $data['has_issues'] = (bool) $data['has_issues'];
        }
        if (\array_key_exists('has_projects', $data) && \is_int($data['has_projects'])) {
            $data['has_projects'] = (bool) $data['has_projects'];
        }
        if (\array_key_exists('has_wiki', $data) && \is_int($data['has_wiki'])) {
            $data['has_wiki'] = (bool) $data['has_wiki'];
        }
        if (\array_key_exists('has_pages', $data) && \is_int($data['has_pages'])) {
            $data['has_pages'] = (bool) $data['has_pages'];
        }
        if (\array_key_exists('has_downloads', $data) && \is_int($data['has_downloads'])) {
            $data['has_downloads'] = (bool) $data['has_downloads'];
        }
        if (\array_key_exists('archived', $data) && \is_int($data['archived'])) {
            $data['archived'] = (bool) $data['archived'];
        }
        if (\array_key_exists('disabled', $data) && \is_int($data['disabled'])) {
            $data['disabled'] = (bool) $data['disabled'];
        }
        if (\array_key_exists('allow_rebase_merge', $data) && \is_int($data['allow_rebase_merge'])) {
            $data['allow_rebase_merge'] = (bool) $data['allow_rebase_merge'];
        }
        if (\array_key_exists('allow_squash_merge', $data) && \is_int($data['allow_squash_merge'])) {
            $data['allow_squash_merge'] = (bool) $data['allow_squash_merge'];
        }
        if (\array_key_exists('delete_branch_on_merge', $data) && \is_int($data['delete_branch_on_merge'])) {
            $data['delete_branch_on_merge'] = (bool) $data['delete_branch_on_merge'];
        }
        if (\array_key_exists('allow_merge_commit', $data) && \is_int($data['allow_merge_commit'])) {
            $data['allow_merge_commit'] = (bool) $data['allow_merge_commit'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\TeamRepositoryTemplateRepositoryConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
            unset($data['full_name']);
        }
        if (\array_key_exists('owner', $data)) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], \Github\Model\TeamRepositoryTemplateRepositoryOwner::class, 'json', $context));
            unset($data['owner']);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
            unset($data['private']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('fork', $data)) {
            $object->setFork($data['fork']);
            unset($data['fork']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('archive_url', $data)) {
            $object->setArchiveUrl($data['archive_url']);
            unset($data['archive_url']);
        }
        if (\array_key_exists('assignees_url', $data)) {
            $object->setAssigneesUrl($data['assignees_url']);
            unset($data['assignees_url']);
        }
        if (\array_key_exists('blobs_url', $data)) {
            $object->setBlobsUrl($data['blobs_url']);
            unset($data['blobs_url']);
        }
        if (\array_key_exists('branches_url', $data)) {
            $object->setBranchesUrl($data['branches_url']);
            unset($data['branches_url']);
        }
        if (\array_key_exists('collaborators_url', $data)) {
            $object->setCollaboratorsUrl($data['collaborators_url']);
            unset($data['collaborators_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
            unset($data['commits_url']);
        }
        if (\array_key_exists('compare_url', $data)) {
            $object->setCompareUrl($data['compare_url']);
            unset($data['compare_url']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
            unset($data['contents_url']);
        }
        if (\array_key_exists('contributors_url', $data)) {
            $object->setContributorsUrl($data['contributors_url']);
            unset($data['contributors_url']);
        }
        if (\array_key_exists('deployments_url', $data)) {
            $object->setDeploymentsUrl($data['deployments_url']);
            unset($data['deployments_url']);
        }
        if (\array_key_exists('downloads_url', $data)) {
            $object->setDownloadsUrl($data['downloads_url']);
            unset($data['downloads_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
            unset($data['forks_url']);
        }
        if (\array_key_exists('git_commits_url', $data)) {
            $object->setGitCommitsUrl($data['git_commits_url']);
            unset($data['git_commits_url']);
        }
        if (\array_key_exists('git_refs_url', $data)) {
            $object->setGitRefsUrl($data['git_refs_url']);
            unset($data['git_refs_url']);
        }
        if (\array_key_exists('git_tags_url', $data)) {
            $object->setGitTagsUrl($data['git_tags_url']);
            unset($data['git_tags_url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
            unset($data['git_url']);
        }
        if (\array_key_exists('issue_comment_url', $data)) {
            $object->setIssueCommentUrl($data['issue_comment_url']);
            unset($data['issue_comment_url']);
        }
        if (\array_key_exists('issue_events_url', $data)) {
            $object->setIssueEventsUrl($data['issue_events_url']);
            unset($data['issue_events_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
            unset($data['issues_url']);
        }
        if (\array_key_exists('keys_url', $data)) {
            $object->setKeysUrl($data['keys_url']);
            unset($data['keys_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
            unset($data['labels_url']);
        }
        if (\array_key_exists('languages_url', $data)) {
            $object->setLanguagesUrl($data['languages_url']);
            unset($data['languages_url']);
        }
        if (\array_key_exists('merges_url', $data)) {
            $object->setMergesUrl($data['merges_url']);
            unset($data['merges_url']);
        }
        if (\array_key_exists('milestones_url', $data)) {
            $object->setMilestonesUrl($data['milestones_url']);
            unset($data['milestones_url']);
        }
        if (\array_key_exists('notifications_url', $data)) {
            $object->setNotificationsUrl($data['notifications_url']);
            unset($data['notifications_url']);
        }
        if (\array_key_exists('pulls_url', $data)) {
            $object->setPullsUrl($data['pulls_url']);
            unset($data['pulls_url']);
        }
        if (\array_key_exists('releases_url', $data)) {
            $object->setReleasesUrl($data['releases_url']);
            unset($data['releases_url']);
        }
        if (\array_key_exists('ssh_url', $data)) {
            $object->setSshUrl($data['ssh_url']);
            unset($data['ssh_url']);
        }
        if (\array_key_exists('stargazers_url', $data)) {
            $object->setStargazersUrl($data['stargazers_url']);
            unset($data['stargazers_url']);
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
            unset($data['statuses_url']);
        }
        if (\array_key_exists('subscribers_url', $data)) {
            $object->setSubscribersUrl($data['subscribers_url']);
            unset($data['subscribers_url']);
        }
        if (\array_key_exists('subscription_url', $data)) {
            $object->setSubscriptionUrl($data['subscription_url']);
            unset($data['subscription_url']);
        }
        if (\array_key_exists('tags_url', $data)) {
            $object->setTagsUrl($data['tags_url']);
            unset($data['tags_url']);
        }
        if (\array_key_exists('teams_url', $data)) {
            $object->setTeamsUrl($data['teams_url']);
            unset($data['teams_url']);
        }
        if (\array_key_exists('trees_url', $data)) {
            $object->setTreesUrl($data['trees_url']);
            unset($data['trees_url']);
        }
        if (\array_key_exists('clone_url', $data)) {
            $object->setCloneUrl($data['clone_url']);
            unset($data['clone_url']);
        }
        if (\array_key_exists('mirror_url', $data)) {
            $object->setMirrorUrl($data['mirror_url']);
            unset($data['mirror_url']);
        }
        if (\array_key_exists('hooks_url', $data)) {
            $object->setHooksUrl($data['hooks_url']);
            unset($data['hooks_url']);
        }
        if (\array_key_exists('svn_url', $data)) {
            $object->setSvnUrl($data['svn_url']);
            unset($data['svn_url']);
        }
        if (\array_key_exists('homepage', $data)) {
            $object->setHomepage($data['homepage']);
            unset($data['homepage']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('forks_count', $data)) {
            $object->setForksCount($data['forks_count']);
            unset($data['forks_count']);
        }
        if (\array_key_exists('stargazers_count', $data)) {
            $object->setStargazersCount($data['stargazers_count']);
            unset($data['stargazers_count']);
        }
        if (\array_key_exists('watchers_count', $data)) {
            $object->setWatchersCount($data['watchers_count']);
            unset($data['watchers_count']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('default_branch', $data)) {
            $object->setDefaultBranch($data['default_branch']);
            unset($data['default_branch']);
        }
        if (\array_key_exists('open_issues_count', $data)) {
            $object->setOpenIssuesCount($data['open_issues_count']);
            unset($data['open_issues_count']);
        }
        if (\array_key_exists('is_template', $data)) {
            $object->setIsTemplate($data['is_template']);
            unset($data['is_template']);
        }
        if (\array_key_exists('topics', $data)) {
            $values = [];
            foreach ($data['topics'] as $value) {
                $values[] = $value;
            }
            $object->setTopics($values);
            unset($data['topics']);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
            unset($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
            unset($data['has_projects']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
            unset($data['has_wiki']);
        }
        if (\array_key_exists('has_pages', $data)) {
            $object->setHasPages($data['has_pages']);
            unset($data['has_pages']);
        }
        if (\array_key_exists('has_downloads', $data)) {
            $object->setHasDownloads($data['has_downloads']);
            unset($data['has_downloads']);
        }
        if (\array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
            unset($data['archived']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
            unset($data['disabled']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        if (\array_key_exists('pushed_at', $data)) {
            $object->setPushedAt($data['pushed_at']);
            unset($data['pushed_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\TeamRepositoryTemplateRepositoryPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
            unset($data['allow_rebase_merge']);
        }
        if (\array_key_exists('template_repository', $data)) {
            $object->setTemplateRepository($data['template_repository']);
            unset($data['template_repository']);
        }
        if (\array_key_exists('temp_clone_token', $data)) {
            $object->setTempCloneToken($data['temp_clone_token']);
            unset($data['temp_clone_token']);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
            unset($data['allow_squash_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
            unset($data['delete_branch_on_merge']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
            unset($data['allow_merge_commit']);
        }
        if (\array_key_exists('subscribers_count', $data)) {
            $object->setSubscribersCount($data['subscribers_count']);
            unset($data['subscribers_count']);
        }
        if (\array_key_exists('network_count', $data)) {
            $object->setNetworkCount($data['network_count']);
            unset($data['network_count']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('nodeId') && null !== $data->getNodeId()) {
            $dataArray['node_id'] = $data->getNodeId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('fullName') && null !== $data->getFullName()) {
            $dataArray['full_name'] = $data->getFullName();
        }
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $this->normalizer->normalize($data->getOwner(), 'json', $context);
        }
        if ($data->isInitialized('private') && null !== $data->getPrivate()) {
            $dataArray['private'] = $data->getPrivate();
        }
        if ($data->isInitialized('htmlUrl') && null !== $data->getHtmlUrl()) {
            $dataArray['html_url'] = $data->getHtmlUrl();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('fork') && null !== $data->getFork()) {
            $dataArray['fork'] = $data->getFork();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('archiveUrl') && null !== $data->getArchiveUrl()) {
            $dataArray['archive_url'] = $data->getArchiveUrl();
        }
        if ($data->isInitialized('assigneesUrl') && null !== $data->getAssigneesUrl()) {
            $dataArray['assignees_url'] = $data->getAssigneesUrl();
        }
        if ($data->isInitialized('blobsUrl') && null !== $data->getBlobsUrl()) {
            $dataArray['blobs_url'] = $data->getBlobsUrl();
        }
        if ($data->isInitialized('branchesUrl') && null !== $data->getBranchesUrl()) {
            $dataArray['branches_url'] = $data->getBranchesUrl();
        }
        if ($data->isInitialized('collaboratorsUrl') && null !== $data->getCollaboratorsUrl()) {
            $dataArray['collaborators_url'] = $data->getCollaboratorsUrl();
        }
        if ($data->isInitialized('commentsUrl') && null !== $data->getCommentsUrl()) {
            $dataArray['comments_url'] = $data->getCommentsUrl();
        }
        if ($data->isInitialized('commitsUrl') && null !== $data->getCommitsUrl()) {
            $dataArray['commits_url'] = $data->getCommitsUrl();
        }
        if ($data->isInitialized('compareUrl') && null !== $data->getCompareUrl()) {
            $dataArray['compare_url'] = $data->getCompareUrl();
        }
        if ($data->isInitialized('contentsUrl') && null !== $data->getContentsUrl()) {
            $dataArray['contents_url'] = $data->getContentsUrl();
        }
        if ($data->isInitialized('contributorsUrl') && null !== $data->getContributorsUrl()) {
            $dataArray['contributors_url'] = $data->getContributorsUrl();
        }
        if ($data->isInitialized('deploymentsUrl') && null !== $data->getDeploymentsUrl()) {
            $dataArray['deployments_url'] = $data->getDeploymentsUrl();
        }
        if ($data->isInitialized('downloadsUrl') && null !== $data->getDownloadsUrl()) {
            $dataArray['downloads_url'] = $data->getDownloadsUrl();
        }
        if ($data->isInitialized('eventsUrl') && null !== $data->getEventsUrl()) {
            $dataArray['events_url'] = $data->getEventsUrl();
        }
        if ($data->isInitialized('forksUrl') && null !== $data->getForksUrl()) {
            $dataArray['forks_url'] = $data->getForksUrl();
        }
        if ($data->isInitialized('gitCommitsUrl') && null !== $data->getGitCommitsUrl()) {
            $dataArray['git_commits_url'] = $data->getGitCommitsUrl();
        }
        if ($data->isInitialized('gitRefsUrl') && null !== $data->getGitRefsUrl()) {
            $dataArray['git_refs_url'] = $data->getGitRefsUrl();
        }
        if ($data->isInitialized('gitTagsUrl') && null !== $data->getGitTagsUrl()) {
            $dataArray['git_tags_url'] = $data->getGitTagsUrl();
        }
        if ($data->isInitialized('gitUrl') && null !== $data->getGitUrl()) {
            $dataArray['git_url'] = $data->getGitUrl();
        }
        if ($data->isInitialized('issueCommentUrl') && null !== $data->getIssueCommentUrl()) {
            $dataArray['issue_comment_url'] = $data->getIssueCommentUrl();
        }
        if ($data->isInitialized('issueEventsUrl') && null !== $data->getIssueEventsUrl()) {
            $dataArray['issue_events_url'] = $data->getIssueEventsUrl();
        }
        if ($data->isInitialized('issuesUrl') && null !== $data->getIssuesUrl()) {
            $dataArray['issues_url'] = $data->getIssuesUrl();
        }
        if ($data->isInitialized('keysUrl') && null !== $data->getKeysUrl()) {
            $dataArray['keys_url'] = $data->getKeysUrl();
        }
        if ($data->isInitialized('labelsUrl') && null !== $data->getLabelsUrl()) {
            $dataArray['labels_url'] = $data->getLabelsUrl();
        }
        if ($data->isInitialized('languagesUrl') && null !== $data->getLanguagesUrl()) {
            $dataArray['languages_url'] = $data->getLanguagesUrl();
        }
        if ($data->isInitialized('mergesUrl') && null !== $data->getMergesUrl()) {
            $dataArray['merges_url'] = $data->getMergesUrl();
        }
        if ($data->isInitialized('milestonesUrl') && null !== $data->getMilestonesUrl()) {
            $dataArray['milestones_url'] = $data->getMilestonesUrl();
        }
        if ($data->isInitialized('notificationsUrl') && null !== $data->getNotificationsUrl()) {
            $dataArray['notifications_url'] = $data->getNotificationsUrl();
        }
        if ($data->isInitialized('pullsUrl') && null !== $data->getPullsUrl()) {
            $dataArray['pulls_url'] = $data->getPullsUrl();
        }
        if ($data->isInitialized('releasesUrl') && null !== $data->getReleasesUrl()) {
            $dataArray['releases_url'] = $data->getReleasesUrl();
        }
        if ($data->isInitialized('sshUrl') && null !== $data->getSshUrl()) {
            $dataArray['ssh_url'] = $data->getSshUrl();
        }
        if ($data->isInitialized('stargazersUrl') && null !== $data->getStargazersUrl()) {
            $dataArray['stargazers_url'] = $data->getStargazersUrl();
        }
        if ($data->isInitialized('statusesUrl') && null !== $data->getStatusesUrl()) {
            $dataArray['statuses_url'] = $data->getStatusesUrl();
        }
        if ($data->isInitialized('subscribersUrl') && null !== $data->getSubscribersUrl()) {
            $dataArray['subscribers_url'] = $data->getSubscribersUrl();
        }
        if ($data->isInitialized('subscriptionUrl') && null !== $data->getSubscriptionUrl()) {
            $dataArray['subscription_url'] = $data->getSubscriptionUrl();
        }
        if ($data->isInitialized('tagsUrl') && null !== $data->getTagsUrl()) {
            $dataArray['tags_url'] = $data->getTagsUrl();
        }
        if ($data->isInitialized('teamsUrl') && null !== $data->getTeamsUrl()) {
            $dataArray['teams_url'] = $data->getTeamsUrl();
        }
        if ($data->isInitialized('treesUrl') && null !== $data->getTreesUrl()) {
            $dataArray['trees_url'] = $data->getTreesUrl();
        }
        if ($data->isInitialized('cloneUrl') && null !== $data->getCloneUrl()) {
            $dataArray['clone_url'] = $data->getCloneUrl();
        }
        if ($data->isInitialized('mirrorUrl') && null !== $data->getMirrorUrl()) {
            $dataArray['mirror_url'] = $data->getMirrorUrl();
        }
        if ($data->isInitialized('hooksUrl') && null !== $data->getHooksUrl()) {
            $dataArray['hooks_url'] = $data->getHooksUrl();
        }
        if ($data->isInitialized('svnUrl') && null !== $data->getSvnUrl()) {
            $dataArray['svn_url'] = $data->getSvnUrl();
        }
        if ($data->isInitialized('homepage') && null !== $data->getHomepage()) {
            $dataArray['homepage'] = $data->getHomepage();
        }
        if ($data->isInitialized('language') && null !== $data->getLanguage()) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('forksCount') && null !== $data->getForksCount()) {
            $dataArray['forks_count'] = $data->getForksCount();
        }
        if ($data->isInitialized('stargazersCount') && null !== $data->getStargazersCount()) {
            $dataArray['stargazers_count'] = $data->getStargazersCount();
        }
        if ($data->isInitialized('watchersCount') && null !== $data->getWatchersCount()) {
            $dataArray['watchers_count'] = $data->getWatchersCount();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('defaultBranch') && null !== $data->getDefaultBranch()) {
            $dataArray['default_branch'] = $data->getDefaultBranch();
        }
        if ($data->isInitialized('openIssuesCount') && null !== $data->getOpenIssuesCount()) {
            $dataArray['open_issues_count'] = $data->getOpenIssuesCount();
        }
        if ($data->isInitialized('isTemplate') && null !== $data->getIsTemplate()) {
            $dataArray['is_template'] = $data->getIsTemplate();
        }
        if ($data->isInitialized('topics') && null !== $data->getTopics()) {
            $values = [];
            foreach ($data->getTopics() as $value) {
                $values[] = $value;
            }
            $dataArray['topics'] = $values;
        }
        if ($data->isInitialized('hasIssues') && null !== $data->getHasIssues()) {
            $dataArray['has_issues'] = $data->getHasIssues();
        }
        if ($data->isInitialized('hasProjects') && null !== $data->getHasProjects()) {
            $dataArray['has_projects'] = $data->getHasProjects();
        }
        if ($data->isInitialized('hasWiki') && null !== $data->getHasWiki()) {
            $dataArray['has_wiki'] = $data->getHasWiki();
        }
        if ($data->isInitialized('hasPages') && null !== $data->getHasPages()) {
            $dataArray['has_pages'] = $data->getHasPages();
        }
        if ($data->isInitialized('hasDownloads') && null !== $data->getHasDownloads()) {
            $dataArray['has_downloads'] = $data->getHasDownloads();
        }
        if ($data->isInitialized('archived') && null !== $data->getArchived()) {
            $dataArray['archived'] = $data->getArchived();
        }
        if ($data->isInitialized('disabled') && null !== $data->getDisabled()) {
            $dataArray['disabled'] = $data->getDisabled();
        }
        if ($data->isInitialized('visibility') && null !== $data->getVisibility()) {
            $dataArray['visibility'] = $data->getVisibility();
        }
        if ($data->isInitialized('pushedAt') && null !== $data->getPushedAt()) {
            $dataArray['pushed_at'] = $data->getPushedAt();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        }
        if ($data->isInitialized('allowRebaseMerge') && null !== $data->getAllowRebaseMerge()) {
            $dataArray['allow_rebase_merge'] = $data->getAllowRebaseMerge();
        }
        if ($data->isInitialized('templateRepository') && null !== $data->getTemplateRepository()) {
            $dataArray['template_repository'] = $data->getTemplateRepository();
        }
        if ($data->isInitialized('tempCloneToken') && null !== $data->getTempCloneToken()) {
            $dataArray['temp_clone_token'] = $data->getTempCloneToken();
        }
        if ($data->isInitialized('allowSquashMerge') && null !== $data->getAllowSquashMerge()) {
            $dataArray['allow_squash_merge'] = $data->getAllowSquashMerge();
        }
        if ($data->isInitialized('deleteBranchOnMerge') && null !== $data->getDeleteBranchOnMerge()) {
            $dataArray['delete_branch_on_merge'] = $data->getDeleteBranchOnMerge();
        }
        if ($data->isInitialized('allowMergeCommit') && null !== $data->getAllowMergeCommit()) {
            $dataArray['allow_merge_commit'] = $data->getAllowMergeCommit();
        }
        if ($data->isInitialized('subscribersCount') && null !== $data->getSubscribersCount()) {
            $dataArray['subscribers_count'] = $data->getSubscribersCount();
        }
        if ($data->isInitialized('networkCount') && null !== $data->getNetworkCount()) {
            $dataArray['network_count'] = $data->getNetworkCount();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\TeamRepositoryTemplateRepositoryConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\TeamRepositoryTemplateRepository::class => false];
    }
}