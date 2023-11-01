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
    class ReposOwnerRepoGitCommitsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoGitCommitsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoGitCommitsPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoGitCommitsPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoGitCommitsPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('tree', $data)) {
                $object->setTree($data['tree']);
                unset($data['tree']);
            }
            if (\array_key_exists('parents', $data)) {
                $values = [];
                foreach ($data['parents'] as $value) {
                    $values[] = $value;
                }
                $object->setParents($values);
                unset($data['parents']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\ReposOwnerRepoGitCommitsPostBodyAuthor', 'json', $context));
                unset($data['author']);
            }
            if (\array_key_exists('committer', $data)) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\ReposOwnerRepoGitCommitsPostBodyCommitter', 'json', $context));
                unset($data['committer']);
            }
            if (\array_key_exists('signature', $data)) {
                $object->setSignature($data['signature']);
                unset($data['signature']);
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
            $data['message'] = $object->getMessage();
            $data['tree'] = $object->getTree();
            if ($object->isInitialized('parents') && null !== $object->getParents()) {
                $values = [];
                foreach ($object->getParents() as $value) {
                    $values[] = $value;
                }
                $data['parents'] = $values;
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            }
            if ($object->isInitialized('committer') && null !== $object->getCommitter()) {
                $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            }
            if ($object->isInitialized('signature') && null !== $object->getSignature()) {
                $data['signature'] = $object->getSignature();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoGitCommitsPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoGitCommitsPostBody' => false];
        }
    }
} else {
    class ReposOwnerRepoGitCommitsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoGitCommitsPostBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoGitCommitsPostBody';
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
            $object = new \Github\Model\ReposOwnerRepoGitCommitsPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoGitCommitsPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('tree', $data)) {
                $object->setTree($data['tree']);
                unset($data['tree']);
            }
            if (\array_key_exists('parents', $data)) {
                $values = [];
                foreach ($data['parents'] as $value) {
                    $values[] = $value;
                }
                $object->setParents($values);
                unset($data['parents']);
            }
            if (\array_key_exists('author', $data)) {
                $object->setAuthor($this->denormalizer->denormalize($data['author'], 'Github\\Model\\ReposOwnerRepoGitCommitsPostBodyAuthor', 'json', $context));
                unset($data['author']);
            }
            if (\array_key_exists('committer', $data)) {
                $object->setCommitter($this->denormalizer->denormalize($data['committer'], 'Github\\Model\\ReposOwnerRepoGitCommitsPostBodyCommitter', 'json', $context));
                unset($data['committer']);
            }
            if (\array_key_exists('signature', $data)) {
                $object->setSignature($data['signature']);
                unset($data['signature']);
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
            $data['message'] = $object->getMessage();
            $data['tree'] = $object->getTree();
            if ($object->isInitialized('parents') && null !== $object->getParents()) {
                $values = [];
                foreach ($object->getParents() as $value) {
                    $values[] = $value;
                }
                $data['parents'] = $values;
            }
            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $this->normalizer->normalize($object->getAuthor(), 'json', $context);
            }
            if ($object->isInitialized('committer') && null !== $object->getCommitter()) {
                $data['committer'] = $this->normalizer->normalize($object->getCommitter(), 'json', $context);
            }
            if ($object->isInitialized('signature') && null !== $object->getSignature()) {
                $data['signature'] = $object->getSignature();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoGitCommitsPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoGitCommitsPostBody' => false];
        }
    }
}