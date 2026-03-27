<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
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
            $object->setVatNo($this->denormalizer->denormalize($data['vatNo'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemVatNo::class, 'json', $context));
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
            $object->setTradingNames($this->denormalizer->denormalize($data['tradingNames'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemTradingNames::class, 'json', $context));
            unset($data['tradingNames']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('dateOfLatestChange', $data)) {
            $object->setDateOfLatestChange($this->denormalizer->denormalize($data['dateOfLatestChange'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestChange::class, 'json', $context));
            unset($data['dateOfLatestChange']);
        }
        if (\array_key_exists('dateOfLatestCAccounts', $data)) {
            $object->setDateOfLatestCAccounts($this->denormalizer->denormalize($data['dateOfLatestCAccounts'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts::class, 'json', $context));
            unset($data['dateOfLatestCAccounts']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('regNo') && null !== $data->getRegNo()) {
            $dataArray['regNo'] = $data->getRegNo();
        }
        if ($data->isInitialized('vatNo') && null !== $data->getVatNo()) {
            $dataArray['vatNo'] = $this->normalizer->normalize($data->getVatNo(), 'json', $context);
        }
        if ($data->isInitialized('safeNo') && null !== $data->getSafeNo()) {
            $dataArray['safeNo'] = $data->getSafeNo();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('officeType') && null !== $data->getOfficeType()) {
            $dataArray['officeType'] = $data->getOfficeType();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('statusDescription') && null !== $data->getStatusDescription()) {
            $dataArray['statusDescription'] = $data->getStatusDescription();
        }
        if ($data->isInitialized('activityCode') && null !== $data->getActivityCode()) {
            $dataArray['activityCode'] = $data->getActivityCode();
        }
        if ($data->isInitialized('tradingNames') && null !== $data->getTradingNames()) {
            $dataArray['tradingNames'] = $this->normalizer->normalize($data->getTradingNames(), 'json', $context);
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('dateOfLatestChange') && null !== $data->getDateOfLatestChange()) {
            $dataArray['dateOfLatestChange'] = $this->normalizer->normalize($data->getDateOfLatestChange(), 'json', $context);
        }
        if ($data->isInitialized('dateOfLatestCAccounts') && null !== $data->getDateOfLatestCAccounts()) {
            $dataArray['dateOfLatestCAccounts'] = $this->normalizer->normalize($data->getDateOfLatestCAccounts(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItem::class => false];
    }
}