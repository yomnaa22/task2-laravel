<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
</head>
<body>
<form method="POST"   action="{{ route('articles.saveEditArticle', ['id' => $article->id]) }}">

    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    
    <input type="text"  name="name" value="{{ $article-> name }}"class="form-control"  aria-describedby="emailHelp">
    @if($errors->has('name'))
    <div class="error text-danger">{{ $errors->first('name') }}</div>
@endif
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">details</label>
    
    <input type="text" class="form-control" value="{{ $article-> details }}" name="details">
    @if($errors->has('details'))
    <div class="error text-danger">{{ $errors->first('details') }}</div>
@endif
  </div>
  



  <div class="mb-3">
    <label for="details" class="form-label">slug</label>
    
    <input type="text" class="form-control" name="slug" value="{{ $article ->slug}}" >
    @if($errors->has('slug'))
    <div class="error text-danger">{{ $errors->first('slug') }}</div>
@endif
  </div>

  <div class="mb-3">
    <label for="details" class="form-label">is_used</label>
    
    <input type="text" class="form-control" name="is_used" value="{{ $article ->is_used}}">
 
  </div>

  <div class="mb-3">
    <label for="category_id" class="form-label">category id</label>
    
    <input type="text" class="form-control" name="category_id" value="{{ $article ->category_id}}">
    @if($errors->has('category_id'))
    <div class="error text-danger">{{ $errors->first('category_id') }}</div>
@endif
  </div>








  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>