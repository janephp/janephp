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
class IssueCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Github\Model\IssueComment::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Github\Model\IssueComment::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\IssueComment();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Github\Validator\IssueCommentConstraint());
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
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
            unset($data['body']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
            unset($data['body_text']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
            unset($data['body_html']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
            unset($data['html_url']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], \Github\Model\IssueCommentUser::class, 'json', $context));
            unset($data['user']);
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
            unset($data['created_at']);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
            unset($data['updated_at']);
        }
        if (\array_key_exists('issue_url', $data)) {
            $object->setIssueUrl($data['issue_url']);
            unset($data['issue_url']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
            unset($data['author_association']);
        }
        if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
            $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], \Github\Model\IssueCommentPerformedViaGithubApp::class, 'json', $context));
            unset($data['performed_via_github_app']);
        }
        elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
            $object->setPerformedViaGithubApp(null);
        }
        if (\array_key_exists('reactions', $data)) {
            $object->setReactions($this->denormalizer->denormalize($data['reactions'], \Github\Model\ReactionRollup::class, 'json', $context));
            unset($data['reactions']);
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
        $dataArray['url'] = $data->getUrl();
        if ($data->isInitialized('body') && null !== $data->getBody()) {
            $dataArray['body'] = $data->getBody();
        }
        if ($data->isInitialized('bodyText') && null !== $data->getBodyText()) {
            $dataArray['body_text'] = $data->getBodyText();
        }
        if ($data->isInitialized('bodyHtml') && null !== $data->getBodyHtml()) {
            $dataArray['body_html'] = $data->getBodyHtml();
        }
        $dataArray['html_url'] = $data->getHtmlUrl();
        $dataArray['user'] = $this->normalizer->normalize($data->getUser(), 'json', $context);
        $dataArray['created_at'] = $data->getCreatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['updated_at'] = $data->getUpdatedAt()->format('Y-m-d\TH:i:sP');
        $dataArray['issue_url'] = $data->getIssueUrl();
        $dataArray['author_association'] = $data->getAuthorAssociation();
        if ($data->isInitialized('performedViaGithubApp')) {
            $dataArray['performed_via_github_app'] = $this->normalizer->normalize($data->getPerformedViaGithubApp(), 'json', $context);
        }
        if ($data->isInitialized('reactions') && null !== $data->getReactions()) {
            $dataArray['reactions'] = $this->normalizer->normalize($data->getReactions(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Github\Validator\IssueCommentConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Github\Model\IssueComment::class => false];
    }
}