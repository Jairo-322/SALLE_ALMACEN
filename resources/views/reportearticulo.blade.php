<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Reporte Articulo</title> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
            margin: 0; 
            padding: 0; 
        } 
        header { 
            text-align: center; 
            margin: 0; 
            padding-top: 0; 
            padding-bottom: 0; 
        } 
        header img { 
            width: 110px; 
            height: 50px; 
            vertical-align: middle; 
        } 
        header h3 { 
            display: inline; 
            margin-left: 10px; 
            vertical-align: middle; 
        } 
        table { 
            border-collapse: collapse; 
            width: 100%; 
            margin: 0 auto; 
            border: 1px solid black; 
        } 
        .table2 { 
            border-collapse: collapse; 
            width: 80%; 
            margin: 10; 
            border: none; 
        } 
        .th2, .td2 { 
            border: none; 
            padding: 8px; 
            text-align: center; 
        } 
        th, td { 
            border: 1px solid black; 
            padding: 1px 4px; /* Reducir el padding para ajustar contenido */ 
            text-align: center; 
            margin: 0; 
        } 
        th { 
            background-color: #f2f2f2; 
        } 
        .text-left { 
            text-align: left; 
        } 
        .text-center { 
            text-align: center; 
        } 
        footer { 
            text-align: center; 
            margin-top: 50px; 
        } 
        .container { 
            position: relative; 
        } 
        .card-body { 
            margin-top: 0; 
            padding-top: 0; 
        } 
        .footer-text { 
            position: fixed; 
            bottom: 0; 
            width: 100%; 
            text-align: center; 
            padding-bottom: 10px; 
        } 
    </style> 
</head> 
<body> 
    <header> 
        <table class="table2"> 
            <tr class="tr2"> 
                <td class="td2" style="width: 15%;">
                    <img src="vendor/adminlte/dist/img/logosalle6.png" alt="La Salle Logo" width="110px" height="50"></td> 
                <td class="td2">
                    <div class="header-text" style="text-align: center">
                        <h3 style="font-size: 20px;">Instituto de Educación Superior Público</h3>
                        <br>
                        <h3 style="font-size: 24px;">La Salle</h3>
                    </div>
                </td> 
            </tr> 
        </table> 
        <hr style="margin-top: 0;"> 
    </header> 
    <section> 
        <div class="container"> 
            <div class="card-body"> 
                <h2 style="text-align: center; margin-top: 0;">Lista de Articulos</h2> 
                <h3>Reporte desde {{ request('fecha_salida') }} hasta {{ request('fecha_retorno') }}</h3>
                <table>
                    <thead>
                        <tr>
                            <th style="width: 5%;">Id</th>  
                            <th>Nombre Articulo</th> 
                            <th>Marca</th> 
                            <th>Descripcion</th>
                            <th>Stock</th>
                            <th>Estado</th> 
                            <th>Fecha Creacion</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nombre_articulo}}</td>
                                <td>{{ $item->marca }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->stock }}</td>
                                <td>{{ $item->estado }}</td>
                                <td>{{ $item->fecha_creacion }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <div
            class="footer-text"> 
                <hr> 
                <p>Responsable de Sistema de Información SISGA 2024 &copy;</p> 
            </div> 
        </div> 
    </section> 
</body> 
</html>