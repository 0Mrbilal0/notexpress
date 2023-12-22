<?php

namespace models;

use models\AbstractModel;

class Note extends AbstractModel
{
  private string $title;
  private string $content;
  private string $slug;
  protected string $table = 'notes';
  protected string $fields = 'title, slug, content';
  protected string $values = ':title, :slug, :content';
  protected array $valuesBinded = [
    ':title' => '',
    ':slug' => '',
    ':content' => ''
  ];

  public function getTitle(): string
  {
    return $this->title;
  }
  public function setTitle($title): Note
  {
    $this->title = $title;
    return $this;
  }

  public function getSlug(): string
  {
    return $this->slug;
  }
  public function setSlug($slug): Note
  {
    $this->slug = $slug;
    return $this;
  }

  public function getContent(): string
  {
    return $this->content;
  }
  public function setContent($content): Note
  {
    $this->content = $content;
    return $this;
  }

  public function bindValues(): void
  {
    $this->valuesBinded[':title'] = $this->title;
    $this->valuesBinded[':slug'] = $this->slug;
    $this->valuesBinded[':content'] = $this->content;
  }
}
