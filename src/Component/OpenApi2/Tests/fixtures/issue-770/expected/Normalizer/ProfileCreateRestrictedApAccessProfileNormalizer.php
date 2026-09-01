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
class ProfileCreateRestrictedApAccessProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRestrictedApAccessProfile::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRestrictedApAccessProfile::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRestrictedApAccessProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('blockWellKnownPort', $data) && \is_int($data['blockWellKnownPort'])) {
            $data['blockWellKnownPort'] = (bool) $data['blockWellKnownPort'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('blockedPortList', $data)) {
            $values = [];
            foreach ($data['blockedPortList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileBlockedPort::class, 'json', $context);
            }
            $object->blockedPortList = $values;
        }
        if (\array_key_exists('ipAddressWhitelist', $data)) {
            $values_1 = [];
            foreach ($data['ipAddressWhitelist'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->ipAddressWhitelist = $values_1;
        }
        if (\array_key_exists('blockWellKnownPort', $data)) {
            $object->blockWellKnownPort = $data['blockWellKnownPort'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('blockedPortList', get_object_vars($data)) && null !== ($data->blockedPortList ?? null)) {
            $values = [];
            foreach ($data->blockedPortList ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['blockedPortList'] = $values;
        }
        if (array_key_exists('ipAddressWhitelist', get_object_vars($data)) && null !== ($data->ipAddressWhitelist ?? null)) {
            $values_1 = [];
            foreach ($data->ipAddressWhitelist ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['ipAddressWhitelist'] = $values_1;
        }
        if (array_key_exists('blockWellKnownPort', get_object_vars($data)) && null !== ($data->blockWellKnownPort ?? null)) {
            $dataArray['blockWellKnownPort'] = $data->blockWellKnownPort ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ProfileCreateRestrictedApAccessProfile::class => false];
    }
}