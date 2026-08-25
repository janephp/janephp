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
class ListItemManyReferencesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemManyReferencesRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemManyReferencesRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemManyReferencesRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('listItemIds', $data)) {
            $values = [];
            foreach ($data['listItemIds'] as $value) {
                $values[] = $value;
            }
            $object->setListItemIds($values);
        }
        if (\array_key_exists('references', $data) && $data['references'] !== null) {
            $value_1 = $data['references'];
            if (is_array($data['references'])) {
                $value_1 = $this->denormalizer->denormalize($data['references'], \PicturePark\API\Model\MetadataReferencesPagingRequest::class, 'json', $context);
            }
            $object->setReferences($value_1);
        }
        elseif (\array_key_exists('references', $data) && $data['references'] === null) {
            $object->setReferences(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $values = [];
        foreach ($data->getListItemIds() as $value) {
            $values[] = $value;
        }
        $dataArray['listItemIds'] = $values;
        if ($data->isInitialized('references') && null !== $data->getReferences()) {
            $value_1 = $data->getReferences();
            if (is_object($data->getReferences())) {
                $value_1 = $data->getReferences() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getReferences(), 'json', $context));
            }
            $dataArray['references'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemManyReferencesRequest::class => false];
    }
}