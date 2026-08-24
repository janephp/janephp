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
class AuthenticationTokenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\AuthenticationToken::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\AuthenticationToken::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\AuthenticationToken();
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
            $this->validate($data, new \Github\Validator\AuthenticationTokenConstraint());
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
            unset($data['token']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expires_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['expires_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setExpiresAt($date);
            unset($data['expires_at']);
        }
        if (\array_key_exists('permissions', $data)) {
            $values = new \Github\Runtime\JsonObject();
            foreach ($data['permissions'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setPermissions($values);
            unset($data['permissions']);
        }
        if (\array_key_exists('repositories', $data)) {
            $values_1 = [];
            foreach ($data['repositories'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\Repository::class, 'json', $context);
            }
            $object->setRepositories($values_1);
            unset($data['repositories']);
        }
        if (\array_key_exists('single_file', $data) && $data['single_file'] !== null) {
            $object->setSingleFile($data['single_file']);
            unset($data['single_file']);
        }
        elseif (\array_key_exists('single_file', $data) && $data['single_file'] === null) {
            $object->setSingleFile(null);
            unset($data['single_file']);
        }
        if (\array_key_exists('repository_selection', $data)) {
            $object->setRepositorySelection($data['repository_selection']);
            unset($data['repository_selection']);
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['token'] = $data->getToken();
        $dataArray['expires_at'] = $data->getExpiresAt()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $values = new \Github\Runtime\JsonObject();
            foreach ($data->getPermissions() as $key => $value) {
                $values[$key] = $value;
            }
            $dataArray['permissions'] = $values;
        }
        if ($data->isInitialized('repositories') && null !== $data->getRepositories()) {
            $values_1 = [];
            foreach ($data->getRepositories() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['repositories'] = $values_1;
        }
        if ($data->isInitialized('singleFile') && null !== $data->getSingleFile()) {
            $dataArray['single_file'] = $data->getSingleFile();
        }
        if ($data->isInitialized('repositorySelection') && null !== $data->getRepositorySelection()) {
            $dataArray['repository_selection'] = $data->getRepositorySelection();
        }
        foreach ($data as $key_1 => $value_2) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\AuthenticationTokenConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\AuthenticationToken::class => false];
    }
}