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
class ContentReferencesResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ContentReferencesResult::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ContentReferencesResult::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ContentReferencesResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('metadataReferences', $data) && $data['metadataReferences'] !== null) {
            $value = $data['metadataReferences'];
            if (is_array($data['metadataReferences'])) {
                $value = $this->denormalizer->denormalize($data['metadataReferences'], \PicturePark\API\Model\MetadataReferenceResult::class, 'json', $context);
            }
            $object->setMetadataReferences($value);
        }
        elseif (\array_key_exists('metadataReferences', $data) && $data['metadataReferences'] === null) {
            $object->setMetadataReferences(null);
        }
        if (\array_key_exists('shareReferences', $data) && $data['shareReferences'] !== null) {
            $value_1 = $data['shareReferences'];
            if (is_array($data['shareReferences'])) {
                $value_1 = $this->denormalizer->denormalize($data['shareReferences'], \PicturePark\API\Model\ContentShareReferenceResult::class, 'json', $context);
            }
            $object->setShareReferences($value_1);
        }
        elseif (\array_key_exists('shareReferences', $data) && $data['shareReferences'] === null) {
            $object->setShareReferences(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('metadataReferences') && null !== $data->getMetadataReferences()) {
            $value = $data->getMetadataReferences();
            if (is_object($data->getMetadataReferences())) {
                $value = $data->getMetadataReferences() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getMetadataReferences(), 'json', $context));
            }
            $dataArray['metadataReferences'] = $value;
        }
        if ($data->isInitialized('shareReferences') && null !== $data->getShareReferences()) {
            $value_1 = $data->getShareReferences();
            if (is_object($data->getShareReferences())) {
                $value_1 = $data->getShareReferences() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getShareReferences(), 'json', $context));
            }
            $dataArray['shareReferences'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ContentReferencesResult::class => false];
    }
}