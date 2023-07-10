<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoDeploymentsPostBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoDeploymentsPostBody';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoDeploymentsPostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoDeploymentsPostBodyConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
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
            $values = array();
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
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['ref'] = $object->getRef();
        if ($object->isInitialized('task') && null !== $object->getTask()) {
            $data['task'] = $object->getTask();
        }
        if ($object->isInitialized('autoMerge') && null !== $object->getAutoMerge()) {
            $data['auto_merge'] = $object->getAutoMerge();
        }
        if ($object->isInitialized('requiredContexts') && null !== $object->getRequiredContexts()) {
            $values = array();
            foreach ($object->getRequiredContexts() as $value) {
                $values[] = $value;
            }
            $data['required_contexts'] = $values;
        }
        if ($object->isInitialized('payload') && null !== $object->getPayload()) {
            $data['payload'] = $object->getPayload();
        }
        if ($object->isInitialized('environment') && null !== $object->getEnvironment()) {
            $data['environment'] = $object->getEnvironment();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('transientEnvironment') && null !== $object->getTransientEnvironment()) {
            $data['transient_environment'] = $object->getTransientEnvironment();
        }
        if ($object->isInitialized('productionEnvironment') && null !== $object->getProductionEnvironment()) {
            $data['production_environment'] = $object->getProductionEnvironment();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoDeploymentsPostBodyConstraint());
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Github\\Model\\ReposOwnerRepoDeploymentsPostBody' => false);
    }
}