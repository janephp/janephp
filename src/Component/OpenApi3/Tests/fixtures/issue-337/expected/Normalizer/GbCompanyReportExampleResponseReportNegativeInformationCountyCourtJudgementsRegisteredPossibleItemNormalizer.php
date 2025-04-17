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
class GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem();
        if (\array_key_exists('ccjAmount', $data) && \is_int($data['ccjAmount'])) {
            $data['ccjAmount'] = (double) $data['ccjAmount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ccjDate', $data)) {
            $object->setCcjDate($data['ccjDate']);
            unset($data['ccjDate']);
        }
        if (\array_key_exists('court', $data)) {
            $object->setCourt($data['court']);
            unset($data['court']);
        }
        if (\array_key_exists('ccjAmount', $data)) {
            $object->setCcjAmount($data['ccjAmount']);
            unset($data['ccjAmount']);
        }
        if (\array_key_exists('caseNumber', $data)) {
            $object->setCaseNumber($data['caseNumber']);
            unset($data['caseNumber']);
        }
        if (\array_key_exists('ccjStatus', $data)) {
            $object->setCcjStatus($data['ccjStatus']);
            unset($data['ccjStatus']);
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
        if ($data->isInitialized('ccjDate') && null !== $data->getCcjDate()) {
            $dataArray['ccjDate'] = $data->getCcjDate();
        }
        if ($data->isInitialized('court') && null !== $data->getCourt()) {
            $dataArray['court'] = $data->getCourt();
        }
        if ($data->isInitialized('ccjAmount') && null !== $data->getCcjAmount()) {
            $dataArray['ccjAmount'] = $data->getCcjAmount();
        }
        if ($data->isInitialized('caseNumber') && null !== $data->getCaseNumber()) {
            $dataArray['caseNumber'] = $data->getCaseNumber();
        }
        if ($data->isInitialized('ccjStatus') && null !== $data->getCcjStatus()) {
            $dataArray['ccjStatus'] = $data->getCcjStatus();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportNegativeInformationCountyCourtJudgementsRegisteredPossibleItem::class => false];
    }
}