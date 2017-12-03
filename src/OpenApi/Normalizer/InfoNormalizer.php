<?php

namespace Jane\OpenApi\Normalizer;

use Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Joli\\Jane\\OpenApi\\Model\\Info') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Jane\OpenApi\Model\Info) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\Model\Info();
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'termsOfService')) {
            $object->setTermsOfService($data->{'termsOfService'});
        }
        if (property_exists($data, 'contact')) {
            $object->setContact($this->denormalizer->denormalize($data->{'contact'}, 'Joli\\Jane\\OpenApi\\Model\\Contact', 'json', $context));
        }
        if (property_exists($data, 'license')) {
            $object->setLicense($this->denormalizer->denormalize($data->{'license'}, 'Joli\\Jane\\OpenApi\\Model\\License', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getTermsOfService()) {
            $data->{'termsOfService'} = $object->getTermsOfService();
        }
        if (null !== $object->getContact()) {
            $data->{'contact'} = $this->normalizer->normalize($object->getContact(), 'json', $context);
        }
        if (null !== $object->getLicense()) {
            $data->{'license'} = $this->normalizer->normalize($object->getLicense(), 'json', $context);
        }

        return $data;
    }
}
