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
            $object->setAccountNumber($data['accountNumber']);
            unset($data['accountNumber']);
        }
        if (\array_key_exists('iban', $data)) {
            $object->setIban($data['iban']);
            unset($data['iban']);
        }
        if (\array_key_exists('ibanResult', $data)) {
            $object->setIbanResult($data['ibanResult']);
            unset($data['ibanResult']);
        }
        if (\array_key_exists('ibanText', $data)) {
            $object->setIbanText($data['ibanText']);
            unset($data['ibanText']);
        }
        if (\array_key_exists('logDate', $data)) {
            $object->setLogDate($data['logDate']);
            unset($data['logDate']);
        }
        if (\array_key_exists('safeNumber', $data)) {
            $object->setSafeNumber($data['safeNumber']);
            unset($data['safeNumber']);
        }
        if (\array_key_exists('scanResult', $data)) {
            $object->setScanResult($data['scanResult']);
            unset($data['scanResult']);
        }
        if (\array_key_exists('scanText', $data)) {
            $object->setScanText($data['scanText']);
            unset($data['scanText']);
        }
        if (\array_key_exists('sortCode', $data)) {
            $object->setSortCode($data['sortCode']);
            unset($data['sortCode']);
        }
        if (\array_key_exists('statusResult', $data)) {
            $object->setStatusResult($data['statusResult']);
            unset($data['statusResult']);
        }
        if (\array_key_exists('statusText', $data)) {
            $object->setStatusText($data['statusText']);
            unset($data['statusText']);
        }
        if (\array_key_exists('vatResult', $data)) {
            $object->setVatResult($data['vatResult']);
            unset($data['vatResult']);
        }
        if (\array_key_exists('vatText', $data)) {
            $object->setVatText($data['vatText']);
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
        if ($data->isInitialized('accountNumber') && null !== $data->getAccountNumber()) {
            $dataArray['accountNumber'] = $data->getAccountNumber();
        }
        if ($data->isInitialized('iban') && null !== $data->getIban()) {
            $dataArray['iban'] = $data->getIban();
        }
        if ($data->isInitialized('ibanResult') && null !== $data->getIbanResult()) {
            $dataArray['ibanResult'] = $data->getIbanResult();
        }
        if ($data->isInitialized('ibanText') && null !== $data->getIbanText()) {
            $dataArray['ibanText'] = $data->getIbanText();
        }
        if ($data->isInitialized('logDate') && null !== $data->getLogDate()) {
            $dataArray['logDate'] = $data->getLogDate();
        }
        if ($data->isInitialized('safeNumber') && null !== $data->getSafeNumber()) {
            $dataArray['safeNumber'] = $data->getSafeNumber();
        }
        if ($data->isInitialized('scanResult') && null !== $data->getScanResult()) {
            $dataArray['scanResult'] = $data->getScanResult();
        }
        if ($data->isInitialized('scanText') && null !== $data->getScanText()) {
            $dataArray['scanText'] = $data->getScanText();
        }
        if ($data->isInitialized('sortCode') && null !== $data->getSortCode()) {
            $dataArray['sortCode'] = $data->getSortCode();
        }
        if ($data->isInitialized('statusResult') && null !== $data->getStatusResult()) {
            $dataArray['statusResult'] = $data->getStatusResult();
        }
        if ($data->isInitialized('statusText') && null !== $data->getStatusText()) {
            $dataArray['statusText'] = $data->getStatusText();
        }
        if ($data->isInitialized('vatResult') && null !== $data->getVatResult()) {
            $dataArray['vatResult'] = $data->getVatResult();
        }
        if ($data->isInitialized('vatText') && null !== $data->getVatText()) {
            $dataArray['vatText'] = $data->getVatText();
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
        return [\CreditSafe\API\Model\BankMatchValidate::class => false];
    }
}