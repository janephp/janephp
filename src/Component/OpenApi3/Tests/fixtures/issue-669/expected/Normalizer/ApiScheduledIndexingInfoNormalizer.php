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
        $object = new \Jane\Generated\DigitalOcean\Model\ApiScheduledIndexingInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_active', $data) && \is_int($data['is_active'])) {
            $data['is_active'] = (bool) $data['is_active'];
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('days', $data)) {
            $values = [];
            foreach ($data['days'] as $value) {
                $values[] = $value;
            }
            $object->days = $values;
            unset($data['days']);
        }
        if (\array_key_exists('deleted_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['deleted_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['deleted_at'], 'Y-m-d\TH:i:sP');
            }
            $object->deletedAt = $date_1;
            unset($data['deleted_at']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->isActive = $data['is_active'];
            unset($data['is_active']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->knowledgeBaseUuid = $data['knowledge_base_uuid'];
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('last_ran_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_ran_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['last_ran_at'], 'Y-m-d\TH:i:sP');
            }
            $object->lastRanAt = $date_2;
            unset($data['last_ran_at']);
        }
        if (\array_key_exists('next_run_at', $data)) {
            $date_3 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['next_run_at']);
            if (false === $date_3) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['next_run_at'], 'Y-m-d\TH:i:sP');
            }
            $object->nextRunAt = $date_3;
            unset($data['next_run_at']);
        }
        if (\array_key_exists('time', $data)) {
            $object->time = $data['time'];
            unset($data['time']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_4 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_4) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_4;
            unset($data['updated_at']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
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
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('days', get_object_vars($data)) && null !== ($data->days ?? null)) {
            $values = [];
            foreach ($data->days ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['days'] = $values;
        }
        if (array_key_exists('deletedAt', get_object_vars($data)) && null !== ($data->deletedAt ?? null)) {
            $dataArray['deleted_at'] = ($data->deletedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('isActive', get_object_vars($data)) && null !== ($data->isActive ?? null)) {
            $dataArray['is_active'] = $data->isActive ?? null;
        }
        if (array_key_exists('knowledgeBaseUuid', get_object_vars($data)) && null !== ($data->knowledgeBaseUuid ?? null)) {
            $dataArray['knowledge_base_uuid'] = $data->knowledgeBaseUuid ?? null;
        }
        if (array_key_exists('lastRanAt', get_object_vars($data)) && null !== ($data->lastRanAt ?? null)) {
            $dataArray['last_ran_at'] = ($data->lastRanAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('nextRunAt', get_object_vars($data)) && null !== ($data->nextRunAt ?? null)) {
            $dataArray['next_run_at'] = ($data->nextRunAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('time', get_object_vars($data)) && null !== ($data->time ?? null)) {
            $dataArray['time'] = $data->time ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
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