<?php

namespace Jane\OpenApi2\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\OpenApi2\Tests\Expected\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Jane\\OpenApi2\\Tests\\Expected\\Model\\User';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\OpenApi2\Tests\Expected\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (\array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($data['timezone']);
        }
        if (\array_key_exists('has_access_to_all_future_projects', $data)) {
            $object->setHasAccessToAllFutureProjects($data['has_access_to_all_future_projects']);
        }
        if (\array_key_exists('is_contractor', $data)) {
            $object->setIsContractor($data['is_contractor']);
        }
        if (\array_key_exists('is_admin', $data)) {
            $object->setIsAdmin($data['is_admin']);
        }
        if (\array_key_exists('is_project_manager', $data)) {
            $object->setIsProjectManager($data['is_project_manager']);
        }
        if (\array_key_exists('can_see_rates', $data)) {
            $object->setCanSeeRates($data['can_see_rates']);
        }
        if (\array_key_exists('can_create_projects', $data)) {
            $object->setCanCreateProjects($data['can_create_projects']);
        }
        if (\array_key_exists('can_create_invoices', $data)) {
            $object->setCanCreateInvoices($data['can_create_invoices']);
        }
        if (\array_key_exists('is_active', $data)) {
            $object->setIsActive($data['is_active']);
        }
        if (\array_key_exists('weekly_capacity', $data)) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        }
        if (\array_key_exists('default_hourly_rate', $data)) {
            $object->setDefaultHourlyRate($data['default_hourly_rate']);
        }
        if (\array_key_exists('cost_rate', $data)) {
            $object->setCostRate($data['cost_rate']);
        }
        if (\array_key_exists('roles', $data)) {
            $values = array();
            foreach ($data['roles'] as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (\array_key_exists('avatar_url', $data)) {
            $object->setAvatarUrl($data['avatar_url']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['created_at']));
        }
        if (\array_key_exists('updated_at', $data)) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['updated_at']));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }
        if (null !== $object->getHasAccessToAllFutureProjects()) {
            $data['has_access_to_all_future_projects'] = $object->getHasAccessToAllFutureProjects();
        }
        if (null !== $object->getIsContractor()) {
            $data['is_contractor'] = $object->getIsContractor();
        }
        if (null !== $object->getIsAdmin()) {
            $data['is_admin'] = $object->getIsAdmin();
        }
        if (null !== $object->getIsProjectManager()) {
            $data['is_project_manager'] = $object->getIsProjectManager();
        }
        if (null !== $object->getCanSeeRates()) {
            $data['can_see_rates'] = $object->getCanSeeRates();
        }
        if (null !== $object->getCanCreateProjects()) {
            $data['can_create_projects'] = $object->getCanCreateProjects();
        }
        if (null !== $object->getCanCreateInvoices()) {
            $data['can_create_invoices'] = $object->getCanCreateInvoices();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getDefaultHourlyRate()) {
            $data['default_hourly_rate'] = $object->getDefaultHourlyRate();
        }
        if (null !== $object->getCostRate()) {
            $data['cost_rate'] = $object->getCostRate();
        }
        if (null !== $object->getRoles()) {
            $values = array();
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data['roles'] = $values;
        }
        if (null !== $object->getAvatarUrl()) {
            $data['avatar_url'] = $object->getAvatarUrl();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:sP');
        }
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:sP');
        }
        return $data;
    }
}