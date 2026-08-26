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

class ImplicitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\JsonSchema\Model\Implicit::class;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return $data instanceof \Jane\Component\OpenApi31\JsonSchema\Model\Implicit;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Component\OpenApi31\JsonSchema\Model\Implicit();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('authorizationUrl', $data) && $data['authorizationUrl'] !== null) {
            $object->setAuthorizationUrl($data['authorizationUrl']);
        } elseif (\array_key_exists('authorizationUrl', $data) && $data['authorizationUrl'] === null) {
            $object->setAuthorizationUrl(null);
        }
        if (\array_key_exists('refreshUrl', $data) && $data['refreshUrl'] !== null) {
            $object->setRefreshUrl($data['refreshUrl']);
        } elseif (\array_key_exists('refreshUrl', $data) && $data['refreshUrl'] === null) {
            $object->setRefreshUrl(null);
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = new \Jane\Component\OpenApi31\JsonSchema\Runtime\JsonObject();
            foreach ($data['scopes'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setScopes($values);
        } elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
        }

        return $object;
    }

    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['authorizationUrl'] = $data->getAuthorizationUrl();
        if ($data->isInitialized('refreshUrl') && null !== $data->getRefreshUrl()) {
            $dataArray['refreshUrl'] = $data->getRefreshUrl();
        }
        $values = [];
        foreach ($data->getScopes() as $key => $value) {
            $values[$key] = $value;
        }
        $dataArray['scopes'] = $values;

        return $dataArray;
    }

    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\JsonSchema\Model\Implicit::class => false];
    }
}
