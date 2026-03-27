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
class CommonQueryCriteriaOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('auth_includeNa', $data) && \is_int($data['auth_includeNa'])) {
            $data['auth_includeNa'] = (bool) $data['auth_includeNa'];
        }
        if (\array_key_exists('auth_includeLocalDb', $data) && \is_int($data['auth_includeLocalDb'])) {
            $data['auth_includeLocalDb'] = (bool) $data['auth_includeLocalDb'];
        }
        if (\array_key_exists('auth_includeGuest', $data) && \is_int($data['auth_includeGuest'])) {
            $data['auth_includeGuest'] = (bool) $data['auth_includeGuest'];
        }
        if (\array_key_exists('auth_includeAdGlobal', $data) && \is_int($data['auth_includeAdGlobal'])) {
            $data['auth_includeAdGlobal'] = (bool) $data['auth_includeAdGlobal'];
        }
        if (\array_key_exists('auth_testableOnly', $data) && \is_int($data['auth_testableOnly'])) {
            $data['auth_testableOnly'] = (bool) $data['auth_testableOnly'];
        }
        if (\array_key_exists('acct_testableOnly', $data) && \is_int($data['acct_testableOnly'])) {
            $data['acct_testableOnly'] = (bool) $data['acct_testableOnly'];
        }
        if (\array_key_exists('acct_includeNa', $data) && \is_int($data['acct_includeNa'])) {
            $data['acct_includeNa'] = (bool) $data['acct_includeNa'];
        }
        if (\array_key_exists('includeSharedResources', $data) && \is_int($data['includeSharedResources'])) {
            $data['includeSharedResources'] = (bool) $data['includeSharedResources'];
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data) && \is_int($data['INCLUDE_RBAC_METADATA'])) {
            $data['INCLUDE_RBAC_METADATA'] = (bool) $data['INCLUDE_RBAC_METADATA'];
        }
        if (\array_key_exists('inMap', $data) && \is_int($data['inMap'])) {
            $data['inMap'] = (bool) $data['inMap'];
        }
        if (\array_key_exists('auth_hostedAaaSupportedEnabled', $data) && \is_int($data['auth_hostedAaaSupportedEnabled'])) {
            $data['auth_hostedAaaSupportedEnabled'] = (bool) $data['auth_hostedAaaSupportedEnabled'];
        }
        if (\array_key_exists('auth_plmnIdentifierEnabled', $data) && \is_int($data['auth_plmnIdentifierEnabled'])) {
            $data['auth_plmnIdentifierEnabled'] = (bool) $data['auth_plmnIdentifierEnabled'];
        }
        if (\array_key_exists('includeUsers', $data) && \is_int($data['includeUsers'])) {
            $data['includeUsers'] = (bool) $data['includeUsers'];
        }
        if (\array_key_exists('includeUserClickNode', $data) && \is_int($data['includeUserClickNode'])) {
            $data['includeUserClickNode'] = (bool) $data['includeUserClickNode'];
        }
        if (\array_key_exists('auth_includeNa', $data)) {
            $object->setAuthIncludeNa($data['auth_includeNa']);
        }
        if (\array_key_exists('auth_includeLocalDb', $data)) {
            $object->setAuthIncludeLocalDb($data['auth_includeLocalDb']);
        }
        if (\array_key_exists('auth_includeGuest', $data)) {
            $object->setAuthIncludeGuest($data['auth_includeGuest']);
        }
        if (\array_key_exists('auth_includeAdGlobal', $data)) {
            $object->setAuthIncludeAdGlobal($data['auth_includeAdGlobal']);
        }
        if (\array_key_exists('auth_type', $data)) {
            $object->setAuthType($data['auth_type']);
        }
        if (\array_key_exists('auth_realmType', $data)) {
            $object->setAuthRealmType($data['auth_realmType']);
        }
        if (\array_key_exists('acct_type', $data)) {
            $object->setAcctType($data['acct_type']);
        }
        if (\array_key_exists('auth_testableOnly', $data)) {
            $object->setAuthTestableOnly($data['auth_testableOnly']);
        }
        if (\array_key_exists('acct_testableOnly', $data)) {
            $object->setAcctTestableOnly($data['acct_testableOnly']);
        }
        if (\array_key_exists('acct_includeNa', $data)) {
            $object->setAcctIncludeNa($data['acct_includeNa']);
        }
        if (\array_key_exists('forwarding_type', $data)) {
            $object->setForwardingType($data['forwarding_type']);
        }
        if (\array_key_exists('includeSharedResources', $data)) {
            $object->setIncludeSharedResources($data['includeSharedResources']);
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data)) {
            $object->setINCLUDERBACMETADATA($data['INCLUDE_RBAC_METADATA']);
        }
        if (\array_key_exists('TENANT_ID', $data)) {
            $object->setTENANTID($data['TENANT_ID']);
        }
        if (\array_key_exists('inMap', $data)) {
            $object->setInMap($data['inMap']);
        }
        if (\array_key_exists('globalFilterId', $data)) {
            $object->setGlobalFilterId($data['globalFilterId']);
        }
        if (\array_key_exists('auth_hostedAaaSupportedEnabled', $data)) {
            $object->setAuthHostedAaaSupportedEnabled($data['auth_hostedAaaSupportedEnabled']);
        }
        if (\array_key_exists('auth_plmnIdentifierEnabled', $data)) {
            $object->setAuthPlmnIdentifierEnabled($data['auth_plmnIdentifierEnabled']);
        }
        if (\array_key_exists('includeUsers', $data)) {
            $object->setIncludeUsers($data['includeUsers']);
        }
        if (\array_key_exists('includeUserClickNode', $data)) {
            $object->setIncludeUserClickNode($data['includeUserClickNode']);
        }
        if (\array_key_exists('dpGroupFilterId', $data)) {
            $object->setDpGroupFilterId($data['dpGroupFilterId']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('authIncludeNa') && null !== $data->getAuthIncludeNa()) {
            $dataArray['auth_includeNa'] = $data->getAuthIncludeNa();
        }
        if ($data->isInitialized('authIncludeLocalDb') && null !== $data->getAuthIncludeLocalDb()) {
            $dataArray['auth_includeLocalDb'] = $data->getAuthIncludeLocalDb();
        }
        if ($data->isInitialized('authIncludeGuest') && null !== $data->getAuthIncludeGuest()) {
            $dataArray['auth_includeGuest'] = $data->getAuthIncludeGuest();
        }
        if ($data->isInitialized('authIncludeAdGlobal') && null !== $data->getAuthIncludeAdGlobal()) {
            $dataArray['auth_includeAdGlobal'] = $data->getAuthIncludeAdGlobal();
        }
        if ($data->isInitialized('authType') && null !== $data->getAuthType()) {
            $dataArray['auth_type'] = $data->getAuthType();
        }
        if ($data->isInitialized('authRealmType') && null !== $data->getAuthRealmType()) {
            $dataArray['auth_realmType'] = $data->getAuthRealmType();
        }
        if ($data->isInitialized('acctType') && null !== $data->getAcctType()) {
            $dataArray['acct_type'] = $data->getAcctType();
        }
        if ($data->isInitialized('authTestableOnly') && null !== $data->getAuthTestableOnly()) {
            $dataArray['auth_testableOnly'] = $data->getAuthTestableOnly();
        }
        if ($data->isInitialized('acctTestableOnly') && null !== $data->getAcctTestableOnly()) {
            $dataArray['acct_testableOnly'] = $data->getAcctTestableOnly();
        }
        if ($data->isInitialized('acctIncludeNa') && null !== $data->getAcctIncludeNa()) {
            $dataArray['acct_includeNa'] = $data->getAcctIncludeNa();
        }
        if ($data->isInitialized('forwardingType') && null !== $data->getForwardingType()) {
            $dataArray['forwarding_type'] = $data->getForwardingType();
        }
        if ($data->isInitialized('includeSharedResources') && null !== $data->getIncludeSharedResources()) {
            $dataArray['includeSharedResources'] = $data->getIncludeSharedResources();
        }
        if ($data->isInitialized('iNCLUDERBACMETADATA') && null !== $data->getINCLUDERBACMETADATA()) {
            $dataArray['INCLUDE_RBAC_METADATA'] = $data->getINCLUDERBACMETADATA();
        }
        if ($data->isInitialized('tENANTID') && null !== $data->getTENANTID()) {
            $dataArray['TENANT_ID'] = $data->getTENANTID();
        }
        if ($data->isInitialized('inMap') && null !== $data->getInMap()) {
            $dataArray['inMap'] = $data->getInMap();
        }
        if ($data->isInitialized('globalFilterId') && null !== $data->getGlobalFilterId()) {
            $dataArray['globalFilterId'] = $data->getGlobalFilterId();
        }
        if ($data->isInitialized('authHostedAaaSupportedEnabled') && null !== $data->getAuthHostedAaaSupportedEnabled()) {
            $dataArray['auth_hostedAaaSupportedEnabled'] = $data->getAuthHostedAaaSupportedEnabled();
        }
        if ($data->isInitialized('authPlmnIdentifierEnabled') && null !== $data->getAuthPlmnIdentifierEnabled()) {
            $dataArray['auth_plmnIdentifierEnabled'] = $data->getAuthPlmnIdentifierEnabled();
        }
        if ($data->isInitialized('includeUsers') && null !== $data->getIncludeUsers()) {
            $dataArray['includeUsers'] = $data->getIncludeUsers();
        }
        if ($data->isInitialized('includeUserClickNode') && null !== $data->getIncludeUserClickNode()) {
            $dataArray['includeUserClickNode'] = $data->getIncludeUserClickNode();
        }
        if ($data->isInitialized('dpGroupFilterId') && null !== $data->getDpGroupFilterId()) {
            $dataArray['dpGroupFilterId'] = $data->getDpGroupFilterId();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaOptions::class => false];
    }
}