<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PluginMountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\PluginMount::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\PluginMount::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\PluginMount();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\PluginMountConstraint());
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Description', $data)) {
            $object->description = $data['Description'];
        }
        if (\array_key_exists('Settable', $data)) {
            $values = [];
            foreach ($data['Settable'] as $value) {
                $values[] = $value;
            }
            $object->settable = $values;
        }
        if (\array_key_exists('Source', $data)) {
            $object->source = $data['Source'];
        }
        if (\array_key_exists('Destination', $data)) {
            $object->destination = $data['Destination'];
        }
        if (\array_key_exists('Type', $data)) {
            $object->type = $data['Type'];
        }
        if (\array_key_exists('Options', $data)) {
            $values_1 = [];
            foreach ($data['Options'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->options = $values_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['Name'] = $data->name ?? null;
        $dataArray['Description'] = $data->description ?? null;
        $values = [];
        foreach ($data->settable ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['Settable'] = $values;
        $dataArray['Source'] = $data->source ?? null;
        $dataArray['Destination'] = $data->destination ?? null;
        $dataArray['Type'] = $data->type ?? null;
        $values_1 = [];
        foreach ($data->options ?? null as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['Options'] = $values_1;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\PluginMountConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\PluginMount::class => false];
    }
}