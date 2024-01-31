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
    class IssueSimplePullRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssueSimplePullRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssueSimplePullRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\IssueSimplePullRequest();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSimplePullRequestConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
                $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['merged_at']));
                unset($data['merged_at']);
            }
            elseif (\array_key_exists('merged_at', $data) && $data['merged_at'] === null) {
                $object->setMergedAt(null);
            }
            if (\array_key_exists('diff_url', $data) && $data['diff_url'] !== null) {
                $object->setDiffUrl($data['diff_url']);
                unset($data['diff_url']);
            }
            elseif (\array_key_exists('diff_url', $data) && $data['diff_url'] === null) {
                $object->setDiffUrl(null);
            }
            if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
                $object->setHtmlUrl(null);
            }
            if (\array_key_exists('patch_url', $data) && $data['patch_url'] !== null) {
                $object->setPatchUrl($data['patch_url']);
                unset($data['patch_url']);
            }
            elseif (\array_key_exists('patch_url', $data) && $data['patch_url'] === null) {
                $object->setPatchUrl(null);
            }
            if (\array_key_exists('url', $data) && $data['url'] !== null) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            elseif (\array_key_exists('url', $data) && $data['url'] === null) {
                $object->setUrl(null);
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
            if ($object->isInitialized('mergedAt') && null !== $object->getMergedAt()) {
                $data['merged_at'] = $object->getMergedAt()->format('Y-m-d\\TH:i:sP');
            }
            $data['diff_url'] = $object->getDiffUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['patch_url'] = $object->getPatchUrl();
            $data['url'] = $object->getUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSimplePullRequestConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssueSimplePullRequest' => false];
        }
    }
} else {
    class IssueSimplePullRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\IssueSimplePullRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\IssueSimplePullRequest';
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
            $object = new \Github\Model\IssueSimplePullRequest();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSimplePullRequestConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('merged_at', $data) && $data['merged_at'] !== null) {
                $object->setMergedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['merged_at']));
                unset($data['merged_at']);
            }
            elseif (\array_key_exists('merged_at', $data) && $data['merged_at'] === null) {
                $object->setMergedAt(null);
            }
            if (\array_key_exists('diff_url', $data) && $data['diff_url'] !== null) {
                $object->setDiffUrl($data['diff_url']);
                unset($data['diff_url']);
            }
            elseif (\array_key_exists('diff_url', $data) && $data['diff_url'] === null) {
                $object->setDiffUrl(null);
            }
            if (\array_key_exists('html_url', $data) && $data['html_url'] !== null) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
            }
            elseif (\array_key_exists('html_url', $data) && $data['html_url'] === null) {
                $object->setHtmlUrl(null);
            }
            if (\array_key_exists('patch_url', $data) && $data['patch_url'] !== null) {
                $object->setPatchUrl($data['patch_url']);
                unset($data['patch_url']);
            }
            elseif (\array_key_exists('patch_url', $data) && $data['patch_url'] === null) {
                $object->setPatchUrl(null);
            }
            if (\array_key_exists('url', $data) && $data['url'] !== null) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            elseif (\array_key_exists('url', $data) && $data['url'] === null) {
                $object->setUrl(null);
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
            if ($object->isInitialized('mergedAt') && null !== $object->getMergedAt()) {
                $data['merged_at'] = $object->getMergedAt()->format('Y-m-d\\TH:i:sP');
            }
            $data['diff_url'] = $object->getDiffUrl();
            $data['html_url'] = $object->getHtmlUrl();
            $data['patch_url'] = $object->getPatchUrl();
            $data['url'] = $object->getUrl();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\IssueSimplePullRequestConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\IssueSimplePullRequest' => false];
        }
    }
}