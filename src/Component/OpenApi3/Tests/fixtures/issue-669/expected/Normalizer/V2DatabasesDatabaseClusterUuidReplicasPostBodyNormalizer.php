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
class V2DatabasesDatabaseClusterUuidReplicasPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->tags = $values;
            unset($data['tags']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('private_network_uuid', $data)) {
            $object->privateNetworkUuid = $data['private_network_uuid'];
            unset($data['private_network_uuid']);
        }
        if (\array_key_exists('connection', $data)) {
            $object->connection = $this->denormalizer->denormalize($data['connection'], \Jane\Generated\DigitalOcean\Model\DatabaseReplicaConnection::class, 'json', $context);
            unset($data['connection']);
        }
        if (\array_key_exists('private_connection', $data)) {
            $object->privateConnection = $this->denormalizer->denormalize($data['private_connection'], \Jane\Generated\DigitalOcean\Model\DatabaseReplicaPrivateConnection::class, 'json', $context);
            unset($data['private_connection']);
        }
        if (\array_key_exists('storage_size_mib', $data)) {
            $object->storageSizeMib = $data['storage_size_mib'];
            unset($data['storage_size_mib']);
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
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('size', get_object_vars($data)) && null !== ($data->size ?? null)) {
            $dataArray['size'] = $data->size ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values = [];
            foreach ($data->tags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if (array_key_exists('privateNetworkUuid', get_object_vars($data)) && null !== ($data->privateNetworkUuid ?? null)) {
            $dataArray['private_network_uuid'] = $data->privateNetworkUuid ?? null;
        }
        if (array_key_exists('connection', get_object_vars($data)) && null !== ($data->connection ?? null)) {
            $dataArray['connection'] = ($data->connection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->connection ?? null, 'json', $context));
        }
        if (array_key_exists('privateConnection', get_object_vars($data)) && null !== ($data->privateConnection ?? null)) {
            $dataArray['private_connection'] = ($data->privateConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->privateConnection ?? null, 'json', $context));
        }
        if (array_key_exists('storageSizeMib', get_object_vars($data)) && null !== ($data->storageSizeMib ?? null)) {
            $dataArray['storage_size_mib'] = $data->storageSizeMib ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidReplicasPostBody::class => false];
    }
}