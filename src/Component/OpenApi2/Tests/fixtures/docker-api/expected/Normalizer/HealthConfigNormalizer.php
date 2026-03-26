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
class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\HealthConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\HealthConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\Api\Model\HealthConfig();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\HealthConfigConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Test', $data)) {
            $values = [];
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        }
        if (\array_key_exists('Interval', $data)) {
            $object->setInterval($data['Interval']);
        }
        if (\array_key_exists('Timeout', $data)) {
            $object->setTimeout($data['Timeout']);
        }
        if (\array_key_exists('Retries', $data)) {
            $object->setRetries($data['Retries']);
        }
        if (\array_key_exists('StartPeriod', $data)) {
            $object->setStartPeriod($data['StartPeriod']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('test') && null !== $data->getTest()) {
            $values = [];
            foreach ($data->getTest() as $value) {
                $values[] = $value;
            }
            $dataArray['Test'] = $values;
        }
        if ($data->isInitialized('interval') && null !== $data->getInterval()) {
            $dataArray['Interval'] = $data->getInterval();
        }
        if ($data->isInitialized('timeout') && null !== $data->getTimeout()) {
            $dataArray['Timeout'] = $data->getTimeout();
        }
        if ($data->isInitialized('retries') && null !== $data->getRetries()) {
            $dataArray['Retries'] = $data->getRetries();
        }
        if ($data->isInitialized('startPeriod') && null !== $data->getStartPeriod()) {
            $dataArray['StartPeriod'] = $data->getStartPeriod();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\HealthConfigConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\HealthConfig::class => false];
    }
}