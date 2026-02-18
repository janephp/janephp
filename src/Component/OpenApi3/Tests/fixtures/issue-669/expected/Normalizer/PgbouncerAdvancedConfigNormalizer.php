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
class PgbouncerAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig();
        if (\array_key_exists('server_reset_query_always', $data) && \is_int($data['server_reset_query_always'])) {
            $data['server_reset_query_always'] = (bool) $data['server_reset_query_always'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('server_reset_query_always', $data)) {
            $object->setServerResetQueryAlways($data['server_reset_query_always']);
            unset($data['server_reset_query_always']);
        }
        if (\array_key_exists('ignore_startup_parameters', $data)) {
            $values = [];
            foreach ($data['ignore_startup_parameters'] as $value) {
                $values[] = $value;
            }
            $object->setIgnoreStartupParameters($values);
            unset($data['ignore_startup_parameters']);
        }
        if (\array_key_exists('min_pool_size', $data)) {
            $object->setMinPoolSize($data['min_pool_size']);
            unset($data['min_pool_size']);
        }
        if (\array_key_exists('server_lifetime', $data)) {
            $object->setServerLifetime($data['server_lifetime']);
            unset($data['server_lifetime']);
        }
        if (\array_key_exists('server_idle_timeout', $data)) {
            $object->setServerIdleTimeout($data['server_idle_timeout']);
            unset($data['server_idle_timeout']);
        }
        if (\array_key_exists('autodb_pool_size', $data)) {
            $object->setAutodbPoolSize($data['autodb_pool_size']);
            unset($data['autodb_pool_size']);
        }
        if (\array_key_exists('autodb_pool_mode', $data)) {
            $object->setAutodbPoolMode($data['autodb_pool_mode']);
            unset($data['autodb_pool_mode']);
        }
        if (\array_key_exists('autodb_max_db_connections', $data)) {
            $object->setAutodbMaxDbConnections($data['autodb_max_db_connections']);
            unset($data['autodb_max_db_connections']);
        }
        if (\array_key_exists('autodb_idle_timeout', $data)) {
            $object->setAutodbIdleTimeout($data['autodb_idle_timeout']);
            unset($data['autodb_idle_timeout']);
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
        if ($data->isInitialized('serverResetQueryAlways') && null !== $data->getServerResetQueryAlways()) {
            $dataArray['server_reset_query_always'] = $data->getServerResetQueryAlways();
        }
        if ($data->isInitialized('ignoreStartupParameters') && null !== $data->getIgnoreStartupParameters()) {
            $values = [];
            foreach ($data->getIgnoreStartupParameters() as $value) {
                $values[] = $value;
            }
            $dataArray['ignore_startup_parameters'] = $values;
        }
        if ($data->isInitialized('minPoolSize') && null !== $data->getMinPoolSize()) {
            $dataArray['min_pool_size'] = $data->getMinPoolSize();
        }
        if ($data->isInitialized('serverLifetime') && null !== $data->getServerLifetime()) {
            $dataArray['server_lifetime'] = $data->getServerLifetime();
        }
        if ($data->isInitialized('serverIdleTimeout') && null !== $data->getServerIdleTimeout()) {
            $dataArray['server_idle_timeout'] = $data->getServerIdleTimeout();
        }
        if ($data->isInitialized('autodbPoolSize') && null !== $data->getAutodbPoolSize()) {
            $dataArray['autodb_pool_size'] = $data->getAutodbPoolSize();
        }
        if ($data->isInitialized('autodbPoolMode') && null !== $data->getAutodbPoolMode()) {
            $dataArray['autodb_pool_mode'] = $data->getAutodbPoolMode();
        }
        if ($data->isInitialized('autodbMaxDbConnections') && null !== $data->getAutodbMaxDbConnections()) {
            $dataArray['autodb_max_db_connections'] = $data->getAutodbMaxDbConnections();
        }
        if ($data->isInitialized('autodbIdleTimeout') && null !== $data->getAutodbIdleTimeout()) {
            $dataArray['autodb_idle_timeout'] = $data->getAutodbIdleTimeout();
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
        return [\Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class => false];
    }
}