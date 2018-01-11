<?php
class auto {
    public $message = ' ';
    public $cnn = false;
    public $host = 'eder.lt';
    public $dbname = 'm';
    public $userid = 'test1';
    public $password = 'test1';

    function __construct()
    {
        $this->message = 'Prisijungimas prie DB';
        try {
            $this->cnn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->userid, $this->password);
            $this->cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->message = 'sekmingas';
        } catch (PDOException $e) {
            $this->message .= 'nesekmingas:' . $e->getMessage();
        }
    }

    function getlist()
    {
        $this->message = "Automobilių sąrašo skaitymas iš DB ";
        $cars = [];
        try {
            $sql = "select * from auto order by mas_gamintojas, mas_modelis";
            $res = $this->cnn->query($sql);
            while ($row = $res->fetch()) {
                $cars[] = [
                    'id' => $row['mas_id'],
                    'gamintojas' => $row['mas_gamintojas'],
                    'modelis' => $row['mas_modelis'],
                    'metai' => $row['mas_metai'],
                    'kaina' => $row['mas_kaina'],
                    'pastabos' => $row['mas_pastabos'],
                    'nuotrauka' => $row['mas_nuotrauka'],
                    'mime' => $row['mas_mime']
                ];
            }

        } catch (PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $cars = false;
        }
        return $cars;
    }

    function delete($id){
        $bb = false;

        try {
            $c = $this->cnn->prepare("delete from auto where mas_id = :id");
            $c->execute([':id' => $id]);
            $this->message .= 'Automobilis YRA pasalintas is DB: ';
            $bb = true;

        } catch (PDOException $e) {
            $this->message .= 'Automobilis nera pasalintas is DB ' . $e->getMessage();
        }
        return $bb;
    }
    function insert($mas){
        $ins_tikrinam = false;
        try {
            $sql= ('insert into auto (mas_gamintojas, mas_modelis, mas_metai, mas_kaina, mas_nuotrauka, mas_pastabos, mas_mime) values(?,?,?,?,?,?,?)');
            $res = $this->cnn->prepare($sql);
            $res -> bindValue(1,$mas['gamintojas']);
            $res -> bindValue(2,$mas['modelis']);
            $res -> bindValue(3,$mas['metai']);
            $res -> bindValue(4,$mas['kaina']);
            $res -> bindValue(5,$mas['nuotrauka']);
            $res -> bindValue(6,$mas['pastabos']);
            $res -> bindValue(7,$mas['mime']);

            $res->execute();
            $this->message = "Automobilis idetas is DB";
            $ins_tikrinam = true;

        }
        catch (PDOException $err) {
            $this->message = "Automobilio i DB ideti nepavyko" . $err->getMessage();
        }
        return $ins_tikrinam;
    }
    function get($id){
        $this->message = "Automobilio duomenų skaitymas iš DB ";
        try {
            $sql = "select mas_id, mas_gamintojas, mas_modelis, mas_metai, mas_kaina, mas_pastabos, mas_nuotrauka, mas_mime from auto where mas_id=:id";
            $res = $this->cnn->prepare($sql);
            $res->execute([':id' => $id]);
            if ($row = $res->fetch()) {
                $cars = [
                    'id' => $row['mas_id'],
                    'gamintojas' => $row['mas_gamintojas'],
                    'modelis' => $row['mas_modelis'],
                    'metai' => $row['mas_metai'],
                    'kaina' => $row['mas_kaina'],
                    'pastabos' => $row['mas_pastabos'],
                    'nuotrauka' => $row['mas_nuotrauka'],
                    'mime' => $row['mas_mime']
                ];
                $this->message .= "sėkmingas";
            } else $this->message .= "nesėkmingas: automobilis nerastas";
        }
        catch(PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
            $cars = false;
        }
        return $cars;
    }
    function update($car){
        $ok = false;
        $this->message = "Automobilio duomenų keitimas DB ";
        try {
            $sql = "update auto set mas_gamintojas=?, mas_modelis=?, mas_metai=?, mas_kaina=?, mas_pastabos=?";
            if (isset($car['nuotrauka'])){
                $sql.= ",mas_nuotrauka=?, mas_mime=?";
            }
            $sql.= " where mas_id=?";
            $res = $this->cnn->prepare($sql);
            $res->bindValue(1, $car['gamintojas']);
            $res->bindValue(2, $car['modelis']);
            $res->bindValue(3, $car['metai']);
            $res->bindValue(4, $car['kaina']);
            $res->bindValue(5, $car['pastabos']);
            if (isset($car['nuotrauka'])) {
                $res->bindValue(6, $car['mime']);
                $res->bindValue(7, $car['nuotrauka'], PDO::PARAM_LOB);
            }
            $res->execute();
            $this->message .= "sėkmingas";
            $ok = true;
        } catch (PDOException $e) {
            $this->message .= 'nesėkmingas: ' . $e->getMessage();
        }
        return $ok;
    }
}

$a = new auto();
$b = $a->getList();
