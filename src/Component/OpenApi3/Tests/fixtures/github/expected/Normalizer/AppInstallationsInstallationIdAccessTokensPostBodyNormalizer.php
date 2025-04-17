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
class AppInstallationsInstallationIdAccessTokensPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\AppInstallationsInstallationIdAccessTokensPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('repositories', $data)) {
            $values = [];
            foreach ($data['repositories'] as $value) {
                $values[] = $value;
            }
            $object->setRepositories($values);
            unset($data['repositories']);
        }
        if (\array_key_exists('repository_ids', $data)) {
            $values_1 = [];
            foreach ($data['repository_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRepositoryIds($values_1);
            unset($data['repository_ids']);
        }
        if (\array_key_exists('permissions', $data)) {
            $object->setPermissions($this->denormalizer->denormalize($data['permissions'], \Github\Model\AppInstallationsInstallationIdAccessTokensPostBodyPermissions::class, 'json', $context));
            unset($data['permissions']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('repositories') && null !== $data->getRepositories()) {
            $values = [];
            foreach ($data->getRepositories() as $value) {
                $values[] = $value;
            }
            $dataArray['repositories'] = $values;
        }
        if ($data->isInitialized('repositoryIds') && null !== $data->getRepositoryIds()) {
            $values_1 = [];
            foreach ($data->getRepositoryIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['repository_ids'] = $values_1;
        }
        if ($data->isInitialized('permissions') && null !== $data->getPermissions()) {
            $dataArray['permissions'] = $this->normalizer->normalize($data->getPermissions(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\AppInstallationsInstallationIdAccessTokensPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\AppInstallationsInstallationIdAccessTokensPostBody::class => false];
    }
}