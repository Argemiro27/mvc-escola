// getter:
$(document).on("click", ".btnOpenModal", function (e) {
    e.preventDefault();

    var alunoId = $(this).data("idaluno"); // Aqui está a correção
    console.log("Botão clicado:", this);
    console.log("VALOR DO ALUNO ID VALE:",alunoId);
    $.ajax({
        url: "/alunos/" + alunoId,
        type: "GET",
        dataType: "json",
        success: function (data) {
            $("#inputIdAluno").val(data.IdAluno);
            $("#inputNome").val(data.Nome);
            $("#inputDataNasc").val(data.DataNasc);
            $("#inputCpf").val(data.CPF);
            $("#inputSexo").val(data.Sexo);
            $("#inputEndereco").val(data.Endereco);
            $("#inputComplemento").val(data.Complemento);
            $("#inputBairro").val(data.Bairro);
            $("#inputNumCasa").val(data.Numero);
            $("#inputCidade").val(data.Cidade);
            $("#inputIDUF").val(data.IDUF);
            $("#inputCep").val(data.CEP);
            $("#inputEmail").val(data.email);
            $("#inputNacionalidade").val(data.Nacionalidade);
            $("#inputNaturalidade").val(data.Naturalidade);
            $("#inputMae").val(data.NomeMae);
            $("#inputPai").val(data.NomePai);
            $("#inputRG").val(data.RG);
            $("#inputOrgaoRG").val(data.OrgaoRG);
            $("#inputTelefone").val(data.Telefone);
            $("#inputStatus").val(data.Status);
            $("#inputObs").val(data.Obs);
            $("#inputResponsavel").val(data.Responsavel);
            $("#inputDatNascResp").val(data.NascResp);
            $("#inputNaturalidadeResp").val(data.NaturalidadeResp);
            $("#inputCpfResp").val(data.txtcpfresponsavel);
            $("#inputRGResp").val(data.RgResp);
            $("#inputOrgaoRGResp").val(data.RgOrgaoResp);
            $("#inputNomMaeResp").val(data.MaeResp);
            $("#inputNomPaiResp").val(data.PaiResp);
            $("#inputTelefoneResp").val(data.TelefoneResp);
          },
        error: function () {
            console.error("Erro ao obter os dados do aluno.");
        },
    });

    // Abre o modal correspondente
    $("#yourModal" + alunoId).modal("show");

});

