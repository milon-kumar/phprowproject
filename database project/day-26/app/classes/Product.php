<?php


namespace App\classes;
use App\classes\Database;


class Product
{
    public $id,$name,$price,$stock,$description,$imageName,$directory,$tempLocation,$imgUrl,$sql,$bd,$queryResult,$row,$result=[];

    public function __construct($post = null,$files=null)
    {
        if (isset($post['name']))
        {
            $this->name          = $post['name'];
            $this->price         = $post['price'];
            $this->stock         = $post['stock'];
            $this->description   = $post['description'];
          if(isset($post['id']))
          {
              $this->id = $post['id'];
          }
        }

       if (isset($files['image']['size']) && $files['image']['size']>0)
       {
           $this->imageName   = time().$files['image']['name'];
           $this->directory   ='assets/img/';
           $this->tempLocation= $files['image']['tmp_name'];
           $this->imgUrl= $this->directory.$this->imageName;
       }
    }

    public function newProduct()
    {
        move_uploaded_file($this->tempLocation, $this->imgUrl);

        $this->sql = "INSERT INTO  products(name,price,stock,description,image) VALUES ('$this->name','$this->price','$this->stock','$this->description','$this->imgUrl')";
        $this->bd = new Database();
        mysqli_query($this->bd->dbConnect(),$this->sql);
        return'Product info save.';
    }

    public function allNewProduct()
    {
        $this->sql = "SELECT * FROM products";
        $this->bd = new Database();
     $this-> queryResult=mysqli_query($this->bd->dbConnect(), $this->sql);
     while ($this->row = mysqli_fetch_assoc($this->queryResult))
     {
         array_push($this->result,$this->row);
     }
     return$this->result;
    }
    public function getProductById($id)
    {
        $this->sql           = "SELECT * FROM products WHERE id ='$id'";
        $this->bd            = new Database();
        $this-> queryResult=mysqli_query($this->bd->dbConnect(), $this->sql);
        $this->row = mysqli_fetch_assoc($this->queryResult);
        return $this->row;
    }
    public function updateProduct()
    {
        $this->row = $this->getProductById($this->id);
        if ($this->tempLocation)
        {
            if (file_exists($this->row['image']))
            {
                unlink($this->row['image']);
            }
            move_uploaded_file($this->tempLocation,$this->imgUrl);
        }
          else
              {

              $this->imgUrl = $this->row['image'];

               }

            $this->sql= "update product set name='$this->name', price='$this->price', description='$this->description',stock='$this->stock', image='$this->imgUrl', where id='$this->id'";
            $this->bd            = new Database();
            mysqli_query($this->bd->dbConnect(), $this->sql);
            return "Update";
    }



}