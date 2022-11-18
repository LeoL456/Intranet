    <link rel="stylesheet" href="https://onyos.fr/css/newcss.css">
    <style>
        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <?php
    /* Date */
    $now = date("d/m/Y-H:i:s");

    /* User Agent */
    $agent = $_SERVER['HTTP_USER_AGENT'];

    /* Device & OS */
    function get_operating_system()
    {
        $u_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $operating_system = 'Unknown Operating System';

        //Get the operating_system name
        if ($u_agent) {
            if (preg_match('/linux/i', $u_agent)) {
                $operating_system = 'Linux';
            } elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
                $operating_system = 'Mac';
            } elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
                $operating_system = 'Windows';
            } elseif (preg_match('/ubuntu/i', $u_agent)) {
                $operating_system = 'Ubuntu';
            } elseif (preg_match('/iphone/i', $u_agent)) {
                $operating_system = 'IPhone';
            } elseif (preg_match('/ipad/i', $u_agent)) {
                $operating_system = 'IPad';
            } elseif (preg_match('/android/i', $u_agent)) {
                $operating_system = 'Android';
            } elseif (preg_match('/webos/i', $u_agent)) {
                $operating_system = 'Mobile';
            }
        } else {
            $operating_system = php_uname('s');
        }

        return $operating_system;
    }
    $os = get_operating_system();

    /* Languages */
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    /* IP */
    $ip = getenv("REMOTE_ADDR");

    $str = file_get_contents('./logs.json');
    $arr = json_decode($str, true);
    $arrne['os'] = $os;
    $arrne['agent'] = $agent;
    $arrne['now'] = $now;
    $arrne['lang'] = $lang;
    $arrne['ip'] = $ip;

    array_push($arr['logs'], $arrne);
    $str = json_encode($arr);

    if (json_decode($str) != null) {
        $file = fopen('./logs.json', 'w');
        fwrite($file, $str);
        fclose($file);
        echo "<div class=\"d-none\">200</div>";
    } else {
        echo "<div class=\"d-none\">201</div>";
    }
    ?>

<div class="center">
    <button class="link link-principal-hero" onclick='history.go(-2)'>Retour</button>
</div>