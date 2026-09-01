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
class FormatBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\FormatBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\FormatBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\FormatBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (array_key_exists('kind', $data) and 'ImageFormatBase' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\ImageFormatBase', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'OriginalFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\OriginalFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'JpegFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\JpegFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'PngFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\PngFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'TiffFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\TiffFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'VideoFormatBase' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\VideoFormatBase', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AudioFormatBase' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AudioFormatBase', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'Mp4VideoFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\Mp4VideoFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'VideoSpriteFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\VideoSpriteFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'VideoStillFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\VideoStillFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AacAudioFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AacAudioFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'AudioStillFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\AudioStillFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'Mp3AudioFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\Mp3AudioFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'DocumentFormatBase' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\DocumentFormatBase', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'DocumentStillFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\DocumentStillFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'PdfFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\PdfFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'VectorFormatBase' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\VectorFormatBase', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'SvgFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\SvgFormat', $format, $context);
        }
        if (array_key_exists('kind', $data) and 'VectorStillFormat' === $data['kind']) {
            return $this->denormalizer->denormalize($data, 'PicturePark\API\Model\VectorStillFormat', $format, $context);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (null !== ($data->kind ?? null) and 'ImageFormatBase' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'OriginalFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'JpegFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'PngFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'TiffFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'VideoFormatBase' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AudioFormatBase' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'Mp4VideoFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'VideoSpriteFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'VideoStillFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AacAudioFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'AudioStillFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'Mp3AudioFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'DocumentFormatBase' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'DocumentStillFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'PdfFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'VectorFormatBase' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'SvgFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        if (null !== ($data->kind ?? null) and 'VectorStillFormat' === ($data->kind ?? null)) {
            return $this->normalizer->normalize($data, $format, $context);
        }
        $dataArray['kind'] = $data->kind ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\FormatBase::class => false];
    }
}