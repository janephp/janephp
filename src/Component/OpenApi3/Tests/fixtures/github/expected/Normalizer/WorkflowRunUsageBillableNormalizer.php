<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WorkflowRunUsageBillableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\WorkflowRunUsageBillable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\WorkflowRunUsageBillable::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\WorkflowRunUsageBillable();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\WorkflowRunUsageBillableConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('UBUNTU', $data)) {
            $object->setUBUNTU($this->denormalizer->denormalize($data['UBUNTU'], \Github\Model\WorkflowRunUsageBillableUBUNTU::class, 'json', $context));
            unset($data['UBUNTU']);
        }
        if (\array_key_exists('MACOS', $data)) {
            $object->setMACOS($this->denormalizer->denormalize($data['MACOS'], \Github\Model\WorkflowRunUsageBillableMACOS::class, 'json', $context));
            unset($data['MACOS']);
        }
        if (\array_key_exists('WINDOWS', $data)) {
            $object->setWINDOWS($this->denormalizer->denormalize($data['WINDOWS'], \Github\Model\WorkflowRunUsageBillableWINDOWS::class, 'json', $context));
            unset($data['WINDOWS']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('uBUNTU') && null !== $data->getUBUNTU()) {
            $dataArray['UBUNTU'] = $this->normalizer->normalize($data->getUBUNTU(), 'json', $context);
        }
        if ($data->isInitialized('mACOS') && null !== $data->getMACOS()) {
            $dataArray['MACOS'] = $this->normalizer->normalize($data->getMACOS(), 'json', $context);
        }
        if ($data->isInitialized('wINDOWS') && null !== $data->getWINDOWS()) {
            $dataArray['WINDOWS'] = $this->normalizer->normalize($data->getWINDOWS(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\WorkflowRunUsageBillableConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\WorkflowRunUsageBillable::class => false];
    }
}