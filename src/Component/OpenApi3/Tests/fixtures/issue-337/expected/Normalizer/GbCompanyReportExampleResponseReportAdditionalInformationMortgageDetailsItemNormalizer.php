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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mortgageType', $data)) {
            $object->setMortgageType($data['mortgageType']);
            unset($data['mortgageType']);
        }
        if (\array_key_exists('dateChargeCreated', $data)) {
            $object->setDateChargeCreated($data['dateChargeCreated']);
            unset($data['dateChargeCreated']);
        }
        if (\array_key_exists('dateChargeRegistered', $data)) {
            $object->setDateChargeRegistered($data['dateChargeRegistered']);
            unset($data['dateChargeRegistered']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('personsEntitled', $data)) {
            $object->setPersonsEntitled($data['personsEntitled']);
            unset($data['personsEntitled']);
        }
        if (\array_key_exists('amountSecured', $data)) {
            $object->setAmountSecured($data['amountSecured']);
            unset($data['amountSecured']);
        }
        if (\array_key_exists('details', $data)) {
            $object->setDetails($data['details']);
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
        if ($data->isInitialized('mortgageType') && null !== $data->getMortgageType()) {
            $dataArray['mortgageType'] = $data->getMortgageType();
        }
        if ($data->isInitialized('dateChargeCreated') && null !== $data->getDateChargeCreated()) {
            $dataArray['dateChargeCreated'] = $data->getDateChargeCreated();
        }
        if ($data->isInitialized('dateChargeRegistered') && null !== $data->getDateChargeRegistered()) {
            $dataArray['dateChargeRegistered'] = $data->getDateChargeRegistered();
        }
        if ($data->isInitialized('status') && null !== $data->getStatus()) {
            $dataArray['status'] = $data->getStatus();
        }
        if ($data->isInitialized('personsEntitled') && null !== $data->getPersonsEntitled()) {
            $dataArray['personsEntitled'] = $data->getPersonsEntitled();
        }
        if ($data->isInitialized('amountSecured') && null !== $data->getAmountSecured()) {
            $dataArray['amountSecured'] = $data->getAmountSecured();
        }
        if ($data->isInitialized('details') && null !== $data->getDetails()) {
            $dataArray['details'] = $data->getDetails();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationMortgageDetailsItem::class => false];
    }
}