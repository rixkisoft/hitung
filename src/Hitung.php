<?php

Class Hitung {
	function jumlah($operator, $nilai)
    {
        switch ( $operator ) {
            case '+':
            case '-':
            case '/':
            case '*':
                $operator = $operator;
                break;
            case ':':
                $operator = '/';
                break;
            case 'x':
                $operator = '*';
                break;
            default:
                return "terjadi kesalahan, cek nilai operator anda.";
                break;
        }
        
        if( !is_array( $nilai ) ) { return "nilai yang di masukkan bukan berupa Array."; }
        
        $index = 0;
        $hitung = (float) 0;
        foreach($nilai as $n)
        {
            ++$index;
            if( !is_numeric($n) ) { return "nilai ke ".$index." bukanlah angka."; }
            else {
                if( $operator == '+' ) { $hitung = $hitung + (float) $n; }
                else
                if( ( $operator == '-' && $index == 1 ) ) { $hitung = (float) $n; }
                else
                if( ( $operator == '/' && $index == 1 ) ) { $hitung = (float) $n; }
                else
                if( ( $operator == '*' && $index == 1 ) ) { $hitung = (float) $n; }
                else
                if( $operator == '-' && $index > 1 ) { $hitung = $hitung - (float) $n; }
                else
                if( $operator == '/' && $index > 1 ) { $hitung = $hitung / (float) $n; }
                else
                if( $operator == '*' && $index > 1 ) { $hitung = $hitung * (float) $n; }
            }
        }
        return $hitung;
    }
}

?>