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
            $object->setServer($data['server']);
            unset($data['server']);
        }
        if (\array_key_exists('port', $data)) {
            $object->setPort($data['port']);
            unset($data['port']);
        }
        if (\array_key_exists('tls', $data)) {
            $object->setTls($data['tls']);
            unset($data['tls']);
        }
        if (\array_key_exists('format', $data)) {
            $object->setFormat($data['format']);
            unset($data['format']);
        }
        if (\array_key_exists('logline', $data)) {
            $object->setLogline($data['logline']);
            unset($data['logline']);
        }
        if (\array_key_exists('sd', $data)) {
            $object->setSd($data['sd']);
            unset($data['sd']);
        }
        if (\array_key_exists('ca', $data)) {
            $object->setCa($data['ca']);
            unset($data['ca']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
            unset($data['key']);
        }
        if (\array_key_exists('cert', $data)) {
            $object->setCert($data['cert']);
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
        $dataArray['server'] = $data->getServer();
        $dataArray['port'] = $data->getPort();
        $dataArray['tls'] = $data->getTls();
        $dataArray['format'] = $data->getFormat();
        if ($data->isInitialized('logline') && null !== $data->getLogline()) {
            $dataArray['logline'] = $data->getLogline();
        }
        if ($data->isInitialized('sd') && null !== $data->getSd()) {
            $dataArray['sd'] = $data->getSd();
        }
        if ($data->isInitialized('ca') && null !== $data->getCa()) {
            $dataArray['ca'] = $data->getCa();
        }
        if ($data->isInitialized('key') && null !== $data->getKey()) {
            $dataArray['key'] = $data->getKey();
        }
        if ($data->isInitialized('cert') && null !== $data->getCert()) {
            $dataArray['cert'] = $data->getCert();
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