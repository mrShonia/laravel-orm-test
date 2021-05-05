<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add flight</title>
</head>
<body>


@if(isset($edit_resource))
    <form action="/update-flights" method="post">
@else
    <form action="/add-flights" method="post">
@endif

    <label for="description">Description</label>
    <input id="description" type="text" @isset($edit_resource) value="{{$edit_resource->description}}" @endisset name="description">
    <br>
    @csrf

    <label for="from">From</label>
    <input id="from" type="text" @isset($edit_resource) value="{{$edit_resource->from}}" @endisset name="from">
    <br>

    <label for="to">To</label>
    <input id="to" type="text" @isset($edit_resource) value="{{$edit_resource->to}}" @endisset name="to">
    <br>

    <label for="when">When</label>
    <input id="when" type="datetime-local" @isset($edit_resource) value="{{$edit_resource->when}}" @endisset name="when">
    <br>

    @if(isset($edit_resource))
        <input type="hidden" value="{{$edit_resource->id}}" name="id">
        <button>Update</button>
    @else
        <button>Save</button>
    @endif

</form>


<hr>

@foreach($flights as $flight)
    <div style="border: 1px solid black; padding:10px;">
        {{$flight->description}}
        {{$flight->from}} - {{$flight->to}}
        {{$flight->when}}
        <br>
        <a href="/delete-flight/{{$flight->id}}">Delete</a>
        <a href="/edit-flight/{{$flight->id}}">Edit</a>
    </div>
    @endforeach

</body>
</html>
