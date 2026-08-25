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
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
            $value = $data['resizeAction'];
            if (is_array($data['resizeAction']) and \array_key_exists('width', $data['resizeAction']) and \array_key_exists('height', $data['resizeAction']) and \array_key_exists('resizeMode', $data['resizeAction'])) {
                $value = $this->denormalizer->denormalize($data['resizeAction'], \PicturePark\API\Model\ResizeAction::class, 'json', $context);
            }
            $object->setResizeAction($value);
            unset($data['resizeAction']);
        }
        elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
            $object->setResizeAction(null);
            unset($data['resizeAction']);
        }
        if (\array_key_exists('audioCodec', $data) && $data['audioCodec'] !== null) {
            $value_1 = $data['audioCodec'];
            if (is_array($data['audioCodec'])) {
                $value_1 = $this->denormalizer->denormalize($data['audioCodec'], \PicturePark\API\Model\AudioFormatBase::class, 'json', $context);
            }
            $object->setAudioCodec($value_1);
            unset($data['audioCodec']);
        }
        elseif (\array_key_exists('audioCodec', $data) && $data['audioCodec'] === null) {
            $object->setAudioCodec(null);
            unset($data['audioCodec']);
        }
        if (\array_key_exists('preset', $data)) {
            $value_2 = $data['preset'];
            if (is_string($data['preset'])) {
                $value_2 = $data['preset'];
            }
            $object->setPreset($value_2);
            unset($data['preset']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
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
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('resizeAction') && null !== $data->getResizeAction()) {
            $value = $data->getResizeAction();
            if (is_object($data->getResizeAction())) {
                $value = $data->getResizeAction() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getResizeAction(), 'json', $context));
            }
            $dataArray['resizeAction'] = $value;
        }
        if ($data->isInitialized('audioCodec') && null !== $data->getAudioCodec()) {
            $value_1 = $data->getAudioCodec();
            if (is_object($data->getAudioCodec())) {
                $value_1 = $data->getAudioCodec() === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->getAudioCodec(), 'json', $context));
            }
            $dataArray['audioCodec'] = $value_1;
        }
        if ($data->isInitialized('preset') && null !== $data->getPreset()) {
            $value_2 = $data->getPreset();
            if (is_string($data->getPreset())) {
                $value_2 = $data->getPreset();
            }
            $dataArray['preset'] = $value_2;
        }
        if ($data->isInitialized('extension') && null !== $data->getExtension()) {
            $dataArray['extension'] = $data->getExtension();
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