<?php

namespace App\Console\Commands\Admin;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Modify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:modify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '更新oracle序列起始值';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();

        $prefix = env('DB_PREFIX', '');

        $bar = $this->output->createProgressBar(count($tables));

        foreach ($tables as $key => $item) {

            $pk = $this->getPk($item);
            if (empty($pk)) {
                $bar->advance();
                continue;
            }
            $column = strtolower($pk[0]->column_name);

            $table = str_replace($prefix, '', strtolower($item));
            //获取序列实际值
            $index = DB::table($table)->max($column);
            if ($index === null) {
                $bar->advance();
                continue;
            }
            $seq = "{$prefix}{$table}_{$column}_seq";
            if (strlen($seq) > 30) {
                $seq = substr($seq, 0, 30);
            }
            $next      = DB::select("select {$seq}.nextval from dual")[0];
            $nextIndex = $next->nextval;
            //获取当前序列值
            if ($index > $nextIndex) {
                $num = ($index - $nextIndex) + 1;
                $sql = "alter sequence {$seq} increment by $num ";
                DB::update($sql);
                $next = DB::select("select {$seq}.nextval from dual");
                $sql  = "alter sequence {$seq} increment by 1 ";
                DB::update($sql);
            }
            $bar->advance();
        }
        $this->line("\r\nDatabase sequence update successfully.");
    }

    /**
     * 查询主键
     * @param $table
     * @return \Illuminate\Database\Query\Builder
     */
    protected function getPk($table)
    {
        $sql = "select a.constraint_name, a.column_name from user_cons_columns a, user_constraints b where a.constraint_name = b.constraint_name
 and b.constraint_type = 'P' and a.table_name = '{$table}'";
        return DB::select($sql);
    }
}
