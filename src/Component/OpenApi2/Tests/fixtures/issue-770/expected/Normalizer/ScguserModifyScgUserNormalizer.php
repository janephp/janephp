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
class ScguserModifyScgUserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserModifyScgUser::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserModifyScgUser::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserModifyScgUser();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('passwordComplexityEnabled', $data) && \is_int($data['passwordComplexityEnabled'])) {
            $data['passwordComplexityEnabled'] = (bool) $data['passwordComplexityEnabled'];
        }
        if (\array_key_exists('minimumPasswordLifetimeEnabled', $data) && \is_int($data['minimumPasswordLifetimeEnabled'])) {
            $data['minimumPasswordLifetimeEnabled'] = (bool) $data['minimumPasswordLifetimeEnabled'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
        }
        if (\array_key_exists('domainId', $data)) {
            $object->domainId = $data['domainId'];
        }
        if (\array_key_exists('passphrase', $data)) {
            $object->passphrase = $data['passphrase'];
        }
        if (\array_key_exists('newPassphrase', $data)) {
            $object->newPassphrase = $data['newPassphrase'];
        }
        if (\array_key_exists('userName', $data)) {
            $object->userName = $data['userName'];
        }
        if (\array_key_exists('realName', $data)) {
            $object->realName = $data['realName'];
        }
        if (\array_key_exists('title', $data)) {
            $object->title = $data['title'];
        }
        if (\array_key_exists('phone', $data)) {
            $object->phone = $data['phone'];
        }
        if (\array_key_exists('email', $data)) {
            $object->email = $data['email'];
        }
        if (\array_key_exists('accountLockout', $data)) {
            $object->accountLockout = $data['accountLockout'];
        }
        if (\array_key_exists('lockoutDuration', $data)) {
            $object->lockoutDuration = $data['lockoutDuration'];
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
        if (\array_key_exists('minimumPasswordLength', $data)) {
            $object->minimumPasswordLength = $data['minimumPasswordLength'];
        }
        if (\array_key_exists('passwordComplexityEnabled', $data)) {
            $object->passwordComplexityEnabled = $data['passwordComplexityEnabled'];
        }
        if (\array_key_exists('minimumPasswordLifetimeEnabled', $data)) {
            $object->minimumPasswordLifetimeEnabled = $data['minimumPasswordLifetimeEnabled'];
        }
        if (\array_key_exists('sshPublicKeys', $data)) {
            $values = [];
            foreach ($data['sshPublicKeys'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonSshPublicKeyRef::class, 'json', $context);
            }
            $object->sshPublicKeys = $values;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->id ?? null;
        if (array_key_exists('domainId', get_object_vars($data)) && null !== ($data->domainId ?? null)) {
            $dataArray['domainId'] = $data->domainId ?? null;
        }
        if (array_key_exists('passphrase', get_object_vars($data)) && null !== ($data->passphrase ?? null)) {
            $dataArray['passphrase'] = $data->passphrase ?? null;
        }
        if (array_key_exists('newPassphrase', get_object_vars($data)) && null !== ($data->newPassphrase ?? null)) {
            $dataArray['newPassphrase'] = $data->newPassphrase ?? null;
        }
        if (array_key_exists('userName', get_object_vars($data)) && null !== ($data->userName ?? null)) {
            $dataArray['userName'] = $data->userName ?? null;
        }
        if (array_key_exists('realName', get_object_vars($data)) && null !== ($data->realName ?? null)) {
            $dataArray['realName'] = $data->realName ?? null;
        }
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title ?? null;
        }
        if (array_key_exists('phone', get_object_vars($data)) && null !== ($data->phone ?? null)) {
            $dataArray['phone'] = $data->phone ?? null;
        }
        if (array_key_exists('email', get_object_vars($data)) && null !== ($data->email ?? null)) {
            $dataArray['email'] = $data->email ?? null;
        }
        if (array_key_exists('accountLockout', get_object_vars($data)) && null !== ($data->accountLockout ?? null)) {
            $dataArray['accountLockout'] = $data->accountLockout ?? null;
        }
        if (array_key_exists('lockoutDuration', get_object_vars($data)) && null !== ($data->lockoutDuration ?? null)) {
            $dataArray['lockoutDuration'] = $data->lockoutDuration ?? null;
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
        if (array_key_exists('minimumPasswordLength', get_object_vars($data)) && null !== ($data->minimumPasswordLength ?? null)) {
            $dataArray['minimumPasswordLength'] = $data->minimumPasswordLength ?? null;
        }
        if (array_key_exists('passwordComplexityEnabled', get_object_vars($data)) && null !== ($data->passwordComplexityEnabled ?? null)) {
            $dataArray['passwordComplexityEnabled'] = $data->passwordComplexityEnabled ?? null;
        }
        if (array_key_exists('minimumPasswordLifetimeEnabled', get_object_vars($data)) && null !== ($data->minimumPasswordLifetimeEnabled ?? null)) {
            $dataArray['minimumPasswordLifetimeEnabled'] = $data->minimumPasswordLifetimeEnabled ?? null;
        }
        if (array_key_exists('sshPublicKeys', get_object_vars($data)) && null !== ($data->sshPublicKeys ?? null)) {
            $values = [];
            foreach ($data->sshPublicKeys ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['sshPublicKeys'] = $values;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\ScguserModifyScgUser::class => false];
    }
}