<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <form method="POST" action="{{route('Offer.store')}}">
     @csrf
        @if(Session::has('succ'))
            <div class="alert alert-success" role="alert">
                {{Session::get('succ')}}
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control"name="name">
            @error('name')
            <small class="alert-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text" class="form-control" name="price">
            @error('price')
            <small class="alert-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Detils</label>
            <input type="text" class="form-control" name="detils">
            @error('detils')
            <small class="alert-danger">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
