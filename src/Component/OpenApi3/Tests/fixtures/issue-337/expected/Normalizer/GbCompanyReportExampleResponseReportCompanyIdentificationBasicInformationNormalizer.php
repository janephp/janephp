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
class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('businessName', $data)) {
            $object->businessName = $data['businessName'];
            unset($data['businessName']);
        }
        if (\array_key_exists('registeredCompanyName', $data)) {
            $object->registeredCompanyName = $data['registeredCompanyName'];
            unset($data['registeredCompanyName']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->companyRegistrationNumber = $data['companyRegistrationNumber'];
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $data['country'];
            unset($data['country']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->companyRegistrationDate = $data['companyRegistrationDate'];
            unset($data['companyRegistrationDate']);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->legalForm = $this->denormalizer->denormalize($data['legalForm'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm::class, 'json', $context);
            unset($data['legalForm']);
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->companyStatus = $this->denormalizer->denormalize($data['companyStatus'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus::class, 'json', $context);
            unset($data['companyStatus']);
        }
        if (\array_key_exists('principalActivity', $data)) {
            $object->principalActivity = $this->denormalizer->denormalize($data['principalActivity'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity::class, 'json', $context);
            unset($data['principalActivity']);
        }
        if (\array_key_exists('contactAddress', $data)) {
            $object->contactAddress = $this->denormalizer->denormalize($data['contactAddress'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress::class, 'json', $context);
            unset($data['contactAddress']);
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
        if (array_key_exists('businessName', get_object_vars($data)) && null !== ($data->businessName ?? null)) {
            $dataArray['businessName'] = $data->businessName ?? null;
        }
        if (array_key_exists('registeredCompanyName', get_object_vars($data)) && null !== ($data->registeredCompanyName ?? null)) {
            $dataArray['registeredCompanyName'] = $data->registeredCompanyName ?? null;
        }
        if (array_key_exists('companyRegistrationNumber', get_object_vars($data)) && null !== ($data->companyRegistrationNumber ?? null)) {
            $dataArray['companyRegistrationNumber'] = $data->companyRegistrationNumber ?? null;
        }
        if (array_key_exists('country', get_object_vars($data)) && null !== ($data->country ?? null)) {
            $dataArray['country'] = $data->country ?? null;
        }
        if (array_key_exists('companyRegistrationDate', get_object_vars($data)) && null !== ($data->companyRegistrationDate ?? null)) {
            $dataArray['companyRegistrationDate'] = $data->companyRegistrationDate ?? null;
        }
        if (array_key_exists('legalForm', get_object_vars($data)) && null !== ($data->legalForm ?? null)) {
            $dataArray['legalForm'] = ($data->legalForm ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->legalForm ?? null, 'json', $context));
        }
        if (array_key_exists('companyStatus', get_object_vars($data)) && null !== ($data->companyStatus ?? null)) {
            $dataArray['companyStatus'] = ($data->companyStatus ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->companyStatus ?? null, 'json', $context));
        }
        if (array_key_exists('principalActivity', get_object_vars($data)) && null !== ($data->principalActivity ?? null)) {
            $dataArray['principalActivity'] = ($data->principalActivity ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->principalActivity ?? null, 'json', $context));
        }
        if (array_key_exists('contactAddress', get_object_vars($data)) && null !== ($data->contactAddress ?? null)) {
            $dataArray['contactAddress'] = ($data->contactAddress ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->contactAddress ?? null, 'json', $context));
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class => false];
    }
}