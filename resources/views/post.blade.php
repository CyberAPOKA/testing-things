<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">


    <h1>add new post</h1>
    <form action="post" method="post">
        @csrf
        <input type="text" class="form-control" name="title" placeholder="title"><br>
        <input type="text" class="form-control" name="author" placeholder="author"><br>
        <textarea name="body" id="body" cols="55" rows="10" placeholder="body"></textarea><br>
        <button type="submit" class="btn btn-primary">Post</button>
    </form>
            </div>
        </div>
    </div>

<!-- Javascript Requirements -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\PostRequest') !!}
</body>
</html>
