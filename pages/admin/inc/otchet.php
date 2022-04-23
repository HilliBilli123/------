<?
    include "../../../inc/connect.php";
    require_once('../PHPExcel.php');
    // Подключаем класс для вывода данных в формате excel
    require_once('../PHPExcel/Writer/Excel5.php');
    $xls = new PHPExcel();
    $xls->setActiveSheetIndex(0);
    $sheet = $xls->getActiveSheet();
    $sheet->setTitle('Отчет по продажам');
    $title = $_POST["title"];
    $items = $_POST["items1"];
    // $word = new COM("word.application");
    $i = 0;
    foreach($title as $titles){
        $sheet->setCellValueByColumnAndRow($i,1,"$titles");
        $i++;
    }
    $pop = $_POST;
    array_shift($pop);
    $j = 2;
    foreach($pop as $pops){
        $i = 0;
        foreach($pops as $ite){
            $sheet->setCellValueByColumnAndRow($i,$j,"$ite");
            $i++;
        }
        $j++;
    }
    $random = rand();
    // Выводим HTTP-заголовки
    header ( "Expires: Mon, 1 Apr 1974 05:00:00 GMT" );
    header ( "Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT" );
    header ( "Cache-Control: no-cache, must-revalidate" );
    header ( "Pragma: no-cache" );
    header ( "Content-type: application/vnd.ms-excel" );
    header ( "Content-Disposition: attachment; filename=matrix.xls" );

    // Выводим содержимое файла
    $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save('php://output');
