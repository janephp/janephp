<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TweetWithheldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetWithheld';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\TweetWithheld';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $object = new \Jane\OpenApi\Tests\Expected\Model\TweetWithheld();
        if (\array_key_exists('copyright', $data)) {
            $object->setCopyright($data['copyright']);
        }
        if (\array_key_exists('country_codes', $data)) {
            $values = array();
            foreach ($data['country_codes'] as $value) {
                $values[] = $value;
            }
            $object->setCountryCodes($values);
        }
        if (\array_key_exists('scope', $data)) {
            $object->setScope($data['scope']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCopyright()) {
            $data['copyright'] = $object->getCopyright();
        }
        if (null !== $object->getCountryCodes()) {
            $values = array();
            foreach ($object->getCountryCodes() as $value) {
                $values[] = $value;
            }
            $data['country_codes'] = $values;
        }
        if (null !== $object->getScope()) {
            $data['scope'] = $object->getScope();
        }
        return $data;
    }
}