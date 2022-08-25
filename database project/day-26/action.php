<?php

require_once "vendor/autoload.php";
use App\classes\Product;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['page'] == 'all-product')
    {
        $product = new Product();
        $products = $product->allNewProduct();
        include 'pages/all-product.php';
    }
    elseif ($_GET['page'] == 'edit')
    {
        $product = new Product();
        $singleProduct = $product->getProductById($_GET['id']);
        include 'pages/edit.php';
    }
}

 elseif (isset($_POST['submit_btn']))
     {
         $product = new Product($_POST, $_FILES);
         $message = $product->newProduct();
         include 'pages/home.php';

     }
  elseif (isset($_POST['update_btn']))
     {
         $product = new Product($_POST, $_FILES);
         $message = $product->updateProduct();
         $products = $product->allNewProduct();
        include 'pages/all-product.php';

     }

























//    elseif ($_GET['page'] == 'all-student')
//    {
//        $student = new Student();
//        $students = $student->getAllStudent();
//        include 'pages/all-student.php';
//    }
// elseif ($_GET['page'] == 'edit')
//    {
//        $student = new Student();
//        $singleStudent = $student->getStudentById($_GET['id']);
//        include 'pages/edit.php';
//    }
//
//}
//elseif (isset($_POST['submit_btn']))
//{
//    $student = new Student($_POST, $_FILES);
//   $message= $student->newStudent();
//    include 'pages/home.php';
//}
//elseif (isset($_POST['update_btn']))
//{
//    $student = new Student($_POST, $_FILES);
//     $student->updateStudent();
//}