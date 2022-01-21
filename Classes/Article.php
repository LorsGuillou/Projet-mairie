<?php

class Article {
    private int $id;
    private string $title;
    private string $category;
    private string $accroche;
    private string $img;
    private string $content;

    function __construct(string $title, string $category, string $accroche, string $img, string $content)
    {
        $this->title = $title;
        $this->category = $category;
        $this->accroche = $accroche;
        $this->img = $img;
        $this->content = $content;
    }

    public function setTitle(string $newTitle) {
        $this->title = $newTitle;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setCategory(string $newCategory) {
        $this->category = $newCategory;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setAccroche(string $newAccroche) {
        $this->accroche = $newAccroche;
    }

    public function getAccroche() {
        return $this->accroche;
    }

    public function setImg(string $newImg) {
        $this->img = $newImg;
    }

    public function getImg() {
        return $this->img;
    }

    public function setContent(string $newContent) {
        $this->img = $newContent;
    }

    public function getContent() {
        return $this->content;
    }

}

