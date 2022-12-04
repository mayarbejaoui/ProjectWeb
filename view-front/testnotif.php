<?php
include("pushnotif.php");

	$token = "";
	$Notifier = new WindowsNotification\WindowsNotificationClass();
	$Auth = $Notifier->AuthenticateService();
	if($Auth->response_status == 200)
    {
      $token =  $Auth->access_token;
    }
	
//get a channel


$Options = new WindowsNotification\WNSNotificationOptions();  
$Options->SetX_WNS_REQUESTFORSTATUS(WindowsNotification\X_WNS_RequestForStatus::Request);
$Options->SetContentType(WindowsNotification\Content_Type::Standard);
$Options->SetX_WNS_TYPE(WindowsNotification\X_WNS_Type::Toast);


$MyAuthObject = new WindowsNotification\OAuthObject();
$MyAuthObject->SetToken($token);
$MyAuthObject->SetTokenType("Bearer");

$cha = "https://hk2.notify.windows.com/?token=AwYAAADmQYAB3yQHaPGcVZY4EucWbaOf7kw8%2fOJBOfT7ey1UBrXNNmw7thPh2aaO24H7w%2fYuMqn8GRPNjkTFWrGZwS%2f52cE%2b4i3j2r2KvMdCbweTYEkIejSay1c1cxSTLBhntpo%3d";
$Options = new WindowsNotification\WNSNotificationOptions();
$Options->SetAuthorization($MyAuthObject);
$Notifier->SetOptions($Options);
//Send a ToastText02 with custom sounds
$Notifier->Send($cha,WindowsNotification\TemplateToast::ToastText02("HELLO!","Thanks I love you!!!!",WindowsNotification\TemplateToast::NotificationMail));
echo "Gui thanh cong";
 ?>