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
class GbPeopleReportReponseReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReport';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReport';
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
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('directorId', $data)) {
            $object->setDirectorId($data['directorId']);
        }
        if (\array_key_exists('directorSummary', $data)) {
            $object->setDirectorSummary($this->denormalizer->denormalize($data['directorSummary'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorSummary', 'json', $context));
        }
        if (\array_key_exists('directorDetails', $data)) {
            $object->setDirectorDetails($this->denormalizer->denormalize($data['directorDetails'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorDetails', 'json', $context));
        }
        if (\array_key_exists('otherAddresses', $data)) {
            $values = array();
            foreach ($data['otherAddresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportOtherAddressesItem', 'json', $context);
            }
            $object->setOtherAddresses($values);
        }
        if (\array_key_exists('directorships', $data)) {
            $object->setDirectorships($this->denormalizer->denormalize($data['directorships'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDirectorId()) {
            $data['directorId'] = $object->getDirectorId();
        }
        if (null !== $object->getDirectorSummary()) {
            $data['directorSummary'] = $this->normalizer->normalize($object->getDirectorSummary(), 'json', $context);
        }
        if (null !== $object->getDirectorDetails()) {
            $data['directorDetails'] = $this->normalizer->normalize($object->getDirectorDetails(), 'json', $context);
        }
        if (null !== $object->getOtherAddresses()) {
            $values = array();
            foreach ($object->getOtherAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['otherAddresses'] = $values;
        }
        if (null !== $object->getDirectorships()) {
            $data['directorships'] = $this->normalizer->normalize($object->getDirectorships(), 'json', $context);
        }
        return $data;
    }
}