
<script src="{{ asset('js/alunos/putAluno.js') }}"></script>

@foreach ($alunos as $aluno)

<div class="modal fade" id="yourModal{{ $aluno->IdAluno }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel">Editar Aluno</h4>
                <button 
                type="button" 
                class="btn btn-success w-25 btnSaveAluno" 
                data-idaluno="{{ $aluno->IdAluno }}" 
                data-dismiss="modal"><span aria-hidden="true">SALVAR</span></button>
            </div>
            <div class="modal-body">
                <form>

                    <!-- Abas -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="aluno-tab" data-toggle="tab" href="#aluno" role="tab"
                                aria-controls="aluno" aria-selected="true">Dados do Aluno</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="responsavel-tab" data-toggle="tab" href="#responsavel"
                                role="tab" aria-controls="responsavel" aria-selected="false">Dados do
                                Responsável</a>
                        </li>
                    </ul>

                    <!-- Conteúdo das abas -->
                    <div class="tab-content" id="myTabContent">

                        @include('cad-alunos.create-edit.dados-aluno.index')

                        @include('cad-alunos.create-edit.dados-funcionario.index')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach