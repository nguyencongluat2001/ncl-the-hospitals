<?php

namespace Modules\Base\PrintDynamic;

use Modules\Base\PrintDynamic\WordPrintDynamic;
use Modules\Base\PrintDynamic\PdfPrintDynamic;
use Modules\Base\PrintDynamic\ExcelPrintDynamic;

class PrintDynamicFactory {

    public function create($object){
        if($object == "WordPrintDynamic"){
            return new WordPrintDynamic();
        }else if($object == "HtmlPrintDynamic"){
            return new HtmlPrintDynamic();
        }else if($object == "PdfPrintDynamic"){
            return new PdfPrintDynamic();
        }else if($object == "ExcelPrintDynamic"){
            return new ExcelPrintDynamic();
        }
    }
}
