<?php
namespace Cnab\Retorno\Cnab240;

class HeaderArquivo extends \Cnab\Format\Linha
{
	public function __construct($codigo_banco)
    {
        $yamlLoad = new \Cnab\Format\YamlLoad($codigo_banco);
        $yamlLoad->load($this, 'cnab240', 'header_arquivo');
	}

	public function getConta()
    {
        if($this->existField('conta'))
            return $this->conta;
        else
            return null;
    }

    public function getContaDac()
    {
        if($this->existField('conta_dv'))
            return $this->conta_dv;
        else
            return null;
    }

    public function getCodigoConvenio() {
        if ($this->existField('codigo_convenio'))
            return $this->codigo_convenio;
        else
            return null;
    }
}
