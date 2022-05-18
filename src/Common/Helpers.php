<?php declare(strict_types=1);

if (!function_exists('batch')) {
    /**
     * Batch helper to get use Ylnwqm\HyperfBatch\Batch instance.
     *
     * @return mixed
     */
    function batch()
    {
        return make('Ylnwqm\HyperfBatch\Batch');
    }
}
