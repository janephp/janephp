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
class RsyslogLogsinkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\RsyslogLogsink();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('tls', $data) && \is_int($data['tls'])) {
            $data['tls'] = (bool) $data['tls'];
        }
        if (\array_key_exists('server', $data)) {
            $object->server = $data['server'];
            unset($data['server']);
        }
        if (\array_key_exists('port', $data)) {
            $object->port = $data['port'];
            unset($data['port']);
        }
        if (\array_key_exists('tls', $data)) {
            $object->tls = $data['tls'];
            unset($data['tls']);
        }
        if (\array_key_exists('format', $data)) {
            $object->format = $data['format'];
            unset($data['format']);
        }
        if (\array_key_exists('logline', $data)) {
            $object->logline = $data['logline'];
            unset($data['logline']);
        }
        if (\array_key_exists('sd', $data)) {
            $object->sd = $data['sd'];
            unset($data['sd']);
        }
        if (\array_key_exists('ca', $data)) {
            $object->ca = $data['ca'];
            unset($data['ca']);
        }
        if (\array_key_exists('key', $data)) {
            $object->key = $data['key'];
            unset($data['key']);
        }
        if (\array_key_exists('cert', $data)) {
            $object->cert = $data['cert'];
            unset($data['cert']);
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
        $dataArray['server'] = $data->server ?? null;
        $dataArray['port'] = $data->port ?? null;
        $dataArray['tls'] = $data->tls ?? null;
        $dataArray['format'] = $data->format ?? null;
        if (array_key_exists('logline', get_object_vars($data)) && null !== ($data->logline ?? null)) {
            $dataArray['logline'] = $data->logline ?? null;
        }
        if (array_key_exists('sd', get_object_vars($data)) && null !== ($data->sd ?? null)) {
            $dataArray['sd'] = $data->sd ?? null;
        }
        if (array_key_exists('ca', get_object_vars($data)) && null !== ($data->ca ?? null)) {
            $dataArray['ca'] = $data->ca ?? null;
        }
        if (array_key_exists('key', get_object_vars($data)) && null !== ($data->key ?? null)) {
            $dataArray['key'] = $data->key ?? null;
        }
        if (array_key_exists('cert', get_object_vars($data)) && null !== ($data->cert ?? null)) {
            $dataArray['cert'] = $data->cert ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\RsyslogLogsink::class => false];
    }
}