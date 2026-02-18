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
class SystemGatewayAdvancedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced();
        if (\array_key_exists('allowSessionOnAccountingFail', $data) && \is_int($data['allowSessionOnAccountingFail'])) {
            $data['allowSessionOnAccountingFail'] = (bool) $data['allowSessionOnAccountingFail'];
        }
        if (\array_key_exists('imeiInGtp', $data) && \is_int($data['imeiInGtp'])) {
            $data['imeiInGtp'] = (bool) $data['imeiInGtp'];
        }
        if (\array_key_exists('scgRaiInGtpV2', $data) && \is_int($data['scgRaiInGtpV2'])) {
            $data['scgRaiInGtpV2'] = (bool) $data['scgRaiInGtpV2'];
        }
        if (\array_key_exists('scgSaiInGtpV2', $data) && \is_int($data['scgSaiInGtpV2'])) {
            $data['scgSaiInGtpV2'] = (bool) $data['scgSaiInGtpV2'];
        }
        if (\array_key_exists('ecgiInGtpV2', $data) && \is_int($data['ecgiInGtpV2'])) {
            $data['ecgiInGtpV2'] = (bool) $data['ecgiInGtpV2'];
        }
        if (\array_key_exists('taiInGtpV2', $data) && \is_int($data['taiInGtpV2'])) {
            $data['taiInGtpV2'] = (bool) $data['taiInGtpV2'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowSessionOnAccountingFail', $data)) {
            $object->setAllowSessionOnAccountingFail($data['allowSessionOnAccountingFail']);
        }
        if (\array_key_exists('gtpNetworkServiceAcessPointIdentifier', $data)) {
            $object->setGtpNetworkServiceAcessPointIdentifier($data['gtpNetworkServiceAcessPointIdentifier']);
        }
        if (\array_key_exists('imeiInGtp', $data)) {
            $object->setImeiInGtp($data['imeiInGtp']);
        }
        if (\array_key_exists('scgRaiInGtpV2', $data)) {
            $object->setScgRaiInGtpV2($data['scgRaiInGtpV2']);
        }
        if (\array_key_exists('scgSaiInGtpV2', $data)) {
            $object->setScgSaiInGtpV2($data['scgSaiInGtpV2']);
        }
        if (\array_key_exists('ecgiInGtpV2', $data)) {
            $object->setEcgiInGtpV2($data['ecgiInGtpV2']);
        }
        if (\array_key_exists('taiInGtpV2', $data)) {
            $object->setTaiInGtpV2($data['taiInGtpV2']);
        }
        if (\array_key_exists('gtpInterfaceType', $data)) {
            $object->setGtpInterfaceType($data['gtpInterfaceType']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('allowSessionOnAccountingFail') && null !== $data->getAllowSessionOnAccountingFail()) {
            $dataArray['allowSessionOnAccountingFail'] = $data->getAllowSessionOnAccountingFail();
        }
        if ($data->isInitialized('gtpNetworkServiceAcessPointIdentifier') && null !== $data->getGtpNetworkServiceAcessPointIdentifier()) {
            $dataArray['gtpNetworkServiceAcessPointIdentifier'] = $data->getGtpNetworkServiceAcessPointIdentifier();
        }
        if ($data->isInitialized('imeiInGtp') && null !== $data->getImeiInGtp()) {
            $dataArray['imeiInGtp'] = $data->getImeiInGtp();
        }
        if ($data->isInitialized('scgRaiInGtpV2') && null !== $data->getScgRaiInGtpV2()) {
            $dataArray['scgRaiInGtpV2'] = $data->getScgRaiInGtpV2();
        }
        if ($data->isInitialized('scgSaiInGtpV2') && null !== $data->getScgSaiInGtpV2()) {
            $dataArray['scgSaiInGtpV2'] = $data->getScgSaiInGtpV2();
        }
        if ($data->isInitialized('ecgiInGtpV2') && null !== $data->getEcgiInGtpV2()) {
            $dataArray['ecgiInGtpV2'] = $data->getEcgiInGtpV2();
        }
        if ($data->isInitialized('taiInGtpV2') && null !== $data->getTaiInGtpV2()) {
            $dataArray['taiInGtpV2'] = $data->getTaiInGtpV2();
        }
        if ($data->isInitialized('gtpInterfaceType') && null !== $data->getGtpInterfaceType()) {
            $dataArray['gtpInterfaceType'] = $data->getGtpInterfaceType();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced::class => false];
    }
}