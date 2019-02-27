<?php

namespace IntelGUA\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;


trait Respuesta
{
    /**
     * Método de devolución de las respuesta de manera satisfactorias
     *
     * @param [type] $data Contenido a devolver en caso de ser satisfactoria
     * @param [type] $code Código de estado basado en la petición
     * @return void
     */
    private function success($data, $code)
    {
        return response()->json($data, $code);
    }

    /**
     * Undocumented function
     *
     * @param [type] $message
     * @param [type] $code
     * @return void
     */
    private function error($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    /**
     * Undocumented function
     *
     * @param Model $instancia
     * @param integer $code
     * @return void
     */
    private function showOne(Model $instancia, $code = 200)
    {
        $this->success(['data' => $instancia], $code);
    }

    /**
     * Undocumented function
     *
     * @param Collection $collection
     * @param integer $code
     * @return void
     */
    private function showAll(Collection $collection, $code = 200)
    {
        $this->success(['data' => $collection], $code);
    }
}
