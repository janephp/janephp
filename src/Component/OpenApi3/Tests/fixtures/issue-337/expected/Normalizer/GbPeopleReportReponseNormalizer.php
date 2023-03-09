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
class GbPeopleReportReponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponse';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponse';
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
        $object = new \CreditSafe\API\Model\GbPeopleReportReponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('correlationId', $data)) {
            $object->setCorrelationId($data['correlationId']);
            unset($data['correlationId']);
        }
        if (\array_key_exists('orderId', $data)) {
            $object->setOrderId($data['orderId']);
            unset($data['orderId']);
        }
        if (\array_key_exists('directorId', $data)) {
            $object->setDirectorId($data['directorId']);
            unset($data['directorId']);
        }
        if (\array_key_exists('dateOfOrder', $data)) {
            $object->setDateOfOrder($data['dateOfOrder']);
            unset($data['dateOfOrder']);
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        if (\array_key_exists('userId', $data)) {
            $object->setUserId($data['userId']);
            unset($data['userId']);
        }
        if (\array_key_exists('report', $data)) {
            $object->setReport($this->denormalizer->denormalize($data['report'], 'CreditSafe\\API\\Model\\GbPeopleReportReponseReport', 'json', $context));
            unset($data['report']);
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
        if ($object->isInitialized('correlationId') && null !== $object->getCorrelationId()) {
            $data['correlationId'] = $object->getCorrelationId();
        }
        if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
            $data['orderId'] = $object->getOrderId();
        }
        if ($object->isInitialized('directorId') && null !== $object->getDirectorId()) {
            $data['directorId'] = $object->getDirectorId();
        }
        if ($object->isInitialized('dateOfOrder') && null !== $object->getDateOfOrder()) {
            $data['dateOfOrder'] = $object->getDateOfOrder();
        }
        if ($object->isInitialized('language') && null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if ($object->isInitialized('report') && null !== $object->getReport()) {
            $data['report'] = $this->normalizer->normalize($object->getReport(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}