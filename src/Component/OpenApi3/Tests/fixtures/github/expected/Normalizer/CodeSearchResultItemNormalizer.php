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
class CodeSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\CodeSearchResultItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\CodeSearchResultItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\CodeSearchResultItem();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\CodeSearchResultItemConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('git_url', $data)) {
            $object->setGitUrl($data['git_url']);
            unset($data['git_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], \Github\Model\MinimalRepository::class, 'json', $context));
            unset($data['repository']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        if (\array_key_exists('file_size', $data)) {
            $object->setFileSize($data['file_size']);
            unset($data['file_size']);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
            unset($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('last_modified_at', $data)) {
            $object->setLastModifiedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_modified_at']));
            unset($data['last_modified_at']);
        }
        if (\array_key_exists('line_numbers', $data)) {
            $values = [];
            foreach ($data['line_numbers'] as $value) {
                $values[] = $value;
            }
            $object->setLineNumbers($values);
            unset($data['line_numbers']);
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
        $dataArray['name'] = $data->getName();
        $dataArray['path'] = $data->getPath();
        $dataArray['sha'] = $data->getSha();
        $dataArray['url'] = $data->getUrl();
        $dataArray['git_url'] = $data->getGitUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['repository'] = $this->normalizer->normalize($data->getRepository(), 'json', $context);
        $dataArray['score'] = $data->getScore();
        if ($data->isInitialized('fileSize') && null !== $data->getFileSize()) {
            $dataArray['file_size'] = $data->getFileSize();
        }
        if ($data->isInitialized('language')) {
            $dataArray['language'] = $data->getLanguage();
        }
        if ($data->isInitialized('lastModifiedAt') && null !== $data->getLastModifiedAt()) {
            $dataArray['last_modified_at'] = $data->getLastModifiedAt()->format('Y-m-d\TH:i:sP');
        }
        if ($data->isInitialized('lineNumbers') && null !== $data->getLineNumbers()) {
            $values = [];
            foreach ($data->getLineNumbers() as $value) {
                $values[] = $value;
            }
            $dataArray['line_numbers'] = $values;
        }
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
            $this->validate($dataArray, new \Github\Validator\CodeSearchResultItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\CodeSearchResultItem::class => false];
    }
}