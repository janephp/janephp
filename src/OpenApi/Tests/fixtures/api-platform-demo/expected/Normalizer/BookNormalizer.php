<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ApiPlatform\Demo\Model\Book();
        if (property_exists($data, 'isbn')) {
            $object->setIsbn($data->{'isbn'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'author')) {
            $object->setAuthor($data->{'author'});
        }
        if (property_exists($data, 'publicationDate')) {
            $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data->{'publicationDate'}));
        }
        if (property_exists($data, 'reviews')) {
            $values = array();
            foreach ($data->{'reviews'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\Review', 'json', $context);
            }
            $object->setReviews($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIsbn()) {
            $data->{'isbn'} = $object->getIsbn();
        }
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getAuthor()) {
            $data->{'author'} = $object->getAuthor();
        }
        if (null !== $object->getPublicationDate()) {
            $data->{'publicationDate'} = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getReviews()) {
            $values = array();
            foreach ($object->getReviews() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'reviews'} = $values;
        }
        return $data;
    }
}