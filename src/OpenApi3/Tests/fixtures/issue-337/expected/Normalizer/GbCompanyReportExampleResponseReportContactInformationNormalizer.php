<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportContactInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportContactInformation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportContactInformation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportContactInformation();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('mainAddress', $data)) {
            $object->setMainAddress($this->denormalizer->denormalize($data['mainAddress'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportContactInformationMainAddress', 'json', $context));
        }
        if (\array_key_exists('otherAddresses', $data)) {
            $values = array();
            foreach ($data['otherAddresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem', 'json', $context);
            }
            $object->setOtherAddresses($values);
        }
        if (\array_key_exists('websites', $data)) {
            $values_1 = array();
            foreach ($data['websites'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWebsites($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMainAddress()) {
            $data['mainAddress'] = $this->normalizer->normalize($object->getMainAddress(), 'json', $context);
        }
        if (null !== $object->getOtherAddresses()) {
            $values = array();
            foreach ($object->getOtherAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['otherAddresses'] = $values;
        }
        if (null !== $object->getWebsites()) {
            $values_1 = array();
            foreach ($object->getWebsites() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['websites'] = $values_1;
        }
        return $data;
    }
}