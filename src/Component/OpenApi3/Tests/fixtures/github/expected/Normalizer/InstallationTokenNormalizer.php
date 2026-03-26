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
class InstallationTokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\InstallationToken::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\InstallationToken::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\InstallationToken();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\InstallationTokenConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
            unset($data['token']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt($data['expires_at']);
            unset($data['expires_at']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\InstallationTokenPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        if (\array_key_exists('repository_selection', $data)) {
            $object->setRepositorySelection($data['repository_selection']);
            unset($data['repository_selection']);
        }
        if (\array_key_exists('repositories', $data)) {
            $values = [];
            foreach ($data['repositories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\Repository::class, 'json', $context);
            }
            $object->setRepositories($values);
            unset($data['repositories']);
        }
        if (\array_key_exists('single_file', $data)) {
            $object->setSingleFile($data['single_file']);
            unset($data['single_file']);
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
        if ($data->isInitialized('token') && null !== $data->getToken()) {
            $dataArray['token'] = $data->getToken();
        }
        if ($data->isInitialized('expiresAt') && null !== $data->getExpiresAt()) {
            $dataArray['expires_at'] = $data->getExpiresAt();
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        }
        if ($data->isInitialized('repositorySelection') && null !== $data->getRepositorySelection()) {
            $dataArray['repository_selection'] = $data->getRepositorySelection();
        }
        if ($data->isInitialized('repositories') && null !== $data->getRepositories()) {
            $values = [];
            foreach ($data->getRepositories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['repositories'] = $values;
        }
        if ($data->isInitialized('singleFile') && null !== $data->getSingleFile()) {
            $dataArray['single_file'] = $data->getSingleFile();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\InstallationTokenConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\InstallationToken::class => false];
    }
}