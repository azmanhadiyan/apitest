<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Platform</th>
                    <th scope="col">Release</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($data as $dataGame)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $dataGame['name'] }}</td>
                    <td>{{ $dataGame['genre'] }}</td>
                    <td>{{ $dataGame['platform'] }}</td>
                    <td>{{ $dataGame['release'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </tbody>
        </table>
    </div>
</body>

</html>
