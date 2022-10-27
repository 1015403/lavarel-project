<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recipes</h2>
            </div>
{{--            <div class="pull-right">--}}
                <a class="btn btn-success" href="#"> Create New Recipe</a>
{{--            </div>--}}
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($recipes as $recipe)
            <tr>
                <td>{{ $recipe->title }}</td>
                <td>{{ $recipe->description }}</td>
                <td>{{ $recipe->author }}</td>
                <td>{{ $recipe->ingredients }}</td>
                <td>
                    <form action="{{ route('recipes.destroy',$recipe->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('recipes.show',$recipe->id) }}">Show</a>

{{--                        <a class="btn btn-primary" href="{{ route('recipes.edit',$recipe->id) }}">Edit</a>--}}

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

{{--    {!! $recipes->links() !!}--}}

</x-app-layout>

</body>
</html>
