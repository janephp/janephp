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
        $object = new \Docker\Api\Model\HealthConfig();
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
            $this->validate($data, new \Docker\Api\Validator\HealthConfigConstraint());
        }
        if (\array_key_exists('Test', $data)) {
            $values = [];
            foreach ($data['Test'] as $value) {
                $values[] = $value;
            }
            $object->test = $values;
        }
        if (\array_key_exists('Interval', $data)) {
            $object->interval = $data['Interval'];
        }
        if (\array_key_exists('Timeout', $data)) {
            $object->timeout = $data['Timeout'];
        }
        if (\array_key_exists('Retries', $data)) {
            $object->retries = $data['Retries'];
        }
        if (\array_key_exists('StartPeriod', $data)) {
            $object->startPeriod = $data['StartPeriod'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('test', get_object_vars($data)) && null !== ($data->test ?? null)) {
            $values = [];
            foreach ($data->test ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['Test'] = $values;
        }
        if (array_key_exists('interval', get_object_vars($data)) && null !== ($data->interval ?? null)) {
            $dataArray['Interval'] = $data->interval ?? null;
        }
        if (array_key_exists('timeout', get_object_vars($data)) && null !== ($data->timeout ?? null)) {
            $dataArray['Timeout'] = $data->timeout ?? null;
        }
        if (array_key_exists('retries', get_object_vars($data)) && null !== ($data->retries ?? null)) {
            $dataArray['Retries'] = $data->retries ?? null;
        }
        if (array_key_exists('startPeriod', get_object_vars($data)) && null !== ($data->startPeriod ?? null)) {
            $dataArray['StartPeriod'] = $data->startPeriod ?? null;
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