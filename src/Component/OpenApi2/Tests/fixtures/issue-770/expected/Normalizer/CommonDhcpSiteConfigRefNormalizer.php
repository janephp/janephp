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
class CommonDhcpSiteConfigRefNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRef::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRef::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRef();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('siteEnabled', $data) && \is_int($data['siteEnabled'])) {
            $data['siteEnabled'] = (bool) $data['siteEnabled'];
        }
        if (\array_key_exists('portSelectionEnabled', $data) && \is_int($data['portSelectionEnabled'])) {
            $data['portSelectionEnabled'] = (bool) $data['portSelectionEnabled'];
        }
        if (\array_key_exists('dwpdEnabled', $data) && \is_int($data['dwpdEnabled'])) {
            $data['dwpdEnabled'] = (bool) $data['dwpdEnabled'];
        }
        if (\array_key_exists('manualSelect', $data) && \is_int($data['manualSelect'])) {
            $data['manualSelect'] = (bool) $data['manualSelect'];
        }
        if (\array_key_exists('siteEnabled', $data)) {
            $object->setSiteEnabled($data['siteEnabled']);
        }
        if (\array_key_exists('portSelectionEnabled', $data)) {
            $object->setPortSelectionEnabled($data['portSelectionEnabled']);
        }
        if (\array_key_exists('dwpdEnabled', $data)) {
            $object->setDwpdEnabled($data['dwpdEnabled']);
        }
        if (\array_key_exists('manualSelect', $data)) {
            $object->setManualSelect($data['manualSelect']);
        }
        if (\array_key_exists('siteMode', $data)) {
            $object->setSiteMode($data['siteMode']);
        }
        if (\array_key_exists('eth0ProfileId', $data)) {
            $object->setEth0ProfileId($data['eth0ProfileId']);
        }
        if (\array_key_exists('eth1ProfileId', $data)) {
            $object->setEth1ProfileId($data['eth1ProfileId']);
        }
        if (\array_key_exists('siteAps', $data)) {
            $values = [];
            foreach ($data['siteAps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRefSiteApsItem::class, 'json', $context);
            }
            $object->setSiteAps($values);
        }
        if (\array_key_exists('siteProfileIds', $data)) {
            $values_1 = [];
            foreach ($data['siteProfileIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSiteProfileIds($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('siteEnabled') && null !== $data->getSiteEnabled()) {
            $dataArray['siteEnabled'] = $data->getSiteEnabled();
        }
        if ($data->isInitialized('portSelectionEnabled') && null !== $data->getPortSelectionEnabled()) {
            $dataArray['portSelectionEnabled'] = $data->getPortSelectionEnabled();
        }
        if ($data->isInitialized('dwpdEnabled') && null !== $data->getDwpdEnabled()) {
            $dataArray['dwpdEnabled'] = $data->getDwpdEnabled();
        }
        if ($data->isInitialized('manualSelect') && null !== $data->getManualSelect()) {
            $dataArray['manualSelect'] = $data->getManualSelect();
        }
        if ($data->isInitialized('siteMode') && null !== $data->getSiteMode()) {
            $dataArray['siteMode'] = $data->getSiteMode();
        }
        if ($data->isInitialized('eth0ProfileId') && null !== $data->getEth0ProfileId()) {
            $dataArray['eth0ProfileId'] = $data->getEth0ProfileId();
        }
        if ($data->isInitialized('eth1ProfileId') && null !== $data->getEth1ProfileId()) {
            $dataArray['eth1ProfileId'] = $data->getEth1ProfileId();
        }
        if ($data->isInitialized('siteAps') && null !== $data->getSiteAps()) {
            $values = [];
            foreach ($data->getSiteAps() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['siteAps'] = $values;
        }
        if ($data->isInitialized('siteProfileIds') && null !== $data->getSiteProfileIds()) {
            $values_1 = [];
            foreach ($data->getSiteProfileIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['siteProfileIds'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonDhcpSiteConfigRef::class => false];
    }
}