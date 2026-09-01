<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SearchNoResultsErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\SearchNoResultsError::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\SearchNoResultsError::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\SearchNoResultsError();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('totalSize', $data) && \is_int($data['totalSize'])) {
            $data['totalSize'] = (float) $data['totalSize'];
        }
        if (\array_key_exists('totalSize', $data)) {
            $object->totalSize = $data['totalSize'];
            unset($data['totalSize']);
        }
        if (\array_key_exists('companies', $data)) {
            $values = new \CreditSafe\API\Runtime\JsonObject();
            foreach ($data['companies'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->companies = $values;
            unset($data['companies']);
        }
        if (\array_key_exists('messages', $data)) {
            $object->messages = $this->denormalizer->denormalize($data['messages'], \CreditSafe\API\Model\SearchNoResultsErrorMessages::class, 'json', $context);
            unset($data['messages']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('totalSize', get_object_vars($data)) && null !== ($data->totalSize ?? null)) {
            $dataArray['totalSize'] = $data->totalSize ?? null;
        }
        if (array_key_exists('companies', get_object_vars($data)) && null !== ($data->companies ?? null)) {
            $values = new \CreditSafe\API\Runtime\JsonObject();
            foreach ($data->companies ?? null as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['companies'] = $values;
        }
        if (array_key_exists('messages', get_object_vars($data)) && null !== ($data->messages ?? null)) {
            $dataArray['messages'] = ($data->messages ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->messages ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\SearchNoResultsError::class => false];
    }
}