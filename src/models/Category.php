<?php

namespace models;

use models\AbstractModel;

class Category extends AbstractModel
{
  private int $id;
  private string $name;
  private string $image;
  protected string $table = 'categories';
  protected string $fields = 'name, image';
  protected string $values = ':name, :image';
  protected array $valuesBinded = [
    ':name' => '',
    ':image' => ''
  ];

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  public function bindValues(): void
  {
    $this->valuesBinded[':name'] = $this->name;
    $this->valuesBinded[':image'] = $this->image;
  }
}
