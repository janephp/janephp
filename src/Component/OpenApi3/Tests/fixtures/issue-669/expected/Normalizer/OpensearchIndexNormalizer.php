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
class OpensearchIndexNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OpensearchIndex::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OpensearchIndex::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchIndex();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('index_name', $data)) {
            $object->indexName = $data['index_name'];
            unset($data['index_name']);
        }
        if (\array_key_exists('number_of_shards', $data)) {
            $object->numberOfShards = $data['number_of_shards'];
            unset($data['number_of_shards']);
        }
        if (\array_key_exists('number_of_replicas', $data)) {
            $object->numberOfReplicas = $data['number_of_replicas'];
            unset($data['number_of_replicas']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('created_time', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_time']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_time'], 'Y-m-d\TH:i:sP');
            }
            $object->createdTime = $date;
            unset($data['created_time']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('health', $data)) {
            $object->health = $data['health'];
            unset($data['health']);
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
        if (array_key_exists('indexName', get_object_vars($data)) && null !== ($data->indexName ?? null)) {
            $dataArray['index_name'] = $data->indexName ?? null;
        }
        if (array_key_exists('numberOfShards', get_object_vars($data)) && null !== ($data->numberOfShards ?? null)) {
            $dataArray['number_of_shards'] = $data->numberOfShards ?? null;
        }
        if (array_key_exists('numberOfReplicas', get_object_vars($data)) && null !== ($data->numberOfReplicas ?? null)) {
            $dataArray['number_of_replicas'] = $data->numberOfReplicas ?? null;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('createdTime', get_object_vars($data)) && null !== ($data->createdTime ?? null)) {
            $dataArray['created_time'] = ($data->createdTime ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('health', get_object_vars($data)) && null !== ($data->health ?? null)) {
            $dataArray['health'] = $data->health ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\OpensearchIndex::class => false];
    }
}