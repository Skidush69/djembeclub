<?php

return [
    'accepted' => 'Il :attribute deve essere accettato.',
    'active_url' => 'Il :attribute non è un URL valido.',
    'after' => 'Il :attribute deve essere una data successiva a :date.',
    'after_or_equal' => 'Il :attribute deve essere una data successiva o uguale a :date.',
    'alpha' => 'Il :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il :attribute può contenere solo lettere, numeri, trattini e underscore.',
    'alpha_num' => 'Il :attribute può contenere solo lettere e numeri.',
    'array' => 'Il :attribute deve essere un array.',
    'before' => 'Il :attribute deve essere una data precedente a :date.',
    'before_or_equal' => 'Il :attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'numeric' => 'Il :attribute deve essere tra :min e :max.',
        'file' => 'Il :attribute deve essere tra :min e :max kilobyte.',
        'string' => 'Il :attribute deve essere tra :min e :max caratteri.',
        'array' => 'Il :attribute deve avere tra :min e :max elementi.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma del :attribute non corrisponde.',
    'date' => 'Il :attribute non è una data valida.',
    'date_equals' => 'Il :attribute deve essere una data uguale a :date.',
    'date_format' => 'Il :attribute non corrisponde al formato :format.',
    'different' => 'Il :attribute e :other devono essere diversi.',
    'digits' => 'Il :attribute deve essere di :digits cifre.',
    'digits_between' => 'Il :attribute deve essere tra :min e :max cifre.',
    'dimensions' => 'Il :attribute ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => 'Il :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'Il :attribute deve terminare con uno dei seguenti valori: :values.',
    'exists' => 'Il :attribute selezionato non è valido.',
    'file' => 'Il :attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'numeric' => 'Il :attribute deve essere maggiore di :value.',
        'file' => 'Il :attribute deve essere maggiore di :value kilobyte.',
        'string' => 'Il :attribute deve essere maggiore di :value caratteri.',
        'array' => 'Il :attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => 'Il :attribute deve essere maggiore o uguale a :value.',
        'file' => 'Il :attribute deve essere maggiore o uguale a :value kilobyte.',
        'string' => 'Il :attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => 'Il :attribute deve avere :value elementi o più.',
    ],
    'image' => 'Il :attribute deve essere un\'immagine.',
    'in' => 'Il :attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'Il :attribute deve essere un numero intero.',
    'ip' => 'Il :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'Il :attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'Il :attribute deve essere minore di :value.',
        'file' => 'Il :attribute deve essere minore di :value kilobyte.',
        'string' => 'Il :attribute deve essere minore di :value caratteri.',
        'array' => 'Il :attribute deve avere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => 'Il :attribute deve essere minore o uguale a :value.',
        'file' => 'Il :attribute deve essere minore o uguale a :value kilobyte.',
        'string' => 'Il :attribute deve essere minore o uguale a :value caratteri.',
        'array' => 'Il :attribute non deve avere più di :value elementi.',
    ],
    'max' => [
        'numeric' => 'Il :attribute non può essere maggiore di :max.',
        'file' => 'Il :attribute non può essere maggiore di :max kilobyte.',
        'string' => 'Il :attribute non può essere maggiore di :max caratteri.',
        'array' => 'Il :attribute non può avere più di :max elementi.',
    ],
    'mimes' => 'Il :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'Il :attribute deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => 'Il :attribute deve essere almeno :min.',
        'file' => 'Il :attribute deve essere almeno :min kilobyte.',
        'string' => 'Il :attribute deve essere almeno :min caratteri.',
        'array' => 'Il :attribute deve avere almeno :min elementi.',
    ],
    'multiple_of' => 'Il :attribute deve essere un multiplo di :value',
    'not_in' => 'Il :attribute selezionato non è valido.',
    'not_regex' => 'Il formato del :attribute non è valido.',
    'numeric' => 'Il :attribute deve essere un numero.',
    'password' => 'La password è errata.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato del :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando :values sono presenti.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno di :values è presente.',
    'same' => 'Il :attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => 'Il :attribute deve essere :size.',
        'file' => 'Il :attribute deve essere :size kilobyte.',
        'string' => 'Il :attribute deve essere di :size caratteri.',
        'array' => 'Il :attribute deve contenere :size elementi.',
    ],
    'starts_with' => 'Il :attribute deve iniziare con uno dei seguenti valori: :values.',
    'string' => 'Il :attribute deve essere una stringa.',
    'timezone' => 'Il :attribute deve essere una zona valida.',
    'unique' => 'Il :attribute è già stato preso.',
    'uploaded' => 'Il :attribute non è riuscito a caricare.',
    'url' => 'Il formato del :attribute non è valido.',
    'uuid' => 'Il :attribute deve essere un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Qui puoi specificare messaggi di validazione personalizzati per gli attributi usando la
    | convenzione "attribute.rule" per nominare le righe. Questo rende veloce
    | specificare una linea di linguaggio personalizzata per una determinata regola di attributo.
    |
    */

    'custom' => [
        'order_price' => [
            'min' => 'L\'ordine minimo è :min. Si prega di aggiungere qualche altro articolo al carrello',
        ],
        'address_id' => [
            'required' => 'Si prega di selezionare il proprio indirizzo',
        ],
        'stripe_payment_error_action' => [
            'required' => 'Il tentativo di pagamento non è riuscito perché è richiesta un\'azione aggiuntiva prima che possa essere completato',
        ],
        'stripe_payment_failure' => [
            'required' => 'Il tentativo di pagamento non è riuscito per vari altri motivi, come l\'esaurimento dei fondi disponibili. Si prega di controllare i dati forniti.',
        ],
        'paypal_payment_error_action' => [
            'required' => 'Il tentativo di pagamento non è riuscito perché è richiesta un\'azione aggiuntiva prima che possa essere completato',
        ],
        'general_payment_error_action' => [
            'required' => 'Il tentativo di pagamento non è riuscito. Se sei l\'amministratore di sistema, controlla il problema nel fornitore di pagamento.',
        ],
        'link_payment_error_action' => [
            'required' => 'Metodo di pagamento basato su link non trovato',
        ],
        'paypal_payment_approval_missing' => [
            'required' => 'Non siamo riusciti a ottenere il link di pagamento PayPal.',
        ],
        'mollie_error_action' => [
            'required' => 'Errore nel ottenere il link di pagamento.',
        ],
        'paystack_error_action' => [
            'required' => 'Errore nella comunicazione con PayStack',
        ],
        'dinein_table_id' => [
            'required' => 'Scansiona il codice QR e riprova',
        ],
    ],
    'attributes' => [],
];
