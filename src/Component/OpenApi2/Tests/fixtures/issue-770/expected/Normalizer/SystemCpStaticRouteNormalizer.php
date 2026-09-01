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
            $object->networkAddress = $data['networkAddress'];
        }
        if (\array_key_exists('subnetMask', $data)) {
            $object->subnetMask = $data['subnetMask'];
        }
        if (\array_key_exists('gateway', $data)) {
            $object->gateway = $data['gateway'];
        }
        if (\array_key_exists('interfaceMode', $data)) {
            $object->interfaceMode = $data['interfaceMode'];
        }
        if (\array_key_exists('metric', $data)) {
            $object->metric = $data['metric'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('networkAddress', get_object_vars($data)) && null !== ($data->networkAddress ?? null)) {
            $dataArray['networkAddress'] = $data->networkAddress ?? null;
        }
        if (array_key_exists('subnetMask', get_object_vars($data)) && null !== ($data->subnetMask ?? null)) {
            $dataArray['subnetMask'] = $data->subnetMask ?? null;
        }
        if (array_key_exists('gateway', get_object_vars($data)) && null !== ($data->gateway ?? null)) {
            $dataArray['gateway'] = $data->gateway ?? null;
        }
        if (array_key_exists('interfaceMode', get_object_vars($data)) && null !== ($data->interfaceMode ?? null)) {
            $dataArray['interfaceMode'] = $data->interfaceMode ?? null;
        }
        if (array_key_exists('metric', get_object_vars($data)) && null !== ($data->metric ?? null)) {
            $dataArray['metric'] = $data->metric ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemCpStaticRoute::class => false];
    }
}