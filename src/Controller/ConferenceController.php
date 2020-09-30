<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Componetn\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/{name}", name="homepage")
     */
    public function index(string $name = "")
    {
        $greet = "";
        if ($name) {
            $greet = \sprintf("Et hop %s !!!", \htmlspecialchars($name));
        }

        return new Response(
            <<<EOF
            <html>
                <body>
                $greet
                    <img src="images/under-construction.gif">
                </body>
            </html>
            EOF
        );
    }
}
