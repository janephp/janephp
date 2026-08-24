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
class ApSnmpAgentProfileApSnmpCommunityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpCommunity::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpCommunity::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpCommunity();
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
            $object->setCommunityName($data['communityName']);
        }
        if (\array_key_exists('readEnabled', $data)) {
            $object->setReadEnabled($data['readEnabled']);
        }
        if (\array_key_exists('writeEnabled', $data)) {
            $object->setWriteEnabled($data['writeEnabled']);
        }
        if (\array_key_exists('notificationEnabled', $data)) {
            $object->setNotificationEnabled($data['notificationEnabled']);
        }
        if (\array_key_exists('notificationType', $data)) {
            $object->setNotificationType($data['notificationType']);
        }
        if (\array_key_exists('notificationTarget', $data)) {
            $values = [];
            foreach ($data['notificationTarget'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileTargetConfig::class, 'json', $context);
            }
            $object->setNotificationTarget($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['communityName'] = $data->getCommunityName();
        $dataArray['readEnabled'] = $data->getReadEnabled();
        $dataArray['writeEnabled'] = $data->getWriteEnabled();
        $dataArray['notificationEnabled'] = $data->getNotificationEnabled();
        if ($data->isInitialized('notificationType') && null !== $data->getNotificationType()) {
            $dataArray['notificationType'] = $data->getNotificationType();
        }
        if ($data->isInitialized('notificationTarget') && null !== $data->getNotificationTarget()) {
            $values = [];
            foreach ($data->getNotificationTarget() as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['notificationTarget'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApSnmpAgentProfileApSnmpCommunity::class => false];
    }
}