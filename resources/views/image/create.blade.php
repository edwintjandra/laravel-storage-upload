<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Upload your image!</h1>


    
    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Upload your image</label>
            <input type="file" name="image">
            @error('image')
            <div style="color:red;" >{{ $message }}</div>
            @enderror
        </div>

        <button>submit</button>
    </form>

</body>
</html>