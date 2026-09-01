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
class DomainRecordAaaaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DomainRecordAaaa::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DomainRecordAaaa::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DomainRecordAaaa();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->type = $data['type'];
            unset($data['type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('data', $data)) {
            $object->data = $data['data'];
            unset($data['data']);
        }
        if (\array_key_exists('priority', $data) && $data['priority'] !== null) {
            $object->priority = $data['priority'];
            unset($data['priority']);
        }
        elseif (\array_key_exists('priority', $data) && $data['priority'] === null) {
            $object->priority = null;
            unset($data['priority']);
        }
        if (\array_key_exists('port', $data) && $data['port'] !== null) {
            $object->port = $data['port'];
            unset($data['port']);
        }
        elseif (\array_key_exists('port', $data) && $data['port'] === null) {
            $object->port = null;
            unset($data['port']);
        }
        if (\array_key_exists('ttl', $data)) {
            $object->ttl = $data['ttl'];
            unset($data['ttl']);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->weight = $data['weight'];
            unset($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->weight = null;
            unset($data['weight']);
        }
        if (\array_key_exists('flags', $data) && $data['flags'] !== null) {
            $object->flags = $data['flags'];
            unset($data['flags']);
        }
        elseif (\array_key_exists('flags', $data) && $data['flags'] === null) {
            $object->flags = null;
            unset($data['flags']);
        }
        if (\array_key_exists('tag', $data) && $data['tag'] !== null) {
            $object->tag = $data['tag'];
            unset($data['tag']);
        }
        elseif (\array_key_exists('tag', $data) && $data['tag'] === null) {
            $object->tag = null;
            unset($data['tag']);
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
        $dataArray['type'] = $data->type ?? null;
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('data', get_object_vars($data)) && null !== ($data->data ?? null)) {
            $dataArray['data'] = $data->data ?? null;
        }
        if (array_key_exists('priority', get_object_vars($data)) && null !== ($data->priority ?? null)) {
            $dataArray['priority'] = $data->priority ?? null;
        }
        if (array_key_exists('port', get_object_vars($data)) && null !== ($data->port ?? null)) {
            $dataArray['port'] = $data->port ?? null;
        }
        if (array_key_exists('ttl', get_object_vars($data)) && null !== ($data->ttl ?? null)) {
            $dataArray['ttl'] = $data->ttl ?? null;
        }
        if (array_key_exists('weight', get_object_vars($data)) && null !== ($data->weight ?? null)) {
            $dataArray['weight'] = $data->weight ?? null;
        }
        if (array_key_exists('flags', get_object_vars($data)) && null !== ($data->flags ?? null)) {
            $dataArray['flags'] = $data->flags ?? null;
        }
        if (array_key_exists('tag', get_object_vars($data)) && null !== ($data->tag ?? null)) {
            $dataArray['tag'] = $data->tag ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\DomainRecordAaaa::class => false];
    }
}