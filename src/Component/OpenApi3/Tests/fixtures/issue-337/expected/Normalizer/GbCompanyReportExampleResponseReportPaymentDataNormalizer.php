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
class GbCompanyReportExampleResponseReportPaymentDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData();
        if (\array_key_exists('paymentsOnFile', $data) && \is_int($data['paymentsOnFile'])) {
            $data['paymentsOnFile'] = (double) $data['paymentsOnFile'];
        }
        if (\array_key_exists('paymentsOnTime', $data) && \is_int($data['paymentsOnTime'])) {
            $data['paymentsOnTime'] = (double) $data['paymentsOnTime'];
        }
        if (\array_key_exists('paymentsPaidLate', $data) && \is_int($data['paymentsPaidLate'])) {
            $data['paymentsPaidLate'] = (double) $data['paymentsPaidLate'];
        }
        if (\array_key_exists('paymentsSentLegal', $data) && \is_int($data['paymentsSentLegal'])) {
            $data['paymentsSentLegal'] = (double) $data['paymentsSentLegal'];
        }
        if (\array_key_exists('paymentsStillOwingLate', $data) && \is_int($data['paymentsStillOwingLate'])) {
            $data['paymentsStillOwingLate'] = (double) $data['paymentsStillOwingLate'];
        }
        if (\array_key_exists('paymentsPaid0to30Days', $data) && \is_int($data['paymentsPaid0to30Days'])) {
            $data['paymentsPaid0to30Days'] = (double) $data['paymentsPaid0to30Days'];
        }
        if (\array_key_exists('highestInvoiceValueOutstandingLate', $data) && \is_int($data['highestInvoiceValueOutstandingLate'])) {
            $data['highestInvoiceValueOutstandingLate'] = (double) $data['highestInvoiceValueOutstandingLate'];
        }
        if (\array_key_exists('paymentsPaid90DaysplusLate', $data) && \is_int($data['paymentsPaid90DaysplusLate'])) {
            $data['paymentsPaid90DaysplusLate'] = (double) $data['paymentsPaid90DaysplusLate'];
        }
        if (\array_key_exists('totalBalanceStillOwingLate', $data) && \is_int($data['totalBalanceStillOwingLate'])) {
            $data['totalBalanceStillOwingLate'] = (double) $data['totalBalanceStillOwingLate'];
        }
        if (\array_key_exists('dbt', $data) && \is_int($data['dbt'])) {
            $data['dbt'] = (double) $data['dbt'];
        }
        if (\array_key_exists('paymentsPaid61to90Days', $data) && \is_int($data['paymentsPaid61to90Days'])) {
            $data['paymentsPaid61to90Days'] = (double) $data['paymentsPaid61to90Days'];
        }
        if (\array_key_exists('totalBalanceStillOwing', $data) && \is_int($data['totalBalanceStillOwing'])) {
            $data['totalBalanceStillOwing'] = (double) $data['totalBalanceStillOwing'];
        }
        if (\array_key_exists('payments31to60DaysLate', $data) && \is_int($data['payments31to60DaysLate'])) {
            $data['payments31to60DaysLate'] = (double) $data['payments31to60DaysLate'];
        }
        if (\array_key_exists('payments61to90DaysLate', $data) && \is_int($data['payments61to90DaysLate'])) {
            $data['payments61to90DaysLate'] = (double) $data['payments61to90DaysLate'];
        }
        if (\array_key_exists('highestInvoiceValueOutstanding', $data) && \is_int($data['highestInvoiceValueOutstanding'])) {
            $data['highestInvoiceValueOutstanding'] = (double) $data['highestInvoiceValueOutstanding'];
        }
        if (\array_key_exists('paymentsStillOwing', $data) && \is_int($data['paymentsStillOwing'])) {
            $data['paymentsStillOwing'] = (double) $data['paymentsStillOwing'];
        }
        if (\array_key_exists('paymentsWithinTerms', $data) && \is_int($data['paymentsWithinTerms'])) {
            $data['paymentsWithinTerms'] = (double) $data['paymentsWithinTerms'];
        }
        if (\array_key_exists('payments0to30Dayslate', $data) && \is_int($data['payments0to30Dayslate'])) {
            $data['payments0to30Dayslate'] = (double) $data['payments0to30Dayslate'];
        }
        if (\array_key_exists('averageInvoiceValue', $data) && \is_int($data['averageInvoiceValue'])) {
            $data['averageInvoiceValue'] = (double) $data['averageInvoiceValue'];
        }
        if (\array_key_exists('paymentsPaid31to60Days', $data) && \is_int($data['paymentsPaid31to60Days'])) {
            $data['paymentsPaid31to60Days'] = (double) $data['paymentsPaid31to60Days'];
        }
        if (\array_key_exists('paymentsPaid90Daysplus', $data) && \is_int($data['paymentsPaid90Daysplus'])) {
            $data['paymentsPaid90Daysplus'] = (double) $data['paymentsPaid90Daysplus'];
        }
        if (\array_key_exists('totalInvoiceValues', $data) && \is_int($data['totalInvoiceValues'])) {
            $data['totalInvoiceValues'] = (double) $data['totalInvoiceValues'];
        }
        if (\array_key_exists('industryDBT', $data) && \is_int($data['industryDBT'])) {
            $data['industryDBT'] = (double) $data['industryDBT'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('paymentsOnFile', $data)) {
            $object->setPaymentsOnFile($data['paymentsOnFile']);
            unset($data['paymentsOnFile']);
        }
        if (\array_key_exists('paymentsOnTime', $data)) {
            $object->setPaymentsOnTime($data['paymentsOnTime']);
            unset($data['paymentsOnTime']);
        }
        if (\array_key_exists('paymentsPaidLate', $data)) {
            $object->setPaymentsPaidLate($data['paymentsPaidLate']);
            unset($data['paymentsPaidLate']);
        }
        if (\array_key_exists('paymentsSentLegal', $data)) {
            $object->setPaymentsSentLegal($data['paymentsSentLegal']);
            unset($data['paymentsSentLegal']);
        }
        if (\array_key_exists('paymentsStillOwingLate', $data)) {
            $object->setPaymentsStillOwingLate($data['paymentsStillOwingLate']);
            unset($data['paymentsStillOwingLate']);
        }
        if (\array_key_exists('paymentsPaid0to30Days', $data)) {
            $object->setPaymentsPaid0to30Days($data['paymentsPaid0to30Days']);
            unset($data['paymentsPaid0to30Days']);
        }
        if (\array_key_exists('highestInvoiceValueOutstandingLate', $data)) {
            $object->setHighestInvoiceValueOutstandingLate($data['highestInvoiceValueOutstandingLate']);
            unset($data['highestInvoiceValueOutstandingLate']);
        }
        if (\array_key_exists('paymentsPaid90DaysplusLate', $data)) {
            $object->setPaymentsPaid90DaysplusLate($data['paymentsPaid90DaysplusLate']);
            unset($data['paymentsPaid90DaysplusLate']);
        }
        if (\array_key_exists('totalBalanceStillOwingLate', $data)) {
            $object->setTotalBalanceStillOwingLate($data['totalBalanceStillOwingLate']);
            unset($data['totalBalanceStillOwingLate']);
        }
        if (\array_key_exists('dbt', $data)) {
            $object->setDbt($data['dbt']);
            unset($data['dbt']);
        }
        if (\array_key_exists('paymentsPaid61to90Days', $data)) {
            $object->setPaymentsPaid61to90Days($data['paymentsPaid61to90Days']);
            unset($data['paymentsPaid61to90Days']);
        }
        if (\array_key_exists('totalBalanceStillOwing', $data)) {
            $object->setTotalBalanceStillOwing($data['totalBalanceStillOwing']);
            unset($data['totalBalanceStillOwing']);
        }
        if (\array_key_exists('payments31to60DaysLate', $data)) {
            $object->setPayments31to60DaysLate($data['payments31to60DaysLate']);
            unset($data['payments31to60DaysLate']);
        }
        if (\array_key_exists('payments61to90DaysLate', $data)) {
            $object->setPayments61to90DaysLate($data['payments61to90DaysLate']);
            unset($data['payments61to90DaysLate']);
        }
        if (\array_key_exists('highestInvoiceValueOutstanding', $data)) {
            $object->setHighestInvoiceValueOutstanding($data['highestInvoiceValueOutstanding']);
            unset($data['highestInvoiceValueOutstanding']);
        }
        if (\array_key_exists('paymentsStillOwing', $data)) {
            $object->setPaymentsStillOwing($data['paymentsStillOwing']);
            unset($data['paymentsStillOwing']);
        }
        if (\array_key_exists('paymentsWithinTerms', $data)) {
            $object->setPaymentsWithinTerms($data['paymentsWithinTerms']);
            unset($data['paymentsWithinTerms']);
        }
        if (\array_key_exists('payments0to30Dayslate', $data)) {
            $object->setPayments0to30Dayslate($data['payments0to30Dayslate']);
            unset($data['payments0to30Dayslate']);
        }
        if (\array_key_exists('averageInvoiceValue', $data)) {
            $object->setAverageInvoiceValue($data['averageInvoiceValue']);
            unset($data['averageInvoiceValue']);
        }
        if (\array_key_exists('paymentsPaid31to60Days', $data)) {
            $object->setPaymentsPaid31to60Days($data['paymentsPaid31to60Days']);
            unset($data['paymentsPaid31to60Days']);
        }
        if (\array_key_exists('paymentsPaid90Daysplus', $data)) {
            $object->setPaymentsPaid90Daysplus($data['paymentsPaid90Daysplus']);
            unset($data['paymentsPaid90Daysplus']);
        }
        if (\array_key_exists('totalInvoiceValues', $data)) {
            $object->setTotalInvoiceValues($data['totalInvoiceValues']);
            unset($data['totalInvoiceValues']);
        }
        if (\array_key_exists('paymentTrend', $data)) {
            $object->setPaymentTrend($data['paymentTrend']);
            unset($data['paymentTrend']);
        }
        if (\array_key_exists('industryDBT', $data)) {
            $object->setIndustryDBT($data['industryDBT']);
            unset($data['industryDBT']);
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
        if ($data->isInitialized('paymentsOnFile') && null !== $data->getPaymentsOnFile()) {
            $dataArray['paymentsOnFile'] = $data->getPaymentsOnFile();
        }
        if ($data->isInitialized('paymentsOnTime') && null !== $data->getPaymentsOnTime()) {
            $dataArray['paymentsOnTime'] = $data->getPaymentsOnTime();
        }
        if ($data->isInitialized('paymentsPaidLate') && null !== $data->getPaymentsPaidLate()) {
            $dataArray['paymentsPaidLate'] = $data->getPaymentsPaidLate();
        }
        if ($data->isInitialized('paymentsSentLegal') && null !== $data->getPaymentsSentLegal()) {
            $dataArray['paymentsSentLegal'] = $data->getPaymentsSentLegal();
        }
        if ($data->isInitialized('paymentsStillOwingLate') && null !== $data->getPaymentsStillOwingLate()) {
            $dataArray['paymentsStillOwingLate'] = $data->getPaymentsStillOwingLate();
        }
        if ($data->isInitialized('paymentsPaid0to30Days') && null !== $data->getPaymentsPaid0to30Days()) {
            $dataArray['paymentsPaid0to30Days'] = $data->getPaymentsPaid0to30Days();
        }
        if ($data->isInitialized('highestInvoiceValueOutstandingLate') && null !== $data->getHighestInvoiceValueOutstandingLate()) {
            $dataArray['highestInvoiceValueOutstandingLate'] = $data->getHighestInvoiceValueOutstandingLate();
        }
        if ($data->isInitialized('paymentsPaid90DaysplusLate') && null !== $data->getPaymentsPaid90DaysplusLate()) {
            $dataArray['paymentsPaid90DaysplusLate'] = $data->getPaymentsPaid90DaysplusLate();
        }
        if ($data->isInitialized('totalBalanceStillOwingLate') && null !== $data->getTotalBalanceStillOwingLate()) {
            $dataArray['totalBalanceStillOwingLate'] = $data->getTotalBalanceStillOwingLate();
        }
        if ($data->isInitialized('dbt') && null !== $data->getDbt()) {
            $dataArray['dbt'] = $data->getDbt();
        }
        if ($data->isInitialized('paymentsPaid61to90Days') && null !== $data->getPaymentsPaid61to90Days()) {
            $dataArray['paymentsPaid61to90Days'] = $data->getPaymentsPaid61to90Days();
        }
        if ($data->isInitialized('totalBalanceStillOwing') && null !== $data->getTotalBalanceStillOwing()) {
            $dataArray['totalBalanceStillOwing'] = $data->getTotalBalanceStillOwing();
        }
        if ($data->isInitialized('payments31to60DaysLate') && null !== $data->getPayments31to60DaysLate()) {
            $dataArray['payments31to60DaysLate'] = $data->getPayments31to60DaysLate();
        }
        if ($data->isInitialized('payments61to90DaysLate') && null !== $data->getPayments61to90DaysLate()) {
            $dataArray['payments61to90DaysLate'] = $data->getPayments61to90DaysLate();
        }
        if ($data->isInitialized('highestInvoiceValueOutstanding') && null !== $data->getHighestInvoiceValueOutstanding()) {
            $dataArray['highestInvoiceValueOutstanding'] = $data->getHighestInvoiceValueOutstanding();
        }
        if ($data->isInitialized('paymentsStillOwing') && null !== $data->getPaymentsStillOwing()) {
            $dataArray['paymentsStillOwing'] = $data->getPaymentsStillOwing();
        }
        if ($data->isInitialized('paymentsWithinTerms') && null !== $data->getPaymentsWithinTerms()) {
            $dataArray['paymentsWithinTerms'] = $data->getPaymentsWithinTerms();
        }
        if ($data->isInitialized('payments0to30Dayslate') && null !== $data->getPayments0to30Dayslate()) {
            $dataArray['payments0to30Dayslate'] = $data->getPayments0to30Dayslate();
        }
        if ($data->isInitialized('averageInvoiceValue') && null !== $data->getAverageInvoiceValue()) {
            $dataArray['averageInvoiceValue'] = $data->getAverageInvoiceValue();
        }
        if ($data->isInitialized('paymentsPaid31to60Days') && null !== $data->getPaymentsPaid31to60Days()) {
            $dataArray['paymentsPaid31to60Days'] = $data->getPaymentsPaid31to60Days();
        }
        if ($data->isInitialized('paymentsPaid90Daysplus') && null !== $data->getPaymentsPaid90Daysplus()) {
            $dataArray['paymentsPaid90Daysplus'] = $data->getPaymentsPaid90Daysplus();
        }
        if ($data->isInitialized('totalInvoiceValues') && null !== $data->getTotalInvoiceValues()) {
            $dataArray['totalInvoiceValues'] = $data->getTotalInvoiceValues();
        }
        if ($data->isInitialized('paymentTrend') && null !== $data->getPaymentTrend()) {
            $dataArray['paymentTrend'] = $data->getPaymentTrend();
        }
        if ($data->isInitialized('industryDBT') && null !== $data->getIndustryDBT()) {
            $dataArray['industryDBT'] = $data->getIndustryDBT();
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class => false];
    }
}