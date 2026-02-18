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
class ReposOwnerRepoCheckRunsCheckRunIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('details_url', $data)) {
            $object->setDetailsUrl($data['details_url']);
            unset($data['details_url']);
        }
        if (\array_key_exists('external_id', $data)) {
            $object->setExternalId($data['external_id']);
            unset($data['external_id']);
        }
        if (\array_key_exists('started_at', $data)) {
            $object->setStartedAt($data['started_at']);
            unset($data['started_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('conclusion', $data)) {
            $object->setConclusion($data['conclusion']);
            unset($data['conclusion']);
        }
        if (\array_key_exists('completed_at', $data)) {
            $object->setCompletedAt($data['completed_at']);
            unset($data['completed_at']);
        }
        if (\array_key_exists('output', $data)) {
            $object->setOutput($this->denormalizer->denormalize($data['output'], \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyOutput::class, 'json', $context));
            unset($data['output']);
        }
        if (\array_key_exists('actions', $data)) {
            $values = [];
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyActionsItem::class, 'json', $context);
            }
            $object->setActions($values);
            unset($data['actions']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('detailsUrl') && null !== $data->getDetailsUrl()) {
            $dataArray['details_url'] = $data->getDetailsUrl();
        }
        if ($data->isInitialized('externalId') && null !== $data->getExternalId()) {
            $dataArray['external_id'] = $data->getExternalId();
        }
        if ($data->isInitialized('startedAt') && null !== $data->getStartedAt()) {
            $dataArray['started_at'] = $data->getStartedAt();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('conclusion') && null !== $data->getConclusion()) {
            $dataArray['conclusion'] = $data->getConclusion();
        }
        if ($data->isInitialized('completedAt') && null !== $data->getCompletedAt()) {
            $dataArray['completed_at'] = $data->getCompletedAt();
        }
        if ($data->isInitialized('output') && null !== $data->getOutput()) {
            $dataArray['output'] = $this->normalizer->normalize($data->getOutput(), 'json', $context);
        }
        if ($data->isInitialized('actions') && null !== $data->getActions()) {
            $values = [];
            foreach ($data->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['actions'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoCheckRunsCheckRunIdPatchBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoCheckRunsCheckRunIdPatchBody::class => false];
    }
}