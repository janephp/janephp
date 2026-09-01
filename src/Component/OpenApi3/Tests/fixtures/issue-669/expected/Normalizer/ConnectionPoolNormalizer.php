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
class ConnectionPoolNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ConnectionPool::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ConnectionPool::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ConnectionPool();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('mode', $data)) {
            $object->mode = $data['mode'];
            unset($data['mode']);
        }
        if (\array_key_exists('size', $data)) {
            $object->size = $data['size'];
            unset($data['size']);
        }
        if (\array_key_exists('db', $data)) {
            $object->db = $data['db'];
            unset($data['db']);
        }
        if (\array_key_exists('user', $data)) {
            $object->user = $data['user'];
            unset($data['user']);
        }
        if (\array_key_exists('connection', $data)) {
            $object->connection = $this->denormalizer->denormalize($data['connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolConnection::class, 'json', $context);
            unset($data['connection']);
        }
        if (\array_key_exists('private_connection', $data)) {
            $object->privateConnection = $this->denormalizer->denormalize($data['private_connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolPrivateConnection::class, 'json', $context);
            unset($data['private_connection']);
        }
        if (\array_key_exists('standby_connection', $data)) {
            $object->standbyConnection = $this->denormalizer->denormalize($data['standby_connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyConnection::class, 'json', $context);
            unset($data['standby_connection']);
        }
        if (\array_key_exists('standby_private_connection', $data)) {
            $object->standbyPrivateConnection = $this->denormalizer->denormalize($data['standby_private_connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyPrivateConnection::class, 'json', $context);
            unset($data['standby_private_connection']);
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
        $dataArray['name'] = $data->name ?? null;
        $dataArray['mode'] = $data->mode ?? null;
        $dataArray['size'] = $data->size ?? null;
        $dataArray['db'] = $data->db ?? null;
        if (array_key_exists('user', get_object_vars($data)) && null !== ($data->user ?? null)) {
            $dataArray['user'] = $data->user ?? null;
        }
        if (array_key_exists('connection', get_object_vars($data)) && null !== ($data->connection ?? null)) {
            $dataArray['connection'] = ($data->connection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->connection ?? null, 'json', $context));
        }
        if (array_key_exists('privateConnection', get_object_vars($data)) && null !== ($data->privateConnection ?? null)) {
            $dataArray['private_connection'] = ($data->privateConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->privateConnection ?? null, 'json', $context));
        }
        if (array_key_exists('standbyConnection', get_object_vars($data)) && null !== ($data->standbyConnection ?? null)) {
            $dataArray['standby_connection'] = ($data->standbyConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->standbyConnection ?? null, 'json', $context));
        }
        if (array_key_exists('standbyPrivateConnection', get_object_vars($data)) && null !== ($data->standbyPrivateConnection ?? null)) {
            $dataArray['standby_private_connection'] = ($data->standbyPrivateConnection ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->standbyPrivateConnection ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\ConnectionPool::class => false];
    }
}