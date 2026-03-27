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
class WlanWlanEncryptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption();
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
            $object->setMethod($data['method']);
        }
        if (\array_key_exists('algorithm', $data)) {
            $object->setAlgorithm($data['algorithm']);
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->setPassphrase($data['passphrase']);
        }
        if (\array_key_exists('saePassphrase', $data)) {
            $object->setSaePassphrase($data['saePassphrase']);
        }
        if (\array_key_exists('mfp', $data)) {
            $object->setMfp($data['mfp']);
        }
        if (\array_key_exists('transitionDisable', $data)) {
            $object->setTransitionDisable($data['transitionDisable']);
        }
        if (\array_key_exists('keyIndex', $data)) {
            $object->setKeyIndex($data['keyIndex']);
        }
        if (\array_key_exists('keyInHex', $data)) {
            $object->setKeyInHex($data['keyInHex']);
        }
        if (\array_key_exists('support80211rEnabled', $data)) {
            $object->setSupport80211rEnabled($data['support80211rEnabled']);
        }
        if (\array_key_exists('reserveSsidEnabled', $data)) {
            $object->setReserveSsidEnabled($data['reserveSsidEnabled']);
        }
        if (\array_key_exists('mobilityDomainId', $data)) {
            $object->setMobilityDomainId($data['mobilityDomainId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['method'] = $data->getMethod();
        if ($data->isInitialized('algorithm') && null !== $data->getAlgorithm()) {
            $dataArray['algorithm'] = $data->getAlgorithm();
        }
        if ($data->isInitialized('passphrase') && null !== $data->getPassphrase()) {
            $dataArray['passphrase'] = $data->getPassphrase();
        }
        if ($data->isInitialized('saePassphrase') && null !== $data->getSaePassphrase()) {
            $dataArray['saePassphrase'] = $data->getSaePassphrase();
        }
        if ($data->isInitialized('mfp') && null !== $data->getMfp()) {
            $dataArray['mfp'] = $data->getMfp();
        }
        if ($data->isInitialized('transitionDisable') && null !== $data->getTransitionDisable()) {
            $dataArray['transitionDisable'] = $data->getTransitionDisable();
        }
        if ($data->isInitialized('keyIndex') && null !== $data->getKeyIndex()) {
            $dataArray['keyIndex'] = $data->getKeyIndex();
        }
        if ($data->isInitialized('keyInHex') && null !== $data->getKeyInHex()) {
            $dataArray['keyInHex'] = $data->getKeyInHex();
        }
        if ($data->isInitialized('support80211rEnabled') && null !== $data->getSupport80211rEnabled()) {
            $dataArray['support80211rEnabled'] = $data->getSupport80211rEnabled();
        }
        if ($data->isInitialized('reserveSsidEnabled') && null !== $data->getReserveSsidEnabled()) {
            $dataArray['reserveSsidEnabled'] = $data->getReserveSsidEnabled();
        }
        if ($data->isInitialized('mobilityDomainId') && null !== $data->getMobilityDomainId()) {
            $dataArray['mobilityDomainId'] = $data->getMobilityDomainId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanEncryption::class => false];
    }
}