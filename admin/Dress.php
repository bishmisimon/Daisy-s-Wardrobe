<?php

require 'Config.php';

class Dress{

    public $id;
    public $name;
    public $price;
   
    public $category;

    public $subCategory;

    public $color;

    public $size;

    public $quantity;

    public $description;

    public $picture;

    


  
    public function Add()

    {

    try {
        $conn= Config::GetConnection();
        $query="INSERT INTO `store`( `name`, `price`, `category`, `subCategory`, `color`, `size`, `quantity`, `description`)
        VALUES (?,?,?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bindParam(1,$this->name,PDO::PARAM_STR);
        $stmt->bindParam(2,$this->price,PDO::PARAM_INT);
        $stmt->bindParam(3,$this->category,PDO::PARAM_STR);
        $stmt->bindParam(4,$this->subCategory,PDO::PARAM_STR);
        $stmt->bindParam(5,$this->color,PDO::PARAM_STR);
        $stmt->bindParam(6,$this->size,PDO::PARAM_STR);
        $stmt->bindParam(7,$this->quantity,PDO::PARAM_INT);
        $stmt->bindParam(8,$this->description,PDO::PARAM_STR);
       
        $stmt->execute();
        return $conn->lastInsertId();


    } catch (Exception $e) {
        throw $e;
    }



    }
 
    

    //update

    public function Update()

    {

    try {
        $conn= Config::GetConnection();
        $query="UPDATE `store` SET `name`=?,`price`=?,`category`=?,
        `subCategory`=?,`color`=?,`size`=?,`quantity`=?,`description`=?,`picture`=? WHERE `id`=?";
        $stmt=$conn->prepare($query);
        
        
        $stmt->bindParam(1,$this->name,PDO::PARAM_STR);
        $stmt->bindParam(2,$this->price,PDO::PARAM_INT);
        $stmt->bindParam(3,$this->category,PDO::PARAM_STR);
        $stmt->bindParam(4,$this->subCategory,PDO::PARAM_STR);
        $stmt->bindParam(5,$this->color,PDO::PARAM_STR);
        $stmt->bindParam(6,$this->size,PDO::PARAM_STR);
        $stmt->bindParam(7,$this->quantity,PDO::PARAM_INT);
        $stmt->bindParam(8,$this->description,PDO::PARAM_STR);
        $stmt->bindParam(9,$this->picture,PDO::PARAM_STR);
        $stmt->bindParam(10,$this->id,PDO::PARAM_INT);
       
        $stmt->execute();
        


    } catch (Exception $e) {
        throw $e;
    }



    }










    //search

 






    //subCategory



    public static function GetDressesSubTypes()

    {

    try {
        $conn= Config::GetConnection();
        $query= " SELECT  DressSubCategory FROM Subcategory  ";
        $result=$conn->query($query);
        $dressSubTypes=array();
        foreach($result as $item)
        {
            $dress= new Dress;
            $dress->id=$item[0];
            ;
            array_push($dressSubTypes,$item[0]);
            

        }
        return $dressSubTypes;


    } catch (Exception $e) {
        throw $e;
    }



    }



    //colours

    public static function GetColors()

    {

    try {
        $conn= Config::GetConnection();
        $query= " SELECT  `colors` FROM `colours`  ";
        $result=$conn->query($query);
        $tcolors=array();
        foreach($result as $item)
        {
            $dress= new Dress;
            $dress->id=$item[0];
            ;
            array_push($tcolors,$item[0]);
            

        }
        return $tcolors;


    } catch (Exception $e) {
        throw $e;
    }



    }



    //sizes

    
    public static function GetSizes()

    {

    try {
        $conn= Config::GetConnection();
        $query= " SELECT  `size` FROM `sizes`  ";
        $result=$conn->query($query);
        $tsizes=array();
        foreach($result as $item)
        {
            $dress= new Dress;
            $dress->id=$item[0];
            ;
            array_push($tsizes,$item[0]);
            

        }
        return $tsizes;


    } catch (Exception $e) {
        throw $e;
    }



    }

  //update the picture and upload to the store
  
  public function updatePicture()

{

try {
    $conn= Config::GetConnection();
    $query="UPDATE store set picture=? WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(1,$this->picture,PDO::PARAM_STR);
    $stmt->bindParam(2,$this->id,PDO::PARAM_INT);
    
   
    $stmt->execute();
   


} catch (Exception $e) {
    throw $e;
}



}






public function Delete()

{

try {
    $conn= Config::GetConnection();
    $query="Delete from store where id=?";
    $stmt=$conn->prepare($query);
    
    $stmt->bindParam(1,$this->id,PDO::PARAM_INT);
   
    $stmt->execute();
    


} catch (Exception $e) {
    throw $e;
}



}











public static function GetCategoryTypes()

{

try {
    $conn= Config::GetConnection();
    $query= " SELECT  `DressCategory` FROM `maincategory`  ";
    $result=$conn->query($query);
    $dressTypes=array();
    foreach($result as $item)
    {
        $dress= new Dress;
        $dress->id=$item[0];
        ;
        array_push($dressTypes,$item[0]);
        

    }
    return $dressTypes;


} catch (Exception $e) {
    throw $e;
}



}

public static function GetDresses()

{

try {
    $conn= Config::GetConnection();
    $query= "SELECT `id`, `name`,`price`, `category`, `subCategory`, `color`, `size`, `quantity`, `description`, `picture` FROM `store` ";
    $result=$conn->query($query);
    $dresses=array();
    foreach($result as $item)
    {
        $dress= new Dress;
        $dress->id=$item[0];
        $dress->name=$item[1];
        $dress->price=$item[2];
        $dress->category=$item[3];
        $dress->subCategory=$item[4];
        $dress->color=$item[5];
        $dress->size=$item[6];
        $dress->quantity=$item[7];
        $dress->description=$item[8];
        $dress->picture=$item[9];
        array_push($dresses,$dress);
        

    }
    return $dresses;

} catch (Exception $e) {
    throw $e;
}


}




}





//delete method







   
    
   






?>
