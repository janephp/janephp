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
class ApiKnowledgeBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_public', $data) && \is_int($data['is_public'])) {
            $data['is_public'] = (bool) $data['is_public'];
        }
        if (\array_key_exists('added_to_agent_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['added_to_agent_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['added_to_agent_at'], 'Y-m-d\TH:i:sP');
            }
            $object->addedToAgentAt = $date;
            unset($data['added_to_agent_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date_1;
            unset($data['created_at']);
        }
        if (\array_key_exists('database_id', $data)) {
            $object->databaseId = $data['database_id'];
            unset($data['database_id']);
        }
        if (\array_key_exists('embedding_model_uuid', $data)) {
            $object->embeddingModelUuid = $data['embedding_model_uuid'];
            unset($data['embedding_model_uuid']);
        }
        if (\array_key_exists('is_public', $data)) {
            $object->isPublic = $data['is_public'];
            unset($data['is_public']);
        }
        if (\array_key_exists('last_indexing_job', $data)) {
            $object->lastIndexingJob = $this->denormalizer->denormalize($data['last_indexing_job'], \Jane\Generated\DigitalOcean\Model\ApiIndexingJob::class, 'json', $context);
            unset($data['last_indexing_job']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->projectId = $data['project_id'];
            unset($data['project_id']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->tags = $values;
            unset($data['tags']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_2) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_2;
            unset($data['updated_at']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->userId = $data['user_id'];
            unset($data['user_id']);
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
        if (array_key_exists('addedToAgentAt', get_object_vars($data)) && null !== ($data->addedToAgentAt ?? null)) {
            $dataArray['added_to_agent_at'] = ($data->addedToAgentAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('databaseId', get_object_vars($data)) && null !== ($data->databaseId ?? null)) {
            $dataArray['database_id'] = $data->databaseId ?? null;
        }
        if (array_key_exists('embeddingModelUuid', get_object_vars($data)) && null !== ($data->embeddingModelUuid ?? null)) {
            $dataArray['embedding_model_uuid'] = $data->embeddingModelUuid ?? null;
        }
        if (array_key_exists('isPublic', get_object_vars($data)) && null !== ($data->isPublic ?? null)) {
            $dataArray['is_public'] = $data->isPublic ?? null;
        }
        if (array_key_exists('lastIndexingJob', get_object_vars($data)) && null !== ($data->lastIndexingJob ?? null)) {
            $dataArray['last_indexing_job'] = ($data->lastIndexingJob ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->lastIndexingJob ?? null, 'json', $context));
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('projectId', get_object_vars($data)) && null !== ($data->projectId ?? null)) {
            $dataArray['project_id'] = $data->projectId ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values = [];
            foreach ($data->tags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('userId', get_object_vars($data)) && null !== ($data->userId ?? null)) {
            $dataArray['user_id'] = $data->userId ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiKnowledgeBase::class => false];
    }
}