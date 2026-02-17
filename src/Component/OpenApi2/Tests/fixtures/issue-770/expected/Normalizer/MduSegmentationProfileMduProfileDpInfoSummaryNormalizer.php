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
class MduSegmentationProfileMduProfileDpInfoSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfoSummary::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfoSummary::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfoSummary();
        if (\array_key_exists('enabledRedundant', $data) && \is_int($data['enabledRedundant'])) {
            $data['enabledRedundant'] = (bool) $data['enabledRedundant'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('dpName', $data)) {
            $object->setDpName($data['dpName']);
        }
        if (\array_key_exists('dpId', $data)) {
            $object->setDpId($data['dpId']);
        }
        if (\array_key_exists('vniRange', $data)) {
            $object->setVniRange($data['vniRange']);
        }
        if (\array_key_exists('dhcpProfileName', $data)) {
            $object->setDhcpProfileName($data['dhcpProfileName']);
        }
        if (\array_key_exists('dhcpProfileId', $data)) {
            $object->setDhcpProfileId($data['dhcpProfileId']);
        }
        if (\array_key_exists('dhcpPoolName', $data)) {
            $object->setDhcpPoolName($data['dhcpPoolName']);
        }
        if (\array_key_exists('dhcpPoolId', $data)) {
            $object->setDhcpPoolId($data['dhcpPoolId']);
        }
        if (\array_key_exists('natProfileName', $data)) {
            $object->setNatProfileName($data['natProfileName']);
        }
        if (\array_key_exists('natProfileId', $data)) {
            $object->setNatProfileId($data['natProfileId']);
        }
        if (\array_key_exists('natPoolName', $data)) {
            $object->setNatPoolName($data['natPoolName']);
        }
        if (\array_key_exists('natPoolId', $data)) {
            $object->setNatPoolId($data['natPoolId']);
        }
        if (\array_key_exists('enabledRedundant', $data)) {
            $object->setEnabledRedundant($data['enabledRedundant']);
        }
        if (\array_key_exists('redundantDpName', $data)) {
            $object->setRedundantDpName($data['redundantDpName']);
        }
        if (\array_key_exists('redundantDpId', $data)) {
            $object->setRedundantDpId($data['redundantDpId']);
        }
        if (\array_key_exists('redundantDhcpProfileName', $data)) {
            $object->setRedundantDhcpProfileName($data['redundantDhcpProfileName']);
        }
        if (\array_key_exists('redundantDhcpProfileId', $data)) {
            $object->setRedundantDhcpProfileId($data['redundantDhcpProfileId']);
        }
        if (\array_key_exists('redundantDhcpPoolName', $data)) {
            $object->setRedundantDhcpPoolName($data['redundantDhcpPoolName']);
        }
        if (\array_key_exists('redundantDhcpPoolId', $data)) {
            $object->setRedundantDhcpPoolId($data['redundantDhcpPoolId']);
        }
        if (\array_key_exists('redundantNatProfileName', $data)) {
            $object->setRedundantNatProfileName($data['redundantNatProfileName']);
        }
        if (\array_key_exists('redundantNatProfileId', $data)) {
            $object->setRedundantNatProfileId($data['redundantNatProfileId']);
        }
        if (\array_key_exists('redundantNatPoolName', $data)) {
            $object->setRedundantNatPoolName($data['redundantNatPoolName']);
        }
        if (\array_key_exists('redundantNatPoolId', $data)) {
            $object->setRedundantNatPoolId($data['redundantNatPoolId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dpName') && null !== $data->getDpName()) {
            $dataArray['dpName'] = $data->getDpName();
        }
        $dataArray['dpId'] = $data->getDpId();
        if ($data->isInitialized('vniRange') && null !== $data->getVniRange()) {
            $dataArray['vniRange'] = $data->getVniRange();
        }
        if ($data->isInitialized('dhcpProfileName') && null !== $data->getDhcpProfileName()) {
            $dataArray['dhcpProfileName'] = $data->getDhcpProfileName();
        }
        if ($data->isInitialized('dhcpProfileId') && null !== $data->getDhcpProfileId()) {
            $dataArray['dhcpProfileId'] = $data->getDhcpProfileId();
        }
        if ($data->isInitialized('dhcpPoolName') && null !== $data->getDhcpPoolName()) {
            $dataArray['dhcpPoolName'] = $data->getDhcpPoolName();
        }
        if ($data->isInitialized('dhcpPoolId') && null !== $data->getDhcpPoolId()) {
            $dataArray['dhcpPoolId'] = $data->getDhcpPoolId();
        }
        if ($data->isInitialized('natProfileName') && null !== $data->getNatProfileName()) {
            $dataArray['natProfileName'] = $data->getNatProfileName();
        }
        if ($data->isInitialized('natProfileId') && null !== $data->getNatProfileId()) {
            $dataArray['natProfileId'] = $data->getNatProfileId();
        }
        if ($data->isInitialized('natPoolName') && null !== $data->getNatPoolName()) {
            $dataArray['natPoolName'] = $data->getNatPoolName();
        }
        if ($data->isInitialized('natPoolId') && null !== $data->getNatPoolId()) {
            $dataArray['natPoolId'] = $data->getNatPoolId();
        }
        if ($data->isInitialized('enabledRedundant') && null !== $data->getEnabledRedundant()) {
            $dataArray['enabledRedundant'] = $data->getEnabledRedundant();
        }
        if ($data->isInitialized('redundantDpName') && null !== $data->getRedundantDpName()) {
            $dataArray['redundantDpName'] = $data->getRedundantDpName();
        }
        if ($data->isInitialized('redundantDpId') && null !== $data->getRedundantDpId()) {
            $dataArray['redundantDpId'] = $data->getRedundantDpId();
        }
        if ($data->isInitialized('redundantDhcpProfileName') && null !== $data->getRedundantDhcpProfileName()) {
            $dataArray['redundantDhcpProfileName'] = $data->getRedundantDhcpProfileName();
        }
        if ($data->isInitialized('redundantDhcpProfileId') && null !== $data->getRedundantDhcpProfileId()) {
            $dataArray['redundantDhcpProfileId'] = $data->getRedundantDhcpProfileId();
        }
        if ($data->isInitialized('redundantDhcpPoolName') && null !== $data->getRedundantDhcpPoolName()) {
            $dataArray['redundantDhcpPoolName'] = $data->getRedundantDhcpPoolName();
        }
        if ($data->isInitialized('redundantDhcpPoolId') && null !== $data->getRedundantDhcpPoolId()) {
            $dataArray['redundantDhcpPoolId'] = $data->getRedundantDhcpPoolId();
        }
        if ($data->isInitialized('redundantNatProfileName') && null !== $data->getRedundantNatProfileName()) {
            $dataArray['redundantNatProfileName'] = $data->getRedundantNatProfileName();
        }
        if ($data->isInitialized('redundantNatProfileId') && null !== $data->getRedundantNatProfileId()) {
            $dataArray['redundantNatProfileId'] = $data->getRedundantNatProfileId();
        }
        if ($data->isInitialized('redundantNatPoolName') && null !== $data->getRedundantNatPoolName()) {
            $dataArray['redundantNatPoolName'] = $data->getRedundantNatPoolName();
        }
        if ($data->isInitialized('redundantNatPoolId') && null !== $data->getRedundantNatPoolId()) {
            $dataArray['redundantNatPoolId'] = $data->getRedundantNatPoolId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileMduProfileDpInfoSummary::class => false];
    }
}