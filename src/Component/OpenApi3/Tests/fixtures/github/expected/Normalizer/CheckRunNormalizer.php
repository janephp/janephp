<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CheckRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CheckRun';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CheckRun';
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
        $object = new \Github\Model\CheckRun();
        $validator = new \Github\Validator\CheckRunValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('head_sha', $data)) {
            $object->setHeadSha($data['head_sha']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
            $object->setExternalId($data['external_id']);
        }
        elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
            $object->setHtmlUrl($data['html_url']);
        }
        elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
            $object->setHtmlUrl(null);
        }
        if (\array_key_exists('details_url', $data) && $data['details_url'] !== null) {
            $object->setDetailsUrl($data['details_url']);
        }
        elseif (\array_key_exists('details_url', $data) && $data['details_url'] === null) {
            $object->setDetailsUrl(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('conclusion', $data) && $data['conclusion'] !== null) {
            $object->setConclusion($data['conclusion']);
        }
        elseif (\array_key_exists('conclusion', $data) && $data['conclusion'] === null) {
            $object->setConclusion(null);
        }
        if (\array_key_exists('started_at', $data) && $data['started_at'] !== null) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['started_at']));
        }
        elseif (\array_key_exists('started_at', $data) && $data['started_at'] === null) {
            $object->setStartedAt(null);
        }
        if (\array_key_exists('completed_at', $data) && $data['completed_at'] !== null) {
            $object->setCompletedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['completed_at']));
        }
        elseif (\array_key_exists('completed_at', $data) && $data['completed_at'] === null) {
            $object->setCompletedAt(null);
        }
        if (\array_key_exists('output', $data)) {
            $object->setOutput($this->denormalizer->denormalize($data['output'], 'Github\\Model\\CheckRunOutput', 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('check_suite', $data) && $data['check_suite'] !== null) {
            $object->setCheckSuite($this->denormalizer->denormalize($data['check_suite'], 'Github\\Model\\CheckRunCheckSuite', 'json', $context));
        }
        elseif (\array_key_exists('check_suite', $data) && $data['check_suite'] === null) {
            $object->setCheckSuite(null);
        }
        if (\array_key_exists('app', $data) && $data['app'] !== null) {
            $object->setApp($this->denormalizer->denormalize($data['app'], 'Github\\Model\\CheckRunApp', 'json', $context));
        }
        elseif (\array_key_exists('app', $data) && $data['app'] === null) {
            $object->setApp(null);
        }
        if (\array_key_exists('pull_requests', $data)) {
            $object->setPullRequests($data['pull_requests']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['head_sha'] = $object->getHeadSha();
        $data['node_id'] = $object->getNodeId();
        $data['external_id'] = $object->getExternalId();
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['details_url'] = $object->getDetailsUrl();
        $data['status'] = $object->getStatus();
        $data['conclusion'] = $object->getConclusion();
        $data['started_at'] = $object->getStartedAt()->format('Y-m-d\\TH:i:sP');
        $data['completed_at'] = $object->getCompletedAt()->format('Y-m-d\\TH:i:sP');
        $data['output'] = $this->normalizer->normalize($object->getOutput(), 'json', $context);
        $data['name'] = $object->getName();
        $data['check_suite'] = $this->normalizer->normalize($object->getCheckSuite(), 'json', $context);
        $data['app'] = $this->normalizer->normalize($object->getApp(), 'json', $context);
        $data['pull_requests'] = $object->getPullRequests();
        $validator = new \Github\Validator\CheckRunValidator();
        $validator->validate($data);
        return $data;
    }
}