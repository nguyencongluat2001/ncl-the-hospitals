<?php

namespace Modules\Base\PrintDynamic;

use Modules\Base\Exceptions\ResponseExeption;

class WordPrintDynamic extends PrintDynamic
{
    use PrintDynamicTrait;

    public function export($param)
    {
        $this->setDataReplaceBanGiao($param, 123);

        // $this->replaceData();
        $exportPath = public_path('export') . '/123' . ".docx";
        $this->templateProcessor->saveAs($exportPath);
        $return['url'] =  url("export/123.docx");

        return $return;
    }
}
