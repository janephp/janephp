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
class DpskWlanDpskSettingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('dpskEnabled', $data) && \is_int($data['dpskEnabled'])) {
            $data['dpskEnabled'] = (bool) $data['dpskEnabled'];
        }
        if (\array_key_exists('dpskEnabled', $data)) {
            $object->setDpskEnabled($data['dpskEnabled']);
        }
        if (\array_key_exists('length', $data)) {
            $object->setLength($data['length']);
        }
        if (\array_key_exists('dpskType', $data)) {
            $object->setDpskType($data['dpskType']);
        }
        if (\array_key_exists('expiration', $data)) {
            $object->setExpiration($data['expiration']);
        }
        if (\array_key_exists('dpskFromType', $data)) {
            $object->setDpskFromType($data['dpskFromType']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('dpskEnabled') && null !== $data->getDpskEnabled()) {
            $dataArray['dpskEnabled'] = $data->getDpskEnabled();
        }
        if ($data->isInitialized('length') && null !== $data->getLength()) {
            $dataArray['length'] = $data->getLength();
        }
        if ($data->isInitialized('dpskType') && null !== $data->getDpskType()) {
            $dataArray['dpskType'] = $data->getDpskType();
        }
        if ($data->isInitialized('expiration') && null !== $data->getExpiration()) {
            $dataArray['expiration'] = $data->getExpiration();
        }
        if ($data->isInitialized('dpskFromType') && null !== $data->getDpskFromType()) {
            $dataArray['dpskFromType'] = $data->getDpskFromType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpskWlanDpskSetting::class => false];
    }
}