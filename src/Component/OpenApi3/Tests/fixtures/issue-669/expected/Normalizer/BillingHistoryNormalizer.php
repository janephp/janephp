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
class BillingHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\BillingHistory::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\BillingHistory::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\BillingHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->amount = $data['amount'];
            unset($data['amount']);
        }
        if (\array_key_exists('invoice_id', $data)) {
            $object->invoiceId = $data['invoice_id'];
            unset($data['invoice_id']);
        }
        if (\array_key_exists('invoice_uuid', $data)) {
            $object->invoiceUuid = $data['invoice_uuid'];
            unset($data['invoice_uuid']);
        }
        if (\array_key_exists('date', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['date']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['date'], 'Y-m-d\TH:i:sP');
            }
            $object->date = $date;
            unset($data['date']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
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
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('amount', get_object_vars($data)) && null !== ($data->amount ?? null)) {
            $dataArray['amount'] = $data->amount ?? null;
        }
        if (array_key_exists('invoiceId', get_object_vars($data)) && null !== ($data->invoiceId ?? null)) {
            $dataArray['invoice_id'] = $data->invoiceId ?? null;
        }
        if (array_key_exists('invoiceUuid', get_object_vars($data)) && null !== ($data->invoiceUuid ?? null)) {
            $dataArray['invoice_uuid'] = $data->invoiceUuid ?? null;
        }
        if (array_key_exists('date', get_object_vars($data)) && null !== ($data->date ?? null)) {
            $dataArray['date'] = ($data->date ?? null)->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\BillingHistory::class => false];
    }
}