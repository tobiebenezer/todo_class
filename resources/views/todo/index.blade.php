<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <section class="container mx-auto mt-4"> 

        @if (session('error'))
           <div class="alert alert-danger">
            {{ session('error') }}
           </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mx-auto p-2"  style="width: 30rem;">
            <div class="card-title mx-auto">
                <form action="{{ route('store.todo') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">New Todo</label>
                        <input type="text" name="todo" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="done_status" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Done</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="card-body ">
                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item d-inline-flex justify-content-between align-items-center">
                            <span class='text-md'>{{ __($todo->todo) }}</span>
                            <span>
                                <input type="checkbox"  @if($todo->done_status) checked @endif />
                                <a class="btn btn-primary" href="{{ route('show',$todo->id) }}">Edit</a>
                                <form class="d-inline" action="{{ route('destroy.todo',$todo->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </span>
                        </li>
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>