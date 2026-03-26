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
class SystemModifyControlPlaneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane();
        if (\array_key_exists('enableAccessAndCoreSeparation', $data) && \is_int($data['enableAccessAndCoreSeparation'])) {
            $data['enableAccessAndCoreSeparation'] = (bool) $data['enableAccessAndCoreSeparation'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ipv4ControlInterface', $data)) {
            $object->setIpv4ControlInterface($this->denormalizer->denormalize($data['ipv4ControlInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4ControlInterface::class, 'json', $context));
        }
        if (\array_key_exists('ipv4ClusterInterface', $data)) {
            $object->setIpv4ClusterInterface($this->denormalizer->denormalize($data['ipv4ClusterInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4ClusterInterface::class, 'json', $context));
        }
        if (\array_key_exists('ipv4ManagementInterface', $data)) {
            $object->setIpv4ManagementInterface($this->denormalizer->denormalize($data['ipv4ManagementInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4ManagementInterface::class, 'json', $context));
        }
        if (\array_key_exists('ipv6ControlInterface', $data)) {
            $object->setIpv6ControlInterface($this->denormalizer->denormalize($data['ipv6ControlInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6ControlInterface::class, 'json', $context));
        }
        if (\array_key_exists('ipv6ManagementInterface', $data)) {
            $object->setIpv6ManagementInterface($this->denormalizer->denormalize($data['ipv6ManagementInterface'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6ManagementInterface::class, 'json', $context));
        }
        if (\array_key_exists('enableAccessAndCoreSeparation', $data)) {
            $object->setEnableAccessAndCoreSeparation($data['enableAccessAndCoreSeparation']);
        }
        if (\array_key_exists('ipv4AccessAndCoreSeparation', $data)) {
            $object->setIpv4AccessAndCoreSeparation($this->denormalizer->denormalize($data['ipv4AccessAndCoreSeparation'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv4AccessAndCoreSeparation::class, 'json', $context));
        }
        if (\array_key_exists('ipv6AccessAndCoreSeparation', $data)) {
            $object->setIpv6AccessAndCoreSeparation($this->denormalizer->denormalize($data['ipv6AccessAndCoreSeparation'], \Jane\Component\OpenApi3\Tests\Expected\Model\SystemIpv6AccessAndCoreSeparation::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ipv4ControlInterface') && null !== $data->getIpv4ControlInterface()) {
            $dataArray['ipv4ControlInterface'] = $this->normalizer->normalize($data->getIpv4ControlInterface(), 'json', $context);
        }
        if ($data->isInitialized('ipv4ClusterInterface') && null !== $data->getIpv4ClusterInterface()) {
            $dataArray['ipv4ClusterInterface'] = $this->normalizer->normalize($data->getIpv4ClusterInterface(), 'json', $context);
        }
        if ($data->isInitialized('ipv4ManagementInterface') && null !== $data->getIpv4ManagementInterface()) {
            $dataArray['ipv4ManagementInterface'] = $this->normalizer->normalize($data->getIpv4ManagementInterface(), 'json', $context);
        }
        if ($data->isInitialized('ipv6ControlInterface') && null !== $data->getIpv6ControlInterface()) {
            $dataArray['ipv6ControlInterface'] = $this->normalizer->normalize($data->getIpv6ControlInterface(), 'json', $context);
        }
        if ($data->isInitialized('ipv6ManagementInterface') && null !== $data->getIpv6ManagementInterface()) {
            $dataArray['ipv6ManagementInterface'] = $this->normalizer->normalize($data->getIpv6ManagementInterface(), 'json', $context);
        }
        if ($data->isInitialized('enableAccessAndCoreSeparation') && null !== $data->getEnableAccessAndCoreSeparation()) {
            $dataArray['enableAccessAndCoreSeparation'] = $data->getEnableAccessAndCoreSeparation();
        }
        if ($data->isInitialized('ipv4AccessAndCoreSeparation') && null !== $data->getIpv4AccessAndCoreSeparation()) {
            $dataArray['ipv4AccessAndCoreSeparation'] = $this->normalizer->normalize($data->getIpv4AccessAndCoreSeparation(), 'json', $context);
        }
        if ($data->isInitialized('ipv6AccessAndCoreSeparation') && null !== $data->getIpv6AccessAndCoreSeparation()) {
            $dataArray['ipv6AccessAndCoreSeparation'] = $this->normalizer->normalize($data->getIpv6AccessAndCoreSeparation(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemModifyControlPlane::class => false];
    }
}