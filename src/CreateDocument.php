<?php

namespace DataDocumentBackup\Contract;

readonly class CreateDocument
{
    public function __construct(
        public TemplateReference $templateReference,
        public Data              $data,
        public BackupTarget      $backupTarget,
    )
    {
    }
}