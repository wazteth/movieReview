<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
* Movie ATTRIBUTES
* $this->attributes['id'] - int - contains the movie primary key (id)
* $this->attributes['name'] - string - contains the movie name
* $this->attributes['description'] - string - contains the movie description
* $this->attributes['image'] - string - contains the movie image
* $this->attributes['star'] - int - contains the movie price
* $this->attributes['created_at'] - timestamp - contains the movie creation date
* $this->attributes['updated_at'] - timestamp - contains the movie update date
*/

    public function getId()
    {
        return $this->attributes['id'];
    }
    
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return strtoupper($this->attributes['name']);
    }
    
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    public function getImage()
    {
        return $this->attributes['image'];
    }
    
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }
    public function getStar()
    {
        return $this->attributes['star'];
    }
    
    public function setStar($star)
    {
        $this->attributes['star'] = $star;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            'image' => 'image',
        ]);
    }
}