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
class AppJobSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppJobSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppJobSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppJobSpec();
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
        if (\array_key_exists('instance_count', $data)) {
            $object->instanceCount = $data['instance_count'];
            unset($data['instance_count']);
        }
        if (\array_key_exists('instance_size_slug', $data)) {
            $value_2 = $data['instance_size_slug'];
            if (is_string($data['instance_size_slug'])) {
                $value_2 = $data['instance_size_slug'];
            } elseif (is_string($data['instance_size_slug'])) {
                $value_2 = $data['instance_size_slug'];
            }
            $object->instanceSizeSlug = $value_2;
            unset($data['instance_size_slug']);
        }
        if (\array_key_exists('autoscaling', $data)) {
            $object->autoscaling = $this->denormalizer->denormalize($data['autoscaling'], \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class, 'json', $context);
            unset($data['autoscaling']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('termination', $data)) {
            $object->termination = $this->denormalizer->denormalize($data['termination'], \Jane\Generated\DigitalOcean\Model\AppJobSpecTermination::class, 'json', $context);
            unset($data['termination']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_3;
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
        if (array_key_exists('instanceCount', get_object_vars($data)) && null !== ($data->instanceCount ?? null)) {
            $dataArray['instance_count'] = $data->instanceCount ?? null;
        }
        if (array_key_exists('instanceSizeSlug', get_object_vars($data)) && null !== ($data->instanceSizeSlug ?? null)) {
            $value_2 = $data->instanceSizeSlug ?? null;
            if (is_string($data->instanceSizeSlug ?? null)) {
                $value_2 = $data->instanceSizeSlug ?? null;
            } elseif (is_string($data->instanceSizeSlug ?? null)) {
                $value_2 = $data->instanceSizeSlug ?? null;
            }
            $dataArray['instance_size_slug'] = $value_2;
        }
        if (array_key_exists('autoscaling', get_object_vars($data)) && null !== ($data->autoscaling ?? null)) {
            $dataArray['autoscaling'] = ($data->autoscaling ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->autoscaling ?? null, 'json', $context));
        }
        if (array_key_exists('kind', get_object_vars($data)) && null !== ($data->kind ?? null)) {
            $dataArray['kind'] = $data->kind ?? null;
        }
        if (array_key_exists('termination', get_object_vars($data)) && null !== ($data->termination ?? null)) {
            $dataArray['termination'] = ($data->termination ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->termination ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppJobSpec::class => false];
    }
}