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
class OrgsOrgActionsSecretsSecretNamePutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\OrgsOrgActionsSecretsSecretNamePutBody();
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
            $this->validate($data, new \Github\Validator\OrgsOrgActionsSecretsSecretNamePutBodyConstraint());
        }
        if (\array_key_exists('encrypted_value', $data)) {
            $object->setEncryptedValue($data['encrypted_value']);
            unset($data['encrypted_value']);
        }
        if (\array_key_exists('key_id', $data)) {
            $object->setKeyId($data['key_id']);
            unset($data['key_id']);
        }
        if (\array_key_exists('visibility', $data)) {
            $object->setVisibility($data['visibility']);
            unset($data['visibility']);
        }
        if (\array_key_exists('selected_repository_ids', $data)) {
            $values = [];
            foreach ($data['selected_repository_ids'] as $value) {
                $values[] = $value;
            }
            $object->setSelectedRepositoryIds($values);
            unset($data['selected_repository_ids']);
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
        if ($data->isInitialized('encryptedValue') && null !== $data->getEncryptedValue()) {
            $dataArray['encrypted_value'] = $data->getEncryptedValue();
        }
        if ($data->isInitialized('keyId') && null !== $data->getKeyId()) {
            $dataArray['key_id'] = $data->getKeyId();
        }
        if ($data->isInitialized('visibility') && null !== $data->getVisibility()) {
            $dataArray['visibility'] = $data->getVisibility();
        }
        if ($data->isInitialized('selectedRepositoryIds') && null !== $data->getSelectedRepositoryIds()) {
            $values = [];
            foreach ($data->getSelectedRepositoryIds() as $value) {
                $values[] = $value;
            }
            $dataArray['selected_repository_ids'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgActionsSecretsSecretNamePutBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgActionsSecretsSecretNamePutBody::class => false];
    }
}