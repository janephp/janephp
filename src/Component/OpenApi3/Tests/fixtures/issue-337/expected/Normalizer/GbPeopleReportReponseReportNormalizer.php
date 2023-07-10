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
class GbPeopleReportReponseReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReport';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
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
            unset($data['directorId']);
        }
        if (\array_key_exists('directorSummary', $data)) {
            $object->setDirectorSummary($this->denormalizer->denormalize($data['directorSummary'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorSummary', 'json', $context));
            unset($data['directorSummary']);
        }
        if (\array_key_exists('directorDetails', $data)) {
            $object->setDirectorDetails($this->denormalizer->denormalize($data['directorDetails'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorDetails', 'json', $context));
            unset($data['directorDetails']);
        }
        if (\array_key_exists('otherAddresses', $data)) {
            $values = array();
            foreach ($data['otherAddresses'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportOtherAddressesItem', 'json', $context);
            }
            $object->setOtherAddresses($values);
            unset($data['otherAddresses']);
        }
        if (\array_key_exists('directorships', $data)) {
            $object->setDirectorships($this->denormalizer->denormalize($data['directorships'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships', 'json', $context));
            unset($data['directorships']);
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
        if ($object->isInitialized('directorId') && null !== $object->getDirectorId()) {
            $data['directorId'] = $object->getDirectorId();
        }
        if ($object->isInitialized('directorSummary') && null !== $object->getDirectorSummary()) {
            $data['directorSummary'] = $this->normalizer->normalize($object->getDirectorSummary(), 'json', $context);
        }
        if ($object->isInitialized('directorDetails') && null !== $object->getDirectorDetails()) {
            $data['directorDetails'] = $this->normalizer->normalize($object->getDirectorDetails(), 'json', $context);
        }
        if ($object->isInitialized('otherAddresses') && null !== $object->getOtherAddresses()) {
            $values = array();
            foreach ($object->getOtherAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['otherAddresses'] = $values;
        }
        if ($object->isInitialized('directorships') && null !== $object->getDirectorships()) {
            $data['directorships'] = $this->normalizer->normalize($object->getDirectorships(), 'json', $context);
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
        return array('CreditSafe\\API\\Model\\GbPeopleReportReponseReport' => false);
    }
}