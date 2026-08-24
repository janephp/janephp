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
class KubernetesNodePoolUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('auto_scale', $data) && \is_int($data['auto_scale'])) {
            $data['auto_scale'] = (bool) $data['auto_scale'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('count', $data)) {
            $object->setCount($data['count']);
            unset($data['count']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['labels'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setLabels($values_1);
            unset($data['labels']);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->setLabels(null);
        }
        if (\array_key_exists('taints', $data)) {
            $values_2 = [];
            foreach ($data['taints'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolTaint::class, 'json', $context);
            }
            $object->setTaints($values_2);
            unset($data['taints']);
        }
        if (\array_key_exists('auto_scale', $data)) {
            $object->setAutoScale($data['auto_scale']);
            unset($data['auto_scale']);
        }
        if (\array_key_exists('min_nodes', $data)) {
            $object->setMinNodes($data['min_nodes']);
            unset($data['min_nodes']);
        }
        if (\array_key_exists('max_nodes', $data)) {
            $object->setMaxNodes($data['max_nodes']);
            unset($data['max_nodes']);
        }
        if (\array_key_exists('nodes', $data)) {
            $values_3 = [];
            foreach ($data['nodes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\Node::class, 'json', $context);
            }
            $object->setNodes($values_3);
            unset($data['nodes']);
        }
        foreach ($data as $key_1 => $value_4) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('count') && null !== $data->getCount()) {
            $dataArray['count'] = $data->getCount();
        }
        if ($data->isInitialized('tags') && null !== $data->getTags()) {
            $values = [];
            foreach ($data->getTags() as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if ($data->isInitialized('labels') && null !== $data->getLabels()) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->getLabels() as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['labels'] = $values_1;
        }
        if ($data->isInitialized('taints') && null !== $data->getTaints()) {
            $values_2 = [];
            foreach ($data->getTaints() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['taints'] = $values_2;
        }
        if ($data->isInitialized('autoScale') && null !== $data->getAutoScale()) {
            $dataArray['auto_scale'] = $data->getAutoScale();
        }
        if ($data->isInitialized('minNodes') && null !== $data->getMinNodes()) {
            $dataArray['min_nodes'] = $data->getMinNodes();
        }
        if ($data->isInitialized('maxNodes') && null !== $data->getMaxNodes()) {
            $dataArray['max_nodes'] = $data->getMaxNodes();
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\KubernetesNodePoolUpdate::class => false];
    }
}