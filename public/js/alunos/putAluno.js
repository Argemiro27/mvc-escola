$(document).on("click", ".btnSaveAluno", function (e) {
  e.preventDefault();
  var alunoId = $(this).data("idaluno");

  var formData = {
    IdAluno: $("#inputIdAluno").val(),
    Nome: $("#inputNome").val(),
    DataNasc: $("#inputDataNasc").val(),
    CPF: $("#inputCpf").val(),
    Sexo: $("#inputSexo").val(),
    Endereco: $("#inputEndereco").val(),
    Complemento: $("#inputComplemento").val(),
    Bairro: $("#inputBairro").val(),
    Numero: $("#inputNumCasa").val(),
    Cidade: $("#inputCidade").val(),
    IDUF: $("#inputIDUF").val(),
    CEP: $("#inputCep").val(),
    email: $("#inputEmail").val(),
    Nacionalidade: $("#inputNacionalidade").val(),
    Naturalidade: $("#inputNaturalidade").val(),
    NomeMae: $("#inputMae").val(),
    NomePai: $("#inputPai").val(),
    RG: $("#inputRG").val(),
    OrgaoRG: $("#inputOrgaoRG").val(),
    Telefone: $("#inputTelefone").val(),
    Status: $("#inputStatus").val(),
    Obs: $("#inputObs").val(),
    Responsavel: $("#inputResponsavel").val(),
    NascResp: $("#inputDatNascResp").val(),
    NaturalidadeResp: $("#inputNaturalidadeResp").val(),
    txtcpfresponsavel: $("#inputCpfResp").val(),
    RgResp: $("#inputRGResp").val(),
    RgOrgaoResp: $("#inputOrgaoRGResp").val(),
    MaeResp: $("#inputNomMaeResp").val(),
    PaiResp: $("#inputNomPaiResp").val(),
    TelefoneResp: $("#inputTelefoneResp").val()
    
  };
  console.log("Dados do formulário:");
  console.log(formData);
  // Enviar os dados para o backend usando AJAX
  $.ajax({
    url: "/alunos/" + alunoId,
    type: "PUT",
    data: { formData, _token: $('meta[name="csrf-token"]').attr("content") },
    dataType: "json",
    success: function (response) {
      // Exibir mensagem de sucesso
      console.log(response.message);
    },
    error: function () {
      // Exibir mensagem de erro
      console.error("Erro ao salvar o aluno.");
    },
  });
});
