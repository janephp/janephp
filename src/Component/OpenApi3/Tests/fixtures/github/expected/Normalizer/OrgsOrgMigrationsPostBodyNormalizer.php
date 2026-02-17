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
class OrgsOrgMigrationsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgMigrationsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgMigrationsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrgsOrgMigrationsPostBody();
        if (\array_key_exists('lock_repositories', $data) && \is_int($data['lock_repositories'])) {
            $data['lock_repositories'] = (bool) $data['lock_repositories'];
        }
        if (\array_key_exists('exclude_attachments', $data) && \is_int($data['exclude_attachments'])) {
            $data['exclude_attachments'] = (bool) $data['exclude_attachments'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgMigrationsPostBodyConstraint());
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
        if (\array_key_exists('lock_repositories', $data)) {
            $object->setLockRepositories($data['lock_repositories']);
            unset($data['lock_repositories']);
        }
        if (\array_key_exists('exclude_attachments', $data)) {
            $object->setExcludeAttachments($data['exclude_attachments']);
            unset($data['exclude_attachments']);
        }
        if (\array_key_exists('exclude', $data)) {
            $values_1 = [];
            foreach ($data['exclude'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setExclude($values_1);
            unset($data['exclude']);
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
        $values = [];
        foreach ($data->getRepositories() as $value) {
            $values[] = $value;
        }
        $dataArray['repositories'] = $values;
        if ($data->isInitialized('lockRepositories') && null !== $data->getLockRepositories()) {
            $dataArray['lock_repositories'] = $data->getLockRepositories();
        }
        if ($data->isInitialized('excludeAttachments') && null !== $data->getExcludeAttachments()) {
            $dataArray['exclude_attachments'] = $data->getExcludeAttachments();
        }
        if ($data->isInitialized('exclude') && null !== $data->getExclude()) {
            $values_1 = [];
            foreach ($data->getExclude() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['exclude'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgMigrationsPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgMigrationsPostBody::class => false];
    }
}