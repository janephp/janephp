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
class ReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ApiPlatform\\Demo\\Model\\Review';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\Review';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \ApiPlatform\Demo\Model\Review();
        if (property_exists($data, 'body')) {
            $object->setBody($data->{'body'});
        }
        if (property_exists($data, 'rating')) {
            $object->setRating($data->{'rating'});
        }
        if (property_exists($data, 'letter')) {
            $object->setLetter($data->{'letter'});
        }
        if (property_exists($data, 'author')) {
            $object->setAuthor($data->{'author'});
        }
        if (property_exists($data, 'publicationDate')) {
            $object->setPublicationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data->{'publicationDate'}));
        }
        if (property_exists($data, 'book')) {
            $object->setBook($this->denormalizer->denormalize($data->{'book'}, 'ApiPlatform\\Demo\\Model\\Book', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBody()) {
            $data->{'body'} = $object->getBody();
        }
        if (null !== $object->getRating()) {
            $data->{'rating'} = $object->getRating();
        }
        if (null !== $object->getLetter()) {
            $data->{'letter'} = $object->getLetter();
        }
        if (null !== $object->getAuthor()) {
            $data->{'author'} = $object->getAuthor();
        }
        if (null !== $object->getPublicationDate()) {
            $data->{'publicationDate'} = $object->getPublicationDate()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getBook()) {
            $data->{'book'} = $this->normalizer->normalize($object->getBook(), 'json', $context);
        }
        return $data;
    }
}