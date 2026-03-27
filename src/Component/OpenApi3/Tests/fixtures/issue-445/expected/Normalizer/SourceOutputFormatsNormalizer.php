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
class SourceOutputFormatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\SourceOutputFormats::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\SourceOutputFormats::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\SourceOutputFormats();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('image', $data) && $data['image'] !== null) {
            $object->setImage($data['image']);
        }
        elseif (\array_key_exists('image', $data) && $data['image'] === null) {
            $object->setImage(null);
        }
        if (\array_key_exists('video', $data) && $data['video'] !== null) {
            $object->setVideo($data['video']);
        }
        elseif (\array_key_exists('video', $data) && $data['video'] === null) {
            $object->setVideo(null);
        }
        if (\array_key_exists('document', $data) && $data['document'] !== null) {
            $object->setDocument($data['document']);
        }
        elseif (\array_key_exists('document', $data) && $data['document'] === null) {
            $object->setDocument(null);
        }
        if (\array_key_exists('audio', $data) && $data['audio'] !== null) {
            $object->setAudio($data['audio']);
        }
        elseif (\array_key_exists('audio', $data) && $data['audio'] === null) {
            $object->setAudio(null);
        }
        if (\array_key_exists('vector', $data) && $data['vector'] !== null) {
            $object->setVector($data['vector']);
        }
        elseif (\array_key_exists('vector', $data) && $data['vector'] === null) {
            $object->setVector(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('image')) {
            $dataArray['image'] = $data->getImage();
        }
        if ($data->isInitialized('video')) {
            $dataArray['video'] = $data->getVideo();
        }
        if ($data->isInitialized('document')) {
            $dataArray['document'] = $data->getDocument();
        }
        if ($data->isInitialized('audio')) {
            $dataArray['audio'] = $data->getAudio();
        }
        if ($data->isInitialized('vector')) {
            $dataArray['vector'] = $data->getVector();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\SourceOutputFormats::class => false];
    }
}