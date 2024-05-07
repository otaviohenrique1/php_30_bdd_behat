<?php

use Alura\Armazenamento\Entity\Formacao;
use Behat\Behat\Context\Context;

class FormacaoEmMemoria implements Context
{
  private string $mensagemDeErro = '';

  /**
   * @When eu tentar criar uma formação com a descrição :arg1
   */
  public function euTentarCriarUmaFormacaoComADescricao(string $descricaoFormacao)
  {
    $formacao = new Formacao();

    try {
      $formacao->setDescricao($descricaoFormacao);
    } catch (InvalidArgumentException $exception) {
      $this->mensagemDeErro = $exception->getMessage();
    }
  }

  /**
   * @Then eu vou ver a seguinte mensagem de erro :arg1
   */
  public function euVouVerASeguinteMensagemDeErro(string $mensagemDeErro)
  {
    assert($mensagemDeErro === $this->mensagemDeErro);
    // return $mensagemDeErro === $this->mensagemDeErro;
  }
}
