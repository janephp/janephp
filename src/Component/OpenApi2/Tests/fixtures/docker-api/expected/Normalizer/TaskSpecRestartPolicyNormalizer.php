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
class TaskSpecRestartPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\TaskSpecRestartPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\TaskSpecRestartPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\TaskSpecRestartPolicy();
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
            $this->validate($data, new \Docker\Api\Validator\TaskSpecRestartPolicyConstraint());
        }
        if (\array_key_exists('Condition', $data)) {
            $object->setCondition($data['Condition']);
        }
        if (\array_key_exists('Delay', $data)) {
            $object->setDelay($data['Delay']);
        }
        if (\array_key_exists('MaxAttempts', $data)) {
            $object->setMaxAttempts($data['MaxAttempts']);
        }
        if (\array_key_exists('Window', $data)) {
            $object->setWindow($data['Window']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('condition') && null !== $data->getCondition()) {
            $dataArray['Condition'] = $data->getCondition();
        }
        if ($data->isInitialized('delay') && null !== $data->getDelay()) {
            $dataArray['Delay'] = $data->getDelay();
        }
        if ($data->isInitialized('maxAttempts') && null !== $data->getMaxAttempts()) {
            $dataArray['MaxAttempts'] = $data->getMaxAttempts();
        }
        if ($data->isInitialized('window') && null !== $data->getWindow()) {
            $dataArray['Window'] = $data->getWindow();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\TaskSpecRestartPolicyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\TaskSpecRestartPolicy::class => false];
    }
}