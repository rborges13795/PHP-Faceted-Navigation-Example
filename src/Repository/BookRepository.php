<?php
namespace App\Repository;

class BookRepository extends AbstractRepository
{
    public function getBookSearch($params = []): array
    {
        if ($params['inauthor'] == '') {
            unset($params['inauthor']);
        } 
        
        if (array_key_exists('inpublisher', $params) && $params['inpublisher'] == '') {
            unset($params['inpublisher']);
        }
        
        if (array_key_exists('isbn', $params) && $params['isbn'] == '') {
            unset($params['isbn']);
        }
        
        /*
         * this is here bacause the api doesn't like when there's whitespace between titles
         */
        $params['intitle'] = str_replace(' ', '', $params['intitle']);

        $queryParams = str_replace(
            array('intitle=', '&inauthor=&', '&inauthor=', '&inpublisher=&', '&inpublisher=', '&isbn=&','&isbn=', '&subject=&','&subject='), 
            array('', '&', '+inauthor:',  '&', '+inpublisher:', '&', '+isbn:', '&', '+subject:'), http_build_query($params)
        ); 
        $url = $this->getUri() . '?q=' . $queryParams . '&language=en';
        $query = $queryParams . '&language=en';
        
        return ['query' => $query, 'response' => $this->getResponse($url)];

    }
    
    public function returnQuery($params = []) {
        return str_replace(array('intitle='), array('/books?intitle='), http_build_query($params));
    }
}