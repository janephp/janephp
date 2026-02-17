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
class AppServiceSpeccorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppServiceSpeccors::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppServiceSpeccors::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\AppServiceSpeccors();
        if (\array_key_exists('allow_credentials', $data) && \is_int($data['allow_credentials'])) {
            $data['allow_credentials'] = (bool) $data['allow_credentials'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allow_origins', $data)) {
            $values = [];
            foreach ($data['allow_origins'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppsStringMatch::class, 'json', $context);
            }
            $object->setAllowOrigins($values);
            unset($data['allow_origins']);
        }
        if (\array_key_exists('allow_methods', $data)) {
            $values_1 = [];
            foreach ($data['allow_methods'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAllowMethods($values_1);
            unset($data['allow_methods']);
        }
        if (\array_key_exists('allow_headers', $data)) {
            $values_2 = [];
            foreach ($data['allow_headers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAllowHeaders($values_2);
            unset($data['allow_headers']);
        }
        if (\array_key_exists('expose_headers', $data)) {
            $values_3 = [];
            foreach ($data['expose_headers'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setExposeHeaders($values_3);
            unset($data['expose_headers']);
        }
        if (\array_key_exists('max_age', $data)) {
            $object->setMaxAge($data['max_age']);
            unset($data['max_age']);
        }
        if (\array_key_exists('allow_credentials', $data)) {
            $object->setAllowCredentials($data['allow_credentials']);
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
        if ($data->isInitialized('allowOrigins') && null !== $data->getAllowOrigins()) {
            $values = [];
            foreach ($data->getAllowOrigins() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['allow_origins'] = $values;
        }
        if ($data->isInitialized('allowMethods') && null !== $data->getAllowMethods()) {
            $values_1 = [];
            foreach ($data->getAllowMethods() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['allow_methods'] = $values_1;
        }
        if ($data->isInitialized('allowHeaders') && null !== $data->getAllowHeaders()) {
            $values_2 = [];
            foreach ($data->getAllowHeaders() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['allow_headers'] = $values_2;
        }
        if ($data->isInitialized('exposeHeaders') && null !== $data->getExposeHeaders()) {
            $values_3 = [];
            foreach ($data->getExposeHeaders() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['expose_headers'] = $values_3;
        }
        if ($data->isInitialized('maxAge') && null !== $data->getMaxAge()) {
            $dataArray['max_age'] = $data->getMaxAge();
        }
        if ($data->isInitialized('allowCredentials') && null !== $data->getAllowCredentials()) {
            $dataArray['allow_credentials'] = $data->getAllowCredentials();
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppServiceSpeccors::class => false];
    }
}