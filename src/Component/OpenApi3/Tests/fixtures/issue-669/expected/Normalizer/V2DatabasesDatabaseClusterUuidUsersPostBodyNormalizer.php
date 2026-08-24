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
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('role', $data)) {
            $object->setRole($data['role']);
            unset($data['role']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
            unset($data['password']);
        }
        if (\array_key_exists('access_cert', $data)) {
            $object->setAccessCert($data['access_cert']);
            unset($data['access_cert']);
        }
        if (\array_key_exists('access_key', $data)) {
            $object->setAccessKey($data['access_key']);
            unset($data['access_key']);
        }
        if (\array_key_exists('mysql_settings', $data)) {
            $object->setMysqlSettings($this->denormalizer->denormalize($data['mysql_settings'], \Jane\Generated\DigitalOcean\Model\MysqlSettings::class, 'json', $context));
            unset($data['mysql_settings']);
        }
        if (\array_key_exists('settings', $data)) {
            $object->setSettings($this->denormalizer->denormalize($data['settings'], \Jane\Generated\DigitalOcean\Model\UserSettings::class, 'json', $context));
            unset($data['settings']);
        }
        if (\array_key_exists('readonly', $data)) {
            $object->setReadonly($data['readonly']);
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
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('mysqlSettings') && null !== $data->getMysqlSettings()) {
            $dataArray['mysql_settings'] = $data->getMysqlSettings() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getMysqlSettings(), 'json', $context));
        }
        if ($data->isInitialized('settings') && null !== $data->getSettings()) {
            $dataArray['settings'] = $data->getSettings() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getSettings(), 'json', $context));
        }
        if ($data->isInitialized('readonly') && null !== $data->getReadonly()) {
            $dataArray['readonly'] = $data->getReadonly();
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
        return [\Jane\Generated\DigitalOcean\Model\V2DatabasesDatabaseClusterUuidUsersPostBody::class => false];
    }
}