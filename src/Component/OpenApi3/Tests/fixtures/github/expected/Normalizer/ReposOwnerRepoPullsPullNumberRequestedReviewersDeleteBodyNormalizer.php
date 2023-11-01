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
    class ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('reviewers', $data)) {
                $values = [];
                foreach ($data['reviewers'] as $value) {
                    $values[] = $value;
                }
                $object->setReviewers($values);
                unset($data['reviewers']);
            }
            if (\array_key_exists('team_reviewers', $data)) {
                $values_1 = [];
                foreach ($data['team_reviewers'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTeamReviewers($values_1);
                unset($data['team_reviewers']);
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
            if ($object->isInitialized('reviewers') && null !== $object->getReviewers()) {
                $values = [];
                foreach ($object->getReviewers() as $value) {
                    $values[] = $value;
                }
                $data['reviewers'] = $values;
            }
            if ($object->isInitialized('teamReviewers') && null !== $object->getTeamReviewers()) {
                $values_1 = [];
                foreach ($object->getTeamReviewers() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['team_reviewers'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody' => false];
        }
    }
} else {
    class ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody';
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
            $object = new \Github\Model\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('reviewers', $data)) {
                $values = [];
                foreach ($data['reviewers'] as $value) {
                    $values[] = $value;
                }
                $object->setReviewers($values);
                unset($data['reviewers']);
            }
            if (\array_key_exists('team_reviewers', $data)) {
                $values_1 = [];
                foreach ($data['team_reviewers'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setTeamReviewers($values_1);
                unset($data['team_reviewers']);
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
            if ($object->isInitialized('reviewers') && null !== $object->getReviewers()) {
                $values = [];
                foreach ($object->getReviewers() as $value) {
                    $values[] = $value;
                }
                $data['reviewers'] = $values;
            }
            if ($object->isInitialized('teamReviewers') && null !== $object->getTeamReviewers()) {
                $values_1 = [];
                foreach ($object->getTeamReviewers() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['team_reviewers'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody' => false];
        }
    }
}