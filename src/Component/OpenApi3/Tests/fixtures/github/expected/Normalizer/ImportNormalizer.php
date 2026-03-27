<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
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
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\Import::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\Import::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\Import();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('has_large_files', $data) && \is_int($data['has_large_files'])) {
            $data['has_large_files'] = (bool) $data['has_large_files'];
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ImportConstraint());
        }
        if (\array_key_exists('vcs', $data) && $data['vcs'] !== null) {
            $object->setVcs($data['vcs']);
            unset($data['vcs']);
        }
        elseif (\array_key_exists('vcs', $data) && $data['vcs'] === null) {
            $object->setVcs(null);
        }
        if (\array_key_exists('use_lfs', $data)) {
            $object->setUseLfs($data['use_lfs']);
            unset($data['use_lfs']);
        }
        if (\array_key_exists('vcs_url', $data)) {
            $object->setVcsUrl($data['vcs_url']);
            unset($data['vcs_url']);
        }
        if (\array_key_exists('svc_root', $data)) {
            $object->setSvcRoot($data['svc_root']);
            unset($data['svc_root']);
        }
        if (\array_key_exists('tfvc_project', $data)) {
            $object->setTfvcProject($data['tfvc_project']);
            unset($data['tfvc_project']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('status_text', $data) && $data['status_text'] !== null) {
            $object->setStatusText($data['status_text']);
            unset($data['status_text']);
        }
        elseif (\array_key_exists('status_text', $data) && $data['status_text'] === null) {
            $object->setStatusText(null);
        }
        if (\array_key_exists('failed_step', $data) && $data['failed_step'] !== null) {
            $object->setFailedStep($data['failed_step']);
            unset($data['failed_step']);
        }
        elseif (\array_key_exists('failed_step', $data) && $data['failed_step'] === null) {
            $object->setFailedStep(null);
        }
        if (\array_key_exists('error_message', $data) && $data['error_message'] !== null) {
            $object->setErrorMessage($data['error_message']);
            unset($data['error_message']);
        }
        elseif (\array_key_exists('error_message', $data) && $data['error_message'] === null) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('import_percent', $data) && $data['import_percent'] !== null) {
            $object->setImportPercent($data['import_percent']);
            unset($data['import_percent']);
        }
        elseif (\array_key_exists('import_percent', $data) && $data['import_percent'] === null) {
            $object->setImportPercent(null);
        }
        if (\array_key_exists('commit_count', $data) && $data['commit_count'] !== null) {
            $object->setCommitCount($data['commit_count']);
            unset($data['commit_count']);
        }
        elseif (\array_key_exists('commit_count', $data) && $data['commit_count'] === null) {
            $object->setCommitCount(null);
        }
        if (\array_key_exists('push_percent', $data) && $data['push_percent'] !== null) {
            $object->setPushPercent($data['push_percent']);
            unset($data['push_percent']);
        }
        elseif (\array_key_exists('push_percent', $data) && $data['push_percent'] === null) {
            $object->setPushPercent(null);
        }
        if (\array_key_exists('has_large_files', $data)) {
            $object->setHasLargeFiles($data['has_large_files']);
            unset($data['has_large_files']);
        }
        if (\array_key_exists('large_files_size', $data)) {
            $object->setLargeFilesSize($data['large_files_size']);
            unset($data['large_files_size']);
        }
        if (\array_key_exists('large_files_count', $data)) {
            $object->setLargeFilesCount($data['large_files_count']);
            unset($data['large_files_count']);
        }
        if (\array_key_exists('project_choices', $data)) {
            $values = [];
            foreach ($data['project_choices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Github\Model\ImportProjectChoicesItem::class, 'json', $context);
            }
            $object->setProjectChoices($values);
            unset($data['project_choices']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('authors_count', $data) && $data['authors_count'] !== null) {
            $object->setAuthorsCount($data['authors_count']);
            unset($data['authors_count']);
        }
        elseif (\array_key_exists('authors_count', $data) && $data['authors_count'] === null) {
            $object->setAuthorsCount(null);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('authors_url', $data)) {
            $object->setAuthorsUrl($data['authors_url']);
            unset($data['authors_url']);
        }
        if (\array_key_exists('repository_url', $data)) {
            $object->setRepositoryUrl($data['repository_url']);
            unset($data['repository_url']);
        }
        if (\array_key_exists('svn_root', $data)) {
            $object->setSvnRoot($data['svn_root']);
            unset($data['svn_root']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['vcs'] = $data->getVcs();
        if ($data->isInitialized('useLfs') && null !== $data->getUseLfs()) {
            $dataArray['use_lfs'] = $data->getUseLfs();
        }
        $dataArray['vcs_url'] = $data->getVcsUrl();
        if ($data->isInitialized('svcRoot') && null !== $data->getSvcRoot()) {
            $dataArray['svc_root'] = $data->getSvcRoot();
        }
        if ($data->isInitialized('tfvcProject') && null !== $data->getTfvcProject()) {
            $dataArray['tfvc_project'] = $data->getTfvcProject();
        }
        $dataArray['status'] = $data->getStatus();
        if ($data->isInitialized('statusText')) {
            $dataArray['status_text'] = $data->getStatusText();
        }
        if ($data->isInitialized('failedStep')) {
            $dataArray['failed_step'] = $data->getFailedStep();
        }
        if ($data->isInitialized('errorMessage')) {
            $dataArray['error_message'] = $data->getErrorMessage();
        }
        if ($data->isInitialized('importPercent')) {
            $dataArray['import_percent'] = $data->getImportPercent();
        }
        if ($data->isInitialized('commitCount')) {
            $dataArray['commit_count'] = $data->getCommitCount();
        }
        if ($data->isInitialized('pushPercent')) {
            $dataArray['push_percent'] = $data->getPushPercent();
        }
        if ($data->isInitialized('hasLargeFiles') && null !== $data->getHasLargeFiles()) {
            $dataArray['has_large_files'] = $data->getHasLargeFiles();
        }
        if ($data->isInitialized('largeFilesSize') && null !== $data->getLargeFilesSize()) {
            $dataArray['large_files_size'] = $data->getLargeFilesSize();
        }
        if ($data->isInitialized('largeFilesCount') && null !== $data->getLargeFilesCount()) {
            $dataArray['large_files_count'] = $data->getLargeFilesCount();
        }
        if ($data->isInitialized('projectChoices') && null !== $data->getProjectChoices()) {
            $values = [];
            foreach ($data->getProjectChoices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $dataArray['project_choices'] = $values;
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('authorsCount')) {
            $dataArray['authors_count'] = $data->getAuthorsCount();
        }
        $dataArray['url'] = $data->getUrl();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['authors_url'] = $data->getAuthorsUrl();
        $dataArray['repository_url'] = $data->getRepositoryUrl();
        if ($data->isInitialized('svnRoot') && null !== $data->getSvnRoot()) {
            $dataArray['svn_root'] = $data->getSvnRoot();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ImportConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\Import::class => false];
    }
}