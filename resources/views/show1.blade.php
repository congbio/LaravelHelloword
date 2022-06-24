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
    <div class="container">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{
                Session::get('success')
            }}
        </div>
        @endif

    </div>
    <div class="container">
        <button><a class="btn btn-success" href="{{route('cars.create')}}"> Create a Car</a></button>
        <table class="table" border="1">
            <thead>
                <tr>
                    <!-- <th scope="col">One</th> -->
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Make</th>
                    <th scope="col">Producer</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                <tr>
                    <form action="{{ route('cars.destroy',$car->id)}} " method="POST">
                        @csrf
                        @method('delete')
                        <td>{{$car->name}}</td>
                        <td><img src="/{{$car->image}}" style="width: 100px;height: 100px;" /> </td>
                        <td>{{$car->make}}</td>
                        <td>{{$car->producer->pro_name}}</td>
                        <td>
                            <a href="{{ route('cars.edit',$car->id)}}" type="button" class=" btn bg-success">Update</a>
                            <button class="btn bg-danger" onclick="return myConfirm();" type="submit">Delete</button>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
    function myConfirm() {
        var result = confirm("Want to delete?");
        if (result == true) {
            return true;
        } else {
            return false;
        }
    }
    </script>
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