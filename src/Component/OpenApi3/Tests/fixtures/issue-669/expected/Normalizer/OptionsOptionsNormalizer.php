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
class OptionsOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OptionsOptions::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OptionsOptions::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\OptionsOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('kafka', $data)) {
            $object->kafka = $this->denormalizer->denormalize($data['kafka'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsKafka::class, 'json', $context);
            unset($data['kafka']);
        }
        if (\array_key_exists('mongodb', $data)) {
            $object->mongodb = $this->denormalizer->denormalize($data['mongodb'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsMongodb::class, 'json', $context);
            unset($data['mongodb']);
        }
        if (\array_key_exists('pg', $data)) {
            $object->pg = $this->denormalizer->denormalize($data['pg'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsPg::class, 'json', $context);
            unset($data['pg']);
        }
        if (\array_key_exists('mysql', $data)) {
            $object->mysql = $this->denormalizer->denormalize($data['mysql'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsMysql::class, 'json', $context);
            unset($data['mysql']);
        }
        if (\array_key_exists('redis', $data)) {
            $object->redis = $this->denormalizer->denormalize($data['redis'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsRedis::class, 'json', $context);
            unset($data['redis']);
        }
        if (\array_key_exists('valkey', $data)) {
            $object->valkey = $this->denormalizer->denormalize($data['valkey'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsValkey::class, 'json', $context);
            unset($data['valkey']);
        }
        if (\array_key_exists('opensearch', $data)) {
            $object->opensearch = $this->denormalizer->denormalize($data['opensearch'], \Jane\Generated\DigitalOcean\Model\OptionsOptionsOpensearch::class, 'json', $context);
            unset($data['opensearch']);
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
        if (array_key_exists('kafka', get_object_vars($data)) && null !== ($data->kafka ?? null)) {
            $dataArray['kafka'] = ($data->kafka ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->kafka ?? null, 'json', $context));
        }
        if (array_key_exists('mongodb', get_object_vars($data)) && null !== ($data->mongodb ?? null)) {
            $dataArray['mongodb'] = ($data->mongodb ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->mongodb ?? null, 'json', $context));
        }
        if (array_key_exists('pg', get_object_vars($data)) && null !== ($data->pg ?? null)) {
            $dataArray['pg'] = ($data->pg ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->pg ?? null, 'json', $context));
        }
        if (array_key_exists('mysql', get_object_vars($data)) && null !== ($data->mysql ?? null)) {
            $dataArray['mysql'] = ($data->mysql ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->mysql ?? null, 'json', $context));
        }
        if (array_key_exists('redis', get_object_vars($data)) && null !== ($data->redis ?? null)) {
            $dataArray['redis'] = ($data->redis ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->redis ?? null, 'json', $context));
        }
        if (array_key_exists('valkey', get_object_vars($data)) && null !== ($data->valkey ?? null)) {
            $dataArray['valkey'] = ($data->valkey ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->valkey ?? null, 'json', $context));
        }
        if (array_key_exists('opensearch', get_object_vars($data)) && null !== ($data->opensearch ?? null)) {
            $dataArray['opensearch'] = ($data->opensearch ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->opensearch ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\OptionsOptions::class => false];
    }
}