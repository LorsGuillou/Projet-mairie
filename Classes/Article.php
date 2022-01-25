<?php

class Article {
    private string $title;
    private string $category;
    private string $accroche;
    private string $img;
    private string $content;
    private string $date;

    function __construct(string $title, string $category, string $accroche, string $img, string $content, string $date) {
        $this->title = $title;
        $this->category = $category;
        $this->accroche = $accroche;
        $this->img = $img;
        $this->content = $content;
        $this->date = $date;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getAccroche() {
        return $this->accroche;
    }

    public function getImg() {
        return $this->img;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDate() {
        return $this->date;
    }
}

