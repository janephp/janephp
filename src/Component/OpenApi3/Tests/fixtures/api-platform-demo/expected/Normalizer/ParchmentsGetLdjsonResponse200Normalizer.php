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
class ParchmentsGetLdjsonResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200';
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
        $object = new \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hydra:member', $data)) {
            $values = array();
            foreach ($data['hydra:member'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\ParchmentJsonld', 'json', $context);
            }
            $object->setHydraMember($values);
            unset($data['hydra:member']);
        }
        if (\array_key_exists('hydra:totalItems', $data)) {
            $object->setHydraTotalItems($data['hydra:totalItems']);
            unset($data['hydra:totalItems']);
        }
        if (\array_key_exists('hydra:view', $data)) {
            $object->setHydraView($this->denormalizer->denormalize($data['hydra:view'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraView', 'json', $context));
            unset($data['hydra:view']);
        }
        if (\array_key_exists('hydra:search', $data)) {
            $object->setHydraSearch($this->denormalizer->denormalize($data['hydra:search'], 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch', 'json', $context));
            unset($data['hydra:search']);
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
        $values = array();
        foreach ($object->getHydraMember() as $value) {
            $values[] = $value == null ? null : new \ArrayObject($this->normalizer->normalize($value, 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        $data['hydra:member'] = $values;
        if ($object->isInitialized('hydraTotalItems') && null !== $object->getHydraTotalItems()) {
            $data['hydra:totalItems'] = $object->getHydraTotalItems();
        }
        if ($object->isInitialized('hydraView') && null !== $object->getHydraView()) {
            $data['hydra:view'] = $object->getHydraView() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getHydraView(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('hydraSearch') && null !== $object->getHydraSearch()) {
            $data['hydra:search'] = $object->getHydraSearch() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getHydraSearch(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200' => false);
    }
}