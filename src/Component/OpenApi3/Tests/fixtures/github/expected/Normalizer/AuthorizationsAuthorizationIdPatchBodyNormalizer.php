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
class AuthorizationsAuthorizationIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\AuthorizationsAuthorizationIdPatchBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\AuthorizationsAuthorizationIdPatchBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\AuthorizationsAuthorizationIdPatchBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        }
        if (\array_key_exists('add_scopes', $data)) {
            $values_1 = [];
            foreach ($data['add_scopes'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAddScopes($values_1);
            unset($data['add_scopes']);
        }
        if (\array_key_exists('remove_scopes', $data)) {
            $values_2 = [];
            foreach ($data['remove_scopes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setRemoveScopes($values_2);
            unset($data['remove_scopes']);
        }
        if (\array_key_exists('note', $data)) {
            $object->setNote($data['note']);
            unset($data['note']);
        }
        if (\array_key_exists('note_url', $data)) {
            $object->setNoteUrl($data['note_url']);
            unset($data['note_url']);
        }
        if (\array_key_exists('fingerprint', $data)) {
            $object->setFingerprint($data['fingerprint']);
            unset($data['fingerprint']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('scopes')) {
            $values = [];
            foreach ($data->getScopes() as $value) {
                $values[] = $value;
            }
            $dataArray['scopes'] = $values;
        }
        if ($data->isInitialized('addScopes') && null !== $data->getAddScopes()) {
            $values_1 = [];
            foreach ($data->getAddScopes() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['add_scopes'] = $values_1;
        }
        if ($data->isInitialized('removeScopes') && null !== $data->getRemoveScopes()) {
            $values_2 = [];
            foreach ($data->getRemoveScopes() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['remove_scopes'] = $values_2;
        }
        if ($data->isInitialized('note') && null !== $data->getNote()) {
            $dataArray['note'] = $data->getNote();
        }
        if ($data->isInitialized('noteUrl') && null !== $data->getNoteUrl()) {
            $dataArray['note_url'] = $data->getNoteUrl();
        }
        if ($data->isInitialized('fingerprint') && null !== $data->getFingerprint()) {
            $dataArray['fingerprint'] = $data->getFingerprint();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\AuthorizationsAuthorizationIdPatchBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\AuthorizationsAuthorizationIdPatchBody::class => false];
    }
}