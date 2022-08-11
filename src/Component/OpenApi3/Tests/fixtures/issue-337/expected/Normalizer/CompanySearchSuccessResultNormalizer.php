<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanySearchSuccessResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\CompanySearchSuccessResult';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CompanySearchSuccessResult';
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
        $object = new \CreditSafe\API\Model\CompanySearchSuccessResult();
        if (\array_key_exists('totalSize', $data) && \is_int($data['totalSize'])) {
            $data['totalSize'] = (double) $data['totalSize'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('totalSize', $data)) {
            $object->setTotalSize($data['totalSize']);
        }
        if (\array_key_exists('companies', $data)) {
            $values = array();
            foreach ($data['companies'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItem', 'json', $context);
            }
            $object->setCompanies($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTotalSize()) {
            $data['totalSize'] = $object->getTotalSize();
        }
        if (null !== $object->getCompanies()) {
            $values = array();
            foreach ($object->getCompanies() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['companies'] = $values;
        }
        return $data;
    }
}