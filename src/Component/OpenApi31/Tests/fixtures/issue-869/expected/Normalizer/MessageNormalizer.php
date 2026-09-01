<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue869\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi31\Tests\Expected\Issue869\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi31\Tests\Expected\Issue869\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MessageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi31\Tests\Expected\Issue869\Model\Message::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi31\Tests\Expected\Issue869\Model\Message::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi31\Tests\Expected\Issue869\Model\Message();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Jane\Component\OpenApi31\Tests\Expected\Issue869\Validator\MessageConstraint());
        }
        if (\array_key_exists('subject', $data)) {
            $object->subject = $data['subject'];
            unset($data['subject']);
        }
        if (\array_key_exists('body', $data) && $data['body'] !== null) {
            $value = $data['body'];
            if (is_string($data['body'])) {
                $value = $data['body'];
            } elseif (is_null($data['body'])) {
                $value = $data['body'];
            }
            $object->body = $value;
            unset($data['body']);
        }
        elseif (\array_key_exists('body', $data) && $data['body'] === null) {
            $object->body = null;
            unset($data['body']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('subject', get_object_vars($data)) && null !== ($data->subject ?? null)) {
            $dataArray['subject'] = $data->subject ?? null;
        }
        if (array_key_exists('body', get_object_vars($data)) && null !== ($data->body ?? null)) {
            $value = $data->body ?? null;
            if (is_string($data->body ?? null)) {
                $value = $data->body ?? null;
            } elseif (is_null($data->body ?? null)) {
                $value = $data->body ?? null;
            }
            $dataArray['body'] = $value;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($dataArray, new \Jane\Component\OpenApi31\Tests\Expected\Issue869\Validator\MessageConstraint());
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi31\Tests\Expected\Issue869\Model\Message::class => false];
    }
}