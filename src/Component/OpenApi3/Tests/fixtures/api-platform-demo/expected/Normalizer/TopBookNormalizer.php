<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TopBookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ApiPlatform\\Demo\\Model\\TopBook';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\TopBook';
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
        $object = new \ApiPlatform\Demo\Model\TopBook();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($data['author']);
        }
        if (\array_key_exists('part', $data)) {
            $object->setPart($data['part']);
        }
        if (\array_key_exists('place', $data)) {
            $object->setPlace($data['place']);
        }
        if (\array_key_exists('borrowCount', $data)) {
            $object->setBorrowCount($data['borrowCount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if (null !== $object->getPart()) {
            $data['part'] = $object->getPart();
        }
        if (null !== $object->getPlace()) {
            $data['place'] = $object->getPlace();
        }
        if (null !== $object->getBorrowCount()) {
            $data['borrowCount'] = $object->getBorrowCount();
        }
        return $data;
    }
}