<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "{{ asset('custom/css/table-style.css') }}">
  <link rel="stylesheet" href = "{{ asset('custom/css/menu.css') }}">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/createArticle">Create article</a>
    <a class="navbar-brand btn btn-primary text-white" href="/list2">Categories</a>


  </div>
</nav>

<h3>Hello {{ auth()->user()->name }}</h3>


  @foreach ($articles as $article)

  <div class=" display-inline border py-5 px-5">

 
    <h3>{{ $article->id }} . {{ $article-> name }} </h3>
    <p class=" text-secondary">{{$article-> details}}</p>
    
   <span> <a href="/showArticle/{{ $article-> id }}" class="btn btn-success">show </a></span>
   <span> <a href="/editArticle/{{ $article -> id }}" class="btn btn-primary">edit </a></span>

   <form method="post" class="delete_form d-inline "  action="{{ route('articles.delete', ['id' => $article->id]) }}">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

</div>

  
  @endforeach


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>