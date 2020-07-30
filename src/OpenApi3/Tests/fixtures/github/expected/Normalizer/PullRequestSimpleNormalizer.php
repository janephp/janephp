<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PullRequestSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\PullRequestSimple';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\PullRequestSimple';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\PullRequestSimple();
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
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\PullRequestSimpleUser', 'json', $context));
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
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\PullRequestSimpleLabelsItem', 'json', $context);
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\PullRequestSimpleMilestone', 'json', $context));
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
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\PullRequestSimpleAssignee', 'json', $context));
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
            $object->setHead($this->denormalizer->denormalize($data['head'], 'Github\\Model\\PullRequestSimpleHead', 'json', $context));
        }
        if (\array_key_exists('base', $data)) {
            $object->setBase($this->denormalizer->denormalize($data['base'], 'Github\\Model\\PullRequestSimpleBase', 'json', $context));
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], 'Github\\Model\\PullRequestSimpleLinks', 'json', $context));
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getDiffUrl()) {
            $data['diff_url'] = $object->getDiffUrl();
        }
        if (null !== $object->getPatchUrl()) {
            $data['patch_url'] = $object->getPatchUrl();
        }
        if (null !== $object->getIssueUrl()) {
            $data['issue_url'] = $object->getIssueUrl();
        }
        if (null !== $object->getCommitsUrl()) {
            $data['commits_url'] = $object->getCommitsUrl();
        }
        if (null !== $object->getReviewCommentsUrl()) {
            $data['review_comments_url'] = $object->getReviewCommentsUrl();
        }
        if (null !== $object->getReviewCommentUrl()) {
            $data['review_comment_url'] = $object->getReviewCommentUrl();
        }
        if (null !== $object->getCommentsUrl()) {
            $data['comments_url'] = $object->getCommentsUrl();
        }
        if (null !== $object->getStatusesUrl()) {
            $data['statuses_url'] = $object->getStatusesUrl();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getLocked()) {
            $data['locked'] = $object->getLocked();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        $data['body'] = $object->getBody();
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['labels'] = $values;
        }
        if (null !== $object->getMilestone()) {
            $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
        }
        $data['active_lock_reason'] = $object->getActiveLockReason();
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getClosedAt()) {
            $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getMergedAt()) {
            $data['merged_at'] = $object->getMergedAt()->format('Y-m-d\\TH:i:sP');
        }
        $data['merge_commit_sha'] = $object->getMergeCommitSha();
        if (null !== $object->getAssignee()) {
            $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
        }
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
        if (null !== $object->getHead()) {
            $data['head'] = $this->normalizer->normalize($object->getHead(), 'json', $context);
        }
        if (null !== $object->getBase()) {
            $data['base'] = $this->normalizer->normalize($object->getBase(), 'json', $context);
        }
        if (null !== $object->getLinks()) {
            $data['_links'] = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        if (null !== $object->getAuthorAssociation()) {
            $data['author_association'] = $object->getAuthorAssociation();
        }
        if (null !== $object->getDraft()) {
            $data['draft'] = $object->getDraft();
        }
        return $data;
    }
}