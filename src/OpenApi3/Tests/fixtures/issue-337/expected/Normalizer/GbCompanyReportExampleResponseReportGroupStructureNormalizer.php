<?php

namespace CreditSafe\API\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportGroupStructureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportGroupStructure';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportGroupStructure';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportGroupStructure();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('subsidiaryCompanies', $data)) {
            $values = array();
            foreach ($data['subsidiaryCompanies'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportGroupStructureSubsidiaryCompaniesItem', 'json', $context);
            }
            $object->setSubsidiaryCompanies($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getSubsidiaryCompanies()) {
            $values = array();
            foreach ($object->getSubsidiaryCompanies() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['subsidiaryCompanies'] = $values;
        }
        return $data;
    }
}