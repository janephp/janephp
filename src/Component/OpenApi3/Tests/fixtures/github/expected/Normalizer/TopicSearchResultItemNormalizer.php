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
class TopicSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\TopicSearchResultItem::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\TopicSearchResultItem::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\TopicSearchResultItem();
        if (\array_key_exists('featured', $data) && \is_int($data['featured'])) {
            $data['featured'] = (bool) $data['featured'];
        }
        if (\array_key_exists('curated', $data) && \is_int($data['curated'])) {
            $data['curated'] = (bool) $data['curated'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\TopicSearchResultItemConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('display_name', $data) && $data['display_name'] !== null) {
            $object->setDisplayName($data['display_name']);
            unset($data['display_name']);
        }
        elseif (\array_key_exists('display_name', $data) && $data['display_name'] === null) {
            $object->setDisplayName(null);
        }
        if (\array_key_exists('short_description', $data) && $data['short_description'] !== null) {
            $object->setShortDescription($data['short_description']);
            unset($data['short_description']);
        }
        elseif (\array_key_exists('short_description', $data) && $data['short_description'] === null) {
            $object->setShortDescription(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('created_by', $data) && $data['created_by'] !== null) {
            $object->setCreatedBy($data['created_by']);
            unset($data['created_by']);
        }
        elseif (\array_key_exists('created_by', $data) && $data['created_by'] === null) {
            $object->setCreatedBy(null);
        }
        if (\array_key_exists('released', $data) && $data['released'] !== null) {
            $object->setReleased($data['released']);
            unset($data['released']);
        }
        elseif (\array_key_exists('released', $data) && $data['released'] === null) {
            $object->setReleased(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('featured', $data)) {
            $object->setFeatured($data['featured']);
            unset($data['featured']);
        }
        if (\array_key_exists('curated', $data)) {
            $object->setCurated($data['curated']);
            unset($data['curated']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
            unset($data['score']);
        }
        if (\array_key_exists('repository_count', $data) && $data['repository_count'] !== null) {
            $object->setRepositoryCount($data['repository_count']);
            unset($data['repository_count']);
        }
        elseif (\array_key_exists('repository_count', $data) && $data['repository_count'] === null) {
            $object->setRepositoryCount(null);
        }
        if (\array_key_exists('logo_url', $data) && $data['logo_url'] !== null) {
            $object->setLogoUrl($data['logo_url']);
            unset($data['logo_url']);
        }
        elseif (\array_key_exists('logo_url', $data) && $data['logo_url'] === null) {
            $object->setLogoUrl(null);
        }
        if (\array_key_exists('text_matches', $data)) {
            $values = [];
            foreach ($data['text_matches'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\SearchResultTextMatchesItem::class, 'json', $context);
            }
            $object->setTextMatches($values);
            unset($data['text_matches']);
        }
        if (\array_key_exists('related', $data) && $data['related'] !== null) {
            $values_1 = [];
            foreach ($data['related'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\TopicSearchResultItemRelatedItem::class, 'json', $context);
            }
            $object->setRelated($values_1);
            unset($data['related']);
        }
        elseif (\array_key_exists('related', $data) && $data['related'] === null) {
            $object->setRelated(null);
        }
        if (\array_key_exists('aliases', $data) && $data['aliases'] !== null) {
            $values_2 = [];
            foreach ($data['aliases'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Github\Model\TopicSearchResultItemAliasesItem::class, 'json', $context);
            }
            $object->setAliases($values_2);
            unset($data['aliases']);
        }
        elseif (\array_key_exists('aliases', $data) && $data['aliases'] === null) {
            $object->setAliases(null);
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
        $dataArray['name'] = $data->getName();
        $dataArray['display_name'] = $data->getDisplayName();
        $dataArray['short_description'] = $data->getShortDescription();
        $dataArray['description'] = $data->getDescription();
        $dataArray['created_by'] = $data->getCreatedBy();
        $dataArray['released'] = $data->getReleased();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['featured'] = $data->getFeatured();
        $dataArray['curated'] = $data->getCurated();
        $dataArray['score'] = $data->getScore();
        if ($data->isInitialized('repositoryCount')) {
            $dataArray['repository_count'] = $data->getRepositoryCount();
        }
        if ($data->isInitialized('logoUrl')) {
            $dataArray['logo_url'] = $data->getLogoUrl();
        }
        if ($data->isInitialized('textMatches') && null !== $data->getTextMatches()) {
            $values = [];
            foreach ($data->getTextMatches() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['text_matches'] = $values;
        }
        if ($data->isInitialized('related')) {
            $values_1 = [];
            foreach ($data->getRelated() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['related'] = $values_1;
        }
        if ($data->isInitialized('aliases')) {
            $values_2 = [];
            foreach ($data->getAliases() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['aliases'] = $values_2;
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\TopicSearchResultItemConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\TopicSearchResultItem::class => false];
    }
}