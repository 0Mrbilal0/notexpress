<?php

namespace Models;

use Models\AbstractModel;

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

    /**
     * Retrieves the ID of the object.
     * @return int The ID of the object.
     */
  public function getId(): int
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }
  public function setName($name): static
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
