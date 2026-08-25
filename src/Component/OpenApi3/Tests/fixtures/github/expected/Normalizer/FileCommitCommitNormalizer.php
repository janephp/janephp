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
class FileCommitCommitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\FileCommitCommit::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\FileCommitCommit::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\FileCommitCommit();
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
            $this->validate($data, new \Github\Validator\FileCommitCommitConstraint());
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\FileCommitCommitAuthor::class, 'json', $context));
            unset($data['author']);
        }
        if (\array_key_exists('committer', $data)) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], \Github\Model\FileCommitCommitCommitter::class, 'json', $context));
            unset($data['committer']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('tree', $data)) {
            $object->setTree($this->denormalizer->denormalize($data['tree'], \Github\Model\FileCommitCommitTree::class, 'json', $context));
            unset($data['tree']);
        }
        if (\array_key_exists('parents', $data)) {
            $values = [];
            foreach ($data['parents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\FileCommitCommitParentsItem::class, 'json', $context);
            }
            $object->setParents($values);
            unset($data['parents']);
        }
        if (\array_key_exists('verification', $data)) {
            $object->setVerification($this->denormalizer->denormalize($data['verification'], \Github\Model\FileCommitCommitVerification::class, 'json', $context));
            unset($data['verification']);
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
        if ($data->isInitialized('sha') && null !== $data->getSha()) {
            $dataArray['sha'] = $data->getSha();
        }
        if ($data->isInitialized('nodeId') && null !== $data->getNodeId()) {
            $dataArray['node_id'] = $data->getNodeId();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('htmlUrl') && null !== $data->getHtmlUrl()) {
            $dataArray['html_url'] = $data->getHtmlUrl();
        }
        if ($data->isInitialized('author') && null !== $data->getAuthor()) {
            $dataArray['author'] = $data->getAuthor() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getAuthor(), 'json', $context));
        }
        if ($data->isInitialized('committer') && null !== $data->getCommitter()) {
            $dataArray['committer'] = $data->getCommitter() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getCommitter(), 'json', $context));
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('tree') && null !== $data->getTree()) {
            $dataArray['tree'] = $data->getTree() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getTree(), 'json', $context));
        }
        if ($data->isInitialized('parents') && null !== $data->getParents()) {
            $values = [];
            foreach ($data->getParents() as $value) {
                $values[] = $value === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['parents'] = $values;
        }
        if ($data->isInitialized('verification') && null !== $data->getVerification()) {
            $dataArray['verification'] = $data->getVerification() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getVerification(), 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\FileCommitCommitConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\FileCommitCommit::class => false];
    }
}