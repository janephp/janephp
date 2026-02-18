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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration();
        if (\array_key_exists('zeroTouchStatus', $data) && \is_int($data['zeroTouchStatus'])) {
            $data['zeroTouchStatus'] = (bool) $data['zeroTouchStatus'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ssid', $data)) {
            $object->setSsid($data['ssid']);
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->setPassphrase($data['passphrase']);
        }
        if (\array_key_exists('meshRadioIdx', $data)) {
            $object->setMeshRadioIdx($data['meshRadioIdx']);
        }
        if (\array_key_exists('zeroTouchStatus', $data)) {
            $object->setZeroTouchStatus($data['zeroTouchStatus']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('ssid') && null !== $data->getSsid()) {
            $dataArray['ssid'] = $data->getSsid();
        }
        if ($data->isInitialized('passphrase') && null !== $data->getPassphrase()) {
            $dataArray['passphrase'] = $data->getPassphrase();
        }
        if ($data->isInitialized('meshRadioIdx') && null !== $data->getMeshRadioIdx()) {
            $dataArray['meshRadioIdx'] = $data->getMeshRadioIdx();
        }
        if ($data->isInitialized('zeroTouchStatus') && null !== $data->getZeroTouchStatus()) {
            $dataArray['zeroTouchStatus'] = $data->getZeroTouchStatus();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ZoneMeshConfiguration::class => false];
    }
}