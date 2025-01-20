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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem();
        if (\array_key_exists('totalNumberOfSharesOwned', $data) && \is_int($data['totalNumberOfSharesOwned'])) {
            $data['totalNumberOfSharesOwned'] = (double) $data['totalNumberOfSharesOwned'];
        }
        if (\array_key_exists('percentSharesHeld', $data) && \is_int($data['percentSharesHeld'])) {
            $data['percentSharesHeld'] = (double) $data['percentSharesHeld'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('shareholderType', $data)) {
            $object->setShareholderType($data['shareholderType']);
            unset($data['shareholderType']);
        }
        if (\array_key_exists('shareType', $data)) {
            $object->setShareType($data['shareType']);
            unset($data['shareType']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        if (\array_key_exists('totalNumberOfSharesOwned', $data)) {
            $object->setTotalNumberOfSharesOwned($data['totalNumberOfSharesOwned']);
            unset($data['totalNumberOfSharesOwned']);
        }
        if (\array_key_exists('percentSharesHeld', $data)) {
            $object->setPercentSharesHeld($data['percentSharesHeld']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('shareholderType') && null !== $data->getShareholderType()) {
            $dataArray['shareholderType'] = $data->getShareholderType();
        }
        if ($data->isInitialized('shareType') && null !== $data->getShareType()) {
            $dataArray['shareType'] = $data->getShareType();
        }
        if ($data->isInitialized('currency') && null !== $data->getCurrency()) {
            $dataArray['currency'] = $data->getCurrency();
        }
        if ($data->isInitialized('totalNumberOfSharesOwned') && null !== $data->getTotalNumberOfSharesOwned()) {
            $dataArray['totalNumberOfSharesOwned'] = $data->getTotalNumberOfSharesOwned();
        }
        if ($data->isInitialized('percentSharesHeld') && null !== $data->getPercentSharesHeld()) {
            $dataArray['percentSharesHeld'] = $data->getPercentSharesHeld();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class => false];
    }
}