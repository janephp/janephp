<?php

namespace Github\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ReposOwnerRepoIssuesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\ReposOwnerRepoIssuesPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoIssuesPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\ReposOwnerRepoIssuesPostBody();
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('assignee', $data) && $data['assignee'] !== null) {
            $object->setAssignee($data['assignee']);
        }
        elseif (\array_key_exists('assignee', $data) && $data['assignee'] === null) {
            $object->setAssignee(null);
        }
        if (\array_key_exists('milestone', $data) && $data['milestone'] !== null) {
            $object->setMilestone($data['milestone']);
        }
        elseif (\array_key_exists('milestone', $data) && $data['milestone'] === null) {
            $object->setMilestone(null);
        }
        if (\array_key_exists('labels', $data)) {
            $values = array();
            foreach ($data['labels'] as $value) {
                $values[] = $value;
            }
            $object->setLabels($values);
        }
        if (\array_key_exists('assignees', $data)) {
            $values_1 = array();
            foreach ($data['assignees'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAssignees($values_1);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if (null !== $object->getAssignee()) {
            $data['assignee'] = $object->getAssignee();
        }
        if (null !== $object->getMilestone()) {
            $data['milestone'] = $object->getMilestone();
        }
        if (null !== $object->getLabels()) {
            $values = array();
            foreach ($object->getLabels() as $value) {
                $values[] = $value;
            }
            $data['labels'] = $values;
        }
        if (null !== $object->getAssignees()) {
            $values_1 = array();
            foreach ($object->getAssignees() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['assignees'] = $values_1;
        }
        return $data;
    }
}