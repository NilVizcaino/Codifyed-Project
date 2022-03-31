<?php
include "connexio.php";

// Classe que utilitza la classe connexió i s'encarrega de la comunicació amb la base de dades
class DB extends Connexio
{
    // Mètdode per insertar l'empresa
    public function insertaUsuari($correu, $contrasenya)
    {
        $stmt = Connexio::connectar()->prepare("INSERT INTO usuaris (correu,contrasenya) VALUES (:c, :co)");
        $stmt->bindParam(":c", $correu, PDO::PARAM_STR);
        $stmt->bindParam(":co", $contrasenya, PDO::PARAM_STR);
        return $stmt->execute();
        $stmt->close();
    }

    // Obtenir Cursos actius
    public function selectUsuari($correu)
    {
        $stmt = Connexio::connectar()->prepare("SELECT correu, contrasenya FROM usuaris WHERE correu=:c");
        $stmt->bindParam(":c", $correu, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }
}
