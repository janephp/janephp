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
class SystemFtpNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtp::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtp::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->setTenantId($data['tenantId']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('ftpHost', $data)) {
            $object->setFtpHost($data['ftpHost']);
        }
        if (\array_key_exists('ftpPort', $data)) {
            $object->setFtpPort($data['ftpPort']);
        }
        if (\array_key_exists('ftpRemoteDirectory', $data)) {
            $object->setFtpRemoteDirectory($data['ftpRemoteDirectory']);
        }
        if (\array_key_exists('ftpUserName', $data)) {
            $object->setFtpUserName($data['ftpUserName']);
        }
        if (\array_key_exists('ftpPassword', $data)) {
            $object->setFtpPassword($data['ftpPassword']);
        }
        if (\array_key_exists('creatorUUID', $data)) {
            $object->setCreatorUUID($data['creatorUUID']);
        }
        if (\array_key_exists('createDatetime', $data)) {
            $object->setCreateDatetime($data['createDatetime']);
        }
        if (\array_key_exists('lastModifiedBy', $data)) {
            $object->setLastModifiedBy($data['lastModifiedBy']);
        }
        if (\array_key_exists('lastModifiedOn', $data)) {
            $object->setLastModifiedOn($data['lastModifiedOn']);
        }
        if (\array_key_exists('ftpName', $data)) {
            $object->setFtpName($data['ftpName']);
        }
        if (\array_key_exists('ftpProtocol', $data)) {
            $object->setFtpProtocol($data['ftpProtocol']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('tenantId') && null !== $data->getTenantId()) {
            $dataArray['tenantId'] = $data->getTenantId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('ftpHost') && null !== $data->getFtpHost()) {
            $dataArray['ftpHost'] = $data->getFtpHost();
        }
        if ($data->isInitialized('ftpPort') && null !== $data->getFtpPort()) {
            $dataArray['ftpPort'] = $data->getFtpPort();
        }
        if ($data->isInitialized('ftpRemoteDirectory') && null !== $data->getFtpRemoteDirectory()) {
            $dataArray['ftpRemoteDirectory'] = $data->getFtpRemoteDirectory();
        }
        if ($data->isInitialized('ftpUserName') && null !== $data->getFtpUserName()) {
            $dataArray['ftpUserName'] = $data->getFtpUserName();
        }
        if ($data->isInitialized('ftpPassword') && null !== $data->getFtpPassword()) {
            $dataArray['ftpPassword'] = $data->getFtpPassword();
        }
        if ($data->isInitialized('creatorUUID') && null !== $data->getCreatorUUID()) {
            $dataArray['creatorUUID'] = $data->getCreatorUUID();
        }
        if ($data->isInitialized('createDatetime') && null !== $data->getCreateDatetime()) {
            $dataArray['createDatetime'] = $data->getCreateDatetime();
        }
        if ($data->isInitialized('lastModifiedBy') && null !== $data->getLastModifiedBy()) {
            $dataArray['lastModifiedBy'] = $data->getLastModifiedBy();
        }
        if ($data->isInitialized('lastModifiedOn') && null !== $data->getLastModifiedOn()) {
            $dataArray['lastModifiedOn'] = $data->getLastModifiedOn();
        }
        if ($data->isInitialized('ftpName') && null !== $data->getFtpName()) {
            $dataArray['ftpName'] = $data->getFtpName();
        }
        if ($data->isInitialized('ftpProtocol') && null !== $data->getFtpProtocol()) {
            $dataArray['ftpProtocol'] = $data->getFtpProtocol();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\SystemFtp::class => false];
    }
}