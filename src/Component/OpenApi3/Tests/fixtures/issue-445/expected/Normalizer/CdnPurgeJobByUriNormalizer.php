<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CdnPurgeJobByUriNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\CdnPurgeJobByUri';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\CdnPurgeJobByUri';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\CdnPurgeJobByUri();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('success', $data)) {
            $object->setSuccess($data['success']);
        }
        if (\array_key_exists('retriesLeft', $data)) {
            $object->setRetriesLeft($data['retriesLeft']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
            $object->setUri($data['uri']);
        }
        elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
            $object->setUri(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['success'] = $object->getSuccess();
        $data['retriesLeft'] = $object->getRetriesLeft();
        $data['kind'] = $object->getKind();
        if (null !== $object->getUri()) {
            $data['uri'] = $object->getUri();
        }
        return $data;
    }
}