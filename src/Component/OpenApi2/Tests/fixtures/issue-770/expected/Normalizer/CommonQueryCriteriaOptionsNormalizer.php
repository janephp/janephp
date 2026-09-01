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
            $object->authIncludeNa = $data['auth_includeNa'];
        }
        if (\array_key_exists('auth_includeLocalDb', $data)) {
            $object->authIncludeLocalDb = $data['auth_includeLocalDb'];
        }
        if (\array_key_exists('auth_includeGuest', $data)) {
            $object->authIncludeGuest = $data['auth_includeGuest'];
        }
        if (\array_key_exists('auth_includeAdGlobal', $data)) {
            $object->authIncludeAdGlobal = $data['auth_includeAdGlobal'];
        }
        if (\array_key_exists('auth_type', $data)) {
            $object->authType = $data['auth_type'];
        }
        if (\array_key_exists('auth_realmType', $data)) {
            $object->authRealmType = $data['auth_realmType'];
        }
        if (\array_key_exists('acct_type', $data)) {
            $object->acctType = $data['acct_type'];
        }
        if (\array_key_exists('auth_testableOnly', $data)) {
            $object->authTestableOnly = $data['auth_testableOnly'];
        }
        if (\array_key_exists('acct_testableOnly', $data)) {
            $object->acctTestableOnly = $data['acct_testableOnly'];
        }
        if (\array_key_exists('acct_includeNa', $data)) {
            $object->acctIncludeNa = $data['acct_includeNa'];
        }
        if (\array_key_exists('forwarding_type', $data)) {
            $object->forwardingType = $data['forwarding_type'];
        }
        if (\array_key_exists('includeSharedResources', $data)) {
            $object->includeSharedResources = $data['includeSharedResources'];
        }
        if (\array_key_exists('INCLUDE_RBAC_METADATA', $data)) {
            $object->iNCLUDERBACMETADATA = $data['INCLUDE_RBAC_METADATA'];
        }
        if (\array_key_exists('TENANT_ID', $data)) {
            $object->tENANTID = $data['TENANT_ID'];
        }
        if (\array_key_exists('inMap', $data)) {
            $object->inMap = $data['inMap'];
        }
        if (\array_key_exists('globalFilterId', $data)) {
            $object->globalFilterId = $data['globalFilterId'];
        }
        if (\array_key_exists('auth_hostedAaaSupportedEnabled', $data)) {
            $object->authHostedAaaSupportedEnabled = $data['auth_hostedAaaSupportedEnabled'];
        }
        if (\array_key_exists('auth_plmnIdentifierEnabled', $data)) {
            $object->authPlmnIdentifierEnabled = $data['auth_plmnIdentifierEnabled'];
        }
        if (\array_key_exists('includeUsers', $data)) {
            $object->includeUsers = $data['includeUsers'];
        }
        if (\array_key_exists('includeUserClickNode', $data)) {
            $object->includeUserClickNode = $data['includeUserClickNode'];
        }
        if (\array_key_exists('dpGroupFilterId', $data)) {
            $object->dpGroupFilterId = $data['dpGroupFilterId'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('authIncludeNa', get_object_vars($data)) && null !== ($data->authIncludeNa ?? null)) {
            $dataArray['auth_includeNa'] = $data->authIncludeNa ?? null;
        }
        if (array_key_exists('authIncludeLocalDb', get_object_vars($data)) && null !== ($data->authIncludeLocalDb ?? null)) {
            $dataArray['auth_includeLocalDb'] = $data->authIncludeLocalDb ?? null;
        }
        if (array_key_exists('authIncludeGuest', get_object_vars($data)) && null !== ($data->authIncludeGuest ?? null)) {
            $dataArray['auth_includeGuest'] = $data->authIncludeGuest ?? null;
        }
        if (array_key_exists('authIncludeAdGlobal', get_object_vars($data)) && null !== ($data->authIncludeAdGlobal ?? null)) {
            $dataArray['auth_includeAdGlobal'] = $data->authIncludeAdGlobal ?? null;
        }
        if (array_key_exists('authType', get_object_vars($data)) && null !== ($data->authType ?? null)) {
            $dataArray['auth_type'] = $data->authType ?? null;
        }
        if (array_key_exists('authRealmType', get_object_vars($data)) && null !== ($data->authRealmType ?? null)) {
            $dataArray['auth_realmType'] = $data->authRealmType ?? null;
        }
        if (array_key_exists('acctType', get_object_vars($data)) && null !== ($data->acctType ?? null)) {
            $dataArray['acct_type'] = $data->acctType ?? null;
        }
        if (array_key_exists('authTestableOnly', get_object_vars($data)) && null !== ($data->authTestableOnly ?? null)) {
            $dataArray['auth_testableOnly'] = $data->authTestableOnly ?? null;
        }
        if (array_key_exists('acctTestableOnly', get_object_vars($data)) && null !== ($data->acctTestableOnly ?? null)) {
            $dataArray['acct_testableOnly'] = $data->acctTestableOnly ?? null;
        }
        if (array_key_exists('acctIncludeNa', get_object_vars($data)) && null !== ($data->acctIncludeNa ?? null)) {
            $dataArray['acct_includeNa'] = $data->acctIncludeNa ?? null;
        }
        if (array_key_exists('forwardingType', get_object_vars($data)) && null !== ($data->forwardingType ?? null)) {
            $dataArray['forwarding_type'] = $data->forwardingType ?? null;
        }
        if (array_key_exists('includeSharedResources', get_object_vars($data)) && null !== ($data->includeSharedResources ?? null)) {
            $dataArray['includeSharedResources'] = $data->includeSharedResources ?? null;
        }
        if (array_key_exists('iNCLUDERBACMETADATA', get_object_vars($data)) && null !== ($data->iNCLUDERBACMETADATA ?? null)) {
            $dataArray['INCLUDE_RBAC_METADATA'] = $data->iNCLUDERBACMETADATA ?? null;
        }
        if (array_key_exists('tENANTID', get_object_vars($data)) && null !== ($data->tENANTID ?? null)) {
            $dataArray['TENANT_ID'] = $data->tENANTID ?? null;
        }
        if (array_key_exists('inMap', get_object_vars($data)) && null !== ($data->inMap ?? null)) {
            $dataArray['inMap'] = $data->inMap ?? null;
        }
        if (array_key_exists('globalFilterId', get_object_vars($data)) && null !== ($data->globalFilterId ?? null)) {
            $dataArray['globalFilterId'] = $data->globalFilterId ?? null;
        }
        if (array_key_exists('authHostedAaaSupportedEnabled', get_object_vars($data)) && null !== ($data->authHostedAaaSupportedEnabled ?? null)) {
            $dataArray['auth_hostedAaaSupportedEnabled'] = $data->authHostedAaaSupportedEnabled ?? null;
        }
        if (array_key_exists('authPlmnIdentifierEnabled', get_object_vars($data)) && null !== ($data->authPlmnIdentifierEnabled ?? null)) {
            $dataArray['auth_plmnIdentifierEnabled'] = $data->authPlmnIdentifierEnabled ?? null;
        }
        if (array_key_exists('includeUsers', get_object_vars($data)) && null !== ($data->includeUsers ?? null)) {
            $dataArray['includeUsers'] = $data->includeUsers ?? null;
        }
        if (array_key_exists('includeUserClickNode', get_object_vars($data)) && null !== ($data->includeUserClickNode ?? null)) {
            $dataArray['includeUserClickNode'] = $data->includeUserClickNode ?? null;
        }
        if (array_key_exists('dpGroupFilterId', get_object_vars($data)) && null !== ($data->dpGroupFilterId ?? null)) {
            $dataArray['dpGroupFilterId'] = $data->dpGroupFilterId ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonQueryCriteriaOptions::class => false];
    }
}