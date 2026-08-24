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
            $object->setBusinessName($data['businessName']);
            unset($data['businessName']);
        }
        if (\array_key_exists('registeredCompanyName', $data)) {
            $object->setRegisteredCompanyName($data['registeredCompanyName']);
            unset($data['registeredCompanyName']);
        }
        if (\array_key_exists('companyRegistrationNumber', $data)) {
            $object->setCompanyRegistrationNumber($data['companyRegistrationNumber']);
            unset($data['companyRegistrationNumber']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (\array_key_exists('companyRegistrationDate', $data)) {
            $object->setCompanyRegistrationDate($data['companyRegistrationDate']);
            unset($data['companyRegistrationDate']);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($this->denormalizer->denormalize($data['legalForm'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm::class, 'json', $context));
            unset($data['legalForm']);
        }
        if (\array_key_exists('companyStatus', $data)) {
            $object->setCompanyStatus($this->denormalizer->denormalize($data['companyStatus'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus::class, 'json', $context));
            unset($data['companyStatus']);
        }
        if (\array_key_exists('principalActivity', $data)) {
            $object->setPrincipalActivity($this->denormalizer->denormalize($data['principalActivity'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity::class, 'json', $context));
            unset($data['principalActivity']);
        }
        if (\array_key_exists('contactAddress', $data)) {
            $object->setContactAddress($this->denormalizer->denormalize($data['contactAddress'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress::class, 'json', $context));
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
        if ($data->isInitialized('businessName') && null !== $data->getBusinessName()) {
            $dataArray['businessName'] = $data->getBusinessName();
        }
        if ($data->isInitialized('registeredCompanyName') && null !== $data->getRegisteredCompanyName()) {
            $dataArray['registeredCompanyName'] = $data->getRegisteredCompanyName();
        }
        if ($data->isInitialized('companyRegistrationNumber') && null !== $data->getCompanyRegistrationNumber()) {
            $dataArray['companyRegistrationNumber'] = $data->getCompanyRegistrationNumber();
        }
        if ($data->isInitialized('country') && null !== $data->getCountry()) {
            $dataArray['country'] = $data->getCountry();
        }
        if ($data->isInitialized('companyRegistrationDate') && null !== $data->getCompanyRegistrationDate()) {
            $dataArray['companyRegistrationDate'] = $data->getCompanyRegistrationDate();
        }
        if ($data->isInitialized('legalForm') && null !== $data->getLegalForm()) {
            $dataArray['legalForm'] = $data->getLegalForm() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getLegalForm(), 'json', $context));
        }
        if ($data->isInitialized('companyStatus') && null !== $data->getCompanyStatus()) {
            $dataArray['companyStatus'] = $data->getCompanyStatus() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getCompanyStatus(), 'json', $context));
        }
        if ($data->isInitialized('principalActivity') && null !== $data->getPrincipalActivity()) {
            $dataArray['principalActivity'] = $data->getPrincipalActivity() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getPrincipalActivity(), 'json', $context));
        }
        if ($data->isInitialized('contactAddress') && null !== $data->getContactAddress()) {
            $dataArray['contactAddress'] = $data->getContactAddress() === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->getContactAddress(), 'json', $context));
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class => false];
    }
}