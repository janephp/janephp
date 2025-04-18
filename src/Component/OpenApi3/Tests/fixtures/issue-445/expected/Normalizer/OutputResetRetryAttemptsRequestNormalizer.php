<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class OutputResetRetryAttemptsRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputResetRetryAttemptsRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputResetRetryAttemptsRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\OutputResetRetryAttemptsRequest();
        if (\array_key_exists('includeCompleted', $data) && \is_int($data['includeCompleted'])) {
            $data['includeCompleted'] = (bool) $data['includeCompleted'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('outputIds', $data) && $data['outputIds'] !== null) {
            $values = [];
            foreach ($data['outputIds'] as $value) {
                $values[] = $value;
            }
            $object->setOutputIds($values);
        }
        elseif (\array_key_exists('outputIds', $data) && $data['outputIds'] === null) {
            $object->setOutputIds(null);
        }
        if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
            $values_1 = [];
            foreach ($data['contentIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setContentIds($values_1);
        }
        elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
            $object->setContentIds(null);
        }
        if (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] !== null) {
            $values_2 = [];
            foreach ($data['fileExtensions'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setFileExtensions($values_2);
        }
        elseif (\array_key_exists('fileExtensions', $data) && $data['fileExtensions'] === null) {
            $object->setFileExtensions(null);
        }
        if (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] !== null) {
            $values_3 = [];
            foreach ($data['outputFormatIds'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setOutputFormatIds($values_3);
        }
        elseif (\array_key_exists('outputFormatIds', $data) && $data['outputFormatIds'] === null) {
            $object->setOutputFormatIds(null);
        }
        if (\array_key_exists('includeCompleted', $data)) {
            $object->setIncludeCompleted($data['includeCompleted']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('outputIds')) {
            $values = [];
            foreach ($data->getOutputIds() as $value) {
                $values[] = $value;
            }
            $dataArray['outputIds'] = $values;
        }
        if ($data->isInitialized('contentIds')) {
            $values_1 = [];
            foreach ($data->getContentIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['contentIds'] = $values_1;
        }
        if ($data->isInitialized('fileExtensions')) {
            $values_2 = [];
            foreach ($data->getFileExtensions() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['fileExtensions'] = $values_2;
        }
        if ($data->isInitialized('outputFormatIds')) {
            $values_3 = [];
            foreach ($data->getOutputFormatIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['outputFormatIds'] = $values_3;
        }
        $dataArray['includeCompleted'] = $data->getIncludeCompleted();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputResetRetryAttemptsRequest::class => false];
    }
}