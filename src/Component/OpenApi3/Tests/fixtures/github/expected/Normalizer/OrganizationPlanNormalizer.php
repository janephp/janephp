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
    class OrganizationPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\OrganizationPlan';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationPlan';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\OrganizationPlan();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationPlanConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('space', $data)) {
                $object->setSpace($data['space']);
                unset($data['space']);
            }
            if (\array_key_exists('private_repos', $data)) {
                $object->setPrivateRepos($data['private_repos']);
                unset($data['private_repos']);
            }
            if (\array_key_exists('filled_seats', $data)) {
                $object->setFilledSeats($data['filled_seats']);
                unset($data['filled_seats']);
            }
            if (\array_key_exists('seats', $data)) {
                $object->setSeats($data['seats']);
                unset($data['seats']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('space') && null !== $object->getSpace()) {
                $data['space'] = $object->getSpace();
            }
            if ($object->isInitialized('privateRepos') && null !== $object->getPrivateRepos()) {
                $data['private_repos'] = $object->getPrivateRepos();
            }
            if ($object->isInitialized('filledSeats') && null !== $object->getFilledSeats()) {
                $data['filled_seats'] = $object->getFilledSeats();
            }
            if ($object->isInitialized('seats') && null !== $object->getSeats()) {
                $data['seats'] = $object->getSeats();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationPlanConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\OrganizationPlan' => false];
        }
    }
} else {
    class OrganizationPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\OrganizationPlan';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\OrganizationPlan';
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
            $object = new \Github\Model\OrganizationPlan();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationPlanConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('space', $data)) {
                $object->setSpace($data['space']);
                unset($data['space']);
            }
            if (\array_key_exists('private_repos', $data)) {
                $object->setPrivateRepos($data['private_repos']);
                unset($data['private_repos']);
            }
            if (\array_key_exists('filled_seats', $data)) {
                $object->setFilledSeats($data['filled_seats']);
                unset($data['filled_seats']);
            }
            if (\array_key_exists('seats', $data)) {
                $object->setSeats($data['seats']);
                unset($data['seats']);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('space') && null !== $object->getSpace()) {
                $data['space'] = $object->getSpace();
            }
            if ($object->isInitialized('privateRepos') && null !== $object->getPrivateRepos()) {
                $data['private_repos'] = $object->getPrivateRepos();
            }
            if ($object->isInitialized('filledSeats') && null !== $object->getFilledSeats()) {
                $data['filled_seats'] = $object->getFilledSeats();
            }
            if ($object->isInitialized('seats') && null !== $object->getSeats()) {
                $data['seats'] = $object->getSeats();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrganizationPlanConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\OrganizationPlan' => false];
        }
    }
}