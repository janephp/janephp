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
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('mode', $data)) {
            $object->setMode($data['mode']);
            unset($data['mode']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('db', $data)) {
            $object->setDb($data['db']);
            unset($data['db']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        if (\array_key_exists('connection', $data)) {
            $object->setConnection($this->denormalizer->denormalize($data['connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolConnection::class, 'json', $context));
            unset($data['connection']);
        }
        if (\array_key_exists('private_connection', $data)) {
            $object->setPrivateConnection($this->denormalizer->denormalize($data['private_connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolPrivateConnection::class, 'json', $context));
            unset($data['private_connection']);
        }
        if (\array_key_exists('standby_connection', $data)) {
            $object->setStandbyConnection($this->denormalizer->denormalize($data['standby_connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyConnection::class, 'json', $context));
            unset($data['standby_connection']);
        }
        if (\array_key_exists('standby_private_connection', $data)) {
            $object->setStandbyPrivateConnection($this->denormalizer->denormalize($data['standby_private_connection'], \Jane\Generated\DigitalOcean\Model\ConnectionPoolStandbyPrivateConnection::class, 'json', $context));
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
        $dataArray['name'] = $data->getName();
        $dataArray['mode'] = $data->getMode();
        $dataArray['size'] = $data->getSize();
        $dataArray['db'] = $data->getDb();
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('connection') && null !== $data->getConnection()) {
            $dataArray['connection'] = $data->getConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getConnection(), 'json', $context));
        }
        if ($data->isInitialized('privateConnection') && null !== $data->getPrivateConnection()) {
            $dataArray['private_connection'] = $data->getPrivateConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getPrivateConnection(), 'json', $context));
        }
        if ($data->isInitialized('standbyConnection') && null !== $data->getStandbyConnection()) {
            $dataArray['standby_connection'] = $data->getStandbyConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getStandbyConnection(), 'json', $context));
        }
        if ($data->isInitialized('standbyPrivateConnection') && null !== $data->getStandbyPrivateConnection()) {
            $dataArray['standby_private_connection'] = $data->getStandbyPrivateConnection() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getStandbyPrivateConnection(), 'json', $context));
        }
        foreach ($data as $key => $value) {
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