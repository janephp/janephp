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
class XmpMappingEntryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\XmpMappingEntry::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\XmpMappingEntry::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\XmpMappingEntry();
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
            $value = $data['direction'];
            if (is_string($data['direction'])) {
                $value = $data['direction'];
            }
            $object->direction = $value;
            unset($data['direction']);
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
            unset($data['priority']);
        }
        if (\array_key_exists('stopProcessing', $data)) {
            $object->stopProcessing = $data['stopProcessing'];
            unset($data['stopProcessing']);
        }
        if (\array_key_exists('xmpPath', $data)) {
            $object->xmpPath = $data['xmpPath'];
            unset($data['xmpPath']);
        }
        if (\array_key_exists('metadataPath', $data)) {
            $object->metadataPath = $data['metadataPath'];
            unset($data['metadataPath']);
        }
        if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
            $value_1 = $data['configuration'];
            if (is_array($data['configuration']) and \array_key_exists('kind', $data['configuration'])) {
                $value_1 = $this->denormalizer->denormalize($data['configuration'], \PicturePark\API\Model\XmpMappingEntryConfigurationBase::class, 'json', $context);
            }
            $object->configuration = $value_1;
            unset($data['configuration']);
        }
        elseif (\array_key_exists('configuration', $data)) {
            $object->configuration = null;
            unset($data['configuration']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->direction;
        if (is_string($data->direction)) {
            $value = $data->direction;
        }
        $dataArray['direction'] = $value;
        $dataArray['priority'] = $data->priority;
        $dataArray['stopProcessing'] = $data->stopProcessing;
        $dataArray['xmpPath'] = $data->xmpPath;
        $dataArray['metadataPath'] = $data->metadataPath;
        if (array_key_exists('configuration', get_object_vars($data)) && null !== ($data->configuration ?? null)) {
            $value_1 = $data->configuration;
            if (is_object($data->configuration)) {
                $normalized = $this->normalizer->normalize($data->configuration, 'json', $context);
                $value_1 = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['configuration'] = $value_1;
        }
        $dataArray['id'] = $data->id;
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\XmpMappingEntry::class => false];
    }
}