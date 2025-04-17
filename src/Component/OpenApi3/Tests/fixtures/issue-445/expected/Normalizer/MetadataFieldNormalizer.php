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
class MetadataFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataField::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataField::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\MetadataField();
        if (\array_key_exists('isWritable', $data) && \is_int($data['isWritable'])) {
            $data['isWritable'] = (bool) $data['isWritable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
        }
        if (\array_key_exists('isWritable', $data)) {
            $object->setIsWritable($data['isWritable']);
        }
        if (\array_key_exists('dataType', $data)) {
            $object->setDataType($data['dataType']);
        }
        if (\array_key_exists('availableKeyFields', $data) && $data['availableKeyFields'] !== null) {
            $values = [];
            foreach ($data['availableKeyFields'] as $value) {
                $values[] = $value;
            }
            $object->setAvailableKeyFields($values);
        }
        elseif (\array_key_exists('availableKeyFields', $data) && $data['availableKeyFields'] === null) {
            $object->setAvailableKeyFields(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['path'] = $data->getPath();
        $dataArray['isWritable'] = $data->getIsWritable();
        $dataArray['dataType'] = $data->getDataType();
        if ($data->isInitialized('availableKeyFields') && null !== $data->getAvailableKeyFields()) {
            $values = [];
            foreach ($data->getAvailableKeyFields() as $value) {
                $values[] = $value;
            }
            $dataArray['availableKeyFields'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataField::class => false];
    }
}