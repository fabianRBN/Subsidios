<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
       
        <div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Catálogo de estados de clientes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('estado.create') }}" class="btn btn-info" >Añadir estado</a>
            </div>
          </div>
          <div class="table-container">
            <h1>{{$data}} </h1>
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Resumen</th>               
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($estados->count())  
              @foreach($estados as $estado)  
              <tr>
                <td>{{$estado->titulo}}</td>
                <td>{{$estado->descripcion}}</td>
                
                <!--
                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>-->
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
      {{ $libros->links() }}
    </div>
  </div>
</section>
    </body>
</html>