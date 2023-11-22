<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container m-5">
        <h1>
            i miei treni
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario partenza</th>
                    <th scope="col">Orario arrivo</th>
                    <th scope="col">Numero di carrozze</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $train->Azienda }}</td>
                        <td>{{ $train->Stazione_di_partenza }}</td>
                        <td>{{ $train->Stazione_di_arrivo }}</td>
                        <td>{{ $train->Orario_di_partenza }}</td>
                        <td>{{ $train->Orario_di_arrivo }}</td>
                        <td>{{ $train->Numero_di_carrozze }}</td>


                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>
