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
class ReposOwnerRepoImportPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoImportPutBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoImportPutBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoImportPutBody();
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
            $this->validate($data, new \Github\Validator\ReposOwnerRepoImportPutBodyConstraint());
        }
        if (\array_key_exists('vcs_url', $data)) {
            $object->setVcsUrl($data['vcs_url']);
            unset($data['vcs_url']);
        }
        if (\array_key_exists('vcs', $data)) {
            $object->setVcs($data['vcs']);
            unset($data['vcs']);
        }
        if (\array_key_exists('vcs_username', $data)) {
            $object->setVcsUsername($data['vcs_username']);
            unset($data['vcs_username']);
        }
        if (\array_key_exists('vcs_password', $data)) {
            $object->setVcsPassword($data['vcs_password']);
            unset($data['vcs_password']);
        }
        if (\array_key_exists('tfvc_project', $data)) {
            $object->setTfvcProject($data['tfvc_project']);
            unset($data['tfvc_project']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['vcs_url'] = $data->getVcsUrl();
        if ($data->isInitialized('vcs') && null !== $data->getVcs()) {
            $dataArray['vcs'] = $data->getVcs();
        }
        if ($data->isInitialized('vcsUsername') && null !== $data->getVcsUsername()) {
            $dataArray['vcs_username'] = $data->getVcsUsername();
        }
        if ($data->isInitialized('vcsPassword') && null !== $data->getVcsPassword()) {
            $dataArray['vcs_password'] = $data->getVcsPassword();
        }
        if ($data->isInitialized('tfvcProject') && null !== $data->getTfvcProject()) {
            $dataArray['tfvc_project'] = $data->getTfvcProject();
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoImportPutBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoImportPutBody::class => false];
    }
}