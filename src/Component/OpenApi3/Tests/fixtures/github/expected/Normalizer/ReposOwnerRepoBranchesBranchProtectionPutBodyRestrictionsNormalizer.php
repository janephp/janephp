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
class ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('users', $data)) {
            $values = [];
            foreach ($data['users'] as $value) {
                $values[] = $value;
            }
            $object->setUsers($values);
            unset($data['users']);
        }
        if (\array_key_exists('teams', $data)) {
            $values_1 = [];
            foreach ($data['teams'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTeams($values_1);
            unset($data['teams']);
        }
        if (\array_key_exists('apps', $data)) {
            $values_2 = [];
            foreach ($data['apps'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setApps($values_2);
            unset($data['apps']);
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
        $values = [];
        foreach ($data->getUsers() as $value) {
            $values[] = $value;
        }
        $dataArray['users'] = $values;
        $values_1 = [];
        foreach ($data->getTeams() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['teams'] = $values_1;
        if ($data->isInitialized('apps') && null !== $data->getApps()) {
            $values_2 = [];
            foreach ($data->getApps() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['apps'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictionsConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions::class => false];
    }
}