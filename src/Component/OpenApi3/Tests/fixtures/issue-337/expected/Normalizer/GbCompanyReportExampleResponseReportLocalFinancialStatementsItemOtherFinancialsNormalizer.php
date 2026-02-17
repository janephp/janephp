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
class GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancialsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials();
        if (\array_key_exists('bankOverdraftAndLTL', $data) && \is_int($data['bankOverdraftAndLTL'])) {
            $data['bankOverdraftAndLTL'] = (double) $data['bankOverdraftAndLTL'];
        }
        if (\array_key_exists('workingCapital', $data) && \is_int($data['workingCapital'])) {
            $data['workingCapital'] = (double) $data['workingCapital'];
        }
        if (\array_key_exists('capitalEmployed', $data) && \is_int($data['capitalEmployed'])) {
            $data['capitalEmployed'] = (double) $data['capitalEmployed'];
        }
        if (\array_key_exists('netWorth', $data) && \is_int($data['netWorth'])) {
            $data['netWorth'] = (double) $data['netWorth'];
        }
        if (\array_key_exists('contingentLiabilities', $data) && \is_int($data['contingentLiabilities'])) {
            $data['contingentLiabilities'] = (bool) $data['contingentLiabilities'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contingentLiabilities', $data)) {
            $object->setContingentLiabilities($data['contingentLiabilities']);
            unset($data['contingentLiabilities']);
        }
        if (\array_key_exists('bankOverdraftAndLTL', $data)) {
            $object->setBankOverdraftAndLTL($data['bankOverdraftAndLTL']);
            unset($data['bankOverdraftAndLTL']);
        }
        if (\array_key_exists('workingCapital', $data)) {
            $object->setWorkingCapital($data['workingCapital']);
            unset($data['workingCapital']);
        }
        if (\array_key_exists('capitalEmployed', $data)) {
            $object->setCapitalEmployed($data['capitalEmployed']);
            unset($data['capitalEmployed']);
        }
        if (\array_key_exists('netWorth', $data)) {
            $object->setNetWorth($data['netWorth']);
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
        if ($data->isInitialized('contingentLiabilities') && null !== $data->getContingentLiabilities()) {
            $dataArray['contingentLiabilities'] = $data->getContingentLiabilities();
        }
        if ($data->isInitialized('bankOverdraftAndLTL') && null !== $data->getBankOverdraftAndLTL()) {
            $dataArray['bankOverdraftAndLTL'] = $data->getBankOverdraftAndLTL();
        }
        if ($data->isInitialized('workingCapital') && null !== $data->getWorkingCapital()) {
            $dataArray['workingCapital'] = $data->getWorkingCapital();
        }
        if ($data->isInitialized('capitalEmployed') && null !== $data->getCapitalEmployed()) {
            $dataArray['capitalEmployed'] = $data->getCapitalEmployed();
        }
        if ($data->isInitialized('netWorth') && null !== $data->getNetWorth()) {
            $dataArray['netWorth'] = $data->getNetWorth();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportLocalFinancialStatementsItemOtherFinancials::class => false];
    }
}