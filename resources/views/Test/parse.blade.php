<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing</title>
</head>
<body>
    <table border="2" style="border-collapse: separate; border-spacing: 1rem">
        {{-- <thead>
            <th>Name</th>
            <th>Photo</th>
            <th>Alt</th>
        </thead> --}}
        <tbody>
            @if (count($res))
            
                @foreach ($res as $e)
                    <tr>
                        <td><img src="{{$e->src}}" alt="photo"/></td>
                        
                    </tr>
                @endforeach  
            @endif
            
        </tbody>
    </table>
</body>
</html>