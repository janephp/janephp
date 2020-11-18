<?php

namespace PicturePark\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\Language';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\Language';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['ietf'] = $object->getIetf();
        if (null !== $object->getTwoLetterISOLanguageName()) {
            $data['twoLetterISOLanguageName'] = $object->getTwoLetterISOLanguageName();
        }
        if (null !== $object->getThreeLetterISOLanguageName()) {
            $data['threeLetterISOLanguageName'] = $object->getThreeLetterISOLanguageName();
        }
        if (null !== $object->getRegionCode()) {
            $data['regionCode'] = $object->getRegionCode();
        }
        return $data;
    }
}