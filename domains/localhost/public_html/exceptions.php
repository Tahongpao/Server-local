<?php
/**
 * Created by PhpStorm.
 * User: oneFORall
 * Date: 21.06.2015
 * Time: 23:03
 */
require_once "Interfaces.php";
class FileNotFoundException extends Exception
    implements IFileException {};
class SocketException extends Exception
    implements INetException {};
class WrongPassException extends Exception
    implements IUserException {};
class NetPrinterWriteException extends Exception
    implements IFileException, INetException {};
class SqlConnectException extends Exception
    implements IInternalException, IUserException {};
?>