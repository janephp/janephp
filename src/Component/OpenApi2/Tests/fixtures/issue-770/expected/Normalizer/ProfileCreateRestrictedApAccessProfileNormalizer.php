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
class ProfileCreateRestrictedApAccessProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRestrictedApAccessProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRestrictedApAccessProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRestrictedApAccessProfile();
        if (\array_key_exists('blockWellKnownPort', $data) && \is_int($data['blockWellKnownPort'])) {
            $data['blockWellKnownPort'] = (bool) $data['blockWellKnownPort'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('blockedPortList', $data)) {
            $values = [];
            foreach ($data['blockedPortList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ProfileBlockedPort::class, 'json', $context);
            }
            $object->setBlockedPortList($values);
        }
        if (\array_key_exists('ipAddressWhitelist', $data)) {
            $values_1 = [];
            foreach ($data['ipAddressWhitelist'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setIpAddressWhitelist($values_1);
        }
        if (\array_key_exists('blockWellKnownPort', $data)) {
            $object->setBlockWellKnownPort($data['blockWellKnownPort']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('blockedPortList') && null !== $data->getBlockedPortList()) {
            $values = [];
            foreach ($data->getBlockedPortList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['blockedPortList'] = $values;
        }
        if ($data->isInitialized('ipAddressWhitelist') && null !== $data->getIpAddressWhitelist()) {
            $values_1 = [];
            foreach ($data->getIpAddressWhitelist() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ipAddressWhitelist'] = $values_1;
        }
        if ($data->isInitialized('blockWellKnownPort') && null !== $data->getBlockWellKnownPort()) {
            $dataArray['blockWellKnownPort'] = $data->getBlockWellKnownPort();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ProfileCreateRestrictedApAccessProfile::class => false];
    }
}