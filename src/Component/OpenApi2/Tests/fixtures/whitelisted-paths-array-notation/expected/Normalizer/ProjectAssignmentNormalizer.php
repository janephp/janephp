<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ProjectAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignment';
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
        $object = new \Jane\OpenApi2\Tests\Expected\Model\ProjectAssignment();
        if (\array_key_exists('hourly_rate', $data) && \is_int($data['hourly_rate'])) {
            $data['hourly_rate'] = (double) $data['hourly_rate'];
        }
        if (\array_key_exists('budget', $data) && \is_int($data['budget'])) {
            $data['budget'] = (double) $data['budget'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('is_project_manager', $data)) {
            $object->setIsProjectManager($data['is_project_manager']);
        }
        if (\array_key_exists('use_default_rates', $data)) {
            $object->setUseDefaultRates($data['use_default_rates']);
        }
        if (\array_key_exists('hourly_rate', $data)) {
            $object->setHourlyRate($data['hourly_rate']);
        }
        if (\array_key_exists('budget', $data)) {
            $object->setBudget($data['budget']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('project', $data)) {
            $object->setProject($this->denormalizer->denormalize($data['project'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignmentProject', 'json', $context));
        }
        if (\array_key_exists('client', $data)) {
            $object->setClient($this->denormalizer->denormalize($data['client'], 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ProjectAssignmentClient', 'json', $context));
        }
        if (\array_key_exists('task_assignments', $data)) {
            $values = array();
            foreach ($data['task_assignments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TaskAssignment', 'json', $context);
            }
            $object->setTaskAssignments($values);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getIsProjectManager()) {
            $data['is_project_manager'] = $object->getIsProjectManager();
        }
        if (null !== $object->getUseDefaultRates()) {
            $data['use_default_rates'] = $object->getUseDefaultRates();
        }
        if (null !== $object->getHourlyRate()) {
            $data['hourly_rate'] = $object->getHourlyRate();
        }
        if (null !== $object->getBudget()) {
            $data['budget'] = $object->getBudget();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getProject()) {
            $data['project'] = $this->normalizer->normalize($object->getProject(), 'json', $context);
        }
        if (null !== $object->getClient()) {
            $data['client'] = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getTaskAssignments()) {
            $values = array();
            foreach ($object->getTaskAssignments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['task_assignments'] = $values;
        }
        return $data;
    }
}