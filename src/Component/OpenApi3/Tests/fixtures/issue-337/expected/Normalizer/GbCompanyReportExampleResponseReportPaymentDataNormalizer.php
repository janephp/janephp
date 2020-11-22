<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class GbCompanyReportExampleResponseReportPaymentDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbCompanyReportExampleResponseReportPaymentData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('paymentsOnFile', $data)) {
            $object->setPaymentsOnFile($data['paymentsOnFile']);
        }
        if (\array_key_exists('paymentsOnTime', $data)) {
            $object->setPaymentsOnTime($data['paymentsOnTime']);
        }
        if (\array_key_exists('paymentsPaidLate', $data)) {
            $object->setPaymentsPaidLate($data['paymentsPaidLate']);
        }
        if (\array_key_exists('paymentsSentLegal', $data)) {
            $object->setPaymentsSentLegal($data['paymentsSentLegal']);
        }
        if (\array_key_exists('paymentsStillOwingLate', $data)) {
            $object->setPaymentsStillOwingLate($data['paymentsStillOwingLate']);
        }
        if (\array_key_exists('paymentsPaid0to30Days', $data)) {
            $object->setPaymentsPaid0to30Days($data['paymentsPaid0to30Days']);
        }
        if (\array_key_exists('highestInvoiceValueOutstandingLate', $data)) {
            $object->setHighestInvoiceValueOutstandingLate($data['highestInvoiceValueOutstandingLate']);
        }
        if (\array_key_exists('paymentsPaid90DaysplusLate', $data)) {
            $object->setPaymentsPaid90DaysplusLate($data['paymentsPaid90DaysplusLate']);
        }
        if (\array_key_exists('totalBalanceStillOwingLate', $data)) {
            $object->setTotalBalanceStillOwingLate($data['totalBalanceStillOwingLate']);
        }
        if (\array_key_exists('dbt', $data)) {
            $object->setDbt($data['dbt']);
        }
        if (\array_key_exists('paymentsPaid61to90Days', $data)) {
            $object->setPaymentsPaid61to90Days($data['paymentsPaid61to90Days']);
        }
        if (\array_key_exists('totalBalanceStillOwing', $data)) {
            $object->setTotalBalanceStillOwing($data['totalBalanceStillOwing']);
        }
        if (\array_key_exists('payments31to60DaysLate', $data)) {
            $object->setPayments31to60DaysLate($data['payments31to60DaysLate']);
        }
        if (\array_key_exists('payments61to90DaysLate', $data)) {
            $object->setPayments61to90DaysLate($data['payments61to90DaysLate']);
        }
        if (\array_key_exists('highestInvoiceValueOutstanding', $data)) {
            $object->setHighestInvoiceValueOutstanding($data['highestInvoiceValueOutstanding']);
        }
        if (\array_key_exists('paymentsStillOwing', $data)) {
            $object->setPaymentsStillOwing($data['paymentsStillOwing']);
        }
        if (\array_key_exists('paymentsWithinTerms', $data)) {
            $object->setPaymentsWithinTerms($data['paymentsWithinTerms']);
        }
        if (\array_key_exists('payments0to30Dayslate', $data)) {
            $object->setPayments0to30Dayslate($data['payments0to30Dayslate']);
        }
        if (\array_key_exists('averageInvoiceValue', $data)) {
            $object->setAverageInvoiceValue($data['averageInvoiceValue']);
        }
        if (\array_key_exists('paymentsPaid31to60Days', $data)) {
            $object->setPaymentsPaid31to60Days($data['paymentsPaid31to60Days']);
        }
        if (\array_key_exists('paymentsPaid90Daysplus', $data)) {
            $object->setPaymentsPaid90Daysplus($data['paymentsPaid90Daysplus']);
        }
        if (\array_key_exists('totalInvoiceValues', $data)) {
            $object->setTotalInvoiceValues($data['totalInvoiceValues']);
        }
        if (\array_key_exists('paymentTrend', $data)) {
            $object->setPaymentTrend($data['paymentTrend']);
        }
        if (\array_key_exists('industryDBT', $data)) {
            $object->setIndustryDBT($data['industryDBT']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPaymentsOnFile()) {
            $data['paymentsOnFile'] = $object->getPaymentsOnFile();
        }
        if (null !== $object->getPaymentsOnTime()) {
            $data['paymentsOnTime'] = $object->getPaymentsOnTime();
        }
        if (null !== $object->getPaymentsPaidLate()) {
            $data['paymentsPaidLate'] = $object->getPaymentsPaidLate();
        }
        if (null !== $object->getPaymentsSentLegal()) {
            $data['paymentsSentLegal'] = $object->getPaymentsSentLegal();
        }
        if (null !== $object->getPaymentsStillOwingLate()) {
            $data['paymentsStillOwingLate'] = $object->getPaymentsStillOwingLate();
        }
        if (null !== $object->getPaymentsPaid0to30Days()) {
            $data['paymentsPaid0to30Days'] = $object->getPaymentsPaid0to30Days();
        }
        if (null !== $object->getHighestInvoiceValueOutstandingLate()) {
            $data['highestInvoiceValueOutstandingLate'] = $object->getHighestInvoiceValueOutstandingLate();
        }
        if (null !== $object->getPaymentsPaid90DaysplusLate()) {
            $data['paymentsPaid90DaysplusLate'] = $object->getPaymentsPaid90DaysplusLate();
        }
        if (null !== $object->getTotalBalanceStillOwingLate()) {
            $data['totalBalanceStillOwingLate'] = $object->getTotalBalanceStillOwingLate();
        }
        if (null !== $object->getDbt()) {
            $data['dbt'] = $object->getDbt();
        }
        if (null !== $object->getPaymentsPaid61to90Days()) {
            $data['paymentsPaid61to90Days'] = $object->getPaymentsPaid61to90Days();
        }
        if (null !== $object->getTotalBalanceStillOwing()) {
            $data['totalBalanceStillOwing'] = $object->getTotalBalanceStillOwing();
        }
        if (null !== $object->getPayments31to60DaysLate()) {
            $data['payments31to60DaysLate'] = $object->getPayments31to60DaysLate();
        }
        if (null !== $object->getPayments61to90DaysLate()) {
            $data['payments61to90DaysLate'] = $object->getPayments61to90DaysLate();
        }
        if (null !== $object->getHighestInvoiceValueOutstanding()) {
            $data['highestInvoiceValueOutstanding'] = $object->getHighestInvoiceValueOutstanding();
        }
        if (null !== $object->getPaymentsStillOwing()) {
            $data['paymentsStillOwing'] = $object->getPaymentsStillOwing();
        }
        if (null !== $object->getPaymentsWithinTerms()) {
            $data['paymentsWithinTerms'] = $object->getPaymentsWithinTerms();
        }
        if (null !== $object->getPayments0to30Dayslate()) {
            $data['payments0to30Dayslate'] = $object->getPayments0to30Dayslate();
        }
        if (null !== $object->getAverageInvoiceValue()) {
            $data['averageInvoiceValue'] = $object->getAverageInvoiceValue();
        }
        if (null !== $object->getPaymentsPaid31to60Days()) {
            $data['paymentsPaid31to60Days'] = $object->getPaymentsPaid31to60Days();
        }
        if (null !== $object->getPaymentsPaid90Daysplus()) {
            $data['paymentsPaid90Daysplus'] = $object->getPaymentsPaid90Daysplus();
        }
        if (null !== $object->getTotalInvoiceValues()) {
            $data['totalInvoiceValues'] = $object->getTotalInvoiceValues();
        }
        if (null !== $object->getPaymentTrend()) {
            $data['paymentTrend'] = $object->getPaymentTrend();
        }
        if (null !== $object->getIndustryDBT()) {
            $data['industryDBT'] = $object->getIndustryDBT();
        }
        return $data;
    }
}