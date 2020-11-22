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
class GbCompanyReportExampleResponseReportCompanyIdentificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentification';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentification';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('basicInformation', $data)) {
            $object->setBasicInformation($this->denormalizer->denormalize($data['basicInformation'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation', 'json', $context));
        }
        if (\array_key_exists('activityClassifications', $data)) {
            $values = array();
            foreach ($data['activityClassifications'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem', 'json', $context);
            }
            $object->setActivityClassifications($values);
        }
        if (\array_key_exists('previousNames', $data)) {
            $values_1 = array();
            foreach ($data['previousNames'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem', 'json', $context);
            }
            $object->setPreviousNames($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBasicInformation()) {
            $data['basicInformation'] = $this->normalizer->normalize($object->getBasicInformation(), 'json', $context);
        }
        if (null !== $object->getActivityClassifications()) {
            $values = array();
            foreach ($object->getActivityClassifications() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['activityClassifications'] = $values;
        }
        if (null !== $object->getPreviousNames()) {
            $values_1 = array();
            foreach ($object->getPreviousNames() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['previousNames'] = $values_1;
        }
        return $data;
    }
}