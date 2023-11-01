<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure();
            if (\array_key_exists('value', $data) && \is_int($data['value'])) {
                $data['value'] = (double) $data['value'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
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
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure' => false];
        }
    }
} else {
    class GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure';
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
            $object = new \CreditSafe\API\Model\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure();
            if (\array_key_exists('value', $data) && \is_int($data['value'])) {
                $data['value'] = (double) $data['value'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
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
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['CreditSafe\\API\\Model\\GbPeopleReportReponseReportDirectorshipsPreviousItemLatestTurnoverFigure' => false];
        }
    }
}