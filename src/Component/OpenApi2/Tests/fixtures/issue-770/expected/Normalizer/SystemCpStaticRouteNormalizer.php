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
class SystemCpStaticRouteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpStaticRoute::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpStaticRoute::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpStaticRoute();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('networkAddress', $data)) {
            $object->setNetworkAddress($data['networkAddress']);
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->setSubnetMask($data['subnetMask']);
        }
        if (\array_key_exists('gateway', $data)) {
            $object->setGateway($data['gateway']);
        }
        if (\array_key_exists('interfaceMode', $data)) {
            $object->setInterfaceMode($data['interfaceMode']);
        }
        if (\array_key_exists('metric', $data)) {
            $object->setMetric($data['metric']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('networkAddress') && null !== $data->getNetworkAddress()) {
            $dataArray['networkAddress'] = $data->getNetworkAddress();
        }
        if ($data->isInitialized('subnetMask') && null !== $data->getSubnetMask()) {
            $dataArray['subnetMask'] = $data->getSubnetMask();
        }
        if ($data->isInitialized('gateway') && null !== $data->getGateway()) {
            $dataArray['gateway'] = $data->getGateway();
        }
        if ($data->isInitialized('interfaceMode') && null !== $data->getInterfaceMode()) {
            $dataArray['interfaceMode'] = $data->getInterfaceMode();
        }
        if ($data->isInitialized('metric') && null !== $data->getMetric()) {
            $dataArray['metric'] = $data->getMetric();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpStaticRoute::class => false];
    }
}