<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class LanguageConfigurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\LanguageConfiguration::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\LanguageConfiguration::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\LanguageConfiguration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('systemLanguages', $data) && $data['systemLanguages'] !== null) {
            $values = [];
            foreach ($data['systemLanguages'] as $value) {
                $values[] = $value;
            }
            $object->setSystemLanguages($values);
        }
        elseif (\array_key_exists('systemLanguages', $data) && $data['systemLanguages'] === null) {
            $object->setSystemLanguages(null);
        }
        if (\array_key_exists('metadataLanguages', $data) && $data['metadataLanguages'] !== null) {
            $values_1 = [];
            foreach ($data['metadataLanguages'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMetadataLanguages($values_1);
        }
        elseif (\array_key_exists('metadataLanguages', $data) && $data['metadataLanguages'] === null) {
            $object->setMetadataLanguages(null);
        }
        if (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] !== null) {
            $object->setDefaultLanguage($data['defaultLanguage']);
        }
        elseif (\array_key_exists('defaultLanguage', $data) && $data['defaultLanguage'] === null) {
            $object->setDefaultLanguage(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('systemLanguages') && null !== $data->getSystemLanguages()) {
            $values = [];
            foreach ($data->getSystemLanguages() as $value) {
                $values[] = $value;
            }
            $dataArray['systemLanguages'] = $values;
        }
        if ($data->isInitialized('metadataLanguages') && null !== $data->getMetadataLanguages()) {
            $values_1 = [];
            foreach ($data->getMetadataLanguages() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['metadataLanguages'] = $values_1;
        }
        if ($data->isInitialized('defaultLanguage') && null !== $data->getDefaultLanguage()) {
            $dataArray['defaultLanguage'] = $data->getDefaultLanguage();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\LanguageConfiguration::class => false];
    }
}