<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LanguageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Language';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Language';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
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
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            $data['ietf'] = $object->getIetf();
            if ($object->isInitialized('twoLetterISOLanguageName') && null !== $object->getTwoLetterISOLanguageName()) {
                $data['twoLetterISOLanguageName'] = $object->getTwoLetterISOLanguageName();
            }
            if ($object->isInitialized('threeLetterISOLanguageName') && null !== $object->getThreeLetterISOLanguageName()) {
                $data['threeLetterISOLanguageName'] = $object->getThreeLetterISOLanguageName();
            }
            if ($object->isInitialized('regionCode') && null !== $object->getRegionCode()) {
                $data['regionCode'] = $object->getRegionCode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Language' => false];
        }
    }
} else {
    class LanguageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\Language';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Language';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['name'] = $object->getName();
            $data['ietf'] = $object->getIetf();
            if ($object->isInitialized('twoLetterISOLanguageName') && null !== $object->getTwoLetterISOLanguageName()) {
                $data['twoLetterISOLanguageName'] = $object->getTwoLetterISOLanguageName();
            }
            if ($object->isInitialized('threeLetterISOLanguageName') && null !== $object->getThreeLetterISOLanguageName()) {
                $data['threeLetterISOLanguageName'] = $object->getThreeLetterISOLanguageName();
            }
            if ($object->isInitialized('regionCode') && null !== $object->getRegionCode()) {
                $data['regionCode'] = $object->getRegionCode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\Language' => false];
        }
    }
}