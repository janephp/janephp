<?php

namespace Jane\OpenApi\Tests\Expected\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DetailedTweetFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedTweetFields';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedTweetFields';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Jane\OpenApi\Tests\Expected\Model\DetailedTweetFields();
        if (property_exists($data, 'stats')) {
            $object->setStats($this->denormalizer->denormalize($data->{'stats'}, 'Jane\\OpenApi\\Tests\\Expected\\Model\\DetailedTweetFieldsStats', 'json', $context));
        }
        if (property_exists($data, 'context_annotation')) {
            $values = array();
            foreach ($data->{'context_annotation'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\Tests\\Expected\\Model\\ContextAnnotation', 'json', $context);
            }
            $object->setContextAnnotation($values);
        }
        if (property_exists($data, 'possibly_sensitive')) {
            $object->setPossiblySensitive($data->{'possibly_sensitive'});
        }
        if (property_exists($data, 'lang')) {
            $object->setLang($data->{'lang'});
        }
        if (property_exists($data, 'source')) {
            $object->setSource($data->{'source'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStats()) {
            $data->{'stats'} = $this->normalizer->normalize($object->getStats(), 'json', $context);
        }
        if (null !== $object->getContextAnnotation()) {
            $values = array();
            foreach ($object->getContextAnnotation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'context_annotation'} = $values;
        }
        if (null !== $object->getPossiblySensitive()) {
            $data->{'possibly_sensitive'} = $object->getPossiblySensitive();
        }
        if (null !== $object->getLang()) {
            $data->{'lang'} = $object->getLang();
        }
        if (null !== $object->getSource()) {
            $data->{'source'} = $object->getSource();
        }
        return $data;
    }
}