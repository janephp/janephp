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
class GbCompanyReportExampleResponseReportExtendedGroupStructureItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('level', $data) && \is_int($data['level'])) {
            $data['level'] = (float) $data['level'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('country', $data)) {
            $object->country = $data['country'];
            unset($data['country']);
        }
        if (\array_key_exists('safeNumber', $data)) {
            $object->safeNumber = $data['safeNumber'];
            unset($data['safeNumber']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->companyName = $data['companyName'];
            unset($data['companyName']);
        }
        if (\array_key_exists('registeredNumber', $data)) {
            $object->registeredNumber = $data['registeredNumber'];
            unset($data['registeredNumber']);
        }
        if (\array_key_exists('latestAnnualAccounts', $data)) {
            $object->latestAnnualAccounts = $data['latestAnnualAccounts'];
            unset($data['latestAnnualAccounts']);
        }
        if (\array_key_exists('level', $data)) {
            $object->level = $data['level'];
            unset($data['level']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
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
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('country', get_object_vars($data)) && null !== ($data->country ?? null)) {
            $dataArray['country'] = $data->country ?? null;
        }
        if (array_key_exists('safeNumber', get_object_vars($data)) && null !== ($data->safeNumber ?? null)) {
            $dataArray['safeNumber'] = $data->safeNumber ?? null;
        }
        if (array_key_exists('companyName', get_object_vars($data)) && null !== ($data->companyName ?? null)) {
            $dataArray['companyName'] = $data->companyName ?? null;
        }
        if (array_key_exists('registeredNumber', get_object_vars($data)) && null !== ($data->registeredNumber ?? null)) {
            $dataArray['registeredNumber'] = $data->registeredNumber ?? null;
        }
        if (array_key_exists('latestAnnualAccounts', get_object_vars($data)) && null !== ($data->latestAnnualAccounts ?? null)) {
            $dataArray['latestAnnualAccounts'] = $data->latestAnnualAccounts ?? null;
        }
        if (array_key_exists('level', get_object_vars($data)) && null !== ($data->level ?? null)) {
            $dataArray['level'] = $data->level ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportExtendedGroupStructureItem::class => false];
    }
}