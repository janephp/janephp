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
class ApiUpdateEvaluationTestCaseInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->datasetUuid = $data['dataset_uuid'];
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->metrics = $this->denormalizer->denormalize($data['metrics'], \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCaseMetricList::class, 'json', $context);
            unset($data['metrics']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('star_metric', $data)) {
            $object->starMetric = $this->denormalizer->denormalize($data['star_metric'], \Jane\Generated\DigitalOcean\Model\ApiStarMetric::class, 'json', $context);
            unset($data['star_metric']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->testCaseUuid = $data['test_case_uuid'];
            unset($data['test_case_uuid']);
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
        if (array_key_exists('datasetUuid', get_object_vars($data)) && null !== ($data->datasetUuid ?? null)) {
            $dataArray['dataset_uuid'] = $data->datasetUuid ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('metrics', get_object_vars($data)) && null !== ($data->metrics ?? null)) {
            $dataArray['metrics'] = ($data->metrics ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->metrics ?? null, 'json', $context));
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('starMetric', get_object_vars($data)) && null !== ($data->starMetric ?? null)) {
            $dataArray['star_metric'] = ($data->starMetric ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->starMetric ?? null, 'json', $context));
        }
        if (array_key_exists('testCaseUuid', get_object_vars($data)) && null !== ($data->testCaseUuid ?? null)) {
            $dataArray['test_case_uuid'] = $data->testCaseUuid ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic::class => false];
    }
}