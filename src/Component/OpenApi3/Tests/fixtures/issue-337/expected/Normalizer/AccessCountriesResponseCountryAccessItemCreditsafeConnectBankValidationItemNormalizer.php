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
class AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('startDate', $data)) {
            $object->startDate = $data['startDate'];
            unset($data['startDate']);
        }
        if (\array_key_exists('expireDate', $data)) {
            $object->expireDate = $data['expireDate'];
            unset($data['expireDate']);
        }
        if (\array_key_exists('paid', $data)) {
            $object->paid = $data['paid'];
            unset($data['paid']);
        }
        if (\array_key_exists('used', $data)) {
            $object->used = $data['used'];
            unset($data['used']);
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
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('startDate', get_object_vars($data)) && null !== ($data->startDate ?? null)) {
            $dataArray['startDate'] = $data->startDate ?? null;
        }
        if (array_key_exists('expireDate', get_object_vars($data)) && null !== ($data->expireDate ?? null)) {
            $dataArray['expireDate'] = $data->expireDate ?? null;
        }
        if (array_key_exists('paid', get_object_vars($data)) && null !== ($data->paid ?? null)) {
            $dataArray['paid'] = $data->paid ?? null;
        }
        if (array_key_exists('used', get_object_vars($data)) && null !== ($data->used ?? null)) {
            $dataArray['used'] = $data->used ?? null;
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
        return [\CreditSafe\API\Model\AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem::class => false];
    }
}