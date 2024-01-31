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
    class TeamRepositoryPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\TeamRepositoryPermissions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\TeamRepositoryPermissions';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\TeamRepositoryPermissions();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamRepositoryPermissionsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin', $data)) {
                $object->setAdmin($data['admin']);
                unset($data['admin']);
            }
            if (\array_key_exists('pull', $data)) {
                $object->setPull($data['pull']);
                unset($data['pull']);
            }
            if (\array_key_exists('triage', $data)) {
                $object->setTriage($data['triage']);
                unset($data['triage']);
            }
            if (\array_key_exists('push', $data)) {
                $object->setPush($data['push']);
                unset($data['push']);
            }
            if (\array_key_exists('maintain', $data)) {
                $object->setMaintain($data['maintain']);
                unset($data['maintain']);
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
            $data['admin'] = $object->getAdmin();
            $data['pull'] = $object->getPull();
            if ($object->isInitialized('triage') && null !== $object->getTriage()) {
                $data['triage'] = $object->getTriage();
            }
            $data['push'] = $object->getPush();
            if ($object->isInitialized('maintain') && null !== $object->getMaintain()) {
                $data['maintain'] = $object->getMaintain();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamRepositoryPermissionsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\TeamRepositoryPermissions' => false];
        }
    }
} else {
    class TeamRepositoryPermissionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\TeamRepositoryPermissions';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\TeamRepositoryPermissions';
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
            $object = new \Github\Model\TeamRepositoryPermissions();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamRepositoryPermissionsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin', $data)) {
                $object->setAdmin($data['admin']);
                unset($data['admin']);
            }
            if (\array_key_exists('pull', $data)) {
                $object->setPull($data['pull']);
                unset($data['pull']);
            }
            if (\array_key_exists('triage', $data)) {
                $object->setTriage($data['triage']);
                unset($data['triage']);
            }
            if (\array_key_exists('push', $data)) {
                $object->setPush($data['push']);
                unset($data['push']);
            }
            if (\array_key_exists('maintain', $data)) {
                $object->setMaintain($data['maintain']);
                unset($data['maintain']);
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
            $data['admin'] = $object->getAdmin();
            $data['pull'] = $object->getPull();
            if ($object->isInitialized('triage') && null !== $object->getTriage()) {
                $data['triage'] = $object->getTriage();
            }
            $data['push'] = $object->getPush();
            if ($object->isInitialized('maintain') && null !== $object->getMaintain()) {
                $data['maintain'] = $object->getMaintain();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\TeamRepositoryPermissionsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\TeamRepositoryPermissions' => false];
        }
    }
}