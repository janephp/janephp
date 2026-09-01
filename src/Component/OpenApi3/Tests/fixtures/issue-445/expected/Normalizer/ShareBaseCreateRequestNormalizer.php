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
class ShareBaseCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ShareBaseCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ShareBaseCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ShareBaseCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'ShareBasicCreateRequest' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ShareBasicCreateRequest', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'ShareEmbedCreateRequest' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ShareEmbedCreateRequest', $format, $context);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->description = $data['description'];
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->description = null;
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expirationDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['expirationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->expirationDate = $date;
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->expirationDate = null;
        }
        if (\array_key_exists('contents', $data)) {
            $values = [];
            foreach ($data['contents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\ShareContent::class, 'json', $context);
            }
            $object->contents = $values;
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['layerSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->layerSchemaIds = $values_1;
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
        }
        if (\array_key_exists('outputAccess', $data)) {
            $value_2 = $data['outputAccess'];
            if (is_string($data['outputAccess'])) {
                $value_2 = $data['outputAccess'];
            }
            $object->outputAccess = $value_2;
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'ShareBasicCreateRequest' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'ShareEmbedCreateRequest' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('expirationDate', get_object_vars($data)) && null !== ($data->expirationDate ?? null)) {
            $dataArray['expirationDate'] = ($data->expirationDate ?? null)?->format('Y-m-d\TH:i:sP');
        }
        $values = [];
        foreach ($data->contents ?? null as $value) {
            $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['contents'] = $values;
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values_1 = [];
            foreach ($data->layerSchemaIds ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['layerSchemaIds'] = $values_1;
        }
        $value_2 = $data->outputAccess ?? null;
        if (is_string($data->outputAccess ?? null)) {
            $value_2 = $data->outputAccess ?? null;
        }
        $dataArray['outputAccess'] = $value_2;
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareBaseCreateRequest::class => false];
    }
}