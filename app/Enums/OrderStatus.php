<?php

namespace App\Enums;

enum OrderStatus: string {

    case ORDER_PLACED = 'ORDER PLACED';

    case PAYMENT_CONFIRMED = 'PAYMENT CONFIRMED';

    case ORDER_PROCESSING = 'ORDER PROCESSING';

    case PACKAGING = 'PACKAGING';

    case SHIPPED = 'SHIPPED';

    case IN_TRANSIT = 'IN TRANSIT';

    case OUT_FOR_DELIVERY = 'OUT FOR DELIVERY';

    case DELIVERED = 'DELIVERED';

    case RETURN_REQUESTED = 'RETURN REQUESTED';

    case RETURNED = 'RETURNED';
    
    case CANCELLED = 'CANCELLED';



    public static function getValue(): array
    {
        return array_column(OrderStatus::cases(), 'value');
    }

    
    public static function getKeyValue(): array
    {
        return array_column(OrderStatus::cases(), 'value', 'key');
    }
    
}
