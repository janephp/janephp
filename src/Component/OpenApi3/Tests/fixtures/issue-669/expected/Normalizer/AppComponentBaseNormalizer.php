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
class AppComponentBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppComponentBase::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppComponentBase::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppComponentBase();
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
            unset($data['name']);
        }
        if (\array_key_exists('git', $data)) {
            $object->git = $this->denormalizer->denormalize($data['git'], \Jane\Generated\DigitalOcean\Model\AppsGitSourceSpec::class, 'json', $context);
            unset($data['git']);
        }
        if (\array_key_exists('github', $data)) {
            $object->github = $this->denormalizer->denormalize($data['github'], \Jane\Generated\DigitalOcean\Model\AppsGithubSourceSpec::class, 'json', $context);
            unset($data['github']);
        }
        if (\array_key_exists('gitlab', $data)) {
            $object->gitlab = $this->denormalizer->denormalize($data['gitlab'], \Jane\Generated\DigitalOcean\Model\AppsGitlabSourceSpec::class, 'json', $context);
            unset($data['gitlab']);
        }
        if (\array_key_exists('bitbucket', $data)) {
            $object->bitbucket = $this->denormalizer->denormalize($data['bitbucket'], \Jane\Generated\DigitalOcean\Model\AppsBitbucketSourceSpec::class, 'json', $context);
            unset($data['bitbucket']);
        }
        if (\array_key_exists('image', $data)) {
            $object->image = $this->denormalizer->denormalize($data['image'], \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class, 'json', $context);
            unset($data['image']);
        }
        if (\array_key_exists('dockerfile_path', $data)) {
            $object->dockerfilePath = $data['dockerfile_path'];
            unset($data['dockerfile_path']);
        }
        if (\array_key_exists('build_command', $data)) {
            $object->buildCommand = $data['build_command'];
            unset($data['build_command']);
        }
        if (\array_key_exists('run_command', $data)) {
            $object->runCommand = $data['run_command'];
            unset($data['run_command']);
        }
        if (\array_key_exists('source_dir', $data)) {
            $object->sourceDir = $data['source_dir'];
            unset($data['source_dir']);
        }
        if (\array_key_exists('envs', $data)) {
            $values = [];
            foreach ($data['envs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppVariableDefinition::class, 'json', $context);
            }
            $object->envs = $values;
            unset($data['envs']);
        }
        if (\array_key_exists('environment_slug', $data)) {
            $object->environmentSlug = $data['environment_slug'];
            unset($data['environment_slug']);
        }
        if (\array_key_exists('log_destinations', $data)) {
            $values_1 = [];
            foreach ($data['log_destinations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class, 'json', $context);
            }
            $object->logDestinations = $values_1;
            unset($data['log_destinations']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('name', get_object_vars($data)) && null !== ($data->name ?? null)) {
            $dataArray['name'] = $data->name ?? null;
        }
        if (array_key_exists('git', get_object_vars($data)) && null !== ($data->git ?? null)) {
            $dataArray['git'] = ($data->git ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->git ?? null, 'json', $context));
        }
        if (array_key_exists('github', get_object_vars($data)) && null !== ($data->github ?? null)) {
            $dataArray['github'] = ($data->github ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->github ?? null, 'json', $context));
        }
        if (array_key_exists('gitlab', get_object_vars($data)) && null !== ($data->gitlab ?? null)) {
            $dataArray['gitlab'] = ($data->gitlab ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->gitlab ?? null, 'json', $context));
        }
        if (array_key_exists('bitbucket', get_object_vars($data)) && null !== ($data->bitbucket ?? null)) {
            $dataArray['bitbucket'] = ($data->bitbucket ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->bitbucket ?? null, 'json', $context));
        }
        if (array_key_exists('image', get_object_vars($data)) && null !== ($data->image ?? null)) {
            $dataArray['image'] = ($data->image ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->image ?? null, 'json', $context));
        }
        if (array_key_exists('dockerfilePath', get_object_vars($data)) && null !== ($data->dockerfilePath ?? null)) {
            $dataArray['dockerfile_path'] = $data->dockerfilePath ?? null;
        }
        if (array_key_exists('buildCommand', get_object_vars($data)) && null !== ($data->buildCommand ?? null)) {
            $dataArray['build_command'] = $data->buildCommand ?? null;
        }
        if (array_key_exists('runCommand', get_object_vars($data)) && null !== ($data->runCommand ?? null)) {
            $dataArray['run_command'] = $data->runCommand ?? null;
        }
        if (array_key_exists('sourceDir', get_object_vars($data)) && null !== ($data->sourceDir ?? null)) {
            $dataArray['source_dir'] = $data->sourceDir ?? null;
        }
        if (array_key_exists('envs', get_object_vars($data)) && null !== ($data->envs ?? null)) {
            $values = [];
            foreach ($data->envs ?? null as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['envs'] = $values;
        }
        if (array_key_exists('environmentSlug', get_object_vars($data)) && null !== ($data->environmentSlug ?? null)) {
            $dataArray['environment_slug'] = $data->environmentSlug ?? null;
        }
        if (array_key_exists('logDestinations', get_object_vars($data)) && null !== ($data->logDestinations ?? null)) {
            $values_1 = [];
            foreach ($data->logDestinations ?? null as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['log_destinations'] = $values_1;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppComponentBase::class => false];
    }
}