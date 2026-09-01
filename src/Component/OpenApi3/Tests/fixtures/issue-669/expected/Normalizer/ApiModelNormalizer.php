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
class ApiModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiModel::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiModel::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('is_foundational', $data) && \is_int($data['is_foundational'])) {
            $data['is_foundational'] = (bool) $data['is_foundational'];
        }
        if (\array_key_exists('upload_complete', $data) && \is_int($data['upload_complete'])) {
            $data['upload_complete'] = (bool) $data['upload_complete'];
        }
        if (\array_key_exists('agreement', $data)) {
            $object->agreement = $this->denormalizer->denormalize($data['agreement'], \Jane\Generated\DigitalOcean\Model\ApiAgreement::class, 'json', $context);
            unset($data['agreement']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('inference_name', $data)) {
            $object->inferenceName = $data['inference_name'];
            unset($data['inference_name']);
        }
        if (\array_key_exists('inference_version', $data)) {
            $object->inferenceVersion = $data['inference_version'];
            unset($data['inference_version']);
        }
        if (\array_key_exists('is_foundational', $data)) {
            $object->isFoundational = $data['is_foundational'];
            unset($data['is_foundational']);
        }
        if (\array_key_exists('kb_default_chunk_size', $data)) {
            $object->kbDefaultChunkSize = $data['kb_default_chunk_size'];
            unset($data['kb_default_chunk_size']);
        }
        if (\array_key_exists('kb_max_chunk_size', $data)) {
            $object->kbMaxChunkSize = $data['kb_max_chunk_size'];
            unset($data['kb_max_chunk_size']);
        }
        if (\array_key_exists('kb_min_chunk_size', $data)) {
            $object->kbMinChunkSize = $data['kb_min_chunk_size'];
            unset($data['kb_min_chunk_size']);
        }
        if (\array_key_exists('metadata', $data)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['metadata'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->metadata = $values;
            unset($data['metadata']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('parent_uuid', $data)) {
            $object->parentUuid = $data['parent_uuid'];
            unset($data['parent_uuid']);
        }
        if (\array_key_exists('provider', $data)) {
            $object->provider = $data['provider'];
            unset($data['provider']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->updatedAt = $date_1;
            unset($data['updated_at']);
        }
        if (\array_key_exists('upload_complete', $data)) {
            $object->uploadComplete = $data['upload_complete'];
            unset($data['upload_complete']);
        }
        if (\array_key_exists('url', $data)) {
            $object->url = $data['url'];
            unset($data['url']);
        }
        if (\array_key_exists('usecases', $data)) {
            $values_1 = [];
            foreach ($data['usecases'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->usecases = $values_1;
            unset($data['usecases']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $this->denormalizer->denormalize($data['version'], \Jane\Generated\DigitalOcean\Model\ApiModelVersion::class, 'json', $context);
            unset($data['version']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('agreement', get_object_vars($data)) && null !== ($data->agreement ?? null)) {
            $dataArray['agreement'] = ($data->agreement ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->agreement ?? null, 'json', $context));
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('inferenceName', get_object_vars($data)) && null !== ($data->inferenceName ?? null)) {
            $dataArray['inference_name'] = $data->inferenceName ?? null;
        }
        if (array_key_exists('inferenceVersion', get_object_vars($data)) && null !== ($data->inferenceVersion ?? null)) {
            $dataArray['inference_version'] = $data->inferenceVersion ?? null;
        }
        if (array_key_exists('isFoundational', get_object_vars($data)) && null !== ($data->isFoundational ?? null)) {
            $dataArray['is_foundational'] = $data->isFoundational ?? null;
        }
        if (array_key_exists('kbDefaultChunkSize', get_object_vars($data)) && null !== ($data->kbDefaultChunkSize ?? null)) {
            $dataArray['kb_default_chunk_size'] = $data->kbDefaultChunkSize ?? null;
        }
        if (array_key_exists('kbMaxChunkSize', get_object_vars($data)) && null !== ($data->kbMaxChunkSize ?? null)) {
            $dataArray['kb_max_chunk_size'] = $data->kbMaxChunkSize ?? null;
        }
        if (array_key_exists('kbMinChunkSize', get_object_vars($data)) && null !== ($data->kbMinChunkSize ?? null)) {
            $dataArray['kb_min_chunk_size'] = $data->kbMinChunkSize ?? null;
        }
        if (array_key_exists('metadata', get_object_vars($data)) && null !== ($data->metadata ?? null)) {
            $values = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->metadata ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['metadata'] = $values;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('parentUuid', get_object_vars($data)) && null !== ($data->parentUuid ?? null)) {
            $dataArray['parent_uuid'] = $data->parentUuid ?? null;
        }
        if (array_key_exists('provider', get_object_vars($data)) && null !== ($data->provider ?? null)) {
            $dataArray['provider'] = $data->provider ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = ($data->updatedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('uploadComplete', get_object_vars($data)) && null !== ($data->uploadComplete ?? null)) {
            $dataArray['upload_complete'] = $data->uploadComplete ?? null;
        }
        if (array_key_exists('url', get_object_vars($data)) && null !== ($data->url ?? null)) {
            $dataArray['url'] = $data->url ?? null;
        }
        if (array_key_exists('usecases', get_object_vars($data)) && null !== ($data->usecases ?? null)) {
            $values_1 = [];
            foreach ($data->usecases ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['usecases'] = $values_1;
        }
        if (array_key_exists('uuid', get_object_vars($data)) && null !== ($data->uuid ?? null)) {
            $dataArray['uuid'] = $data->uuid ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = ($data->version ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->version ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiModel::class => false];
    }
}