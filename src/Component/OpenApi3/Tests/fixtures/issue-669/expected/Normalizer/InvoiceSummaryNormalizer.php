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
            $object->setInvoiceUuid($data['invoice_uuid']);
            unset($data['invoice_uuid']);
        }
        if (\array_key_exists('invoice_id', $data)) {
            $object->setInvoiceId($data['invoice_id']);
            unset($data['invoice_id']);
        }
        if (\array_key_exists('billing_period', $data)) {
            $object->setBillingPeriod($data['billing_period']);
            unset($data['billing_period']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('user_name', $data)) {
            $object->setUserName($data['user_name']);
            unset($data['user_name']);
        }
        if (\array_key_exists('user_billing_address', $data)) {
            $object->setUserBillingAddress($this->denormalizer->denormalize($data['user_billing_address'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryUserBillingAddress::class, 'json', $context));
            unset($data['user_billing_address']);
        }
        if (\array_key_exists('user_company', $data)) {
            $object->setUserCompany($data['user_company']);
            unset($data['user_company']);
        }
        if (\array_key_exists('user_email', $data)) {
            $object->setUserEmail($data['user_email']);
            unset($data['user_email']);
        }
        if (\array_key_exists('product_charges', $data)) {
            $object->setProductCharges($this->denormalizer->denormalize($data['product_charges'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryProductCharges::class, 'json', $context));
            unset($data['product_charges']);
        }
        if (\array_key_exists('overages', $data)) {
            $object->setOverages($this->denormalizer->denormalize($data['overages'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryOverages::class, 'json', $context));
            unset($data['overages']);
        }
        if (\array_key_exists('taxes', $data)) {
            $object->setTaxes($this->denormalizer->denormalize($data['taxes'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryTaxes::class, 'json', $context));
            unset($data['taxes']);
        }
        if (\array_key_exists('credits_and_adjustments', $data)) {
            $object->setCreditsAndAdjustments($this->denormalizer->denormalize($data['credits_and_adjustments'], \Jane\Generated\DigitalOcean\Model\InvoiceSummaryCreditsAndAdjustments::class, 'json', $context));
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
        if ($data->isInitialized('invoiceUuid') && null !== $data->getInvoiceUuid()) {
            $dataArray['invoice_uuid'] = $data->getInvoiceUuid();
        }
        if ($data->isInitialized('invoiceId') && null !== $data->getInvoiceId()) {
            $dataArray['invoice_id'] = $data->getInvoiceId();
        }
        if ($data->isInitialized('billingPeriod') && null !== $data->getBillingPeriod()) {
            $dataArray['billing_period'] = $data->getBillingPeriod();
        }
        if ($data->isInitialized('amount') && null !== $data->getAmount()) {
            $dataArray['amount'] = $data->getAmount();
        }
        if ($data->isInitialized('userName') && null !== $data->getUserName()) {
            $dataArray['user_name'] = $data->getUserName();
        }
        if ($data->isInitialized('userBillingAddress') && null !== $data->getUserBillingAddress()) {
            $dataArray['user_billing_address'] = $data->getUserBillingAddress() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getUserBillingAddress(), 'json', $context));
        }
        if ($data->isInitialized('userCompany') && null !== $data->getUserCompany()) {
            $dataArray['user_company'] = $data->getUserCompany();
        }
        if ($data->isInitialized('userEmail') && null !== $data->getUserEmail()) {
            $dataArray['user_email'] = $data->getUserEmail();
        }
        if ($data->isInitialized('productCharges') && null !== $data->getProductCharges()) {
            $dataArray['product_charges'] = $data->getProductCharges() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getProductCharges(), 'json', $context));
        }
        if ($data->isInitialized('overages') && null !== $data->getOverages()) {
            $dataArray['overages'] = $data->getOverages() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getOverages(), 'json', $context));
        }
        if ($data->isInitialized('taxes') && null !== $data->getTaxes()) {
            $dataArray['taxes'] = $data->getTaxes() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getTaxes(), 'json', $context));
        }
        if ($data->isInitialized('creditsAndAdjustments') && null !== $data->getCreditsAndAdjustments()) {
            $dataArray['credits_and_adjustments'] = $data->getCreditsAndAdjustments() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getCreditsAndAdjustments(), 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\InvoiceSummary::class => false];
    }
}