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
class WorkflowRunNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\WorkflowRun';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\WorkflowRun';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\WorkflowRun();
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
        if (\array_key_exists('run_number', $data)) {
            $object->setRunNumber($data['run_number']);
        }
        if (\array_key_exists('event', $data)) {
            $object->setEvent($data['event']);
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
        if (\array_key_exists('workflow_id', $data)) {
            $object->setWorkflowId($data['workflow_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
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
        if (\array_key_exists('jobs_url', $data)) {
            $object->setJobsUrl($data['jobs_url']);
        }
        if (\array_key_exists('logs_url', $data)) {
            $object->setLogsUrl($data['logs_url']);
        }
        if (\array_key_exists('check_suite_url', $data)) {
            $object->setCheckSuiteUrl($data['check_suite_url']);
        }
        if (\array_key_exists('artifacts_url', $data)) {
            $object->setArtifactsUrl($data['artifacts_url']);
        }
        if (\array_key_exists('cancel_url', $data)) {
            $object->setCancelUrl($data['cancel_url']);
        }
        if (\array_key_exists('rerun_url', $data)) {
            $object->setRerunUrl($data['rerun_url']);
        }
        if (\array_key_exists('workflow_url', $data)) {
            $object->setWorkflowUrl($data['workflow_url']);
        }
        if (\array_key_exists('head_commit', $data)) {
            $object->setHeadCommit($this->denormalizer->denormalize($data['head_commit'], 'Github\\Model\\SimpleCommit', 'json', $context));
        }
        if (\array_key_exists('repository', $data)) {
            $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
        }
        if (\array_key_exists('head_repository', $data)) {
            $object->setHeadRepository($this->denormalizer->denormalize($data['head_repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
        }
        if (\array_key_exists('head_repository_id', $data)) {
            $object->setHeadRepositoryId($data['head_repository_id']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNodeId()) {
            $data['node_id'] = $object->getNodeId();
        }
        if (null !== $object->getHeadBranch()) {
            $data['head_branch'] = $object->getHeadBranch();
        }
        if (null !== $object->getHeadSha()) {
            $data['head_sha'] = $object->getHeadSha();
        }
        if (null !== $object->getRunNumber()) {
            $data['run_number'] = $object->getRunNumber();
        }
        if (null !== $object->getEvent()) {
            $data['event'] = $object->getEvent();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getConclusion()) {
            $data['conclusion'] = $object->getConclusion();
        }
        if (null !== $object->getWorkflowId()) {
            $data['workflow_id'] = $object->getWorkflowId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getHtmlUrl()) {
            $data['html_url'] = $object->getHtmlUrl();
        }
        if (null !== $object->getPullRequests()) {
            $values = array();
            foreach ($object->getPullRequests() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['pull_requests'] = $values;
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getJobsUrl()) {
            $data['jobs_url'] = $object->getJobsUrl();
        }
        if (null !== $object->getLogsUrl()) {
            $data['logs_url'] = $object->getLogsUrl();
        }
        if (null !== $object->getCheckSuiteUrl()) {
            $data['check_suite_url'] = $object->getCheckSuiteUrl();
        }
        if (null !== $object->getArtifactsUrl()) {
            $data['artifacts_url'] = $object->getArtifactsUrl();
        }
        if (null !== $object->getCancelUrl()) {
            $data['cancel_url'] = $object->getCancelUrl();
        }
        if (null !== $object->getRerunUrl()) {
            $data['rerun_url'] = $object->getRerunUrl();
        }
        if (null !== $object->getWorkflowUrl()) {
            $data['workflow_url'] = $object->getWorkflowUrl();
        }
        if (null !== $object->getHeadCommit()) {
            $data['head_commit'] = $this->normalizer->normalize($object->getHeadCommit(), 'json', $context);
        }
        if (null !== $object->getRepository()) {
            $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
        }
        if (null !== $object->getHeadRepository()) {
            $data['head_repository'] = $this->normalizer->normalize($object->getHeadRepository(), 'json', $context);
        }
        if (null !== $object->getHeadRepositoryId()) {
            $data['head_repository_id'] = $object->getHeadRepositoryId();
        }
        return $data;
    }
}