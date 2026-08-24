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
class RepoSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\RepoSearchResultItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\RepoSearchResultItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\RepoSearchResultItem();
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
        if (\array_key_exists('has_issues', $data) && \is_int($data['has_issues'])) {
            $data['has_issues'] = (bool) $data['has_issues'];
        }
        if (\array_key_exists('has_projects', $data) && \is_int($data['has_projects'])) {
            $data['has_projects'] = (bool) $data['has_projects'];
        }
        if (\array_key_exists('has_pages', $data) && \is_int($data['has_pages'])) {
            $data['has_pages'] = (bool) $data['has_pages'];
        }
        if (\array_key_exists('has_wiki', $data) && \is_int($data['has_wiki'])) {
            $data['has_wiki'] = (bool) $data['has_wiki'];
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
        if (\array_key_exists('allow_merge_commit', $data) && \is_int($data['allow_merge_commit'])) {
            $data['allow_merge_commit'] = (bool) $data['allow_merge_commit'];
        }
        if (\array_key_exists('allow_squash_merge', $data) && \is_int($data['allow_squash_merge'])) {
            $data['allow_squash_merge'] = (bool) $data['allow_squash_merge'];
        }
        if (\array_key_exists('allow_rebase_merge', $data) && \is_int($data['allow_rebase_merge'])) {
            $data['allow_rebase_merge'] = (bool) $data['allow_rebase_merge'];
        }
        if (\array_key_exists('delete_branch_on_merge', $data) && \is_int($data['delete_branch_on_merge'])) {
            $data['delete_branch_on_merge'] = (bool) $data['delete_branch_on_merge'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RepoSearchResultItemConstraint());
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
            $object->setOwner($this->denormalizer->denormalize($data['owner'], \Github\Model\RepoSearchResultItemOwner::class, 'json', $context));
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
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_1);
            unset($data['updated_at']);
        }
        if (\array_key_exists('pushed_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['pushed_at']);
            if (false === $date_2) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['pushed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setPushedAt($date_2);
            unset($data['pushed_at']);
        }
        if (\array_key_exists('homepage', $data) && $data['homepage'] !== null) {
            $object->setHomepage($data['homepage']);
            unset($data['homepage']);
        }
        elseif (\array_key_exists('homepage', $data) && $data['homepage'] === null) {
            $object->setHomepage(null);
            unset($data['homepage']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('stargazers_count', $data)) {
            $object->setStargazersCount($data['stargazers_count']);
            unset($data['stargazers_count']);
        }
        if (\array_key_exists('watchers_count', $data)) {
            $object->setWatchersCount($data['watchers_count']);
            unset($data['watchers_count']);
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
        if (\array_key_exists('open_issues_count', $data)) {
            $object->setOpenIssuesCount($data['open_issues_count']);
            unset($data['open_issues_count']);
        }
        if (\array_key_exists('master_branch', $data)) {
            $object->setMasterBranch($data['master_branch']);
            unset($data['master_branch']);
        }
        if (\array_key_exists('default_branch', $data)) {
            $object->setDefaultBranch($data['default_branch']);
            unset($data['default_branch']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
            unset($data['forks_url']);
        }
        if (\array_key_exists('keys_url', $data)) {
            $object->setKeysUrl($data['keys_url']);
            unset($data['keys_url']);
        }
        if (\array_key_exists('collaborators_url', $data)) {
            $object->setCollaboratorsUrl($data['collaborators_url']);
            unset($data['collaborators_url']);
        }
        if (\array_key_exists('teams_url', $data)) {
            $object->setTeamsUrl($data['teams_url']);
            unset($data['teams_url']);
        }
        if (\array_key_exists('hooks_url', $data)) {
            $object->setHooksUrl($data['hooks_url']);
            unset($data['hooks_url']);
        }
        if (\array_key_exists('issue_events_url', $data)) {
            $object->setIssueEventsUrl($data['issue_events_url']);
            unset($data['issue_events_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('assignees_url', $data)) {
            $object->setAssigneesUrl($data['assignees_url']);
            unset($data['assignees_url']);
        }
        if (\array_key_exists('branches_url', $data)) {
            $object->setBranchesUrl($data['branches_url']);
            unset($data['branches_url']);
        }
        if (\array_key_exists('tags_url', $data)) {
            $object->setTagsUrl($data['tags_url']);
            unset($data['tags_url']);
        }
        if (\array_key_exists('blobs_url', $data)) {
            $object->setBlobsUrl($data['blobs_url']);
            unset($data['blobs_url']);
        }
        if (\array_key_exists('git_tags_url', $data)) {
            $object->setGitTagsUrl($data['git_tags_url']);
            unset($data['git_tags_url']);
        }
        if (\array_key_exists('git_refs_url', $data)) {
            $object->setGitRefsUrl($data['git_refs_url']);
            unset($data['git_refs_url']);
        }
        if (\array_key_exists('trees_url', $data)) {
            $object->setTreesUrl($data['trees_url']);
            unset($data['trees_url']);
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
            unset($data['statuses_url']);
        }
        if (\array_key_exists('languages_url', $data)) {
            $object->setLanguagesUrl($data['languages_url']);
            unset($data['languages_url']);
        }
        if (\array_key_exists('stargazers_url', $data)) {
            $object->setStargazersUrl($data['stargazers_url']);
            unset($data['stargazers_url']);
        }
        if (\array_key_exists('contributors_url', $data)) {
            $object->setContributorsUrl($data['contributors_url']);
            unset($data['contributors_url']);
        }
        if (\array_key_exists('subscribers_url', $data)) {
            $object->setSubscribersUrl($data['subscribers_url']);
            unset($data['subscribers_url']);
        }
        if (\array_key_exists('subscription_url', $data)) {
            $object->setSubscriptionUrl($data['subscription_url']);
            unset($data['subscription_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
            unset($data['commits_url']);
        }
        if (\array_key_exists('git_commits_url', $data)) {
            $object->setGitCommitsUrl($data['git_commits_url']);
            unset($data['git_commits_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('issue_comment_url', $data)) {
            $object->setIssueCommentUrl($data['issue_comment_url']);
            unset($data['issue_comment_url']);
        }
        if (\array_key_exists('contents_url', $data)) {
            $object->setContentsUrl($data['contents_url']);
            unset($data['contents_url']);
        }
        if (\array_key_exists('compare_url', $data)) {
            $object->setCompareUrl($data['compare_url']);
            unset($data['compare_url']);
        }
        if (\array_key_exists('merges_url', $data)) {
            $object->setMergesUrl($data['merges_url']);
            unset($data['merges_url']);
        }
        if (\array_key_exists('archive_url', $data)) {
            $object->setArchiveUrl($data['archive_url']);
            unset($data['archive_url']);
        }
        if (\array_key_exists('downloads_url', $data)) {
            $object->setDownloadsUrl($data['downloads_url']);
            unset($data['downloads_url']);
        }
        if (\array_key_exists('issues_url', $data)) {
            $object->setIssuesUrl($data['issues_url']);
            unset($data['issues_url']);
        }
        if (\array_key_exists('pulls_url', $data)) {
            $object->setPullsUrl($data['pulls_url']);
            unset($data['pulls_url']);
        }
        if (\array_key_exists('milestones_url', $data)) {
            $object->setMilestonesUrl($data['milestones_url']);
            unset($data['milestones_url']);
        }
        if (\array_key_exists('notifications_url', $data)) {
            $object->setNotificationsUrl($data['notifications_url']);
            unset($data['notifications_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
            unset($data['labels_url']);
        }
        if (\array_key_exists('releases_url', $data)) {
            $object->setReleasesUrl($data['releases_url']);
            unset($data['releases_url']);
        }
        if (\array_key_exists('deployments_url', $data)) {
            $object->setDeploymentsUrl($data['deployments_url']);
            unset($data['deployments_url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
            unset($data['git_url']);
        }
        if (\array_key_exists('ssh_url', $data)) {
            $object->setSshUrl($data['ssh_url']);
            unset($data['ssh_url']);
        }
        if (\array_key_exists('clone_url', $data)) {
            $object->setCloneUrl($data['clone_url']);
            unset($data['clone_url']);
        }
        if (\array_key_exists('svn_url', $data)) {
            $object->setSvnUrl($data['svn_url']);
            unset($data['svn_url']);
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
        if (\array_key_exists('topics', $data)) {
            $values = [];
            foreach ($data['topics'] as $value) {
                $values[] = $value;
            }
            $object->setTopics($values);
            unset($data['topics']);
        }
        if (\array_key_exists('mirror_url', $data) && $data['mirror_url'] !== null) {
            $object->setMirrorUrl($data['mirror_url']);
            unset($data['mirror_url']);
        }
        elseif (\array_key_exists('mirror_url', $data) && $data['mirror_url'] === null) {
            $object->setMirrorUrl(null);
            unset($data['mirror_url']);
        }
        if (\array_key_exists('has_issues', $data)) {
            $object->setHasIssues($data['has_issues']);
            unset($data['has_issues']);
        }
        if (\array_key_exists('has_projects', $data)) {
            $object->setHasProjects($data['has_projects']);
            unset($data['has_projects']);
        }
        if (\array_key_exists('has_pages', $data)) {
            $object->setHasPages($data['has_pages']);
            unset($data['has_pages']);
        }
        if (\array_key_exists('has_wiki', $data)) {
            $object->setHasWiki($data['has_wiki']);
            unset($data['has_wiki']);
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
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], \Github\Model\RepoSearchResultItemLicense::class, 'json', $context));
            unset($data['license']);
        }
        elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
            unset($data['license']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\RepoSearchResultItemPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values_1 = [];
            foreach ($data['text_matches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\SearchResultTextMatchesItem::class, 'json', $context);
            }
            $object->setTextMatches($values_1);
            unset($data['text_matches']);
        }
        if (\array_key_exists('temp_clone_token', $data)) {
            $object->setTempCloneToken($data['temp_clone_token']);
            unset($data['temp_clone_token']);
        }
        if (\array_key_exists('allow_merge_commit', $data)) {
            $object->setAllowMergeCommit($data['allow_merge_commit']);
            unset($data['allow_merge_commit']);
        }
        if (\array_key_exists('allow_squash_merge', $data)) {
            $object->setAllowSquashMerge($data['allow_squash_merge']);
            unset($data['allow_squash_merge']);
        }
        if (\array_key_exists('allow_rebase_merge', $data)) {
            $object->setAllowRebaseMerge($data['allow_rebase_merge']);
            unset($data['allow_rebase_merge']);
        }
        if (\array_key_exists('delete_branch_on_merge', $data)) {
            $object->setDeleteBranchOnMerge($data['delete_branch_on_merge']);
            unset($data['delete_branch_on_merge']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['pushed_at'] = $data->getPushedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['homepage'] = $data->getHomepage();
        $dataArray['size'] = $data->getSize();
        $dataArray['stargazers_count'] = $data->getStargazersCount();
        $dataArray['watchers_count'] = $data->getWatchersCount();
        $dataArray['language'] = $data->getLanguage();
        $dataArray['forks_count'] = $data->getForksCount();
        $dataArray['open_issues_count'] = $data->getOpenIssuesCount();
        if ($data->isInitialized('masterBranch') && null !== $data->getMasterBranch()) {
            $dataArray['master_branch'] = $data->getMasterBranch();
        }
        $dataArray['default_branch'] = $data->getDefaultBranch();
        $dataArray['score'] = $data->getScore();
        $dataArray['forks_url'] = $data->getForksUrl();
        $dataArray['keys_url'] = $data->getKeysUrl();
        $dataArray['collaborators_url'] = $data->getCollaboratorsUrl();
        $dataArray['teams_url'] = $data->getTeamsUrl();
        $dataArray['hooks_url'] = $data->getHooksUrl();
        $dataArray['issue_events_url'] = $data->getIssueEventsUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['assignees_url'] = $data->getAssigneesUrl();
        $dataArray['branches_url'] = $data->getBranchesUrl();
        $dataArray['tags_url'] = $data->getTagsUrl();
        $dataArray['blobs_url'] = $data->getBlobsUrl();
        $dataArray['git_tags_url'] = $data->getGitTagsUrl();
        $dataArray['git_refs_url'] = $data->getGitRefsUrl();
        $dataArray['trees_url'] = $data->getTreesUrl();
        $dataArray['statuses_url'] = $data->getStatusesUrl();
        $dataArray['languages_url'] = $data->getLanguagesUrl();
        $dataArray['stargazers_url'] = $data->getStargazersUrl();
        $dataArray['contributors_url'] = $data->getContributorsUrl();
        $dataArray['subscribers_url'] = $data->getSubscribersUrl();
        $dataArray['subscription_url'] = $data->getSubscriptionUrl();
        $dataArray['commits_url'] = $data->getCommitsUrl();
        $dataArray['git_commits_url'] = $data->getGitCommitsUrl();
        $dataArray['comments_url'] = $data->getCommentsUrl();
        $dataArray['issue_comment_url'] = $data->getIssueCommentUrl();
        $dataArray['contents_url'] = $data->getContentsUrl();
        $dataArray['compare_url'] = $data->getCompareUrl();
        $dataArray['merges_url'] = $data->getMergesUrl();
        $dataArray['archive_url'] = $data->getArchiveUrl();
        $dataArray['downloads_url'] = $data->getDownloadsUrl();
        $dataArray['issues_url'] = $data->getIssuesUrl();
        $dataArray['pulls_url'] = $data->getPullsUrl();
        $dataArray['milestones_url'] = $data->getMilestonesUrl();
        $dataArray['notifications_url'] = $data->getNotificationsUrl();
        $dataArray['labels_url'] = $data->getLabelsUrl();
        $dataArray['releases_url'] = $data->getReleasesUrl();
        $dataArray['deployments_url'] = $data->getDeploymentsUrl();
        $dataArray['git_url'] = $data->getGitUrl();
        $dataArray['ssh_url'] = $data->getSshUrl();
        $dataArray['clone_url'] = $data->getCloneUrl();
        $dataArray['svn_url'] = $data->getSvnUrl();
        $dataArray['forks'] = $data->getForks();
        $dataArray['open_issues'] = $data->getOpenIssues();
        $dataArray['watchers'] = $data->getWatchers();
        if ($data->isInitialized('topics') && null !== $data->getTopics()) {
            $values = [];
            foreach ($data->getTopics() as $value) {
                $values[] = $value;
            }
            $dataArray['topics'] = $values;
        }
        $dataArray['mirror_url'] = $data->getMirrorUrl();
        $dataArray['has_issues'] = $data->getHasIssues();
        $dataArray['has_projects'] = $data->getHasProjects();
        $dataArray['has_pages'] = $data->getHasPages();
        $dataArray['has_wiki'] = $data->getHasWiki();
        $dataArray['has_downloads'] = $data->getHasDownloads();
        $dataArray['archived'] = $data->getArchived();
        $dataArray['disabled'] = $data->getDisabled();
        $dataArray['license'] = $data->getLicense() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getLicense(), 'json', $context));
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $data->getPermissions() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPermissions(), 'json', $context));
        }
        if ($data->isInitialized('textMatches') && null !== $data->getTextMatches()) {
            $values_1 = [];
            foreach ($data->getTextMatches() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['text_matches'] = $values_1;
        }
        if ($data->isInitialized('tempCloneToken') && null !== $data->getTempCloneToken()) {
            $dataArray['temp_clone_token'] = $data->getTempCloneToken();
        }
        if ($data->isInitialized('allowMergeCommit') && null !== $data->getAllowMergeCommit()) {
            $dataArray['allow_merge_commit'] = $data->getAllowMergeCommit();
        }
        if ($data->isInitialized('allowSquashMerge') && null !== $data->getAllowSquashMerge()) {
            $dataArray['allow_squash_merge'] = $data->getAllowSquashMerge();
        }
        if ($data->isInitialized('allowRebaseMerge') && null !== $data->getAllowRebaseMerge()) {
            $dataArray['allow_rebase_merge'] = $data->getAllowRebaseMerge();
        }
        if ($data->isInitialized('deleteBranchOnMerge') && null !== $data->getDeleteBranchOnMerge()) {
            $dataArray['delete_branch_on_merge'] = $data->getDeleteBranchOnMerge();
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\RepoSearchResultItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\RepoSearchResultItem::class => false];
    }
}