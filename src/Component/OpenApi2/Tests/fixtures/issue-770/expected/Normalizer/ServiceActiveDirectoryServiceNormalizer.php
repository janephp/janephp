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
class ServiceActiveDirectoryServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceActiveDirectoryService::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceActiveDirectoryService::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceActiveDirectoryService();
        if (\array_key_exists('tlsEnabled', $data) && \is_int($data['tlsEnabled'])) {
            $data['tlsEnabled'] = (bool) $data['tlsEnabled'];
        }
        if (\array_key_exists('globalCatalogEnabled', $data) && \is_int($data['globalCatalogEnabled'])) {
            $data['globalCatalogEnabled'] = (bool) $data['globalCatalogEnabled'];
        }
        if (\array_key_exists('standbyServerEnabled', $data) && \is_int($data['standbyServerEnabled'])) {
            $data['standbyServerEnabled'] = (bool) $data['standbyServerEnabled'];
        }
        if (\array_key_exists('standbyTlsEnabled', $data) && \is_int($data['standbyTlsEnabled'])) {
            $data['standbyTlsEnabled'] = (bool) $data['standbyTlsEnabled'];
        }
        if (\array_key_exists('standbyGlobalCatalogEnabled', $data) && \is_int($data['standbyGlobalCatalogEnabled'])) {
            $data['standbyGlobalCatalogEnabled'] = (bool) $data['standbyGlobalCatalogEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('mvnoId', $data)) {
            $object->setMvnoId($data['mvnoId']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('friendlyName', $data)) {
            $object->setFriendlyName($data['friendlyName']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('ip', $data)) {
            $object->setIp($data['ip']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
        }
        if (\array_key_exists('windowsDomainName', $data)) {
            $object->setWindowsDomainName($data['windowsDomainName']);
        }
        if (\array_key_exists('adminDomainName', $data)) {
            $object->setAdminDomainName($data['adminDomainName']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
        }
        if (\array_key_exists('tlsEnabled', $data)) {
            $object->setTlsEnabled($data['tlsEnabled']);
        }
        if (\array_key_exists('cnIdentity', $data)) {
            $object->setCnIdentity($data['cnIdentity']);
        }
        if (\array_key_exists('globalCatalogEnabled', $data)) {
            $object->setGlobalCatalogEnabled($data['globalCatalogEnabled']);
        }
        if (\array_key_exists('mappings', $data)) {
            $values = [];
            foreach ($data['mappings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Model\ServiceGroupAttrIdentityUserRoleMapping::class, 'json', $context);
            }
            $object->setMappings($values);
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        if (\array_key_exists('standbyServerEnabled', $data)) {
            $object->setStandbyServerEnabled($data['standbyServerEnabled']);
        }
        if (\array_key_exists('standbyIp', $data)) {
            $object->setStandbyIp($data['standbyIp']);
        }
        if (\array_key_exists('standbyPort', $data)) {
            $object->setStandbyPort($data['standbyPort']);
        }
        if (\array_key_exists('standbyWindowsDomainName', $data)) {
            $object->setStandbyWindowsDomainName($data['standbyWindowsDomainName']);
        }
        if (\array_key_exists('standbyAdminDomainName', $data)) {
            $object->setStandbyAdminDomainName($data['standbyAdminDomainName']);
        }
        if (\array_key_exists('standbyPassword', $data)) {
            $object->setStandbyPassword($data['standbyPassword']);
        }
        if (\array_key_exists('standbyTlsEnabled', $data)) {
            $object->setStandbyTlsEnabled($data['standbyTlsEnabled']);
        }
        if (\array_key_exists('standbyCnIdentity', $data)) {
            $object->setStandbyCnIdentity($data['standbyCnIdentity']);
        }
        if (\array_key_exists('standbyGlobalCatalogEnabled', $data)) {
            $object->setStandbyGlobalCatalogEnabled($data['standbyGlobalCatalogEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('mvnoId') && null !== $data->getMvnoId()) {
            $dataArray['mvnoId'] = $data->getMvnoId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('protocol') && null !== $data->getProtocol()) {
            $dataArray['protocol'] = $data->getProtocol();
        }
        if ($data->isInitialized('type') && null !== $data->getType()) {
            $dataArray['type'] = $data->getType();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('friendlyName') && null !== $data->getFriendlyName()) {
            $dataArray['friendlyName'] = $data->getFriendlyName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('ip') && null !== $data->getIp()) {
            $dataArray['ip'] = $data->getIp();
        }
        if ($data->isInitialized('port') && null !== $data->getPort()) {
            $dataArray['port'] = $data->getPort();
        }
        if ($data->isInitialized('windowsDomainName') && null !== $data->getWindowsDomainName()) {
            $dataArray['windowsDomainName'] = $data->getWindowsDomainName();
        }
        if ($data->isInitialized('adminDomainName') && null !== $data->getAdminDomainName()) {
            $dataArray['adminDomainName'] = $data->getAdminDomainName();
        }
        if ($data->isInitialized('password') && null !== $data->getPassword()) {
            $dataArray['password'] = $data->getPassword();
        }
        if ($data->isInitialized('tlsEnabled') && null !== $data->getTlsEnabled()) {
            $dataArray['tlsEnabled'] = $data->getTlsEnabled();
        }
        if ($data->isInitialized('cnIdentity') && null !== $data->getCnIdentity()) {
            $dataArray['cnIdentity'] = $data->getCnIdentity();
        }
        if ($data->isInitialized('globalCatalogEnabled') && null !== $data->getGlobalCatalogEnabled()) {
            $dataArray['globalCatalogEnabled'] = $data->getGlobalCatalogEnabled();
        }
        if ($data->isInitialized('mappings') && null !== $data->getMappings()) {
            $values = [];
            foreach ($data->getMappings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['mappings'] = $values;
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        if ($data->isInitialized('standbyServerEnabled') && null !== $data->getStandbyServerEnabled()) {
            $dataArray['standbyServerEnabled'] = $data->getStandbyServerEnabled();
        }
        if ($data->isInitialized('standbyIp') && null !== $data->getStandbyIp()) {
            $dataArray['standbyIp'] = $data->getStandbyIp();
        }
        if ($data->isInitialized('standbyPort') && null !== $data->getStandbyPort()) {
            $dataArray['standbyPort'] = $data->getStandbyPort();
        }
        if ($data->isInitialized('standbyWindowsDomainName') && null !== $data->getStandbyWindowsDomainName()) {
            $dataArray['standbyWindowsDomainName'] = $data->getStandbyWindowsDomainName();
        }
        if ($data->isInitialized('standbyAdminDomainName') && null !== $data->getStandbyAdminDomainName()) {
            $dataArray['standbyAdminDomainName'] = $data->getStandbyAdminDomainName();
        }
        if ($data->isInitialized('standbyPassword') && null !== $data->getStandbyPassword()) {
            $dataArray['standbyPassword'] = $data->getStandbyPassword();
        }
        if ($data->isInitialized('standbyTlsEnabled') && null !== $data->getStandbyTlsEnabled()) {
            $dataArray['standbyTlsEnabled'] = $data->getStandbyTlsEnabled();
        }
        if ($data->isInitialized('standbyCnIdentity') && null !== $data->getStandbyCnIdentity()) {
            $dataArray['standbyCnIdentity'] = $data->getStandbyCnIdentity();
        }
        if ($data->isInitialized('standbyGlobalCatalogEnabled') && null !== $data->getStandbyGlobalCatalogEnabled()) {
            $dataArray['standbyGlobalCatalogEnabled'] = $data->getStandbyGlobalCatalogEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\ServiceActiveDirectoryService::class => false];
    }
}