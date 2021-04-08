<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Filesystem\Folder;

/**
 * Upload behavior
 */
class UploadBehavior extends Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function criarDiretorio ( $destino ) {
        
        $diretorio = new Folder( $destino );

        //o path será nulo em algum momento?
        if( is_null( $diretorio->path ) ) {
            
            $diretorio->create( $destino );
       
        }

    }

    public function upload ( array $arquivo, $destino ) {
        
        extract( $arquivo );

        //substituir por ternário
        if( move_uploaded_file($tmp_name, $destino . $name) ) {
    		return $name;
    	} else {
    		return false;
        }
    

    }

    public function singleImageUpload ( array $arquivo, $destino ) {
        
        $this->criarDiretorio($destino);

        return $this->upload($arquivo, $destino);  
    }


}
