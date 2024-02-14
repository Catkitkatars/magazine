<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($objects as $object):
        <div>
            <ul>
                <li>{{ $object->id }}</li>
                <li>{{ $object->title }}</li>
                <li>{{ $object->description }}</li>
                <li>{{ $object->price }}</li>
            </ul>
        </div>
    @endforeach
    
</body>
</html>