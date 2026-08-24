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
            $object->setSourceOutputFormats($data['sourceOutputFormats']);
            unset($data['sourceOutputFormats']);
        }
        elseif (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] === null) {
            $object->setSourceOutputFormats(null);
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        elseif (\array_key_exists('format', $data) && $data['format'] === null) {
            $object->setFormat(null);
        }
        if (\array_key_exists('names', $data)) {
            $object->setNames($data['names']);
            unset($data['names']);
        }
        if (\array_key_exists('retentionTime', $data)) {
            $object->setRetentionTime($data['retentionTime']);
            unset($data['retentionTime']);
        }
        if (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] !== null) {
            $object->setDownloadFileNamePatterns($data['downloadFileNamePatterns']);
            unset($data['downloadFileNamePatterns']);
        }
        elseif (\array_key_exists('downloadFileNamePatterns', $data) && $data['downloadFileNamePatterns'] === null) {
            $object->setDownloadFileNamePatterns(null);
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
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('sourceOutputFormats') && null !== $data->getSourceOutputFormats()) {
            $dataArray['sourceOutputFormats'] = $data->getSourceOutputFormats();
        }
        if ($data->isInitialized('format') && null !== $data->getFormat()) {
            $dataArray['format'] = $data->getFormat();
        }
        $dataArray['names'] = $data->getNames();
        if ($data->isInitialized('retentionTime') && null !== $data->getRetentionTime()) {
            $dataArray['retentionTime'] = $data->getRetentionTime();
        }
        if ($data->isInitialized('downloadFileNamePatterns') && null !== $data->getDownloadFileNamePatterns()) {
            $dataArray['downloadFileNamePatterns'] = $data->getDownloadFileNamePatterns();
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
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputFormatUpdateManyRequestItem::class => false];
    }
}