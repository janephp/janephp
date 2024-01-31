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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RepositoryInvitationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\RepositoryInvitation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\RepositoryInvitation';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\RepositoryInvitation();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositoryInvitationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('repository', $data)) {
                $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
                unset($data['repository']);
            }
            if (\array_key_exists('invitee', $data) && $data['invitee'] !== null) {
                $object->setInvitee($this->denormalizer->denormalize($data['invitee'], 'Github\\Model\\RepositoryInvitationInvitee', 'json', $context));
                unset($data['invitee']);
            }
            elseif (\array_key_exists('invitee', $data) && $data['invitee'] === null) {
                $object->setInvitee(null);
            }
            if (\array_key_exists('inviter', $data) && $data['inviter'] !== null) {
                $object->setInviter($this->denormalizer->denormalize($data['inviter'], 'Github\\Model\\RepositoryInvitationInviter', 'json', $context));
                unset($data['inviter']);
            }
            elseif (\array_key_exists('inviter', $data) && $data['inviter'] === null) {
                $object->setInviter(null);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($data['permissions']);
                unset($data['permissions']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
            $data['invitee'] = $this->normalizer->normalize($object->getInvitee(), 'json', $context);
            $data['inviter'] = $this->normalizer->normalize($object->getInviter(), 'json', $context);
            $data['permissions'] = $object->getPermissions();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['url'] = $object->getUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['node_id'] = $object->getNodeId();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositoryInvitationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\RepositoryInvitation' => false];
        }
    }
} else {
    class RepositoryInvitationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\RepositoryInvitation';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\RepositoryInvitation';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\RepositoryInvitation();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositoryInvitationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('repository', $data)) {
                $object->setRepository($this->denormalizer->denormalize($data['repository'], 'Github\\Model\\MinimalRepository', 'json', $context));
                unset($data['repository']);
            }
            if (\array_key_exists('invitee', $data) && $data['invitee'] !== null) {
                $object->setInvitee($this->denormalizer->denormalize($data['invitee'], 'Github\\Model\\RepositoryInvitationInvitee', 'json', $context));
                unset($data['invitee']);
            }
            elseif (\array_key_exists('invitee', $data) && $data['invitee'] === null) {
                $object->setInvitee(null);
            }
            if (\array_key_exists('inviter', $data) && $data['inviter'] !== null) {
                $object->setInviter($this->denormalizer->denormalize($data['inviter'], 'Github\\Model\\RepositoryInvitationInviter', 'json', $context));
                unset($data['inviter']);
            }
            elseif (\array_key_exists('inviter', $data) && $data['inviter'] === null) {
                $object->setInviter(null);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($data['permissions']);
                unset($data['permissions']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['repository'] = $this->normalizer->normalize($object->getRepository(), 'json', $context);
            $data['invitee'] = $this->normalizer->normalize($object->getInvitee(), 'json', $context);
            $data['inviter'] = $this->normalizer->normalize($object->getInviter(), 'json', $context);
            $data['permissions'] = $object->getPermissions();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['url'] = $object->getUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['node_id'] = $object->getNodeId();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\RepositoryInvitationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\RepositoryInvitation' => false];
        }
    }
}