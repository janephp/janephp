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
class SystemModifyDataPlaneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyDataPlane::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyDataPlane::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyDataPlane();
        if (\array_key_exists('keepConfig', $data) && \is_int($data['keepConfig'])) {
            $data['keepConfig'] = (bool) $data['keepConfig'];
        }
        if (\array_key_exists('isDataCenter', $data) && \is_int($data['isDataCenter'])) {
            $data['isDataCenter'] = (bool) $data['isDataCenter'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('interfaceMode', $data)) {
            $object->setInterfaceMode($data['interfaceMode']);
        }
        if (\array_key_exists('primaryInterface', $data)) {
            $object->setPrimaryInterface($this->denormalizer->denormalize($data['primaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemPrimaryInterface::class, 'json', $context));
        }
        if (\array_key_exists('ipv6PrimaryInterface', $data)) {
            $object->setIpv6PrimaryInterface($this->denormalizer->denormalize($data['ipv6PrimaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6PrimaryInterface::class, 'json', $context));
        }
        if (\array_key_exists('ipv6SecondaryInterface', $data)) {
            $object->setIpv6SecondaryInterface($this->denormalizer->denormalize($data['ipv6SecondaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6SecondaryInterface::class, 'json', $context));
        }
        if (\array_key_exists('secondaryInterface', $data)) {
            $object->setSecondaryInterface($this->denormalizer->denormalize($data['secondaryInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemSecondaryInterface::class, 'json', $context));
        }
        if (\array_key_exists('staticRoute', $data)) {
            $values = [];
            foreach ($data['staticRoute'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\SystemStaticRoute::class, 'json', $context);
            }
            $object->setStaticRoute($values);
        }
        if (\array_key_exists('keepConfig', $data)) {
            $object->setKeepConfig($data['keepConfig']);
        }
        if (\array_key_exists('isDataCenter', $data)) {
            $object->setIsDataCenter($data['isDataCenter']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['interfaceMode'] = $data->getInterfaceMode();
        $dataArray['primaryInterface'] = $this->normalizer->normalize($data->getPrimaryInterface(), 'json', $context);
        $dataArray['ipv6PrimaryInterface'] = $this->normalizer->normalize($data->getIpv6PrimaryInterface(), 'json', $context);
        if ($data->isInitialized('ipv6SecondaryInterface') && null !== $data->getIpv6SecondaryInterface()) {
            $dataArray['ipv6SecondaryInterface'] = $this->normalizer->normalize($data->getIpv6SecondaryInterface(), 'json', $context);
        }
        if ($data->isInitialized('secondaryInterface') && null !== $data->getSecondaryInterface()) {
            $dataArray['secondaryInterface'] = $this->normalizer->normalize($data->getSecondaryInterface(), 'json', $context);
        }
        if ($data->isInitialized('staticRoute') && null !== $data->getStaticRoute()) {
            $values = [];
            foreach ($data->getStaticRoute() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['staticRoute'] = $values;
        }
        if ($data->isInitialized('keepConfig') && null !== $data->getKeepConfig()) {
            $dataArray['keepConfig'] = $data->getKeepConfig();
        }
        if ($data->isInitialized('isDataCenter') && null !== $data->getIsDataCenter()) {
            $dataArray['isDataCenter'] = $data->getIsDataCenter();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyDataPlane::class => false];
    }
}