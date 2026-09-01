<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SystemVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Docker\Api\Model\SystemVersion::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Docker\Api\Model\SystemVersion::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Docker\Api\Model\SystemVersion();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('Experimental', $data) && \is_int($data['Experimental'])) {
            $data['Experimental'] = (bool) $data['Experimental'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Docker\Api\Validator\SystemVersionConstraint());
        }
        if (\array_key_exists('Platform', $data)) {
            $object->platform = $this->denormalizer->denormalize($data['Platform'], \Docker\Api\Model\SystemVersionPlatform::class, 'json', $context);
        }
        if (\array_key_exists('Components', $data)) {
            $values = [];
            foreach ($data['Components'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Docker\Api\Model\SystemVersionComponentsItem::class, 'json', $context);
            }
            $object->components = $values;
        }
        if (\array_key_exists('Version', $data)) {
            $object->version = $data['Version'];
        }
        if (\array_key_exists('ApiVersion', $data)) {
            $object->apiVersion = $data['ApiVersion'];
        }
        if (\array_key_exists('MinAPIVersion', $data)) {
            $object->minAPIVersion = $data['MinAPIVersion'];
        }
        if (\array_key_exists('GitCommit', $data)) {
            $object->gitCommit = $data['GitCommit'];
        }
        if (\array_key_exists('GoVersion', $data)) {
            $object->goVersion = $data['GoVersion'];
        }
        if (\array_key_exists('Os', $data)) {
            $object->os = $data['Os'];
        }
        if (\array_key_exists('Arch', $data)) {
            $object->arch = $data['Arch'];
        }
        if (\array_key_exists('KernelVersion', $data)) {
            $object->kernelVersion = $data['KernelVersion'];
        }
        if (\array_key_exists('Experimental', $data)) {
            $object->experimental = $data['Experimental'];
        }
        if (\array_key_exists('BuildTime', $data)) {
            $object->buildTime = $data['BuildTime'];
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('platform', get_object_vars($data)) && null !== ($data->platform ?? null)) {
            $dataArray['Platform'] = ($data->platform ?? null) === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($data->platform ?? null, 'json', $context));
        }
        if (array_key_exists('components', get_object_vars($data)) && null !== ($data->components ?? null)) {
            $values = [];
            foreach ($data->components ?? null as $value) {
                $values[] = $value === null ? null : new \Docker\Api\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['Components'] = $values;
        }
        if (array_key_exists('version', get_object_vars($data)) && null !== ($data->version ?? null)) {
            $dataArray['Version'] = $data->version ?? null;
        }
        if (array_key_exists('apiVersion', get_object_vars($data)) && null !== ($data->apiVersion ?? null)) {
            $dataArray['ApiVersion'] = $data->apiVersion ?? null;
        }
        if (array_key_exists('minAPIVersion', get_object_vars($data)) && null !== ($data->minAPIVersion ?? null)) {
            $dataArray['MinAPIVersion'] = $data->minAPIVersion ?? null;
        }
        if (array_key_exists('gitCommit', get_object_vars($data)) && null !== ($data->gitCommit ?? null)) {
            $dataArray['GitCommit'] = $data->gitCommit ?? null;
        }
        if (array_key_exists('goVersion', get_object_vars($data)) && null !== ($data->goVersion ?? null)) {
            $dataArray['GoVersion'] = $data->goVersion ?? null;
        }
        if (array_key_exists('os', get_object_vars($data)) && null !== ($data->os ?? null)) {
            $dataArray['Os'] = $data->os ?? null;
        }
        if (array_key_exists('arch', get_object_vars($data)) && null !== ($data->arch ?? null)) {
            $dataArray['Arch'] = $data->arch ?? null;
        }
        if (array_key_exists('kernelVersion', get_object_vars($data)) && null !== ($data->kernelVersion ?? null)) {
            $dataArray['KernelVersion'] = $data->kernelVersion ?? null;
        }
        if (array_key_exists('experimental', get_object_vars($data)) && null !== ($data->experimental ?? null)) {
            $dataArray['Experimental'] = $data->experimental ?? null;
        }
        if (array_key_exists('buildTime', get_object_vars($data)) && null !== ($data->buildTime ?? null)) {
            $dataArray['BuildTime'] = $data->buildTime ?? null;
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Docker\Api\Validator\SystemVersionConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Docker\Api\Model\SystemVersion::class => false];
    }
}