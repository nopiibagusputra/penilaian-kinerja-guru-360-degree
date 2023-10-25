<?php

namespace App\Imports;

use App\Models\GuruModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class GuruImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function startRow(): int
    {
        return 2;
    }

    public function transformDate($value, $format = 'Y-m-d')
{
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
}

    public function model(array $row)
    {
        return new GuruModel([
            //
            'id_mapel' => $row[0],
            'nama' => $row[1],
            'nip' => $row[2],
            'nomor_seri_karpeg' => $row[3],
            'nuptk' => $row[4],
            'tempat_lahir' => $row[5],
            'tanggal_lahir' => $this->transformDate($row[6]),
            'pangkat' => $row[7],
            'tmt_golongan' => $this->transformDate($row[8]),
            'tmt_guru' => $this->transformDate($row[9]),
            'tmt_sekolah' => $this->transformDate($row[10]),
            'pendidikan' => $row[11],
            'jk' => $row[12],
            'program_keahlian' => $row[13],
            'tanggal_sk' => $this->transformDate($row[14]),
            'status' => $row[15],
            'nomor_sk_penugasan' => $row[16],
        ]);
    }
}
