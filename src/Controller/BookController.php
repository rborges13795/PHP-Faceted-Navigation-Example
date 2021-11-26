<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\BookRepository;
use App\Factory\BookFactory;

class BookController extends AbstractController
{
    
    private BookRepository $repository;
    private BookFactory $factory;
    
    /**
     * @param BookRepository $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
        $this->factory = new BookFactory();
    }
    
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
    
    /**
     * @param Request $parameters
     * @return Response
     */
    public function getBooks(Request $parameters): Response
    {
        try {
            $parameters = $parameters->query->all();
            $data = $this->repository->getBookSearch($parameters);
            $query = $this->repository->returnQuery($parameters);
            $response = $data['response'];
            $results = $response['totalItems'];
            $indexPage = 0;
            $finalPage = intval(ceil($results /10));
            
            if(array_key_exists('startIndex', $parameters)) {
                $indexPage = $parameters['startIndex'];
            }
            
            $lastIndex = $results - $indexPage;
            $notFound = false;
            if ($results == 0 || !array_key_exists('items', $response)) {
                $notFound = true;
            }
    
            foreach ($response['items'] as $books) {
                $book[] = $this->factory->create($books);
            }
            
            $category = $this->factory->getCategories($book);
            
            return $this->render('getBooks.html.twig', [
                'book' => $book,
                'results' => $results,
                'query' => $query,
                'results' => $results,
                'lastIndex' => $lastIndex,
                'indexPage' => $indexPage,
                'finalPage' => $finalPage,
                'notFound' => $notFound,
                'category' => $category
            ]);
            
        } catch (\Exception $e) {

            $results = 0;
            $notFound = true;
            return $this->render('getBooks.html.twig', [
                'results' => $results,
                'notFound' => $notFound
            ]);
        }            
    }
}
