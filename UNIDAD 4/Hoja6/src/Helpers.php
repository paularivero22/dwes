<?php

namespace App;

class Helpers
{
    public static function validarRequerido(string $valor): bool
    {
        return !empty(trim($valor));
    }

    public static function validarNumerico(string $valor): bool
    {
        return is_numeric($valor);
    }

    public static function validarSubidaFichero(array $archivo): bool
    {
        return isset($archivo['tmp_name']) && is_uploaded_file($archivo['tmp_name']);
    }

    public static function validarFormatoImagen(string $nombre): bool
    {
        $extensionesValidas = ['jpeg', 'jpg', 'png'];
        $extension = pathinfo($nombre, PATHINFO_EXTENSION);
        return in_array(strtolower($extension), $extensionesValidas);
    }

    public static function limpiarTexto(string $entrada): string
    {
        $etiquetasPermitidas = '<a><strong><em><h1><h2><h3><h4><h5><h6><ul><ol><li><blockquote><br><div><span><table><thead><tbody><tr><th><td>';
        return strip_tags($entrada, $etiquetasPermitidas);
    }

    public static function limpiarEntrada(array $data): array
    {
        return array_map([self::class, 'limpiarTexto'], $data);
    }

    public static function redireccionar(string $url): void
    {
        header("Location: $url");
        exit;
    }
}
