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
            $object->setRegistry($data['registry']);
            unset($data['registry']);
        }
        if (\array_key_exists('registry_type', $data)) {
            $object->setRegistryType($data['registry_type']);
            unset($data['registry_type']);
        }
        if (\array_key_exists('registry_credentials', $data)) {
            $object->setRegistryCredentials($data['registry_credentials']);
            unset($data['registry_credentials']);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($data['repository']);
            unset($data['repository']);
        }
        if (\array_key_exists('tag', $data)) {
            $object->setTag($data['tag']);
            unset($data['tag']);
        }
        if (\array_key_exists('digest', $data)) {
            $object->setDigest($data['digest']);
            unset($data['digest']);
        }
        if (\array_key_exists('deploy_on_push', $data)) {
            $object->setDeployOnPush($this->denormalizer->denormalize($data['deploy_on_push'], \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpecDeployOnPush::class, 'json', $context));
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
        if ($data->isInitialized('registry') && null !== $data->getRegistry()) {
            $dataArray['registry'] = $data->getRegistry();
        }
        if ($data->isInitialized('registryType') && null !== $data->getRegistryType()) {
            $dataArray['registry_type'] = $data->getRegistryType();
        }
        if ($data->isInitialized('registryCredentials') && null !== $data->getRegistryCredentials()) {
            $dataArray['registry_credentials'] = $data->getRegistryCredentials();
        }
        if ($data->isInitialized('repository') && null !== $data->getRepository()) {
            $dataArray['repository'] = $data->getRepository();
        }
        if ($data->isInitialized('tag') && null !== $data->getTag()) {
            $dataArray['tag'] = $data->getTag();
        }
        if ($data->isInitialized('digest') && null !== $data->getDigest()) {
            $dataArray['digest'] = $data->getDigest();
        }
        if ($data->isInitialized('deployOnPush') && null !== $data->getDeployOnPush()) {
            $dataArray['deploy_on_push'] = $data->getDeployOnPush() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getDeployOnPush(), 'json', $context));
        }
        foreach ($data as $key => $value) {
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