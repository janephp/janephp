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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiUpdateEvaluationTestCaseInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->setDatasetUuid($data['dataset_uuid']);
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('metrics', $data)) {
            $object->setMetrics($this->denormalizer->denormalize($data['metrics'], \Jane\Generated\DigitalOcean\Model\ApiEvaluationTestCaseMetricList::class, 'json', $context));
            unset($data['metrics']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('star_metric', $data)) {
            $object->setStarMetric($this->denormalizer->denormalize($data['star_metric'], \Jane\Generated\DigitalOcean\Model\ApiStarMetric::class, 'json', $context));
            unset($data['star_metric']);
        }
        if (\array_key_exists('test_case_uuid', $data)) {
            $object->setTestCaseUuid($data['test_case_uuid']);
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
        if ($data->isInitialized('datasetUuid') && null !== $data->getDatasetUuid()) {
            $dataArray['dataset_uuid'] = $data->getDatasetUuid();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('metrics') && null !== $data->getMetrics()) {
            $dataArray['metrics'] = $this->normalizer->normalize($data->getMetrics(), 'json', $context);
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('starMetric') && null !== $data->getStarMetric()) {
            $dataArray['star_metric'] = $this->normalizer->normalize($data->getStarMetric(), 'json', $context);
        }
        if ($data->isInitialized('testCaseUuid') && null !== $data->getTestCaseUuid()) {
            $dataArray['test_case_uuid'] = $data->getTestCaseUuid();
        }
        foreach ($data as $key => $value) {
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