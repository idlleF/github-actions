<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @throws Exception
     */
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        $number = $this->calculateNumber(rand(100, 500));

        return new Response(
            '<html lang="en"><body>Lucky number: ' . $number . '</body></html>'
        );
    }


    /**
     * @throws Exception
     */
    static function calculateNumber(int $number): int
    {
        return $number + 5;
    }
}
