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
class Mp4VideoFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Mp4VideoFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Mp4VideoFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Mp4VideoFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $value = $data['resizeAction'];
            if (is_array($data['resizeAction']) and \array_key_exists('width', $data['resizeAction']) and \array_key_exists('height', $data['resizeAction']) and \array_key_exists('resizeMode', $data['resizeAction'])) {
                $value = $this->denormalizer->denormalize($data['resizeAction'], \PicturePark\API\Model\ResizeAction::class, 'json', $context);
            }
            $object->resizeAction = $value;
            unset($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data)) {
            $object->resizeAction = null;
            unset($data['resizeAction']);
        }
        if (\array_key_exists('audioCodec', $data) && $data['audioCodec'] !== null) {
            $value_1 = $data['audioCodec'];
            if (is_array($data['audioCodec'])) {
                $value_1 = $this->denormalizer->denormalize($data['audioCodec'], \PicturePark\API\Model\AudioFormatBase::class, 'json', $context);
            }
            $object->audioCodec = $value_1;
            unset($data['audioCodec']);
        }
        elseif (\array_key_exists('audioCodec', $data)) {
            $object->audioCodec = null;
            unset($data['audioCodec']);
        }
        if (\array_key_exists('preset', $data)) {
            $value_2 = $data['preset'];
            if (is_string($data['preset'])) {
                $value_2 = $data['preset'];
            }
            $object->preset = $value_2;
            unset($data['preset']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->extension = $data['extension'];
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data)) {
            $object->extension = null;
            unset($data['extension']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['kind'] = $data->kind;
        if (array_key_exists('resizeAction', get_object_vars($data)) && null !== ($data->resizeAction ?? null)) {
            $value = $data->resizeAction;
            if (is_object($data->resizeAction)) {
                $normalized = $this->normalizer->normalize($data->resizeAction, 'json', $context);
                $value = \is_iterable($normalized) ? new \PicturePark\API\Runtime\JsonObject($normalized) : $normalized;
            }
            $dataArray['resizeAction'] = $value;
        }
        if (array_key_exists('audioCodec', get_object_vars($data)) && null !== ($data->audioCodec ?? null)) {
            $value_1 = $data->audioCodec;
            if (is_object($data->audioCodec)) {
                $normalized_1 = $this->normalizer->normalize($data->audioCodec, 'json', $context);
                $value_1 = \is_iterable($normalized_1) ? new \PicturePark\API\Runtime\JsonObject($normalized_1) : $normalized_1;
            }
            $dataArray['audioCodec'] = $value_1;
        }
        if (array_key_exists('preset', get_object_vars($data)) && null !== ($data->preset ?? null)) {
            $value_2 = $data->preset;
            if (is_string($data->preset)) {
                $value_2 = $data->preset;
            }
            $dataArray['preset'] = $value_2;
        }
        if (array_key_exists('extension', get_object_vars($data)) && null !== ($data->extension ?? null)) {
            $dataArray['extension'] = $data->extension;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Mp4VideoFormat::class => false];
    }
}