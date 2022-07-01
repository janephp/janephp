<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SearchResultTextMatchesItemMatchesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\SearchResultTextMatchesItemMatchesItem';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\SearchResultTextMatchesItemMatchesItem';
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
        $object = new \Github\Model\SearchResultTextMatchesItemMatchesItem();
        $validator = new \Github\Validator\SearchResultTextMatchesItemMatchesItemValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('indices', $data)) {
            $values = array();
            foreach ($data['indices'] as $value) {
                $values[] = $value;
            }
            $object->setIndices($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if (null !== $object->getIndices()) {
            $values = array();
            foreach ($object->getIndices() as $value) {
                $values[] = $value;
            }
            $data['indices'] = $values;
        }
        $validator = new \Github\Validator\SearchResultTextMatchesItemMatchesItemValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}