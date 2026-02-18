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
class ProfileAdvancedOptionContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAdvancedOptionContent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAdvancedOptionContent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAdvancedOptionContent();
        if (\array_key_exists('dhcpOpt43Subcode', $data) && \is_int($data['dhcpOpt43Subcode'])) {
            $data['dhcpOpt43Subcode'] = (double) $data['dhcpOpt43Subcode'];
        }
        if (\array_key_exists('retryLimit', $data) && \is_int($data['retryLimit'])) {
            $data['retryLimit'] = (double) $data['retryLimit'];
        }
        if (\array_key_exists('replayWindow', $data) && \is_int($data['replayWindow'])) {
            $data['replayWindow'] = (double) $data['replayWindow'];
        }
        if (\array_key_exists('dpdDelay', $data) && \is_int($data['dpdDelay'])) {
            $data['dpdDelay'] = (double) $data['dpdDelay'];
        }
        if (\array_key_exists('keepAliveIntval', $data) && \is_int($data['keepAliveIntval'])) {
            $data['keepAliveIntval'] = (double) $data['keepAliveIntval'];
        }
        if (\array_key_exists('failoverRetryPeriod', $data) && \is_int($data['failoverRetryPeriod'])) {
            $data['failoverRetryPeriod'] = (double) $data['failoverRetryPeriod'];
        }
        if (\array_key_exists('failoverRetryInterval', $data) && \is_int($data['failoverRetryInterval'])) {
            $data['failoverRetryInterval'] = (double) $data['failoverRetryInterval'];
        }
        if (\array_key_exists('failoverPrimaryCheckInterval', $data) && \is_int($data['failoverPrimaryCheckInterval'])) {
            $data['failoverPrimaryCheckInterval'] = (double) $data['failoverPrimaryCheckInterval'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dhcpOpt43Subcode', $data)) {
            $object->setDhcpOpt43Subcode($data['dhcpOpt43Subcode']);
        }
        if (\array_key_exists('retryLimit', $data)) {
            $object->setRetryLimit($data['retryLimit']);
        }
        if (\array_key_exists('replayWindow', $data)) {
            $object->setReplayWindow($data['replayWindow']);
        }
        if (\array_key_exists('ipcompEnable', $data)) {
            $object->setIpcompEnable($data['ipcompEnable']);
        }
        if (\array_key_exists('enforceNatt', $data)) {
            $object->setEnforceNatt($data['enforceNatt']);
        }
        if (\array_key_exists('dpdDelay', $data)) {
            $object->setDpdDelay($data['dpdDelay']);
        }
        if (\array_key_exists('keepAliveIntval', $data)) {
            $object->setKeepAliveIntval($data['keepAliveIntval']);
        }
        if (\array_key_exists('failoverRetryPeriod', $data)) {
            $object->setFailoverRetryPeriod($data['failoverRetryPeriod']);
        }
        if (\array_key_exists('failoverRetryInterval', $data)) {
            $object->setFailoverRetryInterval($data['failoverRetryInterval']);
        }
        if (\array_key_exists('failoverMode', $data)) {
            $object->setFailoverMode($data['failoverMode']);
        }
        if (\array_key_exists('failoverPrimaryCheckInterval', $data)) {
            $object->setFailoverPrimaryCheckInterval($data['failoverPrimaryCheckInterval']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dhcpOpt43Subcode') && null !== $data->getDhcpOpt43Subcode()) {
            $dataArray['dhcpOpt43Subcode'] = $data->getDhcpOpt43Subcode();
        }
        if ($data->isInitialized('retryLimit') && null !== $data->getRetryLimit()) {
            $dataArray['retryLimit'] = $data->getRetryLimit();
        }
        if ($data->isInitialized('replayWindow') && null !== $data->getReplayWindow()) {
            $dataArray['replayWindow'] = $data->getReplayWindow();
        }
        if ($data->isInitialized('ipcompEnable') && null !== $data->getIpcompEnable()) {
            $dataArray['ipcompEnable'] = $data->getIpcompEnable();
        }
        if ($data->isInitialized('enforceNatt') && null !== $data->getEnforceNatt()) {
            $dataArray['enforceNatt'] = $data->getEnforceNatt();
        }
        if ($data->isInitialized('dpdDelay') && null !== $data->getDpdDelay()) {
            $dataArray['dpdDelay'] = $data->getDpdDelay();
        }
        if ($data->isInitialized('keepAliveIntval') && null !== $data->getKeepAliveIntval()) {
            $dataArray['keepAliveIntval'] = $data->getKeepAliveIntval();
        }
        if ($data->isInitialized('failoverRetryPeriod') && null !== $data->getFailoverRetryPeriod()) {
            $dataArray['failoverRetryPeriod'] = $data->getFailoverRetryPeriod();
        }
        if ($data->isInitialized('failoverRetryInterval') && null !== $data->getFailoverRetryInterval()) {
            $dataArray['failoverRetryInterval'] = $data->getFailoverRetryInterval();
        }
        if ($data->isInitialized('failoverMode') && null !== $data->getFailoverMode()) {
            $dataArray['failoverMode'] = $data->getFailoverMode();
        }
        if ($data->isInitialized('failoverPrimaryCheckInterval') && null !== $data->getFailoverPrimaryCheckInterval()) {
            $dataArray['failoverPrimaryCheckInterval'] = $data->getFailoverPrimaryCheckInterval();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileAdvancedOptionContent::class => false];
    }
}