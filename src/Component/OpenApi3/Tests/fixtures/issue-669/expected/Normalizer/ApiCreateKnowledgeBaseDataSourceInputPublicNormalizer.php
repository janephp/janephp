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
class ApiCreateKnowledgeBaseDataSourceInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aws_data_source', $data)) {
            $object->setAwsDataSource($this->denormalizer->denormalize($data['aws_data_source'], \Jane\Generated\DigitalOcean\Model\ApiAWSDataSource::class, 'json', $context));
            unset($data['aws_data_source']);
        }
        if (\array_key_exists('chunking_algorithm', $data)) {
            $object->setChunkingAlgorithm($data['chunking_algorithm']);
            unset($data['chunking_algorithm']);
        }
        if (\array_key_exists('chunking_options', $data)) {
            $object->setChunkingOptions($this->denormalizer->denormalize($data['chunking_options'], \Jane\Generated\DigitalOcean\Model\ApiChunkingOptions::class, 'json', $context));
            unset($data['chunking_options']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->setKnowledgeBaseUuid($data['knowledge_base_uuid']);
            unset($data['knowledge_base_uuid']);
        }
        if (\array_key_exists('spaces_data_source', $data)) {
            $object->setSpacesDataSource($this->denormalizer->denormalize($data['spaces_data_source'], \Jane\Generated\DigitalOcean\Model\ApiSpacesDataSource::class, 'json', $context));
            unset($data['spaces_data_source']);
        }
        if (\array_key_exists('web_crawler_data_source', $data)) {
            $object->setWebCrawlerDataSource($this->denormalizer->denormalize($data['web_crawler_data_source'], \Jane\Generated\DigitalOcean\Model\ApiWebCrawlerDataSource::class, 'json', $context));
            unset($data['web_crawler_data_source']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('awsDataSource') && null !== $data->getAwsDataSource()) {
            $dataArray['aws_data_source'] = $this->normalizer->normalize($data->getAwsDataSource(), 'json', $context);
        }
        if ($data->isInitialized('chunkingAlgorithm') && null !== $data->getChunkingAlgorithm()) {
            $dataArray['chunking_algorithm'] = $data->getChunkingAlgorithm();
        }
        if ($data->isInitialized('chunkingOptions') && null !== $data->getChunkingOptions()) {
            $dataArray['chunking_options'] = $this->normalizer->normalize($data->getChunkingOptions(), 'json', $context);
        }
        if ($data->isInitialized('knowledgeBaseUuid') && null !== $data->getKnowledgeBaseUuid()) {
            $dataArray['knowledge_base_uuid'] = $data->getKnowledgeBaseUuid();
        }
        if ($data->isInitialized('spacesDataSource') && null !== $data->getSpacesDataSource()) {
            $dataArray['spaces_data_source'] = $this->normalizer->normalize($data->getSpacesDataSource(), 'json', $context);
        }
        if ($data->isInitialized('webCrawlerDataSource') && null !== $data->getWebCrawlerDataSource()) {
            $dataArray['web_crawler_data_source'] = $this->normalizer->normalize($data->getWebCrawlerDataSource(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ApiCreateKnowledgeBaseDataSourceInputPublic::class => false];
    }
}