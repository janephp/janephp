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
class PortalserviceCreateWechatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateWechat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateWechat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateWechat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('authUrl', $data)) {
            $object->authUrl = $data['authUrl'];
        }
        if (\array_key_exists('dnatDestination', $data)) {
            $object->dnatDestination = $data['dnatDestination'];
        }
        if (\array_key_exists('gracePeriod', $data)) {
            $object->gracePeriod = $data['gracePeriod'];
        }
        if (\array_key_exists('blackList', $data)) {
            $object->blackList = $data['blackList'];
        }
        if (\array_key_exists('whiteList', $data)) {
            $values = [];
            foreach ($data['whiteList'] as $value) {
                $values[] = $value;
            }
            $object->whiteList = $values;
        }
        if (\array_key_exists('dnatPortMapping', $data)) {
            $values_1 = [];
            foreach ($data['dnatPortMapping'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceDnatPortMapping::class, 'json', $context);
            }
            $object->dnatPortMapping = $values_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        $dataArray['authUrl'] = $data->authUrl ?? null;
        $dataArray['dnatDestination'] = $data->dnatDestination ?? null;
        if (array_key_exists('gracePeriod', get_object_vars($data)) && null !== ($data->gracePeriod ?? null)) {
            $dataArray['gracePeriod'] = $data->gracePeriod ?? null;
        }
        $dataArray['blackList'] = $data->blackList ?? null;
        $values = [];
        foreach ($data->whiteList ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['whiteList'] = $values;
        if (array_key_exists('dnatPortMapping', get_object_vars($data)) && null !== ($data->dnatPortMapping ?? null)) {
            $values_1 = [];
            foreach ($data->dnatPortMapping ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['dnatPortMapping'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateWechat::class => false];
    }
}