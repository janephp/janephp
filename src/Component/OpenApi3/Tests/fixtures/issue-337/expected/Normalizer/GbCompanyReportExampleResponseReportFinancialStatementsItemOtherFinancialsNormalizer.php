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
class GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancialsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('workingCapital', $data) && \is_int($data['workingCapital'])) {
            $data['workingCapital'] = (float) $data['workingCapital'];
        }
        if (\array_key_exists('netWorth', $data) && \is_int($data['netWorth'])) {
            $data['netWorth'] = (float) $data['netWorth'];
        }
        if (\array_key_exists('contingentLiabilities', $data)) {
            $object->contingentLiabilities = $data['contingentLiabilities'];
            unset($data['contingentLiabilities']);
        }
        if (\array_key_exists('workingCapital', $data)) {
            $object->workingCapital = $data['workingCapital'];
            unset($data['workingCapital']);
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->netWorth = $data['netWorth'];
            unset($data['netWorth']);
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
        if (array_key_exists('contingentLiabilities', get_object_vars($data)) && null !== ($data->contingentLiabilities ?? null)) {
            $dataArray['contingentLiabilities'] = $data->contingentLiabilities ?? null;
        }
        if (array_key_exists('workingCapital', get_object_vars($data)) && null !== ($data->workingCapital ?? null)) {
            $dataArray['workingCapital'] = $data->workingCapital ?? null;
        }
        if (array_key_exists('netWorth', get_object_vars($data)) && null !== ($data->netWorth ?? null)) {
            $dataArray['netWorth'] = $data->netWorth ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials::class => false];
    }
}