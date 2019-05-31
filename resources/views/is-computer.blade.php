<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel</title>

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<div class="jumbotron">
   <h1 class="display-4 text-center mb-5">Is a Laptop?</h1>
   <p class="lead text-center">This is a simple api that takes an image as a parameter and checks if it resembles a laptop</p>
</div>
<div class="container">
   <div class="row">
      <form method="POST" action="/isComputer">
         @csrf
         <input type="file" name="image">
         <button class="btn btn-primary" type="submit">Submit</button>
      </form>
   </div>
</div>
</body>
</html>
