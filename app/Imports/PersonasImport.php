<?php

namespace App\Imports;

use App\Models\Personas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonasImport implements ToModel, WithHeadingRow
{
    protected $duplicates = []; // Array para guardar DNIs duplicados

    public function model(array $row)
    {
        // Verificar si la persona ya existe
        $personaExistente = Personas::where('dni', $row['dni'])->first();

        if (!$personaExistente) {
            // Si no existe, se crea una nueva persona
            return new Personas([
                'dni' => mb_strtoupper($row['dni'], 'UTF-8'),
                'nombres' => mb_strtoupper($row['nombres'], 'UTF-8'),
                'apellidos' => mb_strtoupper($row['apellidos'], 'UTF-8'),
                'nro_celular' => mb_strtoupper($row['nro_celular'], 'UTF-8'),
                'tipo_persona' => mb_strtoupper($row['tipo_persona'], 'UTF-8'),
            ]);
        } else {
            // Si ya existe, almacenar el DNI duplicado
            $this->duplicates[] = $row['dni'];
            return null; // No intentamos volver a insertar
        }
    }
    public function getDuplicates()
    {
        return $this->duplicates; // Método para acceder a los DNIs duplicados
    }
}