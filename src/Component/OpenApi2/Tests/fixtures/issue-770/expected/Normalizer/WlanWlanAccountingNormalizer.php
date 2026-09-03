<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WlanWlanAccountingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAccounting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAccounting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAccounting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('throughController', $data) && \is_int($data['throughController'])) {
            $data['throughController'] = (bool) $data['throughController'];
        }
        if (\array_key_exists('realmBasedAcct', $data) && \is_int($data['realmBasedAcct'])) {
            $data['realmBasedAcct'] = (bool) $data['realmBasedAcct'];
        }
        if (\array_key_exists('accountingDelayEnabled', $data) && \is_int($data['accountingDelayEnabled'])) {
            $data['accountingDelayEnabled'] = (bool) $data['accountingDelayEnabled'];
        }
        if (\array_key_exists('throughController', $data)) {
            $object->throughController = $data['throughController'];
        }
        if (\array_key_exists('realmBasedAcct', $data)) {
            $object->realmBasedAcct = $data['realmBasedAcct'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('interimUpdateMin', $data)) {
            $object->interimUpdateMin = $data['interimUpdateMin'];
        }
        if (\array_key_exists('accountingDelayEnabled', $data)) {
            $object->accountingDelayEnabled = $data['accountingDelayEnabled'];
        }
        if (\array_key_exists('backupAccountingId', $data)) {
            $object->backupAccountingId = $data['backupAccountingId'];
        }
        if (\array_key_exists('backupAccountingName', $data)) {
            $object->backupAccountingName = $data['backupAccountingName'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('throughController', get_object_vars($data)) && null !== ($data->throughController ?? null)) {
            $dataArray['throughController'] = $data->throughController ?? null;
        }
        if (array_key_exists('realmBasedAcct', get_object_vars($data)) && null !== ($data->realmBasedAcct ?? null)) {
            $dataArray['realmBasedAcct'] = $data->realmBasedAcct ?? null;
        }
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('interimUpdateMin', get_object_vars($data)) && null !== ($data->interimUpdateMin ?? null)) {
            $dataArray['interimUpdateMin'] = $data->interimUpdateMin ?? null;
        }
        if (array_key_exists('accountingDelayEnabled', get_object_vars($data)) && null !== ($data->accountingDelayEnabled ?? null)) {
            $dataArray['accountingDelayEnabled'] = $data->accountingDelayEnabled ?? null;
        }
        if (array_key_exists('backupAccountingId', get_object_vars($data)) && null !== ($data->backupAccountingId ?? null)) {
            $dataArray['backupAccountingId'] = $data->backupAccountingId ?? null;
        }
        if (array_key_exists('backupAccountingName', get_object_vars($data)) && null !== ($data->backupAccountingName ?? null)) {
            $dataArray['backupAccountingName'] = $data->backupAccountingName ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanAccounting::class => false];
    }
}