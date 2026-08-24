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
class CommitComparisonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CommitComparison::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CommitComparison::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CommitComparison();
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
            $this->validate($data, new \Github\Validator\CommitComparisonConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('permalink_url', $data)) {
            $object->setPermalinkUrl($data['permalink_url']);
            unset($data['permalink_url']);
        }
        if (\array_key_exists('diff_url', $data)) {
            $object->setDiffUrl($data['diff_url']);
            unset($data['diff_url']);
        }
        if (\array_key_exists('patch_url', $data)) {
            $object->setPatchUrl($data['patch_url']);
            unset($data['patch_url']);
        }
        if (\array_key_exists('base_commit', $data)) {
            $object->setBaseCommit($this->denormalizer->denormalize($data['base_commit'], \Github\Model\Commit::class, 'json', $context));
            unset($data['base_commit']);
        }
        if (\array_key_exists('merge_base_commit', $data)) {
            $object->setMergeBaseCommit($this->denormalizer->denormalize($data['merge_base_commit'], \Github\Model\Commit::class, 'json', $context));
            unset($data['merge_base_commit']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('ahead_by', $data)) {
            $object->setAheadBy($data['ahead_by']);
            unset($data['ahead_by']);
        }
        if (\array_key_exists('behind_by', $data)) {
            $object->setBehindBy($data['behind_by']);
            unset($data['behind_by']);
        }
        if (\array_key_exists('total_commits', $data)) {
            $object->setTotalCommits($data['total_commits']);
            unset($data['total_commits']);
        }
        if (\array_key_exists('commits', $data)) {
            $values = [];
            foreach ($data['commits'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\Commit::class, 'json', $context);
            }
            $object->setCommits($values);
            unset($data['commits']);
        }
        if (\array_key_exists('files', $data)) {
            $values_1 = [];
            foreach ($data['files'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\DiffEntry::class, 'json', $context);
            }
            $object->setFiles($values_1);
            unset($data['files']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['permalink_url'] = $data->getPermalinkUrl();
        $dataArray['diff_url'] = $data->getDiffUrl();
        $dataArray['patch_url'] = $data->getPatchUrl();
        $dataArray['base_commit'] = $data->getBaseCommit() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getBaseCommit(), 'json', $context));
        $dataArray['merge_base_commit'] = $data->getMergeBaseCommit() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getMergeBaseCommit(), 'json', $context));
        $dataArray['status'] = $data->getStatus();
        $dataArray['ahead_by'] = $data->getAheadBy();
        $dataArray['behind_by'] = $data->getBehindBy();
        $dataArray['total_commits'] = $data->getTotalCommits();
        $values = [];
        foreach ($data->getCommits() as $value) {
            $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['commits'] = $values;
        $values_1 = [];
        foreach ($data->getFiles() as $value_1) {
            $values_1[] = $value_1 === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['files'] = $values_1;
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CommitComparisonConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CommitComparison::class => false];
    }
}