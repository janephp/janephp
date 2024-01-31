<?php

namespace ApiPlatform\Demo\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ApiPlatform\Demo\Runtime\Normalizer\CheckArray;
use ApiPlatform\Demo\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ParchmentsGetLdjsonResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraSearch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('@type', $data)) {
                $object->setType($data['@type']);
                unset($data['@type']);
            }
            if (\array_key_exists('hydra:template', $data)) {
                $object->setHydraTemplate($data['hydra:template']);
                unset($data['hydra:template']);
            }
            if (\array_key_exists('hydra:variableRepresentation', $data)) {
                $object->setHydraVariableRepresentation($data['hydra:variableRepresentation']);
                unset($data['hydra:variableRepresentation']);
            }
            if (\array_key_exists('hydra:mapping', $data)) {
                $values = [];
                foreach ($data['hydra:mapping'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem', 'json', $context);
                }
                $object->setHydraMapping($values);
                unset($data['hydra:mapping']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['@type'] = $object->getType();
            }
            if ($object->isInitialized('hydraTemplate') && null !== $object->getHydraTemplate()) {
                $data['hydra:template'] = $object->getHydraTemplate();
            }
            if ($object->isInitialized('hydraVariableRepresentation') && null !== $object->getHydraVariableRepresentation()) {
                $data['hydra:variableRepresentation'] = $object->getHydraVariableRepresentation();
            }
            if ($object->isInitialized('hydraMapping') && null !== $object->getHydraMapping()) {
                $values = [];
                foreach ($object->getHydraMapping() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['hydra:mapping'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch' => false];
        }
    }
} else {
    class ParchmentsGetLdjsonResponse200HydraSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch';
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
            $object = new \ApiPlatform\Demo\Model\ParchmentsGetLdjsonResponse200HydraSearch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('@type', $data)) {
                $object->setType($data['@type']);
                unset($data['@type']);
            }
            if (\array_key_exists('hydra:template', $data)) {
                $object->setHydraTemplate($data['hydra:template']);
                unset($data['hydra:template']);
            }
            if (\array_key_exists('hydra:variableRepresentation', $data)) {
                $object->setHydraVariableRepresentation($data['hydra:variableRepresentation']);
                unset($data['hydra:variableRepresentation']);
            }
            if (\array_key_exists('hydra:mapping', $data)) {
                $values = [];
                foreach ($data['hydra:mapping'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearchHydraMappingItem', 'json', $context);
                }
                $object->setHydraMapping($values);
                unset($data['hydra:mapping']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['@type'] = $object->getType();
            }
            if ($object->isInitialized('hydraTemplate') && null !== $object->getHydraTemplate()) {
                $data['hydra:template'] = $object->getHydraTemplate();
            }
            if ($object->isInitialized('hydraVariableRepresentation') && null !== $object->getHydraVariableRepresentation()) {
                $data['hydra:variableRepresentation'] = $object->getHydraVariableRepresentation();
            }
            if ($object->isInitialized('hydraMapping') && null !== $object->getHydraMapping()) {
                $values = [];
                foreach ($object->getHydraMapping() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['hydra:mapping'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ApiPlatform\\Demo\\Model\\ParchmentsGetLdjsonResponse200HydraSearch' => false];
        }
    }
}