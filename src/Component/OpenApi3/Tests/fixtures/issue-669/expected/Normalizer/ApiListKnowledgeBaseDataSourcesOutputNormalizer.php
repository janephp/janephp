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
class ApiListKnowledgeBaseDataSourcesOutputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('knowledge_base_data_sources', $data)) {
            $values = [];
            foreach ($data['knowledge_base_data_sources'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\ApiKnowledgeBaseDataSource::class, 'json', $context);
            }
            $object->setKnowledgeBaseDataSources($values);
            unset($data['knowledge_base_data_sources']);
        }
        if (\array_key_exists('links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['links'], \Jane\Generated\DigitalOcean\Model\ApiLinks::class, 'json', $context));
            unset($data['links']);
        }
        if (\array_key_exists('meta', $data)) {
            $object->setMeta($this->denormalizer->denormalize($data['meta'], \Jane\Generated\DigitalOcean\Model\ApiMeta::class, 'json', $context));
            unset($data['meta']);
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
        if ($data->isInitialized('knowledgeBaseDataSources') && null !== $data->getKnowledgeBaseDataSources()) {
            $values = [];
            foreach ($data->getKnowledgeBaseDataSources() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['knowledge_base_data_sources'] = $values;
        }
        if ($data->isInitialized('links') && null !== $data->getLinks()) {
            $dataArray['links'] = $this->normalizer->normalize($data->getLinks(), 'json', $context);
        }
        if ($data->isInitialized('meta') && null !== $data->getMeta()) {
            $dataArray['meta'] = $this->normalizer->normalize($data->getMeta(), 'json', $context);
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
        return [\Jane\Generated\DigitalOcean\Model\ApiListKnowledgeBaseDataSourcesOutput::class => false];
    }
}