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
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\ApiChatbot();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allowed_domains', $data)) {
            $values = [];
            foreach ($data['allowed_domains'] as $value) {
                $values[] = $value;
            }
            $object->setAllowedDomains($values);
            unset($data['allowed_domains']);
        }
        if (\array_key_exists('button_background_color', $data)) {
            $object->setButtonBackgroundColor($data['button_background_color']);
            unset($data['button_background_color']);
        }
        if (\array_key_exists('logo', $data)) {
            $object->setLogo($data['logo']);
            unset($data['logo']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('primary_color', $data)) {
            $object->setPrimaryColor($data['primary_color']);
            unset($data['primary_color']);
        }
        if (\array_key_exists('secondary_color', $data)) {
            $object->setSecondaryColor($data['secondary_color']);
            unset($data['secondary_color']);
        }
        if (\array_key_exists('starting_message', $data)) {
            $object->setStartingMessage($data['starting_message']);
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
        if ($data->isInitialized('allowedDomains') && null !== $data->getAllowedDomains()) {
            $values = [];
            foreach ($data->getAllowedDomains() as $value) {
                $values[] = $value;
            }
            $dataArray['allowed_domains'] = $values;
        }
        if ($data->isInitialized('buttonBackgroundColor') && null !== $data->getButtonBackgroundColor()) {
            $dataArray['button_background_color'] = $data->getButtonBackgroundColor();
        }
        if ($data->isInitialized('logo') && null !== $data->getLogo()) {
            $dataArray['logo'] = $data->getLogo();
        }
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('primaryColor') && null !== $data->getPrimaryColor()) {
            $dataArray['primary_color'] = $data->getPrimaryColor();
        }
        if ($data->isInitialized('secondaryColor') && null !== $data->getSecondaryColor()) {
            $dataArray['secondary_color'] = $data->getSecondaryColor();
        }
        if ($data->isInitialized('startingMessage') && null !== $data->getStartingMessage()) {
            $dataArray['starting_message'] = $data->getStartingMessage();
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
        return [\Jane\Generated\DigitalOcean\Model\ApiChatbot::class => false];
    }
}