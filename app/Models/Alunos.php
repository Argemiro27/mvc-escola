<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'IdAluno';
    public $timestamps = false;

    protected $fillable = [
        'Nome',
        'DataNasc',
        'Endereco',
        'Bairro',
        'Cidade',
        'IDUF',
        'CEP',
        'Responsavel',
        'CPF',
        'RG',
        'OrgaoRG',
        'Nacionalidade',
        'Naturalidade',
        'NaturalidadeUF',
        'Telefone',
        'Recado',
        'txtcontato',
        'Celular',
        'TelComercial',
        'chkestudante',
        'cboescola',
        'chktrabalha',
        'txtlocaltrabalho',
        'optpromocao',
        'cboprom',
        'HorarioFixo',
        'chkindicacao',
        'cboaluno',
        'cbofuncionario',
        'cbotipocaptacao',
        'txtcpfresponsavel',
        'email',
        'Comportamento',
        'IdEscola',
        'Status',
        'UFRG',
        'Sexo',
        'NomeMae',
        'NomePai',
        'EstadoCivil',
        'Profissao',
        'Provincia',
        'Pais',
        'NaturalidadeResp',
        'NaturalidadeRespUF',
        'EscolaridadeResp',
        'ProfissaoResp',
        'EnderecoResp',
        'TelefoneResp',
        'RgResp',
        'RgDataResp',
        'RgOrgaoResp',
        'RgUfResp',
        'PaiResp',
        'MaeResp',
        'ConjResp',
        'NascResp',
        'IdInteressado',
        'FlagAvalia',
        'EmiteCorresp',
        'EnviaEmail',
        'EnviaTorpedo',
        'IdFoto',
        'Numero',
        'Complemento',
        'CelularResp',
        'PossuiCPFRESP',
        'FuncCons',
        'DataCons',
        'CodCons',
        'SituacaoCons',
        'Obs',
        'Qte_Negociacoes',
        'Envio_Judicial',
        'Envio_SPC',
        'PrefixoEnd',
        'SPC',
        'NUMERO_CARTAO',
        'Cod_Cli_Asaas',
        'PossuiCpf'
    ];

    protected $casts = [
        // Defina a conversão de tipos para campos específicos, se necessário
    ];
}
