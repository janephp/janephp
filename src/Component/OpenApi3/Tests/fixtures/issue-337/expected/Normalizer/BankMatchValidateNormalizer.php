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
class BankMatchValidateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \CreditSafe\API\Model\BankMatchValidate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \CreditSafe\API\Model\BankMatchValidate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \CreditSafe\API\Model\BankMatchValidate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('accountNumber', $data)) {
            $object->accountNumber = $data['accountNumber'];
            unset($data['accountNumber']);
        }
        if (\array_key_exists('iban', $data)) {
            $object->iban = $data['iban'];
            unset($data['iban']);
        }
        if (\array_key_exists('ibanResult', $data)) {
            $object->ibanResult = $data['ibanResult'];
            unset($data['ibanResult']);
        }
        if (\array_key_exists('ibanText', $data)) {
            $object->ibanText = $data['ibanText'];
            unset($data['ibanText']);
        }
        if (\array_key_exists('logDate', $data)) {
            $object->logDate = $data['logDate'];
            unset($data['logDate']);
        }
        if (\array_key_exists('safeNumber', $data)) {
            $object->safeNumber = $data['safeNumber'];
            unset($data['safeNumber']);
        }
        if (\array_key_exists('scanResult', $data)) {
            $object->scanResult = $data['scanResult'];
            unset($data['scanResult']);
        }
        if (\array_key_exists('scanText', $data)) {
            $object->scanText = $data['scanText'];
            unset($data['scanText']);
        }
        if (\array_key_exists('sortCode', $data)) {
            $object->sortCode = $data['sortCode'];
            unset($data['sortCode']);
        }
        if (\array_key_exists('statusResult', $data)) {
            $object->statusResult = $data['statusResult'];
            unset($data['statusResult']);
        }
        if (\array_key_exists('statusText', $data)) {
            $object->statusText = $data['statusText'];
            unset($data['statusText']);
        }
        if (\array_key_exists('vatResult', $data)) {
            $object->vatResult = $data['vatResult'];
            unset($data['vatResult']);
        }
        if (\array_key_exists('vatText', $data)) {
            $object->vatText = $data['vatText'];
            unset($data['vatText']);
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
        if (array_key_exists('accountNumber', get_object_vars($data)) && null !== ($data->accountNumber ?? null)) {
            $dataArray['accountNumber'] = $data->accountNumber ?? null;
        }
        if (array_key_exists('iban', get_object_vars($data)) && null !== ($data->iban ?? null)) {
            $dataArray['iban'] = $data->iban ?? null;
        }
        if (array_key_exists('ibanResult', get_object_vars($data)) && null !== ($data->ibanResult ?? null)) {
            $dataArray['ibanResult'] = $data->ibanResult ?? null;
        }
        if (array_key_exists('ibanText', get_object_vars($data)) && null !== ($data->ibanText ?? null)) {
            $dataArray['ibanText'] = $data->ibanText ?? null;
        }
        if (array_key_exists('logDate', get_object_vars($data)) && null !== ($data->logDate ?? null)) {
            $dataArray['logDate'] = $data->logDate ?? null;
        }
        if (array_key_exists('safeNumber', get_object_vars($data)) && null !== ($data->safeNumber ?? null)) {
            $dataArray['safeNumber'] = $data->safeNumber ?? null;
        }
        if (array_key_exists('scanResult', get_object_vars($data)) && null !== ($data->scanResult ?? null)) {
            $dataArray['scanResult'] = $data->scanResult ?? null;
        }
        if (array_key_exists('scanText', get_object_vars($data)) && null !== ($data->scanText ?? null)) {
            $dataArray['scanText'] = $data->scanText ?? null;
        }
        if (array_key_exists('sortCode', get_object_vars($data)) && null !== ($data->sortCode ?? null)) {
            $dataArray['sortCode'] = $data->sortCode ?? null;
        }
        if (array_key_exists('statusResult', get_object_vars($data)) && null !== ($data->statusResult ?? null)) {
            $dataArray['statusResult'] = $data->statusResult ?? null;
        }
        if (array_key_exists('statusText', get_object_vars($data)) && null !== ($data->statusText ?? null)) {
            $dataArray['statusText'] = $data->statusText ?? null;
        }
        if (array_key_exists('vatResult', get_object_vars($data)) && null !== ($data->vatResult ?? null)) {
            $dataArray['vatResult'] = $data->vatResult ?? null;
        }
        if (array_key_exists('vatText', get_object_vars($data)) && null !== ($data->vatText ?? null)) {
            $dataArray['vatText'] = $data->vatText ?? null;
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
        return [\CreditSafe\API\Model\BankMatchValidate::class => false];
    }
}