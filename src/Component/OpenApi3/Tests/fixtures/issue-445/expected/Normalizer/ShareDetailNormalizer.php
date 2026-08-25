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
class ShareDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ShareDetail::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ShareDetail::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ShareDetail();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('expired', $data) && \is_int($data['expired'])) {
            $data['expired'] = (bool) $data['expired'];
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('creator', $data)) {
            $value = $data['creator'];
            if (is_array($data['creator']) and \array_key_exists('displayName', $data['creator']) and \array_key_exists('emailHash', $data['creator'])) {
                $value = $this->denormalizer->denormalize($data['creator'], \PicturePark\API\Model\ShareUser::class, 'json', $context);
            }
            $object->setCreator($value);
        }
        if (\array_key_exists('audit', $data)) {
            $value_1 = $data['audit'];
            if (is_array($data['audit']) and \array_key_exists('creationDate', $data['audit']) and \array_key_exists('modificationDate', $data['audit'])) {
                $value_1 = $this->denormalizer->denormalize($data['audit'], \PicturePark\API\Model\UserAudit::class, 'json', $context);
            }
            $object->setAudit($value_1);
        }
        if (\array_key_exists('contentSelections', $data)) {
            $values = [];
            foreach ($data['contentSelections'] as $value_2) {
                $values[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\ShareContentDetail::class, 'json', $context);
            }
            $object->setContentSelections($values);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['layerSchemaIds'] as $value_3) {
                $values_1[] = $value_3;
            }
            $object->setLayerSchemaIds($values_1);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->setLayerSchemaIds(null);
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $value_4 = $data['data'];
            if (is_array($data['data']) and \array_key_exists('url', $data['data']) and \array_key_exists('kind', $data['data'])) {
                $value_4 = $this->denormalizer->denormalize($data['data'], \PicturePark\API\Model\ShareDataBase::class, 'json', $context);
            }
            $object->setData($value_4);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expirationDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['expirationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->setExpirationDate($date);
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('expired', $data)) {
            $object->setExpired($data['expired']);
        }
        if (\array_key_exists('outputAccess', $data)) {
            $value_5 = $data['outputAccess'];
            if (is_string($data['outputAccess'])) {
                $value_5 = $data['outputAccess'];
            }
            $object->setOutputAccess($value_5);
        }
        if (\array_key_exists('shareType', $data)) {
            $value_6 = $data['shareType'];
            if (is_string($data['shareType'])) {
                $value_6 = $data['shareType'];
            }
            $object->setShareType($value_6);
        }
        if (\array_key_exists('schemas', $data) && $data['schemas'] !== null) {
            $values_2 = [];
            foreach ($data['schemas'] as $value_7) {
                $values_2[] = $this->denormalizer->denormalize($value_7, \PicturePark\API\Model\SchemaDetail::class, 'json', $context);
            }
            $object->setSchemas($values_2);
        }
        elseif (\array_key_exists('schemas', $data) && $data['schemas'] === null) {
            $object->setSchemas(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        $value = $data->getCreator();
        if (is_object($data->getCreator())) {
            $value = $data->getCreator() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getCreator(), 'json', $context));
        }
        $dataArray['creator'] = $value;
        $value_1 = $data->getAudit();
        if (is_object($data->getAudit())) {
            $value_1 = $data->getAudit() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudit(), 'json', $context));
        }
        $dataArray['audit'] = $value_1;
        $values = [];
        foreach ($data->getContentSelections() as $value_2) {
            $values[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['contentSelections'] = $values;
        if ($data->isInitialized('layerSchemaIds') && null !== $data->getLayerSchemaIds()) {
            $values_1 = [];
            foreach ($data->getLayerSchemaIds() as $value_3) {
                $values_1[] = $value_3;
            }
            $dataArray['layerSchemaIds'] = $values_1;
        }
        if ($data->isInitialized('data') && null !== $data->getData()) {
            $value_4 = $data->getData();
            if (is_object($data->getData())) {
                $value_4 = $data->getData() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getData(), 'json', $context));
            }
            $dataArray['data'] = $value_4;
        }
        if ($data->isInitialized('expirationDate') && null !== $data->getExpirationDate()) {
            $dataArray['expirationDate'] = $data->getExpirationDate()?->format('Y-m-d\TH:i:sP');
        }
        $dataArray['expired'] = $data->getExpired();
        $value_5 = $data->getOutputAccess();
        if (is_string($data->getOutputAccess())) {
            $value_5 = $data->getOutputAccess();
        }
        $dataArray['outputAccess'] = $value_5;
        $value_6 = $data->getShareType();
        if (is_string($data->getShareType())) {
            $value_6 = $data->getShareType();
        }
        $dataArray['shareType'] = $value_6;
        if ($data->isInitialized('schemas') && null !== $data->getSchemas()) {
            $values_2 = [];
            foreach ($data->getSchemas() as $value_7) {
                $values_2[] = $value_7 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_7, 'json', $context));
            }
            $dataArray['schemas'] = $values_2;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareDetail::class => false];
    }
}