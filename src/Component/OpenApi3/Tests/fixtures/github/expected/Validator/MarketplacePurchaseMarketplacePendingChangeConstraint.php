<?php

namespace Github\Validator;

class MarketplacePurchaseMarketplacePendingChangeConstraint extends \Symfony\Component\Validator\Constraints\Compound
{
    protected function getConstraints($options) : array
    {
        return [new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.']), new \Symfony\Component\Validator\Constraints\Collection(['fields' => ['is_installed' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'bool']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'effective_date' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Length(['min' => 0, 'minMessage' => 'This value is too short. It should have {{ limit }} characters or more.']), new \Symfony\Component\Validator\Constraints\Type(['0' => 'string']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'unit_count' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer'])]), 'id' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Type(['0' => 'integer']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])]), 'plan' => new \Symfony\Component\Validator\Constraints\Optional([new \Symfony\Component\Validator\Constraints\Count(['min' => 0, 'minMessage' => 'This array has not enough properties. It should have {{ limit }} properties or more.']), new \Symfony\Component\Validator\Constraints\NotNull(['message' => 'This value should not be null.'])])], 'allowExtraFields' => true])];
    }
}