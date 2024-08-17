<?php

namespace DataDocumentBackup\Contract;

/**
 * DTO defining a document template
 */
readonly class TemplateReference
{

    /**
     * @param string $type identifying name of the document generation strategy
     * @param string $templatePath (Absolute) path to template file
     * @param array $config optional configuration data
     */
    public function __construct(
        public string $type,
        public string $templatePath,
        public array $config = []
    )  {
    }
}