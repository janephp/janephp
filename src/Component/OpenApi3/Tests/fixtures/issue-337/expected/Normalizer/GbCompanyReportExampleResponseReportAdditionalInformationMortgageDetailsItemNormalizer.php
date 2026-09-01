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
class GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('mortgageType', $data)) {
            $object->mortgageType = $data['mortgageType'];
            unset($data['mortgageType']);
        }
        if (\array_key_exists('dateChargeCreated', $data)) {
            $object->dateChargeCreated = $data['dateChargeCreated'];
            unset($data['dateChargeCreated']);
        }
        if (\array_key_exists('dateChargeRegistered', $data)) {
            $object->dateChargeRegistered = $data['dateChargeRegistered'];
            unset($data['dateChargeRegistered']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('personsEntitled', $data)) {
            $object->personsEntitled = $data['personsEntitled'];
            unset($data['personsEntitled']);
        }
        if (\array_key_exists('amountSecured', $data)) {
            $object->amountSecured = $data['amountSecured'];
            unset($data['amountSecured']);
        }
        if (\array_key_exists('details', $data)) {
            $object->details = $data['details'];
            unset($data['details']);
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
        if (array_key_exists('mortgageType', get_object_vars($data)) && null !== ($data->mortgageType ?? null)) {
            $dataArray['mortgageType'] = $data->mortgageType ?? null;
        }
        if (array_key_exists('dateChargeCreated', get_object_vars($data)) && null !== ($data->dateChargeCreated ?? null)) {
            $dataArray['dateChargeCreated'] = $data->dateChargeCreated ?? null;
        }
        if (array_key_exists('dateChargeRegistered', get_object_vars($data)) && null !== ($data->dateChargeRegistered ?? null)) {
            $dataArray['dateChargeRegistered'] = $data->dateChargeRegistered ?? null;
        }
        if (array_key_exists('status', get_object_vars($data)) && null !== ($data->status ?? null)) {
            $dataArray['status'] = $data->status ?? null;
        }
        if (array_key_exists('personsEntitled', get_object_vars($data)) && null !== ($data->personsEntitled ?? null)) {
            $dataArray['personsEntitled'] = $data->personsEntitled ?? null;
        }
        if (array_key_exists('amountSecured', get_object_vars($data)) && null !== ($data->amountSecured ?? null)) {
            $dataArray['amountSecured'] = $data->amountSecured ?? null;
        }
        if (array_key_exists('details', get_object_vars($data)) && null !== ($data->details ?? null)) {
            $dataArray['details'] = $data->details ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class => false];
    }
}