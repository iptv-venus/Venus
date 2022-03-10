<?php
echo choos('https://app-etslive-2.vidio.com/live/' ,'782')."\n";

function choos($url, $PUK4T){
    $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_URL, 'https://www.vidio.com/live/'.$PUK4T.'/tokens');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    


    $headers = array();
    $headers[] = 'Authority: www.vidio.com';
    $headers[] = 'Content-Length: 0';
    $headers[] = 'Origin: https://www.vidio.com';
    $headers[] = 'X-UA-Device: mobile-smart';
    $headers[] = 'Dnt: 1';
    $headers[] = 'Accept: /';
    $headers[] = 'Sec-Fetch-Site: same-origin';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Referer: https://www.vidio.com/live/782-antv';
    $headers[] = 'Accept-Encoding: gzip, deflate, br';
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
    $headers[] = 'Cookie: ahoy_visitor=99942662-3c2b-49a9-a183-13e8a0b8c37f; _fbp=fb.1.1637755275226.435251630; __auc=eb7057cd17d51d247f93a27ddce; sp=0147d25a-c73c-4b27-9079-68661d4cdaf3; _pbjs_userid_consent_data=3524755945110770; _cc_id=2c54cb23c192f2723218b66ac8c6e4de; __gads=ID=ec4969ba18ad55d3:T=1639374819:S=ALNI_MY0dFEnOIO0qhfFmvKY0-ck9p6dPA; _CEFT=EgNwlgpg7hAmBcIAqB9AUiALgBwIwGYBNAYwGgBPAewHUBVS3AZwHYBHAZUoCAxYAECPmLMA8u1gBOFACEArpgCKAJQC2ALyA===; _lr_env_src_ats=false; _gcl_aw=GCL.1644956421.Cj0KCQiAu62QBhC7ARIsALXijXS35gNiGWJ6-iFRh2-mwvzkqxIfAjBpO79sGmW8az8L4MtRqwYwt0gaAkg_EALw_wcB; _gac_UA-47200845-12=1.1644956424.Cj0KCQiAu62QBhC7ARIsALXijXS35gNiGWJ6-iFRh2-mwvzkqxIfAjBpO79sGmW8az8L4MtRqwYwt0gaAkg_EALw_wcB; _gcl_au=1.1.1207601620.1645537729; _im_vid=01FWGV6W9H6G9JQGER9XBV24FA; _im_uid.3929=b.c2bbae820a303972; g_state={"i_l":1,"i_p":1645545624201}; _gaexp=GAX1.2.Ga1elIhDRpGnhfkUBVAwrQ.19138.0; _gid=GA1.2.1839733770.1645627246; ahoy_visit=5b84400c-e7fc-413f-b343-1b3c35c49c37; _ce.s=v11.rlc~1645778081669~v11slnt~1644563093521~v~6377692417815401ec3e55b380159b8720466feb~vpv~0~ir~1~gtrk.la~kygz5cyw; visitor_fp_id=13df80baffc60ead551248af77fe8446; _sp_ses.5952=*; shva=1; plenty_id=91125942; _dc_gtm_UA-47200845-12=1; _ga=GA1.2.1264095776.1643714116; _vidio_session=RUgrMFZJY2hNRklPY282NllxdGZhTTNuZm56c3g4QjROVTdPcEpUU1hiL1QvdEovR20xKy9FSlkwWDMzYXYrSjdzbk5Ga014ZGV0VHpVU2h4dkFOMVZBNUcweEkvMi9uQzFVNlp1Y0liVVBYcGlvcGg1MHdHYzF0ZzdtZlV6REJ3UEZOcm9YWlQ5SXhYY3ZSMDVNU1dTbG9kS2c0aEc3dHZJOHBXWG9tM0lUU0lCK3V3VUdrcWJzUjVIMnVqWGNvUVZWUnJMdXNMSElLc0tac3cvNUdsQjlzNjhKMXhqT1V3Q3BQdHhPcHBwOEkrNU1Pc1MrWE42UDMrc1VlbjRNS2JBVmVrL2p5ZHZYc2dieWZZMEZUQ2NFUldhbE93dGhuM0c4cFcvNTJndmx0U0xhYk5zV0E2elpCazRNb0dRbk9OUjg5azRlOTY3T29tRG1YY2ZheEpIcmtLK3Q4U3hKYkdHRUZrNDBFRlJMZ3FwQlg1V1hlLzJFVWVzazBkZUNac3I1d01EMUdhd1RPT2lsM3BrY0h0MFM3OFVlcjBtcmRkZEZtbGJ6b0xKU01YdC9ycm41YkhPdDd2ZHRVSDFxckR4aHdFYzYxWVhNL3NLY2dBSlZLUEE3bU0zaUJ2UG1MNzVEellJNkdSUytGajN4eEhMc0VkWU94SnpzdUNqUlVhb0xRUnJubEQ5OEdNbGJMeXQ4VjFBPT0tLWRPbVhrVnZNSG1aNGpUbHJNWWROeHc9PQ==--236b748b9864ccfdd376a9788759cac3907aed0f; _lr_retry_request=true; panoramaId_expiry=1646383855084; panoramaId=8aad72586d3b1e47b18a0c69be1616d5393892c75011d625a6194eea801b2a88; _ga_JBTBSESXVN=GS1.1.1645778076.88.1.1645779061.45; _sp_id.5952=11f7ef33-e752-4eae-887c-29bf30f67564.1637755280.81.1645779061.1645723107.3bbc589b-cd45-48d9-b1a4-c25dc7ae8f79';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
}
 
    $result = json_decode($result, true);
    $token = $result['token'];
    curl_close($ch);
   
    if (preg_match("/@/", $url)) {
        $urlreq = $url.'/master.m3u8?'.$token;
    }else{
        $urlreq = "https://app-etslive-2.vidio.com/live/$PUK4T/master.m3u8?$token";
    }
    // echo $urlreq;
    $ch = curl_init();
 
    curl_setopt($ch, CURLOPT_URL, $urlreq);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
 
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
 
    $headers = array();
    $headers[] = 'Authority: app-etslive-2.vidio.com';
    $headers[] = 'Origin: https://www.vidio.com';
    $headers[] = 'X-UA-Device: mobile-smart';
    $headers[] = 'Dnt: 1';
    $headers[] = 'Accept: /';
    $headers[] = 'Sec-Fetch-Site: same-site';
    $headers[] = 'Sec-Fetch-Mode: cors';
    $headers[] = 'Referer: https://www.vidio.com/';
    $headers[] = 'Accept-Encoding: gzip, deflate, br';
    $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
{    
echo $result;
}
 
    curl_close($ch);
 
   
}
