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
class IssueSimpleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\IssueSimple';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\IssueSimple';
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
        $object = new \Github\Model\IssueSimple();
        $validator = new \Github\Validator\IssueSimpleValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
        }
        if (\array_key_exists('events_url', $data)) {
            $object->setEventsUrl($data['events_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('number', $data)) {
            $object->setNumber($data['number']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\IssueSimpleUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('labels', $data)) {
            $values = array();
            foreach ($data['labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\IssueSimpleLabelsItem', 'json', $context);
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\IssueSimpleAssignee', 'json', $context));
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
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\IssueSimpleMilestone', 'json', $context));
        }
        elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
            $object->setMilestone(null);
        }
        if (\array_key_exists('locked', $data)) {
            $object->setLocked($data['locked']);
        }
        if (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] !== null) {
            $object->setActiveLockReason($data['active_lock_reason']);
        }
        elseif (\array_key_exists('active_lock_reason', $data) && $data['active_lock_reason'] === null) {
            $object->setActiveLockReason(null);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('pull_request', $data)) {
            $object->setPullRequest($this->denormalizer->denormalize($data['pull_request'], 'Github\\Model\\IssueSimplePullRequest', 'json', $context));
        }
        if (\array_key_exists('closed_at', $data) && $data['closed_at'] !== null) {
            $object->setClosedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['closed_at']));
        }
        elseif (\array_key_exists('closed_at', $data) && $data['closed_at'] === null) {
            $object->setClosedAt(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
        }
        if (\array_key_exists('timeline_url', $data)) {
            $object->setTimelineUrl($data['timeline_url']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\Repository', 'json', $context));
        }
        if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
            $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], 'Github\\Model\\IssueSimplePerformedViaGithubApp', 'json', $context));
        }
        elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
            $object->setPerformedViaGithubApp(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['url'] = $object->getUrl();
        $data['repository_url'] = $object->getRepositoryUrl();
        $data['labels_url'] = $object->getLabelsUrl();
        $data['comments_url'] = $object->getCommentsUrl();
        $data['events_url'] = $object->getEventsUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['number'] = $object->getNumber();
        $data['state'] = $object->getState();
        $data['title'] = $object->getTitle();
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        $values = array();
        foreach ($object->getLabels() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['labels'] = $values;
        $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
        if (null !== $object->getAssignees()) {
            $values_1 = array();
            foreach ($object->getAssignees() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['assignees'] = $values_1;
        }
        $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
        $data['locked'] = $object->getLocked();
        if (null !== $object->getActiveLockReason()) {
            $data['active_lock_reason'] = $object->getActiveLockReason();
        }
        $data['comments'] = $object->getComments();
        if (null !== $object->getPullRequest()) {
            $data['pull_request'] = $this->normalizer->normalize($object->getPullRequest(), 'json', $context);
        }
        $data['closed_at'] = $object->getClosedAt()->format('Y-m-d\\TH:i:sP');
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['author_association'] = $object->getAuthorAssociation();
        if (null !== $object->getBodyHtml()) {
            $data['body_html'] = $object->getBodyHtml();
        }
        if (null !== $object->getBodyText()) {
            $data['body_text'] = $object->getBodyText();
        }
        if (null !== $object->getTimelineUrl()) {
            $data['timeline_url'] = $object->getTimelineUrl();
        }
        if (null !== $object->getRepository()) {
            $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
        }
        if (null !== $object->getPerformedViaGithubApp()) {
            $data['performed_via_github_app'] = $this->normalizer->normalize($object->getPerformedViaGithubApp(), 'json', $context);
        }
        $validator = new \Github\Validator\IssueSimpleValidator();
        $validator->validate($data);
        return $data;
    }
}