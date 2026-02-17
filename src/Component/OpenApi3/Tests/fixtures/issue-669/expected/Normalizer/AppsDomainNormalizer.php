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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\AppsDomain();
        if (\array_key_exists('rotate_validation_records', $data) && \is_int($data['rotate_validation_records'])) {
            $data['rotate_validation_records'] = (bool) $data['rotate_validation_records'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('phase', $data)) {
            $object->setPhase($data['phase']);
            unset($data['phase']);
        }
        if (\array_key_exists('progress', $data)) {
            $object->setProgress($this->denormalizer->denormalize($data['progress'], \Jane\Generated\DigitalOcean\Model\AppsDomainProgress::class, 'json', $context));
            unset($data['progress']);
        }
        if (\array_key_exists('spec', $data)) {
            $object->setSpec($this->denormalizer->denormalize($data['spec'], \Jane\Generated\DigitalOcean\Model\AppDomainSpec::class, 'json', $context));
            unset($data['spec']);
        }
        if (\array_key_exists('validations', $data)) {
            $values = [];
            foreach ($data['validations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppDomainValidation::class, 'json', $context);
            }
            $object->setValidations($values);
            unset($data['validations']);
        }
        if (\array_key_exists('rotate_validation_records', $data)) {
            $object->setRotateValidationRecords($data['rotate_validation_records']);
            unset($data['rotate_validation_records']);
        }
        if (\array_key_exists('certificate_expires_at', $data)) {
            $object->setCertificateExpiresAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['certificate_expires_at']));
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
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('phase') && null !== $data->getPhase()) {
            $dataArray['phase'] = $data->getPhase();
        }
        if ($data->isInitialized('progress') && null !== $data->getProgress()) {
            $dataArray['progress'] = $this->normalizer->normalize($data->getProgress(), 'json', $context);
        }
        if ($data->isInitialized('spec') && null !== $data->getSpec()) {
            $dataArray['spec'] = $this->normalizer->normalize($data->getSpec(), 'json', $context);
        }
        if ($data->isInitialized('validations') && null !== $data->getValidations()) {
            $values = [];
            foreach ($data->getValidations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['validations'] = $values;
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
        return [\Jane\Generated\DigitalOcean\Model\AppsDomain::class => false];
    }
}