<?php
namespace App\Factory;

use App\Entity\Book;
use Html2Text\Html2Text;

class BookFactory
{
    /**
     * Add more options
     * @param array $response
     * @return Book
     */
    public function create(array $response): Book
    {
        $book = new Book();
        $volumeInfo = $response['volumeInfo'];
        
        if (array_key_exists('id', $response)) {
            $book->setId($response['id']);
        }
        
        if (array_key_exists('title', $volumeInfo)) {
            $book->setTitle($volumeInfo['title']);
        }
        
        if (array_key_exists('subtitle', $volumeInfo)) {
            $book->setSubtitle($volumeInfo['subtitle']);
        }
        
        if (array_key_exists('authors', $volumeInfo)) {
            $book->setAuthor($volumeInfo['authors']);
        }
        
        if (array_key_exists('publisher', $volumeInfo)) {
            $book->setPublisher($volumeInfo['publisher']);
        }
        
        if (array_key_exists('publishedDate', $volumeInfo)) {
            $book->setPublishedDate($volumeInfo['publishedDate']);
        }
        
        if (array_key_exists('description', $volumeInfo)) {
            $book->setDescription($volumeInfo['description']);
        }
        
        if (array_key_exists('industryIdentifiers', $volumeInfo)) {
            $book->setIndustryIdentifiers($volumeInfo['industryIdentifiers']);
        }
        
        if (array_key_exists('pageCount', $volumeInfo)) {
            $book->setPageCount($volumeInfo['pageCount']);
        }
        
        if (array_key_exists('printType', $volumeInfo)) {
            $book->setPrintType($volumeInfo['printType']);
        }
        
        if (array_key_exists('categories', $volumeInfo)) {
            $book->setCategories($volumeInfo['categories']);
        }
        
        if (array_key_exists('language', $volumeInfo)) {
            $book->setLanguage($volumeInfo['language']);
        }
        
        if (array_key_exists('imageLinks', $volumeInfo)) {
            $imageLinks = $volumeInfo['imageLinks'];
            
            if (array_key_exists('smallThumbnail', $imageLinks)) {
                $book->setSmallThumbnail($imageLinks['smallThumbnail']);
            }
            
            if (array_key_exists('thumbnail', $imageLinks)) {
                $book->setThumbnail($imageLinks['thumbnail']);
            }
        }
        
        if (array_key_exists('searchInfo', $response)) {
            
            $searchInfo = $response['searchInfo'];
            
            if (array_key_exists('textSnippet', $searchInfo)) {
                $html = new Html2Text($searchInfo['textSnippet']);
                $book->setTextSnippet($html->getText());
            }
        }

        return $book;
    }
    
    public function getCategories(?array $book): ?array 
    {
        foreach ($book as $books) {
            $categories[] = $books->getCategories();
        }
        
        for ($i = 0; $i < sizeof($categories); $i++) {
            if ($categories[$i]) {
                $category[] = $categories[$i][0];
            }
        }
        return array_count_values($category);
    }
    
}

