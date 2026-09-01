<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AdministrationApplicationLogAndStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApplicationLogAndStatus::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApplicationLogAndStatus::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApplicationLogAndStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('applicationName', $data)) {
            $object->applicationName = $data['applicationName'];
        }
        if (\array_key_exists('healthStatus', $data)) {
            $object->healthStatus = $data['healthStatus'];
        }
        if (\array_key_exists('logLevel', $data)) {
            $object->logLevel = $data['logLevel'];
        }
        if (\array_key_exists('numOfLogs', $data)) {
            $object->numOfLogs = $data['numOfLogs'];
        }
        if (\array_key_exists('logFileNames', $data)) {
            $values = [];
            foreach ($data['logFileNames'] as $value) {
                $values[] = $value;
            }
            $object->logFileNames = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('applicationName', get_object_vars($data)) && null !== ($data->applicationName ?? null)) {
            $dataArray['applicationName'] = $data->applicationName ?? null;
        }
        if (array_key_exists('healthStatus', get_object_vars($data)) && null !== ($data->healthStatus ?? null)) {
            $dataArray['healthStatus'] = $data->healthStatus ?? null;
        }
        if (array_key_exists('logLevel', get_object_vars($data)) && null !== ($data->logLevel ?? null)) {
            $dataArray['logLevel'] = $data->logLevel ?? null;
        }
        if (array_key_exists('numOfLogs', get_object_vars($data)) && null !== ($data->numOfLogs ?? null)) {
            $dataArray['numOfLogs'] = $data->numOfLogs ?? null;
        }
        if (array_key_exists('logFileNames', get_object_vars($data)) && null !== ($data->logFileNames ?? null)) {
            $values = [];
            foreach ($data->logFileNames ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['logFileNames'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AdministrationApplicationLogAndStatus::class => false];
    }
}