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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate();
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
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('accountLockout', $data)) {
            $object->setAccountLockout($data['accountLockout']);
        }
        if (\array_key_exists('lockoutDuration', $data)) {
            $object->setLockoutDuration($data['lockoutDuration']);
        }
        if (\array_key_exists('attemptsLockEnabled', $data)) {
            $object->setAttemptsLockEnabled($data['attemptsLockEnabled']);
        }
        if (\array_key_exists('attemptsLockoutTimes', $data)) {
            $object->setAttemptsLockoutTimes($data['attemptsLockoutTimes']);
        }
        if (\array_key_exists('attemptsLockoutPeriod', $data)) {
            $object->setAttemptsLockoutPeriod($data['attemptsLockoutPeriod']);
        }
        if (\array_key_exists('passwordExpiration', $data)) {
            $object->setPasswordExpiration($data['passwordExpiration']);
        }
        if (\array_key_exists('passwordReuse', $data)) {
            $object->setPasswordReuse($data['passwordReuse']);
        }
        if (\array_key_exists('sessionIdle', $data)) {
            $object->setSessionIdle($data['sessionIdle']);
        }
        if (\array_key_exists('twoFactorAuthEnabled', $data)) {
            $object->setTwoFactorAuthEnabled($data['twoFactorAuthEnabled']);
        }
        if (\array_key_exists('disableInactiveAccounts', $data)) {
            $object->setDisableInactiveAccounts($data['disableInactiveAccounts']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('minimumPasswordLength', $data)) {
            $object->setMinimumPasswordLength($data['minimumPasswordLength']);
        }
        if (\array_key_exists('passwordComplexityEnabled', $data)) {
            $object->setPasswordComplexityEnabled($data['passwordComplexityEnabled']);
        }
        if (\array_key_exists('minimumPasswordLifetimeEnabled', $data)) {
            $object->setMinimumPasswordLifetimeEnabled($data['minimumPasswordLifetimeEnabled']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('accountLockout') && null !== $data->getAccountLockout()) {
            $dataArray['accountLockout'] = $data->getAccountLockout();
        }
        if ($data->isInitialized('lockoutDuration') && null !== $data->getLockoutDuration()) {
            $dataArray['lockoutDuration'] = $data->getLockoutDuration();
        }
        if ($data->isInitialized('attemptsLockEnabled') && null !== $data->getAttemptsLockEnabled()) {
            $dataArray['attemptsLockEnabled'] = $data->getAttemptsLockEnabled();
        }
        if ($data->isInitialized('attemptsLockoutTimes') && null !== $data->getAttemptsLockoutTimes()) {
            $dataArray['attemptsLockoutTimes'] = $data->getAttemptsLockoutTimes();
        }
        if ($data->isInitialized('attemptsLockoutPeriod') && null !== $data->getAttemptsLockoutPeriod()) {
            $dataArray['attemptsLockoutPeriod'] = $data->getAttemptsLockoutPeriod();
        }
        if ($data->isInitialized('passwordExpiration') && null !== $data->getPasswordExpiration()) {
            $dataArray['passwordExpiration'] = $data->getPasswordExpiration();
        }
        if ($data->isInitialized('passwordReuse') && null !== $data->getPasswordReuse()) {
            $dataArray['passwordReuse'] = $data->getPasswordReuse();
        }
        if ($data->isInitialized('sessionIdle') && null !== $data->getSessionIdle()) {
            $dataArray['sessionIdle'] = $data->getSessionIdle();
        }
        if ($data->isInitialized('twoFactorAuthEnabled') && null !== $data->getTwoFactorAuthEnabled()) {
            $dataArray['twoFactorAuthEnabled'] = $data->getTwoFactorAuthEnabled();
        }
        if ($data->isInitialized('disableInactiveAccounts') && null !== $data->getDisableInactiveAccounts()) {
            $dataArray['disableInactiveAccounts'] = $data->getDisableInactiveAccounts();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('minimumPasswordLength') && null !== $data->getMinimumPasswordLength()) {
            $dataArray['minimumPasswordLength'] = $data->getMinimumPasswordLength();
        }
        if ($data->isInitialized('passwordComplexityEnabled') && null !== $data->getPasswordComplexityEnabled()) {
            $dataArray['passwordComplexityEnabled'] = $data->getPasswordComplexityEnabled();
        }
        if ($data->isInitialized('minimumPasswordLifetimeEnabled') && null !== $data->getMinimumPasswordLifetimeEnabled()) {
            $dataArray['minimumPasswordLifetimeEnabled'] = $data->getMinimumPasswordLifetimeEnabled();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\AccountSecurityProfileUpdate::class => false];
    }
}