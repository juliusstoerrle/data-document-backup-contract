<?php

namespace DataDocumentBackup\Contract;

/**
 * DTO
 *
 * *Note:** Keys MUST NOT start with _ (reserved for provider specific template variables).
 */
readonly class Data
{
    public function __construct(
        public array $data
    )  {
    }
}