<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiScheduledIndexingInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo();
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('days', $data)) {
            $values = [];
            foreach ($data['days'] as $value) {
                $values[] = $value;
            }
            $object->setDays($values);
            unset($data['days']);
        }
        if (\array_key_exists('deleted_at', $data)) {
            $object->setDeletedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['deleted_at']));
            unset($data['deleted_at']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
            unset($data['is_active']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->setKnowledgeBaseUuid($data['knowledge_base_uuid']);
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('last_ran_at', $data)) {
            $object->setLastRanAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_ran_at']));
            unset($data['last_ran_at']);
        }
        if (\array_key_exists('next_run_at', $data)) {
            $object->setNextRunAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['next_run_at']));
            unset($data['next_run_at']);
        }
        if (\array_key_exists('time', $data)) {
            $object->setTime($data['time']);
            unset($data['time']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->setUuid($data['uuid']);
            unset($data['uuid']);
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
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('days') && null !== $data->getDays()) {
            $values = [];
            foreach ($data->getDays() as $value) {
                $values[] = $value;
            }
            $dataArray['days'] = $values;
        }
        if ($data->isInitialized('deletedAt') && null !== $data->getDeletedAt()) {
            $dataArray['deleted_at'] = $data->getDeletedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('isActive') && null !== $data->getIsActive()) {
            $dataArray['is_active'] = $data->getIsActive();
        }
        if ($data->isInitialized('knowledgeBaseUuid') && null !== $data->getKnowledgeBaseUuid()) {
            $dataArray['knowledge_base_uuid'] = $data->getKnowledgeBaseUuid();
        }
        if ($data->isInitialized('lastRanAt') && null !== $data->getLastRanAt()) {
            $dataArray['last_ran_at'] = $data->getLastRanAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('nextRunAt') && null !== $data->getNextRunAt()) {
            $dataArray['next_run_at'] = $data->getNextRunAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('time') && null !== $data->getTime()) {
            $dataArray['time'] = $data->getTime();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('uuid') && null !== $data->getUuid()) {
            $dataArray['uuid'] = $data->getUuid();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo::class => false];
    }
}