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
            $object->name = $data['name'];
            unset($data['name']);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->description = $data['description'];
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->description = null;
            unset($data['description']);
        }
        if (\array_key_exists('expirationDate', $data) && $data['expirationDate'] !== null) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['expirationDate']);
            if (false === $date) {
                throw new \PicturePark\API\Runtime\Normalizer\InvalidDateException($data['expirationDate'], 'Y-m-d\TH:i:sP');
            }
            $object->expirationDate = $date;
            unset($data['expirationDate']);
        }
        elseif (\array_key_exists('expirationDate', $data) && $data['expirationDate'] === null) {
            $object->expirationDate = null;
            unset($data['expirationDate']);
        }
        if (\array_key_exists('contents', $data)) {
            $values = [];
            foreach ($data['contents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\ShareContent::class, 'json', $context);
            }
            $object->contents = $values;
            unset($data['contents']);
        }
        if (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] !== null) {
            $values_1 = [];
            foreach ($data['layerSchemaIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->layerSchemaIds = $values_1;
            unset($data['layerSchemaIds']);
        }
        elseif (\array_key_exists('layerSchemaIds', $data) && $data['layerSchemaIds'] === null) {
            $object->layerSchemaIds = null;
            unset($data['layerSchemaIds']);
        }
        if (\array_key_exists('outputAccess', $data)) {
            $value_2 = $data['outputAccess'];
            if (is_string($data['outputAccess'])) {
                $value_2 = $data['outputAccess'];
            }
            $object->outputAccess = $value_2;
            unset($data['outputAccess']);
        }
        if (\array_key_exists('kind', $data)) {
            $object->kind = $data['kind'];
            unset($data['kind']);
        }
        if (\array_key_exists('recipientEmails', $data) && $data['recipientEmails'] !== null) {
            $values_2 = [];
            foreach ($data['recipientEmails'] as $value_3) {
                $values_2[] = $this->denormalizer->denormalize($value_3, \PicturePark\API\Model\UserEmail::class, 'json', $context);
            }
            $object->recipientEmails = $values_2;
            unset($data['recipientEmails']);
        }
        elseif (\array_key_exists('recipientEmails', $data) && $data['recipientEmails'] === null) {
            $object->recipientEmails = null;
            unset($data['recipientEmails']);
        }
        if (\array_key_exists('languageCode', $data)) {
            $object->languageCode = $data['languageCode'];
            unset($data['languageCode']);
        }
        if (\array_key_exists('suppressNotifications', $data)) {
            $object->suppressNotifications = $data['suppressNotifications'];
            unset($data['suppressNotifications']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->name ?? null;
        if (array_key_exists('description', get_object_vars($data)) && null !== ($data->description ?? null)) {
            $dataArray['description'] = $data->description ?? null;
        }
        if (array_key_exists('expirationDate', get_object_vars($data)) && null !== ($data->expirationDate ?? null)) {
            $dataArray['expirationDate'] = ($data->expirationDate ?? null)?->format('Y-m-d\TH:i:sP');
        }
        $values = [];
        foreach ($data->contents ?? null as $value) {
            $values[] = $value === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['contents'] = $values;
        if (array_key_exists('layerSchemaIds', get_object_vars($data)) && null !== ($data->layerSchemaIds ?? null)) {
            $values_1 = [];
            foreach ($data->layerSchemaIds ?? null as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['layerSchemaIds'] = $values_1;
        }
        $value_2 = $data->outputAccess ?? null;
        if (is_string($data->outputAccess ?? null)) {
            $value_2 = $data->outputAccess ?? null;
        }
        $dataArray['outputAccess'] = $value_2;
        $dataArray['kind'] = $data->kind ?? null;
        if (array_key_exists('recipientEmails', get_object_vars($data)) && null !== ($data->recipientEmails ?? null)) {
            $values_2 = [];
            foreach ($data->recipientEmails ?? null as $value_3) {
                $values_2[] = $value_3 === null ? null : new \PicturePark\API\Runtime\JsonObject($this->normalizer->normalize($value_3, 'json', $context));
            }
            $dataArray['recipientEmails'] = $values_2;
        }
        $dataArray['languageCode'] = $data->languageCode ?? null;
        if (array_key_exists('suppressNotifications', get_object_vars($data)) && null !== ($data->suppressNotifications ?? null)) {
            $dataArray['suppressNotifications'] = $data->suppressNotifications ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_4;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\PicturePark\API\Model\ShareBasicCreateRequest::class => false];
    }
}