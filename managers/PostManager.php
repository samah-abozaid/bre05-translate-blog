<?php


class PostManager extends AbstractManager
{
    
      public function __construct(){
        parent::__construct();
    }
    
    public function findAllPost(): array {
        
        $query = $this->db->prepare('SELECT * FROM posts');
        $query->execute();
    
        $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    $cm = new Category("", "");
        $posts = [];
        $lang = $_SESSION['lang']; 
        foreach ($rows as $row) {
            $post = new Post(
                $row['title_' . $lang],
                $row['excerpt_' . $lang],
                $row['content_' . $lang],
                $row['author'],
                new DateTime($row['created_at'])
);
           $post->setCategory($cm);  // je dois ajouter un category avec id findOne  =>categoryMananger
            $posts[] = $post;
        }
    
        return $posts;
}
}