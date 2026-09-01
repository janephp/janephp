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
class UrlFilteringModifyUrlFilteringPolicyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicy::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicy::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('safeSearchGoogleEnabled', $data) && \is_int($data['safeSearchGoogleEnabled'])) {
            $data['safeSearchGoogleEnabled'] = (bool) $data['safeSearchGoogleEnabled'];
        }
        if (\array_key_exists('safeSearchYouTubeEnabled', $data) && \is_int($data['safeSearchYouTubeEnabled'])) {
            $data['safeSearchYouTubeEnabled'] = (bool) $data['safeSearchYouTubeEnabled'];
        }
        if (\array_key_exists('safeSearchBingEnabled', $data) && \is_int($data['safeSearchBingEnabled'])) {
            $data['safeSearchBingEnabled'] = (bool) $data['safeSearchBingEnabled'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('filteringLevel', $data)) {
            $object->filteringLevel = $data['filteringLevel'];
        }
        if (\array_key_exists('blockCategories', $data)) {
            $values = [];
            foreach ($data['blockCategories'] as $value) {
                $values[] = $value;
            }
            $object->blockCategories = $values;
        }
        if (\array_key_exists('safeSearchGoogleEnabled', $data)) {
            $object->safeSearchGoogleEnabled = $data['safeSearchGoogleEnabled'];
        }
        if (\array_key_exists('safeSearchGoogleDns', $data)) {
            $object->safeSearchGoogleDns = $data['safeSearchGoogleDns'];
        }
        if (\array_key_exists('safeSearchYouTubeEnabled', $data)) {
            $object->safeSearchYouTubeEnabled = $data['safeSearchYouTubeEnabled'];
        }
        if (\array_key_exists('safeSearchYouTubeDns', $data)) {
            $object->safeSearchYouTubeDns = $data['safeSearchYouTubeDns'];
        }
        if (\array_key_exists('safeSearchBingEnabled', $data)) {
            $object->safeSearchBingEnabled = $data['safeSearchBingEnabled'];
        }
        if (\array_key_exists('safeSearchBingDns', $data)) {
            $object->safeSearchBingDns = $data['safeSearchBingDns'];
        }
        if (\array_key_exists('whitelist', $data)) {
            $values_1 = [];
            foreach ($data['whitelist'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->whitelist = $values_1;
        }
        if (\array_key_exists('blacklist', $data)) {
            $values_2 = [];
            foreach ($data['blacklist'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->blacklist = $values_2;
        }
        if (\array_key_exists('blockByThreatLevelConfig', $data)) {
            $object->blockByThreatLevelConfig = $this->denormalizer->denormalize($data['blockByThreatLevelConfig'], \Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfig::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('filteringLevel', get_object_vars($data)) && null !== ($data->filteringLevel ?? null)) {
            $dataArray['filteringLevel'] = $data->filteringLevel ?? null;
        }
        if (array_key_exists('blockCategories', get_object_vars($data)) && null !== ($data->blockCategories ?? null)) {
            $values = [];
            foreach ($data->blockCategories ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['blockCategories'] = $values;
        }
        if (array_key_exists('safeSearchGoogleEnabled', get_object_vars($data)) && null !== ($data->safeSearchGoogleEnabled ?? null)) {
            $dataArray['safeSearchGoogleEnabled'] = $data->safeSearchGoogleEnabled ?? null;
        }
        if (array_key_exists('safeSearchGoogleDns', get_object_vars($data)) && null !== ($data->safeSearchGoogleDns ?? null)) {
            $dataArray['safeSearchGoogleDns'] = $data->safeSearchGoogleDns ?? null;
        }
        if (array_key_exists('safeSearchYouTubeEnabled', get_object_vars($data)) && null !== ($data->safeSearchYouTubeEnabled ?? null)) {
            $dataArray['safeSearchYouTubeEnabled'] = $data->safeSearchYouTubeEnabled ?? null;
        }
        if (array_key_exists('safeSearchYouTubeDns', get_object_vars($data)) && null !== ($data->safeSearchYouTubeDns ?? null)) {
            $dataArray['safeSearchYouTubeDns'] = $data->safeSearchYouTubeDns ?? null;
        }
        if (array_key_exists('safeSearchBingEnabled', get_object_vars($data)) && null !== ($data->safeSearchBingEnabled ?? null)) {
            $dataArray['safeSearchBingEnabled'] = $data->safeSearchBingEnabled ?? null;
        }
        if (array_key_exists('safeSearchBingDns', get_object_vars($data)) && null !== ($data->safeSearchBingDns ?? null)) {
            $dataArray['safeSearchBingDns'] = $data->safeSearchBingDns ?? null;
        }
        if (array_key_exists('whitelist', get_object_vars($data)) && null !== ($data->whitelist ?? null)) {
            $values_1 = [];
            foreach ($data->whitelist ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['whitelist'] = $values_1;
        }
        if (array_key_exists('blacklist', get_object_vars($data)) && null !== ($data->blacklist ?? null)) {
            $values_2 = [];
            foreach ($data->blacklist ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['blacklist'] = $values_2;
        }
        if (array_key_exists('blockByThreatLevelConfig', get_object_vars($data)) && null !== ($data->blockByThreatLevelConfig ?? null)) {
            $dataArray['blockByThreatLevelConfig'] = ($data->blockByThreatLevelConfig ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->blockByThreatLevelConfig ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\UrlFilteringModifyUrlFilteringPolicy::class => false];
    }
}