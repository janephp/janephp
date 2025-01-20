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
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflictsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressConflict', $data)) {
            $object->setAddressConflict($data['addressConflict']);
            unset($data['addressConflict']);
        }
        if (\array_key_exists('citizenshipConflict', $data)) {
            $object->setCitizenshipConflict($data['citizenshipConflict']);
            unset($data['citizenshipConflict']);
        }
        if (\array_key_exists('countryConflict', $data)) {
            $object->setCountryConflict($data['countryConflict']);
            unset($data['countryConflict']);
        }
        if (\array_key_exists('dobConflict', $data)) {
            $object->setDobConflict($data['dobConflict']);
            unset($data['dobConflict']);
        }
        if (\array_key_exists('entityTypeConflict', $data)) {
            $object->setEntityTypeConflict($data['entityTypeConflict']);
            unset($data['entityTypeConflict']);
        }
        if (\array_key_exists('genderConflict', $data)) {
            $object->setGenderConflict($data['genderConflict']);
            unset($data['genderConflict']);
        }
        if (\array_key_exists('idConflict', $data)) {
            $object->setIdConflict($data['idConflict']);
            unset($data['idConflict']);
        }
        if (\array_key_exists('phoneConflict', $data)) {
            $object->setPhoneConflict($data['phoneConflict']);
            unset($data['phoneConflict']);
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
        if ($data->isInitialized('addressConflict') && null !== $data->getAddressConflict()) {
            $dataArray['addressConflict'] = $data->getAddressConflict();
        }
        if ($data->isInitialized('citizenshipConflict') && null !== $data->getCitizenshipConflict()) {
            $dataArray['citizenshipConflict'] = $data->getCitizenshipConflict();
        }
        if ($data->isInitialized('countryConflict') && null !== $data->getCountryConflict()) {
            $dataArray['countryConflict'] = $data->getCountryConflict();
        }
        if ($data->isInitialized('dobConflict') && null !== $data->getDobConflict()) {
            $dataArray['dobConflict'] = $data->getDobConflict();
        }
        if ($data->isInitialized('entityTypeConflict') && null !== $data->getEntityTypeConflict()) {
            $dataArray['entityTypeConflict'] = $data->getEntityTypeConflict();
        }
        if ($data->isInitialized('genderConflict') && null !== $data->getGenderConflict()) {
            $dataArray['genderConflict'] = $data->getGenderConflict();
        }
        if ($data->isInitialized('idConflict') && null !== $data->getIdConflict()) {
            $dataArray['idConflict'] = $data->getIdConflict();
        }
        if ($data->isInitialized('phoneConflict') && null !== $data->getPhoneConflict()) {
            $dataArray['phoneConflict'] = $data->getPhoneConflict();
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
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class => false];
    }
}