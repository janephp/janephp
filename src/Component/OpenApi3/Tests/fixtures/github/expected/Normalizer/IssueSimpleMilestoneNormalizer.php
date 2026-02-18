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
class IssueSimpleMilestoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IssueSimpleMilestone::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IssueSimpleMilestone::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\IssueSimpleMilestone();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueSimpleMilestoneConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('labels_url', $data)) {
            $object->setLabelsUrl($data['labels_url']);
            unset($data['labels_url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
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
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], \Github\Model\MilestoneCreator::class, 'json', $context));
            unset($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('open_issues', $data)) {
            $object->setOpenIssues($data['open_issues']);
            unset($data['open_issues']);
        }
        if (\array_key_exists('closed_issues', $data)) {
            $object->setClosedIssues($data['closed_issues']);
            unset($data['closed_issues']);
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
        if (\array_key_exists('due_on', $data) && $data['due_on'] !== null) {
            $object->setDueOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['due_on']));
            unset($data['due_on']);
        }
        elseif (\array_key_exists('due_on', $data) && $data['due_on'] === null) {
            $object->setDueOn(null);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['labels_url'] = $data->getLabelsUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['number'] = $data->getNumber();
        $dataArray['state'] = $data->getState();
        $dataArray['title'] = $data->getTitle();
        $dataArray['description'] = $data->getDescription();
        $dataArray['creator'] = $this->normalizer->normalize($data->getCreator(), 'json', $context);
        $dataArray['open_issues'] = $data->getOpenIssues();
        $dataArray['closed_issues'] = $data->getClosedIssues();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['closed_at'] = $data->getClosedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['due_on'] = $data->getDueOn()?->format('Y-m-d\TH:i:sP');
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IssueSimpleMilestoneConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IssueSimpleMilestone::class => false];
    }
}