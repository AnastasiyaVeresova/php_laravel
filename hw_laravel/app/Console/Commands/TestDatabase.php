<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;
use Illuminate\Support\Facades\Log;

class TestDataSelect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:data-select';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
}
class TestDatabase extends Command
{
    protected $signature = 'database:test_insert2';
    protected $description = 'Insert a test employee record into the database';

    public function handle()
    {
        try {
            $employees = new Employee();
            $employees->first_name = 'John';
            $employees->email = 'John@gmail.com';
            $employees->save();
            $this->info('Employee record inserted successfully.');
        } catch (\Exception $e) {
            Log::error('Error inserting employee record: ' . $e->getMessage());
            $this->error('Failed to insert employee record: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
