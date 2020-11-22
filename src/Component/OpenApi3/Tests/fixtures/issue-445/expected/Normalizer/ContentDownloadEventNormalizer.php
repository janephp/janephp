<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ContentDownloadEventNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'PicturePark\\API\\Model\\ContentDownloadEvent';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'PicturePark\\API\\Model\\ContentDownloadEvent';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \PicturePark\API\Model\ContentDownloadEvent();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['timestamp']));
        }
        if (\array_key_exists('kind', $data)) {
            $object->setKind($data['kind']);
        }
        if (\array_key_exists('downloadInfos', $data) && $data['downloadInfos'] !== null) {
            $values = array();
            foreach ($data['downloadInfos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'PicturePark\\API\\Model\\DownloadTrackingInfo', 'json', $context);
            }
            $object->setDownloadInfos($values);
        }
        elseif (\array_key_exists('downloadInfos', $data) && $data['downloadInfos'] === null) {
            $object->setDownloadInfos(null);
        }
        if (\array_key_exists('fileSize', $data)) {
            $object->setFileSize($data['fileSize']);
        }
        if (\array_key_exists('shareToken', $data) && $data['shareToken'] !== null) {
            $object->setShareToken($data['shareToken']);
        }
        elseif (\array_key_exists('shareToken', $data) && $data['shareToken'] === null) {
            $object->setShareToken(null);
        }
        if (\array_key_exists('range', $data) && $data['range'] !== null) {
            $object->setRange($data['range']);
        }
        elseif (\array_key_exists('range', $data) && $data['range'] === null) {
            $object->setRange(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\\TH:i:sP');
        $data['kind'] = $object->getKind();
        if (null !== $object->getDownloadInfos()) {
            $values = array();
            foreach ($object->getDownloadInfos() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['downloadInfos'] = $values;
        }
        if (null !== $object->getFileSize()) {
            $data['fileSize'] = $object->getFileSize();
        }
        if (null !== $object->getShareToken()) {
            $data['shareToken'] = $object->getShareToken();
        }
        if (null !== $object->getRange()) {
            $data['range'] = $object->getRange();
        }
        return $data;
    }
}