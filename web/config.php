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
𝐓𝐡𝐚𝐧𝐤 𝐘𝐨𝐮 𝐅𝐨𝐫 𝐉𝐨𝐢𝐧𝐢𝐧𝐠 𝐓𝐇𝐀𝐋𝐀𝐈𝐕𝐀 𝐃𝐔𝐁𝐁𝐄𝐃 𝐌𝐎𝐕𝐈𝐄𝐒 🤩<a href="https://t.me/Brucebots"></a>

<u><b> 𝐇𝐞𝐥𝐥𝐨 𝐈 𝐚𝐦 𝐅𝐢𝐥𝐞 𝐒𝐭𝐨𝐫𝐞 𝐁𝐨𝐭 </b></u>,<b><i>𝐓𝐡𝐢𝐬 𝐁𝐨𝐭 𝐈𝐬 𝐒𝐩𝐞𝐜𝐢𝐚𝐥𝐥𝐲 𝐌𝐚𝐝𝐞 𝐅𝐨𝐫 𝐓𝐇𝐀𝐋𝐀𝐈𝐕𝐀 𝐌𝐎𝐕𝐈𝐄𝐒.</i></b>.

𝐂𝐥𝐢𝐜𝐤 𝐎𝐧 𝐒𝐭𝐚𝐫𝐭 𝐓𝐨 𝐆𝐞𝐭 𝐌𝐨𝐯𝐢𝐞.
EOM;
$GLOBALS["CHECKING_MESSAGE"] = "🌹";
require_once __DIR__ . "/../vendor/autoload.php";
