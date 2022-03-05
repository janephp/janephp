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
class CheckSuiteNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\CheckSuite';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\CheckSuite';
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
        $object = new \Github\Model\CheckSuite();
        $validator = new \Github\Validator\CheckSuiteValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('head_branch', $data) && $data['head_branch'] !== null) {
            $object->setHeadBranch($data['head_branch']);
        }
        elseif (\array_key_exists('head_branch', $data) && $data['head_branch'] === null) {
            $object->setHeadBranch(null);
        }
        if (\array_key_exists('head_sha', $data)) {
            $object->setHeadSha($data['head_sha']);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('conclusion', $data) && $data['conclusion'] !== null) {
            $object->setConclusion($data['conclusion']);
        }
        elseif (\array_key_exists('conclusion', $data) && $data['conclusion'] === null) {
            $object->setConclusion(null);
        }
        if (\array_key_exists('url', $data) && $data['url'] !== null) {
            $object->setUrl($data['url']);
        }
        elseif (\array_key_exists('url', $data) && $data['url'] === null) {
            $object->setUrl(null);
        }
        if (\array_key_exists('before', $data) && $data['before'] !== null) {
            $object->setBefore($data['before']);
        }
        elseif (\array_key_exists('before', $data) && $data['before'] === null) {
            $object->setBefore(null);
        }
        if (\array_key_exists('after', $data) && $data['after'] !== null) {
            $object->setAfter($data['after']);
        }
        elseif (\array_key_exists('after', $data) && $data['after'] === null) {
            $object->setAfter(null);
        }
        if (\array_key_exists('pull_requests', $data) && $data['pull_requests'] !== null) {
            $values = array();
            foreach ($data['pull_requests'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\PullRequestMinimal', 'json', $context);
            }
            $object->setPullRequests($values);
        }
        elseif (\array_key_exists('pull_requests', $data) && $data['pull_requests'] === null) {
            $object->setPullRequests(null);
        }
        if (\array_key_exists('app', $data) && $data['app'] !== null) {
            $object->setApp($this->denormalizer->denormalize($data['app'], 'Github\\Model\\CheckSuiteApp', 'json', $context));
        }
        elseif (\array_key_exists('app', $data) && $data['app'] === null) {
            $object->setApp(null);
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('head_commit', $data)) {
            $object->setHeadCommit($this->denormalizer->denormalize($data['head_commit'], 'Github\\Model\\SimpleCommit', 'json', $context));
        }
        if (\array_key_exists('latest_check_runs_count', $data)) {
            $object->setLatestCheckRunsCount($data['latest_check_runs_count']);
        }
        if (\array_key_exists('check_runs_url', $data)) {
            $object->setCheckRunsUrl($data['check_runs_url']);
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
        $data['node_id'] = $object->getNodeId();
        $data['head_branch'] = $object->getHeadBranch();
        $data['head_sha'] = $object->getHeadSha();
        $data['status'] = $object->getStatus();
        $data['conclusion'] = $object->getConclusion();
        $data['url'] = $object->getUrl();
        $data['before'] = $object->getBefore();
        $data['after'] = $object->getAfter();
        $values = array();
        foreach ($object->getPullRequests() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['pull_requests'] = $values;
        $data['app'] = $this->normalizer->normalize($object->getApp(), 'json', $context);
        $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['head_commit'] = $this->normalizer->normalize($object->getHeadCommit(), 'json', $context);
        $data['latest_check_runs_count'] = $object->getLatestCheckRunsCount();
        $data['check_runs_url'] = $object->getCheckRunsUrl();
        $validator = new \Github\Validator\CheckSuiteValidator();
        $validator->validate($data);
        return $data;
    }
}