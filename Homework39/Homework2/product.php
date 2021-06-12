<?php


class Product
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $images = [];
    public $sizes = [];

    function setImages($image)
    {
        array_push($this->images, $image);
    }

    function setSizes($sizes)
    {
        array_push($this->sizes, $sizes);
    }

    function getImage()
    {
        return $this->images;
    }

    function getImgHtml()
    {
        $allImg = "";
        foreach ($this->getImage() as $image) {
            $allImg .= "<img src='" . $image . "'>";
        }
        return $allImg;
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return "Images " . $this->getImgHtml();
    }
}