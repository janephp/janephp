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
class ContentManyReferencesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentManyReferencesRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentManyReferencesRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentManyReferencesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('contentIds', $data)) {
            $values = [];
            foreach ($data['contentIds'] as $value) {
                $values[] = $value;
            }
            $object->contentIds = $values;
        }
        if (\array_key_exists('references', $data) && $data['references'] !== null) {
            $value_1 = $data['references'];
            if (is_array($data['references'])) {
                $value_1 = $this->denormalizer->denormalize($data['references'], \PicturePark\API\Model\MetadataReferencesPagingRequest::class, 'json', $context);
            }
            $object->references = $value_1;
        }
        elseif (\array_key_exists('references', $data) && $data['references'] === null) {
            $object->references = null;
        }
        if (\array_key_exists('shares', $data) && $data['shares'] !== null) {
            $value_2 = $data['shares'];
            if (is_array($data['shares']) and \array_key_exists('limit', $data['shares'])) {
                $value_2 = $this->denormalizer->denormalize($data['shares'], \PicturePark\API\Model\PagingRequest::class, 'json', $context);
            }
            $object->shares = $value_2;
        }
        elseif (\array_key_exists('shares', $data) && $data['shares'] === null) {
            $object->shares = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->contentIds ?? null as $value) {
            $values[] = $value;
        }
        $dataArray['contentIds'] = $values;
        if (array_key_exists('references', get_object_vars($data)) && null !== ($data->references ?? null)) {
            $value_1 = $data->references ?? null;
            if (is_object($data->references ?? null)) {
                $value_1 = ($data->references ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->references ?? null, 'json', $context));
            }
            $dataArray['references'] = $value_1;
        }
        if (array_key_exists('shares', get_object_vars($data)) && null !== ($data->shares ?? null)) {
            $value_2 = $data->shares ?? null;
            if (is_object($data->shares ?? null)) {
                $value_2 = ($data->shares ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->shares ?? null, 'json', $context));
            }
            $dataArray['shares'] = $value_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentManyReferencesRequest::class => false];
    }
}