<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PullRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\PullRequest';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PullRequest';
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
        $object = new \Github\Model\PullRequest();
        $validator = new \Github\Validator\PullRequestValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('diff_url', $data)) {
            $object->setDiffUrl($data['diff_url']);
        }
        if (\array_key_exists('patch_url', $data)) {
            $object->setPatchUrl($data['patch_url']);
        }
        if (\array_key_exists('issue_url', $data)) {
            $object->setIssueUrl($data['issue_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
        }
        if (\array_key_exists('review_comments_url', $data)) {
            $object->setReviewCommentsUrl($data['review_comments_url']);
        }
        if (\array_key_exists('review_comment_url', $data)) {
            $object->setReviewCommentUrl($data['review_comment_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\PullRequestUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $object->setBody($data['body']);
        }
        elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->setBody(null);
        }
        if (\array_key_exists('labels', $data)) {
            $values = array();
            foreach ($data['labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\PullRequestLabelsItem', 'json', $context);
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\PullRequestMilestone', 'json', $context));
        }
        elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
            $object->setMilestone(null);
        }
        if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
            $object->setActiveLockReason($data['active_lock_reason']);
        }
        elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
            $object->setActiveLockReason(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
        }
        if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
            $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['merged_at']));
        }
        elseif (\array_key_exists('merged_at', $data) && $data['merged_at'] === null) {
            $object->setMergedAt(null);
        }
        if (\array_key_exists('merge_commit_sha', $data) && $data['merge_commit_sha'] !== null) {
            $object->setMergeCommitSha($data['merge_commit_sha']);
        }
        elseif (\array_key_exists('merge_commit_sha', $data) && $data['merge_commit_sha'] === null) {
            $object->setMergeCommitSha(null);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\PullRequestAssignee', 'json', $context));
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
            $values_1 = array();
            foreach ($data['assignees'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Github\\Model\\SimpleUser', 'json', $context);
            }
            $object->setAssignees($values_1);
        }
        elseif (\array_key_exists('assignees', $data) && $data['assignees'] === null) {
            $object->setAssignees(null);
        }
        if (\array_key_exists('requested_reviewers', $data) && $data['requested_reviewers'] !== null) {
            $values_2 = array();
            foreach ($data['requested_reviewers'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Github\\Model\\SimpleUser', 'json', $context);
            }
            $object->setRequestedReviewers($values_2);
        }
        elseif (\array_key_exists('requested_reviewers', $data) && $data['requested_reviewers'] === null) {
            $object->setRequestedReviewers(null);
        }
        if (\array_key_exists('requested_teams', $data) && $data['requested_teams'] !== null) {
            $values_3 = array();
            foreach ($data['requested_teams'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Github\\Model\\TeamSimple', 'json', $context);
            }
            $object->setRequestedTeams($values_3);
        }
        elseif (\array_key_exists('requested_teams', $data) && $data['requested_teams'] === null) {
            $object->setRequestedTeams(null);
        }
        if (\array_key_exists('head', $data)) {
            $object->setHead($this->denormalizer->denormalize($data['head'], 'Github\\Model\\PullRequestHead', 'json', $context));
        }
        if (\array_key_exists('base', $data)) {
            $object->setBase($this->denormalizer->denormalize($data['base'], 'Github\\Model\\PullRequestBase', 'json', $context));
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\PullRequestLinks', 'json', $context));
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
        }
        if (\array_key_exists('merged', $data)) {
            $object->setMerged($data['merged']);
        }
        if (\array_key_exists('mergeable', $data) && $data['mergeable'] !== null) {
            $object->setMergeable($data['mergeable']);
        }
        elseif (\array_key_exists('mergeable', $data) && $data['mergeable'] === null) {
            $object->setMergeable(null);
        }
        if (\array_key_exists('rebaseable', $data) && $data['rebaseable'] !== null) {
            $object->setRebaseable($data['rebaseable']);
        }
        elseif (\array_key_exists('rebaseable', $data) && $data['rebaseable'] === null) {
            $object->setRebaseable(null);
        }
        if (\array_key_exists('mergeable_state', $data)) {
            $object->setMergeableState($data['mergeable_state']);
        }
        if (\array_key_exists('merged_by', $data) && $data['merged_by'] !== null) {
            $object->setMergedBy($this->denormalizer->denormalize($data['merged_by'], 'Github\\Model\\PullRequestMergedBy', 'json', $context));
        }
        elseif (\array_key_exists('merged_by', $data) && $data['merged_by'] === null) {
            $object->setMergedBy(null);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('review_comments', $data)) {
            $object->setReviewComments($data['review_comments']);
        }
        if (\array_key_exists('maintainer_can_modify', $data)) {
            $object->setMaintainerCanModify($data['maintainer_can_modify']);
        }
        if (\array_key_exists('commits', $data)) {
            $object->setCommits($data['commits']);
        }
        if (\array_key_exists('additions', $data)) {
            $object->setAdditions($data['additions']);
        }
        if (\array_key_exists('deletions', $data)) {
            $object->setDeletions($data['deletions']);
        }
        if (\array_key_exists('changed_files', $data)) {
            $object->setChangedFiles($data['changed_files']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
        $values = array();
        foreach ($object->getLabels() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['labels'] = $values;
        $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
        if (null !== $object->getActiveLockReason()) {
            $data['active_lock_reason'] = $object->getActiveLockReason();
        }
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        $data['merged_at'] = $object->getMergedAt()->format('Y-m-d\\TH:i:sP');
        $data['merge_commit_sha'] = $object->getMergeCommitSha();
        $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
        if (null !== $object->getAssignees()) {
            $values_1 = array();
            foreach ($object->getAssignees() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['assignees'] = $values_1;
        }
        if (null !== $object->getRequestedReviewers()) {
            $values_2 = array();
            foreach ($object->getRequestedReviewers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['requested_reviewers'] = $values_2;
        }
        if (null !== $object->getRequestedTeams()) {
            $values_3 = array();
            foreach ($object->getRequestedTeams() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['requested_teams'] = $values_3;
        }
        $data['head'] = $this->normalizer->normalize($object->getHead(), 'json', $context);
        $data['base'] = $this->normalizer->normalize($object->getBase(), 'json', $context);
        $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        $data['author_association'] = $object->getAuthorAssociation();
        if (null !== $object->getDraft()) {
            $data['draft'] = $object->getDraft();
        }
        $data['merged'] = $object->getMerged();
        $data['mergeable'] = $object->getMergeable();
        if (null !== $object->getRebaseable()) {
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
        $validator = new \Github\Validator\PullRequestValidator();
        $validator->validate($data);
        return $data;
    }
}