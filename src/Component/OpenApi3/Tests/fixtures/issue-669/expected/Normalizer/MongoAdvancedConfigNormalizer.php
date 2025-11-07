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
class MongoAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('default_read_concern', $data)) {
            $object->setDefaultReadConcern($data['default_read_concern']);
            unset($data['default_read_concern']);
        }
        if (\array_key_exists('default_write_concern', $data)) {
            $object->setDefaultWriteConcern($data['default_write_concern']);
            unset($data['default_write_concern']);
        }
        if (\array_key_exists('transaction_lifetime_limit_seconds', $data)) {
            $object->setTransactionLifetimeLimitSeconds($data['transaction_lifetime_limit_seconds']);
            unset($data['transaction_lifetime_limit_seconds']);
        }
        if (\array_key_exists('slow_op_threshold_ms', $data)) {
            $object->setSlowOpThresholdMs($data['slow_op_threshold_ms']);
            unset($data['slow_op_threshold_ms']);
        }
        if (\array_key_exists('verbosity', $data)) {
            $object->setVerbosity($data['verbosity']);
            unset($data['verbosity']);
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
        if ($data->isInitialized('defaultReadConcern') && null !== $data->getDefaultReadConcern()) {
            $dataArray['default_read_concern'] = $data->getDefaultReadConcern();
        }
        if ($data->isInitialized('defaultWriteConcern') && null !== $data->getDefaultWriteConcern()) {
            $dataArray['default_write_concern'] = $data->getDefaultWriteConcern();
        }
        if ($data->isInitialized('transactionLifetimeLimitSeconds') && null !== $data->getTransactionLifetimeLimitSeconds()) {
            $dataArray['transaction_lifetime_limit_seconds'] = $data->getTransactionLifetimeLimitSeconds();
        }
        if ($data->isInitialized('slowOpThresholdMs') && null !== $data->getSlowOpThresholdMs()) {
            $dataArray['slow_op_threshold_ms'] = $data->getSlowOpThresholdMs();
        }
        if ($data->isInitialized('verbosity') && null !== $data->getVerbosity()) {
            $dataArray['verbosity'] = $data->getVerbosity();
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
        return [\Jane\Generated\DigitalOcean\Model\MongoAdvancedConfig::class => false];
    }
}