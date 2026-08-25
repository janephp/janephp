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
class AppStaticSiteSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec();
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
        if (\array_key_exists('index_document', $data)) {
            $object->setIndexDocument($data['index_document']);
            unset($data['index_document']);
        }
        if (\array_key_exists('error_document', $data)) {
            $object->setErrorDocument($data['error_document']);
            unset($data['error_document']);
        }
        if (\array_key_exists('catchall_document', $data)) {
            $object->setCatchallDocument($data['catchall_document']);
            unset($data['catchall_document']);
        }
        if (\array_key_exists('output_dir', $data)) {
            $object->setOutputDir($data['output_dir']);
            unset($data['output_dir']);
        }
        if (\array_key_exists('cors', $data)) {
            $object->setCors($this->denormalizer->denormalize($data['cors'], \Jane\Generated\DigitalOcean\Model\AppStaticSiteSpecCors::class, 'json', $context));
            unset($data['cors']);
        }
        if (\array_key_exists('routes', $data)) {
            $values_2 = [];
            foreach ($data['routes'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, \Jane\Generated\DigitalOcean\Model\AppRouteSpec::class, 'json', $context);
            }
            $object->setRoutes($values_2);
            unset($data['routes']);
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
        if ($data->isInitialized('indexDocument') && null !== $data->getIndexDocument()) {
            $dataArray['index_document'] = $data->getIndexDocument();
        }
        if ($data->isInitialized('errorDocument') && null !== $data->getErrorDocument()) {
            $dataArray['error_document'] = $data->getErrorDocument();
        }
        if ($data->isInitialized('catchallDocument') && null !== $data->getCatchallDocument()) {
            $dataArray['catchall_document'] = $data->getCatchallDocument();
        }
        if ($data->isInitialized('outputDir') && null !== $data->getOutputDir()) {
            $dataArray['output_dir'] = $data->getOutputDir();
        }
        if ($data->isInitialized('cors') && null !== $data->getCors()) {
            $dataArray['cors'] = $data->getCors() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getCors(), 'json', $context));
        }
        if ($data->isInitialized('routes') && null !== $data->getRoutes()) {
            $values_2 = [];
            foreach ($data->getRoutes() as $value_2) {
                $values_2[] = $value_2 === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($value_2, 'json', $context));
            }
            $dataArray['routes'] = $values_2;
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
        return [\Jane\Generated\DigitalOcean\Model\AppStaticSiteSpec::class => false];
    }
}