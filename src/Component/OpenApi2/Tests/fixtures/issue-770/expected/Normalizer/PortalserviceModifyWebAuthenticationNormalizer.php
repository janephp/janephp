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
class PortalserviceModifyWebAuthenticationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyWebAuthentication::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyWebAuthentication::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyWebAuthentication();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->name = $data['name'];
        }
        if (\array_key_exists('description', $data)) {
            $object->description = $data['description'];
        }
        if (\array_key_exists('portalLanguage', $data)) {
            $object->portalLanguage = $data['portalLanguage'];
        }
        if (\array_key_exists('redirect', $data)) {
            $object->redirect = $this->denormalizer->denormalize($data['redirect'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalservicePortalRedirect::class, 'json', $context);
        }
        if (\array_key_exists('userSession', $data)) {
            $object->userSession = $this->denormalizer->denormalize($data['userSession'], \Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceUserSession::class, 'json', $context);
        }
        if (\array_key_exists('webAuthenticationPortalCustomization', $data)) {
            $object->webAuthenticationPortalCustomization = $this->denormalizer->denormalize($data['webAuthenticationPortalCustomization'], \Jane\Component\OpenApi3\Tests\Expected\Model\CommonWebAuthenticationPortalCustomization::class, 'json', $context);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('portalLanguage', get_object_vars($data)) && null !== ($data->portalLanguage ?? null)) {
            $dataArray['portalLanguage'] = $data->portalLanguage ?? null;
        }
        if (array_key_exists('redirect', get_object_vars($data)) && null !== ($data->redirect ?? null)) {
            $dataArray['redirect'] = ($data->redirect ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->redirect ?? null, 'json', $context));
        }
        if (array_key_exists('userSession', get_object_vars($data)) && null !== ($data->userSession ?? null)) {
            $dataArray['userSession'] = ($data->userSession ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->userSession ?? null, 'json', $context));
        }
        if (array_key_exists('webAuthenticationPortalCustomization', get_object_vars($data)) && null !== ($data->webAuthenticationPortalCustomization ?? null)) {
            $dataArray['webAuthenticationPortalCustomization'] = ($data->webAuthenticationPortalCustomization ?? null) === null ? null : new \Jane\Component\OpenApi3\Tests\Expected\Runtime\JsonObject($this->normalizer->normalize($data->webAuthenticationPortalCustomization ?? null, 'json', $context));
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\PortalserviceModifyWebAuthentication::class => false];
    }
}