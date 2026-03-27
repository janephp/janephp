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
class ResponseAppsValidateRollbackNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('valid', $data) && \is_int($data['valid'])) {
            $data['valid'] = (bool) $data['valid'];
        }
        if (\array_key_exists('valid', $data)) {
            $object->setValid($data['valid']);
            unset($data['valid']);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($this->denormalizer->denormalize($data['error'], \Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollbackError::class, 'json', $context));
            unset($data['error']);
        }
        if (\array_key_exists('warnings', $data)) {
            $values = [];
            foreach ($data['warnings'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppRollbackValidationCondition::class, 'json', $context);
            }
            $object->setWarnings($values);
            unset($data['warnings']);
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
        if ($data->isInitialized('valid') && null !== $data->getValid()) {
            $dataArray['valid'] = $data->getValid();
        }
        if ($data->isInitialized('error') && null !== $data->getError()) {
            $dataArray['error'] = $this->normalizer->normalize($data->getError(), 'json', $context);
        }
        if ($data->isInitialized('warnings') && null !== $data->getWarnings()) {
            $values = [];
            foreach ($data->getWarnings() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['warnings'] = $values;
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
        return [\Jane\Generated\DigitalOcean\Model\ResponseAppsValidateRollback::class => false];
    }
}