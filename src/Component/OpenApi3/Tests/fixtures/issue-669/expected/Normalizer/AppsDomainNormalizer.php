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
class AppsDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppsDomain::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppsDomain::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppsDomain();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('rotate_validation_records', $data) && \is_int($data['rotate_validation_records'])) {
            $data['rotate_validation_records'] = (bool) $data['rotate_validation_records'];
        }
        if (\array_key_exists('id', $data)) {
            $object->id = $data['id'];
            unset($data['id']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->phase = $data['phase'];
            unset($data['phase']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->progress = $this->denormalizer->denormalize($data['progress'], \Jane\Generated\DigitalOcean\Model\AppsDomainProgress::class, 'json', $context);
            unset($data['progress']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->spec = $this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppDomainSpec::class, 'json', $context);
            unset($data['spec']);
        }
        if (\array_key_exists('validations', $data)) {
            $values = [];
            foreach ($data['validations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppDomainValidation::class, 'json', $context);
            }
            $object->validations = $values;
            unset($data['validations']);
        }
        if (\array_key_exists('rotate_validation_records', $data)) {
            $object->rotateValidationRecords = $data['rotate_validation_records'];
            unset($data['rotate_validation_records']);
        }
        if (\array_key_exists('certificate_expires_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['certificate_expires_at']);
            if (false === $date) {
                throw new \Jane\Generated\DigitalOcean\Runtime\Normalizer\InvalidDateException($data['certificate_expires_at'], 'Y-m-d\TH:i:sP');
            }
            $object->certificateExpiresAt = $date;
            unset($data['certificate_expires_at']);
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
        if (array_key_exists('id', get_object_vars($data)) && null !== ($data->id ?? null)) {
            $dataArray['id'] = $data->id ?? null;
        }
        if (array_key_exists('phase', get_object_vars($data)) && null !== ($data->phase ?? null)) {
            $dataArray['phase'] = $data->phase ?? null;
        }
        if (array_key_exists('progress', get_object_vars($data)) && null !== ($data->progress ?? null)) {
            $dataArray['progress'] = ($data->progress ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->progress ?? null, 'json', $context));
        }
        if (array_key_exists('spec', get_object_vars($data)) && null !== ($data->spec ?? null)) {
            $dataArray['spec'] = ($data->spec ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->spec ?? null, 'json', $context));
        }
        if (array_key_exists('validations', get_object_vars($data)) && null !== ($data->validations ?? null)) {
            $values = [];
            foreach ($data->validations ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['validations'] = $values;
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
        return [\Jane\Generated\DigitalOcean\Model\AppsDomain::class => false];
    }
}