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
class ApmodelLldpSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting();
        if (\array_key_exists('enabled', $data) && \is_int($data['enabled'])) {
            $data['enabled'] = (bool) $data['enabled'];
        }
        if (\array_key_exists('managementIPTLVEnabled', $data) && \is_int($data['managementIPTLVEnabled'])) {
            $data['managementIPTLVEnabled'] = (bool) $data['managementIPTLVEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('advertiseIntervalInSec', $data)) {
            $object->setAdvertiseIntervalInSec($data['advertiseIntervalInSec']);
        }
        if (\array_key_exists('holdTimeInSec', $data)) {
            $object->setHoldTimeInSec($data['holdTimeInSec']);
        }
        if (\array_key_exists('managementIPTLVEnabled', $data)) {
            $object->setManagementIPTLVEnabled($data['managementIPTLVEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['enabled'] = $data->getEnabled();
        if ($data->isInitialized('advertiseIntervalInSec') && null !== $data->getAdvertiseIntervalInSec()) {
            $dataArray['advertiseIntervalInSec'] = $data->getAdvertiseIntervalInSec();
        }
        if ($data->isInitialized('holdTimeInSec') && null !== $data->getHoldTimeInSec()) {
            $dataArray['holdTimeInSec'] = $data->getHoldTimeInSec();
        }
        if ($data->isInitialized('managementIPTLVEnabled') && null !== $data->getManagementIPTLVEnabled()) {
            $dataArray['managementIPTLVEnabled'] = $data->getManagementIPTLVEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ApmodelLldpSetting::class => false];
    }
}