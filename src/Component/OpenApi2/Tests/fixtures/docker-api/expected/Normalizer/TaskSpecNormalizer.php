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
            $object->setPluginSpec($this->denormalizer->denormalize($data['PluginSpec'], \Docker\Api\Model\TaskSpecPluginSpec::class, 'json', $context));
        }
        if (\array_key_exists('ContainerSpec', $data)) {
            $object->setContainerSpec($this->denormalizer->denormalize($data['ContainerSpec'], \Docker\Api\Model\TaskSpecContainerSpec::class, 'json', $context));
        }
        if (\array_key_exists('NetworkAttachmentSpec', $data)) {
            $object->setNetworkAttachmentSpec($this->denormalizer->denormalize($data['NetworkAttachmentSpec'], \Docker\Api\Model\TaskSpecNetworkAttachmentSpec::class, 'json', $context));
        }
        if (\array_key_exists('Resources', $data)) {
            $object->setResources($this->denormalizer->denormalize($data['Resources'], \Docker\Api\Model\TaskSpecResources::class, 'json', $context));
        }
        if (\array_key_exists('RestartPolicy', $data)) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data['RestartPolicy'], \Docker\Api\Model\TaskSpecRestartPolicy::class, 'json', $context));
        }
        if (\array_key_exists('Placement', $data)) {
            $object->setPlacement($this->denormalizer->denormalize($data['Placement'], \Docker\Api\Model\TaskSpecPlacement::class, 'json', $context));
        }
        if (\array_key_exists('ForceUpdate', $data)) {
            $object->setForceUpdate($data['ForceUpdate']);
        }
        if (\array_key_exists('Runtime', $data)) {
            $object->setRuntime($data['Runtime']);
        }
        if (\array_key_exists('Networks', $data)) {
            $values = [];
            foreach ($data['Networks'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\NetworkAttachmentConfig::class, 'json', $context);
            }
            $object->setNetworks($values);
        }
        if (\array_key_exists('LogDriver', $data)) {
            $object->setLogDriver($this->denormalizer->denormalize($data['LogDriver'], \Docker\Api\Model\TaskSpecLogDriver::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('pluginSpec') && null !== $data->getPluginSpec()) {
            $dataArray['PluginSpec'] = $this->normalizer->normalize($data->getPluginSpec(), 'json', $context);
        }
        if ($data->isInitialized('containerSpec') && null !== $data->getContainerSpec()) {
            $dataArray['ContainerSpec'] = $this->normalizer->normalize($data->getContainerSpec(), 'json', $context);
        }
        if ($data->isInitialized('networkAttachmentSpec') && null !== $data->getNetworkAttachmentSpec()) {
            $dataArray['NetworkAttachmentSpec'] = $this->normalizer->normalize($data->getNetworkAttachmentSpec(), 'json', $context);
        }
        if ($data->isInitialized('resources') && null !== $data->getResources()) {
            $dataArray['Resources'] = $this->normalizer->normalize($data->getResources(), 'json', $context);
        }
        if ($data->isInitialized('restartPolicy') && null !== $data->getRestartPolicy()) {
            $dataArray['RestartPolicy'] = $this->normalizer->normalize($data->getRestartPolicy(), 'json', $context);
        }
        if ($data->isInitialized('placement') && null !== $data->getPlacement()) {
            $dataArray['Placement'] = $this->normalizer->normalize($data->getPlacement(), 'json', $context);
        }
        if ($data->isInitialized('forceUpdate') && null !== $data->getForceUpdate()) {
            $dataArray['ForceUpdate'] = $data->getForceUpdate();
        }
        if ($data->isInitialized('runtime') && null !== $data->getRuntime()) {
            $dataArray['Runtime'] = $data->getRuntime();
        }
        if ($data->isInitialized('networks') && null !== $data->getNetworks()) {
            $values = [];
            foreach ($data->getNetworks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['Networks'] = $values;
        }
        if ($data->isInitialized('logDriver') && null !== $data->getLogDriver()) {
            $dataArray['LogDriver'] = $this->normalizer->normalize($data->getLogDriver(), 'json', $context);
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