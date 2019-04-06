<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
    <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Cliente</th>
        <th>Documentos</th>
        <th>Enviado em</th>
        <th colspan="2">Status</th>
        <th colspan="2"> Data Status </th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['nome']}}</td>
        <td>{{$post['documentos']}}</td>
        <td> {{$post['created_at']}}</td>
        <td> 
            @if($post['status'] =='Aguardando Documento'  )
              <a class="btn btn-danger" style="font-size: 12px">{{$post['status']}} !</a>
            @else
              <a class="btn btn-success" style="font-size: 12px">{{$post['status']}} !</a>
            @endif
            </td>
        <td> {{$post['updated_at']}}</td>
        </td>
        <td> 

          <form action="/crud/{{$post['id']}}" method="post">
           <input  type="submit" name="Aprovar" value="aprovar" class="btn btn-success">
        Ou 

        <input  type="submit" name="Reprovar" value="Reprovar" class="btn btn-success">
      

         </form>
          <!-- <a href="{{action('CRUDController@update', $post['id'])}}" class="btn btn-success">Aprovar
        </a> Ou 

        <a href="{{action('CRUDController@update', $post['id'])}}"  class="btn btn-success">Reprovar
        </a>
          -->
      </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
