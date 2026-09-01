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
class SystemReservedPortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('trafficDirection', $data)) {
            $object->trafficDirection = $data['trafficDirection'];
        }
        if (\array_key_exists('portRange', $data)) {
            $object->portRange = $data['portRange'];
        }
        if (\array_key_exists('bindingInterface', $data)) {
            $object->bindingInterface = $data['bindingInterface'];
        }
        if (\array_key_exists('destination', $data)) {
            $object->destination = $data['destination'];
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
        }
        if (\array_key_exists('from', $data)) {
            $object->from = $data['from'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('trafficDirection', get_object_vars($data)) && null !== ($data->trafficDirection ?? null)) {
            $dataArray['trafficDirection'] = $data->trafficDirection ?? null;
        }
        if (array_key_exists('portRange', get_object_vars($data)) && null !== ($data->portRange ?? null)) {
            $dataArray['portRange'] = $data->portRange ?? null;
        }
        if (array_key_exists('bindingInterface', get_object_vars($data)) && null !== ($data->bindingInterface ?? null)) {
            $dataArray['bindingInterface'] = $data->bindingInterface ?? null;
        }
        if (array_key_exists('destination', get_object_vars($data)) && null !== ($data->destination ?? null)) {
            $dataArray['destination'] = $data->destination ?? null;
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('from', get_object_vars($data)) && null !== ($data->from ?? null)) {
            $dataArray['from'] = $data->from ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class => false];
    }
}