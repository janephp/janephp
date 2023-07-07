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
class AacAudioFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\AacAudioFormat';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\AacAudioFormat';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\AacAudioFormat();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        }
        if (\array_key_exists('profile', $data)) {
            $object->setProfile($data['profile']);
            unset($data['profile']);
        }
        if (\array_key_exists('coder', $data)) {
            $object->setCoder($data['coder']);
            unset($data['coder']);
        }
        if (\array_key_exists('bitrate', $data) && $data['bitrate'] !== null) {
            $object->setBitrate($data['bitrate']);
            unset($data['bitrate']);
        }
        elseif (\array_key_exists('bitrate', $data) && $data['bitrate'] === null) {
            $object->setBitrate(null);
        }
        if (\array_key_exists('variableBitRate', $data) && $data['variableBitRate'] !== null) {
            $object->setVariableBitRate($data['variableBitRate']);
            unset($data['variableBitRate']);
        }
        elseif (\array_key_exists('variableBitRate', $data) && $data['variableBitRate'] === null) {
            $object->setVariableBitRate(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['kind'] = $object->getKind();
        if ($object->isInitialized('extension') && null !== $object->getExtension()) {
            $data['extension'] = $object->getExtension();
        }
        if ($object->isInitialized('profile') && null !== $object->getProfile()) {
            $data['profile'] = $object->getProfile();
        }
        if ($object->isInitialized('coder') && null !== $object->getCoder()) {
            $data['coder'] = $object->getCoder();
        }
        if ($object->isInitialized('bitrate') && null !== $object->getBitrate()) {
            $data['bitrate'] = $object->getBitrate();
        }
        if ($object->isInitialized('variableBitRate') && null !== $object->getVariableBitRate()) {
            $data['variableBitRate'] = $object->getVariableBitRate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('PicturePark\\API\\Model\\AacAudioFormat' => false);
    }
}