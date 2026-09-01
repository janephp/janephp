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
class ZoneMeshConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('zeroTouchStatus', $data) && \is_int($data['zeroTouchStatus'])) {
            $data['zeroTouchStatus'] = (bool) $data['zeroTouchStatus'];
        }
        if (\array_key_exists('ssid', $data)) {
            $object->ssid = $data['ssid'];
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->passphrase = $data['passphrase'];
        }
        if (\array_key_exists('meshRadioIdx', $data)) {
            $object->meshRadioIdx = $data['meshRadioIdx'];
        }
        if (\array_key_exists('zeroTouchStatus', $data)) {
            $object->zeroTouchStatus = $data['zeroTouchStatus'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('ssid', get_object_vars($data)) && null !== ($data->ssid ?? null)) {
            $dataArray['ssid'] = $data->ssid ?? null;
        }
        if (array_key_exists('passphrase', get_object_vars($data)) && null !== ($data->passphrase ?? null)) {
            $dataArray['passphrase'] = $data->passphrase ?? null;
        }
        if (array_key_exists('meshRadioIdx', get_object_vars($data)) && null !== ($data->meshRadioIdx ?? null)) {
            $dataArray['meshRadioIdx'] = $data->meshRadioIdx ?? null;
        }
        if (array_key_exists('zeroTouchStatus', get_object_vars($data)) && null !== ($data->zeroTouchStatus ?? null)) {
            $dataArray['zeroTouchStatus'] = $data->zeroTouchStatus ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration::class => false];
    }
}