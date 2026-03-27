<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class WlanschedulerCreateWlanSchedulerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerCreateWlanScheduler::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerCreateWlanScheduler::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerCreateWlanScheduler();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('sun', $data)) {
            $values = [];
            foreach ($data['sun'] as $value) {
                $values[] = $value;
            }
            $object->setSun($values);
        }
        if (\array_key_exists('mon', $data)) {
            $values_1 = [];
            foreach ($data['mon'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMon($values_1);
        }
        if (\array_key_exists('tue', $data)) {
            $values_2 = [];
            foreach ($data['tue'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTue($values_2);
        }
        if (\array_key_exists('wed', $data)) {
            $values_3 = [];
            foreach ($data['wed'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setWed($values_3);
        }
        if (\array_key_exists('thu', $data)) {
            $values_4 = [];
            foreach ($data['thu'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setThu($values_4);
        }
        if (\array_key_exists('fri', $data)) {
            $values_5 = [];
            foreach ($data['fri'] as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setFri($values_5);
        }
        if (\array_key_exists('sat', $data)) {
            $values_6 = [];
            foreach ($data['sat'] as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setSat($values_6);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('description') && null !== $data->getDescription()) {
            $dataArray['description'] = $data->getDescription();
        }
        if ($data->isInitialized('sun') && null !== $data->getSun()) {
            $values = [];
            foreach ($data->getSun() as $value) {
                $values[] = $value;
            }
            $dataArray['sun'] = $values;
        }
        if ($data->isInitialized('mon') && null !== $data->getMon()) {
            $values_1 = [];
            foreach ($data->getMon() as $value_1) {
                $values_1[] = $value_1;
            }
            $dataArray['mon'] = $values_1;
        }
        if ($data->isInitialized('tue') && null !== $data->getTue()) {
            $values_2 = [];
            foreach ($data->getTue() as $value_2) {
                $values_2[] = $value_2;
            }
            $dataArray['tue'] = $values_2;
        }
        if ($data->isInitialized('wed') && null !== $data->getWed()) {
            $values_3 = [];
            foreach ($data->getWed() as $value_3) {
                $values_3[] = $value_3;
            }
            $dataArray['wed'] = $values_3;
        }
        if ($data->isInitialized('thu') && null !== $data->getThu()) {
            $values_4 = [];
            foreach ($data->getThu() as $value_4) {
                $values_4[] = $value_4;
            }
            $dataArray['thu'] = $values_4;
        }
        if ($data->isInitialized('fri') && null !== $data->getFri()) {
            $values_5 = [];
            foreach ($data->getFri() as $value_5) {
                $values_5[] = $value_5;
            }
            $dataArray['fri'] = $values_5;
        }
        if ($data->isInitialized('sat') && null !== $data->getSat()) {
            $values_6 = [];
            foreach ($data->getSat() as $value_6) {
                $values_6[] = $value_6;
            }
            $dataArray['sat'] = $values_6;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Component\OpenApi3\Tests\Expected\Model\WlanschedulerCreateWlanScheduler::class => false];
    }
}