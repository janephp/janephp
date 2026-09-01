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
            $object->deviceType = $data['deviceType'];
        }
        if (\array_key_exists('deviceMacList', $data)) {
            $values = [];
            foreach ($data['deviceMacList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRuleDeviceMac::class, 'json', $context);
            }
            $object->deviceMacList = $values;
        }
        if (\array_key_exists('closestAp', $data)) {
            $object->closestAp = $data['closestAp'];
        }
        if (\array_key_exists('serviceType', $data)) {
            $object->serviceType = $data['serviceType'];
        }
        if (\array_key_exists('customServiceName', $data)) {
            $object->customServiceName = $data['customServiceName'];
        }
        if (\array_key_exists('fencingRange', $data)) {
            $object->fencingRange = $data['fencingRange'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['deviceType'] = $data->deviceType ?? null;
        if (array_key_exists('deviceMacList', get_object_vars($data)) && null !== ($data->deviceMacList ?? null)) {
            $values = [];
            foreach ($data->deviceMacList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['deviceMacList'] = $values;
        }
        if (array_key_exists('closestAp', get_object_vars($data)) && null !== ($data->closestAp ?? null)) {
            $dataArray['closestAp'] = $data->closestAp ?? null;
        }
        $dataArray['serviceType'] = $data->serviceType ?? null;
        if (array_key_exists('customServiceName', get_object_vars($data)) && null !== ($data->customServiceName ?? null)) {
            $dataArray['customServiceName'] = $data->customServiceName ?? null;
        }
        $dataArray['fencingRange'] = $data->fencingRange ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBonjourFencingRule::class => false];
    }
}