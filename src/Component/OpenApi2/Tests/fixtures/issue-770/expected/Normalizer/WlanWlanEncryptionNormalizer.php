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
class WlanWlanEncryptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanEncryption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanEncryption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanEncryption();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('transitionDisable', $data) && \is_int($data['transitionDisable'])) {
            $data['transitionDisable'] = (bool) $data['transitionDisable'];
        }
        if (\array_key_exists('support80211rEnabled', $data) && \is_int($data['support80211rEnabled'])) {
            $data['support80211rEnabled'] = (bool) $data['support80211rEnabled'];
        }
        if (\array_key_exists('reserveSsidEnabled', $data) && \is_int($data['reserveSsidEnabled'])) {
            $data['reserveSsidEnabled'] = (bool) $data['reserveSsidEnabled'];
        }
        if (\array_key_exists('method', $data)) {
            $object->method = $data['method'];
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->algorithm = $data['algorithm'];
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->passphrase = $data['passphrase'];
        }
        if (\array_key_exists('saePassphrase', $data)) {
            $object->saePassphrase = $data['saePassphrase'];
        }
        if (\array_key_exists('mfp', $data)) {
            $object->mfp = $data['mfp'];
        }
        if (\array_key_exists('transitionDisable', $data)) {
            $object->transitionDisable = $data['transitionDisable'];
        }
        if (\array_key_exists('keyIndex', $data)) {
            $object->keyIndex = $data['keyIndex'];
        }
        if (\array_key_exists('keyInHex', $data)) {
            $object->keyInHex = $data['keyInHex'];
        }
        if (\array_key_exists('support80211rEnabled', $data)) {
            $object->support80211rEnabled = $data['support80211rEnabled'];
        }
        if (\array_key_exists('reserveSsidEnabled', $data)) {
            $object->reserveSsidEnabled = $data['reserveSsidEnabled'];
        }
        if (\array_key_exists('mobilityDomainId', $data)) {
            $object->mobilityDomainId = $data['mobilityDomainId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['method'] = $data->method ?? null;
        if (array_key_exists('algorithm', get_object_vars($data)) && null !== ($data->algorithm ?? null)) {
            $dataArray['algorithm'] = $data->algorithm ?? null;
        }
        if (array_key_exists('passphrase', get_object_vars($data)) && null !== ($data->passphrase ?? null)) {
            $dataArray['passphrase'] = $data->passphrase ?? null;
        }
        if (array_key_exists('saePassphrase', get_object_vars($data)) && null !== ($data->saePassphrase ?? null)) {
            $dataArray['saePassphrase'] = $data->saePassphrase ?? null;
        }
        if (array_key_exists('mfp', get_object_vars($data)) && null !== ($data->mfp ?? null)) {
            $dataArray['mfp'] = $data->mfp ?? null;
        }
        if (array_key_exists('transitionDisable', get_object_vars($data)) && null !== ($data->transitionDisable ?? null)) {
            $dataArray['transitionDisable'] = $data->transitionDisable ?? null;
        }
        if (array_key_exists('keyIndex', get_object_vars($data)) && null !== ($data->keyIndex ?? null)) {
            $dataArray['keyIndex'] = $data->keyIndex ?? null;
        }
        if (array_key_exists('keyInHex', get_object_vars($data)) && null !== ($data->keyInHex ?? null)) {
            $dataArray['keyInHex'] = $data->keyInHex ?? null;
        }
        if (array_key_exists('support80211rEnabled', get_object_vars($data)) && null !== ($data->support80211rEnabled ?? null)) {
            $dataArray['support80211rEnabled'] = $data->support80211rEnabled ?? null;
        }
        if (array_key_exists('reserveSsidEnabled', get_object_vars($data)) && null !== ($data->reserveSsidEnabled ?? null)) {
            $dataArray['reserveSsidEnabled'] = $data->reserveSsidEnabled ?? null;
        }
        if (array_key_exists('mobilityDomainId', get_object_vars($data)) && null !== ($data->mobilityDomainId ?? null)) {
            $dataArray['mobilityDomainId'] = $data->mobilityDomainId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanEncryption::class => false];
    }
}