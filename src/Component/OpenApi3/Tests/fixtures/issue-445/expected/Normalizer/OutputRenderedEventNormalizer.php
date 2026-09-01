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
class OutputRenderedEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\OutputRenderedEvent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\OutputRenderedEvent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\OutputRenderedEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['timestamp'], 'Y-m-d\TH:i:sP');
            }
            $object->timestamp = $date;
            unset($data['timestamp']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('outputId', $data) && $data['outputId'] !== null) {
            $object->outputId = $data['outputId'];
            unset($data['outputId']);
        }
        elseif (\array_key_exists('outputId', $data) && $data['outputId'] === null) {
            $object->outputId = null;
            unset($data['outputId']);
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->contentId = $data['contentId'];
            unset($data['contentId']);
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->contentId = null;
            unset($data['contentId']);
        }
        if (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] !== null) {
            $object->outputFormatId = $data['outputFormatId'];
            unset($data['outputFormatId']);
        }
        elseif (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] === null) {
            $object->outputFormatId = null;
            unset($data['outputFormatId']);
        }
        if (\array_key_exists('renderingState', $data)) {
            $object->renderingState = $data['renderingState'];
            unset($data['renderingState']);
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
        $dataArray['timestamp'] = ($data->timestamp ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('outputId', get_object_vars($data)) && null !== ($data->outputId ?? null)) {
            $dataArray['outputId'] = $data->outputId ?? null;
        }
        if (array_key_exists('contentId', get_object_vars($data)) && null !== ($data->contentId ?? null)) {
            $dataArray['contentId'] = $data->contentId ?? null;
        }
        if (array_key_exists('outputFormatId', get_object_vars($data)) && null !== ($data->outputFormatId ?? null)) {
            $dataArray['outputFormatId'] = $data->outputFormatId ?? null;
        }
        if (array_key_exists('renderingState', get_object_vars($data)) && null !== ($data->renderingState ?? null)) {
            $dataArray['renderingState'] = $data->renderingState ?? null;
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
        return [\PicturePark\API\Model\OutputRenderedEvent::class => false];
    }
}