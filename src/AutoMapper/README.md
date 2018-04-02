# Jane AutoMapper

**Expiremental Library**

Generate automapper class which allows to automap values from Class to Class. 

## Features

 * Optimized mapper from named class to named class (equal or very close to native perf)
 * Custom property transformer
 * Use symfony/property-info for mapping (allow extracting properties from reflection / phpdoc / serializer / doctrine / ...)
 * Array/stdClass Mapper (a.k.a. Normalizers)
 * Type casting

## Planned

 * MaxDepth / Circular Reference / Groups
 * Symfony/Serializer Bridge
 * Auto reverse mapping

## Example

```php
class User
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string|int
     */
    public $age;

    public function __construct($id, $name, $age)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

class UserDTO
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string|int
     */
    public $age;
}

$compiler = new Compiler(new PropertyInfoExtractor(
    [new ReflectionExtractor()],
    [new ReflectionExtractor(), new PhpDocExtractor()],
    [new ReflectionExtractor()],
    [new ReflectionExtractor()]
), new Accessor(), new TransformerFactory());

$configurationUser = new MapperConfiguration($this->compiler, User::class, UserDTO::class);
$automapper = new AutoMapper();
$automapper->register($configurationUser);

$user = new User(1, 'yolo', '13');

/** @var UserDTO $userDto */
$userDto = $automapper->map($user, UserDTO::class);

```
