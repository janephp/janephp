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
class ReposOwnerRepoDeploymentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReposOwnerRepoDeploymentsPostBody::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReposOwnerRepoDeploymentsPostBody::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReposOwnerRepoDeploymentsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('auto_merge', $data) && \is_int($data['auto_merge'])) {
            $data['auto_merge'] = (bool) $data['auto_merge'];
        }
        if (\array_key_exists('transient_environment', $data) && \is_int($data['transient_environment'])) {
            $data['transient_environment'] = (bool) $data['transient_environment'];
        }
        if (\array_key_exists('production_environment', $data) && \is_int($data['production_environment'])) {
            $data['production_environment'] = (bool) $data['production_environment'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoDeploymentsPostBodyConstraint());
        }
        if (\array_key_exists('ref', $data)) {
            $object->setRef($data['ref']);
            unset($data['ref']);
        }
        if (\array_key_exists('task', $data)) {
            $object->setTask($data['task']);
            unset($data['task']);
        }
        if (\array_key_exists('auto_merge', $data)) {
            $object->setAutoMerge($data['auto_merge']);
            unset($data['auto_merge']);
        }
        if (\array_key_exists('required_contexts', $data)) {
            $values = [];
            foreach ($data['required_contexts'] as $value) {
                $values[] = $value;
            }
            $object->setRequiredContexts($values);
            unset($data['required_contexts']);
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($data['payload']);
            unset($data['payload']);
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
        if (\array_key_exists('transient_environment', $data)) {
            $object->setTransientEnvironment($data['transient_environment']);
            unset($data['transient_environment']);
        }
        if (\array_key_exists('production_environment', $data)) {
            $object->setProductionEnvironment($data['production_environment']);
            unset($data['production_environment']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ref'] = $data->getRef();
        if ($data->isInitialized('task') && null !== $data->getTask()) {
            $dataArray['task'] = $data->getTask();
        }
        if ($data->isInitialized('autoMerge') && null !== $data->getAutoMerge()) {
            $dataArray['auto_merge'] = $data->getAutoMerge();
        }
        if ($data->isInitialized('requiredContexts') && null !== $data->getRequiredContexts()) {
            $values = [];
            foreach ($data->getRequiredContexts() as $value) {
                $values[] = $value;
            }
            $dataArray['required_contexts'] = $values;
        }
        if ($data->isInitialized('payload') && null !== $data->getPayload()) {
            $dataArray['payload'] = $data->getPayload();
        }
        if ($data->isInitialized('environment') && null !== $data->getEnvironment()) {
            $dataArray['environment'] = $data->getEnvironment();
        }
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('transientEnvironment') && null !== $data->getTransientEnvironment()) {
            $dataArray['transient_environment'] = $data->getTransientEnvironment();
        }
        if ($data->isInitialized('productionEnvironment') && null !== $data->getProductionEnvironment()) {
            $dataArray['production_environment'] = $data->getProductionEnvironment();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReposOwnerRepoDeploymentsPostBodyConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReposOwnerRepoDeploymentsPostBody::class => false];
    }
}