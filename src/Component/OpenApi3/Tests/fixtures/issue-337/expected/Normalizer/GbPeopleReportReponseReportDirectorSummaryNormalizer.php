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
class GbPeopleReportReponseReportDirectorSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorSummary';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorSummary';
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
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currentAppointments', $data)) {
            $object->setCurrentAppointments($data['currentAppointments']);
            unset($data['currentAppointments']);
        }
        if (\array_key_exists('inactiveAppointments', $data)) {
            $object->setInactiveAppointments($data['inactiveAppointments']);
            unset($data['inactiveAppointments']);
        }
        if (\array_key_exists('previousAppointments', $data)) {
            $object->setPreviousAppointments($data['previousAppointments']);
            unset($data['previousAppointments']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('currentAppointments') && null !== $object->getCurrentAppointments()) {
            $data['currentAppointments'] = $object->getCurrentAppointments();
        }
        if ($object->isInitialized('inactiveAppointments') && null !== $object->getInactiveAppointments()) {
            $data['inactiveAppointments'] = $object->getInactiveAppointments();
        }
        if ($object->isInitialized('previousAppointments') && null !== $object->getPreviousAppointments()) {
            $data['previousAppointments'] = $object->getPreviousAppointments();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}