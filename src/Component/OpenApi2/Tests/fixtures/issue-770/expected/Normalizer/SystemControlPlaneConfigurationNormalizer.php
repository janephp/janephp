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
class SystemControlPlaneConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ipv4ControlInterface', $data)) {
            $object->ipv4ControlInterface = $this->denormalizer->denormalize($data['ipv4ControlInterface'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4ControlInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv4ClusterInterface', $data)) {
            $object->ipv4ClusterInterface = $this->denormalizer->denormalize($data['ipv4ClusterInterface'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4ClusterInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv4ManagementInterface', $data)) {
            $object->ipv4ManagementInterface = $this->denormalizer->denormalize($data['ipv4ManagementInterface'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4ManagementInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv6ControlInterface', $data)) {
            $object->ipv6ControlInterface = $this->denormalizer->denormalize($data['ipv6ControlInterface'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6ControlInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv6ManagementInterface', $data)) {
            $object->ipv6ManagementInterface = $this->denormalizer->denormalize($data['ipv6ManagementInterface'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6ManagementInterface::class, 'json', $context);
        }
        if (\array_key_exists('ipv4AccessAndCoreSeparation', $data)) {
            $object->ipv4AccessAndCoreSeparation = $this->denormalizer->denormalize($data['ipv4AccessAndCoreSeparation'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv4AccessAndCoreSeparation::class, 'json', $context);
        }
        if (\array_key_exists('ipv6AccessAndCoreSeparation', $data)) {
            $object->ipv6AccessAndCoreSeparation = $this->denormalizer->denormalize($data['ipv6AccessAndCoreSeparation'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemIpv6AccessAndCoreSeparation::class, 'json', $context);
        }
        if (\array_key_exists('ipMode', $data)) {
            $object->ipMode = $data['ipMode'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ipv4ControlInterface', get_object_vars($data)) && null !== ($data->ipv4ControlInterface ?? null)) {
            $dataArray['ipv4ControlInterface'] = ($data->ipv4ControlInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv4ControlInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv4ClusterInterface', get_object_vars($data)) && null !== ($data->ipv4ClusterInterface ?? null)) {
            $dataArray['ipv4ClusterInterface'] = ($data->ipv4ClusterInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv4ClusterInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv4ManagementInterface', get_object_vars($data)) && null !== ($data->ipv4ManagementInterface ?? null)) {
            $dataArray['ipv4ManagementInterface'] = ($data->ipv4ManagementInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv4ManagementInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6ControlInterface', get_object_vars($data)) && null !== ($data->ipv6ControlInterface ?? null)) {
            $dataArray['ipv6ControlInterface'] = ($data->ipv6ControlInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv6ControlInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6ManagementInterface', get_object_vars($data)) && null !== ($data->ipv6ManagementInterface ?? null)) {
            $dataArray['ipv6ManagementInterface'] = ($data->ipv6ManagementInterface ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv6ManagementInterface ?? null, 'json', $context));
        }
        if (array_key_exists('ipv4AccessAndCoreSeparation', get_object_vars($data)) && null !== ($data->ipv4AccessAndCoreSeparation ?? null)) {
            $dataArray['ipv4AccessAndCoreSeparation'] = ($data->ipv4AccessAndCoreSeparation ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv4AccessAndCoreSeparation ?? null, 'json', $context));
        }
        if (array_key_exists('ipv6AccessAndCoreSeparation', get_object_vars($data)) && null !== ($data->ipv6AccessAndCoreSeparation ?? null)) {
            $dataArray['ipv6AccessAndCoreSeparation'] = ($data->ipv6AccessAndCoreSeparation ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ipv6AccessAndCoreSeparation ?? null, 'json', $context));
        }
        if (array_key_exists('ipMode', get_object_vars($data)) && null !== ($data->ipMode ?? null)) {
            $dataArray['ipMode'] = $data->ipMode ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\SystemControlPlaneConfiguration::class => false];
    }
}