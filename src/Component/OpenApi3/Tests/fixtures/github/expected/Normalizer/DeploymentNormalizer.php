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
class DeploymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Deployment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Deployment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Deployment();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\DeploymentConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('ref', $data)) {
            $object->setRef($data['ref']);
            unset($data['ref']);
        }
        if (\array_key_exists('task', $data)) {
            $object->setTask($data['task']);
            unset($data['task']);
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($this->denormalizer->denormalize($data['payload'], \Github\Model\DeploymentPayload::class, 'json', $context));
            unset($data['payload']);
        }
        if (\array_key_exists('original_environment', $data)) {
            $object->setOriginalEnvironment($data['original_environment']);
            unset($data['original_environment']);
        }
        if (\array_key_exists('environment', $data)) {
            $object->setEnvironment($data['environment']);
            unset($data['environment']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('creator', $data) && $data['creator'] !== null) {
            $object->setCreator($this->denormalizer->denormalize($data['creator'], \Github\Model\DeploymentCreator::class, 'json', $context));
            unset($data['creator']);
        }
        elseif (\array_key_exists('creator', $data) && $data['creator'] === null) {
            $object->setCreator(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('statuses_url', $data)) {
            $object->setStatusesUrl($data['statuses_url']);
            unset($data['statuses_url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
            unset($data['repository_url']);
        }
        if (\array_key_exists('transient_environment', $data)) {
            $object->setTransientEnvironment($data['transient_environment']);
            unset($data['transient_environment']);
        }
        if (\array_key_exists('production_environment', $data)) {
            $object->setProductionEnvironment($data['production_environment']);
            unset($data['production_environment']);
        }
        if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
            $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], \Github\Model\DeploymentPerformedViaGithubApp::class, 'json', $context));
            unset($data['performed_via_github_app']);
        }
        elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
            $object->setPerformedViaGithubApp(null);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['sha'] = $data->getSha();
        $dataArray['ref'] = $data->getRef();
        $dataArray['task'] = $data->getTask();
        $dataArray['payload'] = $this->normalizer->normalize($data->getPayload(), 'json', $context);
        if ($data->isInitialized('originalEnvironment') && null !== $data->getOriginalEnvironment()) {
            $dataArray['original_environment'] = $data->getOriginalEnvironment();
        }
        $dataArray['environment'] = $data->getEnvironment();
        $dataArray['description'] = $data->getDescription();
        $dataArray['creator'] = $this->normalizer->normalize($data->getCreator(), 'json', $context);
        $dataArray['created_at'] = $data->getCreatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
        $dataArray['statuses_url'] = $data->getStatusesUrl();
        $dataArray['repository_url'] = $data->getRepositoryUrl();
        if ($data->isInitialized('transientEnvironment') && null !== $data->getTransientEnvironment()) {
            $dataArray['transient_environment'] = $data->getTransientEnvironment();
        }
        if ($data->isInitialized('productionEnvironment') && null !== $data->getProductionEnvironment()) {
            $dataArray['production_environment'] = $data->getProductionEnvironment();
        }
        if ($data->isInitialized('performedViaGithubApp') && null !== $data->getPerformedViaGithubApp()) {
            $dataArray['performed_via_github_app'] = $this->normalizer->normalize($data->getPerformedViaGithubApp(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\DeploymentConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Deployment::class => false];
    }
}