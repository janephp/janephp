<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFields';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFields';
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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DetailedTweetFields();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('stats', $data)) {
            $object->setStats($this->denormalizer->denormalize($data['stats'], 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\DetailedTweetFieldsStats', 'json', $context));
            unset($data['stats']);
        }
        if (\array_key_exists('context_annotation', $data)) {
            $values = array();
            foreach ($data['context_annotation'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\ContextAnnotation', 'json', $context);
            }
            $object->setContextAnnotation($values);
            unset($data['context_annotation']);
        }
        if (\array_key_exists('possibly_sensitive', $data)) {
            $object->setPossiblySensitive($data['possibly_sensitive']);
            unset($data['possibly_sensitive']);
        }
        if (\array_key_exists('lang', $data)) {
            $object->setLang($data['lang']);
            unset($data['lang']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
            unset($data['source']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['stats'] = $this->normalizer->normalize($object->getStats(), 'json', $context);
        if ($object->isInitialized('contextAnnotation') && null !== $object->getContextAnnotation()) {
            $values = array();
            foreach ($object->getContextAnnotation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['context_annotation'] = $values;
        }
        $data['possibly_sensitive'] = $object->getPossiblySensitive();
        if ($object->isInitialized('lang') && null !== $object->getLang()) {
            $data['lang'] = $object->getLang();
        }
        if ($object->isInitialized('source') && null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}