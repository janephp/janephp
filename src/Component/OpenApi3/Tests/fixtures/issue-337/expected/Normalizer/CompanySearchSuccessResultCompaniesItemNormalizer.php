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
class CompanySearchSuccessResultCompaniesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItem';
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
        $object = new \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('regNo', $data)) {
            $object->setRegNo($data['regNo']);
            unset($data['regNo']);
        }
        if (\array_key_exists('vatNo', $data)) {
            $object->setVatNo($this->denormalizer->denormalize($data['vatNo'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemVatNo', 'json', $context));
            unset($data['vatNo']);
        }
        if (\array_key_exists('safeNo', $data)) {
            $object->setSafeNo($data['safeNo']);
            unset($data['safeNo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('officeType', $data)) {
            $object->setOfficeType($data['officeType']);
            unset($data['officeType']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('statusDescription', $data)) {
            $object->setStatusDescription($data['statusDescription']);
            unset($data['statusDescription']);
        }
        if (\array_key_exists('activityCode', $data)) {
            $object->setActivityCode($data['activityCode']);
            unset($data['activityCode']);
        }
        if (\array_key_exists('tradingNames', $data)) {
            $object->setTradingNames($this->denormalizer->denormalize($data['tradingNames'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemTradingNames', 'json', $context));
            unset($data['tradingNames']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemAddress', 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('dateOfLatestChange', $data)) {
            $object->setDateOfLatestChange($this->denormalizer->denormalize($data['dateOfLatestChange'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemDateOfLatestChange', 'json', $context));
            unset($data['dateOfLatestChange']);
        }
        if (\array_key_exists('dateOfLatestCAccounts', $data)) {
            $object->setDateOfLatestCAccounts($this->denormalizer->denormalize($data['dateOfLatestCAccounts'], 'CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts', 'json', $context));
            unset($data['dateOfLatestCAccounts']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if ($object->isInitialized('regNo') && null !== $object->getRegNo()) {
            $data['regNo'] = $object->getRegNo();
        }
        if ($object->isInitialized('vatNo') && null !== $object->getVatNo()) {
            $data['vatNo'] = $object->getVatNo() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getVatNo(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('safeNo') && null !== $object->getSafeNo()) {
            $data['safeNo'] = $object->getSafeNo();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('officeType') && null !== $object->getOfficeType()) {
            $data['officeType'] = $object->getOfficeType();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('statusDescription') && null !== $object->getStatusDescription()) {
            $data['statusDescription'] = $object->getStatusDescription();
        }
        if ($object->isInitialized('activityCode') && null !== $object->getActivityCode()) {
            $data['activityCode'] = $object->getActivityCode();
        }
        if ($object->isInitialized('tradingNames') && null !== $object->getTradingNames()) {
            $data['tradingNames'] = $object->getTradingNames() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getTradingNames(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $object->getAddress() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getAddress(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('dateOfLatestChange') && null !== $object->getDateOfLatestChange()) {
            $data['dateOfLatestChange'] = $object->getDateOfLatestChange() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getDateOfLatestChange(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('dateOfLatestCAccounts') && null !== $object->getDateOfLatestCAccounts()) {
            $data['dateOfLatestCAccounts'] = $object->getDateOfLatestCAccounts() == null ? null : new \ArrayObject($this->normalizer->normalize($object->getDateOfLatestCAccounts(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('CreditSafe\\API\\Model\\CompanySearchSuccessResultCompaniesItem' => false);
    }
}