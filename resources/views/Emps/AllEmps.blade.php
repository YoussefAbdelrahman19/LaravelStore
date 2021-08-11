<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>


    <div class="row p-5 m-1">
<p class="text-danger col">These are all emps in the project</p>
<h1 class='text-info col'>All Emps here below</h1>
</div>
<h2>{{$emps->Name}} has id equals {{$emps->Id}} and Salary equals {{$emps->Salary}}</h2> 
<script src="bootstrap.min.js"></script>
    
</body>
</html>