<?php 

$allTeamMates = scandir("scripts");
$countTeamMates = count($allTeamMates);

function script_runner_json($language = '',$user = ''){
    if($language = "python"){
    echo shell_exec("python scripts/$user 'json' ");
    }
}

function script_runner_html($language = '',$user = ''){
    if($language = "python"){
    echo shell_exec("python scripts/$user 'html' ");
    }
}

if(isset($_GET['json'])){
    $languages = ['python','javascript'];
    $countLanguages = count($languages);

    for ($counter=0; $counter <= $countLanguages; $counter++){
        $language = $languages[$counter];
        for ($counter =2; $counter <= $countTeamMates-1; $counter++){
            $currentUser = $allTeamMates[$counter];
            script_runner_json($language,$currentUser);
        }
    }
}else{
    $languages = ['python','javascript'];
    $countLanguages = count($languages);
    for ($counter=0; $counter <= $countLanguages; $counter++){
        $language = $languages[$counter];
        for ($counter =2; $counter <= $countTeamMates-1; $counter++){
            $currentUser = $allTeamMates[$counter];
            script_runner_html($language,$currentUser);
        }
    }
}

?>