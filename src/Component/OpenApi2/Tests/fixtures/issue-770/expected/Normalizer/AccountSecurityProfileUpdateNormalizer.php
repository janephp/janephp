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
class AccountSecurityProfileUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('attemptsLockEnabled', $data) && \is_int($data['attemptsLockEnabled'])) {
            $data['attemptsLockEnabled'] = (bool) $data['attemptsLockEnabled'];
        }
        if (\array_key_exists('twoFactorAuthEnabled', $data) && \is_int($data['twoFactorAuthEnabled'])) {
            $data['twoFactorAuthEnabled'] = (bool) $data['twoFactorAuthEnabled'];
        }
        if (\array_key_exists('passwordComplexityEnabled', $data) && \is_int($data['passwordComplexityEnabled'])) {
            $data['passwordComplexityEnabled'] = (bool) $data['passwordComplexityEnabled'];
        }
        if (\array_key_exists('minimumPasswordLifetimeEnabled', $data) && \is_int($data['minimumPasswordLifetimeEnabled'])) {
            $data['minimumPasswordLifetimeEnabled'] = (bool) $data['minimumPasswordLifetimeEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('accountLockout', $data)) {
            $object->accountLockout = $data['accountLockout'];
        }
        if (\array_key_exists('lockoutDuration', $data)) {
            $object->lockoutDuration = $data['lockoutDuration'];
        }
        if (\array_key_exists('attemptsLockEnabled', $data)) {
            $object->attemptsLockEnabled = $data['attemptsLockEnabled'];
        }
        if (\array_key_exists('attemptsLockoutTimes', $data)) {
            $object->attemptsLockoutTimes = $data['attemptsLockoutTimes'];
        }
        if (\array_key_exists('attemptsLockoutPeriod', $data)) {
            $object->attemptsLockoutPeriod = $data['attemptsLockoutPeriod'];
        }
        if (\array_key_exists('passwordExpiration', $data)) {
            $object->passwordExpiration = $data['passwordExpiration'];
        }
        if (\array_key_exists('passwordReuse', $data)) {
            $object->passwordReuse = $data['passwordReuse'];
        }
        if (\array_key_exists('sessionIdle', $data)) {
            $object->sessionIdle = $data['sessionIdle'];
        }
        if (\array_key_exists('twoFactorAuthEnabled', $data)) {
            $object->twoFactorAuthEnabled = $data['twoFactorAuthEnabled'];
        }
        if (\array_key_exists('disableInactiveAccounts', $data)) {
            $object->disableInactiveAccounts = $data['disableInactiveAccounts'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('minimumPasswordLength', $data)) {
            $object->minimumPasswordLength = $data['minimumPasswordLength'];
        }
        if (\array_key_exists('passwordComplexityEnabled', $data)) {
            $object->passwordComplexityEnabled = $data['passwordComplexityEnabled'];
        }
        if (\array_key_exists('minimumPasswordLifetimeEnabled', $data)) {
            $object->minimumPasswordLifetimeEnabled = $data['minimumPasswordLifetimeEnabled'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('accountLockout', get_object_vars($data)) && null !== ($data->accountLockout ?? null)) {
            $dataArray['accountLockout'] = $data->accountLockout ?? null;
        }
        if (array_key_exists('lockoutDuration', get_object_vars($data)) && null !== ($data->lockoutDuration ?? null)) {
            $dataArray['lockoutDuration'] = $data->lockoutDuration ?? null;
        }
        if (array_key_exists('attemptsLockEnabled', get_object_vars($data)) && null !== ($data->attemptsLockEnabled ?? null)) {
            $dataArray['attemptsLockEnabled'] = $data->attemptsLockEnabled ?? null;
        }
        if (array_key_exists('attemptsLockoutTimes', get_object_vars($data)) && null !== ($data->attemptsLockoutTimes ?? null)) {
            $dataArray['attemptsLockoutTimes'] = $data->attemptsLockoutTimes ?? null;
        }
        if (array_key_exists('attemptsLockoutPeriod', get_object_vars($data)) && null !== ($data->attemptsLockoutPeriod ?? null)) {
            $dataArray['attemptsLockoutPeriod'] = $data->attemptsLockoutPeriod ?? null;
        }
        if (array_key_exists('passwordExpiration', get_object_vars($data)) && null !== ($data->passwordExpiration ?? null)) {
            $dataArray['passwordExpiration'] = $data->passwordExpiration ?? null;
        }
        if (array_key_exists('passwordReuse', get_object_vars($data)) && null !== ($data->passwordReuse ?? null)) {
            $dataArray['passwordReuse'] = $data->passwordReuse ?? null;
        }
        if (array_key_exists('sessionIdle', get_object_vars($data)) && null !== ($data->sessionIdle ?? null)) {
            $dataArray['sessionIdle'] = $data->sessionIdle ?? null;
        }
        if (array_key_exists('twoFactorAuthEnabled', get_object_vars($data)) && null !== ($data->twoFactorAuthEnabled ?? null)) {
            $dataArray['twoFactorAuthEnabled'] = $data->twoFactorAuthEnabled ?? null;
        }
        if (array_key_exists('disableInactiveAccounts', get_object_vars($data)) && null !== ($data->disableInactiveAccounts ?? null)) {
            $dataArray['disableInactiveAccounts'] = $data->disableInactiveAccounts ?? null;
        }
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('minimumPasswordLength', get_object_vars($data)) && null !== ($data->minimumPasswordLength ?? null)) {
            $dataArray['minimumPasswordLength'] = $data->minimumPasswordLength ?? null;
        }
        if (array_key_exists('passwordComplexityEnabled', get_object_vars($data)) && null !== ($data->passwordComplexityEnabled ?? null)) {
            $dataArray['passwordComplexityEnabled'] = $data->passwordComplexityEnabled ?? null;
        }
        if (array_key_exists('minimumPasswordLifetimeEnabled', get_object_vars($data)) && null !== ($data->minimumPasswordLifetimeEnabled ?? null)) {
            $dataArray['minimumPasswordLifetimeEnabled'] = $data->minimumPasswordLifetimeEnabled ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate::class => false];
    }
}