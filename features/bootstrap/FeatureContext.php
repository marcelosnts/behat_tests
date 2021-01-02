<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Alura\Armazenamento\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private EntityManagerInterface $em;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When eu tentar criar uma formação com a descrição :arg1
     */
    public function euTentarCriarUmaFormacaoComADescricao($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then eu vou ver a seguinte mensagem de erro :arg1
     */
    public function euVouVerASeguinteMensagemDeErro($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given que estou conectado ao banco de dados
     */
    public function queEstouConectadoAoBancoDeDados()
    {
        $this->em = (new EntityManagerCreator())->getEntityManager();
    }

    /**
     * @When tento criar uma nova formação com a descrição :arg1
     */
    public function tentoCriarUmaNovaFormacaoComADescricao($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then se eu buscar no banco, devo encontar essa formação
     */
    public function seEuBuscarNoBancoDevoEncontarEssaFormacao()
    {
        throw new PendingException();
    }

    /**
     * @Then eu devo ter uma formação criada com a descrição :arg1
     */
    public function euDevoTerUmaFormacaoCriadaComADescricao($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When tento salvar uma nova formação com a descrição :arg1
     */
    public function tentoSalvarUmaNovaFormacaoComADescricao($arg1)
    {
        throw new PendingException();
    }
}
