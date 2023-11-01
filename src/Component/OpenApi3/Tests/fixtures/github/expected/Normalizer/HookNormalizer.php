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
    class HookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\Hook';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\Hook';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\Hook();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\HookConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
                unset($data['active']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['config'], 'Github\\Model\\HookConfig', 'json', $context));
                unset($data['config']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('test_url', $data)) {
                $object->setTestUrl($data['test_url']);
                unset($data['test_url']);
            }
            if (\array_key_exists('ping_url', $data)) {
                $object->setPingUrl($data['ping_url']);
                unset($data['ping_url']);
            }
            if (\array_key_exists('last_response', $data)) {
                $object->setLastResponse($this->denormalizer->denormalize($data['last_response'], 'Github\\Model\\HookResponse', 'json', $context));
                unset($data['last_response']);
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
            $data['type'] = $object->getType();
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['active'] = $object->getActive();
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['url'] = $object->getUrl();
            $data['test_url'] = $object->getTestUrl();
            $data['ping_url'] = $object->getPingUrl();
            $data['last_response'] = $this->normalizer->normalize($object->getLastResponse(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\HookConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\Hook' => false];
        }
    }
} else {
    class HookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\Hook';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\Hook';
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
            $object = new \Github\Model\Hook();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\HookConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
                unset($data['active']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['config'], 'Github\\Model\\HookConfig', 'json', $context));
                unset($data['config']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('test_url', $data)) {
                $object->setTestUrl($data['test_url']);
                unset($data['test_url']);
            }
            if (\array_key_exists('ping_url', $data)) {
                $object->setPingUrl($data['ping_url']);
                unset($data['ping_url']);
            }
            if (\array_key_exists('last_response', $data)) {
                $object->setLastResponse($this->denormalizer->denormalize($data['last_response'], 'Github\\Model\\HookResponse', 'json', $context));
                unset($data['last_response']);
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
            $data['type'] = $object->getType();
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            $data['active'] = $object->getActive();
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
            $data['url'] = $object->getUrl();
            $data['test_url'] = $object->getTestUrl();
            $data['ping_url'] = $object->getPingUrl();
            $data['last_response'] = $this->normalizer->normalize($object->getLastResponse(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\HookConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\Hook' => false];
        }
    }
}