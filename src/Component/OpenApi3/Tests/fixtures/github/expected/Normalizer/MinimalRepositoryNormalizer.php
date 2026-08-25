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
class MinimalRepositoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\MinimalRepository::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\MinimalRepository::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\MinimalRepository();
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
        if (\array_key_exists('delete_branch_on_merge', $data) && \is_int($data['delete_branch_on_merge'])) {
            $data['delete_branch_on_merge'] = (bool) $data['delete_branch_on_merge'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\MinimalRepositoryConstraint());
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
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], \Github\Model\MinimalRepositoryOwner::class, 'json', $context));
            unset($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
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
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
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
        if (\array_key_exists('mirror_url', $data) && $data['mirror_url'] !== null) {
            $object->setMirrorUrl($data['mirror_url']);
            unset($data['mirror_url']);
        }
        elseif (\array_key_exists('mirror_url', $data) && $data['mirror_url'] === null) {
            $object->setMirrorUrl(null);
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
        if (\array_key_exists('homepage', $data) && $data['homepage'] !== null) {
            $object->setHomepage($data['homepage']);
            unset($data['homepage']);
        }
        elseif (\array_key_exists('homepage', $data) && $data['homepage'] === null) {
            $object->setHomepage(null);
            unset($data['homepage']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
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
        if (\array_key_exists('pushed_at', $data) && $data['pushed_at'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['pushed_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['pushed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setPushedAt($date);
            unset($data['pushed_at']);
        }
        elseif (\array_key_exists('pushed_at', $data) && $data['pushed_at'] === null) {
            $object->setPushedAt(null);
            unset($data['pushed_at']);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date_1);
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_2);
            unset($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
            unset($data['updated_at']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\MinimalRepositoryPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('template_repository', $data)) {
            $object->setTemplateRepository($data['template_repository']);
            unset($data['template_repository']);
        }
        if (\array_key_exists('temp_clone_token', $data)) {
            $object->setTempCloneToken($data['temp_clone_token']);
            unset($data['temp_clone_token']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
            unset($data['delete_branch_on_merge']);
        }
        if (\array_key_exists('subscribers_count', $data)) {
            $object->setSubscribersCount($data['subscribers_count']);
            unset($data['subscribers_count']);
        }
        if (\array_key_exists('network_count', $data)) {
            $object->setNetworkCount($data['network_count']);
            unset($data['network_count']);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], \Github\Model\MinimalRepositoryLicense::class, 'json', $context));
            unset($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
            unset($data['license']);
        }
        if (\array_key_exists('forks', $data)) {
            $object->setForks($data['forks']);
            unset($data['forks']);
        }
        if (\array_key_exists('open_issues', $data)) {
            $object->setOpenIssues($data['open_issues']);
            unset($data['open_issues']);
        }
        if (\array_key_exists('watchers', $data)) {
            $object->setWatchers($data['watchers']);
            unset($data['watchers']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['name'] = $data->getName();
        $dataArray['full_name'] = $data->getFullName();
        $dataArray['owner'] = $data->getOwner() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getOwner(), 'json', $context));
        $dataArray['private'] = $data->getPrivate();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['description'] = $data->getDescription();
        $dataArray['fork'] = $data->getFork();
        $dataArray['url'] = $data->getUrl();
        $dataArray['archive_url'] = $data->getArchiveUrl();
        $dataArray['assignees_url'] = $data->getAssigneesUrl();
        $dataArray['blobs_url'] = $data->getBlobsUrl();
        $dataArray['branches_url'] = $data->getBranchesUrl();
        $dataArray['collaborators_url'] = $data->getCollaboratorsUrl();
        $dataArray['comments_url'] = $data->getCommentsUrl();
        $dataArray['commits_url'] = $data->getCommitsUrl();
        $dataArray['compare_url'] = $data->getCompareUrl();
        $dataArray['contents_url'] = $data->getContentsUrl();
        $dataArray['contributors_url'] = $data->getContributorsUrl();
        $dataArray['deployments_url'] = $data->getDeploymentsUrl();
        $dataArray['downloads_url'] = $data->getDownloadsUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['forks_url'] = $data->getForksUrl();
        $dataArray['git_commits_url'] = $data->getGitCommitsUrl();
        $dataArray['git_refs_url'] = $data->getGitRefsUrl();
        $dataArray['git_tags_url'] = $data->getGitTagsUrl();
        if ($data->isInitialized('gitUrl') && null !== $data->getGitUrl()) {
            $dataArray['git_url'] = $data->getGitUrl();
        }
        $dataArray['issue_comment_url'] = $data->getIssueCommentUrl();
        $dataArray['issue_events_url'] = $data->getIssueEventsUrl();
        $dataArray['issues_url'] = $data->getIssuesUrl();
        $dataArray['keys_url'] = $data->getKeysUrl();
        $dataArray['labels_url'] = $data->getLabelsUrl();
        $dataArray['languages_url'] = $data->getLanguagesUrl();
        $dataArray['merges_url'] = $data->getMergesUrl();
        $dataArray['milestones_url'] = $data->getMilestonesUrl();
        $dataArray['notifications_url'] = $data->getNotificationsUrl();
        $dataArray['pulls_url'] = $data->getPullsUrl();
        $dataArray['releases_url'] = $data->getReleasesUrl();
        if ($data->isInitialized('sshUrl') && null !== $data->getSshUrl()) {
            $dataArray['ssh_url'] = $data->getSshUrl();
        }
        $dataArray['stargazers_url'] = $data->getStargazersUrl();
        $dataArray['statuses_url'] = $data->getStatusesUrl();
        $dataArray['subscribers_url'] = $data->getSubscribersUrl();
        $dataArray['subscription_url'] = $data->getSubscriptionUrl();
        $dataArray['tags_url'] = $data->getTagsUrl();
        $dataArray['teams_url'] = $data->getTeamsUrl();
        $dataArray['trees_url'] = $data->getTreesUrl();
        if ($data->isInitialized('cloneUrl') && null !== $data->getCloneUrl()) {
            $dataArray['clone_url'] = $data->getCloneUrl();
        }
        if ($data->isInitialized('mirrorUrl') && null !== $data->getMirrorUrl()) {
            $dataArray['mirror_url'] = $data->getMirrorUrl();
        }
        $dataArray['hooks_url'] = $data->getHooksUrl();
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
            $dataArray['pushed_at'] = $data->getPushedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $data->getPermissions() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPermissions(), 'json', $context));
        }
        if ($data->isInitialized('templateRepository') && null !== $data->getTemplateRepository()) {
            $dataArray['template_repository'] = $data->getTemplateRepository();
        }
        if ($data->isInitialized('tempCloneToken') && null !== $data->getTempCloneToken()) {
            $dataArray['temp_clone_token'] = $data->getTempCloneToken();
        }
        if ($data->isInitialized('deleteBranchOnMerge') && null !== $data->getDeleteBranchOnMerge()) {
            $dataArray['delete_branch_on_merge'] = $data->getDeleteBranchOnMerge();
        }
        if ($data->isInitialized('subscribersCount') && null !== $data->getSubscribersCount()) {
            $dataArray['subscribers_count'] = $data->getSubscribersCount();
        }
        if ($data->isInitialized('networkCount') && null !== $data->getNetworkCount()) {
            $dataArray['network_count'] = $data->getNetworkCount();
        }
        if ($data->isInitialized('license') && null !== $data->getLicense()) {
            $dataArray['license'] = $data->getLicense() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getLicense(), 'json', $context));
        }
        if ($data->isInitialized('forks') && null !== $data->getForks()) {
            $dataArray['forks'] = $data->getForks();
        }
        if ($data->isInitialized('openIssues') && null !== $data->getOpenIssues()) {
            $dataArray['open_issues'] = $data->getOpenIssues();
        }
        if ($data->isInitialized('watchers') && null !== $data->getWatchers()) {
            $dataArray['watchers'] = $data->getWatchers();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\MinimalRepositoryConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\MinimalRepository::class => false];
    }
}