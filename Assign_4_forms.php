<!DOCTYPE html>

<html lang = "en">

<head>

  <meta charset="utf-8">
  <title> Assign_4_Part_1 </title>
  <style type = "text/css">

  div {
    font-family:
    <?php
      $font = "";
      if($_POST["font-family"] === "sans-serif font"){
        $font = "sans-serif";
      }elseif ($_POST["font-family"] === "serif font"){
        $font = "serif";
      }else{
        $font = "Comic Sans MS";
      }
      print $font; 
    ?>;

    color:
    <?php
      $color = "";
      if($_POST["font-color"] === "black"){
        $color = "#080808";
      }elseif ($_POST["font-color"] === "blue"){
        $color = "#0000CC";
      }else{
        $color = "#009900";
      }
      print $color; 
    ?>;

    font-size:
    <?php
      $size = "";
      if($_POST["size"] === "normal"){
        $size = "16px";
      }elseif ($_POST["size"] === "large-print"){
        $size = "32px";
      }else{
        $size = "8px";
      }
      print $size;
    ?>;

    width: 600px;

  </style>

</head>

<body>

<h1>Here's Your Paragraph:</h1>

<div> <?php print $_POST["textInput"] ?> </div>



</body>

</html>
