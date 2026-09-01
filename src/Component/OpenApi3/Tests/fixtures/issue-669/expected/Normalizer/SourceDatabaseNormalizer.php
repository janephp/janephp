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
class SourceDatabaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\SourceDatabase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\SourceDatabase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\SourceDatabase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('disable_ssl', $data) && \is_int($data['disable_ssl'])) {
            $data['disable_ssl'] = (bool) $data['disable_ssl'];
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $this->denormalizer->denormalize($data['source'], \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class, 'json', $context);
            unset($data['source']);
        }
        if (\array_key_exists('disable_ssl', $data)) {
            $object->disableSsl = $data['disable_ssl'];
            unset($data['disable_ssl']);
        }
        if (\array_key_exists('ignore_dbs', $data)) {
            $values = [];
            foreach ($data['ignore_dbs'] as $value) {
                $values[] = $value;
            }
            $object->ignoreDbs = $values;
            unset($data['ignore_dbs']);
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
        $dataArray['source'] = ($data->source ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->source ?? null, 'json', $context));
        if (array_key_exists('disableSsl', get_object_vars($data)) && null !== ($data->disableSsl ?? null)) {
            $dataArray['disable_ssl'] = $data->disableSsl ?? null;
        }
        if (array_key_exists('ignoreDbs', get_object_vars($data)) && null !== ($data->ignoreDbs ?? null)) {
            $values = [];
            foreach ($data->ignoreDbs ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['ignore_dbs'] = $values;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\SourceDatabase::class => false];
    }
}