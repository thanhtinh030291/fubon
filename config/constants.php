<?php
return[
    'appName' => 'Claim Assistant',
    'appEmail' => env('MAIL_FROM_ADDRESS', 'admin@pacificcross.com.vn'),
    'appLogo'     => "/images/logo.png",
    'formClaimUpload'   => '/public/formClaim/',
    'formClaimStorage'  => '/storage/formClaim/',
    'sortedClaimUpload'   => '/public/sortedClaim/',
    'sotedClaimStorage'  => '/storage/sortedClaim/',

    'avantarUpload' => '/public/avantar/',
    'avantarStorage' => '/storage/avantar/',
    'signarureUpload' => '/public/signarure/',
    'signarureStorage' => '/storage/signarure/',
    'PUSHER_APP_KEY' => env('PUSHER_APP_KEY'),
    'PUSHER_APP_SECRET' => env('PUSHER_APP_SECRET'),
    'PUSHER_APP_ID' => env('PUSHER_APP_ID'),
    'PUSHER_APP_CLUSTER' => env('PUSHER_APP_CLUSTER'),
    'VAPID_PUBLIC_KEY' => env('VAPID_PUBLIC_KEY'),
    'mount_disk_hbs' => 'fubonprod',
    'mount_dlvn' => "http://192.168.0.237/fubonprod/",
    
    'attachUpload'   => '/public/attachEmail/',
    
    'paginator' => [
        'itemPerPage' => '10',
    ],
    'limit_list' => [
        10 => 10,
        20 => 20,
        30 => 30,
        40 => 40,
        50 => 50,
    ],
    'field_select' => [
        'content' => 'Content',
        'amount' => 'Amount',
    ],
    'percentSelect' => 70,

    'statusExport' => [
        'new' => 0,
        'edit' => 1,
        'note_save' => 2,
    ],
    'statusExportText' => [
        '0' => "New",
        '1' => 'Edit',
        '2' => 'Note Save',
    ],

    // 'token_mantic' => 'ABBKcuCHfFxFw_2v_30e1aJG1xUXhd3p',
    // 'url_mantic' => 'https://cathay-etalk-uat.pacificcross.com.vn/',
    // 'url_mantic_api' => 'https://cathay-etalk-uat.pacificcross.com.vn/',
    // 'url_cps' => 'https://cpscathay.pacificcross.com.vn/index.php/',
    // 'api_cps' => 'https://cpscathay.pacificcross.com.vn/index.php/api/',
    // 'client_id' => 'ul-2l44e7vq-3t8m-4fqeaxi-6olcepgxweq',
    // 'client_secret' => 'ukbg95yi3ifcdjiso5rc7kcjqeetxpfv',
    // 'url_hbs' => 'http://192.168.0.221:8030/',
    //test
    'token_mantic' => 'J-r0_8vFCDq71QSNve4wq9ICXy-mFsce',
    'url_mantic' => 'https://uat-etalk.pacificcross.com.vn/',
    'url_mantic_api' => 'https://uat-etalk.pacificcross.com.vn/',
    'url_cps' => 'https://cpscathay.pacificcross.com.vn/index.php/',
    'api_cps' => 'https://cpscathay.pacificcross.com.vn/index.php/api/',
    'client_id' => 'ul-2l44e7vq-3t8m-4fqeaxi-6olcepgxweq',
    'client_secret' => 'ukbg95yi3ifcdjiso5rc7kcjqeetxpfv',
    'url_hbs' => 'http://192.168.0.221:8030/',
    //end test
    'grant_type' => 'client_credentials',
    'url_query_online' => 'https://pcvwebservice.pacificcross.com.vn/bluecross/query_rest.php?id=',
    'claim_result' => [
        1 => 'FULLY PAID' ,
        2 => 'PARTIALLY PAID',
        3 => 'DECLINED' 
    ],
    'statusWorksheet' => [
        0 => 'Mặc Định',
        1 => 'Yêu Cầu Hỗ trợ MD',
        2 => 'Đã Giải Quyết'
    ],

    'notifiRoleMD' => 'Medical',
    'status_mantic_value' => [
        'accepted' => 11,
        'partiallyaccepted' =>12,
        'declined' => 13,
    ],
    'payment_method' =>[
        'TT' => 'Chuyển khoản qua ngân hàng',
        'CA' => 'Nhận tiền mặt tại ngân hàng',
        'CQ' => 'Nhận tiền mặt tại văn phòng',
        'PP' => 'Đóng phí bảo hiểm cho hợp đồng'
    ],
    'debt_type' =>[
        1 => 'nợ được đòi lại',
        2 => 'nợ nhưng đã cấn trừ qua Claim khác',
        3 => 'nợ nhưng khách hàng đã gửi trả lại',
        4 => 'nợ không được đòi lại',
    ],
    'tranfer_status' => [
        10	=> "DELETED",
        20	=> "NEW",
        30	=> "LEADER APPROVAL",
        50	=> "LEADER REJECTED",
        60	=> "MANAGER APPROVAL",
        80	=> "MANAGER REJECTED",
        90	=> "DIRECTOR APPROVAL",
        110	=> "DIRECTOR REJECTED",
        140	=> "DLVN CANCEL",
        145	=> "DLVN PAYPREM",
        150	=> "APPROVED",
        160	=> "SHEET",
        165	=> "SHEET PAYPREM",
        170	=> "SHEET DLVN CANCEL",
        175	=> "SHEET DLVN PAYPREM",
        180	=> "TRANSFERRING",
        185	=> "TRANSFERRING PAYPREM",
        190	=> "TRANSFERRING DLVN CANCEL",
        195	=> "TRANSFERRING DLVN PAYPREM",
        200	=> "TRANSFERRED",
        205	=> "TRANSFERRED PAYPREM",
        210	=> "TRANSFERRED DLVN CANCEL",
        215	=> "TRANSFERRED DLVN PAYPREM",
        216	=> "RETURNED TO CLAIM",
        220	=> "DLVN CLOSED",
    ],
    'claim_type'=>[
        'M' => '(Member)',
        'P' => '(GOP)',
    ],
    'status_request_gop_pay' => [
        'request' => 'Đang đợi xác nhận',
        'accept'  => 'Đã được xác nhận',
        'reject'  => 'Đã bị từ chối',
    ],
    'category_bug' => [
        'Claim' => 15,
        'MCP_Claim' => 16,
        'CS_Claim' => 17
    ],
    'not_provider' => [
        '2095143'
    ],
    'gop_type' =>
    [
        0 => "Accepted: GOP acceptance letter is attached (Chấp nhận: Thư bảo lãnh viện phí được gửi đính kèm)",
        1 => "Client can Pay and Claim (Khách hàng tự thanh toán và gửi hồ sơ yêu cầu bồi thường cho công ty)",
        2 => "Treatment not Covered (Điều trị không được bảo hiểm)"
    ]
];