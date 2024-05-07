<?php

use Alura\Armazenamento\Entity\Formacao;
use Alura\Armazenamento\Infra\EntitymanagerCreator;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Defines application features from the specific context.
 */
class FormacaoNoBanco implements Context
{
    private EntityManagerInterface $em;
    private int $idFormacaoInserida;

    /**
     * @Given que estou conectado ao banco de dados
     */
    public function queEstouConectadoAoBancoDeDados()
    {
        $this->em = (new EntitymanagerCreator())->getEntityManager();
    }

    /**
     * @When tento criar uma nova formação com a descrição :arg1
     */
    public function tentoCriarUmaNovaFormacaoComADescricao(string $descricaoFormacao)
    {
        $formacao = new Formacao();
        $formacao->setDescricao($descricaoFormacao);
        $this->em->persist($formacao);
        $this->em->flush();
        $this->idFormacaoInserida = $formacao->getId();
    }

    /**
     * @Then se eu buscar no banco, devo encontar essa formação
     */
    public function seEuBuscarNoBancoDevoEncontarEssaFormacao()
    {
        /** @var ObjectRepository $repositorio */
        $repositorio = $this->em->getRepository(Formacao::class);

        /** @var Formacao $formacao */
        $formacao = $repositorio->find($this->idFormacaoInserida);

        assert($formacao instanceof Formacao);
        // return $formacao instanceof Formacao;
    }
}
