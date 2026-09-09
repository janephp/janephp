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
class ResponseDatabaseConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('config', $data)) {
            $value = $data['config'];
            if (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\RedisAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\ValkeyAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class, 'json', $context);
            }
            $object->config = $value;
            unset($data['config']);
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
        $value = $data->config;
        if (is_object($data->config)) {
            $normalized = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized) : $normalized;
        } elseif (is_object($data->config)) {
            $normalized_1 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_1) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_1) : $normalized_1;
        } elseif (is_object($data->config)) {
            $normalized_2 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_2) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_2) : $normalized_2;
        } elseif (is_object($data->config)) {
            $normalized_3 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_3) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_3) : $normalized_3;
        } elseif (is_object($data->config)) {
            $normalized_4 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_4) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_4) : $normalized_4;
        } elseif (is_object($data->config)) {
            $normalized_5 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_5) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_5) : $normalized_5;
        } elseif (is_object($data->config)) {
            $normalized_6 = $this->normalizer->normalize($data->config, 'json', $context);
            $value = \is_iterable($normalized_6) ? new \Jane\Generated\DigitalOcean\Runtime\JsonObject($normalized_6) : $normalized_6;
        }
        $dataArray['config'] = $value;
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\ResponseDatabaseConfig::class => false];
    }
}