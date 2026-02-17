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
class MetadataValuesChangeCommandBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\MetadataValuesChangeCommandBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\MetadataValuesChangeCommandBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaUpdateCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesSchemaUpdateCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaUpsertCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesSchemaUpsertCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaRemoveCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesSchemaRemoveCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaReplaceCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesSchemaReplaceCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesFieldRemoveCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesFieldRemoveCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaItemAddCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesSchemaItemAddCommand', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'MetadataValuesSchemaItemRemoveCommand' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\MetadataValuesSchemaItemRemoveCommand', $format, $context);
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\MetadataValuesChangeCommandBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('schemaId', $data)) {
            $object->setSchemaId($data['schemaId']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== $data->getKind() and 'MetadataValuesSchemaUpdateCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MetadataValuesSchemaUpsertCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MetadataValuesSchemaRemoveCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MetadataValuesSchemaReplaceCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MetadataValuesFieldRemoveCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MetadataValuesSchemaItemAddCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== $data->getKind() and 'MetadataValuesSchemaItemRemoveCommand' === $data->getKind()) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['schemaId'] = $data->getSchemaId();
        $dataArray['kind'] = $data->getKind();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\MetadataValuesChangeCommandBase::class => false];
    }
}