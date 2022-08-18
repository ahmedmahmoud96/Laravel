<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    @if(Session::has('Succ'))
        <div class="alert alert-success" role="alert">
            {{Session::get('Succ')}}
        </div>
    @endif
<a class="mt-5" href="{{route('off.create')}}">Add Offer</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Detils</th>
        </tr>
        </thead>
        <tbody>
      @foreach($users as $user)
          <tr>
              <td>{{$user->name}}</td>
              <td>{{$user->price}}</td>
              <td>{{$user->detils}}</td>
          </tr>
      @endforeach
        </tbody>
    </table>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
