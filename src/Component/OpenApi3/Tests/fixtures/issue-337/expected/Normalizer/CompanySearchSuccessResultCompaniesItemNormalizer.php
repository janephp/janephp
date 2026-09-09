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
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $data['country'];
            unset($data['country']);
        }
        if (\array_key_exists('regNo', $data)) {
            $object->regNo = $data['regNo'];
            unset($data['regNo']);
        }
        if (\array_key_exists('vatNo', $data)) {
            $object->vatNo = $this->denormalizer->denormalize($data['vatNo'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemVatNo::class, 'json', $context);
            unset($data['vatNo']);
        }
        if (\array_key_exists('safeNo', $data)) {
            $object->safeNo = $data['safeNo'];
            unset($data['safeNo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('officeType', $data)) {
            $object->officeType = $data['officeType'];
            unset($data['officeType']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('statusDescription', $data)) {
            $object->statusDescription = $data['statusDescription'];
            unset($data['statusDescription']);
        }
        if (\array_key_exists('activityCode', $data)) {
            $object->activityCode = $data['activityCode'];
            unset($data['activityCode']);
        }
        if (\array_key_exists('tradingNames', $data)) {
            $object->tradingNames = $this->denormalizer->denormalize($data['tradingNames'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemTradingNames::class, 'json', $context);
            unset($data['tradingNames']);
        }
        if (\array_key_exists('address', $data)) {
            $object->address = $this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemAddress::class, 'json', $context);
            unset($data['address']);
        }
        if (\array_key_exists('dateOfLatestChange', $data)) {
            $object->dateOfLatestChange = $this->denormalizer->denormalize($data['dateOfLatestChange'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestChange::class, 'json', $context);
            unset($data['dateOfLatestChange']);
        }
        if (\array_key_exists('dateOfLatestCAccounts', $data)) {
            $object->dateOfLatestCAccounts = $this->denormalizer->denormalize($data['dateOfLatestCAccounts'], \CreditSafe\API\Model\CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts::class, 'json', $context);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (array_key_exists('country', get_object_vars($data)) && null !== ($data->country ?? null)) {
            $dataArray['country'] = $data->country;
        }
        if (array_key_exists('regNo', get_object_vars($data)) && null !== ($data->regNo ?? null)) {
            $dataArray['regNo'] = $data->regNo;
        }
        if (array_key_exists('vatNo', get_object_vars($data)) && null !== ($data->vatNo ?? null)) {
            $normalized = $this->normalizer->normalize($data->vatNo, 'json', $context);
            $dataArray['vatNo'] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('safeNo', get_object_vars($data)) && null !== ($data->safeNo ?? null)) {
            $dataArray['safeNo'] = $data->safeNo;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }
        if (array_key_exists('officeType', get_object_vars($data)) && null !== ($data->officeType ?? null)) {
            $dataArray['officeType'] = $data->officeType;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type;
        }
        if (array_key_exists('statusDescription', get_object_vars($data)) && null !== ($data->statusDescription ?? null)) {
            $dataArray['statusDescription'] = $data->statusDescription;
        }
        if (array_key_exists('activityCode', get_object_vars($data)) && null !== ($data->activityCode ?? null)) {
            $dataArray['activityCode'] = $data->activityCode;
        }
        if (array_key_exists('tradingNames', get_object_vars($data)) && null !== ($data->tradingNames ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->tradingNames, 'json', $context);
            $dataArray['tradingNames'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('address', get_object_vars($data)) && null !== ($data->address ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->address, 'json', $context);
            $dataArray['address'] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('dateOfLatestChange', get_object_vars($data)) && null !== ($data->dateOfLatestChange ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->dateOfLatestChange, 'json', $context);
            $dataArray['dateOfLatestChange'] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('dateOfLatestCAccounts', get_object_vars($data)) && null !== ($data->dateOfLatestCAccounts ?? null)) {
            $normalized_4 = $this->normalizer->normalize($data->dateOfLatestCAccounts, 'json', $context);
            $dataArray['dateOfLatestCAccounts'] = \is_iterable($normalized_4) ? new \CreditSafe\API\Runtime\JsonObject($normalized_4) : $normalized_4;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
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