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
class BooksBookIdReviewsGetHaljsonResponse200LinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links';
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
        $object = new \ApiPlatform\Demo\Model\BooksBookIdReviewsGetHaljsonResponse200Links();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('self', $data)) {
            $object->setSelf($this->denormalizer->denormalize($data['self'], 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksSelf', 'json', $context));
            unset($data['self']);
        }
        if (\array_key_exists('first', $data)) {
            $object->setFirst($this->denormalizer->denormalize($data['first'], 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksFirst', 'json', $context));
            unset($data['first']);
        }
        if (\array_key_exists('last', $data)) {
            $object->setLast($this->denormalizer->denormalize($data['last'], 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksLast', 'json', $context));
            unset($data['last']);
        }
        if (\array_key_exists('next', $data)) {
            $object->setNext($this->denormalizer->denormalize($data['next'], 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksNext', 'json', $context));
            unset($data['next']);
        }
        if (\array_key_exists('previous', $data)) {
            $object->setPrevious($this->denormalizer->denormalize($data['previous'], 'ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200LinksPrevious', 'json', $context));
            unset($data['previous']);
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
        if ($object->isInitialized('self') && null !== $object->getSelf()) {
            $data['self'] = $object->getSelf() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getSelf(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('first') && null !== $object->getFirst()) {
            $data['first'] = $object->getFirst() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getFirst(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('last') && null !== $object->getLast()) {
            $data['last'] = $object->getLast() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getLast(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('next') && null !== $object->getNext()) {
            $data['next'] = $object->getNext() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getNext(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('previous') && null !== $object->getPrevious()) {
            $data['previous'] = $object->getPrevious() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getPrevious(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
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
        return array('ApiPlatform\\Demo\\Model\\BooksBookIdReviewsGetHaljsonResponse200Links' => false);
    }
}