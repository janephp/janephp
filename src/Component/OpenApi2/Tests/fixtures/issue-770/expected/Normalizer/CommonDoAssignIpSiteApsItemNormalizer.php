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
class CommonDoAssignIpSiteApsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDoAssignIpSiteApsItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDoAssignIpSiteApsItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonDoAssignIpSiteApsItem();
        if (\array_key_exists('apServerEnabled', $data) && \is_int($data['apServerEnabled'])) {
            $data['apServerEnabled'] = (bool) $data['apServerEnabled'];
        }
        if (\array_key_exists('apServerPrimary', $data) && \is_int($data['apServerPrimary'])) {
            $data['apServerPrimary'] = (bool) $data['apServerPrimary'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('apMac', $data)) {
            $object->setApMac($data['apMac']);
        }
        if (\array_key_exists('apServerEnabled', $data)) {
            $object->setApServerEnabled($data['apServerEnabled']);
        }
        if (\array_key_exists('apServerPrimary', $data)) {
            $object->setApServerPrimary($data['apServerPrimary']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('apMac') && null !== $data->getApMac()) {
            $dataArray['apMac'] = $data->getApMac();
        }
        if ($data->isInitialized('apServerEnabled') && null !== $data->getApServerEnabled()) {
            $dataArray['apServerEnabled'] = $data->getApServerEnabled();
        }
        if ($data->isInitialized('apServerPrimary') && null !== $data->getApServerPrimary()) {
            $dataArray['apServerPrimary'] = $data->getApServerPrimary();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonDoAssignIpSiteApsItem::class => false];
    }
}