<?php
namespace App\Entity;

class Book
{
    private $id;
    private ?string $title = null;
    private string $subtitle;
    private ?array $author = null;
    private ?string $publisher = null;
    private ?string $description = null;
    private ?string $pageCount = null;
    private ?string $printType = null;
    private ?array $categories = null;
    private ?string $smallThumbnail = null;
    private ?string $thumbnail = null;
    private string $language;
    private ?string $textSnippet = null;
    private array $industryIdentifiers;
    private ?string $publishedDate = null;
    private int $totalResults;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }
    
    public function setSubtitle(string $subtitle)
    {
        $this->subtitle = $subtitle;
        
        return $this;
    }
    
    public function getTitle(): ?string
    {
        return $this->title;
    }
    
    public function setTitle(?string $title)
    {
        $this->title = $title;
        
        return $this;
    }
    
    public function getAuthor(): ?array
    {
        return $this->author;
    }
    
    public function setAuthor(?array $author)
    {
        $this->author = $author;
        
        return $this;
    }
    
    public function getPublisher(): ?string
    {
        return $this->publisher;
    }
    
    public function setPublisher(?string $publisher)
    {
        $this->publisher = $publisher;
        
        return $this;
    }
    
    public function getDescription(): ?string
    {
        return $this->description;
    }
    
    public function setDescription(?string $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    public function getPageCount(): ?string
    {
        return $this->pageCount;
    }
    
    public function setPageCount(?string $pageCount)
    {
        $this->pageCount = $pageCount;
        
        return $this;
    }
    
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    
    public function setPrintType(?string $printType)
    {
        $this->printType = $printType;
        
        return $this;
    }
    
    public function getCategories(): ?array
    {
        return $this->categories;
    }
    
    public function setCategories(?array $categories)
    {
        $this->categories = $categories;
        
        return $this;
    }
    
    public function getSmallThumbnail(): ?string
    {
        return $this->smallThumbnail;
    }
    
    public function setSmallThumbnail(?string $smallThumbnail)
    {
        
        $this->smallThumbnail = $smallThumbnail;
        
        return $this;
    }
    
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }
    
    public function setThumbnail(?string $thumbnail)
    {
        $this->thumbnail = $thumbnail;
        
        return $this;
    }
    
    public function getLanguage(): string
    {
        return $this->language;
    }
    
    public function setLanguage(string $language)
    {
        $this->language = $language;
        
        return $this;
    }
    
    public function getTextSnippet(): ?string
    {
        return $this->textSnippet;
    }
    
    public function setTextSnippet(?string $textSnippet)
    {
        $this->textSnippet = $textSnippet;
        
        return $this;
    }
    
    public function getIndustryIdentifiers(): array
    {
        return $this->industryIdentifiers;
    }
    
    public function setIndustryIdentifiers(array $industryIdentifiers)
    {
        $this->industryIdentifiers = $industryIdentifiers;
        
        return $this;
    }
    
    public function getPublishedDate(): ?string
    {
        return $this->publishedDate;
    }
    
    public function setPublishedDate(?string $publishedDate)
    {
        $this->publishedDate = $publishedDate;
        
        return $this;
    }
    
    public function getTotalResults()
    {
        return $this->totalResults;
    }
    
    public function setTotalResults(int $totalResults)
    {
        $this->totalResults = $totalResults;
        
        return $this;
    }
    
}

