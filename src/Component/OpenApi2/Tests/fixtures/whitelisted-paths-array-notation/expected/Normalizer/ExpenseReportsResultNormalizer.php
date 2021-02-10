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
class ExpenseReportsResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseReportsResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\ExpenseReportsResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\ExpenseReportsResult();
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
        if (\array_key_exists('expense_category_id', $data)) {
            $object->setExpenseCategoryId($data['expense_category_id']);
        }
        if (\array_key_exists('expense_category_name', $data)) {
            $object->setExpenseCategoryName($data['expense_category_name']);
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
        if (\array_key_exists('total_amount', $data)) {
            $object->setTotalAmount($data['total_amount']);
        }
        if (\array_key_exists('billable_amount', $data)) {
            $object->setBillableAmount($data['billable_amount']);
        }
        if (\array_key_exists('currency', $data)) {
            $object->setCurrency($data['currency']);
        }
        return $object;
    }
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
        if (null !== $object->getExpenseCategoryId()) {
            $data['expense_category_id'] = $object->getExpenseCategoryId();
        }
        if (null !== $object->getExpenseCategoryName()) {
            $data['expense_category_name'] = $object->getExpenseCategoryName();
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
        if (null !== $object->getTotalAmount()) {
            $data['total_amount'] = $object->getTotalAmount();
        }
        if (null !== $object->getBillableAmount()) {
            $data['billable_amount'] = $object->getBillableAmount();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        return $data;
    }
}