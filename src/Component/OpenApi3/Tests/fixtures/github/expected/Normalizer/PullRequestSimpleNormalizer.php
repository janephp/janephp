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
class PullRequestSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\PullRequestSimple::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\PullRequestSimple::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\PullRequestSimple();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('locked', $data) && \is_int($data['locked'])) {
            $data['locked'] = (bool) $data['locked'];
        }
        if (\array_key_exists('draft', $data) && \is_int($data['draft'])) {
            $data['draft'] = (bool) $data['draft'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\PullRequestSimpleConstraint());
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
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\PullRequestSimpleUser::class, 'json', $context));
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
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\PullRequestSimpleLabelsItem::class, 'json', $context);
            }
            $object->setLabels($values);
            unset($data['labels']);
        }
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], \Github\Model\PullRequestSimpleMilestone::class, 'json', $context));
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
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['closed_at']));
            unset($data['closed_at']);
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
        }
        if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
            $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['merged_at']));
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
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], \Github\Model\PullRequestSimpleAssignee::class, 'json', $context));
            unset($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('assignees', $data) && $data['assignees'] !== null) {
            $values_1 = [];
            foreach ($data['assignees'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\SimpleUser::class, 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, \Github\Model\SimpleUser::class, 'json', $context);
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
                $values_3[] = $this->denormalizer->denormalize($value_3, \Github\Model\TeamSimple::class, 'json', $context);
            }
            $object->setRequestedTeams($values_3);
            unset($data['requested_teams']);
        }
        elseif (\array_key_exists('requested_teams', $data) && $data['requested_teams'] === null) {
            $object->setRequestedTeams(null);
        }
        if (\array_key_exists('head', $data)) {
            $object->setHead($this->denormalizer->denormalize($data['head'], \Github\Model\PullRequestSimpleHead::class, 'json', $context));
            unset($data['head']);
        }
        if (\array_key_exists('base', $data)) {
            $object->setBase($this->denormalizer->denormalize($data['base'], \Github\Model\PullRequestSimpleBase::class, 'json', $context));
            unset($data['base']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \Github\Model\PullRequestSimpleLinks::class, 'json', $context));
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
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['url'] = $data->getUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['diff_url'] = $data->getDiffUrl();
        $dataArray['patch_url'] = $data->getPatchUrl();
        $dataArray['issue_url'] = $data->getIssueUrl();
        $dataArray['commits_url'] = $data->getCommitsUrl();
        $dataArray['review_comments_url'] = $data->getReviewCommentsUrl();
        $dataArray['review_comment_url'] = $data->getReviewCommentUrl();
        $dataArray['comments_url'] = $data->getCommentsUrl();
        $dataArray['statuses_url'] = $data->getStatusesUrl();
        $dataArray['number'] = $data->getNumber();
        $dataArray['state'] = $data->getState();
        $dataArray['locked'] = $data->getLocked();
        $dataArray['title'] = $data->getTitle();
        $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        $dataArray['body'] = $data->getBody();
        $values = [];
        foreach ($data->getLabels() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['labels'] = $values;
        $dataArray['milestone'] = $this->normalizer->normalize($data->getMilestone(), 'json', $context);
        if ($data->isInitialized('activeLockReason')) {
            $dataArray['active_lock_reason'] = $data->getActiveLockReason();
        }
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['closed_at'] = $data->getClosedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['merged_at'] = $data->getMergedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['merge_commit_sha'] = $data->getMergeCommitSha();
        $dataArray['assignee'] = $this->normalizer->normalize($data->getAssignee(), 'json', $context);
        if ($data->isInitialized('assignees')) {
            $values_1 = [];
            foreach ($data->getAssignees() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['assignees'] = $values_1;
        }
        if ($data->isInitialized('requestedReviewers')) {
            $values_2 = [];
            foreach ($data->getRequestedReviewers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['requested_reviewers'] = $values_2;
        }
        if ($data->isInitialized('requestedTeams')) {
            $values_3 = [];
            foreach ($data->getRequestedTeams() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $dataArray['requested_teams'] = $values_3;
        }
        $dataArray['head'] = $this->normalizer->normalize($data->getHead(), 'json', $context);
        $dataArray['base'] = $this->normalizer->normalize($data->getBase(), 'json', $context);
        $dataArray['_links'] = $this->normalizer->normalize($data->getLinks(), 'json', $context);
        $dataArray['author_association'] = $data->getAuthorAssociation();
        if ($data->isInitialized('draft') && null !== $data->getDraft()) {
            $dataArray['draft'] = $data->getDraft();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\PullRequestSimpleConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\PullRequestSimple::class => false];
    }
}