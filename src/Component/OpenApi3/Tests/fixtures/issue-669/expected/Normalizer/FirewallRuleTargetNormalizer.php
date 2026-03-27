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
class FirewallRuleTargetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\FirewallRuleTarget::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\FirewallRuleTarget::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\FirewallRuleTarget();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('addresses', $data)) {
            $values = [];
            foreach ($data['addresses'] as $value) {
                $values[] = $value;
            }
            $object->setAddresses($values);
            unset($data['addresses']);
        }
        if (\array_key_exists('droplet_ids', $data)) {
            $values_1 = [];
            foreach ($data['droplet_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDropletIds($values_1);
            unset($data['droplet_ids']);
        }
        if (\array_key_exists('load_balancer_uids', $data)) {
            $values_2 = [];
            foreach ($data['load_balancer_uids'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLoadBalancerUids($values_2);
            unset($data['load_balancer_uids']);
        }
        if (\array_key_exists('kubernetes_ids', $data)) {
            $values_3 = [];
            foreach ($data['kubernetes_ids'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setKubernetesIds($values_3);
            unset($data['kubernetes_ids']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_4 = [];
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTags($values_4);
            unset($data['tags']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('addresses') && null !== $data->getAddresses()) {
            $values = [];
            foreach ($data->getAddresses() as $value) {
                $values[] = $value;
            }
            $dataArray['addresses'] = $values;
        }
        if ($data->isInitialized('dropletIds') && null !== $data->getDropletIds()) {
            $values_1 = [];
            foreach ($data->getDropletIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['droplet_ids'] = $values_1;
        }
        if ($data->isInitialized('loadBalancerUids') && null !== $data->getLoadBalancerUids()) {
            $values_2 = [];
            foreach ($data->getLoadBalancerUids() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['load_balancer_uids'] = $values_2;
        }
        if ($data->isInitialized('kubernetesIds') && null !== $data->getKubernetesIds()) {
            $values_3 = [];
            foreach ($data->getKubernetesIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['kubernetes_ids'] = $values_3;
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values_4 = [];
            foreach ($data->getTags() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['tags'] = $values_4;
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\FirewallRuleTarget::class => false];
    }
}