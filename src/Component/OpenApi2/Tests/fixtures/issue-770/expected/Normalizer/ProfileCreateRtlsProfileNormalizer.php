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
class ProfileCreateRtlsProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile();
        if (\array_key_exists('ekahauEnabled', $data) && \is_int($data['ekahauEnabled'])) {
            $data['ekahauEnabled'] = (bool) $data['ekahauEnabled'];
        }
        if (\array_key_exists('stanleyEnabled', $data) && \is_int($data['stanleyEnabled'])) {
            $data['stanleyEnabled'] = (bool) $data['stanleyEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('ekahauEnabled', $data)) {
            $object->setEkahauEnabled($data['ekahauEnabled']);
        }
        if (\array_key_exists('ekahauIp', $data)) {
            $object->setEkahauIp($data['ekahauIp']);
        }
        if (\array_key_exists('ekahauPort', $data)) {
            $object->setEkahauPort($data['ekahauPort']);
        }
        if (\array_key_exists('stanleyEnabled', $data)) {
            $object->setStanleyEnabled($data['stanleyEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        $dataArray['ekahauEnabled'] = $data->getEkahauEnabled();
        if ($data->isInitialized('ekahauIp') && null !== $data->getEkahauIp()) {
            $dataArray['ekahauIp'] = $data->getEkahauIp();
        }
        if ($data->isInitialized('ekahauPort') && null !== $data->getEkahauPort()) {
            $dataArray['ekahauPort'] = $data->getEkahauPort();
        }
        $dataArray['stanleyEnabled'] = $data->getStanleyEnabled();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRtlsProfile::class => false];
    }
}