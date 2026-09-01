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
class ApiChatbotNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\ApiChatbot::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\ApiChatbot::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\ApiChatbot();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('allowed_domains', $data)) {
            $values = [];
            foreach ($data['allowed_domains'] as $value) {
                $values[] = $value;
            }
            $object->allowedDomains = $values;
            unset($data['allowed_domains']);
        }
        if (\array_key_exists('button_background_color', $data)) {
            $object->buttonBackgroundColor = $data['button_background_color'];
            unset($data['button_background_color']);
        }
        if (\array_key_exists('logo', $data)) {
            $object->logo = $data['logo'];
            unset($data['logo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('primary_color', $data)) {
            $object->primaryColor = $data['primary_color'];
            unset($data['primary_color']);
        }
        if (\array_key_exists('secondary_color', $data)) {
            $object->secondaryColor = $data['secondary_color'];
            unset($data['secondary_color']);
        }
        if (\array_key_exists('starting_message', $data)) {
            $object->startingMessage = $data['starting_message'];
            unset($data['starting_message']);
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
        if (array_key_exists('allowedDomains', get_object_vars($data)) && null !== ($data->allowedDomains ?? null)) {
            $values = [];
            foreach ($data->allowedDomains ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['allowed_domains'] = $values;
        }
        if (array_key_exists('buttonBackgroundColor', get_object_vars($data)) && null !== ($data->buttonBackgroundColor ?? null)) {
            $dataArray['button_background_color'] = $data->buttonBackgroundColor ?? null;
        }
        if (array_key_exists('logo', get_object_vars($data)) && null !== ($data->logo ?? null)) {
            $dataArray['logo'] = $data->logo ?? null;
        }
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('primaryColor', get_object_vars($data)) && null !== ($data->primaryColor ?? null)) {
            $dataArray['primary_color'] = $data->primaryColor ?? null;
        }
        if (array_key_exists('secondaryColor', get_object_vars($data)) && null !== ($data->secondaryColor ?? null)) {
            $dataArray['secondary_color'] = $data->secondaryColor ?? null;
        }
        if (array_key_exists('startingMessage', get_object_vars($data)) && null !== ($data->startingMessage ?? null)) {
            $dataArray['starting_message'] = $data->startingMessage ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\ApiChatbot::class => false];
    }
}