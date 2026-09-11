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
class OutputFormatRenderingSpecificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputFormatRenderingSpecification::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputFormatRenderingSpecification::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputFormatRenderingSpecification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('sourceOutputFormats', $data) && $data['sourceOutputFormats'] !== null) {
            $value = $data['sourceOutputFormats'];
            if (is_array($data['sourceOutputFormats'])) {
                $value = $this->denormalizer->denormalize($data['sourceOutputFormats'], \PicturePark\API\Model\SourceOutputFormats::class, 'json', $context);
            }
            $object->sourceOutputFormats = $value;
        }
        elseif (\array_key_exists('sourceOutputFormats', $data)) {
            $object->sourceOutputFormats = null;
        }
        if (\array_key_exists('format', $data) && $data['format'] !== null) {
            $value_1 = $data['format'];
            if (is_array($data['format']) and \array_key_exists('kind', $data['format'])) {
                $value_1 = $this->denormalizer->denormalize($data['format'], \PicturePark\API\Model\FormatBase::class, 'json', $context);
            }
            $object->format = $value_1;
        }
        elseif (\array_key_exists('format', $data)) {
            $object->format = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('sourceOutputFormats', get_object_vars($data)) && null !== ($data->sourceOutputFormats ?? null)) {
            $value = $data->sourceOutputFormats;
            if (is_object($data->sourceOutputFormats)) {
                $normalized = $this->normalizer->normalize($data->sourceOutputFormats, 'json', $context);
                $value = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['sourceOutputFormats'] = $value;
        }
        if (array_key_exists('format', get_object_vars($data)) && null !== ($data->format ?? null)) {
            $value_1 = $data->format;
            if (is_object($data->format)) {
                $normalized_1 = $this->normalizer->normalize($data->format, 'json', $context);
                $value_1 = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['format'] = $value_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\OutputFormatRenderingSpecification::class => false];
    }
}