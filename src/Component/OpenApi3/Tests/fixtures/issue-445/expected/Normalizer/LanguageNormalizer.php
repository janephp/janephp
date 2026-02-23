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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\Language();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $value = $data['name'];
            if (is_array($data['name']) && $this->isOnlyNumericKeys($data['name'])) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['name'] as $key => $value_1) {
                    $values[$key] = $value_1;
                }
                $value = $values;
            }
            $object->setName($value);
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
        $value = $data->getName();
        if (is_object($data->getName())) {
            $values = [];
            foreach ($data->getName() as $key => $value_1) {
                $values[$key] = $value_1;
            }
            $value = $values;
        }
        $dataArray['name'] = $value;
        $dataArray['ietf'] = $data->getIetf();
        if ($data->isInitialized('twoLetterISOLanguageName')) {
            $dataArray['twoLetterISOLanguageName'] = $data->getTwoLetterISOLanguageName();
        }
        if ($data->isInitialized('threeLetterISOLanguageName')) {
            $dataArray['threeLetterISOLanguageName'] = $data->getThreeLetterISOLanguageName();
        }
        if ($data->isInitialized('regionCode')) {
            $dataArray['regionCode'] = $data->getRegionCode();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\Language::class => false];
    }
}