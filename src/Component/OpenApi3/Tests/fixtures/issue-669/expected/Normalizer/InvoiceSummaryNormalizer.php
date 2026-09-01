<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InvoiceSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\InvoiceSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\InvoiceSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\InvoiceSummary();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('invoice_uuid', $data)) {
            $object->invoiceUuid = $data['invoice_uuid'];
            unset($data['invoice_uuid']);
        }
        if (\array_key_exists('invoice_id', $data)) {
            $object->invoiceId = $data['invoice_id'];
            unset($data['invoice_id']);
        }
        if (\array_key_exists('billing_period', $data)) {
            $object->billingPeriod = $data['billing_period'];
            unset($data['billing_period']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->amount = $data['amount'];
            unset($data['amount']);
        }
        if (\array_key_exists('user_name', $data)) {
            $object->userName = $data['user_name'];
            unset($data['user_name']);
        }
        if (\array_key_exists('user_billing_address', $data)) {
            $object->userBillingAddress = $this->denormalizer->denormalize($data['user_billing_address'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryUserBillingAddress::class, 'json', $context);
            unset($data['user_billing_address']);
        }
        if (\array_key_exists('user_company', $data)) {
            $object->userCompany = $data['user_company'];
            unset($data['user_company']);
        }
        if (\array_key_exists('user_email', $data)) {
            $object->userEmail = $data['user_email'];
            unset($data['user_email']);
        }
        if (\array_key_exists('product_charges', $data)) {
            $object->productCharges = $this->denormalizer->denormalize($data['product_charges'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryProductCharges::class, 'json', $context);
            unset($data['product_charges']);
        }
        if (\array_key_exists('overages', $data)) {
            $object->overages = $this->denormalizer->denormalize($data['overages'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryOverages::class, 'json', $context);
            unset($data['overages']);
        }
        if (\array_key_exists('taxes', $data)) {
            $object->taxes = $this->denormalizer->denormalize($data['taxes'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryTaxes::class, 'json', $context);
            unset($data['taxes']);
        }
        if (\array_key_exists('credits_and_adjustments', $data)) {
            $object->creditsAndAdjustments = $this->denormalizer->denormalize($data['credits_and_adjustments'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryCreditsAndAdjustments::class, 'json', $context);
            unset($data['credits_and_adjustments']);
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
        if (array_key_exists('invoiceUuid', get_object_vars($data)) && null !== ($data->invoiceUuid ?? null)) {
            $dataArray['invoice_uuid'] = $data->invoiceUuid ?? null;
        }
        if (array_key_exists('invoiceId', get_object_vars($data)) && null !== ($data->invoiceId ?? null)) {
            $dataArray['invoice_id'] = $data->invoiceId ?? null;
        }
        if (array_key_exists('billingPeriod', get_object_vars($data)) && null !== ($data->billingPeriod ?? null)) {
            $dataArray['billing_period'] = $data->billingPeriod ?? null;
        }
        if (array_key_exists('amount', get_object_vars($data)) && null !== ($data->amount ?? null)) {
            $dataArray['amount'] = $data->amount ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['user_name'] = $data->userName ?? null;
        }
        if (array_key_exists('userBillingAddress', get_object_vars($data)) && null !== ($data->userBillingAddress ?? null)) {
            $dataArray['user_billing_address'] = ($data->userBillingAddress ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->userBillingAddress ?? null, 'json', $context));
        }
        if (array_key_exists('userCompany', get_object_vars($data)) && null !== ($data->userCompany ?? null)) {
            $dataArray['user_company'] = $data->userCompany ?? null;
        }
        if (array_key_exists('userEmail', get_object_vars($data)) && null !== ($data->userEmail ?? null)) {
            $dataArray['user_email'] = $data->userEmail ?? null;
        }
        if (array_key_exists('productCharges', get_object_vars($data)) && null !== ($data->productCharges ?? null)) {
            $dataArray['product_charges'] = ($data->productCharges ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->productCharges ?? null, 'json', $context));
        }
        if (array_key_exists('overages', get_object_vars($data)) && null !== ($data->overages ?? null)) {
            $dataArray['overages'] = ($data->overages ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->overages ?? null, 'json', $context));
        }
        if (array_key_exists('taxes', get_object_vars($data)) && null !== ($data->taxes ?? null)) {
            $dataArray['taxes'] = ($data->taxes ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->taxes ?? null, 'json', $context));
        }
        if (array_key_exists('creditsAndAdjustments', get_object_vars($data)) && null !== ($data->creditsAndAdjustments ?? null)) {
            $dataArray['credits_and_adjustments'] = ($data->creditsAndAdjustments ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->creditsAndAdjustments ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\InvoiceSummary::class => false];
    }
}