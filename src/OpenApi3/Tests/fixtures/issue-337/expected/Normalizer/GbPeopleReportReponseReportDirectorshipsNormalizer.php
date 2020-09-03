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
class GbPeopleReportReponseReportDirectorshipsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorships';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorships();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('current', $data)) {
            $values = array();
            foreach ($data['current'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsCurrentItem', 'json', $context);
            }
            $object->setCurrent($values);
        }
        if (\array_key_exists('inactive', $data)) {
            $values_1 = array();
            foreach ($data['inactive'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsInactiveItem', 'json', $context);
            }
            $object->setInactive($values_1);
        }
        if (\array_key_exists('previous', $data)) {
            $values_2 = array();
            foreach ($data['previous'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItem', 'json', $context);
            }
            $object->setPrevious($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrent()) {
            $values = array();
            foreach ($object->getCurrent() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['current'] = $values;
        }
        if (null !== $object->getInactive()) {
            $values_1 = array();
            foreach ($object->getInactive() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['inactive'] = $values_1;
        }
        if (null !== $object->getPrevious()) {
            $values_2 = array();
            foreach ($object->getPrevious() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['previous'] = $values_2;
        }
        return $data;
    }
}