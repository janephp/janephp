<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting();
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
            $object->setThroughController($data['throughController']);
        }
        if (\array_key_exists('realmBasedAcct', $data)) {
            $object->setRealmBasedAcct($data['realmBasedAcct']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('interimUpdateMin', $data)) {
            $object->setInterimUpdateMin($data['interimUpdateMin']);
        }
        if (\array_key_exists('accountingDelayEnabled', $data)) {
            $object->setAccountingDelayEnabled($data['accountingDelayEnabled']);
        }
        if (\array_key_exists('backupAccountingId', $data)) {
            $object->setBackupAccountingId($data['backupAccountingId']);
        }
        if (\array_key_exists('backupAccountingName', $data)) {
            $object->setBackupAccountingName($data['backupAccountingName']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('throughController') && null !== $data->getThroughController()) {
            $dataArray['throughController'] = $data->getThroughController();
        }
        if ($data->isInitialized('realmBasedAcct') && null !== $data->getRealmBasedAcct()) {
            $dataArray['realmBasedAcct'] = $data->getRealmBasedAcct();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('interimUpdateMin') && null !== $data->getInterimUpdateMin()) {
            $dataArray['interimUpdateMin'] = $data->getInterimUpdateMin();
        }
        if ($data->isInitialized('accountingDelayEnabled') && null !== $data->getAccountingDelayEnabled()) {
            $dataArray['accountingDelayEnabled'] = $data->getAccountingDelayEnabled();
        }
        if ($data->isInitialized('backupAccountingId') && null !== $data->getBackupAccountingId()) {
            $dataArray['backupAccountingId'] = $data->getBackupAccountingId();
        }
        if ($data->isInitialized('backupAccountingName') && null !== $data->getBackupAccountingName()) {
            $dataArray['backupAccountingName'] = $data->getBackupAccountingName();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanAccounting::class => false];
    }
}