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
            $object->setTimestamp($date);
            unset($data['timestamp']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
            unset($data['kind']);
        }
        if (\array_key_exists('outputId', $data) && $data['outputId'] !== null) {
            $object->setOutputId($data['outputId']);
            unset($data['outputId']);
        }
        elseif (\array_key_exists('outputId', $data) && $data['outputId'] === null) {
            $object->setOutputId(null);
            unset($data['outputId']);
        }
        if (\array_key_exists('contentId', $data) && $data['contentId'] !== null) {
            $object->setContentId($data['contentId']);
            unset($data['contentId']);
        }
        elseif (\array_key_exists('contentId', $data) && $data['contentId'] === null) {
            $object->setContentId(null);
            unset($data['contentId']);
        }
        if (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] !== null) {
            $object->setOutputFormatId($data['outputFormatId']);
            unset($data['outputFormatId']);
        }
        elseif (\array_key_exists('outputFormatId', $data) && $data['outputFormatId'] === null) {
            $object->setOutputFormatId(null);
            unset($data['outputFormatId']);
        }
        if (\array_key_exists('renderingState', $data)) {
            $object->setRenderingState($data['renderingState']);
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
        $dataArray['timestamp'] = $data->getTimestamp()->format('Y-m-d\TH:i:sP');
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('outputId') && null !== $data->getOutputId()) {
            $dataArray['outputId'] = $data->getOutputId();
        }
        if ($data->isInitialized('contentId') && null !== $data->getContentId()) {
            $dataArray['contentId'] = $data->getContentId();
        }
        if ($data->isInitialized('outputFormatId') && null !== $data->getOutputFormatId()) {
            $dataArray['outputFormatId'] = $data->getOutputFormatId();
        }
        if ($data->isInitialized('renderingState') && null !== $data->getRenderingState()) {
            $dataArray['renderingState'] = $data->getRenderingState();
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