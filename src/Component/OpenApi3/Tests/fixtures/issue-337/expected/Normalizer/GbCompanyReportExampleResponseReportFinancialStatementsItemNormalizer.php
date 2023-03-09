<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportFinancialStatementsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItem';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportFinancialStatementsItem();
        if (\array_key_exists('numberOfWeeks', $data) && \is_int($data['numberOfWeeks'])) {
            $data['numberOfWeeks'] = (double) $data['numberOfWeeks'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('yearEndDate', $data)) {
            $object->setYearEndDate($data['yearEndDate']);
            unset($data['yearEndDate']);
        }
        if (\array_key_exists('numberOfWeeks', $data)) {
            $object->setNumberOfWeeks($data['numberOfWeeks']);
            unset($data['numberOfWeeks']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
            unset($data['currency']);
        }
        if (\array_key_exists('consolidatedAccounts', $data)) {
            $object->setConsolidatedAccounts($data['consolidatedAccounts']);
            unset($data['consolidatedAccounts']);
        }
        if (\array_key_exists('profitAndLoss', $data)) {
            $object->setProfitAndLoss($this->denormalizer->denormalize($data['profitAndLoss'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemProfitAndLoss', 'json', $context));
            unset($data['profitAndLoss']);
        }
        if (\array_key_exists('balanceSheet', $data)) {
            $object->setBalanceSheet($this->denormalizer->denormalize($data['balanceSheet'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemBalanceSheet', 'json', $context));
            unset($data['balanceSheet']);
        }
        if (\array_key_exists('otherFinancials', $data)) {
            $object->setOtherFinancials($this->denormalizer->denormalize($data['otherFinancials'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemOtherFinancials', 'json', $context));
            unset($data['otherFinancials']);
        }
        if (\array_key_exists('ratios', $data)) {
            $object->setRatios($this->denormalizer->denormalize($data['ratios'], 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportFinancialStatementsItemRatios', 'json', $context));
            unset($data['ratios']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('yearEndDate') && null !== $object->getYearEndDate()) {
            $data['yearEndDate'] = $object->getYearEndDate();
        }
        if ($object->isInitialized('numberOfWeeks') && null !== $object->getNumberOfWeeks()) {
            $data['numberOfWeeks'] = $object->getNumberOfWeeks();
        }
        if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if ($object->isInitialized('consolidatedAccounts') && null !== $object->getConsolidatedAccounts()) {
            $data['consolidatedAccounts'] = $object->getConsolidatedAccounts();
        }
        if ($object->isInitialized('profitAndLoss') && null !== $object->getProfitAndLoss()) {
            $data['profitAndLoss'] = $this->normalizer->normalize($object->getProfitAndLoss(), 'json', $context);
        }
        if ($object->isInitialized('balanceSheet') && null !== $object->getBalanceSheet()) {
            $data['balanceSheet'] = $this->normalizer->normalize($object->getBalanceSheet(), 'json', $context);
        }
        if ($object->isInitialized('otherFinancials') && null !== $object->getOtherFinancials()) {
            $data['otherFinancials'] = $this->normalizer->normalize($object->getOtherFinancials(), 'json', $context);
        }
        if ($object->isInitialized('ratios') && null !== $object->getRatios()) {
            $data['ratios'] = $this->normalizer->normalize($object->getRatios(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}