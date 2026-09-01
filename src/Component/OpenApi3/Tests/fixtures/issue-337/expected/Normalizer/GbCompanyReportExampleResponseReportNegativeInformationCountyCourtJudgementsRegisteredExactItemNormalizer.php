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
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ccjAmount', $data) && \is_int($data['ccjAmount'])) {
            $data['ccjAmount'] = (float) $data['ccjAmount'];
        }
        if (\array_key_exists('ccjDate', $data)) {
            $object->ccjDate = $data['ccjDate'];
            unset($data['ccjDate']);
        }
        if (\array_key_exists('court', $data)) {
            $object->court = $data['court'];
            unset($data['court']);
        }
        if (\array_key_exists('ccjAmount', $data)) {
            $object->ccjAmount = $data['ccjAmount'];
            unset($data['ccjAmount']);
        }
        if (\array_key_exists('caseNumber', $data)) {
            $object->caseNumber = $data['caseNumber'];
            unset($data['caseNumber']);
        }
        if (\array_key_exists('ccjStatus', $data)) {
            $object->ccjStatus = $data['ccjStatus'];
            unset($data['ccjStatus']);
        }
        if (\array_key_exists('incomingRecordDetails', $data)) {
            $object->incomingRecordDetails = $data['incomingRecordDetails'];
            unset($data['incomingRecordDetails']);
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
        if (array_key_exists('ccjDate', get_object_vars($data)) && null !== ($data->ccjDate ?? null)) {
            $dataArray['ccjDate'] = $data->ccjDate ?? null;
        }
        if (array_key_exists('court', get_object_vars($data)) && null !== ($data->court ?? null)) {
            $dataArray['court'] = $data->court ?? null;
        }
        if (array_key_exists('ccjAmount', get_object_vars($data)) && null !== ($data->ccjAmount ?? null)) {
            $dataArray['ccjAmount'] = $data->ccjAmount ?? null;
        }
        if (array_key_exists('caseNumber', get_object_vars($data)) && null !== ($data->caseNumber ?? null)) {
            $dataArray['caseNumber'] = $data->caseNumber ?? null;
        }
        if (array_key_exists('ccjStatus', get_object_vars($data)) && null !== ($data->ccjStatus ?? null)) {
            $dataArray['ccjStatus'] = $data->ccjStatus ?? null;
        }
        if (array_key_exists('incomingRecordDetails', get_object_vars($data)) && null !== ($data->incomingRecordDetails ?? null)) {
            $dataArray['incomingRecordDetails'] = $data->incomingRecordDetails ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredExactItem::class => false];
    }
}