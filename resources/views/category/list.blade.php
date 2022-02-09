<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/create">Create Category</a>
    <a href="{{ route('login') }}"> login</a>
    <a href="{{ route('register') }}"> register</a>

    <a class="navbar-brand btn btn-danger text-white" href="/articles">All articles</a>

  </div>
</nav>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)

  <tr>
    
      <td>{{ $category->id }}</td>
      <td>{{ $category-> name }}</td>
      <td>{{$category-> description }}</td>
   <td>
   <span> <a href="/show/{{ $category -> id }}" class="btn btn-success">show </a></span>
   <span> <a href="/edit/{{ $category -> id }}" class="btn btn-primary">edit </a></span>
   
   <!-- <span><a href="/delete/{{ $category -> id }}" class="btn btn-danger">Delete </a></span> -->
   <form method="post" class="delete_form d-inline "  action="{{ route('categories.delete', ['id' => $category->id]) }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
   </td>
 

</tr>
  @endforeach


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>