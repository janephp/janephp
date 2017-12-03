<?php

namespace Jane\OpenApi\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class Oauth2PasswordSecurityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Jane\\OpenApi\\Model\\Oauth2PasswordSecurity') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Jane\OpenApi\Model\Oauth2PasswordSecurity) {
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
        $object = new \Jane\OpenApi\Model\Oauth2PasswordSecurity();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'flow')) {
            $object->setFlow($data->{'flow'});
        }
        if (property_exists($data, 'scopes')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'scopes'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setScopes($values);
        }
        if (property_exists($data, 'tokenUrl')) {
            $object->setTokenUrl($data->{'tokenUrl'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getFlow()) {
            $data->{'flow'} = $object->getFlow();
        }
        if (null !== $object->getScopes()) {
            $values = new \stdClass();
            foreach ($object->getScopes() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'scopes'} = $values;
        }
        if (null !== $object->getTokenUrl()) {
            $data->{'tokenUrl'} = $object->getTokenUrl();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }

        return $data;
    }
}
