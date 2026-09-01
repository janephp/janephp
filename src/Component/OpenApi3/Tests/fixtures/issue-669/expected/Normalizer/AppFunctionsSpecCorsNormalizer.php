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
class AppFunctionsSpecCorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppFunctionsSpecCors::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppFunctionsSpecCors::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppFunctionsSpecCors();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('allow_credentials', $data) && \is_int($data['allow_credentials'])) {
            $data['allow_credentials'] = (bool) $data['allow_credentials'];
        }
        if (\array_key_exists('allow_origins', $data)) {
            $values = [];
            foreach ($data['allow_origins'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsStringMatch::class, 'json', $context);
            }
            $object->allowOrigins = $values;
            unset($data['allow_origins']);
        }
        if (\array_key_exists('allow_methods', $data)) {
            $values_1 = [];
            foreach ($data['allow_methods'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->allowMethods = $values_1;
            unset($data['allow_methods']);
        }
        if (\array_key_exists('allow_headers', $data)) {
            $values_2 = [];
            foreach ($data['allow_headers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->allowHeaders = $values_2;
            unset($data['allow_headers']);
        }
        if (\array_key_exists('expose_headers', $data)) {
            $values_3 = [];
            foreach ($data['expose_headers'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->exposeHeaders = $values_3;
            unset($data['expose_headers']);
        }
        if (\array_key_exists('max_age', $data)) {
            $object->maxAge = $data['max_age'];
            unset($data['max_age']);
        }
        if (\array_key_exists('allow_credentials', $data)) {
            $object->allowCredentials = $data['allow_credentials'];
            unset($data['allow_credentials']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('allowOrigins', get_object_vars($data)) && null !== ($data->allowOrigins ?? null)) {
            $values = [];
            foreach ($data->allowOrigins ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['allow_origins'] = $values;
        }
        if (array_key_exists('allowMethods', get_object_vars($data)) && null !== ($data->allowMethods ?? null)) {
            $values_1 = [];
            foreach ($data->allowMethods ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['allow_methods'] = $values_1;
        }
        if (array_key_exists('allowHeaders', get_object_vars($data)) && null !== ($data->allowHeaders ?? null)) {
            $values_2 = [];
            foreach ($data->allowHeaders ?? null as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['allow_headers'] = $values_2;
        }
        if (array_key_exists('exposeHeaders', get_object_vars($data)) && null !== ($data->exposeHeaders ?? null)) {
            $values_3 = [];
            foreach ($data->exposeHeaders ?? null as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['expose_headers'] = $values_3;
        }
        if (array_key_exists('maxAge', get_object_vars($data)) && null !== ($data->maxAge ?? null)) {
            $dataArray['max_age'] = $data->maxAge ?? null;
        }
        if (array_key_exists('allowCredentials', get_object_vars($data)) && null !== ($data->allowCredentials ?? null)) {
            $dataArray['allow_credentials'] = $data->allowCredentials ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppFunctionsSpecCors::class => false];
    }
}