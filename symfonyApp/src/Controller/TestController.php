<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function index()
    {
        return new Response(
            'This is the index response'
        );
    }

    public function test()
    {
        $dummyData = array('Banana', 'Apple', 'Orange', 'Pear');

        return $this->render('test.html.php', array('data' => $dummyData));
    }
}