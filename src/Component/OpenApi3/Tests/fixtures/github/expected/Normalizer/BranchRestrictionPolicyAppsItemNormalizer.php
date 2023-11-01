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
    class BranchRestrictionPolicyAppsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchRestrictionPolicyAppsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchRestrictionPolicyAppsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\BranchRestrictionPolicyAppsItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('owner', $data)) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\BranchRestrictionPolicyAppsItemOwner', 'json', $context));
                unset($data['owner']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('external_url', $data)) {
                $object->setExternalUrl($data['external_url']);
                unset($data['external_url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt($data['updated_at']);
                unset($data['updated_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\BranchRestrictionPolicyAppsItemPermissions', 'json', $context));
                unset($data['permissions']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('slug') && null !== $object->getSlug()) {
                $data['slug'] = $object->getSlug();
            }
            if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
                $data['node_id'] = $object->getNodeId();
            }
            if ($object->isInitialized('owner') && null !== $object->getOwner()) {
                $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('externalUrl') && null !== $object->getExternalUrl()) {
                $data['external_url'] = $object->getExternalUrl();
            }
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            if ($object->isInitialized('events') && null !== $object->getEvents()) {
                $values = [];
                foreach ($object->getEvents() as $value) {
                    $values[] = $value;
                }
                $data['events'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchRestrictionPolicyAppsItem' => false];
        }
    }
} else {
    class BranchRestrictionPolicyAppsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\BranchRestrictionPolicyAppsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\BranchRestrictionPolicyAppsItem';
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
            $object = new \Github\Model\BranchRestrictionPolicyAppsItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('owner', $data)) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\BranchRestrictionPolicyAppsItemOwner', 'json', $context));
                unset($data['owner']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('external_url', $data)) {
                $object->setExternalUrl($data['external_url']);
                unset($data['external_url']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt($data['updated_at']);
                unset($data['updated_at']);
            }
            if (\array_key_exists('permissions', $data)) {
                $object->setPermissions($this->denormalizer->denormalize($data['permissions'], 'Github\\Model\\BranchRestrictionPolicyAppsItemPermissions', 'json', $context));
                unset($data['permissions']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('slug') && null !== $object->getSlug()) {
                $data['slug'] = $object->getSlug();
            }
            if ($object->isInitialized('nodeId') && null !== $object->getNodeId()) {
                $data['node_id'] = $object->getNodeId();
            }
            if ($object->isInitialized('owner') && null !== $object->getOwner()) {
                $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('externalUrl') && null !== $object->getExternalUrl()) {
                $data['external_url'] = $object->getExternalUrl();
            }
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt();
            }
            if ($object->isInitialized('permissions') && null !== $object->getPermissions()) {
                $data['permissions'] = $this->normalizer->normalize($object->getPermissions(), 'json', $context);
            }
            if ($object->isInitialized('events') && null !== $object->getEvents()) {
                $values = [];
                foreach ($object->getEvents() as $value) {
                    $values[] = $value;
                }
                $data['events'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\BranchRestrictionPolicyAppsItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\BranchRestrictionPolicyAppsItem' => false];
        }
    }
}