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
class OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200Constraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('total_count', $data)) {
            $object->setTotalCount($data['total_count']);
            unset($data['total_count']);
        }
        if (\array_key_exists('repositories', $data)) {
            $values = [];
            foreach ($data['repositories'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\MinimalRepository::class, 'json', $context);
            }
            $object->setRepositories($values);
            unset($data['repositories']);
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
        if ($data->isInitialized('totalCount') && null !== $data->getTotalCount()) {
            $dataArray['total_count'] = $data->getTotalCount();
        }
        if ($data->isInitialized('repositories') && null !== $data->getRepositories()) {
            $values = [];
            foreach ($data->getRepositories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['repositories'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200Constraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\OrgsOrgActionsSecretsSecretNameRepositoriesGetResponse200::class => false];
    }
}