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
class GbPeopleReportReponseReportDirectorshipsInactiveItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->companyName = $data['companyName'];
            unset($data['companyName']);
        }
        if (\array_key_exists('companyNumber', $data)) {
            $object->companyNumber = $data['companyNumber'];
            unset($data['companyNumber']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->companyRegistrationNumber = $data['companyRegistrationNumber'];
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('position', $data)) {
            $object->position = $this->denormalizer->denormalize($data['position'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemPosition::class, 'json', $context);
            unset($data['position']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->companyRegistrationDate = $data['companyRegistrationDate'];
            unset($data['companyRegistrationDate']);
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->netWorth = $this->denormalizer->denormalize($data['netWorth'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth::class, 'json', $context);
            unset($data['netWorth']);
        }
        if (\array_key_exists('legalCount', $data)) {
            $object->legalCount = $data['legalCount'];
            unset($data['legalCount']);
        }
        if (\array_key_exists('creditScore', $data)) {
            $object->creditScore = $this->denormalizer->denormalize($data['creditScore'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore::class, 'json', $context);
            unset($data['creditScore']);
        }
        if (\array_key_exists('additionalData', $data)) {
            $object->additionalData = $this->denormalizer->denormalize($data['additionalData'], \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData::class, 'json', $context);
            unset($data['additionalData']);
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
        if (array_key_exists('companyName', get_object_vars($data)) && null !== ($data->companyName ?? null)) {
            $dataArray['companyName'] = $data->companyName;
        }
        if (array_key_exists('companyNumber', get_object_vars($data)) && null !== ($data->companyNumber ?? null)) {
            $dataArray['companyNumber'] = $data->companyNumber;
        }
        if (array_key_exists('companyRegistrationNumber', get_object_vars($data)) && null !== ($data->companyRegistrationNumber ?? null)) {
            $dataArray['companyRegistrationNumber'] = $data->companyRegistrationNumber;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status;
        }
        if (array_key_exists('position', get_object_vars($data)) && null !== ($data->position ?? null)) {
            $normalized = $this->normalizer->normalize($data->position, 'json', $context);
            $dataArray['position'] = \is_iterable($normalized) ? new \CreditSafe\API\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('companyRegistrationDate', get_object_vars($data)) && null !== ($data->companyRegistrationDate ?? null)) {
            $dataArray['companyRegistrationDate'] = $data->companyRegistrationDate;
        }
        if (array_key_exists('netWorth', get_object_vars($data)) && null !== ($data->netWorth ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->netWorth, 'json', $context);
            $dataArray['netWorth'] = \is_iterable($normalized_1) ? new \CreditSafe\API\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('legalCount', get_object_vars($data)) && null !== ($data->legalCount ?? null)) {
            $dataArray['legalCount'] = $data->legalCount;
        }
        if (array_key_exists('creditScore', get_object_vars($data)) && null !== ($data->creditScore ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->creditScore, 'json', $context);
            $dataArray['creditScore'] = \is_iterable($normalized_2) ? new \CreditSafe\API\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('additionalData', get_object_vars($data)) && null !== ($data->additionalData ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->additionalData, 'json', $context);
            $dataArray['additionalData'] = \is_iterable($normalized_3) ? new \CreditSafe\API\Runtime\JsonObject($normalized_3) : $normalized_3;
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
        return [\CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsInactiveItem::class => false];
    }
}