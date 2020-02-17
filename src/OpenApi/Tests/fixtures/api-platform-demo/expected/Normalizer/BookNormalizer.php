<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\Book';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\Book';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \ApiPlatform\Demo\Model\Book();
        if (\array_key_exists('isbn', $data)) {
            $object->setIsbn($data['isbn']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($data['author']);
        }
        if (\array_key_exists('publicationDate', $data)) {
            $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['publicationDate']));
        }
        if (\array_key_exists('reviews', $data)) {
            $values = array();
            foreach ($data['reviews'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\Review', 'json', $context);
            }
            $object->setReviews($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsbn()) {
            $data['isbn'] = $object->getIsbn();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if (null !== $object->getPublicationDate()) {
            $data['publicationDate'] = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getReviews()) {
            $values = array();
            foreach ($object->getReviews() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['reviews'] = $values;
        }
        return $data;
    }
}