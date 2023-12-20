<?php 

namespace Models;

class Note extends Model
{
    private int $id;
    private string $title;
    private string $content;
    private int $user_id;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Note
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Note
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): Note
    {
        $this->content = $content;
        return $this;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): Note
    {
        $this->user_id = $user_id;
        return $this;
    }



}
// Don't write any code below this line