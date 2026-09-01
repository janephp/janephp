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
class KubernetesNodePoolBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolBase();
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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('count', $data)) {
            $object->count = $data['count'];
            unset($data['count']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->tags = $values;
            unset($data['tags']);
        }
        if (\array_key_exists('labels', $data) && $data['labels'] !== null) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data['labels'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->labels = $values_1;
            unset($data['labels']);
        }
        elseif (\array_key_exists('labels', $data) && $data['labels'] === null) {
            $object->labels = null;
            unset($data['labels']);
        }
        if (\array_key_exists('taints', $data)) {
            $values_2 = [];
            foreach ($data['taints'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\KubernetesNodePoolTaint::class, 'json', $context);
            }
            $object->taints = $values_2;
            unset($data['taints']);
        }
        if (\array_key_exists('auto_scale', $data)) {
            $object->autoScale = $data['auto_scale'];
            unset($data['auto_scale']);
        }
        if (\array_key_exists('min_nodes', $data)) {
            $object->minNodes = $data['min_nodes'];
            unset($data['min_nodes']);
        }
        if (\array_key_exists('max_nodes', $data)) {
            $object->maxNodes = $data['max_nodes'];
            unset($data['max_nodes']);
        }
        if (\array_key_exists('nodes', $data)) {
            $values_3 = [];
            foreach ($data['nodes'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, \Jane\Generated\DigitalOcean\Model\Node::class, 'json', $context);
            }
            $object->nodes = $values_3;
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('count', get_object_vars($data)) && null !== ($data->count ?? null)) {
            $dataArray['count'] = $data->count ?? null;
        }
        if (array_key_exists('tags', get_object_vars($data)) && null !== ($data->tags ?? null)) {
            $values = [];
            foreach ($data->tags ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['tags'] = $values;
        }
        if (array_key_exists('labels', get_object_vars($data)) && null !== ($data->labels ?? null)) {
            $values_1 = new \Jane\Generated\DigitalOcean\Runtime\JsonObject();
            foreach ($data->labels ?? null as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $dataArray['labels'] = $values_1;
        }
        if (array_key_exists('taints', get_object_vars($data)) && null !== ($data->taints ?? null)) {
            $values_2 = [];
            foreach ($data->taints ?? null as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['taints'] = $values_2;
        }
        if (array_key_exists('autoScale', get_object_vars($data)) && null !== ($data->autoScale ?? null)) {
            $dataArray['auto_scale'] = $data->autoScale ?? null;
        }
        if (array_key_exists('minNodes', get_object_vars($data)) && null !== ($data->minNodes ?? null)) {
            $dataArray['min_nodes'] = $data->minNodes ?? null;
        }
        if (array_key_exists('maxNodes', get_object_vars($data)) && null !== ($data->maxNodes ?? null)) {
            $dataArray['max_nodes'] = $data->maxNodes ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\KubernetesNodePoolBase::class => false];
    }
}