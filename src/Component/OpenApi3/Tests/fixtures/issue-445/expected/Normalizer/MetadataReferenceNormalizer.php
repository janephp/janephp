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
class MetadataReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataReference::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataReference::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\MetadataReference();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('isRestricted', $data) && \is_int($data['isRestricted'])) {
            $data['isRestricted'] = (bool) $data['isRestricted'];
        }
        if (\array_key_exists('targetMetadataItemId', $data)) {
            $object->targetMetadataItemId = $data['targetMetadataItemId'];
        }
        if (\array_key_exists('isRestricted', $data)) {
            $object->isRestricted = $data['isRestricted'];
        }
        if (\array_key_exists('sourceMetadataItemId', $data) && $data['sourceMetadataItemId'] !== null) {
            $object->sourceMetadataItemId = $data['sourceMetadataItemId'];
        }
        elseif (\array_key_exists('sourceMetadataItemId', $data) && $data['sourceMetadataItemId'] === null) {
            $object->sourceMetadataItemId = null;
        }
        if (\array_key_exists('sourceDocType', $data) && $data['sourceDocType'] !== null) {
            $object->sourceDocType = $data['sourceDocType'];
        }
        elseif (\array_key_exists('sourceDocType', $data) && $data['sourceDocType'] === null) {
            $object->sourceDocType = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['targetMetadataItemId'] = $data->targetMetadataItemId ?? null;
        $dataArray['isRestricted'] = $data->isRestricted ?? null;
        if (array_key_exists('sourceMetadataItemId', get_object_vars($data)) && null !== ($data->sourceMetadataItemId ?? null)) {
            $dataArray['sourceMetadataItemId'] = $data->sourceMetadataItemId ?? null;
        }
        if (array_key_exists('sourceDocType', get_object_vars($data)) && null !== ($data->sourceDocType ?? null)) {
            $dataArray['sourceDocType'] = $data->sourceDocType ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataReference::class => false];
    }
}