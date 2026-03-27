<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AssociatedKubernetesResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('load_balancers', $data)) {
            $values = [];
            foreach ($data['load_balancers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResource::class, 'json', $context);
            }
            $object->setLoadBalancers($values);
            unset($data['load_balancers']);
        }
        if (\array_key_exists('volumes', $data)) {
            $values_1 = [];
            foreach ($data['volumes'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResource::class, 'json', $context);
            }
            $object->setVolumes($values_1);
            unset($data['volumes']);
        }
        if (\array_key_exists('volume_snapshots', $data)) {
            $values_2 = [];
            foreach ($data['volume_snapshots'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResource::class, 'json', $context);
            }
            $object->setVolumeSnapshots($values_2);
            unset($data['volume_snapshots']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('loadBalancers') && null !== $data->getLoadBalancers()) {
            $values = [];
            foreach ($data->getLoadBalancers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['load_balancers'] = $values;
        }
        if ($data->isInitialized('volumes') && null !== $data->getVolumes()) {
            $values_1 = [];
            foreach ($data->getVolumes() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['volumes'] = $values_1;
        }
        if ($data->isInitialized('volumeSnapshots') && null !== $data->getVolumeSnapshots()) {
            $values_2 = [];
            foreach ($data->getVolumeSnapshots() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['volume_snapshots'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AssociatedKubernetesResources::class => false];
    }
}