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
class IdpClaimToUserAttributeMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'PicturePark\\API\\Model\\IdpClaimToUserAttributeMapping';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\IdpClaimToUserAttributeMapping';
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
        $object = new \PicturePark\API\Model\IdpClaimToUserAttributeMapping();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('claimType', $data) && $data['claimType'] !== null) {
            $object->setClaimType($data['claimType']);
        }
        elseif (\array_key_exists('claimType', $data) && $data['claimType'] === null) {
            $object->setClaimType(null);
        }
        if (\array_key_exists('userAttributePath', $data) && $data['userAttributePath'] !== null) {
            $object->setUserAttributePath($data['userAttributePath']);
        }
        elseif (\array_key_exists('userAttributePath', $data) && $data['userAttributePath'] === null) {
            $object->setUserAttributePath(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('claimType') && null !== $object->getClaimType()) {
            $data['claimType'] = $object->getClaimType();
        }
        if ($object->isInitialized('userAttributePath') && null !== $object->getUserAttributePath()) {
            $data['userAttributePath'] = $object->getUserAttributePath();
        }
        return $data;
    }
}