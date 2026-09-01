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
class AppDatabaseSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppDatabaseSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppDatabaseSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppDatabaseSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('production', $data) && \is_int($data['production'])) {
            $data['production'] = (bool) $data['production'];
        }
        if (\array_key_exists('cluster_name', $data)) {
            $object->clusterName = $data['cluster_name'];
            unset($data['cluster_name']);
        }
        if (\array_key_exists('db_name', $data)) {
            $object->dbName = $data['db_name'];
            unset($data['db_name']);
        }
        if (\array_key_exists('db_user', $data)) {
            $object->dbUser = $data['db_user'];
            unset($data['db_user']);
        }
        if (\array_key_exists('engine', $data)) {
            $object->engine = $data['engine'];
            unset($data['engine']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('production', $data)) {
            $object->production = $data['production'];
            unset($data['production']);
        }
        if (\array_key_exists('version', $data)) {
            $object->version = $data['version'];
            unset($data['version']);
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
        if (array_key_exists('clusterName', get_object_vars($data)) && null !== ($data->clusterName ?? null)) {
            $dataArray['cluster_name'] = $data->clusterName ?? null;
        }
        if (array_key_exists('dbName', get_object_vars($data)) && null !== ($data->dbName ?? null)) {
            $dataArray['db_name'] = $data->dbName ?? null;
        }
        if (array_key_exists('dbUser', get_object_vars($data)) && null !== ($data->dbUser ?? null)) {
            $dataArray['db_user'] = $data->dbUser ?? null;
        }
        if (array_key_exists('engine', get_object_vars($data)) && null !== ($data->engine ?? null)) {
            $dataArray['engine'] = $data->engine ?? null;
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('production', get_object_vars($data)) && null !== ($data->production ?? null)) {
            $dataArray['production'] = $data->production ?? null;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['version'] = $data->version ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\AppDatabaseSpec::class => false];
    }
}