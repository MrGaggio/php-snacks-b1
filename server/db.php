<?php

$cars = [
    [
        'id' => '1',
        'documento identita' => 'valido',
        'generalita conducente' => 'Mario Pace',
        'dati carta di credito' => '1234567890',
        'dati auto noleggiata' => '500x',
        'data di ritiro' => '10/05/2020',
        'data consegna' => '12/05/2020',
        'tipo assicurazione inclusa' => 'casko',
        'posizione auto parcheggio' => 'l22',
        'clausole obbligatorie' => 'accettate',
        'costo servizio' => '212',
        'informativa eventuali incidenti' => 'ok',
    ],
    [
        'id' => '2',
        'documento identita' => 'valido',
        'generalita conducente' => 'Stefano Ruggiu',
        'dati carta di credito' => '1234567899',
        'dati auto noleggiata' => 'Fiato Punto',
        'data consegna' => '15/09/2020',
        'data di ritiro' => '22/09/2020',
        'tipo assicurazione inclusa' => 'conducente',
        'posizione auto parcheggio' => 'c1',
        'clausole obbligatorie' => 'accettate',
        'costo servizio' => '345',
        'informativa eventuali incidenti' => 'ok',
    ],
    [
        'id' => '3',
        'documento identita' => 'valido',
        'generalita conducente' => 'Pamela Russo',
        'dati carta di credito' => '329847239864978',
        'dati auto noleggiata' => 'Opel Corsa',
        'data consegna' => '1/01/2021',
        'data di ritiro' => '31/01/2021',
        'tipo assicurazione inclusa' => 'casko',
        'posizione auto parcheggio' => 'c27',
        'clausole obbligatorie' => 'accettate',
        'costo servizio' => '1200',
        'informativa eventuali incidenti' => 'ok',
    ],
    
];

header('Content-Type: application/json');
echo json_encode($cars);