<?php
// Mostra eventuali errori (per debug)
// (Ricorda di disattivare display_errors in produzione)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica che il reCAPTCHA sia stato completato
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptchaSecret = '6Lfwq9kqAAAAANRB--wDZfYZfRpxTzvqqf19OHQd';  // Sostituisci con la tua chiave segreta reCAPTCHA
        $recaptchaResponse = $_POST['g-recaptcha-response'];

        // Verifica la risposta del reCAPTCHA con Google
        $recaptchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse
        ];

        // Esegui la richiesta cURL per verificare il reCAPTCHA
        $ch = curl_init($recaptchaVerifyUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        // Decodifica la risposta JSON
        $resultJson = json_decode($result);

        // Verifica se il CAPTCHA è stato superato
        if ($resultJson->success) {
            // Verifica che l'email sia presente e valida
            if (isset($_POST['EMAIL']) && filter_var($_POST['EMAIL'], FILTER_VALIDATE_EMAIL)) {
                $email = $_POST['EMAIL'];
                $data_iscrizioni = date("Y-m-d H:i:s");

                // Configurazione del database (per XAMPP)
                $servername = "localhost";
                $username = "root";      // Default di XAMPP
                $password = "";          // Default di XAMPP
                $dbname = "email";       // Nome del tuo database

                // Crea la connessione
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    echo json_encode([
                        "status" => "error",
                        "message" => "Connessione al database fallita: " . $conn->connect_error
                    ]);
                    exit;
                }

                // Prepara la query per inserire l'email nella tabella "utenti"
                $stmt = $conn->prepare("INSERT INTO utenti (email, data_iscrizioni) VALUES (?, ?)");
                if (!$stmt) {
                    echo json_encode([
                        "status" => "error",
                        "message" => "Errore nella preparazione della query: " . $conn->error
                    ]);
                    exit;
                }
                
                $stmt->bind_param("ss", $email, $data_iscrizioni);

                // Esegue la query
                if ($stmt->execute()){
                    echo json_encode([
                        "status" => "success",
                        "message" => "Iscrizione avvenuta"
                    ]);
                } else {
                    echo json_encode([
                        "status" => "error",
                        "message" => "Errore durante l'iscrizione: " . $stmt->error
                    ]);
                }

                $stmt->close();
                $conn->close();
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "Email non valida"
                ]);
            }
        } else {
            // CAPTCHA non valido
            echo json_encode([
                "status" => "error",
                "message" => "Verifica CAPTCHA fallita. Riprova."
            ]);
        }
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Completa il CAPTCHA prima di inviare."
        ]);
    }
}
?>
