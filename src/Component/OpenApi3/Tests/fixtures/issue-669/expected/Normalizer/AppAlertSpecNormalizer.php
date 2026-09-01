<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class AppAlertSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppAlertSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppAlertSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppAlertSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (float) $data['value'];
        }
        if (\array_key_exists('disabled', $data) && \is_int($data['disabled'])) {
            $data['disabled'] = (bool) $data['disabled'];
        }
        if (\array_key_exists('rule', $data)) {
            $object->rule = $data['rule'];
            unset($data['rule']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->disabled = $data['disabled'];
            unset($data['disabled']);
        }
        if (\array_key_exists('operator', $data)) {
            $object->operator = $data['operator'];
            unset($data['operator']);
        }
        if (\array_key_exists('value', $data)) {
            $object->value = $data['value'];
            unset($data['value']);
        }
        if (\array_key_exists('window', $data)) {
            $object->window = $data['window'];
            unset($data['window']);
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
        if (array_key_exists('rule', get_object_vars($data)) && null !== ($data->rule ?? null)) {
            $dataArray['rule'] = $data->rule ?? null;
        }
        if (array_key_exists('disabled', get_object_vars($data)) && null !== ($data->disabled ?? null)) {
            $dataArray['disabled'] = $data->disabled ?? null;
        }
        if (array_key_exists('operator', get_object_vars($data)) && null !== ($data->operator ?? null)) {
            $dataArray['operator'] = $data->operator ?? null;
        }
        if (array_key_exists('value', get_object_vars($data)) && null !== ($data->value ?? null)) {
            $dataArray['value'] = $data->value ?? null;
        }
        if (array_key_exists('window', get_object_vars($data)) && null !== ($data->window ?? null)) {
            $dataArray['window'] = $data->window ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppAlertSpec::class => false];
    }
}