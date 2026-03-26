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
class OpensearchIndexBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OpensearchIndexBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OpensearchIndexBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchIndexBase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('index_name', $data)) {
            $object->setIndexName($data['index_name']);
            unset($data['index_name']);
        }
        if (\array_key_exists('number_of_shards', $data)) {
            $object->setNumberOfShards($data['number_of_shards']);
            unset($data['number_of_shards']);
        }
        if (\array_key_exists('number_of_replicas', $data)) {
            $object->setNumberOfReplicas($data['number_of_replicas']);
            unset($data['number_of_replicas']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
            unset($data['size']);
        }
        if (\array_key_exists('created_time', $data)) {
            $object->setCreatedTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_time']));
            unset($data['created_time']);
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
        if ($data->isInitialized('indexName') && null !== $data->getIndexName()) {
            $dataArray['index_name'] = $data->getIndexName();
        }
        if ($data->isInitialized('numberOfShards') && null !== $data->getNumberOfShards()) {
            $dataArray['number_of_shards'] = $data->getNumberOfShards();
        }
        if ($data->isInitialized('numberOfReplicas') && null !== $data->getNumberOfReplicas()) {
            $dataArray['number_of_replicas'] = $data->getNumberOfReplicas();
        }
        if ($data->isInitialized('size') && null !== $data->getSize()) {
            $dataArray['size'] = $data->getSize();
        }
        if ($data->isInitialized('createdTime') && null !== $data->getCreatedTime()) {
            $dataArray['created_time'] = $data->getCreatedTime()->format('Y-m-d\TH:i:sP');
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
        return [\Jane\Generated\DigitalOcean\Model\OpensearchIndexBase::class => false];
    }
}