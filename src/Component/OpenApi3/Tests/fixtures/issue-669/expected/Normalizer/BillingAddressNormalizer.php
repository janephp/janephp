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
class BillingAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\BillingAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\BillingAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\BillingAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('address_line1', $data)) {
            $object->addressLine1 = $data['address_line1'];
            unset($data['address_line1']);
        }
        if (\array_key_exists('address_line2', $data)) {
            $object->addressLine2 = $data['address_line2'];
            unset($data['address_line2']);
        }
        if (\array_key_exists('city', $data)) {
            $object->city = $data['city'];
            unset($data['city']);
        }
        if (\array_key_exists('region', $data)) {
            $object->region = $data['region'];
            unset($data['region']);
        }
        if (\array_key_exists('postal_code', $data)) {
            $object->postalCode = $data['postal_code'];
            unset($data['postal_code']);
        }
        if (\array_key_exists('country_iso2_code', $data)) {
            $object->countryIso2Code = $data['country_iso2_code'];
            unset($data['country_iso2_code']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->createdAt = $data['created_at'];
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->updatedAt = $data['updated_at'];
            unset($data['updated_at']);
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
        if (array_key_exists('addressLine1', get_object_vars($data)) && null !== ($data->addressLine1 ?? null)) {
            $dataArray['address_line1'] = $data->addressLine1 ?? null;
        }
        if (array_key_exists('addressLine2', get_object_vars($data)) && null !== ($data->addressLine2 ?? null)) {
            $dataArray['address_line2'] = $data->addressLine2 ?? null;
        }
        if (array_key_exists('city', get_object_vars($data)) && null !== ($data->city ?? null)) {
            $dataArray['city'] = $data->city ?? null;
        }
        if (array_key_exists('region', get_object_vars($data)) && null !== ($data->region ?? null)) {
            $dataArray['region'] = $data->region ?? null;
        }
        if (array_key_exists('postalCode', get_object_vars($data)) && null !== ($data->postalCode ?? null)) {
            $dataArray['postal_code'] = $data->postalCode ?? null;
        }
        if (array_key_exists('countryIso2Code', get_object_vars($data)) && null !== ($data->countryIso2Code ?? null)) {
            $dataArray['country_iso2_code'] = $data->countryIso2Code ?? null;
        }
        if (array_key_exists('createdAt', get_object_vars($data)) && null !== ($data->createdAt ?? null)) {
            $dataArray['created_at'] = $data->createdAt ?? null;
        }
        if (array_key_exists('updatedAt', get_object_vars($data)) && null !== ($data->updatedAt ?? null)) {
            $dataArray['updated_at'] = $data->updatedAt ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\BillingAddress::class => false];
    }
}