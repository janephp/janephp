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
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('allowSessionOnAccountingFail', $data)) {
            $object->allowSessionOnAccountingFail = $data['allowSessionOnAccountingFail'];
        }
        if (\array_key_exists('gtpNetworkServiceAcessPointIdentifier', $data)) {
            $object->gtpNetworkServiceAcessPointIdentifier = $data['gtpNetworkServiceAcessPointIdentifier'];
        }
        if (\array_key_exists('imeiInGtp', $data)) {
            $object->imeiInGtp = $data['imeiInGtp'];
        }
        if (\array_key_exists('scgRaiInGtpV2', $data)) {
            $object->scgRaiInGtpV2 = $data['scgRaiInGtpV2'];
        }
        if (\array_key_exists('scgSaiInGtpV2', $data)) {
            $object->scgSaiInGtpV2 = $data['scgSaiInGtpV2'];
        }
        if (\array_key_exists('ecgiInGtpV2', $data)) {
            $object->ecgiInGtpV2 = $data['ecgiInGtpV2'];
        }
        if (\array_key_exists('taiInGtpV2', $data)) {
            $object->taiInGtpV2 = $data['taiInGtpV2'];
        }
        if (\array_key_exists('gtpInterfaceType', $data)) {
            $object->gtpInterfaceType = $data['gtpInterfaceType'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('allowSessionOnAccountingFail', get_object_vars($data)) && null !== ($data->allowSessionOnAccountingFail ?? null)) {
            $dataArray['allowSessionOnAccountingFail'] = $data->allowSessionOnAccountingFail ?? null;
        }
        if (array_key_exists('gtpNetworkServiceAcessPointIdentifier', get_object_vars($data)) && null !== ($data->gtpNetworkServiceAcessPointIdentifier ?? null)) {
            $dataArray['gtpNetworkServiceAcessPointIdentifier'] = $data->gtpNetworkServiceAcessPointIdentifier ?? null;
        }
        if (array_key_exists('imeiInGtp', get_object_vars($data)) && null !== ($data->imeiInGtp ?? null)) {
            $dataArray['imeiInGtp'] = $data->imeiInGtp ?? null;
        }
        if (array_key_exists('scgRaiInGtpV2', get_object_vars($data)) && null !== ($data->scgRaiInGtpV2 ?? null)) {
            $dataArray['scgRaiInGtpV2'] = $data->scgRaiInGtpV2 ?? null;
        }
        if (array_key_exists('scgSaiInGtpV2', get_object_vars($data)) && null !== ($data->scgSaiInGtpV2 ?? null)) {
            $dataArray['scgSaiInGtpV2'] = $data->scgSaiInGtpV2 ?? null;
        }
        if (array_key_exists('ecgiInGtpV2', get_object_vars($data)) && null !== ($data->ecgiInGtpV2 ?? null)) {
            $dataArray['ecgiInGtpV2'] = $data->ecgiInGtpV2 ?? null;
        }
        if (array_key_exists('taiInGtpV2', get_object_vars($data)) && null !== ($data->taiInGtpV2 ?? null)) {
            $dataArray['taiInGtpV2'] = $data->taiInGtpV2 ?? null;
        }
        if (array_key_exists('gtpInterfaceType', get_object_vars($data)) && null !== ($data->gtpInterfaceType ?? null)) {
            $dataArray['gtpInterfaceType'] = $data->gtpInterfaceType ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemGatewayAdvanced::class => false];
    }
}