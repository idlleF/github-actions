<?php

namespace App\Tests;

use App\Controller\HomeController;
use Exception;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeControllerTest extends TestCase
{
    private AbstractController $controller;

    public function __construct(string $name)
    {
        $this->controller = new HomeController();
        parent::__construct($name);
    }

    /**
     * @throws Exception
     */
    public function testIsInt()
    {
        $this->assertIsInt($this->controller->calculateNumber(5));
    }

    /**
     * @throws Exception
     */
    public function testCalculation()
    {
        $this->assertEquals(11, $this->controller->calculateNumber(6));
    }

    /**
     * @throws Exception
     */
    public function testWrongCalculation()
    {
        $this->assertNotEquals(22, $this->controller->calculateNumber(6));
    }

    /**
     * @throws Exception
     */
    public function testMultipleValues()
    {
        $baseNumber = 10;

        for ($i = 1; $i <= rand(100, 500); $i++) {
            $this->assertEquals($i + $baseNumber + 5, $this->controller->calculateNumber($baseNumber + $i));
        }
    }
}
