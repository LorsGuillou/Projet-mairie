<?php

class Article {
    private int $id;
    private string $category;
    private string $title;
    private string $accroche;
    private string $img;
    private string $content;

    function __construct(string $title, string $accroche, string $img)
    {
        
    }

    function setTitle(string $newTitle) {
        $this->title = $newTitle;
    }

    function getTitle() {
        return $this->title;
    }
}

