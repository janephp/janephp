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
class CustomerInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\CustomerInfo::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\CustomerInfo::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\CustomerInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('enableQueryDetails', $data) && \is_int($data['enableQueryDetails'])) {
            $data['enableQueryDetails'] = (bool) $data['enableQueryDetails'];
        }
        if (\array_key_exists('customerId', $data)) {
            $object->customerId = $data['customerId'];
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('customerAlias', $data)) {
            $object->customerAlias = $data['customerAlias'];
        }
        if (\array_key_exists('identityServerUrl', $data)) {
            $object->identityServerUrl = $data['identityServerUrl'];
        }
        if (\array_key_exists('apiUrl', $data)) {
            $object->apiUrl = $data['apiUrl'];
        }
        if (\array_key_exists('enableQueryDetails', $data)) {
            $object->enableQueryDetails = $data['enableQueryDetails'];
        }
        if (\array_key_exists('languageConfiguration', $data)) {
            $value = $data['languageConfiguration'];
            if (is_array($data['languageConfiguration'])) {
                $value = $this->denormalizer->denormalize($data['languageConfiguration'], \PicturePark\API\Model\LanguageConfiguration::class, 'json', $context);
            }
            $object->languageConfiguration = $value;
        }
        if (\array_key_exists('languages', $data)) {
            $values = [];
            foreach ($data['languages'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\Language::class, 'json', $context);
            }
            $object->languages = $values;
        }
        if (\array_key_exists('outputFormats', $data)) {
            $values_1 = [];
            foreach ($data['outputFormats'] as $value_2) {
                $values_1[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\OutputFormatInfo::class, 'json', $context);
            }
            $object->outputFormats = $values_1;
        }
        if (\array_key_exists('boostValues', $data)) {
            $values_2 = [];
            foreach ($data['boostValues'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->boostValues = $values_2;
        }
        if (\array_key_exists('apps', $data) && $data['apps'] !== null) {
            $values_3 = [];
            foreach ($data['apps'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, \PicturePark\API\Model\CustomerApp::class, 'json', $context);
            }
            $object->apps = $values_3;
        }
        elseif (\array_key_exists('apps', $data) && $data['apps'] === null) {
            $object->apps = null;
        }
        if (\array_key_exists('modificationDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['modificationDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['modificationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->modificationDate = $date;
        }
        if (\array_key_exists('baseUrl', $data)) {
            $object->baseUrl = $data['baseUrl'];
        }
        if (\array_key_exists('logosUrl', $data)) {
            $object->logosUrl = $data['logosUrl'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['customerId'] = $data->customerId ?? null;
        $dataArray['name'] = $data->name ?? null;
        $dataArray['customerAlias'] = $data->customerAlias ?? null;
        $dataArray['identityServerUrl'] = $data->identityServerUrl ?? null;
        $dataArray['apiUrl'] = $data->apiUrl ?? null;
        $dataArray['enableQueryDetails'] = $data->enableQueryDetails ?? null;
        $value = $data->languageConfiguration ?? null;
        if (is_object($data->languageConfiguration ?? null)) {
            $value = ($data->languageConfiguration ?? null) === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($data->languageConfiguration ?? null, 'json', $context));
        }
        $dataArray['languageConfiguration'] = $value;
        $values = [];
        foreach ($data->languages ?? null as $value_1) {
            $values[] = $value_1 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
        }
        $dataArray['languages'] = $values;
        $values_1 = [];
        foreach ($data->outputFormats ?? null as $value_2) {
            $values_1[] = $value_2 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
        }
        $dataArray['outputFormats'] = $values_1;
        $values_2 = [];
        foreach ($data->boostValues ?? null as $value_3) {
            $values_2[] = $value_3;
        }
        $dataArray['boostValues'] = $values_2;
        if (array_key_exists('apps', get_object_vars($data)) && null !== ($data->apps ?? null)) {
            $values_3 = [];
            foreach ($data->apps ?? null as $value_4) {
                $values_3[] = $value_4 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['apps'] = $values_3;
        }
        $dataArray['modificationDate'] = ($data->modificationDate ?? null)->format('Y-m-d\TH:i:sP');
        $dataArray['baseUrl'] = $data->baseUrl ?? null;
        $dataArray['logosUrl'] = $data->logosUrl ?? null;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\CustomerInfo::class => false];
    }
}