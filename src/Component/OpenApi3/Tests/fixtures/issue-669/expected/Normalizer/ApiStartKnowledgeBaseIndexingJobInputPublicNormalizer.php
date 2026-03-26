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
class ApiStartKnowledgeBaseIndexingJobInputPublicNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data_source_uuids', $data)) {
            $values = [];
            foreach ($data['data_source_uuids'] as $value) {
                $values[] = $value;
            }
            $object->setDataSourceUuids($values);
            unset($data['data_source_uuids']);
        }
        if (\array_key_exists('knowledge_base_uuid', $data)) {
            $object->setKnowledgeBaseUuid($data['knowledge_base_uuid']);
            unset($data['knowledge_base_uuid']);
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
        if ($data->isInitialized('dataSourceUuids') && null !== $data->getDataSourceUuids()) {
            $values = [];
            foreach ($data->getDataSourceUuids() as $value) {
                $values[] = $value;
            }
            $dataArray['data_source_uuids'] = $values;
        }
        if ($data->isInitialized('knowledgeBaseUuid') && null !== $data->getKnowledgeBaseUuid()) {
            $dataArray['knowledge_base_uuid'] = $data->getKnowledgeBaseUuid();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiStartKnowledgeBaseIndexingJobInputPublic::class => false];
    }
}