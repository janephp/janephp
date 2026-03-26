<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
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
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonPortalCustomization::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\CommonPortalCustomization::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\CommonPortalCustomization();
        if (\array_key_exists('termsAndConditionsRequired', $data) && \is_int($data['termsAndConditionsRequired'])) {
            $data['termsAndConditionsRequired'] = (bool) $data['termsAndConditionsRequired'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('language', $data)) {
            $object->setLanguage($data['language']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('logo', $data)) {
            $object->setLogo($data['logo']);
        }
        if (\array_key_exists('termsAndConditionsRequired', $data)) {
            $object->setTermsAndConditionsRequired($data['termsAndConditionsRequired']);
        }
        if (\array_key_exists('termsAndConditionsText', $data)) {
            $object->setTermsAndConditionsText($data['termsAndConditionsText']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['language'] = $data->getLanguage();
        if ($data->isInitialized('title') && null !== $data->getTitle()) {
            $dataArray['title'] = $data->getTitle();
        }
        if ($data->isInitialized('logo') && null !== $data->getLogo()) {
            $dataArray['logo'] = $data->getLogo();
        }
        if ($data->isInitialized('termsAndConditionsRequired') && null !== $data->getTermsAndConditionsRequired()) {
            $dataArray['termsAndConditionsRequired'] = $data->getTermsAndConditionsRequired();
        }
        if ($data->isInitialized('termsAndConditionsText') && null !== $data->getTermsAndConditionsText()) {
            $dataArray['termsAndConditionsText'] = $data->getTermsAndConditionsText();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\CommonPortalCustomization::class => false];
    }
}