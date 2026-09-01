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
class GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('totalNumberOfSharesOwned', $data) && \is_int($data['totalNumberOfSharesOwned'])) {
            $data['totalNumberOfSharesOwned'] = (float) $data['totalNumberOfSharesOwned'];
        }
        if (\array_key_exists('percentSharesHeld', $data) && \is_int($data['percentSharesHeld'])) {
            $data['percentSharesHeld'] = (float) $data['percentSharesHeld'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('shareholderType', $data)) {
            $object->shareholderType = $data['shareholderType'];
            unset($data['shareholderType']);
        }
        if (\array_key_exists('shareType', $data)) {
            $object->shareType = $data['shareType'];
            unset($data['shareType']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->currency = $data['currency'];
            unset($data['currency']);
        }
        if (\array_key_exists('totalNumberOfSharesOwned', $data)) {
            $object->totalNumberOfSharesOwned = $data['totalNumberOfSharesOwned'];
            unset($data['totalNumberOfSharesOwned']);
        }
        if (\array_key_exists('percentSharesHeld', $data)) {
            $object->percentSharesHeld = $data['percentSharesHeld'];
            unset($data['percentSharesHeld']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('shareholderType', get_object_vars($data)) && null !== ($data->shareholderType ?? null)) {
            $dataArray['shareholderType'] = $data->shareholderType ?? null;
        }
        if (array_key_exists('shareType', get_object_vars($data)) && null !== ($data->shareType ?? null)) {
            $dataArray['shareType'] = $data->shareType ?? null;
        }
        if (array_key_exists('currency', get_object_vars($data)) && null !== ($data->currency ?? null)) {
            $dataArray['currency'] = $data->currency ?? null;
        }
        if (array_key_exists('totalNumberOfSharesOwned', get_object_vars($data)) && null !== ($data->totalNumberOfSharesOwned ?? null)) {
            $dataArray['totalNumberOfSharesOwned'] = $data->totalNumberOfSharesOwned ?? null;
        }
        if (array_key_exists('percentSharesHeld', get_object_vars($data)) && null !== ($data->percentSharesHeld ?? null)) {
            $dataArray['percentSharesHeld'] = $data->percentSharesHeld ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class => false];
    }
}