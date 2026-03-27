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
class CommitSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CommitSearchResultItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CommitSearchResultItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\CommitSearchResultItem();
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
            $this->validate($data, new \Github\Validator\CommitSearchResultItemConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
            unset($data['comments_url']);
        }
        if (\array_key_exists('commit', $data)) {
            $object->setCommit($this->denormalizer->denormalize($data['commit'], \Github\Model\CommitSearchResultItemCommit::class, 'json', $context));
            unset($data['commit']);
        }
        if (\array_key_exists('author', $data) && $data['author'] !== null) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\CommitSearchResultItemAuthor::class, 'json', $context));
            unset($data['author']);
        }
        elseif (\array_key_exists('author', $data) && $data['author'] === null) {
            $object->setAuthor(null);
        }
        if (\array_key_exists('committer', $data) && $data['committer'] !== null) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], \Github\Model\CommitSearchResultItemCommitter::class, 'json', $context));
            unset($data['committer']);
        }
        elseif (\array_key_exists('committer', $data) && $data['committer'] === null) {
            $object->setCommitter(null);
        }
        if (\array_key_exists('parents', $data)) {
            $values = [];
            foreach ($data['parents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\CommitSearchResultItemParentsItem::class, 'json', $context);
            }
            $object->setParents($values);
            unset($data['parents']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], \Github\Model\MinimalRepository::class, 'json', $context));
            unset($data['repository']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values_1 = [];
            foreach ($data['text_matches'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\SearchResultTextMatchesItem::class, 'json', $context);
            }
            $object->setTextMatches($values_1);
            unset($data['text_matches']);
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
        $dataArray['sha'] = $data->getSha();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['comments_url'] = $data->getCommentsUrl();
        $dataArray['commit'] = $this->normalizer->normalize($data->getCommit(), 'json', $context);
        $dataArray['author'] = $this->normalizer->normalize($data->getAuthor(), 'json', $context);
        $dataArray['committer'] = $this->normalizer->normalize($data->getCommitter(), 'json', $context);
        $values = [];
        foreach ($data->getParents() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['parents'] = $values;
        $dataArray['repository'] = $this->normalizer->normalize($data->getRepository(), 'json', $context);
        $dataArray['score'] = $data->getScore();
        $dataArray['node_id'] = $data->getNodeId();
        if ($data->isInitialized('textMatches') && null !== $data->getTextMatches()) {
            $values_1 = [];
            foreach ($data->getTextMatches() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['text_matches'] = $values_1;
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\CommitSearchResultItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CommitSearchResultItem::class => false];
    }
}