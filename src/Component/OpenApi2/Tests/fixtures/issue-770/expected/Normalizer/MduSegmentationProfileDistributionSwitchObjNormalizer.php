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
class MduSegmentationProfileDistributionSwitchObjNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('siteName', $data)) {
            $object->setSiteName($data['siteName']);
        }
        if (\array_key_exists('vlanList', $data)) {
            $object->setVlanList($data['vlanList']);
        }
        if (\array_key_exists('loopbackInterfaceId', $data)) {
            $object->setLoopbackInterfaceId($data['loopbackInterfaceId']);
        }
        if (\array_key_exists('loopbackInterfaceIpAddress', $data)) {
            $object->setLoopbackInterfaceIpAddress($data['loopbackInterfaceIpAddress']);
        }
        if (\array_key_exists('loopbackInterfaceSubnetMask', $data)) {
            $object->setLoopbackInterfaceSubnetMask($data['loopbackInterfaceSubnetMask']);
        }
        if (\array_key_exists('siteSecondaryList', $data)) {
            $values = [];
            foreach ($data['siteSecondaryList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileSiteSecondary::class, 'json', $context);
            }
            $object->setSiteSecondaryList($values);
        }
        if (\array_key_exists('siteKeepAlive', $data)) {
            $object->setSiteKeepAlive($data['siteKeepAlive']);
        }
        if (\array_key_exists('siteRetry', $data)) {
            $object->setSiteRetry($data['siteRetry']);
        }
        if (\array_key_exists('dispatchMessage', $data)) {
            $object->setDispatchMessage($data['dispatchMessage']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('siteName') && null !== $data->getSiteName()) {
            $dataArray['siteName'] = $data->getSiteName();
        }
        if ($data->isInitialized('vlanList') && null !== $data->getVlanList()) {
            $dataArray['vlanList'] = $data->getVlanList();
        }
        if ($data->isInitialized('loopbackInterfaceId') && null !== $data->getLoopbackInterfaceId()) {
            $dataArray['loopbackInterfaceId'] = $data->getLoopbackInterfaceId();
        }
        if ($data->isInitialized('loopbackInterfaceIpAddress') && null !== $data->getLoopbackInterfaceIpAddress()) {
            $dataArray['loopbackInterfaceIpAddress'] = $data->getLoopbackInterfaceIpAddress();
        }
        if ($data->isInitialized('loopbackInterfaceSubnetMask') && null !== $data->getLoopbackInterfaceSubnetMask()) {
            $dataArray['loopbackInterfaceSubnetMask'] = $data->getLoopbackInterfaceSubnetMask();
        }
        if ($data->isInitialized('siteSecondaryList') && null !== $data->getSiteSecondaryList()) {
            $values = [];
            foreach ($data->getSiteSecondaryList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['siteSecondaryList'] = $values;
        }
        if ($data->isInitialized('siteKeepAlive') && null !== $data->getSiteKeepAlive()) {
            $dataArray['siteKeepAlive'] = $data->getSiteKeepAlive();
        }
        if ($data->isInitialized('siteRetry') && null !== $data->getSiteRetry()) {
            $dataArray['siteRetry'] = $data->getSiteRetry();
        }
        if ($data->isInitialized('dispatchMessage') && null !== $data->getDispatchMessage()) {
            $dataArray['dispatchMessage'] = $data->getDispatchMessage();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\MduSegmentationProfileDistributionSwitchObj::class => false];
    }
}