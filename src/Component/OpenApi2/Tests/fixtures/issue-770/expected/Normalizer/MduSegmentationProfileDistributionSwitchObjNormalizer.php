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
class MduSegmentationProfileDistributionSwitchObjNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileDistributionSwitchObj::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileDistributionSwitchObj::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileDistributionSwitchObj();
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
        if (\array_key_exists('siteName', $data)) {
            $object->siteName = $data['siteName'];
        }
        if (\array_key_exists('vlanList', $data)) {
            $object->vlanList = $data['vlanList'];
        }
        if (\array_key_exists('loopbackInterfaceId', $data)) {
            $object->loopbackInterfaceId = $data['loopbackInterfaceId'];
        }
        if (\array_key_exists('loopbackInterfaceIpAddress', $data)) {
            $object->loopbackInterfaceIpAddress = $data['loopbackInterfaceIpAddress'];
        }
        if (\array_key_exists('loopbackInterfaceSubnetMask', $data)) {
            $object->loopbackInterfaceSubnetMask = $data['loopbackInterfaceSubnetMask'];
        }
        if (\array_key_exists('siteSecondaryList', $data)) {
            $values = [];
            foreach ($data['siteSecondaryList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileSiteSecondary::class, 'json', $context);
            }
            $object->siteSecondaryList = $values;
        }
        if (\array_key_exists('siteKeepAlive', $data)) {
            $object->siteKeepAlive = $data['siteKeepAlive'];
        }
        if (\array_key_exists('siteRetry', $data)) {
            $object->siteRetry = $data['siteRetry'];
        }
        if (\array_key_exists('dispatchMessage', $data)) {
            $object->dispatchMessage = $data['dispatchMessage'];
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
        if (array_key_exists('siteName', get_object_vars($data)) && null !== ($data->siteName ?? null)) {
            $dataArray['siteName'] = $data->siteName ?? null;
        }
        if (array_key_exists('vlanList', get_object_vars($data)) && null !== ($data->vlanList ?? null)) {
            $dataArray['vlanList'] = $data->vlanList ?? null;
        }
        if (array_key_exists('loopbackInterfaceId', get_object_vars($data)) && null !== ($data->loopbackInterfaceId ?? null)) {
            $dataArray['loopbackInterfaceId'] = $data->loopbackInterfaceId ?? null;
        }
        if (array_key_exists('loopbackInterfaceIpAddress', get_object_vars($data)) && null !== ($data->loopbackInterfaceIpAddress ?? null)) {
            $dataArray['loopbackInterfaceIpAddress'] = $data->loopbackInterfaceIpAddress ?? null;
        }
        if (array_key_exists('loopbackInterfaceSubnetMask', get_object_vars($data)) && null !== ($data->loopbackInterfaceSubnetMask ?? null)) {
            $dataArray['loopbackInterfaceSubnetMask'] = $data->loopbackInterfaceSubnetMask ?? null;
        }
        if (array_key_exists('siteSecondaryList', get_object_vars($data)) && null !== ($data->siteSecondaryList ?? null)) {
            $values = [];
            foreach ($data->siteSecondaryList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['siteSecondaryList'] = $values;
        }
        if (array_key_exists('siteKeepAlive', get_object_vars($data)) && null !== ($data->siteKeepAlive ?? null)) {
            $dataArray['siteKeepAlive'] = $data->siteKeepAlive ?? null;
        }
        if (array_key_exists('siteRetry', get_object_vars($data)) && null !== ($data->siteRetry ?? null)) {
            $dataArray['siteRetry'] = $data->siteRetry ?? null;
        }
        if (array_key_exists('dispatchMessage', get_object_vars($data)) && null !== ($data->dispatchMessage ?? null)) {
            $dataArray['dispatchMessage'] = $data->dispatchMessage ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\MduSegmentationProfileDistributionSwitchObj::class => false];
    }
}