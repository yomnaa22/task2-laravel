<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">

</head>
<body>
    <p>Create Category page</p>
    <!-- <form method="POST" action="{{  route('categories.save') }}">
    @csrf
        Name: <input type="text" name="name">
        
        <button>Submit</button>
    </form> -->

    <form method="POST" action="{{  route('categories.save') }}" >
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    
    <input type="text"  name="name" class="form-control"  aria-describedby="emailHelp">
    @if($errors->has('name'))
    <div class="error text-danger">{{ $errors->first('name') }}</div>
@endif



  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description</label>
    
    <input type="text" class="form-control" name="description">

    @if($errors->has('description'))
    <div class="error text-danger">{{ $errors->first('description') }}</div>
@endif
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>

 
</form>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>