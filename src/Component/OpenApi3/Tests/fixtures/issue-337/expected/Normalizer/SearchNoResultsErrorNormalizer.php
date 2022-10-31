<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SearchNoResultsErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\SearchNoResultsError';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\SearchNoResultsError';
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
        $object = new \CreditSafe\API\Model\SearchNoResultsError();
        if (\array_key_exists('totalSize', $data) && \is_int($data['totalSize'])) {
            $data['totalSize'] = (double) $data['totalSize'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalSize', $data)) {
            $object->setTotalSize($data['totalSize']);
            unset($data['totalSize']);
        }
        if (\array_key_exists('companies', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['companies'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setCompanies($values);
            unset($data['companies']);
        }
        if (\array_key_exists('messages', $data)) {
            $object->setMessages($this->denormalizer->denormalize($data['messages'], 'CreditSafe\\API\\Model\\SearchNoResultsErrorMessages', 'json', $context));
            unset($data['messages']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
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
        if ($object->isInitialized('totalSize') && null !== $object->getTotalSize()) {
            $data['totalSize'] = $object->getTotalSize();
        }
        if ($object->isInitialized('companies') && null !== $object->getCompanies()) {
            $values = array();
            foreach ($object->getCompanies() as $key => $value) {
                $values[$key] = $value;
            }
            $data['companies'] = $values;
        }
        if ($object->isInitialized('messages') && null !== $object->getMessages()) {
            $data['messages'] = $this->normalizer->normalize($object->getMessages(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }
        return $data;
    }
}