<?php
namespace App\Models;

class Nilai {
    public static $dataValues = [
        [
            'no_bp' => '505',
            'nama' => 'Dani Ahnaf Falih',
            'nilai' => 90,
            
        ],
        [
            'no_bp' => '505',
            'nama' => 'Dani Ahnaf Falih',
            'nilai' => 80,
            
        ],
        [
            'no_bp' => '505',
            'nama' => 'Dani Ahnaf Falih',
            'nilai' => 70,
            
        ],
        [
            'no_bp' => '212',
            'nama' => 'Eko Budianto',
            'nilai' => 65,
            
        ],
        [
            'no_bp' => '212',
            'nama' => 'Eko Budianto',
            'nilai' => 75,
            
        ],
    ];

    public static function all(){
        return collect(self::$dataValues);
    }

    public static function find($no_bp) {
        $values = static::all();

        return $values->firstWhere('no_bp', $no_bp);
    }
    public static function detail($no_bp) {
        $values = static::all();
        $filtered = $values->where('no_bp', $no_bp);
        $rata = $filtered->avg('nilai');

        return [
            'filter' => $filtered,
            'rata' => $rata,
        ];
    }
    
    
}
?>