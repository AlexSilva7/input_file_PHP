
<?php
//http://phpfiddle.org/
  //session_start();

/*
$uploaddir = 'https://api.positus.global/v2/sandbox/whatsapp/numbers/6334ea09-d3fe-4689-8acb-684eb0d0ec78/messages';
*/

$uploaddir = 'imagens\\';

$uploadfile = $uploaddir . basename($_FILES['input_file']['name']);

$arquivo = $_FILES['input_file']['tmp_name'];

$divisor = "\\"."\\";

$arquivo2 = str_replace("\\", $divisor, $arquivo);

print($arquivo);
print($divisor);
print($arquivo2);

echo '<pre>';
if (move_uploaded_file($_FILES['input_file']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
//print_r($_FILES);

print "</pre>";

//print($uploadfile);


$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.positus.global/v2/sandbox/whatsapp/numbers/6334ea09-d3fe-4689-8acb-684eb0d0ec78/messages",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n  \"to\": \"+5521979522952\",\r\n  \"type\": \"text\",\r\n  \"text\": {\r\n      \"body\": \"$arquivo2\"\r\n  }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDRmODJkYWRiZjNmNTljOGM5ZGI5MGM4NDNjNTUzNzU2Yjk3OGI1YmM2MDI1NDEzNWI4MDJkYmFjMzFkYzc5ZWQwYjY4MzUwYTA4YTdjNWQiLCJpYXQiOjE2Mzc0Njc0NTguMDAyNzY3LCJuYmYiOjE2Mzc0Njc0NTguMDAyNzcsImV4cCI6MTY2OTAwMzQ1OC4wMDAyNDgsInN1YiI6IjQ0OTEiLCJzY29wZXMiOltdfQ.SL6nUxEnIAlCcIgh-FliUOmAjUTVL4XISUgnzXiDHzWlw8CSnrbSl2U0SU8314g1UsflXAcR6GlVscbAt_nfhAgn7696cxzWXWH-C4oJAi2Lsn_i8OLTAGVg4wysaHw-E3bbdhRBEZmQUesWReUpGsHnVzAd1rVs_71D0H3X60TMt3ZL_QfF3nBaW8_LGfk034QtgKWlgJb_HWFCeQwMQ8qlFG_m1UgwbR7UjojfZpifJwjMyaZGlBPpTr0cdm_FIxPG7FXh6NXbvECW9afV-QykGvkD4rflt9ljWM73F6vKGvu92PG3AZ-z8ZtbQx8Xi7N9nb5heabi_MpinpUNjiD9VLSmM5BpjxRx5xKWcqk61qmKkgykV8PMEDRUFYnadPctlW2YsUDVsmCdbzAIh0XbDvSV_TTNN-uK9grZTxATJAYKRTsPOgoPZBYqsH1Mm2iFb0iBvNzZYqZkgN40EC1bmbVfO3fogajKKBor58-4bnOIu8TRIXVpWqLppsSBLs2f2TIuF8gsUIdlN5QC6ImNPl5bqc8mFe0GiokQkWaq41cz4IlBegO0zyJu4nSvu2RFNzl5947eVGNihsMKrIi_OPwU3R3Gsrs4nyYw1f0WUmJf22obJZd1iBMb8hS7aYbX3vrlOR8nkYYU-J_RzSxwtaoSAwbMuNBohe6_-a4"
  ),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
  
?>
