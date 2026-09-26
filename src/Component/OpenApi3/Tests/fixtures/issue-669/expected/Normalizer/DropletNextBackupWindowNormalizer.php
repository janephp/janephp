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
class DropletNextBackupWindowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('start', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['start']);
            if (false === $date) {
                if (is_string($data['start']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['start'])) {
                    try {
                        $date = new \DateTime($data['start']);
                    } catch (\Exception) {
                        throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['start'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['start'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->start = $date;
            unset($data['start']);
        }
        if (\array_key_exists('end', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['end']);
            if (false === $date_1) {
                if (is_string($data['end']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['end'])) {
                    try {
                        $date_1 = new \DateTime($data['end']);
                    } catch (\Exception) {
                        throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['end'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['end'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->end = $date_1;
            unset($data['end']);
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
        if (array_key_exists('start', get_object_vars($data)) && null !== ($data->start ?? null)) {
            $dataArray['start'] = $data->start->format('Y-m-d\TH:i:sP');
        }
        if (array_key_exists('end', get_object_vars($data)) && null !== ($data->end ?? null)) {
            $dataArray['end'] = $data->end->format('Y-m-d\TH:i:sP');
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
        return [\Jane\Generated\DigitalOcean\Model\DropletNextBackupWindow::class => false];
    }
}