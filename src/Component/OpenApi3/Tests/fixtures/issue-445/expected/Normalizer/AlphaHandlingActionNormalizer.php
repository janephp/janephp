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
class AlphaHandlingActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\AlphaHandlingAction::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\AlphaHandlingAction::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\AlphaHandlingAction();
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
        if (\array_key_exists('alphaHandling', $data)) {
            $value = $data['alphaHandling'];
            if (is_string($data['alphaHandling'])) {
                $value = $data['alphaHandling'];
            }
            $object->alphaHandling = $value;
            unset($data['alphaHandling']);
        }
        if (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] !== null) {
            $object->replacementRgbColorHexCode = $data['replacementRgbColorHexCode'];
            unset($data['replacementRgbColorHexCode']);
        }
        elseif (\array_key_exists('replacementRgbColorHexCode', $data) && $data['replacementRgbColorHexCode'] === null) {
            $object->replacementRgbColorHexCode = null;
            unset($data['replacementRgbColorHexCode']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('alphaHandling', get_object_vars($data)) && null !== ($data->alphaHandling ?? null)) {
            $value = $data->alphaHandling ?? null;
            if (is_string($data->alphaHandling ?? null)) {
                $value = $data->alphaHandling ?? null;
            }
            $dataArray['alphaHandling'] = $value;
        }
        if (array_key_exists('replacementRgbColorHexCode', get_object_vars($data)) && null !== ($data->replacementRgbColorHexCode ?? null)) {
            $dataArray['replacementRgbColorHexCode'] = $data->replacementRgbColorHexCode ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\AlphaHandlingAction::class => false];
    }
}