<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        // Defina o número de itens por página
        $perPage = 12;
    
        // Conte o número total de registros
        $count = DB::table('alunos')->count();
    
        // Obtenha os registros da página atual
        $page = $request->input('page', 1);
        $offset = ($page - 1) * $perPage;
    
        $alunos = DB::select("SELECT ALN.IdAluno, 
        ALN.Nome, 
        ALN.Cidade, ALN.Telefone, ALN.CPF, ALN.Status
        FROM alunos ALN LIMIT $perPage OFFSET $offset");
    
        // Crie um objeto LengthAwarePaginator manualmente
        $alunos = new LengthAwarePaginator($alunos, $count, $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);
    
        // Retorne a view com os alunos paginados
        return view('cad-alunos.listagem', compact('alunos'));
    }

    public function getDadosAluno($IdAluno)
    {
        $aluno = DB::select("SELECT * FROM alunos WHERE IdAluno = :id", ['id' => $IdAluno]);
    
        if(empty($aluno)) {
            return response()->json(['error' => 'Aluno não encontrado'], 404);
        }
    
        $aluno = $aluno[0]; 
        $aluno->DataNasc = date('d/m/Y', strtotime($aluno->DataNasc));
        $aluno->NascResp = date('d/m/Y', strtotime($aluno->NascResp));
    
        return response()->json($aluno);
    }

    public function update(Request $request, $IdAluno)
    {
        // Monta a consulta SQL para atualizar os dados do aluno
        $sql = "UPDATE alunos SET Nome = :Nome, DataNasc = :DataNasc, CPF = :CPF, Sexo = :Sexo, Endereco = :Endereco, 
                Complemento = :Complemento, Bairro = :Bairro, Numero = :Numero, Cidade = :Cidade, IDUF = :IDUF, CEP = :CEP, 
                email = :email, Nacionalidade = :Nacionalidade, Naturalidade = :Naturalidade, NomeMae = :NomeMae, 
                NomePai = :NomePai, RG = :RG, OrgaoRG = :OrgaoRG, Telefone = :Telefone, Obs = :Obs, Responsavel = :Responsavel, 
                NascResp = :NascResp, NaturalidadeResp = :NaturalidadeResp, txtcpfresponsavel = :txtcpfresponsavel, 
                RgResp = :RgResp, RgOrgaoResp = :RgOrgaoResp, MaeResp = :MaeResp, PaiResp = :PaiResp, TelefoneResp = :TelefoneResp
                WHERE IdAluno = :IdAluno";
    
        // Executa a consulta SQL bruta com os parâmetros vinculados
        DB::update($sql, [
            'IdAluno' => $IdAluno,
            'Nome' => $request->formData['Nome'],
            'DataNasc' => date('Y-m-d', strtotime(str_replace('-', '/', $request->formData['DataNasc']))),
            'CPF' => $request->formData['CPF'],
            'Sexo' => $request->formData['Sexo'],
            'Endereco' => $request->formData['Endereco'],
            'Complemento' => $request->formData['Complemento'],
            'Bairro' => $request->formData['Bairro'],
            'Numero' => $request->formData['Numero'],
            'Cidade' => $request->formData['Cidade'],
            'IDUF' => $request->formData['IDUF'],
            'CEP' => $request->formData['CEP'],
            'email' => $request->formData['email'],
            'Nacionalidade' => $request->formData['Nacionalidade'],
            'Naturalidade' => $request->formData['Naturalidade'],
            'NomeMae' => $request->formData['NomeMae'],
            'NomePai' => $request->formData['NomePai'],
            'RG' => $request->formData['RG'],
            'OrgaoRG' => $request->formData['OrgaoRG'],
            'Telefone' => $request->formData['Telefone'],
            'Obs' => $request->formData['Obs'],
            'Responsavel' => $request->formData['Responsavel'],
            'NascResp' => date('Y-m-d', strtotime(str_replace('-', '/', $request->formData['NascResp']))),
            'NaturalidadeResp' => $request->formData['NaturalidadeResp'],
            'txtcpfresponsavel' => $request->formData['txtcpfresponsavel'],
            'RgResp' => $request->formData['RgResp'],
            'RgOrgaoResp' => $request->formData['RgOrgaoResp'],
            'MaeResp' => $request->formData['MaeResp'],
            'PaiResp' => $request->formData['PaiResp'],
            'TelefoneResp' => $request->formData['TelefoneResp']
        ]);
    
        // Retorna uma resposta JSON indicando sucesso
        return response()->json(['message' => 'Aluno atualizado com sucesso'], 200);
    }
    
    
}
