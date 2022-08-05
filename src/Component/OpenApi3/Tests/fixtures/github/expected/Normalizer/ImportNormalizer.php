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
class ImportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\Import';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Import';
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
        $object = new \Github\Model\Import();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ImportConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('vcs', $data) && $data['vcs'] !== null) {
            $object->setVcs($data['vcs']);
        }
        elseif (\array_key_exists('vcs', $data) && $data['vcs'] === null) {
            $object->setVcs(null);
        }
        if (\array_key_exists('use_lfs', $data)) {
            $object->setUseLfs($data['use_lfs']);
        }
        if (\array_key_exists('vcs_url', $data)) {
            $object->setVcsUrl($data['vcs_url']);
        }
        if (\array_key_exists('svc_root', $data)) {
            $object->setSvcRoot($data['svc_root']);
        }
        if (\array_key_exists('tfvc_project', $data)) {
            $object->setTfvcProject($data['tfvc_project']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('status_text', $data) && $data['status_text'] !== null) {
            $object->setStatusText($data['status_text']);
        }
        elseif (\array_key_exists('status_text', $data) && $data['status_text'] === null) {
            $object->setStatusText(null);
        }
        if (\array_key_exists('failed_step', $data) && $data['failed_step'] !== null) {
            $object->setFailedStep($data['failed_step']);
        }
        elseif (\array_key_exists('failed_step', $data) && $data['failed_step'] === null) {
            $object->setFailedStep(null);
        }
        if (\array_key_exists('error_message', $data) && $data['error_message'] !== null) {
            $object->setErrorMessage($data['error_message']);
        }
        elseif (\array_key_exists('error_message', $data) && $data['error_message'] === null) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('import_percent', $data) && $data['import_percent'] !== null) {
            $object->setImportPercent($data['import_percent']);
        }
        elseif (\array_key_exists('import_percent', $data) && $data['import_percent'] === null) {
            $object->setImportPercent(null);
        }
        if (\array_key_exists('commit_count', $data) && $data['commit_count'] !== null) {
            $object->setCommitCount($data['commit_count']);
        }
        elseif (\array_key_exists('commit_count', $data) && $data['commit_count'] === null) {
            $object->setCommitCount(null);
        }
        if (\array_key_exists('push_percent', $data) && $data['push_percent'] !== null) {
            $object->setPushPercent($data['push_percent']);
        }
        elseif (\array_key_exists('push_percent', $data) && $data['push_percent'] === null) {
            $object->setPushPercent(null);
        }
        if (\array_key_exists('has_large_files', $data)) {
            $object->setHasLargeFiles($data['has_large_files']);
        }
        if (\array_key_exists('large_files_size', $data)) {
            $object->setLargeFilesSize($data['large_files_size']);
        }
        if (\array_key_exists('large_files_count', $data)) {
            $object->setLargeFilesCount($data['large_files_count']);
        }
        if (\array_key_exists('project_choices', $data)) {
            $values = array();
            foreach ($data['project_choices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\ImportProjectChoicesItem', 'json', $context);
            }
            $object->setProjectChoices($values);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
        }
        if (\array_key_exists('authors_count', $data) && $data['authors_count'] !== null) {
            $object->setAuthorsCount($data['authors_count']);
        }
        elseif (\array_key_exists('authors_count', $data) && $data['authors_count'] === null) {
            $object->setAuthorsCount(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('authors_url', $data)) {
            $object->setAuthorsUrl($data['authors_url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
        }
        if (\array_key_exists('svn_root', $data)) {
            $object->setSvnRoot($data['svn_root']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['vcs'] = $object->getVcs();
        if (null !== $object->getUseLfs()) {
            $data['use_lfs'] = $object->getUseLfs();
        }
        $data['vcs_url'] = $object->getVcsUrl();
        if (null !== $object->getSvcRoot()) {
            $data['svc_root'] = $object->getSvcRoot();
        }
        if (null !== $object->getTfvcProject()) {
            $data['tfvc_project'] = $object->getTfvcProject();
        }
        $data['status'] = $object->getStatus();
        if (null !== $object->getStatusText()) {
            $data['status_text'] = $object->getStatusText();
        }
        if (null !== $object->getFailedStep()) {
            $data['failed_step'] = $object->getFailedStep();
        }
        if (null !== $object->getErrorMessage()) {
            $data['error_message'] = $object->getErrorMessage();
        }
        if (null !== $object->getImportPercent()) {
            $data['import_percent'] = $object->getImportPercent();
        }
        if (null !== $object->getCommitCount()) {
            $data['commit_count'] = $object->getCommitCount();
        }
        if (null !== $object->getPushPercent()) {
            $data['push_percent'] = $object->getPushPercent();
        }
        if (null !== $object->getHasLargeFiles()) {
            $data['has_large_files'] = $object->getHasLargeFiles();
        }
        if (null !== $object->getLargeFilesSize()) {
            $data['large_files_size'] = $object->getLargeFilesSize();
        }
        if (null !== $object->getLargeFilesCount()) {
            $data['large_files_count'] = $object->getLargeFilesCount();
        }
        if (null !== $object->getProjectChoices()) {
            $values = array();
            foreach ($object->getProjectChoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['project_choices'] = $values;
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if (null !== $object->getAuthorsCount()) {
            $data['authors_count'] = $object->getAuthorsCount();
        }
        $data['url'] = $object->getUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $data['authors_url'] = $object->getAuthorsUrl();
        $data['repository_url'] = $object->getRepositoryUrl();
        if (null !== $object->getSvnRoot()) {
            $data['svn_root'] = $object->getSvnRoot();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ImportConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}