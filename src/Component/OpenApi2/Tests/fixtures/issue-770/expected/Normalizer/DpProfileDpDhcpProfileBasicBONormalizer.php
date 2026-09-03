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
class DpProfileDpDhcpProfileBasicBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileBasicBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileBasicBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileBasicBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('profileName', $data)) {
            $object->profileName = $data['profileName'];
        }
        if (\array_key_exists('profileId', $data)) {
            $object->profileId = $data['profileId'];
        }
        if (\array_key_exists('domainName', $data)) {
            $object->domainName = $data['domainName'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('primaryDnsServer', $data)) {
            $object->primaryDnsServer = $data['primaryDnsServer'];
        }
        if (\array_key_exists('secondaryDnsServer', $data)) {
            $object->secondaryDnsServer = $data['secondaryDnsServer'];
        }
        if (\array_key_exists('defaultLeaseTime', $data)) {
            $object->defaultLeaseTime = $data['defaultLeaseTime'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('profileName', get_object_vars($data)) && null !== ($data->profileName ?? null)) {
            $dataArray['profileName'] = $data->profileName ?? null;
        }
        if (array_key_exists('profileId', get_object_vars($data)) && null !== ($data->profileId ?? null)) {
            $dataArray['profileId'] = $data->profileId ?? null;
        }
        if (array_key_exists('domainName', get_object_vars($data)) && null !== ($data->domainName ?? null)) {
            $dataArray['domainName'] = $data->domainName ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('primaryDnsServer', get_object_vars($data)) && null !== ($data->primaryDnsServer ?? null)) {
            $dataArray['primaryDnsServer'] = $data->primaryDnsServer ?? null;
        }
        if (array_key_exists('secondaryDnsServer', get_object_vars($data)) && null !== ($data->secondaryDnsServer ?? null)) {
            $dataArray['secondaryDnsServer'] = $data->secondaryDnsServer ?? null;
        }
        if (array_key_exists('defaultLeaseTime', get_object_vars($data)) && null !== ($data->defaultLeaseTime ?? null)) {
            $dataArray['defaultLeaseTime'] = $data->defaultLeaseTime ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\DpProfileDpDhcpProfileBasicBO::class => false];
    }
}