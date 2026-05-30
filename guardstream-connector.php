<?php
// GuardStream Generic Connector
$api_key = "ВАШИЯТ_КЛЮЧ"; 
$target_dir = __DIR__;

// Стартирай сканирането (пример за търсене на hardcoded ключове)
$results = shell_exec("grep -r 'API_KEY' " . $target_dir);

if ($results) {
    echo "Внимание: Открити са потенциални рискове!";
    // Тук можеш да добавиш код за автоматично изпращане на имейл към теб
} else {
    echo "Сигурност: OK";
}
?>
