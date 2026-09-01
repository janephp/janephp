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
class AppServiceSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppServiceSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppServiceSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppServiceSpec();
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
        if (\array_key_exists('cors', $data)) {
            $object->cors = $this->denormalizer->denormalize($data['cors'], \Jane\Generated\DigitalOcean\Model\AppServiceSpecCors::class, 'json', $context);
            unset($data['cors']);
        }
        if (\array_key_exists('health_check', $data)) {
            $object->healthCheck = $this->denormalizer->denormalize($data['health_check'], \Jane\Generated\DigitalOcean\Model\AppServiceSpecHealthCheck::class, 'json', $context);
            unset($data['health_check']);
        }
        if (\array_key_exists('liveness_health_check', $data)) {
            $object->livenessHealthCheck = $this->denormalizer->denormalize($data['liveness_health_check'], \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class, 'json', $context);
            unset($data['liveness_health_check']);
        }
        if (\array_key_exists('protocol', $data)) {
            $object->protocol = $data['protocol'];
            unset($data['protocol']);
        }
        if (\array_key_exists('http_port', $data)) {
            $object->httpPort = $data['http_port'];
            unset($data['http_port']);
        }
        if (\array_key_exists('internal_ports', $data)) {
            $values_2 = [];
            foreach ($data['internal_ports'] as $value_3) {
                $values_2[] = $value_3;
            }
            $object->internalPorts = $values_2;
            unset($data['internal_ports']);
        }
        if (\array_key_exists('routes', $data)) {
            $values_3 = [];
            foreach ($data['routes'] as $value_4) {
                $values_3[] = $this->denormalizer->denormalize($value_4, \Jane\Generated\DigitalOcean\Model\AppRouteSpec::class, 'json', $context);
            }
            $object->routes = $values_3;
            unset($data['routes']);
        }
        if (\array_key_exists('termination', $data)) {
            $object->termination = $this->denormalizer->denormalize($data['termination'], \Jane\Generated\DigitalOcean\Model\AppServiceSpecTermination::class, 'json', $context);
            unset($data['termination']);
        }
        foreach ($data as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_5;
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
        if (array_key_exists('cors', get_object_vars($data)) && null !== ($data->cors ?? null)) {
            $dataArray['cors'] = ($data->cors ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->cors ?? null, 'json', $context));
        }
        if (array_key_exists('healthCheck', get_object_vars($data)) && null !== ($data->healthCheck ?? null)) {
            $dataArray['health_check'] = ($data->healthCheck ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->healthCheck ?? null, 'json', $context));
        }
        if (array_key_exists('livenessHealthCheck', get_object_vars($data)) && null !== ($data->livenessHealthCheck ?? null)) {
            $dataArray['liveness_health_check'] = ($data->livenessHealthCheck ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->livenessHealthCheck ?? null, 'json', $context));
        }
        if (array_key_exists('protocol', get_object_vars($data)) && null !== ($data->protocol ?? null)) {
            $dataArray['protocol'] = $data->protocol ?? null;
        }
        if (array_key_exists('httpPort', get_object_vars($data)) && null !== ($data->httpPort ?? null)) {
            $dataArray['http_port'] = $data->httpPort ?? null;
        }
        if (array_key_exists('internalPorts', get_object_vars($data)) && null !== ($data->internalPorts ?? null)) {
            $values_2 = [];
            foreach ($data->internalPorts ?? null as $value_3) {
                $values_2[] = $value_3;
            }
            $dataArray['internal_ports'] = $values_2;
        }
        if (array_key_exists('routes', get_object_vars($data)) && null !== ($data->routes ?? null)) {
            $values_3 = [];
            foreach ($data->routes ?? null as $value_4) {
                $values_3[] = $value_4 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_4, 'json', $context));
            }
            $dataArray['routes'] = $values_3;
        }
        if (array_key_exists('termination', get_object_vars($data)) && null !== ($data->termination ?? null)) {
            $dataArray['termination'] = ($data->termination ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->termination ?? null, 'json', $context));
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_5) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_5;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppServiceSpec::class => false];
    }
}