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
class PortalserviceCreateHotspotSmartClientOnlyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotSmartClientOnly::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotSmartClientOnly::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotSmartClientOnly();
        if (\array_key_exists('httpsRedirect', $data) && \is_int($data['httpsRedirect'])) {
            $data['httpsRedirect'] = (bool) $data['httpsRedirect'];
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
        if (\array_key_exists('smartClientInfo', $data)) {
            $object->setSmartClientInfo($data['smartClientInfo']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($this->denormalizer->denormalize($data['location'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalLocation::class, 'json', $context));
        }
        if (\array_key_exists('redirect', $data)) {
            $object->setRedirect($this->denormalizer->denormalize($data['redirect'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalRedirect::class, 'json', $context));
        }
        if (\array_key_exists('userSession', $data)) {
            $object->setUserSession($this->denormalizer->denormalize($data['userSession'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceUserSession::class, 'json', $context));
        }
        if (\array_key_exists('walledGardens', $data)) {
            $values = [];
            foreach ($data['walledGardens'] as $value) {
                $values[] = $value;
            }
            $object->setWalledGardens($values);
        }
        if (\array_key_exists('trafficClassProfileId', $data)) {
            $object->setTrafficClassProfileId($data['trafficClassProfileId']);
        }
        if (\array_key_exists('signatureSigningKey', $data)) {
            $object->setSignatureSigningKey($data['signatureSigningKey']);
        }
        if (\array_key_exists('internalNode', $data)) {
            $object->setInternalNode($data['internalNode']);
        }
        if (\array_key_exists('macAddressFormat', $data)) {
            $object->setMacAddressFormat($data['macAddressFormat']);
        }
        if (\array_key_exists('httpsRedirect', $data)) {
            $object->setHttpsRedirect($data['httpsRedirect']);
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
        $dataArray['smartClientInfo'] = $data->getSmartClientInfo();
        if ($data->isInitialized('location') && null !== $data->getLocation()) {
            $dataArray['location'] = $this->normalizer->normalize($data->getLocation(), 'json', $context);
        }
        if ($data->isInitialized('redirect') && null !== $data->getRedirect()) {
            $dataArray['redirect'] = $this->normalizer->normalize($data->getRedirect(), 'json', $context);
        }
        if ($data->isInitialized('userSession') && null !== $data->getUserSession()) {
            $dataArray['userSession'] = $this->normalizer->normalize($data->getUserSession(), 'json', $context);
        }
        if ($data->isInitialized('walledGardens') && null !== $data->getWalledGardens()) {
            $values = [];
            foreach ($data->getWalledGardens() as $value) {
                $values[] = $value;
            }
            $dataArray['walledGardens'] = $values;
        }
        if ($data->isInitialized('trafficClassProfileId') && null !== $data->getTrafficClassProfileId()) {
            $dataArray['trafficClassProfileId'] = $data->getTrafficClassProfileId();
        }
        if ($data->isInitialized('signatureSigningKey') && null !== $data->getSignatureSigningKey()) {
            $dataArray['signatureSigningKey'] = $data->getSignatureSigningKey();
        }
        if ($data->isInitialized('internalNode') && null !== $data->getInternalNode()) {
            $dataArray['internalNode'] = $data->getInternalNode();
        }
        $dataArray['macAddressFormat'] = $data->getMacAddressFormat();
        if ($data->isInitialized('httpsRedirect') && null !== $data->getHttpsRedirect()) {
            $dataArray['httpsRedirect'] = $data->getHttpsRedirect();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceCreateHotspotSmartClientOnly::class => false];
    }
}