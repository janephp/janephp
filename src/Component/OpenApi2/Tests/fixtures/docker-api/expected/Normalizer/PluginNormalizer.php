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
class PluginNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\Plugin::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\Plugin::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\Plugin();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('Enabled', $data) && \is_int($data['Enabled'])) {
            $data['Enabled'] = (bool) $data['Enabled'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\PluginConstraint());
        }
        if (\array_key_exists('Id', $data)) {
            $object->id = $data['Id'];
        }
        if (\array_key_exists('Name', $data)) {
            $object->name = $data['Name'];
        }
        if (\array_key_exists('Enabled', $data)) {
            $object->enabled = $data['Enabled'];
        }
        if (\array_key_exists('Settings', $data)) {
            $object->settings = $this->denormalizer->denormalize($data['Settings'], \Docker\Api\Model\PluginSettings::class, 'json', $context);
        }
        if (\array_key_exists('PluginReference', $data)) {
            $object->pluginReference = $data['PluginReference'];
        }
        if (\array_key_exists('Config', $data)) {
            $object->config = $this->denormalizer->denormalize($data['Config'], \Docker\Api\Model\PluginConfig::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['Id'] = $data->id;
        }
        $dataArray['Name'] = $data->name;
        $dataArray['Enabled'] = $data->enabled;
        $normalized = $data->settings === null ? null : $this->normalizer->normalize($data->settings, 'json', $context);
        $dataArray['Settings'] = \is_iterable($normalized) ? new \Docker\Api\Runtime\JsonObject($normalized) : $normalized;
        if (array_key_exists('pluginReference', get_object_vars($data)) && null !== ($data->pluginReference ?? null)) {
            $dataArray['PluginReference'] = $data->pluginReference;
        }
        $normalized_1 = $data->config === null ? null : $this->normalizer->normalize($data->config, 'json', $context);
        $dataArray['Config'] = \is_iterable($normalized_1) ? new \Docker\Api\Runtime\JsonObject($normalized_1) : $normalized_1;
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\PluginConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\Plugin::class => false];
    }
}