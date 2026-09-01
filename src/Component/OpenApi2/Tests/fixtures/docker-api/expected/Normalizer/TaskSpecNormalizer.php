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
class TaskSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskSpec();
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
            $this->validate($data, new \Docker\Api\Validator\TaskSpecConstraint());
        }
        if (\array_key_exists('PluginSpec', $data)) {
            $object->pluginSpec = $this->denormalizer->denormalize($data['PluginSpec'], \Docker\Api\Model\TaskSpecPluginSpec::class, 'json', $context);
        }
        if (\array_key_exists('ContainerSpec', $data)) {
            $object->containerSpec = $this->denormalizer->denormalize($data['ContainerSpec'], \Docker\Api\Model\TaskSpecContainerSpec::class, 'json', $context);
        }
        if (\array_key_exists('NetworkAttachmentSpec', $data)) {
            $object->networkAttachmentSpec = $this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \Docker\Api\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context);
        }
        if (\array_key_exists('Resources', $data)) {
            $object->resources = $this->denormalizer->denormalize($data['Resources'], \Docker\Api\Model\TaskSpecResources::class, 'json', $context);
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->restartPolicy = $this->denormalizer->denormalize($data['RestartPolicy'], \Docker\Api\Model\TaskSpecRestartPolicy::class, 'json', $context);
        }
        if (\array_key_exists('Placement', $data)) {
            $object->placement = $this->denormalizer->denormalize($data['Placement'], \Docker\Api\Model\TaskSpecPlacement::class, 'json', $context);
        }
        if (\array_key_exists('ForceUpdate', $data)) {
            $object->forceUpdate = $data['ForceUpdate'];
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->runtime = $data['Runtime'];
        }
        if (\array_key_exists('Networks', $data)) {
            $values = [];
            foreach ($data['Networks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->networks = $values;
        }
        if (\array_key_exists('LogDriver', $data)) {
            $object->logDriver = $this->denormalizer->denormalize($data['LogDriver'], \Docker\Api\Model\TaskSpecLogDriver::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('pluginSpec', get_object_vars($data)) && null !== ($data->pluginSpec ?? null)) {
            $dataArray['PluginSpec'] = ($data->pluginSpec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->pluginSpec ?? null, 'json', $context));
        }
        if (array_key_exists('containerSpec', get_object_vars($data)) && null !== ($data->containerSpec ?? null)) {
            $dataArray['ContainerSpec'] = ($data->containerSpec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->containerSpec ?? null, 'json', $context));
        }
        if (array_key_exists('networkAttachmentSpec', get_object_vars($data)) && null !== ($data->networkAttachmentSpec ?? null)) {
            $dataArray['NetworkAttachmentSpec'] = ($data->networkAttachmentSpec ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->networkAttachmentSpec ?? null, 'json', $context));
        }
        if (array_key_exists('resources', get_object_vars($data)) && null !== ($data->resources ?? null)) {
            $dataArray['Resources'] = ($data->resources ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->resources ?? null, 'json', $context));
        }
        if (array_key_exists('restartPolicy', get_object_vars($data)) && null !== ($data->restartPolicy ?? null)) {
            $dataArray['RestartPolicy'] = ($data->restartPolicy ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->restartPolicy ?? null, 'json', $context));
        }
        if (array_key_exists('placement', get_object_vars($data)) && null !== ($data->placement ?? null)) {
            $dataArray['Placement'] = ($data->placement ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->placement ?? null, 'json', $context));
        }
        if (array_key_exists('forceUpdate', get_object_vars($data)) && null !== ($data->forceUpdate ?? null)) {
            $dataArray['ForceUpdate'] = $data->forceUpdate ?? null;
        }
        if (array_key_exists('runtime', get_object_vars($data)) && null !== ($data->runtime ?? null)) {
            $dataArray['Runtime'] = $data->runtime ?? null;
        }
        if (array_key_exists('networks', get_object_vars($data)) && null !== ($data->networks ?? null)) {
            $values = [];
            foreach ($data->networks ?? null as $value) {
                $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['Networks'] = $values;
        }
        if (array_key_exists('logDriver', get_object_vars($data)) && null !== ($data->logDriver ?? null)) {
            $dataArray['LogDriver'] = ($data->logDriver ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->logDriver ?? null, 'json', $context));
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpec::class => false];
    }
}