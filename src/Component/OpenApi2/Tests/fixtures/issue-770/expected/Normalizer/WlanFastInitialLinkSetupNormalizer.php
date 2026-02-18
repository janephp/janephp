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
class WlanFastInitialLinkSetupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanFastInitialLinkSetup::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanFastInitialLinkSetup::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanFastInitialLinkSetup();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('encryptionType', $data)) {
            $object->setEncryptionType($data['encryptionType']);
        }
        if (\array_key_exists('dhcpServerIp', $data)) {
            $object->setDhcpServerIp($data['dhcpServerIp']);
        }
        if (\array_key_exists('hlpTimeout', $data)) {
            $object->setHlpTimeout($data['hlpTimeout']);
        }
        if (\array_key_exists('realmProfileId', $data)) {
            $object->setRealmProfileId($data['realmProfileId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['encryptionType'] = $data->getEncryptionType();
        $dataArray['dhcpServerIp'] = $data->getDhcpServerIp();
        if ($data->isInitialized('hlpTimeout') && null !== $data->getHlpTimeout()) {
            $dataArray['hlpTimeout'] = $data->getHlpTimeout();
        }
        if ($data->isInitialized('realmProfileId') && null !== $data->getRealmProfileId()) {
            $dataArray['realmProfileId'] = $data->getRealmProfileId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanFastInitialLinkSetup::class => false];
    }
}