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
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoDeploymentsPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
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
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ref', $data)) {
            $object->setRef($data['ref']);
        }
        if (\array_key_exists('task', $data)) {
            $object->setTask($data['task']);
        }
        if (\array_key_exists('auto_merge', $data)) {
            $object->setAutoMerge($data['auto_merge']);
        }
        if (\array_key_exists('required_contexts', $data)) {
            $values = array();
            foreach ($data['required_contexts'] as $value) {
                $values[] = $value;
            }
            $object->setRequiredContexts($values);
        }
        if (\array_key_exists('payload', $data)) {
            $object->setPayload($data['payload']);
        }
        if (\array_key_exists('environment', $data)) {
            $object->setEnvironment($data['environment']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('transient_environment', $data)) {
            $object->setTransientEnvironment($data['transient_environment']);
        }
        if (\array_key_exists('production_environment', $data)) {
            $object->setProductionEnvironment($data['production_environment']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
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
        if (null !== $object->getTask()) {
            $data['task'] = $object->getTask();
        }
        if (null !== $object->getAutoMerge()) {
            $data['auto_merge'] = $object->getAutoMerge();
        }
        if (null !== $object->getRequiredContexts()) {
            $values = array();
            foreach ($object->getRequiredContexts() as $value) {
                $values[] = $value;
            }
            $data['required_contexts'] = $values;
        }
        if (null !== $object->getPayload()) {
            $data['payload'] = $object->getPayload();
        }
        if (null !== $object->getEnvironment()) {
            $data['environment'] = $object->getEnvironment();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getTransientEnvironment()) {
            $data['transient_environment'] = $object->getTransientEnvironment();
        }
        if (null !== $object->getProductionEnvironment()) {
            $data['production_environment'] = $object->getProductionEnvironment();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReposOwnerRepoDeploymentsPostBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}