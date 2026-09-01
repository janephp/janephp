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
        $object = new \CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('addressConflict', $data) && \is_int($data['addressConflict'])) {
            $data['addressConflict'] = (bool) $data['addressConflict'];
        }
        if (\array_key_exists('citizenshipConflict', $data) && \is_int($data['citizenshipConflict'])) {
            $data['citizenshipConflict'] = (bool) $data['citizenshipConflict'];
        }
        if (\array_key_exists('countryConflict', $data) && \is_int($data['countryConflict'])) {
            $data['countryConflict'] = (bool) $data['countryConflict'];
        }
        if (\array_key_exists('dobConflict', $data) && \is_int($data['dobConflict'])) {
            $data['dobConflict'] = (bool) $data['dobConflict'];
        }
        if (\array_key_exists('entityTypeConflict', $data) && \is_int($data['entityTypeConflict'])) {
            $data['entityTypeConflict'] = (bool) $data['entityTypeConflict'];
        }
        if (\array_key_exists('genderConflict', $data) && \is_int($data['genderConflict'])) {
            $data['genderConflict'] = (bool) $data['genderConflict'];
        }
        if (\array_key_exists('idConflict', $data) && \is_int($data['idConflict'])) {
            $data['idConflict'] = (bool) $data['idConflict'];
        }
        if (\array_key_exists('phoneConflict', $data) && \is_int($data['phoneConflict'])) {
            $data['phoneConflict'] = (bool) $data['phoneConflict'];
        }
        if (\array_key_exists('addressConflict', $data)) {
            $object->addressConflict = $data['addressConflict'];
            unset($data['addressConflict']);
        }
        if (\array_key_exists('citizenshipConflict', $data)) {
            $object->citizenshipConflict = $data['citizenshipConflict'];
            unset($data['citizenshipConflict']);
        }
        if (\array_key_exists('countryConflict', $data)) {
            $object->countryConflict = $data['countryConflict'];
            unset($data['countryConflict']);
        }
        if (\array_key_exists('dobConflict', $data)) {
            $object->dobConflict = $data['dobConflict'];
            unset($data['dobConflict']);
        }
        if (\array_key_exists('entityTypeConflict', $data)) {
            $object->entityTypeConflict = $data['entityTypeConflict'];
            unset($data['entityTypeConflict']);
        }
        if (\array_key_exists('genderConflict', $data)) {
            $object->genderConflict = $data['genderConflict'];
            unset($data['genderConflict']);
        }
        if (\array_key_exists('idConflict', $data)) {
            $object->idConflict = $data['idConflict'];
            unset($data['idConflict']);
        }
        if (\array_key_exists('phoneConflict', $data)) {
            $object->phoneConflict = $data['phoneConflict'];
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
        if (array_key_exists('addressConflict', get_object_vars($data)) && null !== ($data->addressConflict ?? null)) {
            $dataArray['addressConflict'] = $data->addressConflict ?? null;
        }
        if (array_key_exists('citizenshipConflict', get_object_vars($data)) && null !== ($data->citizenshipConflict ?? null)) {
            $dataArray['citizenshipConflict'] = $data->citizenshipConflict ?? null;
        }
        if (array_key_exists('countryConflict', get_object_vars($data)) && null !== ($data->countryConflict ?? null)) {
            $dataArray['countryConflict'] = $data->countryConflict ?? null;
        }
        if (array_key_exists('dobConflict', get_object_vars($data)) && null !== ($data->dobConflict ?? null)) {
            $dataArray['dobConflict'] = $data->dobConflict ?? null;
        }
        if (array_key_exists('entityTypeConflict', get_object_vars($data)) && null !== ($data->entityTypeConflict ?? null)) {
            $dataArray['entityTypeConflict'] = $data->entityTypeConflict ?? null;
        }
        if (array_key_exists('genderConflict', get_object_vars($data)) && null !== ($data->genderConflict ?? null)) {
            $dataArray['genderConflict'] = $data->genderConflict ?? null;
        }
        if (array_key_exists('idConflict', get_object_vars($data)) && null !== ($data->idConflict ?? null)) {
            $dataArray['idConflict'] = $data->idConflict ?? null;
        }
        if (array_key_exists('phoneConflict', get_object_vars($data)) && null !== ($data->phoneConflict ?? null)) {
            $dataArray['phoneConflict'] = $data->phoneConflict ?? null;
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
        return [\CreditSafe\API\Model\ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts::class => false];
    }
}