<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        $alunos = Alunos::paginate(12);
        return view('cad-alunos.listagem', compact('alunos'));
    }
    public function getDadosAluno($IdAluno)
    {
        $aluno = Alunos::find($IdAluno);
        if(!$aluno) {
            return response()->json(['error' => 'Aluno não encontrado'], 404);
        }
        return response()->json($aluno);
    }

    public function update(Request $request, $IdAluno)
    {
        $aluno = Alunos::find($IdAluno);
    
        if (!$aluno) {
            return response()->json(['error' => 'Aluno não encontrado'], 404);
        }
    
        // Atualize os atributos do aluno com base nos dados do Request
        $aluno->Nome = $request->formData['Nome'];
        $aluno->DataNasc = $request->formData['DataNasc'];
        $aluno->CPF = $request->formData['CPF'];
        $aluno->Sexo = $request->formData['Sexo'];
        $aluno->Endereco = $request->formData['Endereco'];
        $aluno->Complemento = $request->formData['Complemento'];
        $aluno->Bairro = $request->formData['Bairro'];
        $aluno->Numero = $request->formData['Numero'];
        $aluno->Cidade = $request->formData['Cidade'];
        $aluno->IDUF = $request->formData['IDUF'];
        $aluno->CEP = $request->formData['CEP'];
        $aluno->email = $request->formData['email'];
        $aluno->Nacionalidade = $request->formData['Nacionalidade'];
        $aluno->Naturalidade = $request->formData['Naturalidade'];
        $aluno->NomeMae = $request->formData['NomeMae'];
        $aluno->NomePai = $request->formData['NomePai'];
        $aluno->RG = $request->formData['RG'];
        $aluno->OrgaoRG = $request->formData['OrgaoRG'];
        $aluno->Telefone = $request->formData['Telefone'];
        // $aluno->Status = $request->formData['Status'];
        // $aluno->Obs = $request->formData['Obs'];
        // $aluno->Responsavel = $request->formData['Responsave'];
        // $aluno->NascResp = $request->formData['NascResp'];
        // $aluno->NaturalidadeResp = $request->formData['NaturalidadeResp'];
        // $aluno->CPFResp = $request->formData['CPFResp'];
        // $aluno->RgResp = $request->formData['RgResp'];
        // $aluno->RgOrgaoResp = $request->formData['RgOrgaoResp'];
        // $aluno->MaeResp = $request->formData['MaeResp'];
        // $aluno->PaiResp = $request->formData['PaiResp'];
        // $aluno->TelefoneResp = $request->formData['TelefoneResp'];
    
        // Salve as alterações
        $aluno->save();
    
        return response()->json(['message' => 'Aluno atualizado com sucesso'], 200);
    }
    
    
}
