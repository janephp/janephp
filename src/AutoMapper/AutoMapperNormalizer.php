<?php

namespace Jane\AutoMapper;

use Jane\AutoMapper\Exception\NoMappingFoundException;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AutoMapperNormalizer extends AbstractAutoMapper implements DenormalizerInterface, NormalizerInterface
{
    public function map($value, string $target, array $context = [])
    {
        $source = null;

        if (null === $value) {
            return null;
        }

        if (is_object($value)) {
            $source = get_class($value);
        }

        if (is_array($value)) {
            $source = 'array';
        }

        if (null === $source) {
            throw new NoMappingFoundException('Cannot map this value, its neither an object or an array');
        }

        if ($source === 'array') {
            return $this->denormalize($value, $target, null, $context);
        }

        if ($target === 'array') {
            return $this->normalize($value, null, $context);
        }

        return $this->getMapper($source, $target, $context)->map($value, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        return parent::map($data, $class, $context);
    }

    public function supportsDenormalization($data, $type, $format = null)
    {
        $configuration = $this->getConfiguration('array', $type);

        return null !== $configuration;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        return parent::map($object, 'array', $context);
    }

    public function supportsNormalization($data, $format = null)
    {
        $configuration = $this->getConfiguration(get_class($data), 'array');

        return null !== $configuration;
    }
}
