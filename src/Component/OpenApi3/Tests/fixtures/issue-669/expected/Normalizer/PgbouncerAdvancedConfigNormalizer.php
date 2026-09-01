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
        $object = new \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('server_reset_query_always', $data) && \is_int($data['server_reset_query_always'])) {
            $data['server_reset_query_always'] = (bool) $data['server_reset_query_always'];
        }
        if (\array_key_exists('server_reset_query_always', $data)) {
            $object->serverResetQueryAlways = $data['server_reset_query_always'];
            unset($data['server_reset_query_always']);
        }
        if (\array_key_exists('ignore_startup_parameters', $data)) {
            $values = [];
            foreach ($data['ignore_startup_parameters'] as $value) {
                $values[] = $value;
            }
            $object->ignoreStartupParameters = $values;
            unset($data['ignore_startup_parameters']);
        }
        if (\array_key_exists('min_pool_size', $data)) {
            $object->minPoolSize = $data['min_pool_size'];
            unset($data['min_pool_size']);
        }
        if (\array_key_exists('server_lifetime', $data)) {
            $object->serverLifetime = $data['server_lifetime'];
            unset($data['server_lifetime']);
        }
        if (\array_key_exists('server_idle_timeout', $data)) {
            $object->serverIdleTimeout = $data['server_idle_timeout'];
            unset($data['server_idle_timeout']);
        }
        if (\array_key_exists('autodb_pool_size', $data)) {
            $object->autodbPoolSize = $data['autodb_pool_size'];
            unset($data['autodb_pool_size']);
        }
        if (\array_key_exists('autodb_pool_mode', $data)) {
            $object->autodbPoolMode = $data['autodb_pool_mode'];
            unset($data['autodb_pool_mode']);
        }
        if (\array_key_exists('autodb_max_db_connections', $data)) {
            $object->autodbMaxDbConnections = $data['autodb_max_db_connections'];
            unset($data['autodb_max_db_connections']);
        }
        if (\array_key_exists('autodb_idle_timeout', $data)) {
            $object->autodbIdleTimeout = $data['autodb_idle_timeout'];
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
        if (array_key_exists('serverResetQueryAlways', get_object_vars($data)) && null !== ($data->serverResetQueryAlways ?? null)) {
            $dataArray['server_reset_query_always'] = $data->serverResetQueryAlways ?? null;
        }
        if (array_key_exists('ignoreStartupParameters', get_object_vars($data)) && null !== ($data->ignoreStartupParameters ?? null)) {
            $values = [];
            foreach ($data->ignoreStartupParameters ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['ignore_startup_parameters'] = $values;
        }
        if (array_key_exists('minPoolSize', get_object_vars($data)) && null !== ($data->minPoolSize ?? null)) {
            $dataArray['min_pool_size'] = $data->minPoolSize ?? null;
        }
        if (array_key_exists('serverLifetime', get_object_vars($data)) && null !== ($data->serverLifetime ?? null)) {
            $dataArray['server_lifetime'] = $data->serverLifetime ?? null;
        }
        if (array_key_exists('serverIdleTimeout', get_object_vars($data)) && null !== ($data->serverIdleTimeout ?? null)) {
            $dataArray['server_idle_timeout'] = $data->serverIdleTimeout ?? null;
        }
        if (array_key_exists('autodbPoolSize', get_object_vars($data)) && null !== ($data->autodbPoolSize ?? null)) {
            $dataArray['autodb_pool_size'] = $data->autodbPoolSize ?? null;
        }
        if (array_key_exists('autodbPoolMode', get_object_vars($data)) && null !== ($data->autodbPoolMode ?? null)) {
            $dataArray['autodb_pool_mode'] = $data->autodbPoolMode ?? null;
        }
        if (array_key_exists('autodbMaxDbConnections', get_object_vars($data)) && null !== ($data->autodbMaxDbConnections ?? null)) {
            $dataArray['autodb_max_db_connections'] = $data->autodbMaxDbConnections ?? null;
        }
        if (array_key_exists('autodbIdleTimeout', get_object_vars($data)) && null !== ($data->autodbIdleTimeout ?? null)) {
            $dataArray['autodb_idle_timeout'] = $data->autodbIdleTimeout ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class => false];
    }
}