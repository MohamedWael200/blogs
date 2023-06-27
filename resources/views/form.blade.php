<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login & Registration Form | Codehal</title>
    <link rel="stylesheet" type="text/css" href="{{asset('style/form.css')}}">
</head>

<body>

<div class="wrapper">
    <div class="form-wrapper sign-in">
        <form method="POST" action="{{route('store')}}">
            @csrf
            <h2>Add Post</h2>
            <div class="input-group">
                <input type="text" required name="title">
                <label for="">Summary</label>
            </div>
            <div class="input-group">
                <textarea type="text" required class="textarea" placeholder="Enter Post Content" name="contents"></textarea>
                <label for="">Post</label>
            </div>

            <label for="cars" class="labSelect">Choose Category :</label>
            <select name="categories_id" id="category" class="select">
                @foreach($categoryName as $category)
                <option value="{{$category->id}}">
                    {{$category->category}}
                </option>
                @endforeach
            </select>

            <button type="submit">ADD</button>

        </form>
    </div>

</div>

<script src="{{asset('script/form.js')}}"></script>
</body>

</html>
