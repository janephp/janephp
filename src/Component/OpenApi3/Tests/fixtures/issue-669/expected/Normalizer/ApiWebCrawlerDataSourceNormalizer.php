<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ApiWebCrawlerDataSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('embed_media', $data) && \is_int($data['embed_media'])) {
            $data['embed_media'] = (bool) $data['embed_media'];
        }
        if (\array_key_exists('base_url', $data)) {
            $object->setBaseUrl($data['base_url']);
            unset($data['base_url']);
        }
        if (\array_key_exists('crawling_option', $data)) {
            $object->setCrawlingOption($data['crawling_option']);
            unset($data['crawling_option']);
        }
        if (\array_key_exists('embed_media', $data)) {
            $object->setEmbedMedia($data['embed_media']);
            unset($data['embed_media']);
        }
        if (\array_key_exists('exclude_tags', $data)) {
            $values = [];
            foreach ($data['exclude_tags'] as $value) {
                $values[] = $value;
            }
            $object->setExcludeTags($values);
            unset($data['exclude_tags']);
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
        if ($data->isInitialized('baseUrl') && null !== $data->getBaseUrl()) {
            $dataArray['base_url'] = $data->getBaseUrl();
        }
        if ($data->isInitialized('crawlingOption') && null !== $data->getCrawlingOption()) {
            $dataArray['crawling_option'] = $data->getCrawlingOption();
        }
        if ($data->isInitialized('embedMedia') && null !== $data->getEmbedMedia()) {
            $dataArray['embed_media'] = $data->getEmbedMedia();
        }
        if ($data->isInitialized('excludeTags') && null !== $data->getExcludeTags()) {
            $values = [];
            foreach ($data->getExcludeTags() as $value) {
                $values[] = $value;
            }
            $dataArray['exclude_tags'] = $values;
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class => false];
    }
}