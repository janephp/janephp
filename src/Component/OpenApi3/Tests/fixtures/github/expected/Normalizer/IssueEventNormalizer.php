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
class IssueEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IssueEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IssueEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\IssueEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueEventConstraint());
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
            $object->setActor($this->denormalizer->denormalize($data['actor'], \Github\Model\IssueEventActor::class, 'json', $context));
            unset($data['actor']);
        }
        elseif (\array_key_exists('actor', $data) && $data['actor'] === null) {
            $object->setActor(null);
            unset($data['actor']);
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
            unset($data['commit_id']);
        }
        if (\array_key_exists('commit_url', $data) && $data['commit_url'] !== null) {
            $object->setCommitUrl($data['commit_url']);
            unset($data['commit_url']);
        }
        elseif (\array_key_exists('commit_url', $data) && $data['commit_url'] === null) {
            $object->setCommitUrl(null);
            unset($data['commit_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('issue', $data)) {
            $object->setIssue($this->denormalizer->denormalize($data['issue'], \Github\Model\IssueSimple::class, 'json', $context));
            unset($data['issue']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($this->denormalizer->denormalize($data['label'], \Github\Model\IssueEventLabel::class, 'json', $context));
            unset($data['label']);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($this->denormalizer->denormalize($data['assignee'], \Github\Model\IssueEventAssignee::class, 'json', $context));
            unset($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
            unset($data['assignee']);
        }
        if (\array_key_exists('assigner', $data) && $data['assigner'] !== null) {
            $object->setAssigner($this->denormalizer->denormalize($data['assigner'], \Github\Model\IssueEventAssigner::class, 'json', $context));
            unset($data['assigner']);
        }
        elseif (\array_key_exists('assigner', $data) && $data['assigner'] === null) {
            $object->setAssigner(null);
            unset($data['assigner']);
        }
        if (\array_key_exists('review_requester', $data) && $data['review_requester'] !== null) {
            $object->setReviewRequester($this->denormalizer->denormalize($data['review_requester'], \Github\Model\IssueEventReviewRequester::class, 'json', $context));
            unset($data['review_requester']);
        }
        elseif (\array_key_exists('review_requester', $data) && $data['review_requester'] === null) {
            $object->setReviewRequester(null);
            unset($data['review_requester']);
        }
        if (\array_key_exists('requested_reviewer', $data) && $data['requested_reviewer'] !== null) {
            $object->setRequestedReviewer($this->denormalizer->denormalize($data['requested_reviewer'], \Github\Model\IssueEventRequestedReviewer::class, 'json', $context));
            unset($data['requested_reviewer']);
        }
        elseif (\array_key_exists('requested_reviewer', $data) && $data['requested_reviewer'] === null) {
            $object->setRequestedReviewer(null);
            unset($data['requested_reviewer']);
        }
        if (\array_key_exists('requested_team', $data)) {
            $object->setRequestedTeam($this->denormalizer->denormalize($data['requested_team'], \Github\Model\Team::class, 'json', $context));
            unset($data['requested_team']);
        }
        if (\array_key_exists('dismissed_review', $data)) {
            $object->setDismissedReview($this->denormalizer->denormalize($data['dismissed_review'], \Github\Model\IssueEventDismissedReview::class, 'json', $context));
            unset($data['dismissed_review']);
        }
        if (\array_key_exists('milestone', $data)) {
            $object->setMilestone($this->denormalizer->denormalize($data['milestone'], \Github\Model\IssueEventMilestone::class, 'json', $context));
            unset($data['milestone']);
        }
        if (\array_key_exists('project_card', $data)) {
            $object->setProjectCard($this->denormalizer->denormalize($data['project_card'], \Github\Model\IssueEventProjectCard::class, 'json', $context));
            unset($data['project_card']);
        }
        if (\array_key_exists('rename', $data)) {
            $object->setRename($this->denormalizer->denormalize($data['rename'], \Github\Model\IssueEventRename::class, 'json', $context));
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
            unset($data['lock_reason']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        $dataArray['actor'] = $data->getActor() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getActor(), 'json', $context));
        $dataArray['event'] = $data->getEvent();
        $dataArray['commit_id'] = $data->getCommitId();
        $dataArray['commit_url'] = $data->getCommitUrl();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('issue') && null !== $data->getIssue()) {
            $dataArray['issue'] = $data->getIssue() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getIssue(), 'json', $context));
        }
        if ($data->isInitialized('label') && null !== $data->getLabel()) {
            $dataArray['label'] = $data->getLabel() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getLabel(), 'json', $context));
        }
        if ($data->isInitialized('assignee') && null !== $data->getAssignee()) {
            $dataArray['assignee'] = $data->getAssignee() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getAssignee(), 'json', $context));
        }
        if ($data->isInitialized('assigner') && null !== $data->getAssigner()) {
            $dataArray['assigner'] = $data->getAssigner() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getAssigner(), 'json', $context));
        }
        if ($data->isInitialized('reviewRequester') && null !== $data->getReviewRequester()) {
            $dataArray['review_requester'] = $data->getReviewRequester() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getReviewRequester(), 'json', $context));
        }
        if ($data->isInitialized('requestedReviewer') && null !== $data->getRequestedReviewer()) {
            $dataArray['requested_reviewer'] = $data->getRequestedReviewer() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getRequestedReviewer(), 'json', $context));
        }
        if ($data->isInitialized('requestedTeam') && null !== $data->getRequestedTeam()) {
            $dataArray['requested_team'] = $data->getRequestedTeam() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getRequestedTeam(), 'json', $context));
        }
        if ($data->isInitialized('dismissedReview') && null !== $data->getDismissedReview()) {
            $dataArray['dismissed_review'] = $data->getDismissedReview() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getDismissedReview(), 'json', $context));
        }
        if ($data->isInitialized('milestone') && null !== $data->getMilestone()) {
            $dataArray['milestone'] = $data->getMilestone() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getMilestone(), 'json', $context));
        }
        if ($data->isInitialized('projectCard') && null !== $data->getProjectCard()) {
            $dataArray['project_card'] = $data->getProjectCard() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getProjectCard(), 'json', $context));
        }
        if ($data->isInitialized('rename') && null !== $data->getRename()) {
            $dataArray['rename'] = $data->getRename() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getRename(), 'json', $context));
        }
        if ($data->isInitialized('authorAssociation') && null !== $data->getAuthorAssociation()) {
            $dataArray['author_association'] = $data->getAuthorAssociation();
        }
        if ($data->isInitialized('lockReason') && null !== $data->getLockReason()) {
            $dataArray['lock_reason'] = $data->getLockReason();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IssueEventConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IssueEvent::class => false];
    }
}