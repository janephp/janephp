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
class XmpMappingEntryEditableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\XmpMappingEntryEditable::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\XmpMappingEntryEditable::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\XmpMappingEntryEditable();
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
        }
        if (\array_key_exists('priority', $data)) {
            $object->priority = $data['priority'];
        }
        if (\array_key_exists('stopProcessing', $data)) {
            $object->stopProcessing = $data['stopProcessing'];
        }
        if (\array_key_exists('xmpPath', $data)) {
            $object->xmpPath = $data['xmpPath'];
        }
        if (\array_key_exists('metadataPath', $data)) {
            $object->metadataPath = $data['metadataPath'];
        }
        if (\array_key_exists('configuration', $data) && $data['configuration'] !== null) {
            $value_1 = $data['configuration'];
            if (is_array($data['configuration']) and \array_key_exists('kind', $data['configuration'])) {
                $value_1 = $this->denormalizer->denormalize($data['configuration'], \PicturePark\API\Model\XmpMappingEntryConfigurationBase::class, 'json', $context);
            }
            $object->configuration = $value_1;
        }
        elseif (\array_key_exists('configuration', $data) && $data['configuration'] === null) {
            $object->configuration = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->direction ?? null;
        if (is_string($data->direction ?? null)) {
            $value = $data->direction ?? null;
        }
        $dataArray['direction'] = $value;
        $dataArray['priority'] = $data->priority ?? null;
        $dataArray['stopProcessing'] = $data->stopProcessing ?? null;
        $dataArray['xmpPath'] = $data->xmpPath ?? null;
        $dataArray['metadataPath'] = $data->metadataPath ?? null;
        if (array_key_exists('configuration', get_object_vars($data)) && null !== ($data->configuration ?? null)) {
            $value_1 = $data->configuration ?? null;
            if (is_object($data->configuration ?? null)) {
                $value_1 = ($data->configuration ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->configuration ?? null, 'json', $context));
            }
            $dataArray['configuration'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\XmpMappingEntryEditable::class => false];
    }
}