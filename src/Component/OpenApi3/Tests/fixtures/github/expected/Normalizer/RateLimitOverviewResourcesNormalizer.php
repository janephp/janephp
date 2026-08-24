<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class RateLimitOverviewResourcesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\RateLimitOverviewResources::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\RateLimitOverviewResources::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\RateLimitOverviewResources();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\RateLimitOverviewResourcesConstraint());
        }
        if (\array_key_exists('core', $data)) {
            $object->setCore($this->denormalizer->denormalize($data['core'], \Github\Model\RateLimit::class, 'json', $context));
            unset($data['core']);
        }
        if (\array_key_exists('graphql', $data)) {
            $object->setGraphql($this->denormalizer->denormalize($data['graphql'], \Github\Model\RateLimit::class, 'json', $context));
            unset($data['graphql']);
        }
        if (\array_key_exists('search', $data)) {
            $object->setSearch($this->denormalizer->denormalize($data['search'], \Github\Model\RateLimit::class, 'json', $context));
            unset($data['search']);
        }
        if (\array_key_exists('source_import', $data)) {
            $object->setSourceImport($this->denormalizer->denormalize($data['source_import'], \Github\Model\RateLimit::class, 'json', $context));
            unset($data['source_import']);
        }
        if (\array_key_exists('integration_manifest', $data)) {
            $object->setIntegrationManifest($this->denormalizer->denormalize($data['integration_manifest'], \Github\Model\RateLimit::class, 'json', $context));
            unset($data['integration_manifest']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['core'] = $data->getCore() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getCore(), 'json', $context));
        if ($data->isInitialized('graphql') && null !== $data->getGraphql()) {
            $dataArray['graphql'] = $data->getGraphql() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getGraphql(), 'json', $context));
        }
        $dataArray['search'] = $data->getSearch() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getSearch(), 'json', $context));
        if ($data->isInitialized('sourceImport') && null !== $data->getSourceImport()) {
            $dataArray['source_import'] = $data->getSourceImport() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getSourceImport(), 'json', $context));
        }
        if ($data->isInitialized('integrationManifest') && null !== $data->getIntegrationManifest()) {
            $dataArray['integration_manifest'] = $data->getIntegrationManifest() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getIntegrationManifest(), 'json', $context));
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\RateLimitOverviewResourcesConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\RateLimitOverviewResources::class => false];
    }
}