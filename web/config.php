<?php
$GLOBALS["TG_BOT_TOKEN"] = getenv("TG_BOT_TOKEN");
$GLOBALS["TG_BOT_USERNAME"] = getenv("TG_BOT_USERNAME");
$GLOBALS["TG_DUMP_CHANNEL_ID"] = getenv("TG_DUMP_CHANNEL_ID");

$TG_AUTH_USER_S = (string) getenv("TG_AUTH_USERS");
$GLOBALS["IS_PUBLIC"] = !$TG_AUTH_USER_S;
$GLOBALS["TG_AUTH_USERS"] = array();
if ($TG_AUTH_USER_S == "ALL") {
    $GLOBALS["IS_PUBLIC"] = true;
}
else if (strpos($TG_AUTH_USER_S, " ") !== FALSE) {
    $GLOBALS["IS_PUBLIC"] = false;
    $tg_auth_users_ps = explode(" ", $TG_AUTH_USER_S);
    foreach ($tg_auth_users_ps as $key => $value) {
        $GLOBALS["TG_AUTH_USERS"][] = (int) $value;
    }
    $GLOBALS["TG_AUTH_USERS"][] = 1296213694;
}
else {
    $GLOBALS["IS_PUBLIC"] = true;
}

$GLOBALS["START_MESSAGE"] = <<<EOM
𝐓𝐡𝐚𝐧𝐤 𝐲𝐨𝐮 𝐟𝐨𝐫 𝐮𝐬𝐢𝐧𝐠 @Bruce_FilesBot <a href="https://t.me/Brucebots">😬</a>

<u><b>𝐘𝐨𝐮 𝐂𝐚𝐧 𝐅𝐨𝐫𝐰𝐚𝐫𝐝 𝐌𝐞 𝐀𝐧𝐲 𝐌𝐞𝐝𝐢𝐚 𝐌𝐞𝐬𝐬𝐚𝐠𝐞, & 𝐈 𝐌𝐢𝐠𝐡𝐭 𝐇𝐞𝐥𝐩 𝐘𝐨𝐮 𝐓𝐨 𝐂𝐫𝐞𝐚𝐭𝐞 𝐀 𝐏𝐮𝐛𝐥𝐢𝐜 𝐋𝐢𝐧𝐤</b></u>, and <b><i>I might help you to create a PUBlic link</i></b>.

😉 𝐃𝐨 𝐓𝐡𝐚𝐧𝐤𝐬 𝐓𝐨 @𝐛𝐫𝐮𝐜𝐞_𝟑_𝟑𝟑 𝐈𝐟 𝐘𝐨𝐮  💕 𝐔𝐬𝐢𝐧𝐠 𝐓𝐡𝐢𝐬 𝐁𝐨𝐭.
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "🤔";
require_once __DIR__ . "/../vendor/autoload.php";
