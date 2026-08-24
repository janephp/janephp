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
class ReviewCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\ReviewComment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\ReviewComment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\ReviewComment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\ReviewCommentConstraint());
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (\array_key_exists('pull_request_review_id', $data) && $data['pull_request_review_id'] !== null) {
            $object->setPullRequestReviewId($data['pull_request_review_id']);
            unset($data['pull_request_review_id']);
        }
        elseif (\array_key_exists('pull_request_review_id', $data) && $data['pull_request_review_id'] === null) {
            $object->setPullRequestReviewId(null);
            unset($data['pull_request_review_id']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('diff_hunk', $data)) {
            $object->setDiffHunk($data['diff_hunk']);
            unset($data['diff_hunk']);
        }
        if (\array_key_exists('path', $data)) {
            $object->setPath($data['path']);
            unset($data['path']);
        }
        if (\array_key_exists('position', $data) && $data['position'] !== null) {
            $object->setPosition($data['position']);
            unset($data['position']);
        }
        elseif (\array_key_exists('position', $data) && $data['position'] === null) {
            $object->setPosition(null);
            unset($data['position']);
        }
        if (\array_key_exists('original_position', $data)) {
            $object->setOriginalPosition($data['original_position']);
            unset($data['original_position']);
        }
        if (\array_key_exists('commit_id', $data)) {
            $object->setCommitId($data['commit_id']);
            unset($data['commit_id']);
        }
        if (\array_key_exists('original_commit_id', $data)) {
            $object->setOriginalCommitId($data['original_commit_id']);
            unset($data['original_commit_id']);
        }
        if (\array_key_exists('in_reply_to_id', $data)) {
            $object->setInReplyToId($data['in_reply_to_id']);
            unset($data['in_reply_to_id']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\ReviewCommentUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
            unset($data['user']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('created_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['created_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setCreatedAt($date);
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']);
            if (false === $date_1) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['updated_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setUpdatedAt($date_1);
            unset($data['updated_at']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('pull_request_url', $data)) {
            $object->setPullRequestUrl($data['pull_request_url']);
            unset($data['pull_request_url']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
            unset($data['author_association']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \Github\Model\ReviewCommentLinks::class, 'json', $context));
            unset($data['_links']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
            unset($data['body_text']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('side', $data)) {
            $object->setSide($data['side']);
            unset($data['side']);
        }
        if (\array_key_exists('start_side', $data) && $data['start_side'] !== null) {
            $object->setStartSide($data['start_side']);
            unset($data['start_side']);
        }
        elseif (\array_key_exists('start_side', $data) && $data['start_side'] === null) {
            $object->setStartSide(null);
            unset($data['start_side']);
        }
        if (\array_key_exists('line', $data)) {
            $object->setLine($data['line']);
            unset($data['line']);
        }
        if (\array_key_exists('original_line', $data)) {
            $object->setOriginalLine($data['original_line']);
            unset($data['original_line']);
        }
        if (\array_key_exists('start_line', $data) && $data['start_line'] !== null) {
            $object->setStartLine($data['start_line']);
            unset($data['start_line']);
        }
        elseif (\array_key_exists('start_line', $data) && $data['start_line'] === null) {
            $object->setStartLine(null);
            unset($data['start_line']);
        }
        if (\array_key_exists('original_start_line', $data) && $data['original_start_line'] !== null) {
            $object->setOriginalStartLine($data['original_start_line']);
            unset($data['original_start_line']);
        }
        elseif (\array_key_exists('original_start_line', $data) && $data['original_start_line'] === null) {
            $object->setOriginalStartLine(null);
            unset($data['original_start_line']);
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
        $dataArray['url'] = $data->getUrl();
        $dataArray['pull_request_review_id'] = $data->getPullRequestReviewId();
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['diff_hunk'] = $data->getDiffHunk();
        $dataArray['path'] = $data->getPath();
        $dataArray['position'] = $data->getPosition();
        $dataArray['original_position'] = $data->getOriginalPosition();
        $dataArray['commit_id'] = $data->getCommitId();
        $dataArray['original_commit_id'] = $data->getOriginalCommitId();
        if ($data->isInitialized('inReplyToId') && null !== $data->getInReplyToId()) {
            $dataArray['in_reply_to_id'] = $data->getInReplyToId();
        }
        $dataArray['user'] = $data->getUser() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getUser(), 'json', $context));
        $dataArray['body'] = $data->getBody();
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['pull_request_url'] = $data->getPullRequestUrl();
        $dataArray['author_association'] = $data->getAuthorAssociation();
        $dataArray['_links'] = $data->getLinks() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getLinks(), 'json', $context));
        if ($data->isInitialized('bodyText') && null !== $data->getBodyText()) {
            $dataArray['body_text'] = $data->getBodyText();
        }
        if ($data->isInitialized('bodyHtml') && null !== $data->getBodyHtml()) {
            $dataArray['body_html'] = $data->getBodyHtml();
        }
        if ($data->isInitialized('side') && null !== $data->getSide()) {
            $dataArray['side'] = $data->getSide();
        }
        if ($data->isInitialized('startSide') && null !== $data->getStartSide()) {
            $dataArray['start_side'] = $data->getStartSide();
        }
        if ($data->isInitialized('line') && null !== $data->getLine()) {
            $dataArray['line'] = $data->getLine();
        }
        if ($data->isInitialized('originalLine') && null !== $data->getOriginalLine()) {
            $dataArray['original_line'] = $data->getOriginalLine();
        }
        if ($data->isInitialized('startLine') && null !== $data->getStartLine()) {
            $dataArray['start_line'] = $data->getStartLine();
        }
        if ($data->isInitialized('originalStartLine') && null !== $data->getOriginalStartLine()) {
            $dataArray['original_start_line'] = $data->getOriginalStartLine();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\ReviewCommentConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\ReviewComment::class => false];
    }
}