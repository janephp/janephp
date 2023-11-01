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
    class LabelSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\LabelSearchResultItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\LabelSearchResultItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\LabelSearchResultItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LabelSearchResultItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('color', $data)) {
                $object->setColor($data['color']);
                unset($data['color']);
            }
            if (\array_key_exists('default', $data)) {
                $object->setDefault($data['default']);
                unset($data['default']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('score', $data)) {
                $object->setScore($data['score']);
                unset($data['score']);
            }
            if (\array_key_exists('text_matches', $data)) {
                $values = [];
                foreach ($data['text_matches'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
                }
                $object->setTextMatches($values);
                unset($data['text_matches']);
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
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['url'] = $object->getUrl();
            $data['name'] = $object->getName();
            $data['color'] = $object->getColor();
            $data['default'] = $object->getDefault();
            $data['description'] = $object->getDescription();
            $data['score'] = $object->getScore();
            if ($object->isInitialized('textMatches') && null !== $object->getTextMatches()) {
                $values = [];
                foreach ($object->getTextMatches() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['text_matches'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LabelSearchResultItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\LabelSearchResultItem' => false];
        }
    }
} else {
    class LabelSearchResultItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\LabelSearchResultItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\LabelSearchResultItem';
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
            $object = new \Github\Model\LabelSearchResultItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LabelSearchResultItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('node_id', $data)) {
                $object->setNodeId($data['node_id']);
                unset($data['node_id']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('color', $data)) {
                $object->setColor($data['color']);
                unset($data['color']);
            }
            if (\array_key_exists('default', $data)) {
                $object->setDefault($data['default']);
                unset($data['default']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('score', $data)) {
                $object->setScore($data['score']);
                unset($data['score']);
            }
            if (\array_key_exists('text_matches', $data)) {
                $values = [];
                foreach ($data['text_matches'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\SearchResultTextMatchesItem', 'json', $context);
                }
                $object->setTextMatches($values);
                unset($data['text_matches']);
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
            $data['id'] = $object->getId();
            $data['node_id'] = $object->getNodeId();
            $data['url'] = $object->getUrl();
            $data['name'] = $object->getName();
            $data['color'] = $object->getColor();
            $data['default'] = $object->getDefault();
            $data['description'] = $object->getDescription();
            $data['score'] = $object->getScore();
            if ($object->isInitialized('textMatches') && null !== $object->getTextMatches()) {
                $values = [];
                foreach ($object->getTextMatches() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['text_matches'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\LabelSearchResultItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\LabelSearchResultItem' => false];
        }
    }
}