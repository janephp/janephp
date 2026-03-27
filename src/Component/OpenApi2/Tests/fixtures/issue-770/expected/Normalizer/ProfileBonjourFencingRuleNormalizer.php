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
class ProfileBonjourFencingRuleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRule::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRule::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRule();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('deviceType', $data)) {
            $object->setDeviceType($data['deviceType']);
        }
        if (\array_key_exists('deviceMacList', $data)) {
            $values = [];
            foreach ($data['deviceMacList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRuleDeviceMac::class, 'json', $context);
            }
            $object->setDeviceMacList($values);
        }
        if (\array_key_exists('closestAp', $data)) {
            $object->setClosestAp($data['closestAp']);
        }
        if (\array_key_exists('serviceType', $data)) {
            $object->setServiceType($data['serviceType']);
        }
        if (\array_key_exists('customServiceName', $data)) {
            $object->setCustomServiceName($data['customServiceName']);
        }
        if (\array_key_exists('fencingRange', $data)) {
            $object->setFencingRange($data['fencingRange']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['deviceType'] = $data->getDeviceType();
        if ($data->isInitialized('deviceMacList') && null !== $data->getDeviceMacList()) {
            $values = [];
            foreach ($data->getDeviceMacList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['deviceMacList'] = $values;
        }
        if ($data->isInitialized('closestAp') && null !== $data->getClosestAp()) {
            $dataArray['closestAp'] = $data->getClosestAp();
        }
        $dataArray['serviceType'] = $data->getServiceType();
        if ($data->isInitialized('customServiceName') && null !== $data->getCustomServiceName()) {
            $dataArray['customServiceName'] = $data->getCustomServiceName();
        }
        $dataArray['fencingRange'] = $data->getFencingRange();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRule::class => false];
    }
}