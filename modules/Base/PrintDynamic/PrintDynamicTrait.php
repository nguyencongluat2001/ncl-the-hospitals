<?php

namespace Modules\Base\PrintDynamic;

trait PrintDynamicTrait
{
    public function init($code, $printType)
    {
        $pathCheck = 'public/xml/PrintForm/' . $code . '/' . $code . '.xml';
        $pathCheckTHHC = 'public/xml/PrintForm/MAU_IN_THEO_TTHC/' . $code . '.xml';
        $pathTemplate = 'template/' . $code . '/' . $code;
        if (file_exists(base_path($pathCheck))) {
            $this->pathXml =  $pathCheck;
        } elseif (file_exists(base_path($pathCheckTHHC))) {
            $this->pathXml =  $pathCheckTHHC;
            $pathTemplate = 'template/MAU_IN_THEO_TTHC/' . $code;
        } else {
            $pathCheck = 'public/template/htmlTem.html';
            $this->pathXml =  $pathCheck;
        }
        $this->setTypeExport($printType);
        $this->setFileTemplate(public_path($pathTemplate));
        $this->setNameExport($code);
        $this->setXmlData($this->pathXml);
    }

    /**
     * Replace data for Word
     */
    private function replaceData()
    {
        $this->templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($this->fileTemplate);

        if (isset($this->dataReplace['data']) && sizeof($this->dataReplace['data']) > 0) {
            foreach ($this->dataReplace['data'] as $key => $value) {
                $this->templateProcessor->setValue($key, !empty($value) ? $value : null);
            }
        }
        
        if (isset($this->dataReplace['image']) && sizeof($this->dataReplace['image']) > 0) {
            foreach ($this->dataReplace['image'] as $key => $value) {
                $path = public_path('barcode/' . $value);
                $this->templateProcessor->setImageValue($key, array('path' => $path, 'width' => 300, 'height' => 40, 'ratio' => false));
            }
        }

        if (isset($this->dataReplace['table']) && !empty($this->dataReplace['table']['data'])) {
            foreach ($this->dataReplace['table']['data'] as $key => $valueTables) {
                if (empty($valueTables)) {
                    $this->templateProcessor->cloneBlock($key, 0, true, true);
                    continue;
                }
                $replaces = $valueTables;
                $this->templateProcessor->cloneBlock($key, 0, true, false, $replaces);
            }
        }
        
        if (isset($this->dataReplace['list']) && !empty($this->dataReplace['list']['data'])) {
            foreach ($this->dataReplace['list']['data'] as $key => $valueList) {
                if (empty($valueList)) {
                    $this->templateProcessor->cloneBlock($key, 0, true, true);
                    continue;
                }
                $replaces = $valueList;
                $this->templateProcessor->cloneBlock($key, 0, true, false, $replaces);
            }
        }
    }
}
