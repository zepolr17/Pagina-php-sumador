
<?php
include_once 'sumar';
class procesador{
    function procesar(){
        $a=$_REQUEST["a"];
        $b=$_REQUEST["b"];
      $misuma=new sumar($a, $b);
      for($i=0;i<$misuma;$i++){
          echo $i;
      }
      $enlace= mysqli_connect("localhost", "root", "armando99", "suma", "3306");
      $cadena= "INSERT INTO valores (a,b)VALUES('".$a."','".$b."')";
      mysqli_query($enlace, $cadena);
    }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

