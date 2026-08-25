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
class XmpMappingEntryCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\XmpMappingEntryCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\XmpMappingEntryCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\XmpMappingEntryCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('stopProcessing', $data) && \is_int($data['stopProcessing'])) {
            $data['stopProcessing'] = (bool) $data['stopProcessing'];
        }
        if (\array_key_exists('direction', $data)) {
            $object->setDirection($data['direction']);
            unset($data['direction']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->setPriority($data['priority']);
            unset($data['priority']);
        }
        if (\array_key_exists('stopProcessing', $data)) {
            $object->setStopProcessing($data['stopProcessing']);
            unset($data['stopProcessing']);
        }
        if (\array_key_exists('xmpPath', $data)) {
            $object->setXmpPath($data['xmpPath']);
            unset($data['xmpPath']);
        }
        if (\array_key_exists('metadataPath', $data)) {
            $object->setMetadataPath($data['metadataPath']);
            unset($data['metadataPath']);
        }
        if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
            $object->setConfiguration($data['configuration']);
            unset($data['configuration']);
        }
        elseif (\array_key_exists('configuration', $data) && $data['configuration'] === null) {
            $object->setConfiguration(null);
            unset($data['configuration']);
        }
        if (\array_key_exists('requestId', $data) && $data['requestId'] !== null) {
            $object->setRequestId($data['requestId']);
            unset($data['requestId']);
        }
        elseif (\array_key_exists('requestId', $data) && $data['requestId'] === null) {
            $object->setRequestId(null);
            unset($data['requestId']);
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
        $dataArray['direction'] = $data->getDirection();
        $dataArray['priority'] = $data->getPriority();
        $dataArray['stopProcessing'] = $data->getStopProcessing();
        $dataArray['xmpPath'] = $data->getXmpPath();
        $dataArray['metadataPath'] = $data->getMetadataPath();
        if ($data->isInitialized('configuration') && null !== $data->getConfiguration()) {
            $dataArray['configuration'] = $data->getConfiguration();
        }
        if ($data->isInitialized('requestId') && null !== $data->getRequestId()) {
            $dataArray['requestId'] = $data->getRequestId();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\XmpMappingEntryCreateRequest::class => false];
    }
}