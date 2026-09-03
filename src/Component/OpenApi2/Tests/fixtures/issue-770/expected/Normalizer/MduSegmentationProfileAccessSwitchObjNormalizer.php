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
class MduSegmentationProfileAccessSwitchObjNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileAccessSwitchObj::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileAccessSwitchObj::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileAccessSwitchObj();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('vlanId', $data)) {
            $object->vlanId = $data['vlanId'];
        }
        if (\array_key_exists('webAuthPasswordLabel', $data)) {
            $object->webAuthPasswordLabel = $data['webAuthPasswordLabel'];
        }
        if (\array_key_exists('upLink', $data)) {
            $object->upLink = $this->denormalizer->denormalize($data['upLink'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileUpLinkObj::class, 'json', $context);
        }
        if (\array_key_exists('ports', $data)) {
            $values = [];
            foreach ($data['ports'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileRateLimitPorts::class, 'json', $context);
            }
            $object->ports = $values;
        }
        if (\array_key_exists('networkSegmentationDistributionSwitchId', $data)) {
            $object->networkSegmentationDistributionSwitchId = $data['networkSegmentationDistributionSwitchId'];
        }
        if (\array_key_exists('dispatchMessage', $data)) {
            $object->dispatchMessage = $data['dispatchMessage'];
        }
        if (\array_key_exists('webAuthCustomTitle', $data)) {
            $object->webAuthCustomTitle = $data['webAuthCustomTitle'];
        }
        if (\array_key_exists('webAuthCustomTop', $data)) {
            $object->webAuthCustomTop = $data['webAuthCustomTop'];
        }
        if (\array_key_exists('webAuthCustomLoginButton', $data)) {
            $object->webAuthCustomLoginButton = $data['webAuthCustomLoginButton'];
        }
        if (\array_key_exists('webAuthCustomBottom', $data)) {
            $object->webAuthCustomBottom = $data['webAuthCustomBottom'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('vlanId', get_object_vars($data)) && null !== ($data->vlanId ?? null)) {
            $dataArray['vlanId'] = $data->vlanId ?? null;
        }
        if (array_key_exists('webAuthPasswordLabel', get_object_vars($data)) && null !== ($data->webAuthPasswordLabel ?? null)) {
            $dataArray['webAuthPasswordLabel'] = $data->webAuthPasswordLabel ?? null;
        }
        if (array_key_exists('upLink', get_object_vars($data)) && null !== ($data->upLink ?? null)) {
            $dataArray['upLink'] = ($data->upLink ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->upLink ?? null, 'json', $context));
        }
        if (array_key_exists('ports', get_object_vars($data)) && null !== ($data->ports ?? null)) {
            $values = [];
            foreach ($data->ports ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['ports'] = $values;
        }
        if (array_key_exists('networkSegmentationDistributionSwitchId', get_object_vars($data)) && null !== ($data->networkSegmentationDistributionSwitchId ?? null)) {
            $dataArray['networkSegmentationDistributionSwitchId'] = $data->networkSegmentationDistributionSwitchId ?? null;
        }
        if (array_key_exists('dispatchMessage', get_object_vars($data)) && null !== ($data->dispatchMessage ?? null)) {
            $dataArray['dispatchMessage'] = $data->dispatchMessage ?? null;
        }
        if (array_key_exists('webAuthCustomTitle', get_object_vars($data)) && null !== ($data->webAuthCustomTitle ?? null)) {
            $dataArray['webAuthCustomTitle'] = $data->webAuthCustomTitle ?? null;
        }
        if (array_key_exists('webAuthCustomTop', get_object_vars($data)) && null !== ($data->webAuthCustomTop ?? null)) {
            $dataArray['webAuthCustomTop'] = $data->webAuthCustomTop ?? null;
        }
        if (array_key_exists('webAuthCustomLoginButton', get_object_vars($data)) && null !== ($data->webAuthCustomLoginButton ?? null)) {
            $dataArray['webAuthCustomLoginButton'] = $data->webAuthCustomLoginButton ?? null;
        }
        if (array_key_exists('webAuthCustomBottom', get_object_vars($data)) && null !== ($data->webAuthCustomBottom ?? null)) {
            $dataArray['webAuthCustomBottom'] = $data->webAuthCustomBottom ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileAccessSwitchObj::class => false];
    }
}