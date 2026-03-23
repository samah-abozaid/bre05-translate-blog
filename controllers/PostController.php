<?php

class PostController extends AbstractController
{
    public function __construct()
    {
        $lang = $_SESSION["lang"];

        // parent::__construct("auth", $lang);
    }
    
    
     public function getTranslator() : Translator
    {
        return $this->translator;
    }

    public function findAllPosts()
    {
        $pc = new PostManager();
        
        $posts = $pc->findAllPost();
        
        $this->render("post", ["posts"=>$posts]);  
    }
    
    
    public function switchLang()
    {
        if($_SESSION["lang"] === "fr")
        {
            $_SESSION["lang"] = "en";
        }
        else
        {
            $_SESSION["lang"] = "fr";
        }

        $this->redirect("index.php");
    }
}