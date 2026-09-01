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
        $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('paymentsOnFile', $data) && \is_int($data['paymentsOnFile'])) {
            $data['paymentsOnFile'] = (float) $data['paymentsOnFile'];
        }
        if (\array_key_exists('paymentsOnTime', $data) && \is_int($data['paymentsOnTime'])) {
            $data['paymentsOnTime'] = (float) $data['paymentsOnTime'];
        }
        if (\array_key_exists('paymentsPaidLate', $data) && \is_int($data['paymentsPaidLate'])) {
            $data['paymentsPaidLate'] = (float) $data['paymentsPaidLate'];
        }
        if (\array_key_exists('paymentsSentLegal', $data) && \is_int($data['paymentsSentLegal'])) {
            $data['paymentsSentLegal'] = (float) $data['paymentsSentLegal'];
        }
        if (\array_key_exists('paymentsStillOwingLate', $data) && \is_int($data['paymentsStillOwingLate'])) {
            $data['paymentsStillOwingLate'] = (float) $data['paymentsStillOwingLate'];
        }
        if (\array_key_exists('paymentsPaid0to30Days', $data) && \is_int($data['paymentsPaid0to30Days'])) {
            $data['paymentsPaid0to30Days'] = (float) $data['paymentsPaid0to30Days'];
        }
        if (\array_key_exists('highestInvoiceValueOutstandingLate', $data) && \is_int($data['highestInvoiceValueOutstandingLate'])) {
            $data['highestInvoiceValueOutstandingLate'] = (float) $data['highestInvoiceValueOutstandingLate'];
        }
        if (\array_key_exists('paymentsPaid90DaysplusLate', $data) && \is_int($data['paymentsPaid90DaysplusLate'])) {
            $data['paymentsPaid90DaysplusLate'] = (float) $data['paymentsPaid90DaysplusLate'];
        }
        if (\array_key_exists('totalBalanceStillOwingLate', $data) && \is_int($data['totalBalanceStillOwingLate'])) {
            $data['totalBalanceStillOwingLate'] = (float) $data['totalBalanceStillOwingLate'];
        }
        if (\array_key_exists('dbt', $data) && \is_int($data['dbt'])) {
            $data['dbt'] = (float) $data['dbt'];
        }
        if (\array_key_exists('paymentsPaid61to90Days', $data) && \is_int($data['paymentsPaid61to90Days'])) {
            $data['paymentsPaid61to90Days'] = (float) $data['paymentsPaid61to90Days'];
        }
        if (\array_key_exists('totalBalanceStillOwing', $data) && \is_int($data['totalBalanceStillOwing'])) {
            $data['totalBalanceStillOwing'] = (float) $data['totalBalanceStillOwing'];
        }
        if (\array_key_exists('payments31to60DaysLate', $data) && \is_int($data['payments31to60DaysLate'])) {
            $data['payments31to60DaysLate'] = (float) $data['payments31to60DaysLate'];
        }
        if (\array_key_exists('payments61to90DaysLate', $data) && \is_int($data['payments61to90DaysLate'])) {
            $data['payments61to90DaysLate'] = (float) $data['payments61to90DaysLate'];
        }
        if (\array_key_exists('highestInvoiceValueOutstanding', $data) && \is_int($data['highestInvoiceValueOutstanding'])) {
            $data['highestInvoiceValueOutstanding'] = (float) $data['highestInvoiceValueOutstanding'];
        }
        if (\array_key_exists('paymentsStillOwing', $data) && \is_int($data['paymentsStillOwing'])) {
            $data['paymentsStillOwing'] = (float) $data['paymentsStillOwing'];
        }
        if (\array_key_exists('paymentsWithinTerms', $data) && \is_int($data['paymentsWithinTerms'])) {
            $data['paymentsWithinTerms'] = (float) $data['paymentsWithinTerms'];
        }
        if (\array_key_exists('payments0to30Dayslate', $data) && \is_int($data['payments0to30Dayslate'])) {
            $data['payments0to30Dayslate'] = (float) $data['payments0to30Dayslate'];
        }
        if (\array_key_exists('averageInvoiceValue', $data) && \is_int($data['averageInvoiceValue'])) {
            $data['averageInvoiceValue'] = (float) $data['averageInvoiceValue'];
        }
        if (\array_key_exists('paymentsPaid31to60Days', $data) && \is_int($data['paymentsPaid31to60Days'])) {
            $data['paymentsPaid31to60Days'] = (float) $data['paymentsPaid31to60Days'];
        }
        if (\array_key_exists('paymentsPaid90Daysplus', $data) && \is_int($data['paymentsPaid90Daysplus'])) {
            $data['paymentsPaid90Daysplus'] = (float) $data['paymentsPaid90Daysplus'];
        }
        if (\array_key_exists('totalInvoiceValues', $data) && \is_int($data['totalInvoiceValues'])) {
            $data['totalInvoiceValues'] = (float) $data['totalInvoiceValues'];
        }
        if (\array_key_exists('industryDBT', $data) && \is_int($data['industryDBT'])) {
            $data['industryDBT'] = (float) $data['industryDBT'];
        }
        if (\array_key_exists('paymentsOnFile', $data)) {
            $object->paymentsOnFile = $data['paymentsOnFile'];
            unset($data['paymentsOnFile']);
        }
        if (\array_key_exists('paymentsOnTime', $data)) {
            $object->paymentsOnTime = $data['paymentsOnTime'];
            unset($data['paymentsOnTime']);
        }
        if (\array_key_exists('paymentsPaidLate', $data)) {
            $object->paymentsPaidLate = $data['paymentsPaidLate'];
            unset($data['paymentsPaidLate']);
        }
        if (\array_key_exists('paymentsSentLegal', $data)) {
            $object->paymentsSentLegal = $data['paymentsSentLegal'];
            unset($data['paymentsSentLegal']);
        }
        if (\array_key_exists('paymentsStillOwingLate', $data)) {
            $object->paymentsStillOwingLate = $data['paymentsStillOwingLate'];
            unset($data['paymentsStillOwingLate']);
        }
        if (\array_key_exists('paymentsPaid0to30Days', $data)) {
            $object->paymentsPaid0to30Days = $data['paymentsPaid0to30Days'];
            unset($data['paymentsPaid0to30Days']);
        }
        if (\array_key_exists('highestInvoiceValueOutstandingLate', $data)) {
            $object->highestInvoiceValueOutstandingLate = $data['highestInvoiceValueOutstandingLate'];
            unset($data['highestInvoiceValueOutstandingLate']);
        }
        if (\array_key_exists('paymentsPaid90DaysplusLate', $data)) {
            $object->paymentsPaid90DaysplusLate = $data['paymentsPaid90DaysplusLate'];
            unset($data['paymentsPaid90DaysplusLate']);
        }
        if (\array_key_exists('totalBalanceStillOwingLate', $data)) {
            $object->totalBalanceStillOwingLate = $data['totalBalanceStillOwingLate'];
            unset($data['totalBalanceStillOwingLate']);
        }
        if (\array_key_exists('dbt', $data)) {
            $object->dbt = $data['dbt'];
            unset($data['dbt']);
        }
        if (\array_key_exists('paymentsPaid61to90Days', $data)) {
            $object->paymentsPaid61to90Days = $data['paymentsPaid61to90Days'];
            unset($data['paymentsPaid61to90Days']);
        }
        if (\array_key_exists('totalBalanceStillOwing', $data)) {
            $object->totalBalanceStillOwing = $data['totalBalanceStillOwing'];
            unset($data['totalBalanceStillOwing']);
        }
        if (\array_key_exists('payments31to60DaysLate', $data)) {
            $object->payments31to60DaysLate = $data['payments31to60DaysLate'];
            unset($data['payments31to60DaysLate']);
        }
        if (\array_key_exists('payments61to90DaysLate', $data)) {
            $object->payments61to90DaysLate = $data['payments61to90DaysLate'];
            unset($data['payments61to90DaysLate']);
        }
        if (\array_key_exists('highestInvoiceValueOutstanding', $data)) {
            $object->highestInvoiceValueOutstanding = $data['highestInvoiceValueOutstanding'];
            unset($data['highestInvoiceValueOutstanding']);
        }
        if (\array_key_exists('paymentsStillOwing', $data)) {
            $object->paymentsStillOwing = $data['paymentsStillOwing'];
            unset($data['paymentsStillOwing']);
        }
        if (\array_key_exists('paymentsWithinTerms', $data)) {
            $object->paymentsWithinTerms = $data['paymentsWithinTerms'];
            unset($data['paymentsWithinTerms']);
        }
        if (\array_key_exists('payments0to30Dayslate', $data)) {
            $object->payments0to30Dayslate = $data['payments0to30Dayslate'];
            unset($data['payments0to30Dayslate']);
        }
        if (\array_key_exists('averageInvoiceValue', $data)) {
            $object->averageInvoiceValue = $data['averageInvoiceValue'];
            unset($data['averageInvoiceValue']);
        }
        if (\array_key_exists('paymentsPaid31to60Days', $data)) {
            $object->paymentsPaid31to60Days = $data['paymentsPaid31to60Days'];
            unset($data['paymentsPaid31to60Days']);
        }
        if (\array_key_exists('paymentsPaid90Daysplus', $data)) {
            $object->paymentsPaid90Daysplus = $data['paymentsPaid90Daysplus'];
            unset($data['paymentsPaid90Daysplus']);
        }
        if (\array_key_exists('totalInvoiceValues', $data)) {
            $object->totalInvoiceValues = $data['totalInvoiceValues'];
            unset($data['totalInvoiceValues']);
        }
        if (\array_key_exists('paymentTrend', $data)) {
            $object->paymentTrend = $data['paymentTrend'];
            unset($data['paymentTrend']);
        }
        if (\array_key_exists('industryDBT', $data)) {
            $object->industryDBT = $data['industryDBT'];
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
        if (array_key_exists('paymentsOnFile', get_object_vars($data)) && null !== ($data->paymentsOnFile ?? null)) {
            $dataArray['paymentsOnFile'] = $data->paymentsOnFile ?? null;
        }
        if (array_key_exists('paymentsOnTime', get_object_vars($data)) && null !== ($data->paymentsOnTime ?? null)) {
            $dataArray['paymentsOnTime'] = $data->paymentsOnTime ?? null;
        }
        if (array_key_exists('paymentsPaidLate', get_object_vars($data)) && null !== ($data->paymentsPaidLate ?? null)) {
            $dataArray['paymentsPaidLate'] = $data->paymentsPaidLate ?? null;
        }
        if (array_key_exists('paymentsSentLegal', get_object_vars($data)) && null !== ($data->paymentsSentLegal ?? null)) {
            $dataArray['paymentsSentLegal'] = $data->paymentsSentLegal ?? null;
        }
        if (array_key_exists('paymentsStillOwingLate', get_object_vars($data)) && null !== ($data->paymentsStillOwingLate ?? null)) {
            $dataArray['paymentsStillOwingLate'] = $data->paymentsStillOwingLate ?? null;
        }
        if (array_key_exists('paymentsPaid0to30Days', get_object_vars($data)) && null !== ($data->paymentsPaid0to30Days ?? null)) {
            $dataArray['paymentsPaid0to30Days'] = $data->paymentsPaid0to30Days ?? null;
        }
        if (array_key_exists('highestInvoiceValueOutstandingLate', get_object_vars($data)) && null !== ($data->highestInvoiceValueOutstandingLate ?? null)) {
            $dataArray['highestInvoiceValueOutstandingLate'] = $data->highestInvoiceValueOutstandingLate ?? null;
        }
        if (array_key_exists('paymentsPaid90DaysplusLate', get_object_vars($data)) && null !== ($data->paymentsPaid90DaysplusLate ?? null)) {
            $dataArray['paymentsPaid90DaysplusLate'] = $data->paymentsPaid90DaysplusLate ?? null;
        }
        if (array_key_exists('totalBalanceStillOwingLate', get_object_vars($data)) && null !== ($data->totalBalanceStillOwingLate ?? null)) {
            $dataArray['totalBalanceStillOwingLate'] = $data->totalBalanceStillOwingLate ?? null;
        }
        if (array_key_exists('dbt', get_object_vars($data)) && null !== ($data->dbt ?? null)) {
            $dataArray['dbt'] = $data->dbt ?? null;
        }
        if (array_key_exists('paymentsPaid61to90Days', get_object_vars($data)) && null !== ($data->paymentsPaid61to90Days ?? null)) {
            $dataArray['paymentsPaid61to90Days'] = $data->paymentsPaid61to90Days ?? null;
        }
        if (array_key_exists('totalBalanceStillOwing', get_object_vars($data)) && null !== ($data->totalBalanceStillOwing ?? null)) {
            $dataArray['totalBalanceStillOwing'] = $data->totalBalanceStillOwing ?? null;
        }
        if (array_key_exists('payments31to60DaysLate', get_object_vars($data)) && null !== ($data->payments31to60DaysLate ?? null)) {
            $dataArray['payments31to60DaysLate'] = $data->payments31to60DaysLate ?? null;
        }
        if (array_key_exists('payments61to90DaysLate', get_object_vars($data)) && null !== ($data->payments61to90DaysLate ?? null)) {
            $dataArray['payments61to90DaysLate'] = $data->payments61to90DaysLate ?? null;
        }
        if (array_key_exists('highestInvoiceValueOutstanding', get_object_vars($data)) && null !== ($data->highestInvoiceValueOutstanding ?? null)) {
            $dataArray['highestInvoiceValueOutstanding'] = $data->highestInvoiceValueOutstanding ?? null;
        }
        if (array_key_exists('paymentsStillOwing', get_object_vars($data)) && null !== ($data->paymentsStillOwing ?? null)) {
            $dataArray['paymentsStillOwing'] = $data->paymentsStillOwing ?? null;
        }
        if (array_key_exists('paymentsWithinTerms', get_object_vars($data)) && null !== ($data->paymentsWithinTerms ?? null)) {
            $dataArray['paymentsWithinTerms'] = $data->paymentsWithinTerms ?? null;
        }
        if (array_key_exists('payments0to30Dayslate', get_object_vars($data)) && null !== ($data->payments0to30Dayslate ?? null)) {
            $dataArray['payments0to30Dayslate'] = $data->payments0to30Dayslate ?? null;
        }
        if (array_key_exists('averageInvoiceValue', get_object_vars($data)) && null !== ($data->averageInvoiceValue ?? null)) {
            $dataArray['averageInvoiceValue'] = $data->averageInvoiceValue ?? null;
        }
        if (array_key_exists('paymentsPaid31to60Days', get_object_vars($data)) && null !== ($data->paymentsPaid31to60Days ?? null)) {
            $dataArray['paymentsPaid31to60Days'] = $data->paymentsPaid31to60Days ?? null;
        }
        if (array_key_exists('paymentsPaid90Daysplus', get_object_vars($data)) && null !== ($data->paymentsPaid90Daysplus ?? null)) {
            $dataArray['paymentsPaid90Daysplus'] = $data->paymentsPaid90Daysplus ?? null;
        }
        if (array_key_exists('totalInvoiceValues', get_object_vars($data)) && null !== ($data->totalInvoiceValues ?? null)) {
            $dataArray['totalInvoiceValues'] = $data->totalInvoiceValues ?? null;
        }
        if (array_key_exists('paymentTrend', get_object_vars($data)) && null !== ($data->paymentTrend ?? null)) {
            $dataArray['paymentTrend'] = $data->paymentTrend ?? null;
        }
        if (array_key_exists('industryDBT', get_object_vars($data)) && null !== ($data->industryDBT ?? null)) {
            $dataArray['industryDBT'] = $data->industryDBT ?? null;
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
        return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportPaymentData::class => false];
    }
}