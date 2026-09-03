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
class WlanWlanVlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanVlan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanVlan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanVlan();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('aaaVlanOverride', $data) && \is_int($data['aaaVlanOverride'])) {
            $data['aaaVlanOverride'] = (bool) $data['aaaVlanOverride'];
        }
        if (\array_key_exists('coreQinQEnabled', $data) && \is_int($data['coreQinQEnabled'])) {
            $data['coreQinQEnabled'] = (bool) $data['coreQinQEnabled'];
        }
        if (\array_key_exists('accessVlan', $data)) {
            $object->accessVlan = $data['accessVlan'];
        }
        if (\array_key_exists('aaaVlanOverride', $data)) {
            $object->aaaVlanOverride = $data['aaaVlanOverride'];
        }
        if (\array_key_exists('coreQinQEnabled', $data)) {
            $object->coreQinQEnabled = $data['coreQinQEnabled'];
        }
        if (\array_key_exists('coreSVlan', $data)) {
            $object->coreSVlan = $data['coreSVlan'];
        }
        if (\array_key_exists('vlanPooling', $data)) {
            $object->vlanPooling = $this->denormalizer->denormalize($data['vlanPooling'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('accessVlan', get_object_vars($data)) && null !== ($data->accessVlan ?? null)) {
            $dataArray['accessVlan'] = $data->accessVlan ?? null;
        }
        if (array_key_exists('aaaVlanOverride', get_object_vars($data)) && null !== ($data->aaaVlanOverride ?? null)) {
            $dataArray['aaaVlanOverride'] = $data->aaaVlanOverride ?? null;
        }
        if (array_key_exists('coreQinQEnabled', get_object_vars($data)) && null !== ($data->coreQinQEnabled ?? null)) {
            $dataArray['coreQinQEnabled'] = $data->coreQinQEnabled ?? null;
        }
        if (array_key_exists('coreSVlan', get_object_vars($data)) && null !== ($data->coreSVlan ?? null)) {
            $dataArray['coreSVlan'] = $data->coreSVlan ?? null;
        }
        if (array_key_exists('vlanPooling', get_object_vars($data)) && null !== ($data->vlanPooling ?? null)) {
            $dataArray['vlanPooling'] = ($data->vlanPooling ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->vlanPooling ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\WlanWlanVlan::class => false];
    }
}