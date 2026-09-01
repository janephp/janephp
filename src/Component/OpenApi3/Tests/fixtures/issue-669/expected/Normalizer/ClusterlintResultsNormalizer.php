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
class ClusterlintResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ClusterlintResults::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ClusterlintResults::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ClusterlintResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('run_id', $data)) {
            $object->runId = $data['run_id'];
            unset($data['run_id']);
        }
        if (\array_key_exists('requested_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['requested_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['requested_at'], 'Y-m-d\TH:i:sP');
            }
            $object->requestedAt = $date;
            unset($data['requested_at']);
        }
        if (\array_key_exists('completed_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['completed_at']);
            if (false === $date_1) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['completed_at'], 'Y-m-d\TH:i:sP');
            }
            $object->completedAt = $date_1;
            unset($data['completed_at']);
        }
        if (\array_key_exists('diagnostics', $data)) {
            $values = [];
            foreach ($data['diagnostics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ClusterlintResultsDiagnosticsItem::class, 'json', $context);
            }
            $object->diagnostics = $values;
            unset($data['diagnostics']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('runId', get_object_vars($data)) && null !== ($data->runId ?? null)) {
            $dataArray['run_id'] = $data->runId ?? null;
        }
        if (array_key_exists('requestedAt', get_object_vars($data)) && null !== ($data->requestedAt ?? null)) {
            $dataArray['requested_at'] = ($data->requestedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('completedAt', get_object_vars($data)) && null !== ($data->completedAt ?? null)) {
            $dataArray['completed_at'] = ($data->completedAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('diagnostics', get_object_vars($data)) && null !== ($data->diagnostics ?? null)) {
            $values = [];
            foreach ($data->diagnostics ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['diagnostics'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ClusterlintResults::class => false];
    }
}