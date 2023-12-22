<?php

namespace Models;

class Note extends AbstractModel
{
    private string $title;
    private string $content;
    private string $slug;
    private string $image;
    protected string $table = 'notes';
    protected string $fields = 'title, slug, content, image';
    protected string $values = ':title,:slug,:content,:image';
    protected array $valuesBinded = [
        ':title' => '',
        ':slug' => '',
        ':content' => '',
        ':image' => ''
    ];

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Note
     */
    public function setTitle(string $title): Note
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Note
     */
    public function setContent(string $content): Note
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Note
     */
    public function setSlug(string $slug): Note
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Note
     */
    public function setImage(string $image): Note
    {
        // var_dump(strpos("\\\'", $image));
        // var_dump($image);
        // $image = !strpos("\'", $image) ? addslashes($image) : $image;
        // var_dump($image);
        $this->image = str_replace(' ', '%20',$image)  ;
        return $this;
    }



    public function bindValues(): void
    {
        $this->valuesBinded[':title'] = $this->title;
        $this->valuesBinded[':slug'] = $this->slug;
        $this->valuesBinded[':content'] = $this->content;
        $this->valuesBinded[':image'] = $this->image;
    }
}
