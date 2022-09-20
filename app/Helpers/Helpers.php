<?php

namespace App\Helpers;

class Helpers
{

    /**
     * Retorna um padrão de resposta.
     *
     * @param mixed $data
     * @param int $status
     * @param string $message
     *
     * @author Matheus Eduardo França <matheusefranca1727@gmail.com>
     */
    public static function response($data = null, int $status = 200, string $message = '')
    {
        $response = ['data' => $data, 'message' => $message];
        return response()->json($response, $status);
    }
}
