@extends('layouts.app')

@section('title','Editar curso')


@section('content')
   <!-- On tables -->
   <div class="container mt-5">
        <h1> Crie um novo curso</h1>
        <hr>
        <form action="{{ route('cursos-update',['id'=>$cursos->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" value="{{ $cursos->nome }}" name="nome" placeholder="Digite o nome do curso"> 
                    <br>

            </div>

            <div class="form-group">
                <label for="Professor">Professor:</label>
                <input type="text" class="form-control" value="{{ $cursos->professor }}" name="professor" placeholder="Digite o nome do Professor"> 

                    <br>

            </div>

            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" class="form-control" value="{{ $cursos->ano }}" name="ano" placeholder="Digite o ano de lançamento do curso">

                    <br>

            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" value="{{ $cursos->valor }}" name="valor" placeholder="Digite o valor do curso (Em R$)">

                <br>

            </div>


            <div class="form-group">

                <input type="submit" name="submit" class="btn btn-success" value="Atualizar">

            </div>
                
            </div>
        </form>
   </div>
@endsection