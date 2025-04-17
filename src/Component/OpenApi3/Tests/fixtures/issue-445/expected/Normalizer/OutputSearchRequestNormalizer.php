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
class OutputSearchRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputSearchRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputSearchRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\OutputSearchRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('pageToken', $data) && $data['pageToken'] !== null) {
            $object->setPageToken($data['pageToken']);
        }
        elseif (\array_key_exists('pageToken', $data) && $data['pageToken'] === null) {
            $object->setPageToken(null);
        }
        if (\array_key_exists('contentIds', $data) && $data['contentIds'] !== null) {
            $values = [];
            foreach ($data['contentIds'] as $value) {
                $values[] = $value;
            }
            $object->setContentIds($values);
        }
        elseif (\array_key_exists('contentIds', $data) && $data['contentIds'] === null) {
            $object->setContentIds(null);
        }
        if (\array_key_exists('renderingStates', $data) && $data['renderingStates'] !== null) {
            $values_1 = [];
            foreach ($data['renderingStates'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRenderingStates($values_1);
        }
        elseif (\array_key_exists('renderingStates', $data) && $data['renderingStates'] === null) {
            $object->setRenderingStates(null);
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
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['limit'] = $data->getLimit();
        if ($data->isInitialized('pageToken') && null !== $data->getPageToken()) {
            $dataArray['pageToken'] = $data->getPageToken();
        }
        if ($data->isInitialized('contentIds') && null !== $data->getContentIds()) {
            $values = [];
            foreach ($data->getContentIds() as $value) {
                $values[] = $value;
            }
            $dataArray['contentIds'] = $values;
        }
        if ($data->isInitialized('renderingStates') && null !== $data->getRenderingStates()) {
            $values_1 = [];
            foreach ($data->getRenderingStates() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['renderingStates'] = $values_1;
        }
        if ($data->isInitialized('fileExtensions') && null !== $data->getFileExtensions()) {
            $values_2 = [];
            foreach ($data->getFileExtensions() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['fileExtensions'] = $values_2;
        }
        if ($data->isInitialized('outputFormatIds') && null !== $data->getOutputFormatIds()) {
            $values_3 = [];
            foreach ($data->getOutputFormatIds() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['outputFormatIds'] = $values_3;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputSearchRequest::class => false];
    }
}