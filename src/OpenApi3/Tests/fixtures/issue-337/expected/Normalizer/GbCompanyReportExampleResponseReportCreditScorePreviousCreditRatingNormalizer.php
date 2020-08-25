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
class GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRating();
        if (\array_key_exists('commonValue', $data)) {
            $object->setCommonValue($data['commonValue']);
        }
        if (\array_key_exists('commonDescription', $data)) {
            $object->setCommonDescription($data['commonDescription']);
        }
        if (\array_key_exists('creditLimit', $data)) {
            $object->setCreditLimit($this->denormalizer->denormalize($data['creditLimit'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingCreditLimit', 'json', $context));
        }
        if (\array_key_exists('providerValue', $data)) {
            $object->setProviderValue($this->denormalizer->denormalize($data['providerValue'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportCreditScorePreviousCreditRatingProviderValue', 'json', $context));
        }
        if (\array_key_exists('providerDescription', $data)) {
            $object->setProviderDescription($data['providerDescription']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCommonValue()) {
            $data['commonValue'] = $object->getCommonValue();
        }
        if (null !== $object->getCommonDescription()) {
            $data['commonDescription'] = $object->getCommonDescription();
        }
        if (null !== $object->getCreditLimit()) {
            $data['creditLimit'] = $this->normalizer->normalize($object->getCreditLimit(), 'json', $context);
        }
        if (null !== $object->getProviderValue()) {
            $data['providerValue'] = $this->normalizer->normalize($object->getProviderValue(), 'json', $context);
        }
        if (null !== $object->getProviderDescription()) {
            $data['providerDescription'] = $object->getProviderDescription();
        }
        return $data;
    }
}