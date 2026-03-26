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
class ReposOwnerRepoIssuesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoIssuesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoIssuesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoIssuesPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoIssuesPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($data['assignee']);
            unset($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($data['milestone']);
            unset($data['milestone']);
        }
        elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
            $object->setMilestone(null);
        }
        if (\array_key_exists('labels', $data)) {
            $values = [];
            foreach ($data['labels'] as $value) {
                $values[] = $value;
            }
            $object->setLabels($values);
            unset($data['labels']);
        }
        if (\array_key_exists('assignees', $data)) {
            $values_1 = [];
            foreach ($data['assignees'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAssignees($values_1);
            unset($data['assignees']);
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
        $dataArray['title'] = $data->getTitle();
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('assignee')) {
            $dataArray['assignee'] = $data->getAssignee();
        }
        if ($data->isInitialized('milestone')) {
            $dataArray['milestone'] = $data->getMilestone();
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values = [];
            foreach ($data->getLabels() as $value) {
                $values[] = $value;
            }
            $dataArray['labels'] = $values;
        }
        if ($data->isInitialized('assignees') && null !== $data->getAssignees()) {
            $values_1 = [];
            foreach ($data->getAssignees() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['assignees'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoIssuesPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoIssuesPostBody::class => false];
    }
}