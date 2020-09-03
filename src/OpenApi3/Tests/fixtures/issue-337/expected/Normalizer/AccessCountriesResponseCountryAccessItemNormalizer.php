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
class AccessCountriesResponseCountryAccessItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItem();
        if (null === $data) {
            return $object;
        }
        if (\array_key_exists('creditsafeConnectOnlineReports', $data)) {
            $values = array();
            foreach ($data['creditsafeConnectOnlineReports'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem', 'json', $context);
            }
            $object->setCreditsafeConnectOnlineReports($values);
        }
        if (\array_key_exists('creditsafeConnectOfflineReports', $data)) {
            $values_1 = array();
            foreach ($data['creditsafeConnectOfflineReports'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem', 'json', $context);
            }
            $object->setCreditsafeConnectOfflineReports($values_1);
        }
        if (\array_key_exists('creditsafeConnectMonitoring', $data)) {
            $values_2 = array();
            foreach ($data['creditsafeConnectMonitoring'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem', 'json', $context);
            }
            $object->setCreditsafeConnectMonitoring($values_2);
        }
        if (\array_key_exists('creditsafeConnectDirectorReports', $data)) {
            $values_3 = array();
            foreach ($data['creditsafeConnectDirectorReports'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem', 'json', $context);
            }
            $object->setCreditsafeConnectDirectorReports($values_3);
        }
        if (\array_key_exists('creditsafeConnectImageDocuments', $data)) {
            $values_4 = array();
            foreach ($data['creditsafeConnectImageDocuments'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem', 'json', $context);
            }
            $object->setCreditsafeConnectImageDocuments($values_4);
        }
        if (\array_key_exists('creditsafeConnectBankValidation', $data)) {
            $values_5 = array();
            foreach ($data['creditsafeConnectBankValidation'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem', 'json', $context);
            }
            $object->setCreditsafeConnectBankValidation($values_5);
        }
        if (\array_key_exists('creditsafeConnectBankVerification', $data)) {
            $values_6 = array();
            foreach ($data['creditsafeConnectBankVerification'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'CreditSafe\\API\\Model\\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem', 'json', $context);
            }
            $object->setCreditsafeConnectBankVerification($values_6);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreditsafeConnectOnlineReports()) {
            $values = array();
            foreach ($object->getCreditsafeConnectOnlineReports() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['creditsafeConnectOnlineReports'] = $values;
        }
        if (null !== $object->getCreditsafeConnectOfflineReports()) {
            $values_1 = array();
            foreach ($object->getCreditsafeConnectOfflineReports() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['creditsafeConnectOfflineReports'] = $values_1;
        }
        if (null !== $object->getCreditsafeConnectMonitoring()) {
            $values_2 = array();
            foreach ($object->getCreditsafeConnectMonitoring() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['creditsafeConnectMonitoring'] = $values_2;
        }
        if (null !== $object->getCreditsafeConnectDirectorReports()) {
            $values_3 = array();
            foreach ($object->getCreditsafeConnectDirectorReports() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['creditsafeConnectDirectorReports'] = $values_3;
        }
        if (null !== $object->getCreditsafeConnectImageDocuments()) {
            $values_4 = array();
            foreach ($object->getCreditsafeConnectImageDocuments() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['creditsafeConnectImageDocuments'] = $values_4;
        }
        if (null !== $object->getCreditsafeConnectBankValidation()) {
            $values_5 = array();
            foreach ($object->getCreditsafeConnectBankValidation() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['creditsafeConnectBankValidation'] = $values_5;
        }
        if (null !== $object->getCreditsafeConnectBankVerification()) {
            $values_6 = array();
            foreach ($object->getCreditsafeConnectBankVerification() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['creditsafeConnectBankVerification'] = $values_6;
        }
        return $data;
    }
}