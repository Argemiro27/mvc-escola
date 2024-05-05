<!-- listagem.blade.php -->
@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/alunos/openModal.js') }}"></script>

    <h2 class="mb-3">Listagem de alunos</h2>
    <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-font btn-success">
            <i class="bi bi-plus"></i> ADICIONAR ALUNO</button>
    </div>
    <div class="table-responsive">

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Classe</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alunos as $aluno)
                    <tr>
                        <td>
                            <button type="button" class="btn-action btn-success btn-sm editar-aluno btnOpenModal"
                                data-idaluno="{{ $aluno->IdAluno }}" data-toggle="modal" data-placement="top"
                                title="Editar">
                                <i class="bi bi-pencil-fill icon-edit"></i>
                            </button>


                            <button href="#" class="btn-action btn-danger btn-sm" data-toggle="tooltip"
                                data-placement="top" title="Remover">
                                <i class="bi bi-trash-fill icon-trash"></i>
                            </button>
                            {{-- <button href="#" class="btn-action btn-info btn-sm" data-toggle="tooltip"
                                data-placement="top" title="Anexar Arquivo">
                                <i class="bi bi-paperclip bi-icon-clip"></i>
                            </button> --}}
                            <button href="#" class="btn-action btn-info btn-sm " data-toggle="tooltip"
                                data-placement="top" title="Baixar PDF">
                                <i class="bi bi-file-earmark-fill icon-print"></i>
                            </button>
                        </td>
                        <td>{{ $aluno->IdAluno }}</td>
                        <td>{{ $aluno->Nome }}</td>
                        <td>{{ $aluno->Cidade }}</td>
                        <td>{{ $aluno->CEP }}</td>
                        <td>{{ $aluno->Status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="paginacao">
        {{ $alunos->links() }} <!-- Aqui estão os links de paginação -->
    </div>

    <!-- Incluindo o modal -->
    @include('cad-alunos.create-edit.modal-aluno')
@endsection
