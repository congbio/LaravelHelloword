<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    ::-webkit-input-placeholder { /* Edge */
  color: red;
}

:-ms-input-placeholder { /* Internet Explorer */
  color: red;
}

::placeholder {
  color: red;
}
    </style>
</head>

<body>
    <div class="container">
        <div class="card-body border border-dark text-center " >
        <h1>Create Post</h1>
 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form autocomplete="off" class="form" id="formLogin" action= "{{route('gpt.post')}}" method = "POST">
                <h4>Giải phương trình bậc nhất</h4>
                <h4>ax + b = 0</h4>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="form-group " >
                    <label for="uname1">A</label>
                    <input class="form-control text-center"  class="@error('a', 'post') is-invalid @enderror" id="a" name="a" type="text" value ="{{isset($a)?$a:''}}" placeholder="{{$errors->first('a')}}">
                </div>
                <div class="form-group">
                    <label>B</label>
                    <input  name="b" class="form-control text-center" id="pwd1" value ="{{isset($b)?$b:''}}" placeholder="{{$errors->first('b')}}">
                </div>
                <div class="form-group">
                    <label>Kết quả</label>
                    <input  class="form-control text-center" id="pwd1" value="{{isset($kq)?$kq:''}}"  >
                </div>
                
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>