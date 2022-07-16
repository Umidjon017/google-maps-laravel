<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <form action="{{ route('gmaps.store') }}" method="POST">
            {{-- @method('POST') --}}
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">City</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" placeholder="City">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Lat</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="lat" placeholder="Lat">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Lng</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="lng" placeholder="Lng">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>