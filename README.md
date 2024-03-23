## Classe Televisão
```php
class Televisao implements ControladorInterface{
    private static $status = false;
    
    function ligar(){
        self::$status = true;
        echo "TV ligada\n";
    }

    function desligar(){
        self::$status = false;
        echo "TV desligada\n";
    }

    static function getStatus(){
        return self::$status;
    }

    static function setStatus($status){
        self::$status = $status;
    }
}
```

## Interface Televisão
```php
interface ControladorInterface{
    function ligar();
    function desligar();
    static function getStatus();
    static function setStatus($status);
}
```

## index
```php
include 'ControladorInterface.php';
include 'Televisao.php';

function operarDispositivo(ControladorInterface $disp){
    if($disp::getStatus()){
        $disp->desligar();
        return;
    }
    $disp->ligar();
}

$tv1 = new Televisao();
$tv2 = new Televisao();

operarDispositivo($tv1);
operarDispositivo($tv2);
```
