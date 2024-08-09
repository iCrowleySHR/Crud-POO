<?php

class DateFormatter {
    private static $months = [
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    ];

    public static function format($dateTimeString) {
        $dateTime = DateTime::createFromFormat('Y-m-d H:i:s', $dateTimeString);
        
        if (!$dateTime) {
            $dateTime = DateTime::createFromFormat('Y-m-d', $dateTimeString);
        }

        if (!$dateTime) {
            throw new Exception("Formato de data/hora inválido. Use AAAA-MM-DD ou AAAA-MM-DD HH:MM:SS.");
        }

        $day = $dateTime->format('j'); 
        $month = (int)$dateTime->format('n'); 
        $year = $dateTime->format('Y');

        if (!array_key_exists($month, self::$months)) {
            throw new Exception("Mês inválido.");
        }

        $formattedDate = "{$day} de " . self::$months[$month] . " de {$year}";
        if ($dateTimeString !== $dateTime->format('Y-m-d')) {
            $formattedDate .= " às " . $dateTime->format('H:i:s');
        }

        return $formattedDate;
    }
}


?>
