<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CommonSnmpUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('readEnabled', $data) && \is_int($data['readEnabled'])) {
            $data['readEnabled'] = (bool) $data['readEnabled'];
        }
        if (\array_key_exists('writeEnabled', $data) && \is_int($data['writeEnabled'])) {
            $data['writeEnabled'] = (bool) $data['writeEnabled'];
        }
        if (\array_key_exists('notificationEnabled', $data) && \is_int($data['notificationEnabled'])) {
            $data['notificationEnabled'] = (bool) $data['notificationEnabled'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('authProtocol', $data)) {
            $object->authProtocol = $data['authProtocol'];
        }
        if (\array_key_exists('authPassword', $data)) {
            $object->authPassword = $data['authPassword'];
        }
        if (\array_key_exists('privProtocol', $data)) {
            $object->privProtocol = $data['privProtocol'];
        }
        if (\array_key_exists('privPassword', $data)) {
            $object->privPassword = $data['privPassword'];
        }
        if (\array_key_exists('readEnabled', $data)) {
            $object->readEnabled = $data['readEnabled'];
        }
        if (\array_key_exists('writeEnabled', $data)) {
            $object->writeEnabled = $data['writeEnabled'];
        }
        if (\array_key_exists('notificationEnabled', $data)) {
            $object->notificationEnabled = $data['notificationEnabled'];
        }
        if (\array_key_exists('notificationType', $data)) {
            $object->notificationType = $data['notificationType'];
        }
        if (\array_key_exists('notificationTarget', $data)) {
            $values = [];
            foreach ($data['notificationTarget'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonTargetConfig::class, 'json', $context);
            }
            $object->notificationTarget = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['userName'] = $data->userName ?? null;
        if (array_key_exists('authProtocol', get_object_vars($data)) && null !== ($data->authProtocol ?? null)) {
            $dataArray['authProtocol'] = $data->authProtocol ?? null;
        }
        if (array_key_exists('authPassword', get_object_vars($data)) && null !== ($data->authPassword ?? null)) {
            $dataArray['authPassword'] = $data->authPassword ?? null;
        }
        if (array_key_exists('privProtocol', get_object_vars($data)) && null !== ($data->privProtocol ?? null)) {
            $dataArray['privProtocol'] = $data->privProtocol ?? null;
        }
        if (array_key_exists('privPassword', get_object_vars($data)) && null !== ($data->privPassword ?? null)) {
            $dataArray['privPassword'] = $data->privPassword ?? null;
        }
        if (array_key_exists('readEnabled', get_object_vars($data)) && null !== ($data->readEnabled ?? null)) {
            $dataArray['readEnabled'] = $data->readEnabled ?? null;
        }
        if (array_key_exists('writeEnabled', get_object_vars($data)) && null !== ($data->writeEnabled ?? null)) {
            $dataArray['writeEnabled'] = $data->writeEnabled ?? null;
        }
        if (array_key_exists('notificationEnabled', get_object_vars($data)) && null !== ($data->notificationEnabled ?? null)) {
            $dataArray['notificationEnabled'] = $data->notificationEnabled ?? null;
        }
        if (array_key_exists('notificationType', get_object_vars($data)) && null !== ($data->notificationType ?? null)) {
            $dataArray['notificationType'] = $data->notificationType ?? null;
        }
        if (array_key_exists('notificationTarget', get_object_vars($data)) && null !== ($data->notificationTarget ?? null)) {
            $values = [];
            foreach ($data->notificationTarget ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['notificationTarget'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonSnmpUser::class => false];
    }
}