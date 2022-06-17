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
</head>

<body>
    <div class="container mt-5">
        <!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif -->

        <form autocomplete="off" class="form text-center border " id="formLogin" action="{{route('caculator.post')}}"
            method="POST">
            <h4>Tính Toán</h4>
            <br>
            <br>
            <br>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="row">


                <div class="col-6">
                    <div class="form-group text-center ">
                        <label for="uname1">A</label>
                        <input class="form-control text-center" id="a" name="a" type="text" value="{{isset($a)?$a:''}}"
                            placeholder="">
                        <span>{{$errors->first('a')}}</span>
                    </div>
                    <div class="form-group">
                        <label>B</label>
                        <input name="b" class="form-control text-center" id="pwd1" value="{{isset($b)?$b:''}}"
                            placeholder="">
                        <span>{{$errors->first('b')}}</span>

                    </div>


                </div>
                <div class="col-6">

                    <div class="form-check text-start">
                        <input type="radio" class="form-check-input" id="check1" name="option" value="+">
                        <label class="form-check-label" for="check1">Cộng</label>
                    </div>
                    <div class="form-check text-start">
                        <input type="radio" class="form-check-input" id="check2" name="option" value="-">
                        <label class="form-check-label" for="check2">Trừ</label>
                    </div>
                    <div class="form-check text-start">
                        <input type="radio" class="form-check-input" id="check3" name="option" value="*">
                        <label class="form-check-label" for="check3">Nhân</label>
                    </div>
                    <div class="form-check text-start">
                        <input type="radio" class="form-check-input" id="check4" name="option" value="/">
                        <label class="form-check-label" for="check4">Chia</label>
                    </div>

                    <label class="label"></label>


                </div>

            </div>
            <div class="form-group">
                <label>Kết quả</label>
                <input class="form-control text-center" id="pwd1" value="{{isset($kq)?$kq:''}}">
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>

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