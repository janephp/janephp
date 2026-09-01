<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CommonSnmpCommunityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSnmpCommunity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSnmpCommunity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSnmpCommunity();
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
        if (\array_key_exists('communityName', $data)) {
            $object->communityName = $data['communityName'];
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
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonTargetConfig::class, 'json', $context);
            }
            $object->notificationTarget = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['communityName'] = $data->communityName ?? null;
        $dataArray['readEnabled'] = $data->readEnabled ?? null;
        $dataArray['writeEnabled'] = $data->writeEnabled ?? null;
        $dataArray['notificationEnabled'] = $data->notificationEnabled ?? null;
        if (array_key_exists('notificationType', get_object_vars($data)) && null !== ($data->notificationType ?? null)) {
            $dataArray['notificationType'] = $data->notificationType ?? null;
        }
        if (array_key_exists('notificationTarget', get_object_vars($data)) && null !== ($data->notificationTarget ?? null)) {
            $values = [];
            foreach ($data->notificationTarget ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['notificationTarget'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSnmpCommunity::class => false];
    }
}