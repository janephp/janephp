<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CredentialAuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CredentialAuthorization::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CredentialAuthorization::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CredentialAuthorization();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CredentialAuthorizationConstraint());
        }
        if (\array_key_exists('login', $data)) {
            $object->setLogin($data['login']);
            unset($data['login']);
        }
        if (\array_key_exists('credential_id', $data)) {
            $object->setCredentialId($data['credential_id']);
            unset($data['credential_id']);
        }
        if (\array_key_exists('credential_type', $data)) {
            $object->setCredentialType($data['credential_type']);
            unset($data['credential_type']);
        }
        if (\array_key_exists('token_last_eight', $data)) {
            $object->setTokenLastEight($data['token_last_eight']);
            unset($data['token_last_eight']);
        }
        if (\array_key_exists('credential_authorized_at', $data)) {
            $object->setCredentialAuthorizedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['credential_authorized_at']));
            unset($data['credential_authorized_at']);
        }
        if (\array_key_exists('scopes', $data)) {
            $values = [];
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
            unset($data['scopes']);
        }
        if (\array_key_exists('fingerprint', $data)) {
            $object->setFingerprint($data['fingerprint']);
            unset($data['fingerprint']);
        }
        if (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] !== null) {
            $object->setCredentialAccessedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['credential_accessed_at']));
            unset($data['credential_accessed_at']);
        }
        elseif (\array_key_exists('credential_accessed_at', $data) && $data['credential_accessed_at'] === null) {
            $object->setCredentialAccessedAt(null);
            unset($data['credential_accessed_at']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['login'] = $data->getLogin();
        $dataArray['credential_id'] = $data->getCredentialId();
        $dataArray['credential_type'] = $data->getCredentialType();
        if ($data->isInitialized('tokenLastEight') && null !== $data->getTokenLastEight()) {
            $dataArray['token_last_eight'] = $data->getTokenLastEight();
        }
        $dataArray['credential_authorized_at'] = $data->getCredentialAuthorizedAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('scopes') && null !== $data->getScopes()) {
            $values = [];
            foreach ($data->getScopes() as $value) {
                $values[] = $value;
            }
            $dataArray['scopes'] = $values;
        }
        if ($data->isInitialized('fingerprint') && null !== $data->getFingerprint()) {
            $dataArray['fingerprint'] = $data->getFingerprint();
        }
        if ($data->isInitialized('credentialAccessedAt') && null !== $data->getCredentialAccessedAt()) {
            $dataArray['credential_accessed_at'] = $data->getCredentialAccessedAt()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CredentialAuthorizationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CredentialAuthorization::class => false];
    }
}