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
class GbCompanyReportExampleResponseReportOtherInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportOtherInformation';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportOtherInformation';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportOtherInformation();
        if (\array_key_exists('advisors', $data)) {
            $values = array();
            foreach ($data['advisors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportOtherInformationAdvisorsItem', 'json', $context);
            }
            $object->setAdvisors($values);
        }
        if (\array_key_exists('employeesInformation', $data)) {
            $values_1 = array();
            foreach ($data['employeesInformation'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportOtherInformationEmployeesInformationItem', 'json', $context);
            }
            $object->setEmployeesInformation($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdvisors()) {
            $values = array();
            foreach ($object->getAdvisors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['advisors'] = $values;
        }
        if (null !== $object->getEmployeesInformation()) {
            $values_1 = array();
            foreach ($object->getEmployeesInformation() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['employeesInformation'] = $values_1;
        }
        return $data;
    }
}