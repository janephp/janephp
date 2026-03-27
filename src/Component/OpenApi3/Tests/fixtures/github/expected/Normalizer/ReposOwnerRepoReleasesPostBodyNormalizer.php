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
class ReposOwnerRepoReleasesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoReleasesPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoReleasesPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoReleasesPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('draft', $data) && \is_int($data['draft'])) {
            $data['draft'] = (bool) $data['draft'];
        }
        if (\array_key_exists('prerelease', $data) && \is_int($data['prerelease'])) {
            $data['prerelease'] = (bool) $data['prerelease'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoReleasesPostBodyConstraint());
        }
        if (\array_key_exists('tag_name', $data)) {
            $object->setTagName($data['tag_name']);
            unset($data['tag_name']);
        }
        if (\array_key_exists('target_commitish', $data)) {
            $object->setTargetCommitish($data['target_commitish']);
            unset($data['target_commitish']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('draft', $data)) {
            $object->setDraft($data['draft']);
            unset($data['draft']);
        }
        if (\array_key_exists('prerelease', $data)) {
            $object->setPrerelease($data['prerelease']);
            unset($data['prerelease']);
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
        $dataArray['tag_name'] = $data->getTagName();
        if ($data->isInitialized('targetCommitish') && null !== $data->getTargetCommitish()) {
            $dataArray['target_commitish'] = $data->getTargetCommitish();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('draft') && null !== $data->getDraft()) {
            $dataArray['draft'] = $data->getDraft();
        }
        if ($data->isInitialized('prerelease') && null !== $data->getPrerelease()) {
            $dataArray['prerelease'] = $data->getPrerelease();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoReleasesPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoReleasesPostBody::class => false];
    }
}