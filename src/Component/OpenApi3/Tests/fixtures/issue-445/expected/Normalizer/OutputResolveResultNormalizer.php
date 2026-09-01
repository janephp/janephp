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
class OutputResolveResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputResolveResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputResolveResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputResolveResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dynamicRendering', $data) && \is_int($data['dynamicRendering'])) {
            $data['dynamicRendering'] = (bool) $data['dynamicRendering'];
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
        }
        if (\array_key_exists('outputFormatId', $data)) {
            $object->outputFormatId = $data['outputFormatId'];
        }
        if (\array_key_exists('contentId', $data)) {
            $object->contentId = $data['contentId'];
        }
        if (\array_key_exists('renderingState', $data)) {
            $value = $data['renderingState'];
            if (is_string($data['renderingState'])) {
                $value = $data['renderingState'];
            }
            $object->renderingState = $value;
        }
        if (\array_key_exists('dynamicRendering', $data)) {
            $object->dynamicRendering = $data['dynamicRendering'];
        }
        if (\array_key_exists('fileSize', $data) && $data['fileSize'] !== null) {
            $object->fileSize = $data['fileSize'];
        }
        elseif (\array_key_exists('fileSize', $data) && $data['fileSize'] === null) {
            $object->fileSize = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        $dataArray['outputFormatId'] = $data->outputFormatId ?? null;
        $dataArray['contentId'] = $data->contentId ?? null;
        $value = $data->renderingState ?? null;
        if (is_string($data->renderingState ?? null)) {
            $value = $data->renderingState ?? null;
        }
        $dataArray['renderingState'] = $value;
        $dataArray['dynamicRendering'] = $data->dynamicRendering ?? null;
        if (array_key_exists('fileSize', get_object_vars($data)) && null !== ($data->fileSize ?? null)) {
            $dataArray['fileSize'] = $data->fileSize ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputResolveResult::class => false];
    }
}