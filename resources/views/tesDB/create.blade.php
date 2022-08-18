<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <a href="{{route('off.index')}}">Back</a>
    <form action="{{route('off.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text"  name="name"  class="form-control" >
            @error('name')
            <small class=" alert-danger" role="alert">
                {{$message}}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text"  name="price"  class="form-control" >
            @error('price')
            <small class="alert-danger" >
                {{$message}}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Detils</label>
            <input type="text"  name="detils"  class="form-control" >
            @error('detils')
            <small class=" alert-danger" role="alert">
                {{$message}}
            </small>
            @enderror
        </div>

        <div class="mb-3">
            <input type="submit"  value="Send"  class="btn btn-danger" >
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
