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
class IssueEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\IssueEvent';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\IssueEvent';
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
        $object = new \Github\Model\IssueEvent();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueEventConstraint());
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
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('actor', $data) && $data['actor'] !== null) {
            $object->setActor($this->denormalizer->denormalize($data['actor'], 'Github\\Model\\IssueEventActor', 'json', $context));
            unset($data['actor']);
        }
        elseif (\array_key_exists('actor', $data) && $data['actor'] === null) {
            $object->setActor(null);
        }
        if (\array_key_exists('event', $data)) {
            $object->setEvent($data['event']);
            unset($data['event']);
        }
        if (\array_key_exists('commit_id', $data) && $data['commit_id'] !== null) {
            $object->setCommitId($data['commit_id']);
            unset($data['commit_id']);
        }
        elseif (\array_key_exists('commit_id', $data) && $data['commit_id'] === null) {
            $object->setCommitId(null);
        }
        if (\array_key_exists('commit_url', $data) && $data['commit_url'] !== null) {
            $object->setCommitUrl($data['commit_url']);
            unset($data['commit_url']);
        }
        elseif (\array_key_exists('commit_url', $data) && $data['commit_url'] === null) {
            $object->setCommitUrl(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($this->denormalizer->denormalize($data['issue'], 'Github\\Model\\IssueSimple', 'json', $context));
            unset($data['issue']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($this->denormalizer->denormalize($data['label'], 'Github\\Model\\IssueEventLabel', 'json', $context));
            unset($data['label']);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], 'Github\\Model\\IssueEventAssignee', 'json', $context));
            unset($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('assigner', $data) && $data['assigner'] !== null) {
            $object->setAssigner($this->denormalizer->denormalize($data['assigner'], 'Github\\Model\\IssueEventAssigner', 'json', $context));
            unset($data['assigner']);
        }
        elseif (\array_key_exists('assigner', $data) && $data['assigner'] === null) {
            $object->setAssigner(null);
        }
        if (\array_key_exists('review_requester', $data) && $data['review_requester'] !== null) {
            $object->setReviewRequester($this->denormalizer->denormalize($data['review_requester'], 'Github\\Model\\IssueEventReviewRequester', 'json', $context));
            unset($data['review_requester']);
        }
        elseif (\array_key_exists('review_requester', $data) && $data['review_requester'] === null) {
            $object->setReviewRequester(null);
        }
        if (\array_key_exists('requested_reviewer', $data) && $data['requested_reviewer'] !== null) {
            $object->setRequestedReviewer($this->denormalizer->denormalize($data['requested_reviewer'], 'Github\\Model\\IssueEventRequestedReviewer', 'json', $context));
            unset($data['requested_reviewer']);
        }
        elseif (\array_key_exists('requested_reviewer', $data) && $data['requested_reviewer'] === null) {
            $object->setRequestedReviewer(null);
        }
        if (\array_key_exists('requested_team', $data)) {
            $object->setRequestedTeam($this->denormalizer->denormalize($data['requested_team'], 'Github\\Model\\Team', 'json', $context));
            unset($data['requested_team']);
        }
        if (\array_key_exists('dismissed_review', $data)) {
            $object->setDismissedReview($this->denormalizer->denormalize($data['dismissed_review'], 'Github\\Model\\IssueEventDismissedReview', 'json', $context));
            unset($data['dismissed_review']);
        }
        if (\array_key_exists('milestone', $data)) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], 'Github\\Model\\IssueEventMilestone', 'json', $context));
            unset($data['milestone']);
        }
        if (\array_key_exists('project_card', $data)) {
            $object->setProjectCard($this->denormalizer->denormalize($data['project_card'], 'Github\\Model\\IssueEventProjectCard', 'json', $context));
            unset($data['project_card']);
        }
        if (\array_key_exists('rename', $data)) {
            $object->setRename($this->denormalizer->denormalize($data['rename'], 'Github\\Model\\IssueEventRename', 'json', $context));
            unset($data['rename']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
            unset($data['author_association']);
        }
        if (\array_key_exists('lock_reason', $data) && $data['lock_reason'] !== null) {
            $object->setLockReason($data['lock_reason']);
            unset($data['lock_reason']);
        }
        elseif (\array_key_exists('lock_reason', $data) && $data['lock_reason'] === null) {
            $object->setLockReason(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['url'] = $object->getUrl();
        $data['actor'] = $this->normalizer->normalize($object->getActor(), 'json', $context);
        $data['event'] = $object->getEvent();
        $data['commit_id'] = $object->getCommitId();
        $data['commit_url'] = $object->getCommitUrl();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        if ($object->isInitialized('issue') && null !== $object->getIssue()) {
            $data['issue'] = $this->normalizer->normalize($object->getIssue(), 'json', $context);
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $this->normalizer->normalize($object->getLabel(), 'json', $context);
        }
        if ($object->isInitialized('assignee') && null !== $object->getAssignee()) {
            $data['assignee'] = $this->normalizer->normalize($object->getAssignee(), 'json', $context);
        }
        if ($object->isInitialized('assigner') && null !== $object->getAssigner()) {
            $data['assigner'] = $this->normalizer->normalize($object->getAssigner(), 'json', $context);
        }
        if ($object->isInitialized('reviewRequester') && null !== $object->getReviewRequester()) {
            $data['review_requester'] = $this->normalizer->normalize($object->getReviewRequester(), 'json', $context);
        }
        if ($object->isInitialized('requestedReviewer') && null !== $object->getRequestedReviewer()) {
            $data['requested_reviewer'] = $this->normalizer->normalize($object->getRequestedReviewer(), 'json', $context);
        }
        if ($object->isInitialized('requestedTeam') && null !== $object->getRequestedTeam()) {
            $data['requested_team'] = $this->normalizer->normalize($object->getRequestedTeam(), 'json', $context);
        }
        if ($object->isInitialized('dismissedReview') && null !== $object->getDismissedReview()) {
            $data['dismissed_review'] = $this->normalizer->normalize($object->getDismissedReview(), 'json', $context);
        }
        if ($object->isInitialized('milestone') && null !== $object->getMilestone()) {
            $data['milestone'] = $this->normalizer->normalize($object->getMilestone(), 'json', $context);
        }
        if ($object->isInitialized('projectCard') && null !== $object->getProjectCard()) {
            $data['project_card'] = $this->normalizer->normalize($object->getProjectCard(), 'json', $context);
        }
        if ($object->isInitialized('rename') && null !== $object->getRename()) {
            $data['rename'] = $this->normalizer->normalize($object->getRename(), 'json', $context);
        }
        if ($object->isInitialized('authorAssociation') && null !== $object->getAuthorAssociation()) {
            $data['author_association'] = $object->getAuthorAssociation();
        }
        if ($object->isInitialized('lockReason') && null !== $object->getLockReason()) {
            $data['lock_reason'] = $object->getLockReason();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueEventConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\IssueEvent' => false);
    }
}