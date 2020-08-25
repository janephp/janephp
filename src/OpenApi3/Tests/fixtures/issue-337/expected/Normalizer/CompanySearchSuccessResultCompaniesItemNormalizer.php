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
class CompanySearchSuccessResultCompaniesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem();
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('regNo', $data)) {
            $object->setRegNo($data['regNo']);
        }
        if (\array_key_exists('vatNo', $data)) {
            $object->setVatNo($this->denormalizer->denormalize($data['vatNo'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemVatNo', 'json', $context));
        }
        if (\array_key_exists('safeNo', $data)) {
            $object->setSafeNo($data['safeNo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('officeType', $data)) {
            $object->setOfficeType($data['officeType']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('statusDescription', $data)) {
            $object->setStatusDescription($data['statusDescription']);
        }
        if (\array_key_exists('activityCode', $data)) {
            $object->setActivityCode($data['activityCode']);
        }
        if (\array_key_exists('tradingNames', $data)) {
            $object->setTradingNames($this->denormalizer->denormalize($data['tradingNames'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemTradingNames', 'json', $context));
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress', 'json', $context));
        }
        if (\array_key_exists('dateOfLatestChange', $data)) {
            $object->setDateOfLatestChange($this->denormalizer->denormalize($data['dateOfLatestChange'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemDateOfLatestChange', 'json', $context));
        }
        if (\array_key_exists('dateOfLatestCAccounts', $data)) {
            $object->setDateOfLatestCAccounts($this->denormalizer->denormalize($data['dateOfLatestCAccounts'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getRegNo()) {
            $data['regNo'] = $object->getRegNo();
        }
        if (null !== $object->getVatNo()) {
            $data['vatNo'] = $this->normalizer->normalize($object->getVatNo(), 'json', $context);
        }
        if (null !== $object->getSafeNo()) {
            $data['safeNo'] = $object->getSafeNo();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getOfficeType()) {
            $data['officeType'] = $object->getOfficeType();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getStatusDescription()) {
            $data['statusDescription'] = $object->getStatusDescription();
        }
        if (null !== $object->getActivityCode()) {
            $data['activityCode'] = $object->getActivityCode();
        }
        if (null !== $object->getTradingNames()) {
            $data['tradingNames'] = $this->normalizer->normalize($object->getTradingNames(), 'json', $context);
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getDateOfLatestChange()) {
            $data['dateOfLatestChange'] = $this->normalizer->normalize($object->getDateOfLatestChange(), 'json', $context);
        }
        if (null !== $object->getDateOfLatestCAccounts()) {
            $data['dateOfLatestCAccounts'] = $this->normalizer->normalize($object->getDateOfLatestCAccounts(), 'json', $context);
        }
        return $data;
    }
}