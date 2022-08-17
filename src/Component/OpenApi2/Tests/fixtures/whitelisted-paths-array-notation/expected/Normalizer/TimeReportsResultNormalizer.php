<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TimeReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeReportsResult';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\TimeReportsResult';
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
        $object = new \Jane\OpenApi2\Tests\Expected\Model\TimeReportsResult();
        if (\array_key_exists('total_hours', $data) && \is_int($data['total_hours'])) {
            $data['total_hours'] = (double) $data['total_hours'];
        }
        if (\array_key_exists('billable_hours', $data) && \is_int($data['billable_hours'])) {
            $data['billable_hours'] = (double) $data['billable_hours'];
        }
        if (\array_key_exists('billable_amount', $data) && \is_int($data['billable_amount'])) {
            $data['billable_amount'] = (double) $data['billable_amount'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_id', $data)) {
            $object->setClientId($data['client_id']);
        }
        if (\array_key_exists('client_name', $data)) {
            $object->setClientName($data['client_name']);
        }
        if (\array_key_exists('project_id', $data)) {
            $object->setProjectId($data['project_id']);
        }
        if (\array_key_exists('project_name', $data)) {
            $object->setProjectName($data['project_name']);
        }
        if (\array_key_exists('task_id', $data)) {
            $object->setTaskId($data['task_id']);
        }
        if (\array_key_exists('task_name', $data)) {
            $object->setTaskName($data['task_name']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
        }
        if (\array_key_exists('user_name', $data)) {
            $object->setUserName($data['user_name']);
        }
        if (\array_key_exists('is_contractor', $data)) {
            $object->setIsContractor($data['is_contractor']);
        }
        if (\array_key_exists('total_hours', $data)) {
            $object->setTotalHours($data['total_hours']);
        }
        if (\array_key_exists('billable_hours', $data)) {
            $object->setBillableHours($data['billable_hours']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        if (\array_key_exists('billable_amount', $data)) {
            $object->setBillableAmount($data['billable_amount']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClientId()) {
            $data['client_id'] = $object->getClientId();
        }
        if (null !== $object->getClientName()) {
            $data['client_name'] = $object->getClientName();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getProjectName()) {
            $data['project_name'] = $object->getProjectName();
        }
        if (null !== $object->getTaskId()) {
            $data['task_id'] = $object->getTaskId();
        }
        if (null !== $object->getTaskName()) {
            $data['task_name'] = $object->getTaskName();
        }
        if (null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if (null !== $object->getUserName()) {
            $data['user_name'] = $object->getUserName();
        }
        if (null !== $object->getIsContractor()) {
            $data['is_contractor'] = $object->getIsContractor();
        }
        if (null !== $object->getTotalHours()) {
            $data['total_hours'] = $object->getTotalHours();
        }
        if (null !== $object->getBillableHours()) {
            $data['billable_hours'] = $object->getBillableHours();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getBillableAmount()) {
            $data['billable_amount'] = $object->getBillableAmount();
        }
        return $data;
    }
}