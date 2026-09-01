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
class BillingDataPointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\BillingDataPoint::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\BillingDataPoint::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\BillingDataPoint();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('usage_team_urn', $data)) {
            $object->usageTeamUrn = $data['usage_team_urn'];
            unset($data['usage_team_urn']);
        }
        if (\array_key_exists('start_date', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d', $data['start_date']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['start_date'], 'Y-m-d');
            }
            $object->startDate = $date->setTime(0, 0, 0);
            unset($data['start_date']);
        }
        if (\array_key_exists('total_amount', $data)) {
            $object->totalAmount = $data['total_amount'];
            unset($data['total_amount']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->sku = $data['sku'];
            unset($data['sku']);
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        if (\array_key_exists('group_description', $data)) {
            $object->groupDescription = $data['group_description'];
            unset($data['group_description']);
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
        if (array_key_exists('usageTeamUrn', get_object_vars($data)) && null !== ($data->usageTeamUrn ?? null)) {
            $dataArray['usage_team_urn'] = $data->usageTeamUrn ?? null;
        }
        if (array_key_exists('startDate', get_object_vars($data)) && null !== ($data->startDate ?? null)) {
            $dataArray['start_date'] = ($data->startDate ?? null)->format('Y-m-d');
        }
        if (array_key_exists('totalAmount', get_object_vars($data)) && null !== ($data->totalAmount ?? null)) {
            $dataArray['total_amount'] = $data->totalAmount ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('sku', get_object_vars($data)) && null !== ($data->sku ?? null)) {
            $dataArray['sku'] = $data->sku ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('groupDescription', get_object_vars($data)) && null !== ($data->groupDescription ?? null)) {
            $dataArray['group_description'] = $data->groupDescription ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\BillingDataPoint::class => false];
    }
}