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
class CommonDhcpSiteConfigRefNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRef::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRef::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRef();
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
            $object->siteEnabled = $data['siteEnabled'];
        }
        if (\array_key_exists('portSelectionEnabled', $data)) {
            $object->portSelectionEnabled = $data['portSelectionEnabled'];
        }
        if (\array_key_exists('dwpdEnabled', $data)) {
            $object->dwpdEnabled = $data['dwpdEnabled'];
        }
        if (\array_key_exists('manualSelect', $data)) {
            $object->manualSelect = $data['manualSelect'];
        }
        if (\array_key_exists('siteMode', $data)) {
            $object->siteMode = $data['siteMode'];
        }
        if (\array_key_exists('eth0ProfileId', $data)) {
            $object->eth0ProfileId = $data['eth0ProfileId'];
        }
        if (\array_key_exists('eth1ProfileId', $data)) {
            $object->eth1ProfileId = $data['eth1ProfileId'];
        }
        if (\array_key_exists('siteAps', $data)) {
            $values = [];
            foreach ($data['siteAps'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRefSiteApsItem::class, 'json', $context);
            }
            $object->siteAps = $values;
        }
        if (\array_key_exists('siteProfileIds', $data)) {
            $values_1 = [];
            foreach ($data['siteProfileIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->siteProfileIds = $values_1;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('siteEnabled', get_object_vars($data)) && null !== ($data->siteEnabled ?? null)) {
            $dataArray['siteEnabled'] = $data->siteEnabled ?? null;
        }
        if (array_key_exists('portSelectionEnabled', get_object_vars($data)) && null !== ($data->portSelectionEnabled ?? null)) {
            $dataArray['portSelectionEnabled'] = $data->portSelectionEnabled ?? null;
        }
        if (array_key_exists('dwpdEnabled', get_object_vars($data)) && null !== ($data->dwpdEnabled ?? null)) {
            $dataArray['dwpdEnabled'] = $data->dwpdEnabled ?? null;
        }
        if (array_key_exists('manualSelect', get_object_vars($data)) && null !== ($data->manualSelect ?? null)) {
            $dataArray['manualSelect'] = $data->manualSelect ?? null;
        }
        if (array_key_exists('siteMode', get_object_vars($data)) && null !== ($data->siteMode ?? null)) {
            $dataArray['siteMode'] = $data->siteMode ?? null;
        }
        if (array_key_exists('eth0ProfileId', get_object_vars($data)) && null !== ($data->eth0ProfileId ?? null)) {
            $dataArray['eth0ProfileId'] = $data->eth0ProfileId ?? null;
        }
        if (array_key_exists('eth1ProfileId', get_object_vars($data)) && null !== ($data->eth1ProfileId ?? null)) {
            $dataArray['eth1ProfileId'] = $data->eth1ProfileId ?? null;
        }
        if (array_key_exists('siteAps', get_object_vars($data)) && null !== ($data->siteAps ?? null)) {
            $values = [];
            foreach ($data->siteAps ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['siteAps'] = $values;
        }
        if (array_key_exists('siteProfileIds', get_object_vars($data)) && null !== ($data->siteProfileIds ?? null)) {
            $values_1 = [];
            foreach ($data->siteProfileIds ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['siteProfileIds'] = $values_1;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonDhcpSiteConfigRef::class => false];
    }
}