<?php

namespace TOE\Simulacion\Client;

use \GuzzleHttp\Client;
use \RCCPM\Simulacion\MX\Client\Configuration;
use \RCCPM\Simulacion\MX\Client\ApiException;
use \RCCPM\Simulacion\MX\Client\ObjectSerializer;

use \RCCPM\Simulacion\MX\Client\Api\RCCPMApi as Instance;
use \RCCPM\Simulacion\MX\Client\Model\Persona;
use \RCCPM\Simulacion\MX\Client\Model\PersonaDomicilio;
use \RCCPM\Simulacion\MX\Client\Model\PersonaPeticion;
use \RCCPM\Simulacion\MX\Client\Model\CatalogoEstados;
use \RCCPM\Simulacion\MX\Client\Model\CatalogoPais;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('the_url');
        $this->x_api_key = "your_x_api_key";
        $client = new Client();
        $this->apiInstance = new Instance($client,$config);
    }
    
    public function testGetRCPM()
    {
        try {

            $request = new PersonaPeticion();
            $persona = new Persona();
            $domicilio = new PersonaDomicilio(); 
            $catalogoEstados = new CatalogoEstados(); 
            $catalogoPais = new CatalogoPais();            

            $domicilio->setDireccion("AV. PASEO DE LA REFORMA 01");
            $domicilio->setColoniaPoblacion("GUERRERO");
            $domicilio->setDelegacionMunicipio("CUAUHTEMOC");
            $domicilio->setCiudad("CIUDAD DE MÉXICO");
            $domicilio->setEstado($catalogoEstados::DF);
            $domicilio->setCP("68370");
            $domicilio->setPais($catalogoPais::MX);

            $persona->setRFC("EDC930121E01");
            $persona->setNombre("RESTAURANTE SA DE CV");
            $persona->setDomicilio($domicilio);

            $request->setFolioOtorgante("1000001");
            $request->setPersona($persona);

            $result = $this->apiInstance->getReporteCreditoPM($this->x_api_key, $request);
            print_r($result);
        } catch (ApiException | Exception $e) {
            echo 'Exception when calling RCCPM_ApiTest->testGetRCPM: ', $e->getMessage(), PHP_EOL;
        }        
    }
}

