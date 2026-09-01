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
class LanguageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\Language::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\Language::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\Language();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $value = $data['name'];
            if (is_array($data['name']) && $this->isOnlyNumericKeys($data['name'])) {
                $values = new \PicturePark\API\Runtime\JsonObject();
                foreach ($data['name'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->name = $value;
        }
        if (\array_key_exists('ietf', $data)) {
            $object->ietf = $data['ietf'];
        }
        if (\array_key_exists('twoLetterISOLanguageName', $data) && $data['twoLetterISOLanguageName'] !== null) {
            $object->twoLetterISOLanguageName = $data['twoLetterISOLanguageName'];
        }
        elseif (\array_key_exists('twoLetterISOLanguageName', $data) && $data['twoLetterISOLanguageName'] === null) {
            $object->twoLetterISOLanguageName = null;
        }
        if (\array_key_exists('threeLetterISOLanguageName', $data) && $data['threeLetterISOLanguageName'] !== null) {
            $object->threeLetterISOLanguageName = $data['threeLetterISOLanguageName'];
        }
        elseif (\array_key_exists('threeLetterISOLanguageName', $data) && $data['threeLetterISOLanguageName'] === null) {
            $object->threeLetterISOLanguageName = null;
        }
        if (\array_key_exists('regionCode', $data) && $data['regionCode'] !== null) {
            $object->regionCode = $data['regionCode'];
        }
        elseif (\array_key_exists('regionCode', $data) && $data['regionCode'] === null) {
            $object->regionCode = null;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->name ?? null;
        if (is_object($data->name ?? null)) {
            $values = new \PicturePark\API\Runtime\JsonObject();
            foreach ($data->name ?? null as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $value = $values;
        }
        $dataArray['name'] = $value;
        $dataArray['ietf'] = $data->ietf ?? null;
        if (array_key_exists('twoLetterISOLanguageName', get_object_vars($data)) && null !== ($data->twoLetterISOLanguageName ?? null)) {
            $dataArray['twoLetterISOLanguageName'] = $data->twoLetterISOLanguageName ?? null;
        }
        if (array_key_exists('threeLetterISOLanguageName', get_object_vars($data)) && null !== ($data->threeLetterISOLanguageName ?? null)) {
            $dataArray['threeLetterISOLanguageName'] = $data->threeLetterISOLanguageName ?? null;
        }
        if (array_key_exists('regionCode', get_object_vars($data)) && null !== ($data->regionCode ?? null)) {
            $dataArray['regionCode'] = $data->regionCode ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Language::class => false];
    }
}