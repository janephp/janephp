<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReposOwnerRepoLabelsNamePatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoLabelsNamePatchBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoLabelsNamePatchBody';
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
        $object = new \Github\Model\ReposOwnerRepoLabelsNamePatchBody();
        $validator = new \Github\Validator\ReposOwnerRepoLabelsNamePatchBodyValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('new_name', $data)) {
            $object->setNewName($data['new_name']);
        }
        if (\array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNewName()) {
            $data['new_name'] = $object->getNewName();
        }
        if (null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $validator = new \Github\Validator\ReposOwnerRepoLabelsNamePatchBodyValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}