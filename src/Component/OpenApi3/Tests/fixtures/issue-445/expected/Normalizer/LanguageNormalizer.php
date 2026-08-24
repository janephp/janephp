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
            $object->setName($data['name']);
        }
        if (\array_key_exists('ietf', $data)) {
            $object->setIetf($data['ietf']);
        }
        if (\array_key_exists('twoLetterISOLanguageName', $data) && $data['twoLetterISOLanguageName'] !== null) {
            $object->setTwoLetterISOLanguageName($data['twoLetterISOLanguageName']);
        }
        elseif (\array_key_exists('twoLetterISOLanguageName', $data) && $data['twoLetterISOLanguageName'] === null) {
            $object->setTwoLetterISOLanguageName(null);
        }
        if (\array_key_exists('threeLetterISOLanguageName', $data) && $data['threeLetterISOLanguageName'] !== null) {
            $object->setThreeLetterISOLanguageName($data['threeLetterISOLanguageName']);
        }
        elseif (\array_key_exists('threeLetterISOLanguageName', $data) && $data['threeLetterISOLanguageName'] === null) {
            $object->setThreeLetterISOLanguageName(null);
        }
        if (\array_key_exists('regionCode', $data) && $data['regionCode'] !== null) {
            $object->setRegionCode($data['regionCode']);
        }
        elseif (\array_key_exists('regionCode', $data) && $data['regionCode'] === null) {
            $object->setRegionCode(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        $dataArray['ietf'] = $data->getIetf();
        if ($data->isInitialized('twoLetterISOLanguageName') && null !== $data->getTwoLetterISOLanguageName()) {
            $dataArray['twoLetterISOLanguageName'] = $data->getTwoLetterISOLanguageName();
        }
        if ($data->isInitialized('threeLetterISOLanguageName') && null !== $data->getThreeLetterISOLanguageName()) {
            $dataArray['threeLetterISOLanguageName'] = $data->getThreeLetterISOLanguageName();
        }
        if ($data->isInitialized('regionCode') && null !== $data->getRegionCode()) {
            $dataArray['regionCode'] = $data->getRegionCode();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Language::class => false];
    }
}