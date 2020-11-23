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
class AuthorizationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Github\\Model\\Authorization';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\Authorization';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Github\Model\Authorization();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('scopes', $data) && $data['scopes'] !== null) {
            $values = array();
            foreach ($data['scopes'] as $value) {
                $values[] = $value;
            }
            $object->setScopes($values);
        }
        elseif (\array_key_exists('scopes', $data) && $data['scopes'] === null) {
            $object->setScopes(null);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        if (\array_key_exists('token_last_eight', $data) && $data['token_last_eight'] !== null) {
            $object->setTokenLastEight($data['token_last_eight']);
        }
        elseif (\array_key_exists('token_last_eight', $data) && $data['token_last_eight'] === null) {
            $object->setTokenLastEight(null);
        }
        if (\array_key_exists('hashed_token', $data) && $data['hashed_token'] !== null) {
            $object->setHashedToken($data['hashed_token']);
        }
        elseif (\array_key_exists('hashed_token', $data) && $data['hashed_token'] === null) {
            $object->setHashedToken(null);
        }
        if (\array_key_exists('app', $data)) {
            $object->setApp($this->denormalizer->denormalize($data['app'], 'Github\\Model\\AuthorizationApp', 'json', $context));
        }
        if (\array_key_exists('note', $data) && $data['note'] !== null) {
            $object->setNote($data['note']);
        }
        elseif (\array_key_exists('note', $data) && $data['note'] === null) {
            $object->setNote(null);
        }
        if (\array_key_exists('note_url', $data) && $data['note_url'] !== null) {
            $object->setNoteUrl($data['note_url']);
        }
        elseif (\array_key_exists('note_url', $data) && $data['note_url'] === null) {
            $object->setNoteUrl(null);
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('fingerprint', $data) && $data['fingerprint'] !== null) {
            $object->setFingerprint($data['fingerprint']);
        }
        elseif (\array_key_exists('fingerprint', $data) && $data['fingerprint'] === null) {
            $object->setFingerprint(null);
        }
        if (\array_key_exists('user', $data) && $data['user'] !== null) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'Github\\Model\\AuthorizationUser', 'json', $context));
        }
        elseif (\array_key_exists('user', $data) && $data['user'] === null) {
            $object->setUser(null);
        }
        if (\array_key_exists('installation', $data) && $data['installation'] !== null) {
            $object->setInstallation($this->denormalizer->denormalize($data['installation'], 'Github\\Model\\AuthorizationInstallation', 'json', $context));
        }
        elseif (\array_key_exists('installation', $data) && $data['installation'] === null) {
            $object->setInstallation(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['id'] = $object->getId();
        $data['url'] = $object->getUrl();
        $values = array();
        foreach ($object->getScopes() as $value) {
            $values[] = $value;
        }
        $data['scopes'] = $values;
        $data['token'] = $object->getToken();
        $data['token_last_eight'] = $object->getTokenLastEight();
        $data['hashed_token'] = $object->getHashedToken();
        $data['app'] = $this->normalizer->normalize($object->getApp(), 'json', $context);
        $data['note'] = $object->getNote();
        $data['note_url'] = $object->getNoteUrl();
        $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        $data['fingerprint'] = $object->getFingerprint();
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getInstallation()) {
            $data['installation'] = $this->normalizer->normalize($object->getInstallation(), 'json', $context);
        }
        return $data;
    }
}