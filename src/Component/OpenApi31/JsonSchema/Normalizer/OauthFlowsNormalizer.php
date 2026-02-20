<?php

namespace Jane\Component\OpenApi31\JsonSchema\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OauthFlowsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\OauthFlows::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\OauthFlows;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\OauthFlows();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('implicit', $data) && $data['implicit'] !== null) {
            $object->setImplicit($this->denormalizer->denormalize($data['implicit'], \Jane\Component\OpenApi31\JsonSchema\Model\Implicit::class, 'json', $context));
        } elseif (\array_key_exists('implicit', $data) && $data['implicit'] === null) {
            $object->setImplicit(null);
        }
        if (\array_key_exists('password', $data) && $data['password'] !== null) {
            $object->setPassword($this->denormalizer->denormalize($data['password'], \Jane\Component\OpenApi31\JsonSchema\Model\Password::class, 'json', $context));
        } elseif (\array_key_exists('password', $data) && $data['password'] === null) {
            $object->setPassword(null);
        }
        if (\array_key_exists('clientCredentials', $data) && $data['clientCredentials'] !== null) {
            $object->setClientCredentials($this->denormalizer->denormalize($data['clientCredentials'], \Jane\Component\OpenApi31\JsonSchema\Model\ClientCredentials::class, 'json', $context));
        } elseif (\array_key_exists('clientCredentials', $data) && $data['clientCredentials'] === null) {
            $object->setClientCredentials(null);
        }
        if (\array_key_exists('authorizationCode', $data) && $data['authorizationCode'] !== null) {
            $object->setAuthorizationCode($this->denormalizer->denormalize($data['authorizationCode'], \Jane\Component\OpenApi31\JsonSchema\Model\AuthorizationCode::class, 'json', $context));
        } elseif (\array_key_exists('authorizationCode', $data) && $data['authorizationCode'] === null) {
            $object->setAuthorizationCode(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('implicit') && null !== $data->getImplicit()) {
            $dataArray['implicit'] = $this->normalizer->normalize($data->getImplicit(), 'json', $context);
        }
        if ($data->isInitialized('password') && null !== $data->getPassword()) {
            $dataArray['password'] = $this->normalizer->normalize($data->getPassword(), 'json', $context);
        }
        if ($data->isInitialized('clientCredentials') && null !== $data->getClientCredentials()) {
            $dataArray['clientCredentials'] = $this->normalizer->normalize($data->getClientCredentials(), 'json', $context);
        }
        if ($data->isInitialized('authorizationCode') && null !== $data->getAuthorizationCode()) {
            $dataArray['authorizationCode'] = $this->normalizer->normalize($data->getAuthorizationCode(), 'json', $context);
        }

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\OauthFlows::class => false];
    }
}
