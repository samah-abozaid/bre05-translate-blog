<?php

class BlogController extends AbstractController
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

    public function findAllCategory()
    {
      $cm = new CategoryManager() ; 
        
      $categories = $cm->findAllCategory();
      $this->render("category", ["categories"=>$categories]);  
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