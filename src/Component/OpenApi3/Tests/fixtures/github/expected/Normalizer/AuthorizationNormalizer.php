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
class AuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Authorization::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Authorization::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\Authorization();
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
            $this->validate($data, new \Github\Validator\AuthorizationConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = [];
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
            unset($data['scopes']);
        }
        elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
            unset($data['scopes']);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
            unset($data['token']);
        }
        if (\array_key_exists('token_last_eight', $data) && $data['token_last_eight'] !== null) {
            $object->setTokenLastEight($data['token_last_eight']);
            unset($data['token_last_eight']);
        }
        elseif (\array_key_exists('token_last_eight', $data) && $data['token_last_eight'] === null) {
            $object->setTokenLastEight(null);
            unset($data['token_last_eight']);
        }
        if (\array_key_exists('hashed_token', $data) && $data['hashed_token'] !== null) {
            $object->setHashedToken($data['hashed_token']);
            unset($data['hashed_token']);
        }
        elseif (\array_key_exists('hashed_token', $data) && $data['hashed_token'] === null) {
            $object->setHashedToken(null);
            unset($data['hashed_token']);
        }
        if (\array_key_exists('app', $data)) {
            $object->setApp($this->denormalizer->denormalize($data['app'], \Github\Model\AuthorizationApp::class, 'json', $context));
            unset($data['app']);
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
            unset($data['note']);
        }
        if (\array_key_exists('note_url', $data) && $data['note_url'] !== null) {
            $object->setNoteUrl($data['note_url']);
            unset($data['note_url']);
        }
        elseif (\array_key_exists('note_url', $data) && $data['note_url'] === null) {
            $object->setNoteUrl(null);
            unset($data['note_url']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('fingerprint', $data) && $data['fingerprint'] !== null) {
            $object->setFingerprint($data['fingerprint']);
            unset($data['fingerprint']);
        }
        elseif (\array_key_exists('fingerprint', $data) && $data['fingerprint'] === null) {
            $object->setFingerprint(null);
            unset($data['fingerprint']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\AuthorizationUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
            unset($data['user']);
        }
        if (\array_key_exists('installation', $data) && $data['installation'] !== null) {
            $object->setInstallation($this->denormalizer->denormalize($data['installation'], \Github\Model\AuthorizationInstallation::class, 'json', $context));
            unset($data['installation']);
        }
        elseif (\array_key_exists('installation', $data) && $data['installation'] === null) {
            $object->setInstallation(null);
            unset($data['installation']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['url'] = $data->getUrl();
        $values = [];
        foreach ($data->getScopes() as $value) {
            $values[] = $value;
        }
        $dataArray['scopes'] = $values;
        $dataArray['token'] = $data->getToken();
        $dataArray['token_last_eight'] = $data->getTokenLastEight();
        $dataArray['hashed_token'] = $data->getHashedToken();
        $dataArray['app'] = $data->getApp() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getApp(), 'json', $context));
        $dataArray['note'] = $data->getNote();
        $dataArray['note_url'] = $data->getNoteUrl();
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['fingerprint'] = $data->getFingerprint();
        if ($data->isInitialized('user') && null !== $data->getUser()) {
            $dataArray['user'] = $data->getUser() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getUser(), 'json', $context));
        }
        if ($data->isInitialized('installation') && null !== $data->getInstallation()) {
            $dataArray['installation'] = $data->getInstallation() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getInstallation(), 'json', $context));
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\AuthorizationConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Authorization::class => false];
    }
}