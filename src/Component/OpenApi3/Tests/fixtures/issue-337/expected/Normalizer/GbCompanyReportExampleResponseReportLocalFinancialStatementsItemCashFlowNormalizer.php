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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('netCashFlowFromOperations', $data) && \is_int($data['netCashFlowFromOperations'])) {
            $data['netCashFlowFromOperations'] = (float) $data['netCashFlowFromOperations'];
        }
        if (\array_key_exists('netCashFlowBeforeFinancing', $data) && \is_int($data['netCashFlowBeforeFinancing'])) {
            $data['netCashFlowBeforeFinancing'] = (float) $data['netCashFlowBeforeFinancing'];
        }
        if (\array_key_exists('netCashFlowFromFinancing', $data) && \is_int($data['netCashFlowFromFinancing'])) {
            $data['netCashFlowFromFinancing'] = (float) $data['netCashFlowFromFinancing'];
        }
        if (\array_key_exists('increaseInCash', $data) && \is_int($data['increaseInCash'])) {
            $data['increaseInCash'] = (float) $data['increaseInCash'];
        }
        if (\array_key_exists('netCashFlowFromOperations', $data)) {
            $object->netCashFlowFromOperations = $data['netCashFlowFromOperations'];
            unset($data['netCashFlowFromOperations']);
        }
        if (\array_key_exists('netCashFlowBeforeFinancing', $data)) {
            $object->netCashFlowBeforeFinancing = $data['netCashFlowBeforeFinancing'];
            unset($data['netCashFlowBeforeFinancing']);
        }
        if (\array_key_exists('netCashFlowFromFinancing', $data)) {
            $object->netCashFlowFromFinancing = $data['netCashFlowFromFinancing'];
            unset($data['netCashFlowFromFinancing']);
        }
        if (\array_key_exists('increaseInCash', $data)) {
            $object->increaseInCash = $data['increaseInCash'];
            unset($data['increaseInCash']);
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
        if (array_key_exists('netCashFlowFromOperations', get_object_vars($data)) && null !== ($data->netCashFlowFromOperations ?? null)) {
            $dataArray['netCashFlowFromOperations'] = $data->netCashFlowFromOperations ?? null;
        }
        if (array_key_exists('netCashFlowBeforeFinancing', get_object_vars($data)) && null !== ($data->netCashFlowBeforeFinancing ?? null)) {
            $dataArray['netCashFlowBeforeFinancing'] = $data->netCashFlowBeforeFinancing ?? null;
        }
        if (array_key_exists('netCashFlowFromFinancing', get_object_vars($data)) && null !== ($data->netCashFlowFromFinancing ?? null)) {
            $dataArray['netCashFlowFromFinancing'] = $data->netCashFlowFromFinancing ?? null;
        }
        if (array_key_exists('increaseInCash', get_object_vars($data)) && null !== ($data->increaseInCash ?? null)) {
            $dataArray['increaseInCash'] = $data->increaseInCash ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemCashFlow::class => false];
    }
}