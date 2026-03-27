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
class ReposOwnerRepoGitCommitsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoGitCommitsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoGitCommitsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoGitCommitsPostBody();
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
            $this->validate($data, new \Github\Validator\ReposOwnerRepoGitCommitsPostBodyConstraint());
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('tree', $data)) {
            $object->setTree($data['tree']);
            unset($data['tree']);
        }
        if (\array_key_exists('parents', $data)) {
            $values = [];
            foreach ($data['parents'] as $value) {
                $values[] = $value;
            }
            $object->setParents($values);
            unset($data['parents']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($this->denormalizer->denormalize($data['author'], \Github\Model\ReposOwnerRepoGitCommitsPostBodyAuthor::class, 'json', $context));
            unset($data['author']);
        }
        if (\array_key_exists('committer', $data)) {
            $object->setCommitter($this->denormalizer->denormalize($data['committer'], \Github\Model\ReposOwnerRepoGitCommitsPostBodyCommitter::class, 'json', $context));
            unset($data['committer']);
        }
        if (\array_key_exists('signature', $data)) {
            $object->setSignature($data['signature']);
            unset($data['signature']);
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
        $dataArray['message'] = $data->getMessage();
        $dataArray['tree'] = $data->getTree();
        if ($data->isInitialized('parents') && null !== $data->getParents()) {
            $values = [];
            foreach ($data->getParents() as $value) {
                $values[] = $value;
            }
            $dataArray['parents'] = $values;
        }
        if ($data->isInitialized('author') && null !== $data->getAuthor()) {
            $dataArray['author'] = $this->normalizer->normalize($data->getAuthor(), 'json', $context);
        }
        if ($data->isInitialized('committer') && null !== $data->getCommitter()) {
            $dataArray['committer'] = $this->normalizer->normalize($data->getCommitter(), 'json', $context);
        }
        if ($data->isInitialized('signature') && null !== $data->getSignature()) {
            $dataArray['signature'] = $data->getSignature();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoGitCommitsPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoGitCommitsPostBody::class => false];
    }
}