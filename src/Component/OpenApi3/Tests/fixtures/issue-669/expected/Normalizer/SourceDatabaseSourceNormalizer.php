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
class SourceDatabaseSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('host', $data)) {
            $object->host = $data['host'];
            unset($data['host']);
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
            unset($data['port']);
        }
        if (\array_key_exists('dbname', $data)) {
            $object->dbname = $data['dbname'];
            unset($data['dbname']);
        }
        if (\array_key_exists('username', $data)) {
            $object->username = $data['username'];
            unset($data['username']);
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
            unset($data['password']);
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
        if (array_key_exists('host', get_object_vars($data)) && null !== ($data->host ?? null)) {
            $dataArray['host'] = $data->host ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('dbname', get_object_vars($data)) && null !== ($data->dbname ?? null)) {
            $dataArray['dbname'] = $data->dbname ?? null;
        }
        if (array_key_exists('username', get_object_vars($data)) && null !== ($data->username ?? null)) {
            $dataArray['username'] = $data->username ?? null;
        }
        if (array_key_exists('password', get_object_vars($data)) && null !== ($data->password ?? null)) {
            $dataArray['password'] = $data->password ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class => false];
    }
}