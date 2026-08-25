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
class OutputFormatUpdateManyRequestItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputFormatUpdateManyRequestItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputFormatUpdateManyRequestItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputFormatUpdateManyRequestItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('viewForAll', $data) && \is_int($data['viewForAll'])) {
            $data['viewForAll'] = (bool) $data['viewForAll'];
        }
        if (\array_key_exists('enableXmpWriteback', $data) && \is_int($data['enableXmpWriteback'])) {
            $data['enableXmpWriteback'] = (bool) $data['enableXmpWriteback'];
        }
        if (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] !== null) {
            $value = $data['sourceOutputFormats'];
            if (is_array($data['sourceOutputFormats'])) {
                $value = $this->denormalizer->denormalize($data['sourceOutputFormats'], \PicturePark\API\Model\SourceOutputFormats::class, 'json', $context);
            }
            $object->setSourceOutputFormats($value);
            unset($data['sourceOutputFormats']);
        }
        elseif (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] === null) {
            $object->setSourceOutputFormats(null);
            unset($data['sourceOutputFormats']);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $value_1 = $data['format'];
            if (is_array($data['format']) and \array_key_exists('kind', $data['format'])) {
                $value_1 = $this->denormalizer->denormalize($data['format'], \PicturePark\API\Model\FormatBase::class, 'json', $context);
            }
            $object->setFormat($value_1);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
            unset($data['format']);
        }
        if (\array_key_exists('names', $data)) {
            $value_2 = $data['names'];
            if (is_array($data['names']) && $this->isOnlyNumericKeys($data['names'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['names'] as $key => $value_3) {
                    $values[$key] = $value_3;
                }
                $value_2 = $values;
            }
            $object->setNames($value_2);
            unset($data['names']);
        }
        if (\array_key_exists('retentionTime', $data)) {
            $object->setRetentionTime($data['retentionTime']);
            unset($data['retentionTime']);
        }
        if (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] !== null) {
            $value_4 = $data['downloadFileNamePatterns'];
            if (is_array($data['downloadFileNamePatterns']) && $this->isOnlyNumericKeys($data['downloadFileNamePatterns'])) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['downloadFileNamePatterns'] as $key_1 => $value_5) {
                    $values_1[$key_1] = $value_5;
                }
                $value_4 = $values_1;
            }
            $object->setDownloadFileNamePatterns($value_4);
            unset($data['downloadFileNamePatterns']);
        }
        elseif (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] === null) {
            $object->setDownloadFileNamePatterns(null);
            unset($data['downloadFileNamePatterns']);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->setViewForAll($data['viewForAll']);
            unset($data['viewForAll']);
        }
        if (\array_key_exists('enableXmpWriteback', $data)) {
            $object->setEnableXmpWriteback($data['enableXmpWriteback']);
            unset($data['enableXmpWriteback']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
            unset($data['id']);
        }
        foreach ($data as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $object[$key_2] = $value_6;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('sourceOutputFormats') && null !== $data->getSourceOutputFormats()) {
            $value = $data->getSourceOutputFormats();
            if (is_object($data->getSourceOutputFormats())) {
                $value = $data->getSourceOutputFormats() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getSourceOutputFormats(), 'json', $context));
            }
            $dataArray['sourceOutputFormats'] = $value;
        }
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $value_1 = $data->getFormat();
            if (is_object($data->getFormat())) {
                $value_1 = $data->getFormat() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getFormat(), 'json', $context));
            }
            $dataArray['format'] = $value_1;
        }
        $value_2 = $data->getNames();
        if (is_object($data->getNames())) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->getNames() as $key => $value_3) {
                $values[$key] = $value_3;
            }
            $value_2 = $values;
        }
        $dataArray['names'] = $value_2;
        if ($data->isInitialized('retentionTime') && null !== $data->getRetentionTime()) {
            $dataArray['retentionTime'] = $data->getRetentionTime();
        }
        if ($data->isInitialized('downloadFileNamePatterns') && null !== $data->getDownloadFileNamePatterns()) {
            $value_4 = $data->getDownloadFileNamePatterns();
            if (is_object($data->getDownloadFileNamePatterns())) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->getDownloadFileNamePatterns() as $key_1 => $value_5) {
                    $values_1[$key_1] = $value_5;
                }
                $value_4 = $values_1;
            }
            $dataArray['downloadFileNamePatterns'] = $value_4;
        }
        if ($data->isInitialized('viewForAll') && null !== $data->getViewForAll()) {
            $dataArray['viewForAll'] = $data->getViewForAll();
        }
        if ($data->isInitialized('enableXmpWriteback') && null !== $data->getEnableXmpWriteback()) {
            $dataArray['enableXmpWriteback'] = $data->getEnableXmpWriteback();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        foreach ($data->additionalPropertyEntries() as $key_2 => $value_6) {
            if (preg_match('/.*/', (string) $key_2)) {
                $dataArray[$key_2] = $value_6;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputFormatUpdateManyRequestItem::class => false];
    }
}