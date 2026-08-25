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
class BaseGistNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\BaseGist::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\BaseGist::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\BaseGist();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('public', $data) && \is_int($data['public'])) {
            $data['public'] = (bool) $data['public'];
        }
        if (\array_key_exists('truncated', $data) && \is_int($data['truncated'])) {
            $data['truncated'] = (bool) $data['truncated'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\BaseGistConstraint());
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
            $values = new \Github\Runtime\JsonObject();
            foreach ($data['files'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, \Github\Model\BaseGistFilesItem::class, 'json', $context);
            }
            $object->setFiles($values);
            unset($data['files']);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
            unset($data['public']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_1);
            unset($data['updated_at']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
            unset($data['description']);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
            unset($data['comments']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\BaseGistUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
            unset($data['user']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], \Github\Model\BaseGistOwner::class, 'json', $context));
            unset($data['owner']);
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
            unset($data['owner']);
        }
        if (\array_key_exists('truncated', $data)) {
            $object->setTruncated($data['truncated']);
            unset($data['truncated']);
        }
        if (\array_key_exists('forks', $data)) {
            $values_1 = [];
            foreach ($data['forks'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setForks($values_1);
            unset($data['forks']);
        }
        if (\array_key_exists('history', $data)) {
            $values_2 = [];
            foreach ($data['history'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setHistory($values_2);
            unset($data['history']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['forks_url'] = $data->getForksUrl();
        $dataArray['commits_url'] = $data->getCommitsUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['git_pull_url'] = $data->getGitPullUrl();
        $dataArray['git_push_url'] = $data->getGitPushUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $values = new \Github\Runtime\JsonObject();
        foreach ($data->getFiles() as $key => $value) {
            $values[$key] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['files'] = $values;
        $dataArray['public'] = $data->getPublic();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['description'] = $data->getDescription();
        $dataArray['comments'] = $data->getComments();
        $dataArray['user'] = $data->getUser() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getUser(), 'json', $context));
        $dataArray['comments_url'] = $data->getCommentsUrl();
        if ($data->isInitialized('owner') && null !== $data->getOwner()) {
            $dataArray['owner'] = $data->getOwner() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getOwner(), 'json', $context));
        }
        if ($data->isInitialized('truncated') && null !== $data->getTruncated()) {
            $dataArray['truncated'] = $data->getTruncated();
        }
        if ($data->isInitialized('forks') && null !== $data->getForks()) {
            $values_1 = [];
            foreach ($data->getForks() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['forks'] = $values_1;
        }
        if ($data->isInitialized('history') && null !== $data->getHistory()) {
            $values_2 = [];
            foreach ($data->getHistory() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['history'] = $values_2;
        }
        foreach ($data->additionalPropertyEntries() as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $dataArray[$key_1] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\BaseGistConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\BaseGist::class => false];
    }
}