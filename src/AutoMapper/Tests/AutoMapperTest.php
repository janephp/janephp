<?php

namespace Jane\AutoMapper\Tests;

use Jane\AutoMapper\AutoMapper;
use Jane\AutoMapper\Compiler\Accessor;
use Jane\AutoMapper\Compiler\Compiler;
use Jane\AutoMapper\Compiler\Transformer\TransformerFactory;
use Jane\AutoMapper\MapperConfiguration;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;

class AutoMapperTest extends TestCase
{
    public function testAutoMapping()
    {
        $configuration = new MapperConfiguration(new Compiler(new PropertyInfoExtractor(
            [new ReflectionExtractor()],
            [new ReflectionExtractor(), new PhpDocExtractor()],
            [new ReflectionExtractor()],
            [new ReflectionExtractor()]
        ),
            new Accessor(),
            new TransformerFactory()
        ), User::class, UserDTO::class);

        $automapper = new AutoMapper();
        $automapper->register($configuration);

        $user = new User(1, 'yolo', '13');
        /** @var UserDTO $userDto */
        $userDto = $automapper->map($user, UserDTO::class);

        self::assertInstanceOf(UserDTO::class, $userDto);
        self::assertEquals(1, $userDto->id);
        self::assertEquals('yolo', $userDto->name);
        self::assertEquals('13', $userDto->age);
        self::assertNull($userDto->email);
    }
}

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
     * @var string
     */
    public $age;
    /**
     * @var string
     */
    private $email;

    public function __construct($id, $name, $age, $email = 'test')
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
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
     * @var string
     */
    public $age;
    /**
     * @var string
     */
    public $email;
}