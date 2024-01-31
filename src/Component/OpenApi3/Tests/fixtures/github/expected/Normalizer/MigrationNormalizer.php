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
    class MigrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\Migration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\Migration';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\Migration();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MigrationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\MigrationOwner', 'json', $context));
                unset($data['owner']);
            }
            elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
                $object->setOwner(null);
            }
            if (\array_key_exists('guid', $data)) {
                $object->setGuid($data['guid']);
                unset($data['guid']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('lock_repositories', $data)) {
                $object->setLockRepositories($data['lock_repositories']);
                unset($data['lock_repositories']);
            }
            if (\array_key_exists('exclude_attachments', $data)) {
                $object->setExcludeAttachments($data['exclude_attachments']);
                unset($data['exclude_attachments']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values = [];
                foreach ($data['repositories'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Repository', 'json', $context);
                }
                $object->setRepositories($values);
                unset($data['repositories']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('archive_url', $data)) {
                $object->setArchiveUrl($data['archive_url']);
                unset($data['archive_url']);
            }
            if (\array_key_exists('exclude', $data)) {
                $values_1 = [];
                foreach ($data['exclude'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setExclude($values_1);
                unset($data['exclude']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            $data['guid'] = $object->getGuid();
            $data['state'] = $object->getState();
            $data['lock_repositories'] = $object->getLockRepositories();
            $data['exclude_attachments'] = $object->getExcludeAttachments();
            $values = [];
            foreach ($object->getRepositories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['repositories'] = $values;
            $data['url'] = $object->getUrl();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['node_id'] = $object->getNodeId();
            if ($object->isInitialized('archiveUrl') && null !== $object->getArchiveUrl()) {
                $data['archive_url'] = $object->getArchiveUrl();
            }
            if ($object->isInitialized('exclude') && null !== $object->getExclude()) {
                $values_1 = [];
                foreach ($object->getExclude() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['exclude'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MigrationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\Migration' => false];
        }
    }
} else {
    class MigrationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\Migration';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\Migration';
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
            $object = new \Github\Model\Migration();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MigrationConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Github\\Model\\MigrationOwner', 'json', $context));
                unset($data['owner']);
            }
            elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
                $object->setOwner(null);
            }
            if (\array_key_exists('guid', $data)) {
                $object->setGuid($data['guid']);
                unset($data['guid']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('lock_repositories', $data)) {
                $object->setLockRepositories($data['lock_repositories']);
                unset($data['lock_repositories']);
            }
            if (\array_key_exists('exclude_attachments', $data)) {
                $object->setExcludeAttachments($data['exclude_attachments']);
                unset($data['exclude_attachments']);
            }
            if (\array_key_exists('repositories', $data)) {
                $values = [];
                foreach ($data['repositories'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\Repository', 'json', $context);
                }
                $object->setRepositories($values);
                unset($data['repositories']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('archive_url', $data)) {
                $object->setArchiveUrl($data['archive_url']);
                unset($data['archive_url']);
            }
            if (\array_key_exists('exclude', $data)) {
                $values_1 = [];
                foreach ($data['exclude'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setExclude($values_1);
                unset($data['exclude']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            $data['guid'] = $object->getGuid();
            $data['state'] = $object->getState();
            $data['lock_repositories'] = $object->getLockRepositories();
            $data['exclude_attachments'] = $object->getExcludeAttachments();
            $values = [];
            foreach ($object->getRepositories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['repositories'] = $values;
            $data['url'] = $object->getUrl();
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['node_id'] = $object->getNodeId();
            if ($object->isInitialized('archiveUrl') && null !== $object->getArchiveUrl()) {
                $data['archive_url'] = $object->getArchiveUrl();
            }
            if ($object->isInitialized('exclude') && null !== $object->getExclude()) {
                $values_1 = [];
                foreach ($object->getExclude() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['exclude'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\MigrationConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\Migration' => false];
        }
    }
}