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
class IssueSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IssueSimple::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IssueSimple::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\IssueSimple();
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
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueSimpleConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
            unset($data['repository_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
            unset($data['labels_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
            unset($data['events_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
            unset($data['number']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\IssueSimpleUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
            unset($data['user']);
        }
        if (\array_key_exists('labels', $data)) {
            $values = [];
            foreach ($data['labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\IssueSimpleLabelsItem::class, 'json', $context);
            }
            $object->setLabels($values);
            unset($data['labels']);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], \Github\Model\IssueSimpleAssignee::class, 'json', $context));
            unset($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
            unset($data['assignee']);
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
            unset($data['assignees']);
        }
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], \Github\Model\IssueSimpleMilestone::class, 'json', $context));
            unset($data['milestone']);
        }
        elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
            $object->setMilestone(null);
            unset($data['milestone']);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
            unset($data['locked']);
        }
        if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
            $object->setActiveLockReason($data['active_lock_reason']);
            unset($data['active_lock_reason']);
        }
        elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
            $object->setActiveLockReason(null);
            unset($data['active_lock_reason']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('pull_request', $data)) {
            $object->setPullRequest($this->denormalizer->denormalize($data['pull_request'], \Github\Model\IssueSimplePullRequest::class, 'json', $context));
            unset($data['pull_request']);
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['closed_at']));
            unset($data['closed_at']);
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
            unset($data['closed_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
            unset($data['author_association']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
            unset($data['body_text']);
        }
        if (\array_key_exists('timeline_url', $data)) {
            $object->setTimelineUrl($data['timeline_url']);
            unset($data['timeline_url']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], \Github\Model\Repository::class, 'json', $context));
            unset($data['repository']);
        }
        if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
            $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], \Github\Model\IssueSimplePerformedViaGithubApp::class, 'json', $context));
            unset($data['performed_via_github_app']);
        }
        elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
            $object->setPerformedViaGithubApp(null);
            unset($data['performed_via_github_app']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['repository_url'] = $data->getRepositoryUrl();
        $dataArray['labels_url'] = $data->getLabelsUrl();
        $dataArray['comments_url'] = $data->getCommentsUrl();
        $dataArray['events_url'] = $data->getEventsUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['number'] = $data->getNumber();
        $dataArray['state'] = $data->getState();
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        $dataArray['user'] = $data->getUser() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getUser(), 'json', $context));
        $values = [];
        foreach ($data->getLabels() as $value) {
            $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['labels'] = $values;
        $dataArray['assignee'] = $data->getAssignee() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getAssignee(), 'json', $context));
        if ($data->isInitialized('assignees') && null !== $data->getAssignees()) {
            $values_1 = [];
            foreach ($data->getAssignees() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['assignees'] = $values_1;
        }
        $dataArray['milestone'] = $data->getMilestone() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getMilestone(), 'json', $context));
        $dataArray['locked'] = $data->getLocked();
        if ($data->isInitialized('activeLockReason') && null !== $data->getActiveLockReason()) {
            $dataArray['active_lock_reason'] = $data->getActiveLockReason();
        }
        $dataArray['comments'] = $data->getComments();
        if ($data->isInitialized('pullRequest') && null !== $data->getPullRequest()) {
            $dataArray['pull_request'] = $data->getPullRequest() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPullRequest(), 'json', $context));
        }
        $dataArray['closed_at'] = $data->getClosedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['author_association'] = $data->getAuthorAssociation();
        if ($data->isInitialized('bodyHtml') && null !== $data->getBodyHtml()) {
            $dataArray['body_html'] = $data->getBodyHtml();
        }
        if ($data->isInitialized('bodyText') && null !== $data->getBodyText()) {
            $dataArray['body_text'] = $data->getBodyText();
        }
        if ($data->isInitialized('timelineUrl') && null !== $data->getTimelineUrl()) {
            $dataArray['timeline_url'] = $data->getTimelineUrl();
        }
        if ($data->isInitialized('repository') && null !== $data->getRepository()) {
            $dataArray['repository'] = $data->getRepository() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getRepository(), 'json', $context));
        }
        if ($data->isInitialized('performedViaGithubApp') && null !== $data->getPerformedViaGithubApp()) {
            $dataArray['performed_via_github_app'] = $data->getPerformedViaGithubApp() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getPerformedViaGithubApp(), 'json', $context));
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IssueSimpleConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IssueSimple::class => false];
    }
}