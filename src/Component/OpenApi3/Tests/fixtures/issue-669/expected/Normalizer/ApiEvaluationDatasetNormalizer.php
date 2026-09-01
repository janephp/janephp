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
            $object->createdAt = $date;
            unset($data['created_at']);
        }
        if (\array_key_exists('dataset_name', $data)) {
            $object->datasetName = $data['dataset_name'];
            unset($data['dataset_name']);
        }
        if (\array_key_exists('dataset_uuid', $data)) {
            $object->datasetUuid = $data['dataset_uuid'];
            unset($data['dataset_uuid']);
        }
        if (\array_key_exists('file_size', $data)) {
            $object->fileSize = $data['file_size'];
            unset($data['file_size']);
        }
        if (\array_key_exists('has_ground_truth', $data)) {
            $object->hasGroundTruth = $data['has_ground_truth'];
            unset($data['has_ground_truth']);
        }
        if (\array_key_exists('row_count', $data)) {
            $object->rowCount = $data['row_count'];
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
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = ($data->createdAt ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('datasetName', get_object_vars($data)) && null !== ($data->datasetName ?? null)) {
            $dataArray['dataset_name'] = $data->datasetName ?? null;
        }
        if (array_key_exists('datasetUuid', get_object_vars($data)) && null !== ($data->datasetUuid ?? null)) {
            $dataArray['dataset_uuid'] = $data->datasetUuid ?? null;
        }
        if (array_key_exists('fileSize', get_object_vars($data)) && null !== ($data->fileSize ?? null)) {
            $dataArray['file_size'] = $data->fileSize ?? null;
        }
        if (array_key_exists('hasGroundTruth', get_object_vars($data)) && null !== ($data->hasGroundTruth ?? null)) {
            $dataArray['has_ground_truth'] = $data->hasGroundTruth ?? null;
        }
        if (array_key_exists('rowCount', get_object_vars($data)) && null !== ($data->rowCount ?? null)) {
            $dataArray['row_count'] = $data->rowCount ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiEvaluationDataset::class => false];
    }
}