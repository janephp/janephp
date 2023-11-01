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
    class GitTagNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\GitTag';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\GitTag';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\GitTag();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GitTagConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('tag', $data)) {
                $object->setTag($data['tag']);
                unset($data['tag']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('tagger', $data)) {
                $object->setTagger($this->denormalizer->denormalize($data['tagger'], 'Github\\Model\\GitTagTagger', 'json', $context));
                unset($data['tagger']);
            }
            if (\array_key_exists('object', $data)) {
                $object->setObject($this->denormalizer->denormalize($data['object'], 'Github\\Model\\GitTagObject', 'json', $context));
                unset($data['object']);
            }
            if (\array_key_exists('verification', $data)) {
                $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\Verification', 'json', $context));
                unset($data['verification']);
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
            $data['node_id'] = $object->getNodeId();
            $data['tag'] = $object->getTag();
            $data['sha'] = $object->getSha();
            $data['url'] = $object->getUrl();
            $data['message'] = $object->getMessage();
            $data['tagger'] = $this->normalizer->normalize($object->getTagger(), 'json', $context);
            $data['object'] = $this->normalizer->normalize($object->getObject(), 'json', $context);
            if ($object->isInitialized('verification') && null !== $object->getVerification()) {
                $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GitTagConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\GitTag' => false];
        }
    }
} else {
    class GitTagNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\GitTag';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\GitTag';
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
            $object = new \Github\Model\GitTag();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GitTagConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('tag', $data)) {
                $object->setTag($data['tag']);
                unset($data['tag']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            if (\array_key_exists('tagger', $data)) {
                $object->setTagger($this->denormalizer->denormalize($data['tagger'], 'Github\\Model\\GitTagTagger', 'json', $context));
                unset($data['tagger']);
            }
            if (\array_key_exists('object', $data)) {
                $object->setObject($this->denormalizer->denormalize($data['object'], 'Github\\Model\\GitTagObject', 'json', $context));
                unset($data['object']);
            }
            if (\array_key_exists('verification', $data)) {
                $object->setVerification($this->denormalizer->denormalize($data['verification'], 'Github\\Model\\Verification', 'json', $context));
                unset($data['verification']);
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
            $data['node_id'] = $object->getNodeId();
            $data['tag'] = $object->getTag();
            $data['sha'] = $object->getSha();
            $data['url'] = $object->getUrl();
            $data['message'] = $object->getMessage();
            $data['tagger'] = $this->normalizer->normalize($object->getTagger(), 'json', $context);
            $data['object'] = $this->normalizer->normalize($object->getObject(), 'json', $context);
            if ($object->isInitialized('verification') && null !== $object->getVerification()) {
                $data['verification'] = $this->normalizer->normalize($object->getVerification(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GitTagConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\GitTag' => false];
        }
    }
}