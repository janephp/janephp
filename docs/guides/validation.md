# Validation

Since Jane 7.2.0, you can use the [JSON Schema validation specification](https://json-schema.org/draft/2020-12/json-schema-validation.html) for your Jane models.

The goal of this feature is to allow your data to be validated based on
your schema (either JSON Schema or OpenAPI) and in both ways (if you
send data or if you receive data).

At the moment Jane supports most of the specification except for
`minContains` and `maxContains` for the Array constraints. And for
`dependentRequired` in the Object constraints.

Properties declared with `type: string` and a `format: date` or
`format: date-time` also get their format validated (with the Symfony
`Date` / `DateTime` constraints). The expected format mirrors the
`full-date-format`, `date-format` and `date-input-format`
configuration options.

## Usage

For this example we will take the following JSON Schema as our base
model:

```json
{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "maxLength": 128
        },
        "alcohol": {
            "type": "number",
            "minimum": 0.0
        },
        "year": {
            "type": "integer",
            "minimum": 1000,
            "maximum": 2022
        }
    }
}
```

From what you can see here, we have some validation rules used in that
schema for each properties. To enable the validation features in Jane,
you'll have to set the `validation` parameter to `true` as following:

```php
<?php

return [
    'json-schema-file' => __DIR__ . '/beer.json',
    'root-class' => 'Beer',
    'namespace' => 'App\Generated',
    'directory' => __DIR__ . '/generated',
    'validation' => true,
];
```

With that configuration, validators will be generated and during
normalization or denormalization they will be called to validate your
data. You have nothing to change of your usual Jane calls since all the
logic is put into the generated Normalizer.

So with the following code:

```php
<?php

$normalizer = new BeerNormalizer();
$model = $normalizer->denormalize([
    'name' => 'Kasteel Tripel',
    'alcohol' => 11.0,
    'year' => 1811,
], Beer::class);

dump($model);
```

You will get that model which was validated before returning:

```text
^ App\Generated\Model\Beer^ {#107273
  #name: "Kasteel Tripel"
  #alcohol: 11.0
  #year: 1811
}
```

In my example, I was using only valid values for all my properties, but
if I change the year field to the `811` value, it will cause an error.
No model will be returned and an exception will be thrown as following:

```text
^ Jane\Component\JsonSchema\Tests\Validation\Generated\Validator\ValidationException^ {#112477
  #message: "Model validation failed with 1 errors."
  #code: 400
  #file: "./src/Component/JsonSchema/Tests/Validation/Generated/Validator/BeerValidator.php"
  #line: 13
  -violationList: Symfony\Component\Validator\ConstraintViolationList^ {#105008
    -violations: array:1 [
      0 => Symfony\Component\Validator\ConstraintViolation^ {#114455
        -message: "This value should be greater than or equal to 1000."
        -messageTemplate: "This value should be greater than or equal to {{ compared_value }}."
        -parameters: array:3 [
          "{{ value }}" => "811"
          "{{ compared_value }}" => "1000"
          "{{ compared_value_type }}" => "float"
        ]
        -plural: null
        -root: array:3 [
          "name" => "Kasteel Tripel"
          "alcohol" => 11.0
          "year" => 811
        ]
        -propertyPath: "[year]"
        -invalidValue: 811
        -constraint: Symfony\Component\Validator\Constraints\GreaterThanOrEqual^ {#112504
          +payload: null
          +groups: array:1 [
            0 => "Default"
          ]
          +message: "This value should be greater than or equal to {{ compared_value }}."
          +value: 1000.0
          +propertyPath: null
        }
        -code: "ea4e51d1-3342-48bd-87f1-9e672cd90cad"
        -cause: null
      }
    ]
  }
}
```

To generate validators we use the [Symfony Validator
component](https://github.com/symfony/validator) to have independent
validator for each generated models. All the constraints for each models
will be compiled in that validator and embedded in a [Collection
constraint](https://symfony.com/doc/current/reference/constraints/Collection.html)
that is used to describe all fields and constraints within that model.

For our Beer model, the validator will look like this:

```php
<?php

namespace App\Generated\Validator;

use Symfony\Component\Validator\Constraints;
use Symfony\Component\Validator\Validation;

class BeerValidator implements App\Generated\Validator\ValidatorInterface
{
    public function validate($data) : void
    {
        $constraints = array(
            new Constraints\Collection(array('fields' => array(
                'name' => new Constraints\Optional(array(
                    new Constraints\Length(array(
                        'max' => 128,
                        'maxMessage' => 'This value is too long. It should have {{ limit }} characters or less.'
                    )),
                    new Constraints\Type(array('string'))
                )),
                'alcohol' => new Constraints\Optional(array(
                    new Constraints\GreaterThanOrEqual(array('value' => 0.0)),
                    new Constraints\Type(array('float'))
                )),
                'year' => new Constraints\Optional(array(
                    new Constraints\LessThanOrEqual(array('value' => 2022.0)),
                    new Constraints\GreaterThanOrEqual(array('value' => 1000.0)),
                    new Constraints\Type(array('integer')))
                )),
                'allowExtraFields' => true
            ))
        );

        $validator = Validation::createValidator();
        $violations = $validator->validate($data, $constraints);

        if ($violations->count() > 0) {
            throw new ValidationException($violations);
        }
    }
}
```

Here we can see that each field has a type constraint to check the value
passed and if we have more constraints they will be added accordingly.

Inside the normalizer, you can find that validator usage with:

```php
public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
{
    $validator = new BeerValidator();
    $validator->validate($data);

    // ...
}
```

This allows the validation to be done without having anything else than
the configuration to do. Also you can use the Validator out of Jane
normalization by doing exactly the same as in the Normalizer.

## Custom validators

Sometimes the built-in validators are not enough for your specific
schemas. Since Jane, you can register additional validators through the
`validators` configuration option.

The `validators` option takes an array of
`Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface`
**instances** (not class names), which lets you inject constructor
dependencies (like allowed values, configuration, or services).

```php
<?php

return [
    'json-schema-file' => __DIR__ . '/price.json',
    'root-class' => 'Price',
    'namespace' => 'App\Generated',
    'directory' => __DIR__ . '/generated',
    'validation' => true,
    'validators' => [
        new class implements ValidatorInterface {
            public function supports($object): bool
            {
                return $object instanceof JsonSchema && 'decimal-two' === $object->getFormat();
            }

            public function guess($object, string $name, $guess): void
            {
                $guess->addValidatorGuess(new ValidatorGuess(Regex::class, [
                    'pattern' => '#^\d+\.\d{2}$#',
                    'message' => 'This value is not a valid decimal with two fraction digits.',
                ]));
            }
        },
    ],
];
```

As you can see, each validator implements `ValidatorInterface` with two
methods:

- `supports($object)` returns whether this validator applies to the
  given schema object (for example a `JsonSchema` with a specific
  `format`).
- `guess($object, string $name, $guess)` emits the Symfony validation
  constraints for the guessed property, using
  `$guess->addValidatorGuess(new ValidatorGuess(ConstraintClass::class, [
  ...options ]))`.

Because the option takes instances, you can build validators with
constructor dependencies. For example a validator that restricts a
custom string format to a fixed list of allowed codes:

```php
new class(['EUR', 'USD', 'GBP']) implements ValidatorInterface {
    public function __construct(
        private readonly array $allowedCodes,
    ) {
    }

    public function supports($object): bool
    {
        return $object instanceof JsonSchema && 'currency-code' === $object->getFormat();
    }

    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Choice::class, [
            'choices' => $this->allowedCodes,
            'message' => 'This value is not a supported currency code.',
        ]));
    }
},
```

A single `guess()` can also emit several constraints. For instance a
custom numeric format that becomes a range:

```php
new class implements ValidatorInterface {
    public function supports($object): bool
    {
        return $object instanceof JsonSchema && 'percentage' === $object->getFormat();
    }

    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(GreaterThanOrEqual::class, ['value' => 0.0]));
        $guess->addValidatorGuess(new ValidatorGuess(LessThanOrEqual::class, ['value' => 100.0]));
    }
},
```

Note that custom validators are checked **before** the generic `Type`
and `NotNull` fallback validators, so they take precedence for the
schemas they `supports()`. The `validators` option is only meaningful
when `validation` is enabled, and it works for both JSON Schema and
OpenAPI generation.
