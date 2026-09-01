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
class AppsImageSourceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('registry', $data)) {
            $object->registry = $data['registry'];
            unset($data['registry']);
        }
        if (\array_key_exists('registry_type', $data)) {
            $object->registryType = $data['registry_type'];
            unset($data['registry_type']);
        }
        if (\array_key_exists('registry_credentials', $data)) {
            $object->registryCredentials = $data['registry_credentials'];
            unset($data['registry_credentials']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->repository = $data['repository'];
            unset($data['repository']);
        }
        if (\array_key_exists('tag', $data)) {
            $object->tag = $data['tag'];
            unset($data['tag']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->digest = $data['digest'];
            unset($data['digest']);
        }
        if (\array_key_exists('deploy_on_push', $data)) {
            $object->deployOnPush = $this->denormalizer->denormalize($data['deploy_on_push'], \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpecDeployOnPush::class, 'json', $context);
            unset($data['deploy_on_push']);
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
        if (array_key_exists('registry', get_object_vars($data)) && null !== ($data->registry ?? null)) {
            $dataArray['registry'] = $data->registry ?? null;
        }
        if (array_key_exists('registryType', get_object_vars($data)) && null !== ($data->registryType ?? null)) {
            $dataArray['registry_type'] = $data->registryType ?? null;
        }
        if (array_key_exists('registryCredentials', get_object_vars($data)) && null !== ($data->registryCredentials ?? null)) {
            $dataArray['registry_credentials'] = $data->registryCredentials ?? null;
        }
        if (array_key_exists('repository', get_object_vars($data)) && null !== ($data->repository ?? null)) {
            $dataArray['repository'] = $data->repository ?? null;
        }
        if (array_key_exists('tag', get_object_vars($data)) && null !== ($data->tag ?? null)) {
            $dataArray['tag'] = $data->tag ?? null;
        }
        if (array_key_exists('digest', get_object_vars($data)) && null !== ($data->digest ?? null)) {
            $dataArray['digest'] = $data->digest ?? null;
        }
        if (array_key_exists('deployOnPush', get_object_vars($data)) && null !== ($data->deployOnPush ?? null)) {
            $dataArray['deploy_on_push'] = ($data->deployOnPush ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->deployOnPush ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class => false];
    }
}