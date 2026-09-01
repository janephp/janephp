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
class AacAudioFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AacAudioFormat::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AacAudioFormat::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AacAudioFormat();
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
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->extension = $data['extension'];
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->extension = null;
            unset($data['extension']);
        }
        if (\array_key_exists('profile', $data)) {
            $value = $data['profile'];
            if (is_string($data['profile'])) {
                $value = $data['profile'];
            }
            $object->profile = $value;
            unset($data['profile']);
        }
        if (\array_key_exists('coder', $data)) {
            $value_1 = $data['coder'];
            if (is_string($data['coder'])) {
                $value_1 = $data['coder'];
            }
            $object->coder = $value_1;
            unset($data['coder']);
        }
        if (\array_key_exists('bitrate', $data) && $data['bitrate'] !== null) {
            $object->bitrate = $data['bitrate'];
            unset($data['bitrate']);
        }
        elseif (\array_key_exists('bitrate', $data) && $data['bitrate'] === null) {
            $object->bitrate = null;
            unset($data['bitrate']);
        }
        if (\array_key_exists('variableBitRate', $data) && $data['variableBitRate'] !== null) {
            $object->variableBitRate = $data['variableBitRate'];
            unset($data['variableBitRate']);
        }
        elseif (\array_key_exists('variableBitRate', $data) && $data['variableBitRate'] === null) {
            $object->variableBitRate = null;
            unset($data['variableBitRate']);
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
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('extension', get_object_vars($data)) && null !== ($data->extension ?? null)) {
            $dataArray['extension'] = $data->extension ?? null;
        }
        if (array_key_exists('profile', get_object_vars($data)) && null !== ($data->profile ?? null)) {
            $value = $data->profile ?? null;
            if (is_string($data->profile ?? null)) {
                $value = $data->profile ?? null;
            }
            $dataArray['profile'] = $value;
        }
        if (array_key_exists('coder', get_object_vars($data)) && null !== ($data->coder ?? null)) {
            $value_1 = $data->coder ?? null;
            if (is_string($data->coder ?? null)) {
                $value_1 = $data->coder ?? null;
            }
            $dataArray['coder'] = $value_1;
        }
        if (array_key_exists('bitrate', get_object_vars($data)) && null !== ($data->bitrate ?? null)) {
            $dataArray['bitrate'] = $data->bitrate ?? null;
        }
        if (array_key_exists('variableBitRate', get_object_vars($data)) && null !== ($data->variableBitRate ?? null)) {
            $dataArray['variableBitRate'] = $data->variableBitRate ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AacAudioFormat::class => false];
    }
}