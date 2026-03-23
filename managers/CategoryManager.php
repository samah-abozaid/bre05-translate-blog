<?php


class CategoryManager extends AbstractManager
{
    
    public function __construct(){
        parent::__construct();
    }
    
    
    
   public function findAllCategory():array {
            $query = $this->db->prepare('SELECT * FROM categories');
            $query->execute();
        
            $rows = $query->fetchAll(PDO::FETCH_ASSOC);
        
            $categories = [];
        $lang = $_SESSION['lang'];
            foreach ($rows as $row) {
                $category = new Category(
                    $row["title_" .$lang],
                    $row["description_" .$lang],
                    $row["id"]
                );
        
                $categories[] = $category;
            }
        
            return $categories;
        }
        
        
        
        
        
           } 
    
    
    
