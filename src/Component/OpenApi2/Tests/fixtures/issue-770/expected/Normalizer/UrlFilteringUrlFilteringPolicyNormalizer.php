<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UrlFilteringUrlFilteringPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicy();
        if (\array_key_exists('safeSearchGoogleEnabled', $data) && \is_int($data['safeSearchGoogleEnabled'])) {
            $data['safeSearchGoogleEnabled'] = (bool) $data['safeSearchGoogleEnabled'];
        }
        if (\array_key_exists('safeSearchYouTubeEnabled', $data) && \is_int($data['safeSearchYouTubeEnabled'])) {
            $data['safeSearchYouTubeEnabled'] = (bool) $data['safeSearchYouTubeEnabled'];
        }
        if (\array_key_exists('safeSearchBingEnabled', $data) && \is_int($data['safeSearchBingEnabled'])) {
            $data['safeSearchBingEnabled'] = (bool) $data['safeSearchBingEnabled'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('tenantId', $data)) {
            $object->setTenantId($data['tenantId']);
        }
        if (\array_key_exists('domainId', $data)) {
            $object->setDomainId($data['domainId']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('filteringLevel', $data)) {
            $object->setFilteringLevel($data['filteringLevel']);
        }
        if (\array_key_exists('blockCategories', $data)) {
            $values = [];
            foreach ($data['blockCategories'] as $value) {
                $values[] = $value;
            }
            $object->setBlockCategories($values);
        }
        if (\array_key_exists('safeSearchGoogleEnabled', $data)) {
            $object->setSafeSearchGoogleEnabled($data['safeSearchGoogleEnabled']);
        }
        if (\array_key_exists('safeSearchGoogleDns', $data)) {
            $object->setSafeSearchGoogleDns($data['safeSearchGoogleDns']);
        }
        if (\array_key_exists('safeSearchYouTubeEnabled', $data)) {
            $object->setSafeSearchYouTubeEnabled($data['safeSearchYouTubeEnabled']);
        }
        if (\array_key_exists('safeSearchYouTubeDns', $data)) {
            $object->setSafeSearchYouTubeDns($data['safeSearchYouTubeDns']);
        }
        if (\array_key_exists('safeSearchBingEnabled', $data)) {
            $object->setSafeSearchBingEnabled($data['safeSearchBingEnabled']);
        }
        if (\array_key_exists('safeSearchBingDns', $data)) {
            $object->setSafeSearchBingDns($data['safeSearchBingDns']);
        }
        if (\array_key_exists('whitelist', $data)) {
            $values_1 = [];
            foreach ($data['whitelist'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWhitelist($values_1);
        }
        if (\array_key_exists('blacklist', $data)) {
            $values_2 = [];
            foreach ($data['blacklist'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setBlacklist($values_2);
        }
        if (\array_key_exists('blockByThreatLevelConfig', $data)) {
            $object->setBlockByThreatLevelConfig($this->denormalizer->denormalize($data['blockByThreatLevelConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfig::class, 'json', $context));
        }
        if (\array_key_exists('createDateTime', $data)) {
            $object->setCreateDateTime($data['createDateTime']);
        }
        if (\array_key_exists('modifiedDateTime', $data)) {
            $object->setModifiedDateTime($data['modifiedDateTime']);
        }
        if (\array_key_exists('creatorId', $data)) {
            $object->setCreatorId($data['creatorId']);
        }
        if (\array_key_exists('modifierId', $data)) {
            $object->setModifierId($data['modifierId']);
        }
        if (\array_key_exists('creatorUsername', $data)) {
            $object->setCreatorUsername($data['creatorUsername']);
        }
        if (\array_key_exists('modifierUsername', $data)) {
            $object->setModifierUsername($data['modifierUsername']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('tenantId') && null !== $data->getTenantId()) {
            $dataArray['tenantId'] = $data->getTenantId();
        }
        if ($data->isInitialized('domainId') && null !== $data->getDomainId()) {
            $dataArray['domainId'] = $data->getDomainId();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('filteringLevel') && null !== $data->getFilteringLevel()) {
            $dataArray['filteringLevel'] = $data->getFilteringLevel();
        }
        if ($data->isInitialized('blockCategories') && null !== $data->getBlockCategories()) {
            $values = [];
            foreach ($data->getBlockCategories() as $value) {
                $values[] = $value;
            }
            $dataArray['blockCategories'] = $values;
        }
        if ($data->isInitialized('safeSearchGoogleEnabled') && null !== $data->getSafeSearchGoogleEnabled()) {
            $dataArray['safeSearchGoogleEnabled'] = $data->getSafeSearchGoogleEnabled();
        }
        if ($data->isInitialized('safeSearchGoogleDns') && null !== $data->getSafeSearchGoogleDns()) {
            $dataArray['safeSearchGoogleDns'] = $data->getSafeSearchGoogleDns();
        }
        if ($data->isInitialized('safeSearchYouTubeEnabled') && null !== $data->getSafeSearchYouTubeEnabled()) {
            $dataArray['safeSearchYouTubeEnabled'] = $data->getSafeSearchYouTubeEnabled();
        }
        if ($data->isInitialized('safeSearchYouTubeDns') && null !== $data->getSafeSearchYouTubeDns()) {
            $dataArray['safeSearchYouTubeDns'] = $data->getSafeSearchYouTubeDns();
        }
        if ($data->isInitialized('safeSearchBingEnabled') && null !== $data->getSafeSearchBingEnabled()) {
            $dataArray['safeSearchBingEnabled'] = $data->getSafeSearchBingEnabled();
        }
        if ($data->isInitialized('safeSearchBingDns') && null !== $data->getSafeSearchBingDns()) {
            $dataArray['safeSearchBingDns'] = $data->getSafeSearchBingDns();
        }
        if ($data->isInitialized('whitelist') && null !== $data->getWhitelist()) {
            $values_1 = [];
            foreach ($data->getWhitelist() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['whitelist'] = $values_1;
        }
        if ($data->isInitialized('blacklist') && null !== $data->getBlacklist()) {
            $values_2 = [];
            foreach ($data->getBlacklist() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['blacklist'] = $values_2;
        }
        if ($data->isInitialized('blockByThreatLevelConfig') && null !== $data->getBlockByThreatLevelConfig()) {
            $dataArray['blockByThreatLevelConfig'] = $this->normalizer->normalize($data->getBlockByThreatLevelConfig(), 'json', $context);
        }
        if ($data->isInitialized('createDateTime') && null !== $data->getCreateDateTime()) {
            $dataArray['createDateTime'] = $data->getCreateDateTime();
        }
        if ($data->isInitialized('modifiedDateTime') && null !== $data->getModifiedDateTime()) {
            $dataArray['modifiedDateTime'] = $data->getModifiedDateTime();
        }
        if ($data->isInitialized('creatorId') && null !== $data->getCreatorId()) {
            $dataArray['creatorId'] = $data->getCreatorId();
        }
        if ($data->isInitialized('modifierId') && null !== $data->getModifierId()) {
            $dataArray['modifierId'] = $data->getModifierId();
        }
        if ($data->isInitialized('creatorUsername') && null !== $data->getCreatorUsername()) {
            $dataArray['creatorUsername'] = $data->getCreatorUsername();
        }
        if ($data->isInitialized('modifierUsername') && null !== $data->getModifierUsername()) {
            $dataArray['modifierUsername'] = $data->getModifierUsername();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringUrlFilteringPolicy::class => false];
    }
}