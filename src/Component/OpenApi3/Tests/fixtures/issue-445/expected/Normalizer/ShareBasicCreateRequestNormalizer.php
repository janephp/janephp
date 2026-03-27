<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ShareBasicCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \PicturePark\API\Model\ShareBasicCreateRequest::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \PicturePark\API\Model\ShareBasicCreateRequest::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \PicturePark\API\Model\ShareBasicCreateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('suppressNotifications', $data) && \is_int($data['suppressNotifications'])) {
            $data['suppressNotifications'] = (bool) $data['suppressNotifications'];
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
            $object->setExpirationDate(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expirationDate']));
            unset($data['expirationDate']);
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('contents', $data)) {
            $values = [];
            foreach ($data['contents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\ShareContent::class, 'json', $context);
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
                $values_2[] = $this->denormalizer->denormalize($value_2, \PicturePark\API\Model\UserEmail::class, 'json', $context);
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
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description')) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('expirationDate')) {
            $dataArray['expirationDate'] = $data->getExpirationDate()?->format('Y-m-d\TH:i:sP');
        }
        $values = [];
        foreach ($data->getContents() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['contents'] = $values;
        if ($data->isInitialized('layerSchemaIds')) {
            $values_1 = [];
            foreach ($data->getLayerSchemaIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['layerSchemaIds'] = $values_1;
        }
        $dataArray['outputAccess'] = $data->getOutputAccess();
        $dataArray['kind'] = $data->getKind();
        if ($data->isInitialized('recipientEmails')) {
            $values_2 = [];
            foreach ($data->getRecipientEmails() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $dataArray['recipientEmails'] = $values_2;
        }
        $dataArray['languageCode'] = $data->getLanguageCode();
        if ($data->isInitialized('suppressNotifications') && null !== $data->getSuppressNotifications()) {
            $dataArray['suppressNotifications'] = $data->getSuppressNotifications();
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_3;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareBasicCreateRequest::class => false];
    }
}