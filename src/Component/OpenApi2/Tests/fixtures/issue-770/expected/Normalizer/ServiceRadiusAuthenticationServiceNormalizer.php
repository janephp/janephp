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
class ServiceRadiusAuthenticationServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAuthenticationService::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAuthenticationService::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAuthenticationService();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('locationDeliveryEnabled', $data) && \is_int($data['locationDeliveryEnabled'])) {
            $data['locationDeliveryEnabled'] = (bool) $data['locationDeliveryEnabled'];
        }
        if (\array_key_exists('standbyServerEnabled', $data) && \is_int($data['standbyServerEnabled'])) {
            $data['standbyServerEnabled'] = (bool) $data['standbyServerEnabled'];
        }
        if (\array_key_exists('tlsEnabled', $data) && \is_int($data['tlsEnabled'])) {
            $data['tlsEnabled'] = (bool) $data['tlsEnabled'];
        }
        if (\array_key_exists('standbyTlsEnabled', $data) && \is_int($data['standbyTlsEnabled'])) {
            $data['standbyTlsEnabled'] = (bool) $data['standbyTlsEnabled'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->mvnoId = $data['mvnoId'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('friendlyName', $data)) {
            $object->friendlyName = $data['friendlyName'];
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('locationDeliveryEnabled', $data)) {
            $object->locationDeliveryEnabled = $data['locationDeliveryEnabled'];
        }
        if (\array_key_exists('primary', $data)) {
            $object->primary = $this->denormalizer->denormalize($data['primary'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRadiusServerWhenTlsEnabled::class, 'json', $context);
        }
        if (\array_key_exists('secondary', $data)) {
            $object->secondary = $this->denormalizer->denormalize($data['secondary'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceSecondaryRadiusServer::class, 'json', $context);
        }
        if (\array_key_exists('healthCheckPolicy', $data)) {
            $object->healthCheckPolicy = $this->denormalizer->denormalize($data['healthCheckPolicy'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonHealthCheckPolicy::class, 'json', $context);
        }
        if (\array_key_exists('rateLimiting', $data)) {
            $object->rateLimiting = $this->denormalizer->denormalize($data['rateLimiting'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRateLimiting::class, 'json', $context);
        }
        if (\array_key_exists('mappings', $data)) {
            $values = [];
            foreach ($data['mappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceGroupAttrIdentityUserRoleMapping::class, 'json', $context);
            }
            $object->mappings = $values;
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->createDateTime = $data['createDateTime'];
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->modifiedDateTime = $data['modifiedDateTime'];
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->creatorId = $data['creatorId'];
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->modifierId = $data['modifierId'];
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->creatorUsername = $data['creatorUsername'];
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->modifierUsername = $data['modifierUsername'];
        }
        if (\array_key_exists('standbyPrimary', $data)) {
            $object->standbyPrimary = $this->denormalizer->denormalize($data['standbyPrimary'], \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonRadiusServerWhenTlsEnabled::class, 'json', $context);
        }
        if (\array_key_exists('standbyServerEnabled', $data)) {
            $object->standbyServerEnabled = $data['standbyServerEnabled'];
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->tlsEnabled = $data['tlsEnabled'];
        }
        if (\array_key_exists('ocspUrl', $data)) {
            $object->ocspUrl = $data['ocspUrl'];
        }
        if (\array_key_exists('cnSanIdentity', $data)) {
            $object->cnSanIdentity = $data['cnSanIdentity'];
        }
        if (\array_key_exists('clientCertId', $data)) {
            $object->clientCertId = $data['clientCertId'];
        }
        if (\array_key_exists('serverCertId', $data)) {
            $object->serverCertId = $data['serverCertId'];
        }
        if (\array_key_exists('standbyTlsEnabled', $data)) {
            $object->standbyTlsEnabled = $data['standbyTlsEnabled'];
        }
        if (\array_key_exists('standbyOcspUrl', $data)) {
            $object->standbyOcspUrl = $data['standbyOcspUrl'];
        }
        if (\array_key_exists('standbyCnSanIdentity', $data)) {
            $object->standbyCnSanIdentity = $data['standbyCnSanIdentity'];
        }
        if (\array_key_exists('standbyClientCertId', $data)) {
            $object->standbyClientCertId = $data['standbyClientCertId'];
        }
        if (\array_key_exists('standbyServerCertId', $data)) {
            $object->standbyServerCertId = $data['standbyServerCertId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('mvnoId', get_object_vars($data)) && null !== ($data->mvnoId ?? null)) {
            $dataArray['mvnoId'] = $data->mvnoId ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('friendlyName', get_object_vars($data)) && null !== ($data->friendlyName ?? null)) {
            $dataArray['friendlyName'] = $data->friendlyName ?? null;
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('type', get_object_vars($data)) && null !== ($data->type ?? null)) {
            $dataArray['type'] = $data->type ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('locationDeliveryEnabled', get_object_vars($data)) && null !== ($data->locationDeliveryEnabled ?? null)) {
            $dataArray['locationDeliveryEnabled'] = $data->locationDeliveryEnabled ?? null;
        }
        if (array_key_exists('primary', get_object_vars($data)) && null !== ($data->primary ?? null)) {
            $dataArray['primary'] = ($data->primary ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->primary ?? null, 'json', $context));
        }
        if (array_key_exists('secondary', get_object_vars($data)) && null !== ($data->secondary ?? null)) {
            $dataArray['secondary'] = ($data->secondary ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->secondary ?? null, 'json', $context));
        }
        if (array_key_exists('healthCheckPolicy', get_object_vars($data)) && null !== ($data->healthCheckPolicy ?? null)) {
            $dataArray['healthCheckPolicy'] = ($data->healthCheckPolicy ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->healthCheckPolicy ?? null, 'json', $context));
        }
        if (array_key_exists('rateLimiting', get_object_vars($data)) && null !== ($data->rateLimiting ?? null)) {
            $dataArray['rateLimiting'] = ($data->rateLimiting ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->rateLimiting ?? null, 'json', $context));
        }
        if (array_key_exists('mappings', get_object_vars($data)) && null !== ($data->mappings ?? null)) {
            $values = [];
            foreach ($data->mappings ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['mappings'] = $values;
        }
        if (array_key_exists('createDateTime', get_object_vars($data)) && null !== ($data->createDateTime ?? null)) {
            $dataArray['createDateTime'] = $data->createDateTime ?? null;
        }
        if (array_key_exists('modifiedDateTime', get_object_vars($data)) && null !== ($data->modifiedDateTime ?? null)) {
            $dataArray['modifiedDateTime'] = $data->modifiedDateTime ?? null;
        }
        if (array_key_exists('creatorId', get_object_vars($data)) && null !== ($data->creatorId ?? null)) {
            $dataArray['creatorId'] = $data->creatorId ?? null;
        }
        if (array_key_exists('modifierId', get_object_vars($data)) && null !== ($data->modifierId ?? null)) {
            $dataArray['modifierId'] = $data->modifierId ?? null;
        }
        if (array_key_exists('creatorUsername', get_object_vars($data)) && null !== ($data->creatorUsername ?? null)) {
            $dataArray['creatorUsername'] = $data->creatorUsername ?? null;
        }
        if (array_key_exists('modifierUsername', get_object_vars($data)) && null !== ($data->modifierUsername ?? null)) {
            $dataArray['modifierUsername'] = $data->modifierUsername ?? null;
        }
        if (array_key_exists('standbyPrimary', get_object_vars($data)) && null !== ($data->standbyPrimary ?? null)) {
            $dataArray['standbyPrimary'] = ($data->standbyPrimary ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($data->standbyPrimary ?? null, 'json', $context));
        }
        if (array_key_exists('standbyServerEnabled', get_object_vars($data)) && null !== ($data->standbyServerEnabled ?? null)) {
            $dataArray['standbyServerEnabled'] = $data->standbyServerEnabled ?? null;
        }
        if (array_key_exists('tlsEnabled', get_object_vars($data)) && null !== ($data->tlsEnabled ?? null)) {
            $dataArray['tlsEnabled'] = $data->tlsEnabled ?? null;
        }
        if (array_key_exists('ocspUrl', get_object_vars($data)) && null !== ($data->ocspUrl ?? null)) {
            $dataArray['ocspUrl'] = $data->ocspUrl ?? null;
        }
        if (array_key_exists('cnSanIdentity', get_object_vars($data)) && null !== ($data->cnSanIdentity ?? null)) {
            $dataArray['cnSanIdentity'] = $data->cnSanIdentity ?? null;
        }
        if (array_key_exists('clientCertId', get_object_vars($data)) && null !== ($data->clientCertId ?? null)) {
            $dataArray['clientCertId'] = $data->clientCertId ?? null;
        }
        if (array_key_exists('serverCertId', get_object_vars($data)) && null !== ($data->serverCertId ?? null)) {
            $dataArray['serverCertId'] = $data->serverCertId ?? null;
        }
        if (array_key_exists('standbyTlsEnabled', get_object_vars($data)) && null !== ($data->standbyTlsEnabled ?? null)) {
            $dataArray['standbyTlsEnabled'] = $data->standbyTlsEnabled ?? null;
        }
        if (array_key_exists('standbyOcspUrl', get_object_vars($data)) && null !== ($data->standbyOcspUrl ?? null)) {
            $dataArray['standbyOcspUrl'] = $data->standbyOcspUrl ?? null;
        }
        if (array_key_exists('standbyCnSanIdentity', get_object_vars($data)) && null !== ($data->standbyCnSanIdentity ?? null)) {
            $dataArray['standbyCnSanIdentity'] = $data->standbyCnSanIdentity ?? null;
        }
        if (array_key_exists('standbyClientCertId', get_object_vars($data)) && null !== ($data->standbyClientCertId ?? null)) {
            $dataArray['standbyClientCertId'] = $data->standbyClientCertId ?? null;
        }
        if (array_key_exists('standbyServerCertId', get_object_vars($data)) && null !== ($data->standbyServerCertId ?? null)) {
            $dataArray['standbyServerCertId'] = $data->standbyServerCertId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ServiceRadiusAuthenticationService::class => false];
    }
}