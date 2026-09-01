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
class ProfileAdvancedOptionContentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAdvancedOptionContent::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAdvancedOptionContent::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAdvancedOptionContent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dhcpOpt43Subcode', $data) && \is_int($data['dhcpOpt43Subcode'])) {
            $data['dhcpOpt43Subcode'] = (float) $data['dhcpOpt43Subcode'];
        }
        if (\array_key_exists('retryLimit', $data) && \is_int($data['retryLimit'])) {
            $data['retryLimit'] = (float) $data['retryLimit'];
        }
        if (\array_key_exists('replayWindow', $data) && \is_int($data['replayWindow'])) {
            $data['replayWindow'] = (float) $data['replayWindow'];
        }
        if (\array_key_exists('dpdDelay', $data) && \is_int($data['dpdDelay'])) {
            $data['dpdDelay'] = (float) $data['dpdDelay'];
        }
        if (\array_key_exists('keepAliveIntval', $data) && \is_int($data['keepAliveIntval'])) {
            $data['keepAliveIntval'] = (float) $data['keepAliveIntval'];
        }
        if (\array_key_exists('failoverRetryPeriod', $data) && \is_int($data['failoverRetryPeriod'])) {
            $data['failoverRetryPeriod'] = (float) $data['failoverRetryPeriod'];
        }
        if (\array_key_exists('failoverRetryInterval', $data) && \is_int($data['failoverRetryInterval'])) {
            $data['failoverRetryInterval'] = (float) $data['failoverRetryInterval'];
        }
        if (\array_key_exists('failoverPrimaryCheckInterval', $data) && \is_int($data['failoverPrimaryCheckInterval'])) {
            $data['failoverPrimaryCheckInterval'] = (float) $data['failoverPrimaryCheckInterval'];
        }
        if (\array_key_exists('dhcpOpt43Subcode', $data)) {
            $object->dhcpOpt43Subcode = $data['dhcpOpt43Subcode'];
        }
        if (\array_key_exists('retryLimit', $data)) {
            $object->retryLimit = $data['retryLimit'];
        }
        if (\array_key_exists('replayWindow', $data)) {
            $object->replayWindow = $data['replayWindow'];
        }
        if (\array_key_exists('ipcompEnable', $data)) {
            $object->ipcompEnable = $data['ipcompEnable'];
        }
        if (\array_key_exists('enforceNatt', $data)) {
            $object->enforceNatt = $data['enforceNatt'];
        }
        if (\array_key_exists('dpdDelay', $data)) {
            $object->dpdDelay = $data['dpdDelay'];
        }
        if (\array_key_exists('keepAliveIntval', $data)) {
            $object->keepAliveIntval = $data['keepAliveIntval'];
        }
        if (\array_key_exists('failoverRetryPeriod', $data)) {
            $object->failoverRetryPeriod = $data['failoverRetryPeriod'];
        }
        if (\array_key_exists('failoverRetryInterval', $data)) {
            $object->failoverRetryInterval = $data['failoverRetryInterval'];
        }
        if (\array_key_exists('failoverMode', $data)) {
            $object->failoverMode = $data['failoverMode'];
        }
        if (\array_key_exists('failoverPrimaryCheckInterval', $data)) {
            $object->failoverPrimaryCheckInterval = $data['failoverPrimaryCheckInterval'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('dhcpOpt43Subcode', get_object_vars($data)) && null !== ($data->dhcpOpt43Subcode ?? null)) {
            $dataArray['dhcpOpt43Subcode'] = $data->dhcpOpt43Subcode ?? null;
        }
        if (array_key_exists('retryLimit', get_object_vars($data)) && null !== ($data->retryLimit ?? null)) {
            $dataArray['retryLimit'] = $data->retryLimit ?? null;
        }
        if (array_key_exists('replayWindow', get_object_vars($data)) && null !== ($data->replayWindow ?? null)) {
            $dataArray['replayWindow'] = $data->replayWindow ?? null;
        }
        if (array_key_exists('ipcompEnable', get_object_vars($data)) && null !== ($data->ipcompEnable ?? null)) {
            $dataArray['ipcompEnable'] = $data->ipcompEnable ?? null;
        }
        if (array_key_exists('enforceNatt', get_object_vars($data)) && null !== ($data->enforceNatt ?? null)) {
            $dataArray['enforceNatt'] = $data->enforceNatt ?? null;
        }
        if (array_key_exists('dpdDelay', get_object_vars($data)) && null !== ($data->dpdDelay ?? null)) {
            $dataArray['dpdDelay'] = $data->dpdDelay ?? null;
        }
        if (array_key_exists('keepAliveIntval', get_object_vars($data)) && null !== ($data->keepAliveIntval ?? null)) {
            $dataArray['keepAliveIntval'] = $data->keepAliveIntval ?? null;
        }
        if (array_key_exists('failoverRetryPeriod', get_object_vars($data)) && null !== ($data->failoverRetryPeriod ?? null)) {
            $dataArray['failoverRetryPeriod'] = $data->failoverRetryPeriod ?? null;
        }
        if (array_key_exists('failoverRetryInterval', get_object_vars($data)) && null !== ($data->failoverRetryInterval ?? null)) {
            $dataArray['failoverRetryInterval'] = $data->failoverRetryInterval ?? null;
        }
        if (array_key_exists('failoverMode', get_object_vars($data)) && null !== ($data->failoverMode ?? null)) {
            $dataArray['failoverMode'] = $data->failoverMode ?? null;
        }
        if (array_key_exists('failoverPrimaryCheckInterval', get_object_vars($data)) && null !== ($data->failoverPrimaryCheckInterval ?? null)) {
            $dataArray['failoverPrimaryCheckInterval'] = $data->failoverPrimaryCheckInterval ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileAdvancedOptionContent::class => false];
    }
}