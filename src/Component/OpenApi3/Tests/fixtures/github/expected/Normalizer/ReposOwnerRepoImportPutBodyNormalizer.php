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
    class ReposOwnerRepoImportPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoImportPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoImportPutBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoImportPutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoImportPutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('vcs_url', $data)) {
                $object->setVcsUrl($data['vcs_url']);
                unset($data['vcs_url']);
            }
            if (\array_key_exists('vcs', $data)) {
                $object->setVcs($data['vcs']);
                unset($data['vcs']);
            }
            if (\array_key_exists('vcs_username', $data)) {
                $object->setVcsUsername($data['vcs_username']);
                unset($data['vcs_username']);
            }
            if (\array_key_exists('vcs_password', $data)) {
                $object->setVcsPassword($data['vcs_password']);
                unset($data['vcs_password']);
            }
            if (\array_key_exists('tfvc_project', $data)) {
                $object->setTfvcProject($data['tfvc_project']);
                unset($data['tfvc_project']);
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
            $data['vcs_url'] = $object->getVcsUrl();
            if ($object->isInitialized('vcs') && null !== $object->getVcs()) {
                $data['vcs'] = $object->getVcs();
            }
            if ($object->isInitialized('vcsUsername') && null !== $object->getVcsUsername()) {
                $data['vcs_username'] = $object->getVcsUsername();
            }
            if ($object->isInitialized('vcsPassword') && null !== $object->getVcsPassword()) {
                $data['vcs_password'] = $object->getVcsPassword();
            }
            if ($object->isInitialized('tfvcProject') && null !== $object->getTfvcProject()) {
                $data['tfvc_project'] = $object->getTfvcProject();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoImportPutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoImportPutBody' => false];
        }
    }
} else {
    class ReposOwnerRepoImportPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoImportPutBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoImportPutBody';
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
            $object = new \Github\Model\ReposOwnerRepoImportPutBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoImportPutBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('vcs_url', $data)) {
                $object->setVcsUrl($data['vcs_url']);
                unset($data['vcs_url']);
            }
            if (\array_key_exists('vcs', $data)) {
                $object->setVcs($data['vcs']);
                unset($data['vcs']);
            }
            if (\array_key_exists('vcs_username', $data)) {
                $object->setVcsUsername($data['vcs_username']);
                unset($data['vcs_username']);
            }
            if (\array_key_exists('vcs_password', $data)) {
                $object->setVcsPassword($data['vcs_password']);
                unset($data['vcs_password']);
            }
            if (\array_key_exists('tfvc_project', $data)) {
                $object->setTfvcProject($data['tfvc_project']);
                unset($data['tfvc_project']);
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
            $data['vcs_url'] = $object->getVcsUrl();
            if ($object->isInitialized('vcs') && null !== $object->getVcs()) {
                $data['vcs'] = $object->getVcs();
            }
            if ($object->isInitialized('vcsUsername') && null !== $object->getVcsUsername()) {
                $data['vcs_username'] = $object->getVcsUsername();
            }
            if ($object->isInitialized('vcsPassword') && null !== $object->getVcsPassword()) {
                $data['vcs_password'] = $object->getVcsPassword();
            }
            if ($object->isInitialized('tfvcProject') && null !== $object->getTfvcProject()) {
                $data['tfvc_project'] = $object->getTfvcProject();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoImportPutBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoImportPutBody' => false];
        }
    }
}