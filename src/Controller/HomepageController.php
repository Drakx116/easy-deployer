<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController
{
    /**
     * @Route("")
     */
    public function __invoke(BookRepository $bookRepository): Response
    {
        return new Response('Books : ' . $bookRepository->count([]));
    }
}
