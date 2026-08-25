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
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
            unset($data['extension']);
        }
        if (\array_key_exists('profile', $data)) {
            $value = $data['profile'];
            if (is_string($data['profile'])) {
                $value = $data['profile'];
            }
            $object->setProfile($value);
            unset($data['profile']);
        }
        if (\array_key_exists('coder', $data)) {
            $value_1 = $data['coder'];
            if (is_string($data['coder'])) {
                $value_1 = $data['coder'];
            }
            $object->setCoder($value_1);
            unset($data['coder']);
        }
        if (\array_key_exists('bitrate', $data) && $data['bitrate'] !== null) {
            $object->setBitrate($data['bitrate']);
            unset($data['bitrate']);
        }
        elseif (\array_key_exists('bitrate', $data) && $data['bitrate'] === null) {
            $object->setBitrate(null);
            unset($data['bitrate']);
        }
        if (\array_key_exists('variableBitRate', $data) && $data['variableBitRate'] !== null) {
            $object->setVariableBitRate($data['variableBitRate']);
            unset($data['variableBitRate']);
        }
        elseif (\array_key_exists('variableBitRate', $data) && $data['variableBitRate'] === null) {
            $object->setVariableBitRate(null);
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
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('extension') && null !== $data->getExtension()) {
            $dataArray['extension'] = $data->getExtension();
        }
        if ($data->isInitialized('profile') && null !== $data->getProfile()) {
            $value = $data->getProfile();
            if (is_string($data->getProfile())) {
                $value = $data->getProfile();
            }
            $dataArray['profile'] = $value;
        }
        if ($data->isInitialized('coder') && null !== $data->getCoder()) {
            $value_1 = $data->getCoder();
            if (is_string($data->getCoder())) {
                $value_1 = $data->getCoder();
            }
            $dataArray['coder'] = $value_1;
        }
        if ($data->isInitialized('bitrate') && null !== $data->getBitrate()) {
            $dataArray['bitrate'] = $data->getBitrate();
        }
        if ($data->isInitialized('variableBitRate') && null !== $data->getVariableBitRate()) {
            $dataArray['variableBitRate'] = $data->getVariableBitRate();
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