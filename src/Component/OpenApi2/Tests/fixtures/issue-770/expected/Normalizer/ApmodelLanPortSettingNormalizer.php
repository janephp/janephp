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
class ApmodelLanPortSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('overwriteVlanEnabled', $data) && \is_int($data['overwriteVlanEnabled'])) {
            $data['overwriteVlanEnabled'] = (bool) $data['overwriteVlanEnabled'];
        }
        if (\array_key_exists('portName', $data)) {
            $object->portName = $data['portName'];
        }
        if (\array_key_exists('enabled', $data)) {
            $object->enabled = $data['enabled'];
        }
        if (\array_key_exists('overwriteVlanEnabled', $data)) {
            $object->overwriteVlanEnabled = $data['overwriteVlanEnabled'];
        }
        if (\array_key_exists('vlanUntagId', $data)) {
            $object->vlanUntagId = $data['vlanUntagId'];
        }
        if (\array_key_exists('members', $data)) {
            $object->members = $data['members'];
        }
        if (\array_key_exists('ethPortProfile', $data)) {
            $object->ethPortProfile = $this->denormalizer->denormalize($data['ethPortProfile'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonGenericRef::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['portName'] = $data->portName ?? null;
        $dataArray['enabled'] = $data->enabled ?? null;
        if (array_key_exists('overwriteVlanEnabled', get_object_vars($data)) && null !== ($data->overwriteVlanEnabled ?? null)) {
            $dataArray['overwriteVlanEnabled'] = $data->overwriteVlanEnabled ?? null;
        }
        if (array_key_exists('vlanUntagId', get_object_vars($data)) && null !== ($data->vlanUntagId ?? null)) {
            $dataArray['vlanUntagId'] = $data->vlanUntagId ?? null;
        }
        if (array_key_exists('members', get_object_vars($data)) && null !== ($data->members ?? null)) {
            $dataArray['members'] = $data->members ?? null;
        }
        if (array_key_exists('ethPortProfile', get_object_vars($data)) && null !== ($data->ethPortProfile ?? null)) {
            $dataArray['ethPortProfile'] = ($data->ethPortProfile ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->ethPortProfile ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ApmodelLanPortSetting::class => false];
    }
}