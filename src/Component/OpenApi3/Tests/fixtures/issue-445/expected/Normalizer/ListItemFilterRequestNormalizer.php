<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ListItemFilterRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ListItemFilterRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ListItemFilterRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ListItemFilterRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('includeAllSchemaChildren', $data) && \is_int($data['includeAllSchemaChildren'])) {
            $data['includeAllSchemaChildren'] = (bool) $data['includeAllSchemaChildren'];
        }
        if (\array_key_exists('searchString', $data) && $data['searchString'] !== null) {
            $object->searchString = $data['searchString'];
        }
        elseif (\array_key_exists('searchString', $data) && $data['searchString'] === null) {
            $object->searchString = null;
        }
        if (\array_key_exists('filter', $data) && $data['filter'] !== null) {
            $value = $data['filter'];
            if (is_array($data['filter']) and \array_key_exists('kind', $data['filter'])) {
                $value = $this->denormalizer->denormalize($data['filter'], \PicturePark\API\Model\FilterBase::class, 'json', $context);
            }
            $object->filter = $value;
        }
        elseif (\array_key_exists('filter', $data) && $data['filter'] === null) {
            $object->filter = null;
        }
        if (\array_key_exists('includeAllSchemaChildren', $data)) {
            $object->includeAllSchemaChildren = $data['includeAllSchemaChildren'];
        }
        if (\array_key_exists('schemaIds', $data) && $data['schemaIds'] !== null) {
            $values = [];
            foreach ($data['schemaIds'] as $value_1) {
                $values[] = $value_1;
            }
            $object->schemaIds = $values;
        }
        elseif (\array_key_exists('schemaIds', $data) && $data['schemaIds'] === null) {
            $object->schemaIds = null;
        }
        if (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] !== null) {
            $values_1 = [];
            foreach ($data['searchLanguages'] as $value_2) {
                $values_1[] = $value_2;
            }
            $object->searchLanguages = $values_1;
        }
        elseif (\array_key_exists('searchLanguages', $data) && $data['searchLanguages'] === null) {
            $object->searchLanguages = null;
        }
        if (\array_key_exists('brokenDependenciesFilter', $data)) {
            $value_3 = $data['brokenDependenciesFilter'];
            if (is_string($data['brokenDependenciesFilter'])) {
                $value_3 = $data['brokenDependenciesFilter'];
            }
            $object->brokenDependenciesFilter = $value_3;
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('searchString', get_object_vars($data)) && null !== ($data->searchString ?? null)) {
            $dataArray['searchString'] = $data->searchString ?? null;
        }
        if (array_key_exists('filter', get_object_vars($data)) && null !== ($data->filter ?? null)) {
            $value = $data->filter ?? null;
            if (is_object($data->filter ?? null)) {
                $value = ($data->filter ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->filter ?? null, 'json', $context));
            }
            $dataArray['filter'] = $value;
        }
        $dataArray['includeAllSchemaChildren'] = $data->includeAllSchemaChildren ?? null;
        if (array_key_exists('schemaIds', get_object_vars($data)) && null !== ($data->schemaIds ?? null)) {
            $values = [];
            foreach ($data->schemaIds ?? null as $value_1) {
                $values[] = $value_1;
            }
            $dataArray['schemaIds'] = $values;
        }
        if (array_key_exists('searchLanguages', get_object_vars($data)) && null !== ($data->searchLanguages ?? null)) {
            $values_1 = [];
            foreach ($data->searchLanguages ?? null as $value_2) {
                $values_1[] = $value_2;
            }
            $dataArray['searchLanguages'] = $values_1;
        }
        $value_3 = $data->brokenDependenciesFilter ?? null;
        if (is_string($data->brokenDependenciesFilter ?? null)) {
            $value_3 = $data->brokenDependenciesFilter ?? null;
        }
        $dataArray['brokenDependenciesFilter'] = $value_3;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ListItemFilterRequest::class => false];
    }
}