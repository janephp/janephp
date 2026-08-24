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
class AppWorkerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppWorkerSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppWorkerSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppWorkerSpec();
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
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('git', $data)) {
            $object->setGit($this->denormalizer->denormalize($data['git'], \Jane\Generated\DigitalOcean\Model\AppsGitSourceSpec::class, 'json', $context));
            unset($data['git']);
        }
        if (\array_key_exists('github', $data)) {
            $object->setGithub($this->denormalizer->denormalize($data['github'], \Jane\Generated\DigitalOcean\Model\AppsGithubSourceSpec::class, 'json', $context));
            unset($data['github']);
        }
        if (\array_key_exists('gitlab', $data)) {
            $object->setGitlab($this->denormalizer->denormalize($data['gitlab'], \Jane\Generated\DigitalOcean\Model\AppsGitlabSourceSpec::class, 'json', $context));
            unset($data['gitlab']);
        }
        if (\array_key_exists('bitbucket', $data)) {
            $object->setBitbucket($this->denormalizer->denormalize($data['bitbucket'], \Jane\Generated\DigitalOcean\Model\AppsBitbucketSourceSpec::class, 'json', $context));
            unset($data['bitbucket']);
        }
        if (\array_key_exists('image', $data)) {
            $object->setImage($this->denormalizer->denormalize($data['image'], \Jane\Generated\DigitalOcean\Model\AppsImageSourceSpec::class, 'json', $context));
            unset($data['image']);
        }
        if (\array_key_exists('dockerfile_path', $data)) {
            $object->setDockerfilePath($data['dockerfile_path']);
            unset($data['dockerfile_path']);
        }
        if (\array_key_exists('build_command', $data)) {
            $object->setBuildCommand($data['build_command']);
            unset($data['build_command']);
        }
        if (\array_key_exists('run_command', $data)) {
            $object->setRunCommand($data['run_command']);
            unset($data['run_command']);
        }
        if (\array_key_exists('source_dir', $data)) {
            $object->setSourceDir($data['source_dir']);
            unset($data['source_dir']);
        }
        if (\array_key_exists('envs', $data)) {
            $values = [];
            foreach ($data['envs'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Jane\Generated\DigitalOcean\Model\AppVariableDefinition::class, 'json', $context);
            }
            $object->setEnvs($values);
            unset($data['envs']);
        }
        if (\array_key_exists('environment_slug', $data)) {
            $object->setEnvironmentSlug($data['environment_slug']);
            unset($data['environment_slug']);
        }
        if (\array_key_exists('log_destinations', $data)) {
            $values_1 = [];
            foreach ($data['log_destinations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, \Jane\Generated\DigitalOcean\Model\AppLogDestinationDefinition::class, 'json', $context);
            }
            $object->setLogDestinations($values_1);
            unset($data['log_destinations']);
        }
        if (\array_key_exists('instance_count', $data)) {
            $object->setInstanceCount($data['instance_count']);
            unset($data['instance_count']);
        }
        if (\array_key_exists('instance_size_slug', $data)) {
            $object->setInstanceSizeSlug($data['instance_size_slug']);
            unset($data['instance_size_slug']);
        }
        if (\array_key_exists('autoscaling', $data)) {
            $object->setAutoscaling($this->denormalizer->denormalize($data['autoscaling'], \Jane\Generated\DigitalOcean\Model\AppComponentInstanceBaseAutoscaling::class, 'json', $context));
            unset($data['autoscaling']);
        }
        if (\array_key_exists('termination', $data)) {
            $object->setTermination($this->denormalizer->denormalize($data['termination'], \Jane\Generated\DigitalOcean\Model\AppWorkerSpecTermination::class, 'json', $context));
            unset($data['termination']);
        }
        if (\array_key_exists('liveness_health_check', $data)) {
            $object->setLivenessHealthCheck($this->denormalizer->denormalize($data['liveness_health_check'], \Jane\Generated\DigitalOcean\Model\AppHealthCheckSpec::class, 'json', $context));
            unset($data['liveness_health_check']);
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
        if ($data->isInitialized('name') && null !== $data->getName()) {
            $dataArray['name'] = $data->getName();
        }
        if ($data->isInitialized('git') && null !== $data->getGit()) {
            $dataArray['git'] = $data->getGit() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getGit(), 'json', $context));
        }
        if ($data->isInitialized('github') && null !== $data->getGithub()) {
            $dataArray['github'] = $data->getGithub() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getGithub(), 'json', $context));
        }
        if ($data->isInitialized('gitlab') && null !== $data->getGitlab()) {
            $dataArray['gitlab'] = $data->getGitlab() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getGitlab(), 'json', $context));
        }
        if ($data->isInitialized('bitbucket') && null !== $data->getBitbucket()) {
            $dataArray['bitbucket'] = $data->getBitbucket() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getBitbucket(), 'json', $context));
        }
        if ($data->isInitialized('image') && null !== $data->getImage()) {
            $dataArray['image'] = $data->getImage() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getImage(), 'json', $context));
        }
        if ($data->isInitialized('dockerfilePath') && null !== $data->getDockerfilePath()) {
            $dataArray['dockerfile_path'] = $data->getDockerfilePath();
        }
        if ($data->isInitialized('buildCommand') && null !== $data->getBuildCommand()) {
            $dataArray['build_command'] = $data->getBuildCommand();
        }
        if ($data->isInitialized('runCommand') && null !== $data->getRunCommand()) {
            $dataArray['run_command'] = $data->getRunCommand();
        }
        if ($data->isInitialized('sourceDir') && null !== $data->getSourceDir()) {
            $dataArray['source_dir'] = $data->getSourceDir();
        }
        if ($data->isInitialized('envs') && null !== $data->getEnvs()) {
            $values = [];
            foreach ($data->getEnvs() as $value) {
                $values[] = $value === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
            }
            $dataArray['envs'] = $values;
        }
        if ($data->isInitialized('environmentSlug') && null !== $data->getEnvironmentSlug()) {
            $dataArray['environment_slug'] = $data->getEnvironmentSlug();
        }
        if ($data->isInitialized('logDestinations') && null !== $data->getLogDestinations()) {
            $values_1 = [];
            foreach ($data->getLogDestinations() as $value_1) {
                $values_1[] = $value_1 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_1, 'json', $context));
            }
            $dataArray['log_destinations'] = $values_1;
        }
        if ($data->isInitialized('instanceCount') && null !== $data->getInstanceCount()) {
            $dataArray['instance_count'] = $data->getInstanceCount();
        }
        if ($data->isInitialized('instanceSizeSlug') && null !== $data->getInstanceSizeSlug()) {
            $dataArray['instance_size_slug'] = $data->getInstanceSizeSlug();
        }
        if ($data->isInitialized('autoscaling') && null !== $data->getAutoscaling()) {
            $dataArray['autoscaling'] = $data->getAutoscaling() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getAutoscaling(), 'json', $context));
        }
        if ($data->isInitialized('termination') && null !== $data->getTermination()) {
            $dataArray['termination'] = $data->getTermination() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getTermination(), 'json', $context));
        }
        if ($data->isInitialized('livenessHealthCheck') && null !== $data->getLivenessHealthCheck()) {
            $dataArray['liveness_health_check'] = $data->getLivenessHealthCheck() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getLivenessHealthCheck(), 'json', $context));
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\AppWorkerSpec::class => false];
    }
}