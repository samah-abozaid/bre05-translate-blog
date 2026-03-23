<?php

class Post {

    private ?int $id = null;
    private array $categories;

    public function __construct(
        private string $title,
        private string $excerpt,
        private string $content,
        private int $author,
        private DateTime $createdAt
    ) {}

    // ========== Getters ==========
    public function getId(): ?int {
        return $this->id;
        }
        
    public function getTitle(): string { 
        return $this->title; 
        
    }
    
    public function getExcerpt(): string {
        return $this->excerpt; 
        
    }
    
    public function getContent(): string { 
        return $this->content; 
        
    }
    
    public function getAuthor(): int { 
        return $this->author; 
        
    }
    
    public function getCreatedAt(string $format = 'd/m/Y H:i'): string {
        return $this->createdAt->format($format);
    }
    
    public function getCategory():Category{
        return $this->category;
    }

    // ========== Setters ==========
    public function setId(int $id): void {
        $this->id = $id; 
        
    }
    
    public function setTitle(string $title): void {
        $this->title = $title; 
        
    }
    
    public function setExcerpt(string $excerpt): void {
        $this->excerpt = $excerpt; 
        
    }
    
    public function setContent(string $content): void {
        $this->content = $content; 
        
    }
    
    public function setAuthor(int $author): void {
        $this->author = $author; 
        
    }
    
    public function setCreatedAt(DateTime $createdAt): void {
        $this->createdAt = $createdAt; 
        
    }
    
    public function setCategory(Category $category) : void {
        $this->category=$category;
    }
}