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
    class IssueEventDismissedReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssueEventDismissedReview';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssueEventDismissedReview';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\IssueEventDismissedReview();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueEventDismissedReviewConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('review_id', $data)) {
                $object->setReviewId($data['review_id']);
                unset($data['review_id']);
            }
            if (\array_key_exists('dismissal_message', $data) && $data['dismissal_message'] !== null) {
                $object->setDismissalMessage($data['dismissal_message']);
                unset($data['dismissal_message']);
            }
            elseif (\array_key_exists('dismissal_message', $data) && $data['dismissal_message'] === null) {
                $object->setDismissalMessage(null);
            }
            if (\array_key_exists('dismissal_commit_id', $data) && $data['dismissal_commit_id'] !== null) {
                $object->setDismissalCommitId($data['dismissal_commit_id']);
                unset($data['dismissal_commit_id']);
            }
            elseif (\array_key_exists('dismissal_commit_id', $data) && $data['dismissal_commit_id'] === null) {
                $object->setDismissalCommitId(null);
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
            $data['state'] = $object->getState();
            $data['review_id'] = $object->getReviewId();
            $data['dismissal_message'] = $object->getDismissalMessage();
            if ($object->isInitialized('dismissalCommitId') && null !== $object->getDismissalCommitId()) {
                $data['dismissal_commit_id'] = $object->getDismissalCommitId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueEventDismissedReviewConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssueEventDismissedReview' => false];
        }
    }
} else {
    class IssueEventDismissedReviewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssueEventDismissedReview';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssueEventDismissedReview';
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
            $object = new \Github\Model\IssueEventDismissedReview();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueEventDismissedReviewConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('review_id', $data)) {
                $object->setReviewId($data['review_id']);
                unset($data['review_id']);
            }
            if (\array_key_exists('dismissal_message', $data) && $data['dismissal_message'] !== null) {
                $object->setDismissalMessage($data['dismissal_message']);
                unset($data['dismissal_message']);
            }
            elseif (\array_key_exists('dismissal_message', $data) && $data['dismissal_message'] === null) {
                $object->setDismissalMessage(null);
            }
            if (\array_key_exists('dismissal_commit_id', $data) && $data['dismissal_commit_id'] !== null) {
                $object->setDismissalCommitId($data['dismissal_commit_id']);
                unset($data['dismissal_commit_id']);
            }
            elseif (\array_key_exists('dismissal_commit_id', $data) && $data['dismissal_commit_id'] === null) {
                $object->setDismissalCommitId(null);
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
            $data['state'] = $object->getState();
            $data['review_id'] = $object->getReviewId();
            $data['dismissal_message'] = $object->getDismissalMessage();
            if ($object->isInitialized('dismissalCommitId') && null !== $object->getDismissalCommitId()) {
                $data['dismissal_commit_id'] = $object->getDismissalCommitId();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueEventDismissedReviewConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssueEventDismissedReview' => false];
        }
    }
}