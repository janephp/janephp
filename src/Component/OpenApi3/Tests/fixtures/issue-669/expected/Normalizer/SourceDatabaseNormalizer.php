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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\SourceDatabase();
        if (\array_key_exists('disable_ssl', $data) && \is_int($data['disable_ssl'])) {
            $data['disable_ssl'] = (bool) $data['disable_ssl'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($this->denormalizer->denormalize($data['source'], \Jane\Generated\DigitalOcean\Model\SourceDatabaseSource::class, 'json', $context));
            unset($data['source']);
        }
        if (\array_key_exists('disable_ssl', $data)) {
            $object->setDisableSsl($data['disable_ssl']);
            unset($data['disable_ssl']);
        }
        if (\array_key_exists('ignore_dbs', $data)) {
            $values = [];
            foreach ($data['ignore_dbs'] as $value) {
                $values[] = $value;
            }
            $object->setIgnoreDbs($values);
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
        $dataArray['source'] = $this->normalizer->normalize($data->getSource(), 'json', $context);
        if ($data->isInitialized('disableSsl') && null !== $data->getDisableSsl()) {
            $dataArray['disable_ssl'] = $data->getDisableSsl();
        }
        if ($data->isInitialized('ignoreDbs') && null !== $data->getIgnoreDbs()) {
            $values = [];
            foreach ($data->getIgnoreDbs() as $value) {
                $values[] = $value;
            }
            $dataArray['ignore_dbs'] = $values;
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
        return [\Jane\Generated\DigitalOcean\Model\SourceDatabase::class => false];
    }
}