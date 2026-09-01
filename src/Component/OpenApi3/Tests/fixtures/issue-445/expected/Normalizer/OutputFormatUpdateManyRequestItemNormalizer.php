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
            $object->sourceOutputFormats = $value;
            unset($data['sourceOutputFormats']);
        }
        elseif (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] === null) {
            $object->sourceOutputFormats = null;
            unset($data['sourceOutputFormats']);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $value_1 = $data['format'];
            if (is_array($data['format']) and \array_key_exists('kind', $data['format'])) {
                $value_1 = $this->denormalizer->denormalize($data['format'], \PicturePark\API\Model\FormatBase::class, 'json', $context);
            }
            $object->format = $value_1;
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->format = null;
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
            $object->names = $value_2;
            unset($data['names']);
        }
        if (\array_key_exists('retentionTime', $data)) {
            $object->retentionTime = $data['retentionTime'];
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
            $object->downloadFileNamePatterns = $value_4;
            unset($data['downloadFileNamePatterns']);
        }
        elseif (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] === null) {
            $object->downloadFileNamePatterns = null;
            unset($data['downloadFileNamePatterns']);
        }
        if (\array_key_exists('viewForAll', $data)) {
            $object->viewForAll = $data['viewForAll'];
            unset($data['viewForAll']);
        }
        if (\array_key_exists('enableXmpWriteback', $data)) {
            $object->enableXmpWriteback = $data['enableXmpWriteback'];
            unset($data['enableXmpWriteback']);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->id = null;
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
        if (array_key_exists('sourceOutputFormats', get_object_vars($data)) && null !== ($data->sourceOutputFormats ?? null)) {
            $value = $data->sourceOutputFormats ?? null;
            if (is_object($data->sourceOutputFormats ?? null)) {
                $value = ($data->sourceOutputFormats ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->sourceOutputFormats ?? null, 'json', $context));
            }
            $dataArray['sourceOutputFormats'] = $value;
        }
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $value_1 = $data->format ?? null;
            if (is_object($data->format ?? null)) {
                $value_1 = ($data->format ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->format ?? null, 'json', $context));
            }
            $dataArray['format'] = $value_1;
        }
        $value_2 = $data->names ?? null;
        if (is_object($data->names ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->names ?? null as $key => $value_3) {
                $values[$key] = $value_3;
            }
            $value_2 = $values;
        }
        $dataArray['names'] = $value_2;
        if (array_key_exists('retentionTime', get_object_vars($data)) && null !== ($data->retentionTime ?? null)) {
            $dataArray['retentionTime'] = $data->retentionTime ?? null;
        }
        if (array_key_exists('downloadFileNamePatterns', get_object_vars($data)) && null !== ($data->downloadFileNamePatterns ?? null)) {
            $value_4 = $data->downloadFileNamePatterns ?? null;
            if (is_object($data->downloadFileNamePatterns ?? null)) {
                $values_1 = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data->downloadFileNamePatterns ?? null as $key_1 => $value_5) {
                    $values_1[$key_1] = $value_5;
                }
                $value_4 = $values_1;
            }
            $dataArray['downloadFileNamePatterns'] = $value_4;
        }
        if (array_key_exists('viewForAll', get_object_vars($data)) && null !== ($data->viewForAll ?? null)) {
            $dataArray['viewForAll'] = $data->viewForAll ?? null;
        }
        if (array_key_exists('enableXmpWriteback', get_object_vars($data)) && null !== ($data->enableXmpWriteback ?? null)) {
            $dataArray['enableXmpWriteback'] = $data->enableXmpWriteback ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
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