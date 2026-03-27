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
class WlanWlanVlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan();
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
            $object->setAccessVlan($data['accessVlan']);
        }
        if (\array_key_exists('aaaVlanOverride', $data)) {
            $object->setAaaVlanOverride($data['aaaVlanOverride']);
        }
        if (\array_key_exists('coreQinQEnabled', $data)) {
            $object->setCoreQinQEnabled($data['coreQinQEnabled']);
        }
        if (\array_key_exists('coreSVlan', $data)) {
            $object->setCoreSVlan($data['coreSVlan']);
        }
        if (\array_key_exists('vlanPooling', $data)) {
            $object->setVlanPooling($this->denormalizer->denormalize($data['vlanPooling'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonGenericRef::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('accessVlan') && null !== $data->getAccessVlan()) {
            $dataArray['accessVlan'] = $data->getAccessVlan();
        }
        if ($data->isInitialized('aaaVlanOverride') && null !== $data->getAaaVlanOverride()) {
            $dataArray['aaaVlanOverride'] = $data->getAaaVlanOverride();
        }
        if ($data->isInitialized('coreQinQEnabled') && null !== $data->getCoreQinQEnabled()) {
            $dataArray['coreQinQEnabled'] = $data->getCoreQinQEnabled();
        }
        if ($data->isInitialized('coreSVlan') && null !== $data->getCoreSVlan()) {
            $dataArray['coreSVlan'] = $data->getCoreSVlan();
        }
        if ($data->isInitialized('vlanPooling') && null !== $data->getVlanPooling()) {
            $dataArray['vlanPooling'] = $this->normalizer->normalize($data->getVlanPooling(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanWlanVlan::class => false];
    }
}