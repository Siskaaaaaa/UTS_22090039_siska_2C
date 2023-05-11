<?php
$crul = curl_init();
curl_setopt_array($curl,array(
    CURLOPT_URL =>'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CUELOPT_CUSTOMREQUENT => 'GET',
));
$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response,true);

$response = '<table class="table" width ="100%">
<thead>
<th>kode Barang</th>
<th style="text-align:center">Nama Barang</th>
<th style="text-align:center">Harga Jual</th>
<th Style="text-align:center">Quantity</th>
<thread>
';

foreach($response_array as $resp){
    if(substr($resp['i_name'],0,1)==="L"){
        $oncreen .='<tr>
        <td>' . $resp['i_code'] . '</td>
        <td>' . $resp['i_name'] . '</td>
        <td style="text-align:center">'.'Rp.'.$resp['i_sell'] . '</td>
        <td style="text-align:center">'.$resp['i_qty'] . '</td>
        </tr>';
    }
}
$onscreen.='</table>
echo $oncreen;