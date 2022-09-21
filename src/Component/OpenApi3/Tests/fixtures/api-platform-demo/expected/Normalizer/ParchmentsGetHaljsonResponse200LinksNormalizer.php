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
class ParchmentsGetHaljsonResponse200LinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200Links';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200Links';
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
        $object = new \ApiPlatform\Demo\Model\ParchmentsGetHaljsonResponse200Links();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksSelf', 'json', $context));
        }
        if (\array_key_exists('first', $data)) {
            $object->setFirst($this->denormalizer->denormalize($data['first'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksFirst', 'json', $context));
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($this->denormalizer->denormalize($data['last'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksLast', 'json', $context));
        }
        if (\array_key_exists('next', $data)) {
            $object->setNext($this->denormalizer->denormalize($data['next'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksNext', 'json', $context));
        }
        if (\array_key_exists('previous', $data)) {
            $object->setPrevious($this->denormalizer->denormalize($data['previous'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetHaljsonResponse200LinksPrevious', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSelf()) {
            $data['self'] = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        if (null !== $object->getFirst()) {
            $data['first'] = $this->normalizer->normalize($object->getFirst(), 'json', $context);
        }
        if (null !== $object->getLast()) {
            $data['last'] = $this->normalizer->normalize($object->getLast(), 'json', $context);
        }
        if (null !== $object->getNext()) {
            $data['next'] = $this->normalizer->normalize($object->getNext(), 'json', $context);
        }
        if (null !== $object->getPrevious()) {
            $data['previous'] = $this->normalizer->normalize($object->getPrevious(), 'json', $context);
        }
        return $data;
    }
}