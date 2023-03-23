<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\TeamRepositoryTemplateRepository';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\TeamRepositoryTemplateRepository';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\TeamRepositoryTemplateRepository();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\TeamRepositoryTemplateRepositoryConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\TeamRepositoryTemplateRepositoryOwner', 'json', $context));
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
            $values = array();
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
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\TeamRepositoryTemplateRepositoryPermissions', 'json', $context));
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
            $data['full_name'] = $object->getFullName();
        }
        if ($object->isInitialized('owner') && null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if ($object->isInitialized('private') && null !== $object->getPrivate()) {
            $data['private'] = $object->getPrivate();
        }
        if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('fork') && null !== $object->getFork()) {
            $data['fork'] = $object->getFork();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('archiveUrl') && null !== $object->getArchiveUrl()) {
            $data['archive_url'] = $object->getArchiveUrl();
        }
        if ($object->isInitialized('assigneesUrl') && null !== $object->getAssigneesUrl()) {
            $data['assignees_url'] = $object->getAssigneesUrl();
        }
        if ($object->isInitialized('blobsUrl') && null !== $object->getBlobsUrl()) {
            $data['blobs_url'] = $object->getBlobsUrl();
        }
        if ($object->isInitialized('branchesUrl') && null !== $object->getBranchesUrl()) {
            $data['branches_url'] = $object->getBranchesUrl();
        }
        if ($object->isInitialized('collaboratorsUrl') && null !== $object->getCollaboratorsUrl()) {
            $data['collaborators_url'] = $object->getCollaboratorsUrl();
        }
        if ($object->isInitialized('commentsUrl') && null !== $object->getCommentsUrl()) {
            $data['comments_url'] = $object->getCommentsUrl();
        }
        if ($object->isInitialized('commitsUrl') && null !== $object->getCommitsUrl()) {
            $data['commits_url'] = $object->getCommitsUrl();
        }
        if ($object->isInitialized('compareUrl') && null !== $object->getCompareUrl()) {
            $data['compare_url'] = $object->getCompareUrl();
        }
        if ($object->isInitialized('contentsUrl') && null !== $object->getContentsUrl()) {
            $data['contents_url'] = $object->getContentsUrl();
        }
        if ($object->isInitialized('contributorsUrl') && null !== $object->getContributorsUrl()) {
            $data['contributors_url'] = $object->getContributorsUrl();
        }
        if ($object->isInitialized('deploymentsUrl') && null !== $object->getDeploymentsUrl()) {
            $data['deployments_url'] = $object->getDeploymentsUrl();
        }
        if ($object->isInitialized('downloadsUrl') && null !== $object->getDownloadsUrl()) {
            $data['downloads_url'] = $object->getDownloadsUrl();
        }
        if ($object->isInitialized('eventsUrl') && null !== $object->getEventsUrl()) {
            $data['events_url'] = $object->getEventsUrl();
        }
        if ($object->isInitialized('forksUrl') && null !== $object->getForksUrl()) {
            $data['forks_url'] = $object->getForksUrl();
        }
        if ($object->isInitialized('gitCommitsUrl') && null !== $object->getGitCommitsUrl()) {
            $data['git_commits_url'] = $object->getGitCommitsUrl();
        }
        if ($object->isInitialized('gitRefsUrl') && null !== $object->getGitRefsUrl()) {
            $data['git_refs_url'] = $object->getGitRefsUrl();
        }
        if ($object->isInitialized('gitTagsUrl') && null !== $object->getGitTagsUrl()) {
            $data['git_tags_url'] = $object->getGitTagsUrl();
        }
        if ($object->isInitialized('gitUrl') && null !== $object->getGitUrl()) {
            $data['git_url'] = $object->getGitUrl();
        }
        if ($object->isInitialized('issueCommentUrl') && null !== $object->getIssueCommentUrl()) {
            $data['issue_comment_url'] = $object->getIssueCommentUrl();
        }
        if ($object->isInitialized('issueEventsUrl') && null !== $object->getIssueEventsUrl()) {
            $data['issue_events_url'] = $object->getIssueEventsUrl();
        }
        if ($object->isInitialized('issuesUrl') && null !== $object->getIssuesUrl()) {
            $data['issues_url'] = $object->getIssuesUrl();
        }
        if ($object->isInitialized('keysUrl') && null !== $object->getKeysUrl()) {
            $data['keys_url'] = $object->getKeysUrl();
        }
        if ($object->isInitialized('labelsUrl') && null !== $object->getLabelsUrl()) {
            $data['labels_url'] = $object->getLabelsUrl();
        }
        if ($object->isInitialized('languagesUrl') && null !== $object->getLanguagesUrl()) {
            $data['languages_url'] = $object->getLanguagesUrl();
        }
        if ($object->isInitialized('mergesUrl') && null !== $object->getMergesUrl()) {
            $data['merges_url'] = $object->getMergesUrl();
        }
        if ($object->isInitialized('milestonesUrl') && null !== $object->getMilestonesUrl()) {
            $data['milestones_url'] = $object->getMilestonesUrl();
        }
        if ($object->isInitialized('notificationsUrl') && null !== $object->getNotificationsUrl()) {
            $data['notifications_url'] = $object->getNotificationsUrl();
        }
        if ($object->isInitialized('pullsUrl') && null !== $object->getPullsUrl()) {
            $data['pulls_url'] = $object->getPullsUrl();
        }
        if ($object->isInitialized('releasesUrl') && null !== $object->getReleasesUrl()) {
            $data['releases_url'] = $object->getReleasesUrl();
        }
        if ($object->isInitialized('sshUrl') && null !== $object->getSshUrl()) {
            $data['ssh_url'] = $object->getSshUrl();
        }
        if ($object->isInitialized('stargazersUrl') && null !== $object->getStargazersUrl()) {
            $data['stargazers_url'] = $object->getStargazersUrl();
        }
        if ($object->isInitialized('statusesUrl') && null !== $object->getStatusesUrl()) {
            $data['statuses_url'] = $object->getStatusesUrl();
        }
        if ($object->isInitialized('subscribersUrl') && null !== $object->getSubscribersUrl()) {
            $data['subscribers_url'] = $object->getSubscribersUrl();
        }
        if ($object->isInitialized('subscriptionUrl') && null !== $object->getSubscriptionUrl()) {
            $data['subscription_url'] = $object->getSubscriptionUrl();
        }
        if ($object->isInitialized('tagsUrl') && null !== $object->getTagsUrl()) {
            $data['tags_url'] = $object->getTagsUrl();
        }
        if ($object->isInitialized('teamsUrl') && null !== $object->getTeamsUrl()) {
            $data['teams_url'] = $object->getTeamsUrl();
        }
        if ($object->isInitialized('treesUrl') && null !== $object->getTreesUrl()) {
            $data['trees_url'] = $object->getTreesUrl();
        }
        if ($object->isInitialized('cloneUrl') && null !== $object->getCloneUrl()) {
            $data['clone_url'] = $object->getCloneUrl();
        }
        if ($object->isInitialized('mirrorUrl') && null !== $object->getMirrorUrl()) {
            $data['mirror_url'] = $object->getMirrorUrl();
        }
        if ($object->isInitialized('hooksUrl') && null !== $object->getHooksUrl()) {
            $data['hooks_url'] = $object->getHooksUrl();
        }
        if ($object->isInitialized('svnUrl') && null !== $object->getSvnUrl()) {
            $data['svn_url'] = $object->getSvnUrl();
        }
        if ($object->isInitialized('homepage') && null !== $object->getHomepage()) {
            $data['homepage'] = $object->getHomepage();
        }
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if ($object->isInitialized('forksCount') && null !== $object->getForksCount()) {
            $data['forks_count'] = $object->getForksCount();
        }
        if ($object->isInitialized('stargazersCount') && null !== $object->getStargazersCount()) {
            $data['stargazers_count'] = $object->getStargazersCount();
        }
        if ($object->isInitialized('watchersCount') && null !== $object->getWatchersCount()) {
            $data['watchers_count'] = $object->getWatchersCount();
        }
        if ($object->isInitialized('size') && null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if ($object->isInitialized('defaultBranch') && null !== $object->getDefaultBranch()) {
            $data['default_branch'] = $object->getDefaultBranch();
        }
        if ($object->isInitialized('openIssuesCount') && null !== $object->getOpenIssuesCount()) {
            $data['open_issues_count'] = $object->getOpenIssuesCount();
        }
        if ($object->isInitialized('isTemplate') && null !== $object->getIsTemplate()) {
            $data['is_template'] = $object->getIsTemplate();
        }
        if ($object->isInitialized('topics') && null !== $object->getTopics()) {
            $values = array();
            foreach ($object->getTopics() as $value) {
                $values[] = $value;
            }
            $data['topics'] = $values;
        }
        if ($object->isInitialized('hasIssues') && null !== $object->getHasIssues()) {
            $data['has_issues'] = $object->getHasIssues();
        }
        if ($object->isInitialized('hasProjects') && null !== $object->getHasProjects()) {
            $data['has_projects'] = $object->getHasProjects();
        }
        if ($object->isInitialized('hasWiki') && null !== $object->getHasWiki()) {
            $data['has_wiki'] = $object->getHasWiki();
        }
        if ($object->isInitialized('hasPages') && null !== $object->getHasPages()) {
            $data['has_pages'] = $object->getHasPages();
        }
        if ($object->isInitialized('hasDownloads') && null !== $object->getHasDownloads()) {
            $data['has_downloads'] = $object->getHasDownloads();
        }
        if ($object->isInitialized('archived') && null !== $object->getArchived()) {
            $data['archived'] = $object->getArchived();
        }
        if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        if ($object->isInitialized('pushedAt') && null !== $object->getPushedAt()) {
            $data['pushed_at'] = $object->getPushedAt();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
        }
        if ($object->isInitialized('allowRebaseMerge') && null !== $object->getAllowRebaseMerge()) {
            $data['allow_rebase_merge'] = $object->getAllowRebaseMerge();
        }
        if ($object->isInitialized('templateRepository') && null !== $object->getTemplateRepository()) {
            $data['template_repository'] = $object->getTemplateRepository();
        }
        if ($object->isInitialized('tempCloneToken') && null !== $object->getTempCloneToken()) {
            $data['temp_clone_token'] = $object->getTempCloneToken();
        }
        if ($object->isInitialized('allowSquashMerge') && null !== $object->getAllowSquashMerge()) {
            $data['allow_squash_merge'] = $object->getAllowSquashMerge();
        }
        if ($object->isInitialized('deleteBranchOnMerge') && null !== $object->getDeleteBranchOnMerge()) {
            $data['delete_branch_on_merge'] = $object->getDeleteBranchOnMerge();
        }
        if ($object->isInitialized('allowMergeCommit') && null !== $object->getAllowMergeCommit()) {
            $data['allow_merge_commit'] = $object->getAllowMergeCommit();
        }
        if ($object->isInitialized('subscribersCount') && null !== $object->getSubscribersCount()) {
            $data['subscribers_count'] = $object->getSubscribersCount();
        }
        if ($object->isInitialized('networkCount') && null !== $object->getNetworkCount()) {
            $data['network_count'] = $object->getNetworkCount();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\TeamRepositoryTemplateRepositoryConstraint());
        }
        return $data;
    }
}
