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
class GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('statementDate', $data)) {
            $object->statementDate = $data['statementDate'];
            unset($data['statementDate']);
        }
        if (\array_key_exists('registrationNumber', $data)) {
            $object->registrationNumber = $data['registrationNumber'];
            unset($data['registrationNumber']);
        }
        if (\array_key_exists('companyName', $data)) {
            $object->companyName = $data['companyName'];
            unset($data['companyName']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->amount = $this->denormalizer->denormalize($data['amount'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItemAmount::class, 'json', $context);
            unset($data['amount']);
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
        if (array_key_exists('statementDate', get_object_vars($data)) && null !== ($data->statementDate ?? null)) {
            $dataArray['statementDate'] = $data->statementDate ?? null;
        }
        if (array_key_exists('registrationNumber', get_object_vars($data)) && null !== ($data->registrationNumber ?? null)) {
            $dataArray['registrationNumber'] = $data->registrationNumber ?? null;
        }
        if (array_key_exists('companyName', get_object_vars($data)) && null !== ($data->companyName ?? null)) {
            $dataArray['companyName'] = $data->companyName ?? null;
        }
        if (array_key_exists('amount', get_object_vars($data)) && null !== ($data->amount ?? null)) {
            $dataArray['amount'] = ($data->amount ?? null) === null ? null : new \CreditSafe\API\Runtime\JsonObject($this->normalizer->normalize($data->amount ?? null, 'json', $context));
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportAdditionalInformationBadDebtDetailsItem::class => false];
    }
}