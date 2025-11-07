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
class DatabaseConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DatabaseConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DatabaseConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\DatabaseConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class, 'json', $context);
            } elseif (is_array($data['config'])) {
                $value = $this->denormalizer->denormalize($data['config'], \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class, 'json', $context);
            }
            $object->setConfig($value);
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
        if ($data->isInitialized('config') && null !== $data->getConfig()) {
            $value = $data->getConfig();
            if (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            } elseif (is_object($data->getConfig())) {
                $value = $this->normalizer->normalize($data->getConfig(), 'json', $context);
            }
            $dataArray['config'] = $value;
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
        return [\Jane\Generated\DigitalOcean\Model\DatabaseConfig::class => false];
    }
}