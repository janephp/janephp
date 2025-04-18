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
class GistFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\GistFull::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\GistFull::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\GistFull();
        if (\array_key_exists('public', $data) && \is_int($data['public'])) {
            $data['public'] = (bool) $data['public'];
        }
        if (\array_key_exists('truncated', $data) && \is_int($data['truncated'])) {
            $data['truncated'] = (bool) $data['truncated'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\GistFullConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
            unset($data['forks_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
            unset($data['commits_url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('git_pull_url', $data)) {
            $object->setGitPullUrl($data['git_pull_url']);
            unset($data['git_pull_url']);
        }
        if (\array_key_exists('git_push_url', $data)) {
            $object->setGitPushUrl($data['git_push_url']);
            unset($data['git_push_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('files', $data)) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['files'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \Github\Model\GistSimpleFilesItem::class, 'json', $context);
            }
            $object->setFiles($values);
            unset($data['files']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($data['user']);
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], \Github\Model\SimpleUser::class, 'json', $context));
            unset($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('truncated', $data)) {
            $object->setTruncated($data['truncated']);
            unset($data['truncated']);
        }
        if (\array_key_exists('forks', $data)) {
            $values_1 = [];
            foreach ($data['forks'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\GistFullforksItem::class, 'json', $context);
            }
            $object->setForks($values_1);
            unset($data['forks']);
        }
        if (\array_key_exists('history', $data)) {
            $values_2 = [];
            foreach ($data['history'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Github\Model\GistFullhistoryItem::class, 'json', $context);
            }
            $object->setHistory($values_2);
            unset($data['history']);
        }
        if (\array_key_exists('fork_of', $data) && $data['fork_of'] !== null) {
            $object->setForkOf($this->denormalizer->denormalize($data['fork_of'], \Github\Model\GistFullforkOf::class, 'json', $context));
            unset($data['fork_of']);
        }
        elseif (\array_key_exists('fork_of', $data) && $data['fork_of'] === null) {
            $object->setForkOf(null);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('forksUrl') && null !== $data->getForksUrl()) {
            $dataArray['forks_url'] = $data->getForksUrl();
        }
        if ($data->isInitialized('commitsUrl') && null !== $data->getCommitsUrl()) {
            $dataArray['commits_url'] = $data->getCommitsUrl();
        }
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('nodeId') && null !== $data->getNodeId()) {
            $dataArray['node_id'] = $data->getNodeId();
        }
        if ($data->isInitialized('gitPullUrl') && null !== $data->getGitPullUrl()) {
            $dataArray['git_pull_url'] = $data->getGitPullUrl();
        }
        if ($data->isInitialized('gitPushUrl') && null !== $data->getGitPushUrl()) {
            $dataArray['git_push_url'] = $data->getGitPushUrl();
        }
        if ($data->isInitialized('htmlUrl') && null !== $data->getHtmlUrl()) {
            $dataArray['html_url'] = $data->getHtmlUrl();
        }
        if ($data->isInitialized('files') && null !== $data->getFiles()) {
            $values = [];
            foreach ($data->getFiles() as $key => $value) {
                $values[$key] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['files'] = $values;
        }
        if ($data->isInitialized('public') && null !== $data->getPublic()) {
            $dataArray['public'] = $data->getPublic();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('comments') && null !== $data->getComments()) {
            $dataArray['comments'] = $data->getComments();
        }
        if ($data->isInitialized('user')) {
            $dataArray['user'] = $data->getUser();
        }
        if ($data->isInitialized('commentsUrl') && null !== $data->getCommentsUrl()) {
            $dataArray['comments_url'] = $data->getCommentsUrl();
        }
        if ($data->isInitialized('owner')) {
            $dataArray['owner'] = $this->normalizer->normalize($data->getOwner(), 'json', $context);
        }
        if ($data->isInitialized('truncated') && null !== $data->getTruncated()) {
            $dataArray['truncated'] = $data->getTruncated();
        }
        if ($data->isInitialized('forks') && null !== $data->getForks()) {
            $values_1 = [];
            foreach ($data->getForks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['forks'] = $values_1;
        }
        if ($data->isInitialized('history') && null !== $data->getHistory()) {
            $values_2 = [];
            foreach ($data->getHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['history'] = $values_2;
        }
        if ($data->isInitialized('forkOf')) {
            $dataArray['fork_of'] = $this->normalizer->normalize($data->getForkOf(), 'json', $context);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\GistFullConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\GistFull::class => false];
    }
}