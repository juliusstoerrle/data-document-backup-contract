<?php

namespace DataDocumentBackup\Contract;

/**
 * DTO
 */
readonly class BackupTarget
{

    public function __construct(
        public string $filename,
        public string $storageType,
        public array  $storageConfig,
    )  {
    }
}