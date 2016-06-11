<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute harus diterima.',
    'active_url'           => ':attribute bukan URL yang valid.',
    'after'                => ':attribute harus tanggal setelah :date.',
    'alpha'                => ':attribute hanya dapat berisi huruf.',
    'alpha_dash'           => ':attribute hanya dapat berisi huruf, angka, dan tdana hubung.',
    'alpha_num'            => ':attribute hanya dapat berisi huruf dan angka.',
    'array'                => ':attribute harus array.',
    'before'               => ':attribute harus tanggal sebelum :date.',
    'between'              => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file'    => ':attribute harus antara :min dan :max kilobyte.',
        'string'  => ':attribute harus antara :min dan :max karakter.',
        'array'   => ':attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean'              => 'Bidang :attribute harus benar atau salah.',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => ':attribute bukan tanggal yang valid.',
    'date_format'          => 'Format :attribute tidak sesuai :format.',
    'different'            => ':attribute dan :or harus berbeda.',
    'digits'               => ':attribute harus :digits digit.',
    'digits_between'       => ':attribute harus antara :min dan :max digit.',
    'distinct'             => 'Bidang :attribute memiliki duplikat nilai.',
    'email'                => ':attribute harus alamat email yang valid.',
    'exists'               => ':attribute dipilih tidak valid.',
    'filled'               => 'Bidang :attribute diperlukan.',
    'image'                => ':attribute harus gambar.',
    'in'                   => ':attribute dipilih tidak valid.',
    'in_array'             => 'Bidang :attribute tidak ada di :or.',
    'integer'              => ':attribute harus integer.',
    'ip'                   => ':attribute harus alamat IP yang valid.',
    'json'                 => ':attribute harus menjadi JSON string yang valid.',
    'max'                  => [
        'numeric' => ' :attribute mungkin tidak lebih besar dari :max.',
        'file'    => ' :attribute mungkin tidak lebih besar dari :max kilobyte.',
        'string'  => ' :attribute mungkin tidak lebih besar dari :max karakter.',
        'array'   => ' :attribute mungkin tidak memiliki lebih dari :max item.',
    ],
    'mimes'                => ':attribute harus file tipe: :values.',
    'min'                  => [
        'numeric' => ':attribute harus minimal :min.',
        'file'    => ':attribute harus minimal :min kilobyte.',
        'string'  => ':attribute harus minimal :min karakter.',
        'array'   => ':attribute harus memiliki setidaknya :min item.',
    ],
    'not_in'               => ':attribute dipilih tidak valid.',
    'numeric'              => ':attribute harus berupa angka.',
    'present'              => 'Bidang :attribute harus hadir.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => 'Bidang :attribute is diperlukan.',
    'required_if'          => 'Bidang :attribute diperlukan bila :or :value.',
    'required_unless'      => 'Bidang :attribute diperlukan kecuali :or di :values.',
    'required_with'        => 'Bidang :attribute diperlukan bila :values hadir.',
    'required_with_all'    => 'Bidang :attribute diperlukan bila :values hadir.',
    'required_without'     => 'Bidang :attribute diperlukan bila :values tidak hadir.',
    'required_without_all' => 'Bidang :attribute diperlukan bila tidak ada :values yang hadir.',
    'same'                 => ':attribute dan :or harus sesuai.',
    'size'                 => [
        'numeric' => ':attribute harus :size.',
        'file'    => ':attribute harus :size kilobyte.',
        'string'  => ':attribute harus :size karakter.',
        'array'   => ':attribute harus berisi :size item.',
    ],
    'string'               => ':attribute harus string.',
    'timezone'             => ':attribute harus menjadi zona valid.',
    'unique'               => ':attribute sudah diambil.',
    'url'                  => 'Format :attribute tidak valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
