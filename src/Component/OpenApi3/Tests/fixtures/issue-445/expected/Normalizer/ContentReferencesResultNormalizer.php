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
class ContentReferencesResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\ContentReferencesResult';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentReferencesResult';
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
        $object = new \PicturePark\API\Model\ContentReferencesResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('metadataReferences', $data) && $data['metadataReferences'] !== null) {
            $object->setMetadataReferences($data['metadataReferences']);
        }
        elseif (\array_key_exists('metadataReferences', $data) && $data['metadataReferences'] === null) {
            $object->setMetadataReferences(null);
        }
        if (\array_key_exists('shareReferences', $data) && $data['shareReferences'] !== null) {
            $object->setShareReferences($data['shareReferences']);
        }
        elseif (\array_key_exists('shareReferences', $data) && $data['shareReferences'] === null) {
            $object->setShareReferences(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('metadataReferences') && null !== $object->getMetadataReferences()) {
            $data['metadataReferences'] = $object->getMetadataReferences();
        }
        if ($object->isInitialized('shareReferences') && null !== $object->getShareReferences()) {
            $data['shareReferences'] = $object->getShareReferences();
        }
        return $data;
    }
}