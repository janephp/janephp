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
class AlertPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AlertPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AlertPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AlertPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('alerts', $data)) {
            $object->alerts = $this->denormalizer->denormalize($data['alerts'], \Jane\Generated\DigitalOcean\Model\Alerts::class, 'json', $context);
            unset($data['alerts']);
        }
        if (\array_key_exists('compare', $data)) {
            $object->compare = $data['compare'];
            unset($data['compare']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->enabled = $data['enabled'];
            unset($data['enabled']);
        }
        if (\array_key_exists('entities', $data)) {
            $values = [];
            foreach ($data['entities'] as $value) {
                $values[] = $value;
            }
            $object->entities = $values;
            unset($data['entities']);
        }
        if (\array_key_exists('tags', $data)) {
            $values_1 = [];
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->tags = $values_1;
            unset($data['tags']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('uuid', $data)) {
            $object->uuid = $data['uuid'];
            unset($data['uuid']);
        }
        if (\array_key_exists('value', $data)) {
            $object->value = $data['value'];
            unset($data['value']);
        }
        if (\array_key_exists('window', $data)) {
            $object->window = $data['window'];
            unset($data['window']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['alerts'] = ($data->alerts ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->alerts ?? null, 'json', $context));
        $dataArray['compare'] = $data->compare ?? null;
        $dataArray['description'] = $data->description ?? null;
        $dataArray['enabled'] = $data->enabled ?? null;
        $values = [];
        foreach ($data->entities ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['entities'] = $values;
        $values_1 = [];
        foreach ($data->tags ?? null as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['tags'] = $values_1;
        $dataArray['type'] = $data->type ?? null;
        $dataArray['uuid'] = $data->uuid ?? null;
        $dataArray['value'] = $data->value ?? null;
        $dataArray['window'] = $data->window ?? null;
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AlertPolicy::class => false];
    }
}