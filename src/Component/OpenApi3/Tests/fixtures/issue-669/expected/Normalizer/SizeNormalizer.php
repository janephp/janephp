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
class SizeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\Size::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\Size::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\Size();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('transfer', $data) && \is_int($data['transfer'])) {
            $data['transfer'] = (float) $data['transfer'];
        }
        if (\array_key_exists('price_monthly', $data) && \is_int($data['price_monthly'])) {
            $data['price_monthly'] = (float) $data['price_monthly'];
        }
        if (\array_key_exists('price_hourly', $data) && \is_int($data['price_hourly'])) {
            $data['price_hourly'] = (float) $data['price_hourly'];
        }
        if (\array_key_exists('available', $data) && \is_int($data['available'])) {
            $data['available'] = (bool) $data['available'];
        }
        if (\array_key_exists('slug', $data)) {
            $object->setSlug($data['slug']);
            unset($data['slug']);
        }
        if (\array_key_exists('memory', $data)) {
            $object->setMemory($data['memory']);
            unset($data['memory']);
        }
        if (\array_key_exists('vcpus', $data)) {
            $object->setVcpus($data['vcpus']);
            unset($data['vcpus']);
        }
        if (\array_key_exists('disk', $data)) {
            $object->setDisk($data['disk']);
            unset($data['disk']);
        }
        if (\array_key_exists('transfer', $data)) {
            $object->setTransfer($data['transfer']);
            unset($data['transfer']);
        }
        if (\array_key_exists('price_monthly', $data)) {
            $object->setPriceMonthly($data['price_monthly']);
            unset($data['price_monthly']);
        }
        if (\array_key_exists('price_hourly', $data)) {
            $object->setPriceHourly($data['price_hourly']);
            unset($data['price_hourly']);
        }
        if (\array_key_exists('regions', $data)) {
            $values = [];
            foreach ($data['regions'] as $value) {
                $values[] = $value;
            }
            $object->setRegions($values);
            unset($data['regions']);
        }
        if (\array_key_exists('available', $data)) {
            $object->setAvailable($data['available']);
            unset($data['available']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('disk_info', $data)) {
            $values_1 = [];
            foreach ($data['disk_info'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\DiskInfo::class, 'json', $context);
            }
            $object->setDiskInfo($values_1);
            unset($data['disk_info']);
        }
        if (\array_key_exists('gpu_info', $data)) {
            $object->setGpuInfo($this->denormalizer->denormalize($data['gpu_info'], \Jane\Generated\DigitalOcean\Model\GpuInfo::class, 'json', $context));
            unset($data['gpu_info']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['slug'] = $data->getSlug();
        $dataArray['memory'] = $data->getMemory();
        $dataArray['vcpus'] = $data->getVcpus();
        $dataArray['disk'] = $data->getDisk();
        $dataArray['transfer'] = $data->getTransfer();
        $dataArray['price_monthly'] = $data->getPriceMonthly();
        $dataArray['price_hourly'] = $data->getPriceHourly();
        $values = [];
        foreach ($data->getRegions() as $value) {
            $values[] = $value;
        }
        $dataArray['regions'] = $values;
        $dataArray['available'] = $data->getAvailable();
        $dataArray['description'] = $data->getDescription();
        if ($data->isInitialized('diskInfo') && null !== $data->getDiskInfo()) {
            $values_1 = [];
            foreach ($data->getDiskInfo() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $dataArray['disk_info'] = $values_1;
        }
        if ($data->isInitialized('gpuInfo') && null !== $data->getGpuInfo()) {
            $dataArray['gpu_info'] = $this->normalizer->normalize($data->getGpuInfo(), 'json', $context);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\Size::class => false];
    }
}