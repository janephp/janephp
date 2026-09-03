<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Issue770\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CommonPortalCustomizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('termsAndConditionsRequired', $data) && \is_int($data['termsAndConditionsRequired'])) {
            $data['termsAndConditionsRequired'] = (bool) $data['termsAndConditionsRequired'];
        }
        if (\array_key_exists('language', $data)) {
            $object->language = $data['language'];
        }
        if (\array_key_exists('title', $data)) {
            $object->title = $data['title'];
        }
        if (\array_key_exists('logo', $data)) {
            $object->logo = $data['logo'];
        }
        if (\array_key_exists('termsAndConditionsRequired', $data)) {
            $object->termsAndConditionsRequired = $data['termsAndConditionsRequired'];
        }
        if (\array_key_exists('termsAndConditionsText', $data)) {
            $object->termsAndConditionsText = $data['termsAndConditionsText'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['language'] = $data->language ?? null;
        if (array_key_exists('title', get_object_vars($data)) && null !== ($data->title ?? null)) {
            $dataArray['title'] = $data->title ?? null;
        }
        if (array_key_exists('logo', get_object_vars($data)) && null !== ($data->logo ?? null)) {
            $dataArray['logo'] = $data->logo ?? null;
        }
        if (array_key_exists('termsAndConditionsRequired', get_object_vars($data)) && null !== ($data->termsAndConditionsRequired ?? null)) {
            $dataArray['termsAndConditionsRequired'] = $data->termsAndConditionsRequired ?? null;
        }
        if (array_key_exists('termsAndConditionsText', get_object_vars($data)) && null !== ($data->termsAndConditionsText ?? null)) {
            $dataArray['termsAndConditionsText'] = $data->termsAndConditionsText ?? null;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Issue770\Model\CommonPortalCustomization::class => false];
    }
}