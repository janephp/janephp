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
class PortalserviceHotspotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('httpsRedirect', $data) && \is_int($data['httpsRedirect'])) {
            $data['httpsRedirect'] = (bool) $data['httpsRedirect'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->zoneId = $data['zoneId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('smartClientSupport', $data)) {
            $object->smartClientSupport = $data['smartClientSupport'];
        }
        if (\array_key_exists('smartClientInfo', $data)) {
            $object->smartClientInfo = $data['smartClientInfo'];
        }
        if (\array_key_exists('portalType', $data)) {
            $object->portalType = $data['portalType'];
        }
        if (\array_key_exists('portalUrl', $data)) {
            $object->portalUrl = $data['portalUrl'];
        }
        if (\array_key_exists('backupPortalUrl', $data)) {
            $object->backupPortalUrl = $data['backupPortalUrl'];
        }
        if (\array_key_exists('location', $data)) {
            $object->location = $this->denormalizer->denormalize($data['location'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalLocation::class, 'json', $context);
        }
        if (\array_key_exists('redirect', $data)) {
            $object->redirect = $this->denormalizer->denormalize($data['redirect'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalservicePortalRedirect::class, 'json', $context);
        }
        if (\array_key_exists('portalCustomization', $data)) {
            $object->portalCustomization = $this->denormalizer->denormalize($data['portalCustomization'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization::class, 'json', $context);
        }
        if (\array_key_exists('userSession', $data)) {
            $object->userSession = $this->denormalizer->denormalize($data['userSession'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceUserSession::class, 'json', $context);
        }
        if (\array_key_exists('walledGardens', $data)) {
            $values = [];
            foreach ($data['walledGardens'] as $value) {
                $values[] = $value;
            }
            $object->walledGardens = $values;
        }
        if (\array_key_exists('trafficClassProfileId', $data)) {
            $object->trafficClassProfileId = $data['trafficClassProfileId'];
        }
        if (\array_key_exists('signatureSigningKey', $data)) {
            $object->signatureSigningKey = $data['signatureSigningKey'];
        }
        if (\array_key_exists('internalNode', $data)) {
            $object->internalNode = $data['internalNode'];
        }
        if (\array_key_exists('macAddressFormat', $data)) {
            $object->macAddressFormat = $data['macAddressFormat'];
        }
        if (\array_key_exists('httpsRedirect', $data)) {
            $object->httpsRedirect = $data['httpsRedirect'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id;
        }
        if (array_key_exists('zoneId', get_object_vars($data)) && null !== ($data->zoneId ?? null)) {
            $dataArray['zoneId'] = $data->zoneId;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description;
        }
        if (array_key_exists('smartClientSupport', get_object_vars($data)) && null !== ($data->smartClientSupport ?? null)) {
            $dataArray['smartClientSupport'] = $data->smartClientSupport;
        }
        if (array_key_exists('smartClientInfo', get_object_vars($data)) && null !== ($data->smartClientInfo ?? null)) {
            $dataArray['smartClientInfo'] = $data->smartClientInfo;
        }
        if (array_key_exists('portalType', get_object_vars($data)) && null !== ($data->portalType ?? null)) {
            $dataArray['portalType'] = $data->portalType;
        }
        if (array_key_exists('portalUrl', get_object_vars($data)) && null !== ($data->portalUrl ?? null)) {
            $dataArray['portalUrl'] = $data->portalUrl;
        }
        if (array_key_exists('backupPortalUrl', get_object_vars($data)) && null !== ($data->backupPortalUrl ?? null)) {
            $dataArray['backupPortalUrl'] = $data->backupPortalUrl;
        }
        if (array_key_exists('location', get_object_vars($data)) && null !== ($data->location ?? null)) {
            $normalized = $this->normalizer->normalize($data->location, 'json', $context);
            $dataArray['location'] = \is_iterable($normalized) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized) : $normalized;
        }
        if (array_key_exists('redirect', get_object_vars($data)) && null !== ($data->redirect ?? null)) {
            $normalized_1 = $this->normalizer->normalize($data->redirect, 'json', $context);
            $dataArray['redirect'] = \is_iterable($normalized_1) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_1) : $normalized_1;
        }
        if (array_key_exists('portalCustomization', get_object_vars($data)) && null !== ($data->portalCustomization ?? null)) {
            $normalized_2 = $this->normalizer->normalize($data->portalCustomization, 'json', $context);
            $dataArray['portalCustomization'] = \is_iterable($normalized_2) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_2) : $normalized_2;
        }
        if (array_key_exists('userSession', get_object_vars($data)) && null !== ($data->userSession ?? null)) {
            $normalized_3 = $this->normalizer->normalize($data->userSession, 'json', $context);
            $dataArray['userSession'] = \is_iterable($normalized_3) ? new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($normalized_3) : $normalized_3;
        }
        if (array_key_exists('walledGardens', get_object_vars($data)) && null !== ($data->walledGardens ?? null)) {
            $values = [];
            foreach ($data->walledGardens as $value) {
                $values[] = $value;
            }
            $dataArray['walledGardens'] = $values;
        }
        if (array_key_exists('trafficClassProfileId', get_object_vars($data)) && null !== ($data->trafficClassProfileId ?? null)) {
            $dataArray['trafficClassProfileId'] = $data->trafficClassProfileId;
        }
        if (array_key_exists('signatureSigningKey', get_object_vars($data)) && null !== ($data->signatureSigningKey ?? null)) {
            $dataArray['signatureSigningKey'] = $data->signatureSigningKey;
        }
        if (array_key_exists('internalNode', get_object_vars($data)) && null !== ($data->internalNode ?? null)) {
            $dataArray['internalNode'] = $data->internalNode;
        }
        if (array_key_exists('macAddressFormat', get_object_vars($data)) && null !== ($data->macAddressFormat ?? null)) {
            $dataArray['macAddressFormat'] = $data->macAddressFormat;
        }
        if (array_key_exists('httpsRedirect', get_object_vars($data)) && null !== ($data->httpsRedirect ?? null)) {
            $dataArray['httpsRedirect'] = $data->httpsRedirect;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\PortalserviceHotspot::class => false];
    }
}