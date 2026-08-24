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
class PullRequestReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\PullRequestReview::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\PullRequestReview::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Github\Model\PullRequestReview();
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
            $this->validate($data, new \Github\Validator\PullRequestReviewConstraint());
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
            unset($data['node_id']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\PullRequestReviewUser::class, 'json', $context));
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
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('pull_request_url', $data)) {
            $object->setPullRequestUrl($data['pull_request_url']);
            unset($data['pull_request_url']);
        }
        if (\array_key_exists('_links', $data)) {
            $object->setLinks($this->denormalizer->denormalize($data['_links'], \Github\Model\PullRequestReviewLinks::class, 'json', $context));
            unset($data['_links']);
        }
        if (\array_key_exists('submitted_at', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['submitted_at']);
            if (false === $date) {
                throw new \Github\Runtime\Normalizer\InvalidDateException($data['submitted_at'], 'Y-m-d\TH:i:sP');
            }
            $object->setSubmittedAt($date);
            unset($data['submitted_at']);
        }
        if (\array_key_exists('commit_id', $data)) {
            $object->setCommitId($data['commit_id']);
            unset($data['commit_id']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
            unset($data['body_text']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
            unset($data['author_association']);
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
        $dataArray['id'] = $data->getId();
        $dataArray['node_id'] = $data->getNodeId();
        $dataArray['user'] = $data->getUser() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getUser(), 'json', $context));
        $dataArray['body'] = $data->getBody();
        $dataArray['state'] = $data->getState();
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['pull_request_url'] = $data->getPullRequestUrl();
        $dataArray['_links'] = $data->getLinks() === null ? null : new \Github\Runtime\JsonObject($this->normalizer->normalize($data->getLinks(), 'json', $context));
        if ($data->isInitialized('submittedAt') && null !== $data->getSubmittedAt()) {
            $dataArray['submitted_at'] = $data->getSubmittedAt()->format('Y-m-d\TH:i:sP');
        }
        $dataArray['commit_id'] = $data->getCommitId();
        if ($data->isInitialized('bodyHtml') && null !== $data->getBodyHtml()) {
            $dataArray['body_html'] = $data->getBodyHtml();
        }
        if ($data->isInitialized('bodyText') && null !== $data->getBodyText()) {
            $dataArray['body_text'] = $data->getBodyText();
        }
        $dataArray['author_association'] = $data->getAuthorAssociation();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\PullRequestReviewConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\PullRequestReview::class => false];
    }
}