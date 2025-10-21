<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link  href="{{ asset('/style/bootstrap.min.css') }}" rel="stylesheet" />
        
    </head>
    <body>
        <div class="container shadow mt-4 p-4">
            <h1>Hello World!</h1>
            @if (session("success"))
                <div class="alert alert-success">
                    {{ session("success") }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST">
                @csrf
                <input 
                class="form-control"
                name="category_name"
                placeholder="Category Name"
                value="{{ old('category_name') }}"
                />
                <button class="btn btn-primary my-2">
                    Submit
                </button>
            </form>

            <div class="my-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                            <tr>
                                <td>{{  $loop->index + 1 }} </td>
                                <td>{{  $data->category_name }} </td>
                                <td>
                                    <a href="category/{{  $data->id }}">Update</a>
                                    <a href="category/{{  $data->id }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
