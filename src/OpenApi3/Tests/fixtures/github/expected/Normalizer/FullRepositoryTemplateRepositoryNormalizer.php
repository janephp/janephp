<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FullRepositoryTemplateRepositoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\FullRepositoryTemplateRepository';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\FullRepositoryTemplateRepository';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\FullRepositoryTemplateRepository();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], 'Github\\Model\\RepositoryLicense', 'json', $context));
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('forks', $data)) {
            $object->setForks($data['forks']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\RepositoryPermissions', 'json', $context));
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\RepositoryOwner', 'json', $context));
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('private', $data)) {
            $object->setPrivate($data['private']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('fork', $data)) {
            $object->setFork($data['fork']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('archive_url', $data)) {
            $object->setArchiveUrl($data['archive_url']);
        }
        if (\array_key_exists('assignees_url', $data)) {
            $object->setAssigneesUrl($data['assignees_url']);
        }
        if (\array_key_exists('blobs_url', $data)) {
            $object->setBlobsUrl($data['blobs_url']);
        }
        if (\array_key_exists('branches_url', $data)) {
            $object->setBranchesUrl($data['branches_url']);
        }
        if (\array_key_exists('collaborators_url', $data)) {
            $object->setCollaboratorsUrl($data['collaborators_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
        }
        if (\array_key_exists('compare_url', $data)) {
            $object->setCompareUrl($data['compare_url']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
        }
        if (\array_key_exists('contributors_url', $data)) {
            $object->setContributorsUrl($data['contributors_url']);
        }
        if (\array_key_exists('deployments_url', $data)) {
            $object->setDeploymentsUrl($data['deployments_url']);
        }
        if (\array_key_exists('downloads_url', $data)) {
            $object->setDownloadsUrl($data['downloads_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
        }
        if (\array_key_exists('git_commits_url', $data)) {
            $object->setGitCommitsUrl($data['git_commits_url']);
        }
        if (\array_key_exists('git_refs_url', $data)) {
            $object->setGitRefsUrl($data['git_refs_url']);
        }
        if (\array_key_exists('git_tags_url', $data)) {
            $object->setGitTagsUrl($data['git_tags_url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
        }
        if (\array_key_exists('issue_comment_url', $data)) {
            $object->setIssueCommentUrl($data['issue_comment_url']);
        }
        if (\array_key_exists('issue_events_url', $data)) {
            $object->setIssueEventsUrl($data['issue_events_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
        }
        if (\array_key_exists('keys_url', $data)) {
            $object->setKeysUrl($data['keys_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
        }
        if (\array_key_exists('languages_url', $data)) {
            $object->setLanguagesUrl($data['languages_url']);
        }
        if (\array_key_exists('merges_url', $data)) {
            $object->setMergesUrl($data['merges_url']);
        }
        if (\array_key_exists('milestones_url', $data)) {
            $object->setMilestonesUrl($data['milestones_url']);
        }
        if (\array_key_exists('notifications_url', $data)) {
            $object->setNotificationsUrl($data['notifications_url']);
        }
        if (\array_key_exists('pulls_url', $data)) {
            $object->setPullsUrl($data['pulls_url']);
        }
        if (\array_key_exists('releases_url', $data)) {
            $object->setReleasesUrl($data['releases_url']);
        }
        if (\array_key_exists('ssh_url', $data)) {
            $object->setSshUrl($data['ssh_url']);
        }
        if (\array_key_exists('stargazers_url', $data)) {
            $object->setStargazersUrl($data['stargazers_url']);
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
        }
        if (\array_key_exists('subscribers_url', $data)) {
            $object->setSubscribersUrl($data['subscribers_url']);
        }
        if (\array_key_exists('subscription_url', $data)) {
            $object->setSubscriptionUrl($data['subscription_url']);
        }
        if (\array_key_exists('tags_url', $data)) {
            $object->setTagsUrl($data['tags_url']);
        }
        if (\array_key_exists('teams_url', $data)) {
            $object->setTeamsUrl($data['teams_url']);
        }
        if (\array_key_exists('trees_url', $data)) {
            $object->setTreesUrl($data['trees_url']);
        }
        if (\array_key_exists('clone_url', $data)) {
            $object->setCloneUrl($data['clone_url']);
        }
        if (\array_key_exists('mirror_url', $data) && $data['mirror_url'] !== null) {
            $object->setMirrorUrl($data['mirror_url']);
        }
        elseif (\array_key_exists('mirror_url', $data) && $data['mirror_url'] === null) {
            $object->setMirrorUrl(null);
        }
        if (\array_key_exists('hooks_url', $data)) {
            $object->setHooksUrl($data['hooks_url']);
        }
        if (\array_key_exists('svn_url', $data)) {
            $object->setSvnUrl($data['svn_url']);
        }
        if (\array_key_exists('homepage', $data) && $data['homepage'] !== null) {
            $object->setHomepage($data['homepage']);
        }
        elseif (\array_key_exists('homepage', $data) && $data['homepage'] === null) {
            $object->setHomepage(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('forks_count', $data)) {
            $object->setForksCount($data['forks_count']);
        }
        if (\array_key_exists('stargazers_count', $data)) {
            $object->setStargazersCount($data['stargazers_count']);
        }
        if (\array_key_exists('watchers_count', $data)) {
            $object->setWatchersCount($data['watchers_count']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
        }
        if (\array_key_exists('default_branch', $data)) {
            $object->setDefaultBranch($data['default_branch']);
        }
        if (\array_key_exists('open_issues_count', $data)) {
            $object->setOpenIssuesCount($data['open_issues_count']);
        }
        if (\array_key_exists('is_template', $data)) {
            $object->setIsTemplate($data['is_template']);
        }
        if (\array_key_exists('topics', $data)) {
            $values = array();
            foreach ($data['topics'] as $value) {
                $values[] = $value;
            }
            $object->setTopics($values);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
        }
        if (\array_key_exists('has_pages', $data)) {
            $object->setHasPages($data['has_pages']);
        }
        if (\array_key_exists('has_downloads', $data)) {
            $object->setHasDownloads($data['has_downloads']);
        }
        if (\array_key_exists('archived', $data)) {
            $object->setArchived($data['archived']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
        }
        if (\array_key_exists('pushed_at', $data) && $data['pushed_at'] !== null) {
            $object->setPushedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['pushed_at']));
        }
        elseif (\array_key_exists('pushed_at', $data) && $data['pushed_at'] === null) {
            $object->setPushedAt(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
        }
        if (\array_key_exists('template_repository', $data) && $data['template_repository'] !== null) {
            $object->setTemplateRepository($this->denormalizer->denormalize($data['template_repository'], 'Github\\Model\\RepositoryTemplateRepository', 'json', $context));
        }
        elseif (\array_key_exists('template_repository', $data) && $data['template_repository'] === null) {
            $object->setTemplateRepository(null);
        }
        if (\array_key_exists('temp_clone_token', $data)) {
            $object->setTempCloneToken($data['temp_clone_token']);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
        }
        if (\array_key_exists('subscribers_count', $data)) {
            $object->setSubscribersCount($data['subscribers_count']);
        }
        if (\array_key_exists('network_count', $data)) {
            $object->setNetworkCount($data['network_count']);
        }
        if (\array_key_exists('open_issues', $data)) {
            $object->setOpenIssues($data['open_issues']);
        }
        if (\array_key_exists('watchers', $data)) {
            $object->setWatchers($data['watchers']);
        }
        if (\array_key_exists('master_branch', $data)) {
            $object->setMasterBranch($data['master_branch']);
        }
        if (\array_key_exists('starred_at', $data)) {
            $object->setStarredAt($data['starred_at']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['name'] = $object->getName();
        $data['full_name'] = $object->getFullName();
        $data['license'] = $this->normalizer->normalize($object->getLicense(), 'json', $context);
        $data['forks'] = $object->getForks();
        if (null !== $object->getPermissions()) {
            $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
        }
        $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        $data['private'] = $object->getPrivate();
        $data['html_url'] = $object->getHtmlUrl();
        $data['description'] = $object->getDescription();
        $data['fork'] = $object->getFork();
        $data['url'] = $object->getUrl();
        $data['archive_url'] = $object->getArchiveUrl();
        $data['assignees_url'] = $object->getAssigneesUrl();
        $data['blobs_url'] = $object->getBlobsUrl();
        $data['branches_url'] = $object->getBranchesUrl();
        $data['collaborators_url'] = $object->getCollaboratorsUrl();
        $data['comments_url'] = $object->getCommentsUrl();
        $data['commits_url'] = $object->getCommitsUrl();
        $data['compare_url'] = $object->getCompareUrl();
        $data['contents_url'] = $object->getContentsUrl();
        $data['contributors_url'] = $object->getContributorsUrl();
        $data['deployments_url'] = $object->getDeploymentsUrl();
        $data['downloads_url'] = $object->getDownloadsUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['forks_url'] = $object->getForksUrl();
        $data['git_commits_url'] = $object->getGitCommitsUrl();
        $data['git_refs_url'] = $object->getGitRefsUrl();
        $data['git_tags_url'] = $object->getGitTagsUrl();
        $data['git_url'] = $object->getGitUrl();
        $data['issue_comment_url'] = $object->getIssueCommentUrl();
        $data['issue_events_url'] = $object->getIssueEventsUrl();
        $data['issues_url'] = $object->getIssuesUrl();
        $data['keys_url'] = $object->getKeysUrl();
        $data['labels_url'] = $object->getLabelsUrl();
        $data['languages_url'] = $object->getLanguagesUrl();
        $data['merges_url'] = $object->getMergesUrl();
        $data['milestones_url'] = $object->getMilestonesUrl();
        $data['notifications_url'] = $object->getNotificationsUrl();
        $data['pulls_url'] = $object->getPullsUrl();
        $data['releases_url'] = $object->getReleasesUrl();
        $data['ssh_url'] = $object->getSshUrl();
        $data['stargazers_url'] = $object->getStargazersUrl();
        $data['statuses_url'] = $object->getStatusesUrl();
        $data['subscribers_url'] = $object->getSubscribersUrl();
        $data['subscription_url'] = $object->getSubscriptionUrl();
        $data['tags_url'] = $object->getTagsUrl();
        $data['teams_url'] = $object->getTeamsUrl();
        $data['trees_url'] = $object->getTreesUrl();
        $data['clone_url'] = $object->getCloneUrl();
        $data['mirror_url'] = $object->getMirrorUrl();
        $data['hooks_url'] = $object->getHooksUrl();
        $data['svn_url'] = $object->getSvnUrl();
        $data['homepage'] = $object->getHomepage();
        $data['language'] = $object->getLanguage();
        $data['forks_count'] = $object->getForksCount();
        $data['stargazers_count'] = $object->getStargazersCount();
        $data['watchers_count'] = $object->getWatchersCount();
        $data['size'] = $object->getSize();
        $data['default_branch'] = $object->getDefaultBranch();
        $data['open_issues_count'] = $object->getOpenIssuesCount();
        if (null !== $object->getIsTemplate()) {
            $data['is_template'] = $object->getIsTemplate();
        }
        if (null !== $object->getTopics()) {
            $values = array();
            foreach ($object->getTopics() as $value) {
                $values[] = $value;
            }
            $data['topics'] = $values;
        }
        $data['has_issues'] = $object->getHasIssues();
        $data['has_projects'] = $object->getHasProjects();
        $data['has_wiki'] = $object->getHasWiki();
        $data['has_pages'] = $object->getHasPages();
        $data['has_downloads'] = $object->getHasDownloads();
        $data['archived'] = $object->getArchived();
        $data['disabled'] = $object->getDisabled();
        if (null !== $object->getVisibility()) {
            $data['visibility'] = $object->getVisibility();
        }
        $data['pushed_at'] = $object->getPushedAt()->format('Y-m-d\\TH:i:sP');
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getAllowRebaseMerge()) {
            $data['allow_rebase_merge'] = $object->getAllowRebaseMerge();
        }
        if (null !== $object->getTemplateRepository()) {
            $data['template_repository'] = $this->normalizer->normalize($object->getTemplateRepository(), 'json', $context);
        }
        if (null !== $object->getTempCloneToken()) {
            $data['temp_clone_token'] = $object->getTempCloneToken();
        }
        if (null !== $object->getAllowSquashMerge()) {
            $data['allow_squash_merge'] = $object->getAllowSquashMerge();
        }
        if (null !== $object->getDeleteBranchOnMerge()) {
            $data['delete_branch_on_merge'] = $object->getDeleteBranchOnMerge();
        }
        if (null !== $object->getAllowMergeCommit()) {
            $data['allow_merge_commit'] = $object->getAllowMergeCommit();
        }
        if (null !== $object->getSubscribersCount()) {
            $data['subscribers_count'] = $object->getSubscribersCount();
        }
        if (null !== $object->getNetworkCount()) {
            $data['network_count'] = $object->getNetworkCount();
        }
        $data['open_issues'] = $object->getOpenIssues();
        $data['watchers'] = $object->getWatchers();
        if (null !== $object->getMasterBranch()) {
            $data['master_branch'] = $object->getMasterBranch();
        }
        if (null !== $object->getStarredAt()) {
            $data['starred_at'] = $object->getStarredAt();
        }
        return $data;
    }
}