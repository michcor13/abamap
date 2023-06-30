<!DOCTYPE html>
<html>

<head>
    <title>Contacto Abamap</title>
</head>

<body>

    <h1>Contacto Abamap</h1>
    <p>Materiales de interés:</p>
    <ol class="list-group list-group-numbered">
        @foreach ($mailData['material'] as $material)
        <li class="list-group-item">{{$material}}</li>
        @endforeach
      </ol>
    <p>{{ $mailData['body'] }}</p>

</body>

</html>
