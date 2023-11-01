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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class PullRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\PullRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\PullRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\PullRequest();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('diff_url', $data)) {
                $object->setDiffUrl($data['diff_url']);
                unset($data['diff_url']);
            }
            if (\array_key_exists('patch_url', $data)) {
                $object->setPatchUrl($data['patch_url']);
                unset($data['patch_url']);
            }
            if (\array_key_exists('issue_url', $data)) {
                $object->setIssueUrl($data['issue_url']);
                unset($data['issue_url']);
            }
            if (\array_key_exists('commits_url', $data)) {
                $object->setCommitsUrl($data['commits_url']);
                unset($data['commits_url']);
            }
            if (\array_key_exists('review_comments_url', $data)) {
                $object->setReviewCommentsUrl($data['review_comments_url']);
                unset($data['review_comments_url']);
            }
            if (\array_key_exists('review_comment_url', $data)) {
                $object->setReviewCommentUrl($data['review_comment_url']);
                unset($data['review_comment_url']);
            }
            if (\array_key_exists('comments_url', $data)) {
                $object->setCommentsUrl($data['comments_url']);
                unset($data['comments_url']);
            }
            if (\array_key_exists('statuses_url', $data)) {
                $object->setStatusesUrl($data['statuses_url']);
                unset($data['statuses_url']);
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
                unset($data['number']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('locked', $data)) {
                $object->setLocked($data['locked']);
                unset($data['locked']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('user', $data) && $data['user'] !== null) {
                $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\PullRequestUser', 'json', $context));
                unset($data['user']);
            }
            elseif (\array_key_exists('user', $data) && $data['user'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('body', $data) && $data['body'] !== null) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            elseif (\array_key_exists('body', $data) && $data['body'] === null) {
                $object->setBody(null);
            }
            if (\array_key_exists('labels', $data)) {
                $values = [];
                foreach ($data['labels'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\PullRequestLabelsItem', 'json', $context);
                }
                $object->setLabels($values);
                unset($data['labels']);
            }
            if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
                $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\PullRequestMilestone', 'json', $context));
                unset($data['milestone']);
            }
            elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
                $object->setMilestone(null);
            }
            if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
                $object->setActiveLockReason($data['active_lock_reason']);
                unset($data['active_lock_reason']);
            }
            elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
                $object->setActiveLockReason(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
                $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
                unset($data['closed_at']);
            }
            elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
                $object->setClosedAt(null);
            }
            if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
                $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['merged_at']));
                unset($data['merged_at']);
            }
            elseif (\array_key_exists('merged_at', $data) && $data['merged_at'] === null) {
                $object->setMergedAt(null);
            }
            if (\array_key_exists('merge_commit_sha', $data) && $data['merge_commit_sha'] !== null) {
                $object->setMergeCommitSha($data['merge_commit_sha']);
                unset($data['merge_commit_sha']);
            }
            elseif (\array_key_exists('merge_commit_sha', $data) && $data['merge_commit_sha'] === null) {
                $object->setMergeCommitSha(null);
            }
            if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
                $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\PullRequestAssignee', 'json', $context));
                unset($data['assignee']);
            }
            elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
                $object->setAssignee(null);
            }
            if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
                $values_1 = [];
                foreach ($data['assignees'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\SimpleUser', 'json', $context);
                }
                $object->setAssignees($values_1);
                unset($data['assignees']);
            }
            elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
                $object->setAssignees(null);
            }
            if (\array_key_exists('requested_reviewers', $data) && $data['requested_reviewers'] !== null) {
                $values_2 = [];
                foreach ($data['requested_reviewers'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\SimpleUser', 'json', $context);
                }
                $object->setRequestedReviewers($values_2);
                unset($data['requested_reviewers']);
            }
            elseif (\array_key_exists('requested_reviewers', $data) && $data['requested_reviewers'] === null) {
                $object->setRequestedReviewers(null);
            }
            if (\array_key_exists('requested_teams', $data) && $data['requested_teams'] !== null) {
                $values_3 = [];
                foreach ($data['requested_teams'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Github\\Model\\TeamSimple', 'json', $context);
                }
                $object->setRequestedTeams($values_3);
                unset($data['requested_teams']);
            }
            elseif (\array_key_exists('requested_teams', $data) && $data['requested_teams'] === null) {
                $object->setRequestedTeams(null);
            }
            if (\array_key_exists('head', $data)) {
                $object->setHead($this->denormalizer->denormalize($data['head'], 'Github\\Model\\PullRequestHead', 'json', $context));
                unset($data['head']);
            }
            if (\array_key_exists('base', $data)) {
                $object->setBase($this->denormalizer->denormalize($data['base'], 'Github\\Model\\PullRequestBase', 'json', $context));
                unset($data['base']);
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\PullRequestLinks', 'json', $context));
                unset($data['_links']);
            }
            if (\array_key_exists('author_association', $data)) {
                $object->setAuthorAssociation($data['author_association']);
                unset($data['author_association']);
            }
            if (\array_key_exists('draft', $data)) {
                $object->setDraft($data['draft']);
                unset($data['draft']);
            }
            if (\array_key_exists('merged', $data)) {
                $object->setMerged($data['merged']);
                unset($data['merged']);
            }
            if (\array_key_exists('mergeable', $data) && $data['mergeable'] !== null) {
                $object->setMergeable($data['mergeable']);
                unset($data['mergeable']);
            }
            elseif (\array_key_exists('mergeable', $data) && $data['mergeable'] === null) {
                $object->setMergeable(null);
            }
            if (\array_key_exists('rebaseable', $data) && $data['rebaseable'] !== null) {
                $object->setRebaseable($data['rebaseable']);
                unset($data['rebaseable']);
            }
            elseif (\array_key_exists('rebaseable', $data) && $data['rebaseable'] === null) {
                $object->setRebaseable(null);
            }
            if (\array_key_exists('mergeable_state', $data)) {
                $object->setMergeableState($data['mergeable_state']);
                unset($data['mergeable_state']);
            }
            if (\array_key_exists('merged_by', $data) && $data['merged_by'] !== null) {
                $object->setMergedBy($this->denormalizer->denormalize($data['merged_by'], 'Github\\Model\\PullRequestMergedBy', 'json', $context));
                unset($data['merged_by']);
            }
            elseif (\array_key_exists('merged_by', $data) && $data['merged_by'] === null) {
                $object->setMergedBy(null);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }
            if (\array_key_exists('review_comments', $data)) {
                $object->setReviewComments($data['review_comments']);
                unset($data['review_comments']);
            }
            if (\array_key_exists('maintainer_can_modify', $data)) {
                $object->setMaintainerCanModify($data['maintainer_can_modify']);
                unset($data['maintainer_can_modify']);
            }
            if (\array_key_exists('commits', $data)) {
                $object->setCommits($data['commits']);
                unset($data['commits']);
            }
            if (\array_key_exists('additions', $data)) {
                $object->setAdditions($data['additions']);
                unset($data['additions']);
            }
            if (\array_key_exists('deletions', $data)) {
                $object->setDeletions($data['deletions']);
                unset($data['deletions']);
            }
            if (\array_key_exists('changed_files', $data)) {
                $object->setChangedFiles($data['changed_files']);
                unset($data['changed_files']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['url'] = $object->getUrl();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['html_url'] = $object->getHtmlUrl();
            $data['diff_url'] = $object->getDiffUrl();
            $data['patch_url'] = $object->getPatchUrl();
            $data['issue_url'] = $object->getIssueUrl();
            $data['commits_url'] = $object->getCommitsUrl();
            $data['review_comments_url'] = $object->getReviewCommentsUrl();
            $data['review_comment_url'] = $object->getReviewCommentUrl();
            $data['comments_url'] = $object->getCommentsUrl();
            $data['statuses_url'] = $object->getStatusesUrl();
            $data['number'] = $object->getNumber();
            $data['state'] = $object->getState();
            $data['locked'] = $object->getLocked();
            $data['title'] = $object->getTitle();
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            $data['body'] = $object->getBody();
            $values = [];
            foreach ($object->getLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['labels'] = $values;
            $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
            if ($object->isInitialized('activeLockReason') && null !== $object->getActiveLockReason()) {
                $data['active_lock_reason'] = $object->getActiveLockReason();
            }
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
            $data['merged_at'] = $object->getMergedAt()->format('Y-m-d\\TH:i:sP');
            $data['merge_commit_sha'] = $object->getMergeCommitSha();
            $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
            if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
                $values_1 = [];
                foreach ($object->getAssignees() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['assignees'] = $values_1;
            }
            if ($object->isInitialized('requestedReviewers') && null !== $object->getRequestedReviewers()) {
                $values_2 = [];
                foreach ($object->getRequestedReviewers() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['requested_reviewers'] = $values_2;
            }
            if ($object->isInitialized('requestedTeams') && null !== $object->getRequestedTeams()) {
                $values_3 = [];
                foreach ($object->getRequestedTeams() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['requested_teams'] = $values_3;
            }
            $data['head'] = $this->normalizer->normalize($object->getHead(), 'json', $context);
            $data['base'] = $this->normalizer->normalize($object->getBase(), 'json', $context);
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            $data['author_association'] = $object->getAuthorAssociation();
            if ($object->isInitialized('draft') && null !== $object->getDraft()) {
                $data['draft'] = $object->getDraft();
            }
            $data['merged'] = $object->getMerged();
            $data['mergeable'] = $object->getMergeable();
            if ($object->isInitialized('rebaseable') && null !== $object->getRebaseable()) {
                $data['rebaseable'] = $object->getRebaseable();
            }
            $data['mergeable_state'] = $object->getMergeableState();
            $data['merged_by'] = $this->normalizer->normalize($object->getMergedBy(), 'json', $context);
            $data['comments'] = $object->getComments();
            $data['review_comments'] = $object->getReviewComments();
            $data['maintainer_can_modify'] = $object->getMaintainerCanModify();
            $data['commits'] = $object->getCommits();
            $data['additions'] = $object->getAdditions();
            $data['deletions'] = $object->getDeletions();
            $data['changed_files'] = $object->getChangedFiles();
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\PullRequest' => false];
        }
    }
} else {
    class PullRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\PullRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\PullRequest';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\PullRequest();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('diff_url', $data)) {
                $object->setDiffUrl($data['diff_url']);
                unset($data['diff_url']);
            }
            if (\array_key_exists('patch_url', $data)) {
                $object->setPatchUrl($data['patch_url']);
                unset($data['patch_url']);
            }
            if (\array_key_exists('issue_url', $data)) {
                $object->setIssueUrl($data['issue_url']);
                unset($data['issue_url']);
            }
            if (\array_key_exists('commits_url', $data)) {
                $object->setCommitsUrl($data['commits_url']);
                unset($data['commits_url']);
            }
            if (\array_key_exists('review_comments_url', $data)) {
                $object->setReviewCommentsUrl($data['review_comments_url']);
                unset($data['review_comments_url']);
            }
            if (\array_key_exists('review_comment_url', $data)) {
                $object->setReviewCommentUrl($data['review_comment_url']);
                unset($data['review_comment_url']);
            }
            if (\array_key_exists('comments_url', $data)) {
                $object->setCommentsUrl($data['comments_url']);
                unset($data['comments_url']);
            }
            if (\array_key_exists('statuses_url', $data)) {
                $object->setStatusesUrl($data['statuses_url']);
                unset($data['statuses_url']);
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
                unset($data['number']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('locked', $data)) {
                $object->setLocked($data['locked']);
                unset($data['locked']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('user', $data) && $data['user'] !== null) {
                $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\PullRequestUser', 'json', $context));
                unset($data['user']);
            }
            elseif (\array_key_exists('user', $data) && $data['user'] === null) {
                $object->setUser(null);
            }
            if (\array_key_exists('body', $data) && $data['body'] !== null) {
                $object->setBody($data['body']);
                unset($data['body']);
            }
            elseif (\array_key_exists('body', $data) && $data['body'] === null) {
                $object->setBody(null);
            }
            if (\array_key_exists('labels', $data)) {
                $values = [];
                foreach ($data['labels'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\PullRequestLabelsItem', 'json', $context);
                }
                $object->setLabels($values);
                unset($data['labels']);
            }
            if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
                $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\PullRequestMilestone', 'json', $context));
                unset($data['milestone']);
            }
            elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
                $object->setMilestone(null);
            }
            if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
                $object->setActiveLockReason($data['active_lock_reason']);
                unset($data['active_lock_reason']);
            }
            elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
                $object->setActiveLockReason(null);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
                $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
                unset($data['closed_at']);
            }
            elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
                $object->setClosedAt(null);
            }
            if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
                $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['merged_at']));
                unset($data['merged_at']);
            }
            elseif (\array_key_exists('merged_at', $data) && $data['merged_at'] === null) {
                $object->setMergedAt(null);
            }
            if (\array_key_exists('merge_commit_sha', $data) && $data['merge_commit_sha'] !== null) {
                $object->setMergeCommitSha($data['merge_commit_sha']);
                unset($data['merge_commit_sha']);
            }
            elseif (\array_key_exists('merge_commit_sha', $data) && $data['merge_commit_sha'] === null) {
                $object->setMergeCommitSha(null);
            }
            if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
                $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\PullRequestAssignee', 'json', $context));
                unset($data['assignee']);
            }
            elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
                $object->setAssignee(null);
            }
            if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
                $values_1 = [];
                foreach ($data['assignees'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\SimpleUser', 'json', $context);
                }
                $object->setAssignees($values_1);
                unset($data['assignees']);
            }
            elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
                $object->setAssignees(null);
            }
            if (\array_key_exists('requested_reviewers', $data) && $data['requested_reviewers'] !== null) {
                $values_2 = [];
                foreach ($data['requested_reviewers'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\SimpleUser', 'json', $context);
                }
                $object->setRequestedReviewers($values_2);
                unset($data['requested_reviewers']);
            }
            elseif (\array_key_exists('requested_reviewers', $data) && $data['requested_reviewers'] === null) {
                $object->setRequestedReviewers(null);
            }
            if (\array_key_exists('requested_teams', $data) && $data['requested_teams'] !== null) {
                $values_3 = [];
                foreach ($data['requested_teams'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Github\\Model\\TeamSimple', 'json', $context);
                }
                $object->setRequestedTeams($values_3);
                unset($data['requested_teams']);
            }
            elseif (\array_key_exists('requested_teams', $data) && $data['requested_teams'] === null) {
                $object->setRequestedTeams(null);
            }
            if (\array_key_exists('head', $data)) {
                $object->setHead($this->denormalizer->denormalize($data['head'], 'Github\\Model\\PullRequestHead', 'json', $context));
                unset($data['head']);
            }
            if (\array_key_exists('base', $data)) {
                $object->setBase($this->denormalizer->denormalize($data['base'], 'Github\\Model\\PullRequestBase', 'json', $context));
                unset($data['base']);
            }
            if (\array_key_exists('_links', $data)) {
                $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\PullRequestLinks', 'json', $context));
                unset($data['_links']);
            }
            if (\array_key_exists('author_association', $data)) {
                $object->setAuthorAssociation($data['author_association']);
                unset($data['author_association']);
            }
            if (\array_key_exists('draft', $data)) {
                $object->setDraft($data['draft']);
                unset($data['draft']);
            }
            if (\array_key_exists('merged', $data)) {
                $object->setMerged($data['merged']);
                unset($data['merged']);
            }
            if (\array_key_exists('mergeable', $data) && $data['mergeable'] !== null) {
                $object->setMergeable($data['mergeable']);
                unset($data['mergeable']);
            }
            elseif (\array_key_exists('mergeable', $data) && $data['mergeable'] === null) {
                $object->setMergeable(null);
            }
            if (\array_key_exists('rebaseable', $data) && $data['rebaseable'] !== null) {
                $object->setRebaseable($data['rebaseable']);
                unset($data['rebaseable']);
            }
            elseif (\array_key_exists('rebaseable', $data) && $data['rebaseable'] === null) {
                $object->setRebaseable(null);
            }
            if (\array_key_exists('mergeable_state', $data)) {
                $object->setMergeableState($data['mergeable_state']);
                unset($data['mergeable_state']);
            }
            if (\array_key_exists('merged_by', $data) && $data['merged_by'] !== null) {
                $object->setMergedBy($this->denormalizer->denormalize($data['merged_by'], 'Github\\Model\\PullRequestMergedBy', 'json', $context));
                unset($data['merged_by']);
            }
            elseif (\array_key_exists('merged_by', $data) && $data['merged_by'] === null) {
                $object->setMergedBy(null);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }
            if (\array_key_exists('review_comments', $data)) {
                $object->setReviewComments($data['review_comments']);
                unset($data['review_comments']);
            }
            if (\array_key_exists('maintainer_can_modify', $data)) {
                $object->setMaintainerCanModify($data['maintainer_can_modify']);
                unset($data['maintainer_can_modify']);
            }
            if (\array_key_exists('commits', $data)) {
                $object->setCommits($data['commits']);
                unset($data['commits']);
            }
            if (\array_key_exists('additions', $data)) {
                $object->setAdditions($data['additions']);
                unset($data['additions']);
            }
            if (\array_key_exists('deletions', $data)) {
                $object->setDeletions($data['deletions']);
                unset($data['deletions']);
            }
            if (\array_key_exists('changed_files', $data)) {
                $object->setChangedFiles($data['changed_files']);
                unset($data['changed_files']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['url'] = $object->getUrl();
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['html_url'] = $object->getHtmlUrl();
            $data['diff_url'] = $object->getDiffUrl();
            $data['patch_url'] = $object->getPatchUrl();
            $data['issue_url'] = $object->getIssueUrl();
            $data['commits_url'] = $object->getCommitsUrl();
            $data['review_comments_url'] = $object->getReviewCommentsUrl();
            $data['review_comment_url'] = $object->getReviewCommentUrl();
            $data['comments_url'] = $object->getCommentsUrl();
            $data['statuses_url'] = $object->getStatusesUrl();
            $data['number'] = $object->getNumber();
            $data['state'] = $object->getState();
            $data['locked'] = $object->getLocked();
            $data['title'] = $object->getTitle();
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            $data['body'] = $object->getBody();
            $values = [];
            foreach ($object->getLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['labels'] = $values;
            $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
            if ($object->isInitialized('activeLockReason') && null !== $object->getActiveLockReason()) {
                $data['active_lock_reason'] = $object->getActiveLockReason();
            }
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
            $data['merged_at'] = $object->getMergedAt()->format('Y-m-d\\TH:i:sP');
            $data['merge_commit_sha'] = $object->getMergeCommitSha();
            $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
            if ($object->isInitialized('assignees') && null !== $object->getAssignees()) {
                $values_1 = [];
                foreach ($object->getAssignees() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['assignees'] = $values_1;
            }
            if ($object->isInitialized('requestedReviewers') && null !== $object->getRequestedReviewers()) {
                $values_2 = [];
                foreach ($object->getRequestedReviewers() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['requested_reviewers'] = $values_2;
            }
            if ($object->isInitialized('requestedTeams') && null !== $object->getRequestedTeams()) {
                $values_3 = [];
                foreach ($object->getRequestedTeams() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['requested_teams'] = $values_3;
            }
            $data['head'] = $this->normalizer->normalize($object->getHead(), 'json', $context);
            $data['base'] = $this->normalizer->normalize($object->getBase(), 'json', $context);
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
            $data['author_association'] = $object->getAuthorAssociation();
            if ($object->isInitialized('draft') && null !== $object->getDraft()) {
                $data['draft'] = $object->getDraft();
            }
            $data['merged'] = $object->getMerged();
            $data['mergeable'] = $object->getMergeable();
            if ($object->isInitialized('rebaseable') && null !== $object->getRebaseable()) {
                $data['rebaseable'] = $object->getRebaseable();
            }
            $data['mergeable_state'] = $object->getMergeableState();
            $data['merged_by'] = $this->normalizer->normalize($object->getMergedBy(), 'json', $context);
            $data['comments'] = $object->getComments();
            $data['review_comments'] = $object->getReviewComments();
            $data['maintainer_can_modify'] = $object->getMaintainerCanModify();
            $data['commits'] = $object->getCommits();
            $data['additions'] = $object->getAdditions();
            $data['deletions'] = $object->getDeletions();
            $data['changed_files'] = $object->getChangedFiles();
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\PullRequestConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\PullRequest' => false];
        }
    }
}