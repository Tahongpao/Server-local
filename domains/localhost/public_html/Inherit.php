<?php
class FillesystemExeption extends Exception {
    private $name;
    public function __construct($name){
        parent::__construct($name);
        $this->name = $name;
    }
    public function getName() { return $this->name;}
}
class FileNotFooundException extends FillesystemExeption {}
class FileWriteException extends FillesystemExeption {}
try{
    if (!file_exists("spoon"))
        throw new FileNotFooundException ("spoon");
    }catch (FillesystemExeption $e) {
    echo "Ошишибка при работе с файлом '{$e->getName()}'.<br>";
    } catch (Exception $e){
    echo "Другое исключение: {$e->getDirName()}.<br>";
}
?>