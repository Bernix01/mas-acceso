<?php
namespace mas_acceso\Usuario\Discapacidades;

use mas_acceso\util\Collector;
use mas_acceso\Usuario\Discapacidades\DiscapacidadClass;

/**
 * Colector de Discapacidades
 */
class CollectorDiscapacidad extends Collector
{

    public function __construct()
    {
        parent::__construct();
    }

  /**
   * Obtiene todos los edificios agregar paginación es un TODO
   * @return mixed array() de EdificioClass o false si hubo algún error.
   */
    public function getAllDiscapacidades()
    {
        return self::read('discapacidad_info', DiscapacidadClass::class);
    }

  /**
   * Obtiene un edificio en específico
   * @param  string $id El id del edificio.
   * @return mixed      El Edificio si se encuentra, caso contrario retorna false.
   */
    public function getDiscapacidades($id)
    {
        return parent::getById($id, 'discapacidad_info', 'd_id', DiscapacidadClass::class);
    }

    /**
     * Agrega un nuevo edificio a la base
     * @param EdificioClass $e El edificio a agregar
     * @return mixed  EdificioClass en caso de éxito, caso contrario, false
     */
    public function addDiscapacidades($e)
    {
        return self::execQuery("INSERT INTO discapacidad_info VALUES(DEFAULT,'".$e->getD_tipo()."')");
    }


    public function updateDiscapacidades($e)
    {
        try {
            self::execQuery("UPDATE discapacidad_info SET d_tipo='".$e->getD_tipo()."' WHERE d_id=".$e->getD_id());
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function deleteDiscapacidades($d_id)
    {
        try {
            self::execQuery("DELETE FROM discapacidad_info WHERE d_id=".$d_id);
            return true;
        } catch (PDOException $e) {

            return false;
        }
    }
}
