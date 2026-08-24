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
class ApiEvaluationDatasetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_ground_truth', $data) && \is_int($data['has_ground_truth'])) {
            $data['has_ground_truth'] = (bool) $data['has_ground_truth'];
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('dataset_name', $data)) {
            $object->setDatasetName($data['dataset_name']);
            unset($data['dataset_name']);
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->setDatasetUuid($data['dataset_uuid']);
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('file_size', $data)) {
            $object->setFileSize($data['file_size']);
            unset($data['file_size']);
        }
        if (\array_key_exists('has_ground_truth', $data)) {
            $object->setHasGroundTruth($data['has_ground_truth']);
            unset($data['has_ground_truth']);
        }
        if (\array_key_exists('row_count', $data)) {
            $object->setRowCount($data['row_count']);
            unset($data['row_count']);
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
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('datasetName') && null !== $data->getDatasetName()) {
            $dataArray['dataset_name'] = $data->getDatasetName();
        }
        if ($data->isInitialized('datasetUuid') && null !== $data->getDatasetUuid()) {
            $dataArray['dataset_uuid'] = $data->getDatasetUuid();
        }
        if ($data->isInitialized('fileSize') && null !== $data->getFileSize()) {
            $dataArray['file_size'] = $data->getFileSize();
        }
        if ($data->isInitialized('hasGroundTruth') && null !== $data->getHasGroundTruth()) {
            $dataArray['has_ground_truth'] = $data->getHasGroundTruth();
        }
        if ($data->isInitialized('rowCount') && null !== $data->getRowCount()) {
            $dataArray['row_count'] = $data->getRowCount();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class => false];
    }
}