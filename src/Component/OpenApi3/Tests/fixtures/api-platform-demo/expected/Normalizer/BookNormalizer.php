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
class BookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ApiPlatform\\Demo\\Model\\Book';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\Book';
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
        $object = new \ApiPlatform\Demo\Model\Book();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('isbn', $data) && $data['isbn'] !== null) {
            $object->setIsbn($data['isbn']);
        }
        elseif (\array_key_exists('isbn', $data) && $data['isbn'] === null) {
            $object->setIsbn(null);
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
                $values[] = $value;
            }
            $object->setReviews($values);
        }
        if (\array_key_exists('cover', $data) && $data['cover'] !== null) {
            $object->setCover($data['cover']);
        }
        elseif (\array_key_exists('cover', $data) && $data['cover'] === null) {
            $object->setCover(null);
        }
        if (\array_key_exists('archivedAt', $data) && $data['archivedAt'] !== null) {
            $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['archivedAt']));
        }
        elseif (\array_key_exists('archivedAt', $data) && $data['archivedAt'] === null) {
            $object->setArchivedAt(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsbn()) {
            $data['isbn'] = $object->getIsbn();
        }
        $data['title'] = $object->getTitle();
        $data['description'] = $object->getDescription();
        $data['author'] = $object->getAuthor();
        $data['publicationDate'] = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getReviews()) {
            $values = array();
            foreach ($object->getReviews() as $value) {
                $values[] = $value;
            }
            $data['reviews'] = $values;
        }
        if (null !== $object->getCover()) {
            $data['cover'] = $object->getCover();
        }
        if (null !== $object->getArchivedAt()) {
            $data['archivedAt'] = $object->getArchivedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}