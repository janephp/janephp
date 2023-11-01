<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ShareBasicCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareBasicCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareBasicCreateRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\ShareBasicCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
                $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expirationDate']));
                unset($data['expirationDate']);
            }
            elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
                $object->setExpirationDate(null);
            }
            if (\array_key_exists('contents', $data)) {
                $values = [];
                foreach ($data['contents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\ShareContent', 'json', $context);
                }
                $object->setContents($values);
                unset($data['contents']);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['layerSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLayerSchemaIds($values_1);
                unset($data['layerSchemaIds']);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('outputAccess', $data)) {
                $object->setOutputAccess($data['outputAccess']);
                unset($data['outputAccess']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('recipientEmails', $data) && $data['recipientEmails'] !== null) {
                $values_2 = [];
                foreach ($data['recipientEmails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\UserEmail', 'json', $context);
                }
                $object->setRecipientEmails($values_2);
                unset($data['recipientEmails']);
            }
            elseif (\array_key_exists('recipientEmails', $data) && $data['recipientEmails'] === null) {
                $object->setRecipientEmails(null);
            }
            if (\array_key_exists('languageCode', $data)) {
                $object->setLanguageCode($data['languageCode']);
                unset($data['languageCode']);
            }
            if (\array_key_exists('suppressNotifications', $data)) {
                $object->setSuppressNotifications($data['suppressNotifications']);
                unset($data['suppressNotifications']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expirationDate'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
            }
            $values = [];
            foreach ($object->getContents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['contents'] = $values;
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_1 = [];
                foreach ($object->getLayerSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['layerSchemaIds'] = $values_1;
            }
            $data['outputAccess'] = $object->getOutputAccess();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('recipientEmails') && null !== $object->getRecipientEmails()) {
                $values_2 = [];
                foreach ($object->getRecipientEmails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['recipientEmails'] = $values_2;
            }
            $data['languageCode'] = $object->getLanguageCode();
            if ($object->isInitialized('suppressNotifications') && null !== $object->getSuppressNotifications()) {
                $data['suppressNotifications'] = $object->getSuppressNotifications();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareBasicCreateRequest' => false];
        }
    }
} else {
    class ShareBasicCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'PicturePark\\API\\Model\\ShareBasicCreateRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ShareBasicCreateRequest';
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
            $object = new \PicturePark\API\Model\ShareBasicCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
                $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['expirationDate']));
                unset($data['expirationDate']);
            }
            elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
                $object->setExpirationDate(null);
            }
            if (\array_key_exists('contents', $data)) {
                $values = [];
                foreach ($data['contents'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\ShareContent', 'json', $context);
                }
                $object->setContents($values);
                unset($data['contents']);
            }
            if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['layerSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLayerSchemaIds($values_1);
                unset($data['layerSchemaIds']);
            }
            elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
                $object->setLayerSchemaIds(null);
            }
            if (\array_key_exists('outputAccess', $data)) {
                $object->setOutputAccess($data['outputAccess']);
                unset($data['outputAccess']);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('recipientEmails', $data) && $data['recipientEmails'] !== null) {
                $values_2 = [];
                foreach ($data['recipientEmails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'PicturePark\\API\\Model\\UserEmail', 'json', $context);
                }
                $object->setRecipientEmails($values_2);
                unset($data['recipientEmails']);
            }
            elseif (\array_key_exists('recipientEmails', $data) && $data['recipientEmails'] === null) {
                $object->setRecipientEmails(null);
            }
            if (\array_key_exists('languageCode', $data)) {
                $object->setLanguageCode($data['languageCode']);
                unset($data['languageCode']);
            }
            if (\array_key_exists('suppressNotifications', $data)) {
                $object->setSuppressNotifications($data['suppressNotifications']);
                unset($data['suppressNotifications']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            $data['name'] = $object->getName();
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expirationDate'] = $object->getExpirationDate()->format('Y-m-d\\TH:i:sP');
            }
            $values = [];
            foreach ($object->getContents() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['contents'] = $values;
            if ($object->isInitialized('layerSchemaIds') && null !== $object->getLayerSchemaIds()) {
                $values_1 = [];
                foreach ($object->getLayerSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['layerSchemaIds'] = $values_1;
            }
            $data['outputAccess'] = $object->getOutputAccess();
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('recipientEmails') && null !== $object->getRecipientEmails()) {
                $values_2 = [];
                foreach ($object->getRecipientEmails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['recipientEmails'] = $values_2;
            }
            $data['languageCode'] = $object->getLanguageCode();
            if ($object->isInitialized('suppressNotifications') && null !== $object->getSuppressNotifications()) {
                $data['suppressNotifications'] = $object->getSuppressNotifications();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['PicturePark\\API\\Model\\ShareBasicCreateRequest' => false];
        }
    }
}