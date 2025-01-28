<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Employee;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class TestDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:test_insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert a test employee record into the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $employee = new Employee();
            $employee->first_name = 'John';
            $employee->save();

            $this->info('Employee record inserted successfully.');
        } catch (\Exception $e) {
            Log::error('Error inserting employee record: ' . $e->getMessage());
            $this->error('Failed to insert employee record.');
            return 1; // Indicate failure
        }

        return 0; // Indicate success
    }
}
