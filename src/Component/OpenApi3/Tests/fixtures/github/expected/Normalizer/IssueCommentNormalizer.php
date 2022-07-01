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
class IssueCommentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\IssueComment';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\IssueComment';
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
        $object = new \Github\Model\IssueComment();
        $validator = new \Github\Validator\IssueCommentValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('body', $data)) {
            $object->setBody($data['body']);
        }
        if (\array_key_exists('body_text', $data)) {
            $object->setBodyText($data['body_text']);
        }
        if (\array_key_exists('body_html', $data)) {
            $object->setBodyHtml($data['body_html']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\IssueCommentUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('issue_url', $data)) {
            $object->setIssueUrl($data['issue_url']);
        }
        if (\array_key_exists('author_association', $data)) {
            $object->setAuthorAssociation($data['author_association']);
        }
        if (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] !== null) {
            $object->setPerformedViaGithubApp($this->denormalizer->denormalize($data['performed_via_github_app'], 'Github\\Model\\IssueCommentPerformedViaGithubApp', 'json', $context));
        }
        elseif (\array_key_exists('performed_via_github_app', $data) && $data['performed_via_github_app'] === null) {
            $object->setPerformedViaGithubApp(null);
        }
        if (\array_key_exists('reactions', $data)) {
            $object->setReactions($this->denormalizer->denormalize($data['reactions'], 'Github\\Model\\ReactionRollup', 'json', $context));
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
        $data['url'] = $object->getUrl();
        if (null !== $object->getBody()) {
            $data['body'] = $object->getBody();
        }
        if (null !== $object->getBodyText()) {
            $data['body_text'] = $object->getBodyText();
        }
        if (null !== $object->getBodyHtml()) {
            $data['body_html'] = $object->getBodyHtml();
        }
        $data['html_url'] = $object->getHtmlUrl();
        $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['issue_url'] = $object->getIssueUrl();
        $data['author_association'] = $object->getAuthorAssociation();
        if (null !== $object->getPerformedViaGithubApp()) {
            $data['performed_via_github_app'] = $this->normalizer->normalize($object->getPerformedViaGithubApp(), 'json', $context);
        }
        if (null !== $object->getReactions()) {
            $data['reactions'] = $this->normalizer->normalize($object->getReactions(), 'json', $context);
        }
        $validator = new \Github\Validator\IssueCommentValidator();
        if (!($data['skip_validation'] ?? false)) {
            $validator->validate($data);
        }
        return $data;
    }
}