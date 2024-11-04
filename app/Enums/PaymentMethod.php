<?php 


namespace App\Enums;


enum PaymentMethod: string
 {


    case CASH = "CASH";

    case UPI = "UPI";

    case CARD = "CARD";


    public static function getValues(): array
    {
        return array_column(PaymentMethod::cases(), 'value');
    }

    
    public static function getKeyValues(): array
    {
        return array_column(PaymentMethod::cases(), 'value','key');
    }

}