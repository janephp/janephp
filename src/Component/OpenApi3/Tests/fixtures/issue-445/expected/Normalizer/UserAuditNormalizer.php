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
class UserAuditNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\UserAudit';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\UserAudit';
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
        $object = new \PicturePark\API\Model\UserAudit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('creationDate', $data)) {
            $object->setCreationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['creationDate']));
        }
        if (\array_key_exists('modificationDate', $data)) {
            $object->setModificationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['modificationDate']));
        }
        if (\array_key_exists('createdByUser', $data) && $data['createdByUser'] !== null) {
            $object->setCreatedByUser($data['createdByUser']);
        }
        elseif (\array_key_exists('createdByUser', $data) && $data['createdByUser'] === null) {
            $object->setCreatedByUser(null);
        }
        if (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] !== null) {
            $object->setModifiedByUser($data['modifiedByUser']);
        }
        elseif (\array_key_exists('modifiedByUser', $data) && $data['modifiedByUser'] === null) {
            $object->setModifiedByUser(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['creationDate'] = $object->getCreationDate()->format('Y-m-d\\TH:i:sP');
        $data['modificationDate'] = $object->getModificationDate()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getCreatedByUser()) {
            $data['createdByUser'] = $object->getCreatedByUser();
        }
        if (null !== $object->getModifiedByUser()) {
            $data['modifiedByUser'] = $object->getModifiedByUser();
        }
        return $data;
    }
}