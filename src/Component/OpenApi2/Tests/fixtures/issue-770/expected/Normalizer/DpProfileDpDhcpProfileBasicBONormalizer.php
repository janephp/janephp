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
class DpProfileDpDhcpProfileBasicBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileBasicBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileBasicBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileBasicBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('profileName', $data)) {
            $object->setProfileName($data['profileName']);
        }
        if (\array_key_exists('profileId', $data)) {
            $object->setProfileId($data['profileId']);
        }
        if (\array_key_exists('domainName', $data)) {
            $object->setDomainName($data['domainName']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('primaryDnsServer', $data)) {
            $object->setPrimaryDnsServer($data['primaryDnsServer']);
        }
        if (\array_key_exists('secondaryDnsServer', $data)) {
            $object->setSecondaryDnsServer($data['secondaryDnsServer']);
        }
        if (\array_key_exists('defaultLeaseTime', $data)) {
            $object->setDefaultLeaseTime($data['defaultLeaseTime']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('profileName') && null !== $data->getProfileName()) {
            $dataArray['profileName'] = $data->getProfileName();
        }
        if ($data->isInitialized('profileId') && null !== $data->getProfileId()) {
            $dataArray['profileId'] = $data->getProfileId();
        }
        if ($data->isInitialized('domainName') && null !== $data->getDomainName()) {
            $dataArray['domainName'] = $data->getDomainName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('primaryDnsServer') && null !== $data->getPrimaryDnsServer()) {
            $dataArray['primaryDnsServer'] = $data->getPrimaryDnsServer();
        }
        if ($data->isInitialized('secondaryDnsServer') && null !== $data->getSecondaryDnsServer()) {
            $dataArray['secondaryDnsServer'] = $data->getSecondaryDnsServer();
        }
        if ($data->isInitialized('defaultLeaseTime') && null !== $data->getDefaultLeaseTime()) {
            $dataArray['defaultLeaseTime'] = $data->getDefaultLeaseTime();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpDhcpProfileBasicBO::class => false];
    }
}