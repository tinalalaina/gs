<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<div class="row"> <div class ="col-3"> <div class ="divbar bg-dark"> <ul class ="div divbar-div"> <li class ="div-item"> <a class ="div-link" href="#"> Home </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Services </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Contact </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Blogs </a> </li> </ul> </div> </div> <div class="col-9"> The Web Content in detail. </div> </div>

How to Create Vertical Menu?

Below we will learn about how to create the vertical menu:

Example #1

The basic vertical menu in bootstrap is only based on .div class. In the <ul> tag, class “div divbar-div” helps to make menu bar vertical.

Code:

<!DOCTYPE> <html> <head> <title> Vertical Menu </title> <meta name ="viewport" content ="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> </head> <body> <div class ="divbar bg-dark"> <ul class ="div divbar-div"> <li class ="div-item"> <a class ="div-link" href="#"> Home </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Services </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Contact </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Blogs </a> </li> </ul> </div> <div class ="container"> <p> The vertical menu can place the left or right side of the web pages. <br> But the default vertical menu placed on the left side. </P> </div> </body> </html>

Output:

￼

Explanation: The Default vertical menu in bootstrap takes space otherwise we need to use collapse class. To overcome this drawback bootstrap use a grid system. It works responsively as well as fixed in vertical and manages the space of the web page.

Example #2

To understand more about vertical bar show the following example.

Code:

<!DOCTYPE> <html> <head> <title> Vertical Menu </title> <meta name ="viewport" content ="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> </head> <body> <div class="row"> <div class="col-3"> <div class ="divbar bg-dark"> <ul class ="div divbar-div"> <li class ="div-item"> <a class ="div-link" href="#"> Home </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Services </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Contact </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Blogs </a> </li> </ul> </div> </div> <div class="col-9"> <div class="container"> The Web Content in detail. </div> <div class ="container"> <p> The vertical menu can place the left or right side of the web pages. <br> But the default vertical menu placed on the left side. </P> </div> </div> </div> </body> </html>

Output:

￼

Explanation: We are using the above example grid system. The column divided into col-3 and col-9 sections to get the vertical bar. Vertical divbar placed in a col-3 grid and other web applications placed in a col-9 section.

Examples

Below are the examples of vertical menu:

Example #1

The basic left side vertical menu in bootstrap is below. This is the default vertical menu bar created with a grid system.

Code:

<!DOCTYPE> <html> <head> <title> Vertical Menu </title>
 <meta name ="viewport" content ="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> </head> <body> <div class="row"> <div class="col-3"> <div class ="divbar bg-light"> <ul class ="div divbar-div"> <li class ="div-item"> <a class ="div-link" href="#"> Home </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Services </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Contact </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Blogs </a> </li> </ul> </div> </div> <div class="col-9"> <div class="container"> The Web Content in detail. </div> <div class ="container"> <p> The vertical menu can place the left or right side of the web pages. <br> But the default vertical menu placed on the left side. </P> </div> </div> </div> </body> </html>

Output:

￼

Example #2

The vertical menu is placed on the right side of the web page. After clicking on the button, the vertical menu display on the screen. This looks animated and elegant. This vertical menu is attractive and space-saving.

Code:

<!DOCTYPE> <html> <head> <title> Vertical Menu </title> <meta name ="viewport" content ="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> </head> <body> <div class="row"> <div class="col-9"> <div class="container"> The Web Content in detail. </div> <div class ="container"> <p> The vertical menu can place the left or right side of the web pages. <br> But the default vertical menu placed on the left side. </P> </div> </div> <div class="col-3"> <div class ="divbar bg-light"> <ul class ="div divbar-div"> <li class ="div-item"> <a class ="div-link" href="#"> Home </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Services </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Contact </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Blogs </a> </li> </ul> </div> </div> </div> </body> </html>

Output:

￼

Example #3

The following vertical menu is responsive using a collapse class.

Code:

<!DOCTYPE> <html> <head> <title> Vertical Menu </title> <meta name ="viewport" content ="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> </head> <body> <div class="row"> <div class="col-3"> <div class ="divbar bg-light"> <button class="divbar-toggler" type="button" data-toggle="collapse" data-target="#colp"> <span class="divbar-toggler-icon" style="background-color:darkblue;"></span> </button> <div class="collapse divbar-collapse" id="colp"> <ul class ="div divbar-div"> <li class ="div-item"> <a class ="div-link" href="#"> Home </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Services </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Contact </a> </li> <li class ="div-item"> <a class ="div-link" href="#"> Blogs </a> </li> </ul> </div> </div> </div> <div class="col-9"> <div class="container"> The Web Content in detail. </div> <div class ="container"> <p> The vertical menu can place the left or right side of the web pages. <br> But the default vertical menu placed on the left side. </P> </div> </div> </div> </body> </html>



<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>