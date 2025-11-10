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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('trafficDirection', $data)) {
            $object->setTrafficDirection($data['trafficDirection']);
        }
        if (\array_key_exists('portRange', $data)) {
            $object->setPortRange($data['portRange']);
        }
        if (\array_key_exists('bindingInterface', $data)) {
            $object->setBindingInterface($data['bindingInterface']);
        }
        if (\array_key_exists('destination', $data)) {
            $object->setDestination($data['destination']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('from', $data)) {
            $object->setFrom($data['from']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('trafficDirection') && null !== $data->getTrafficDirection()) {
            $dataArray['trafficDirection'] = $data->getTrafficDirection();
        }
        if ($data->isInitialized('portRange') && null !== $data->getPortRange()) {
            $dataArray['portRange'] = $data->getPortRange();
        }
        if ($data->isInitialized('bindingInterface') && null !== $data->getBindingInterface()) {
            $dataArray['bindingInterface'] = $data->getBindingInterface();
        }
        if ($data->isInitialized('destination') && null !== $data->getDestination()) {
            $dataArray['destination'] = $data->getDestination();
        }
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        if ($data->isInitialized('from') && null !== $data->getFrom()) {
            $dataArray['from'] = $data->getFrom();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemReservedPort::class => false];
    }
}