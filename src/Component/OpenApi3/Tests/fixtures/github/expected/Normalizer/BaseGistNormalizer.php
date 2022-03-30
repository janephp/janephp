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
class BaseGistNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\BaseGist';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\BaseGist';
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
        $object = new \Github\Model\BaseGist();
        $validator = new \Github\Validator\BaseGistValidator();
        $validator->validate($data);
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('forks_url', $data)) {
            $object->setForksUrl($data['forks_url']);
        }
        if (\array_key_exists('commits_url', $data)) {
            $object->setCommitsUrl($data['commits_url']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('node_id', $data)) {
            $object->setNodeId($data['node_id']);
        }
        if (\array_key_exists('git_pull_url', $data)) {
            $object->setGitPullUrl($data['git_pull_url']);
        }
        if (\array_key_exists('git_push_url', $data)) {
            $object->setGitPushUrl($data['git_push_url']);
        }
        if (\array_key_exists('html_url', $data)) {
            $object->setHtmlUrl($data['html_url']);
        }
        if (\array_key_exists('files', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['files'] as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Github\\Model\\BaseGistFilesItem', 'json', $context);
            }
            $object->setFiles($values);
        }
        if (\array_key_exists('public', $data)) {
            $object->setPublic($data['public']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('comments', $data)) {
            $object->setComments($data['comments']);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\BaseGistUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('comments_url', $data)) {
            $object->setCommentsUrl($data['comments_url']);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\BaseGistOwner', 'json', $context));
        }
        elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('truncated', $data)) {
            $object->setTruncated($data['truncated']);
        }
        if (\array_key_exists('forks', $data)) {
            $values_1 = array();
            foreach ($data['forks'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setForks($values_1);
        }
        if (\array_key_exists('history', $data)) {
            $values_2 = array();
            foreach ($data['history'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setHistory($values_2);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['url'] = $object->getUrl();
        $data['forks_url'] = $object->getForksUrl();
        $data['commits_url'] = $object->getCommitsUrl();
        $data['id'] = $object->getId();
        $data['node_id'] = $object->getNodeId();
        $data['git_pull_url'] = $object->getGitPullUrl();
        $data['git_push_url'] = $object->getGitPushUrl();
        $data['html_url'] = $object->getHtmlUrl();
        $values = array();
        foreach ($object->getFiles() as $key => $value) {
            $values[$key] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['files'] = $values;
        $data['public'] = $object->getPublic();
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['description'] = $object->getDescription();
        $data['comments'] = $object->getComments();
        $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        $data['comments_url'] = $object->getCommentsUrl();
        if (null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getTruncated()) {
            $data['truncated'] = $object->getTruncated();
        }
        if (null !== $object->getForks()) {
            $values_1 = array();
            foreach ($object->getForks() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['forks'] = $values_1;
        }
        if (null !== $object->getHistory()) {
            $values_2 = array();
            foreach ($object->getHistory() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['history'] = $values_2;
        }
        $validator = new \Github\Validator\BaseGistValidator();
        $validator->validate($data);
        return $data;
    }
}