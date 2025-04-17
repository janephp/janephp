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
class IssueEventForIssueNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IssueEventForIssue::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IssueEventForIssue::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\IssueEventForIssue();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueEventForIssueConstraint());
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('actor', $data) && $data['actor'] !== null) {
            $object->setActor($this->denormalizer->denormalize($data['actor'], \Github\Model\SimpleUser::class, 'json', $context));
            unset($data['actor']);
        }
        elseif (\array_key_exists('actor', $data) && $data['actor'] === null) {
            $object->setActor(null);
        }
        if (\array_key_exists('event', $data)) {
            $object->setEvent($data['event']);
            unset($data['event']);
        }
        if (\array_key_exists('commit_id', $data) && $data['commit_id'] !== null) {
            $object->setCommitId($data['commit_id']);
            unset($data['commit_id']);
        }
        elseif (\array_key_exists('commit_id', $data) && $data['commit_id'] === null) {
            $object->setCommitId(null);
        }
        if (\array_key_exists('commit_url', $data) && $data['commit_url'] !== null) {
            $object->setCommitUrl($data['commit_url']);
            unset($data['commit_url']);
        }
        elseif (\array_key_exists('commit_url', $data) && $data['commit_url'] === null) {
            $object->setCommitUrl(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('sha', $data)) {
            $object->setSha($data['sha']);
            unset($data['sha']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (\array_key_exists('issue_url', $data)) {
            $object->setIssueUrl($data['issue_url']);
            unset($data['issue_url']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
            unset($data['author_association']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('lock_reason', $data)) {
            $object->setLockReason($data['lock_reason']);
            unset($data['lock_reason']);
        }
        if (\array_key_exists('submitted_at', $data)) {
            $object->setSubmittedAt($data['submitted_at']);
            unset($data['submitted_at']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('pull_request_url', $data)) {
            $object->setPullRequestUrl($data['pull_request_url']);
            unset($data['pull_request_url']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
            unset($data['body_text']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('id') && null !== $data->getId()) {
            $dataArray['id'] = $data->getId();
        }
        if ($data->isInitialized('nodeId') && null !== $data->getNodeId()) {
            $dataArray['node_id'] = $data->getNodeId();
        }
        if ($data->isInitialized('url') && null !== $data->getUrl()) {
            $dataArray['url'] = $data->getUrl();
        }
        if ($data->isInitialized('actor') && null !== $data->getActor()) {
            $dataArray['actor'] = $this->normalizer->normalize($data->getActor(), 'json', $context);
        }
        if ($data->isInitialized('event') && null !== $data->getEvent()) {
            $dataArray['event'] = $data->getEvent();
        }
        if ($data->isInitialized('commitId') && null !== $data->getCommitId()) {
            $dataArray['commit_id'] = $data->getCommitId();
        }
        if ($data->isInitialized('commitUrl') && null !== $data->getCommitUrl()) {
            $dataArray['commit_url'] = $data->getCommitUrl();
        }
        if ($data->isInitialized('createdAt') && null !== $data->getCreatedAt()) {
            $dataArray['created_at'] = $data->getCreatedAt();
        }
        if ($data->isInitialized('sha') && null !== $data->getSha()) {
            $dataArray['sha'] = $data->getSha();
        }
        if ($data->isInitialized('htmlUrl') && null !== $data->getHtmlUrl()) {
            $dataArray['html_url'] = $data->getHtmlUrl();
        }
        if ($data->isInitialized('message') && null !== $data->getMessage()) {
            $dataArray['message'] = $data->getMessage();
        }
        if ($data->isInitialized('issueUrl') && null !== $data->getIssueUrl()) {
            $dataArray['issue_url'] = $data->getIssueUrl();
        }
        if ($data->isInitialized('updatedAt') && null !== $data->getUpdatedAt()) {
            $dataArray['updated_at'] = $data->getUpdatedAt();
        }
        if ($data->isInitialized('authorAssociation') && null !== $data->getAuthorAssociation()) {
            $dataArray['author_association'] = $data->getAuthorAssociation();
        }
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('lockReason') && null !== $data->getLockReason()) {
            $dataArray['lock_reason'] = $data->getLockReason();
        }
        if ($data->isInitialized('submittedAt') && null !== $data->getSubmittedAt()) {
            $dataArray['submitted_at'] = $data->getSubmittedAt();
        }
        if ($data->isInitialized('state') && null !== $data->getState()) {
            $dataArray['state'] = $data->getState();
        }
        if ($data->isInitialized('pullRequestUrl') && null !== $data->getPullRequestUrl()) {
            $dataArray['pull_request_url'] = $data->getPullRequestUrl();
        }
        if ($data->isInitialized('bodyHtml') && null !== $data->getBodyHtml()) {
            $dataArray['body_html'] = $data->getBodyHtml();
        }
        if ($data->isInitialized('bodyText') && null !== $data->getBodyText()) {
            $dataArray['body_text'] = $data->getBodyText();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IssueEventForIssueConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IssueEventForIssue::class => false];
    }
}