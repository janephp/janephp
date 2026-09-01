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
class DpProfileDpNatProfileBasicBONormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('profileName', $data)) {
            $object->profileName = $data['profileName'];
        }
        if (\array_key_exists('natPublicVlanId', $data)) {
            $object->natPublicVlanId = $data['natPublicVlanId'];
        }
        if (\array_key_exists('profileId', $data)) {
            $object->profileId = $data['profileId'];
        }
        if (\array_key_exists('appliedDpKey', $data)) {
            $object->appliedDpKey = $data['appliedDpKey'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('secondaryNatDefaultRouteGateway', $data)) {
            $object->secondaryNatDefaultRouteGateway = $data['secondaryNatDefaultRouteGateway'];
        }
        if (\array_key_exists('primaryNatDefaultRouteGateway', $data)) {
            $object->primaryNatDefaultRouteGateway = $data['primaryNatDefaultRouteGateway'];
        }
        if (\array_key_exists('natPublicSubnetId', $data)) {
            $object->natPublicSubnetId = $this->denormalizer->denormalize($data['natPublicSubnetId'], \Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfilePublicSubnetIdBO::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('profileName', get_object_vars($data)) && null !== ($data->profileName ?? null)) {
            $dataArray['profileName'] = $data->profileName ?? null;
        }
        if (array_key_exists('natPublicVlanId', get_object_vars($data)) && null !== ($data->natPublicVlanId ?? null)) {
            $dataArray['natPublicVlanId'] = $data->natPublicVlanId ?? null;
        }
        if (array_key_exists('profileId', get_object_vars($data)) && null !== ($data->profileId ?? null)) {
            $dataArray['profileId'] = $data->profileId ?? null;
        }
        if (array_key_exists('appliedDpKey', get_object_vars($data)) && null !== ($data->appliedDpKey ?? null)) {
            $dataArray['appliedDpKey'] = $data->appliedDpKey ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('secondaryNatDefaultRouteGateway', get_object_vars($data)) && null !== ($data->secondaryNatDefaultRouteGateway ?? null)) {
            $dataArray['secondaryNatDefaultRouteGateway'] = $data->secondaryNatDefaultRouteGateway ?? null;
        }
        if (array_key_exists('primaryNatDefaultRouteGateway', get_object_vars($data)) && null !== ($data->primaryNatDefaultRouteGateway ?? null)) {
            $dataArray['primaryNatDefaultRouteGateway'] = $data->primaryNatDefaultRouteGateway ?? null;
        }
        if (array_key_exists('natPublicSubnetId', get_object_vars($data)) && null !== ($data->natPublicSubnetId ?? null)) {
            $dataArray['natPublicSubnetId'] = ($data->natPublicSubnetId ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->natPublicSubnetId ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\DpProfileDpNatProfileBasicBO::class => false];
    }
}