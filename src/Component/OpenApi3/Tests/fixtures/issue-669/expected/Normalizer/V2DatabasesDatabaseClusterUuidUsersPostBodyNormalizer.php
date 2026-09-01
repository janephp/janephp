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
class V2DatabasesDatabaseClusterUuidUsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('readonly', $data) && \is_int($data['readonly'])) {
            $data['readonly'] = (bool) $data['readonly'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('role', $data)) {
            $object->role = $data['role'];
            unset($data['role']);
        }
        if (\array_key_exists('password', $data)) {
            $object->password = $data['password'];
            unset($data['password']);
        }
        if (\array_key_exists('access_cert', $data)) {
            $object->accessCert = $data['access_cert'];
            unset($data['access_cert']);
        }
        if (\array_key_exists('access_key', $data)) {
            $object->accessKey = $data['access_key'];
            unset($data['access_key']);
        }
        if (\array_key_exists('mysql_settings', $data)) {
            $object->mysqlSettings = $this->denormalizer->denormalize($data['mysql_settings'], \Jane\Generated\DigitalOcean\Model\MysqlSettings::class, 'json', $context);
            unset($data['mysql_settings']);
        }
        if (\array_key_exists('settings', $data)) {
            $object->settings = $this->denormalizer->denormalize($data['settings'], \Jane\Generated\DigitalOcean\Model\UserSettings::class, 'json', $context);
            unset($data['settings']);
        }
        if (\array_key_exists('readonly', $data)) {
            $object->readonly = $data['readonly'];
            unset($data['readonly']);
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
        if (array_key_exists('mysqlSettings', get_object_vars($data)) && null !== ($data->mysqlSettings ?? null)) {
            $dataArray['mysql_settings'] = ($data->mysqlSettings ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->mysqlSettings ?? null, 'json', $context));
        }
        if (array_key_exists('settings', get_object_vars($data)) && null !== ($data->settings ?? null)) {
            $dataArray['settings'] = ($data->settings ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->settings ?? null, 'json', $context));
        }
        if (array_key_exists('readonly', get_object_vars($data)) && null !== ($data->readonly ?? null)) {
            $dataArray['readonly'] = $data->readonly ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody::class => false];
    }
}