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
class UserSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\UserSettings::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\UserSettings::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\UserSettings();
        if (\array_key_exists('pg_allow_replication', $data) && \is_int($data['pg_allow_replication'])) {
            $data['pg_allow_replication'] = (bool) $data['pg_allow_replication'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pg_allow_replication', $data)) {
            $object->setPgAllowReplication($data['pg_allow_replication']);
            unset($data['pg_allow_replication']);
        }
        if (\array_key_exists('opensearch_acl', $data)) {
            $values = [];
            foreach ($data['opensearch_acl'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\UserSettingsOpensearchAclItem::class, 'json', $context);
            }
            $object->setOpensearchAcl($values);
            unset($data['opensearch_acl']);
        }
        if (\array_key_exists('acl', $data)) {
            $values_1 = [];
            foreach ($data['acl'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\UserSettingsAclItem::class, 'json', $context);
            }
            $object->setAcl($values_1);
            unset($data['acl']);
        }
        if (\array_key_exists('mongo_user_settings', $data)) {
            $object->setMongoUserSettings($this->denormalizer->denormalize($data['mongo_user_settings'], \Jane\Generated\DigitalOcean\Model\UserSettingsMongoUserSettings::class, 'json', $context));
            unset($data['mongo_user_settings']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('pgAllowReplication') && null !== $data->getPgAllowReplication()) {
            $dataArray['pg_allow_replication'] = $data->getPgAllowReplication();
        }
        if ($data->isInitialized('opensearchAcl') && null !== $data->getOpensearchAcl()) {
            $values = [];
            foreach ($data->getOpensearchAcl() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['opensearch_acl'] = $values;
        }
        if ($data->isInitialized('acl') && null !== $data->getAcl()) {
            $values_1 = [];
            foreach ($data->getAcl() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['acl'] = $values_1;
        }
        if ($data->isInitialized('mongoUserSettings') && null !== $data->getMongoUserSettings()) {
            $dataArray['mongo_user_settings'] = $this->normalizer->normalize($data->getMongoUserSettings(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\UserSettings::class => false];
    }
}